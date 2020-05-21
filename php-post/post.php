<?php

//Specify the file where you need to save the post data. In this example this file will get overwritter everytime you hit with Post request.
$file = 'post.txt';

// Get the POST DATA
$data = file_get_contents('php://input');

// Write the data into file
file_put_contents($file, $data);

echo "<h2>Your request is successfully accepted</h2>"
?>
