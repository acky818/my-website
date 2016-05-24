<?php

	$link = mysqli_connect("localhost", "akimi", "alfredakimi", "akimi_test");

	if(mysqli_connect_error()){

		echo "Could not connect to databese";
	}

	// $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Beth', 'beth@gmail.com', 'apples')";

	// $query = "UPDATE `users` SET `password` = 'testtest' WHERE `id` = 6 LIMIT 1";

	//mysqli_query($link, $query);

	$name = "Ian O'Neil";

	$query = "SELECT name FROM users WHERE name = '".mysqli_real_escape_string($link, $name)."'";

	if($result = mysqli_query($link, $query)){

		while($row = mysqli_fetch_array($result)){

			print_r($row);
		}

	} else {

		echo "It failed";
	}

?>