<?php

$serverName="localhost";
$Username="root";
$Password="";
$Name="fitformula";

$conn = mysqli_connect($serverName, $Username, $Password, $Name);

if(!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
