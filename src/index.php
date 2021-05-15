<?php

echo "Hello from EMSI";
echo "<br> <br>";


$mysqli = new mysqli("db", "root", "example", "belcaidGroup");

$sql = 'SELECT * FROM users';

if ($result = $mysqli->query($sql)) {
	    while ($data = $result->fetch_object()) {
		            $users[] = $data;
			        }
}

foreach ($users as $user) {
	    echo "<br>";
	        echo $user->name . " " . $user->classe;
	        echo "<br>";
}
