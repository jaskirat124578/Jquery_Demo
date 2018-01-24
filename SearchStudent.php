<html>
<head>
<script type="text/javascript" src="jquery-1.9.0.min.js" ></script>

<script>

function SearchStudent()
{

	var roll= document.getElementById("roll").value;

		$('#auto').hide();
		$('#auto').load("Searchstudent1.php?roll="+roll).fadeIn("slow");


}

</script>


</head>




<body>



<?php
include("Menu.php");
?>



<table width=50% align=center >


<tr><td>Enter Roll : </td><td>            <input type=text name=roll id=roll value='<?php   if(isSet($_REQUEST["roll"])) echo($_REQUEST["roll"]);  ?>' /> </td> </tr>

<tr><td colspan=2><input type=button name=Search value='Search Student' onClick=SearchStudent() /></td></tr>

</table>



<div id="auto" ></div>


</body>
</html>