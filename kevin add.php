<html>
	<head>
	<title>國外旅遊資訊</title>
	</head>
	<center><B><FONT SIZE=10 COLOR=black>歡迎來到國外旅遊資訊網</FONT></b></center>
	<center><IMG SRC=2.jpg width=400 height=200></center>
	<form action="" method="post">
	<br/>
	<br/>
	請選擇航空公司:<br/>
	中華航空<input type="radio" name="uAirline" value="中華航空">
	復興航空<input type="radio" name="uAirline" value="復興航空">
	長榮航空<input type="radio" name="uAirline" value="長榮航空">
	遠東航空<input type="radio" name="uAirline" value="遠東航空">

	<br/>
	<br/>
	請選擇您想要的行程:<br/>
	<select name="country" size="2">
	<option value="繁榮上海五日遊">繁榮上海五日遊</option>
	<option value="韓劇瞎妹之旅">韓劇瞎妹之旅</option>
	<option value="日本古城之旅">日本古城之旅</option>
	</select>
	<br/>
	<br/>
	<br/>
	請輸入您的報名資訊:<br/>
	姓名:<input type="text" name="uName" required><br/>
	手機號碼:<input type="text" name="uPhone" required><br/>
	住址:<input type="text" name="uAddress" required><br/>

	<input type="submit" value="送出">
	<input type="reset" value="清除">

	<?php
		$name=$_POST["uName"];
		$phone=$_POST["uPhone"];
		$address=$_POST["uAddress"];
		$airline=$_POST["uAirline"];
		$country=$_POST["country"];
		//新增資料
		require('include.php');
		$add="INSERT INTO tourist(name,phone,address,airline,country )VALUES ('$name','$phone','$address','$airline','$country')";
		mysqli_query($link,$add);//寫入資料
		$read="SELECT * FROM tourist";//讀取資料
		$readresult = mysqli_query($link, $read);//讀出資料
		echo "<table border='1'>";
		echo "<tr><td>使用者編號</td><td>使用者名字</td><td>使用者電話</td><td>使用者住址</td><td>飛機機種</td><td>使用者選擇行程</td><td>更新資料</td><td>刪除資料</td></tr>";
		while($result=mysqli_fetch_array($readresult)){
			echo "<tr>";
			echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>".$result[5]."</td>";
			echo "<td><a href='update.php?no=".$result[0]."'>更新資料</td>";
			echo "<td><a href='del.php?no=".$result[0]."'>刪除資料</a></td>";
			echo "</tr>";
		}
			echo "</table>";
	?>

	</form>
	

</html>