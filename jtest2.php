<html>
<head>

<script type="text/javascript" src="jquery-1.12.4.min.js"></script>

</head>

<body>

<div id="chanyeol" style="color:green;display:none">我是燦燦</div>
<h3 id="message"></h3>
<img id="baby" src="http://i.ksd-i.com/s/610*500_86400_881e87ef36acbce17641954c34b9de97/static.koreastardaily.com/2015-04-24/60798-319809.jpg" width="100" height="100">

<script>
$(document).ready(function(){

	$("#baby").click(function(){
	$("#message").load("chanyeol.txt");	
	})
})






$("#baby").click(
	function(){
	$("div").html("<p>hihi~</p>");
}
);
//點擊後 html將取代原本的話

$("#baby").click(
	function(){
	$("div").prepend("<p>傻眼</p>");
}
);




$("#baby").mouseenter(
	function(){
	$("#chanyeol").show(500);
}
);
$("#baby").mouseleave(
	function(){
	$("#chanyeol").hide(500);
}
);
$("#baby").click(
	function(){
	$("#chanyeol").animate({
		width:"70%",
		fontsize:"3em",
		color:red
	},500);
}
);
</script>


</body>
</html>
