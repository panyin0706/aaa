<html>
<head>

<script type="text/javascript" src="jquery-1.12.4.min.js"></script>

</head>

<body>

<form>
<input id="uname" type="text"/><p id="name"></p>
</form>

<script>
$("#uname").blur(function(){
$("#name").html("輸入姓名錯誤");	
});


        $(document).ready(function(){
            $('input').focus(function(){
                $(this).css("border-color","#006cff")
            })
        })
		$('input').blur(function(){
        $(this).css("border-color","rgb(253, 13, 77)")
        })






</script>

<style>
        input{
            border-radius: 5px;
            border: 1px solid darkgray;
            height: 25px;
            padding-left: 10px;
            font-family: 微軟正黑體;
            font-size:16px;
            outline:none;
        }
    </style>

<form>
    <label for='nickname'>暱稱</label>：<input type='text' id='nickname' placeholder="輸入暱稱"><br>
    <label for='pwd'>密碼</label>：<input type='text' id='pwd' placeholder="輸入密碼"><br>
    <label for='phone'>電話</label>：<input type='text' id='phone' placeholder="輸入電話"><br>

</form>




</body>
</html>
