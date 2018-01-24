<?php



		$roll = $_REQUEST["roll"];


		$qry = "Select * from Student where roll=$roll";

		$con = new mysqli("localhost","root","","sitdb123");

		$result = $con->query($qry);

		if($result->num_rows >0 )
		{
			echo("<h1 align=center> Student Details</h1>");
			echo("<table align=center border=2 cellspacing=0 cellpadding=5 width=80%>");

				while($row = $result->fetch_object())
				{
						$roll = $row->Roll;
						$name = $row->Name;
						$mks = $row->Marks;
						$area = $row->Area;

						echo("<tr><td>Roll</td><td>$roll</td></tr>");
						echo("<tr><td>Name</td><td>$name</td></tr>");
						echo("<tr><td>Marks</td><td>$mks</td></tr>");
						echo("<tr><td>Area</td><td>$area</td></tr>");

				}
			echo("</table>");
		}
		else
			echo("No data found.");

?>
