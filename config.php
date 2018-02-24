<?php 

require "Facebook/autoload.php";
require "functions.php";

if(!session_id()) {
    session_start();
}

define("SITE_URL" , "http://mysite.com"); // Replace with the URL of your website 
define("APP_ID" , "MY_APP_ID"); // Replace with the Facebook app id
define("APP_SECRET" , "MY_APP_SECRET"); // Replace with the Facebook secret key


define("DATABASE_HOST" , "MY_DB_HOST"); // Replace with the database host. Usually its localhost
define("DATABASE_NAME" , "MY_DATABASE_NAME"); //Replace with the database name
define("DATABASE_USER" , "MY_DATABASE_USER"); //Replace with the database username
define("DATABASE_PASS" , "MY_DATABASE_PASSWORD"); //Repalce wit the database password



$fb = new \Facebook\Facebook([
  'app_id' => APP_ID,
  'app_secret' => APP_SECRET,
  'default_graph_version' => 'v2.10',
  //'default_access_token' => '{access-token}', // optional
]);


$con = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

if($con->connect_errno) {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    exit;
}



