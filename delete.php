<?php

include('config.php');

$Id = $_GET['Id'];

mysqli_query($connect, "DELETE FROM list WHERE Id='$Id'");

header("location:index.php");