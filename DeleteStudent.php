
<?php
include("Menu.php");
?>

<form action=DeleteStudent.php method=GET >

<table width=50% align=center >

<tr><td>Enter Roll : </td><td>            <input type=text name=roll value='<?php   if(isSet($_REQUEST["roll"])) echo($_REQUEST["roll"]);  ?>' /> <input type=submit name=Go value='GO' /></td> </tr>



</table>

</form>




<?php
if(isset($_REQUEST["Delete"]))
{


		$roll = $_REQUEST["roll"];


		$qry = "Delete from Student where roll=$roll ";

		$con = new mysqli("localhost","root","","sitdb123");

		$rows = $con->query($qry);

		if($rows>0)
			echo("<h1 align=center>Data Deleted Successfully.</h1>");
		else
			echo("<h1 align=center>No Data Deleted Successfully.</h1>");




}

else if(isset($_REQUEST["roll"])  ||  isset($_REQUEST["Go"]))
{


		$roll = $_REQUEST["roll"];


		$qry = "Select * from Student where roll=$roll";

		$con = new mysqli("localhost","root","","sitdb123");

		$result = $con->query($qry);

		if($result->num_rows >0 )
		{
			echo("<h1 align=center> Student Details</h1>");
			echo("<form action=DeleteStudent.php method=GET>");
			echo("<table align=center border=2 cellspacing=0 cellpadding=5 width=80%>");

				while($row = $result->fetch_object())
				{
						$roll = $row->Roll;
						$name = $row->Name;
						$mks = $row->Marks;
						$area = $row->Area;




echo("<tr><td>Enter Roll : </td><td>            <input type=text name=roll value='$roll' /> </td> </tr>");
echo("<tr><td>Enter Name : </td><td>            <input type=text name=name value='$name' /> </td> </tr>");
echo("<tr><td>Enter Marks : </td><td>            <input type=text name=mks value='$mks' /> </td> </tr>");
echo("<tr><td>Enter Area : </td><td>            <input type=text name=area value='$area' /> </td> </tr>");
echo("<tr><td colspan=2><input type=Submit name=Delete value='Delete' /> </td> </tr>");



			}
			echo("</table>");
			echo("</form>");
		}
		else
			echo("No data found.");



}



?>

