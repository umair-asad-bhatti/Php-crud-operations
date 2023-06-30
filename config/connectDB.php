<?php
    
    $dbhost="localhost";
    $dbport="5432";
    $dbuser="postgres";
    $dbpassword="1234";
    $dbname="AddressBook";
    $connection=pg_connect("host=$dbhost port=$dbport dbname=$dbname user=$dbuser password=$dbpassword");
    if(!$connection)
        die("cannot connect");

?>