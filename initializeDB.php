<?php?

require 'init.php';



// Create SQL query string to create category table
$catgTbl = "
CREATE TABLE IF NOT EXISTS Categories (

  catgID INT(4) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(25) NOT NULL,
  parent INT(4) UNSIGNED
);";

// Create SQL query string to create tasks table
$taskTbl = "
CREATE TABLE IF NOT EXISTS Tasks (
  taskID INT(4) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  description VARCHAR(250) NOT NULL,
  date_due VARCHAR(10) NOT NULL,
  category INT(4) UNSIGNED,
  FOREIGN KEY (category) REFERENCES Categories(catgID),
  priority INT(1) CHECK(priority>=1 AND priority<=4) UNSIGNED,
  status INT(1) UNSIGNED NOT NULL CHECK(status>=0 AND status<=1),
  date_complete VARCHAR(10) NOT NULL
);";



// Create categories table
if (mysqli_query($con, $catgTbl)) {
  // Table created successfully
  echo "Category table successfully created in database with 3 columns<br><br>";

} else {
  // Table creation failed
  echo "ERROR! Category table could not be created:<br>" . my_sqli_error($con) . "<br><br>";
}

// Create tasks table
if (mysqli_query($con, $catgTbl)) {
  // Table created successfully
  echo "Tasks table successfully created in database with 3 columns<br><br>";

} else {
  // Table tasks failed
  echo "ERROR! Tasks table could not be created:<br>" . my_sqli_error($con) . "<br><br>";
}



// Close connection to DB
if (mysqli_close($con)) {

  echo "Connection to database successfully closed";

}

>
