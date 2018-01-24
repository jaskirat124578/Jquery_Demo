<?php
		$roll = $_REQUEST["roll"];
		$name = $_REQUEST["name"];
		$mks = $_REQUEST["mks"];
		$area = $_REQUEST["area"];


		$qry = "Update Student Set Name='$name',Marks=$mks,Area='$area' where roll=$roll ";

		$con = new mysqli("localhost","root","","sitdb123");

		$rows = $con->query($qry);

		if($rows>0)
			echo("<h1 align=center>Data Updated Successfully.</h1>");
		else
			echo("<h1 align=center>No Data Updated Successfully.</h1>");


?>