<html>


<head>
<script type="text/javascript" src="jquery-1.9.0.min.js" ></script>


<script>

function UpdateStudent1()
{

	var roll= document.getElementById("roll").value;
	var name= document.getElementById("name").value;
	var mks= document.getElementById("mks").value;
	var area= document.getElementById("area").value;

		$('#msg').hide();
		$('#msg').load("UpdateStudent1.php?roll="+roll+"&name="+name+"&mks="+mks+"&area="+area).fadeIn("slow");


}

function UpdateStudent2()
{



	var roll= document.getElementById("roll").value;

		$('#auto').hide();
		$('#auto').load("UpdateStudent2.php?roll="+roll).fadeIn("slow");


}
</script>

</head>

<body>

<?php
include("Menu.php");
?>



<table width=50% align=center >

<tr><td>Enter Roll : </td><td>            <input type=text name=roll  id=roll />
<input type=button name=Go value='GO' onClick=UpdateStudent2() /></td> </tr>

</table>


<div id=auto></div>
<div id=msg></div>

</body>
</html>



