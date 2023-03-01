<?php

include('config.php');

$Id = $_POST['Id'];

$data = $_POST['data'];

mysqli_query($connect, "UPDATE list SET data='$data' WHERE Id='$Id'");