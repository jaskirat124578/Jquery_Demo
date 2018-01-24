

<?php
include("Menu.php");
?>


<?php


		$qry = "Select * from Student";

		$con = new mysqli("localhost","root","","sitdb123");

		$result = $con->query($qry);

		if($result->num_rows >0 )
		{
			echo("<h1 align=center> Student Details</h1>");
			echo("<table align=center border=2 cellspacing=0 cellpadding=5 width=80%>");
			echo("<tr><td>Roll</td><td>Name</td><td>Marks</td><td>Area</td><td>Edit</td><td>Delete</td></tr>");
				while($row = $result->fetch_object())
				{
						$roll = $row->Roll;
						$name = $row->Name;
						$mks = $row->Marks;
						$area = $row->Area;

						echo("<tr>");
							echo("<td>$roll</td>");
							echo("<td>$name</td>");
							echo("<td>$mks</td>");
							echo("<td>$area</td>");
							echo("<td><a href=UpdateStudent.php?roll=$roll>Edit</a></td>");
							echo("<td><a href=DeleteStudent.php?roll=$roll>Delete</a></td>");
						echo("</tr>");
				}
			echo("</table>");
		}
		else
			echo("No data found.");







?>

