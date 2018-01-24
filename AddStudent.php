
<?php
include("Menu.php");
?>


<form action=AddStudent.php method=GET >

<table width=50% align=center >


<tr><td>Enter Roll : </td><td>            <input type=text name=roll value='<?php   if(isSet($_REQUEST["roll"])) echo($_REQUEST["roll"]);  ?>' /> </td> </tr>

<tr><td>Enter Name : </td><td>            <input type=text name=name value='<?php   if(isSet($_REQUEST["name"])) echo($_REQUEST["name"]);  ?>' /> </td> </tr>

<tr><td>Enter Marks : </td><td>            <input type=text name=mks value='<?php   if(isSet($_REQUEST["mks"])) echo($_REQUEST["mks"]);  ?>' /> </td> </tr>

<tr><td>Enter Area : </td><td>            <input type=text name=area value='<?php   if(isSet($_REQUEST["area"])) echo($_REQUEST["area"]);  ?>' /> </td> </tr>

<tr><td colspan=2><input type=submit name=Add value='Add Student' /></td></tr>

</table>

</form>


<?php
if(isset($_REQUEST["Add"]))
{


		$roll = $_REQUEST["roll"];
		$name = $_REQUEST["name"];
		$mks = $_REQUEST["mks"];
		$area = $_REQUEST["area"];


		$qry = "Insert into Student values($roll,'$name',$mks,'$area');";

		$con = new mysqli("localhost","root","","sitdb123");

		$rows = $con->query($qry);

		if($rows>0)
			echo("Data inserted successfully.");
		else
			echo("No data inserted successfully.");





}

?>