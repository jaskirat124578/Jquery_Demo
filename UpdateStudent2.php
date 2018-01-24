<?php

		$roll = $_REQUEST["roll"];


		$qry = "Select * from Student where roll=$roll";

		$con = new mysqli("localhost","root","","sitdb123");

		$result = $con->query($qry);

		if($result->num_rows >0 )
		{
			echo("<h1 align=center> Student Details</h1>");
			echo("<form action=UpdateStudent.php method=GET>");
			echo("<table align=center border=2 cellspacing=0 cellpadding=5 width=80%>");

				if($row = $result->fetch_object())
				{
						$roll = $row->Roll;
						$name = $row->Name;
						$mks = $row->Marks;
						$area = $row->Area;

echo("<tr><td>Enter Roll : </td><td>            <input type=text name=roll value='$roll' id=roll /> </td> </tr>");
echo("<tr><td>Enter Name : </td><td>            <input type=text name=name value='$name' id=name /> </td> </tr>");
echo("<tr><td>Enter Marks : </td><td>            <input type=text name=mks value='$mks'  id=mks /> </td> </tr>");
echo("<tr><td>Enter Area : </td><td>            <input type=text name=area value='$area' id=area /> </td> </tr>");
echo("<tr><td colspan=2><input type=button name=Update value='Update' onClick=UpdateStudent1() /> </td> </tr>");



			}
			echo("</table>");
			echo("</form>");
		}
		else
			echo("No data found.");


?>