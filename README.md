# php-Log-in-Log-out-Demo

This Demo illustrate the process of store and retrive data from mysql database

# index.html

Here you can see the login page if you are new User then create an account with your credentials

# register.html

Here you can create your account

# database.php

here you can configure with your mysql
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"registration");
last parameter nothing but database name 
here i create table with name ==> user
attributes  1)name varchar 10
            2)pass varchar 10
            
# validation.php

based  on user input credentials it checks in user table data if it exits it return true then he got Access or else Not Authenticated

# registration.php

this page is used to store data in to user table 

if you have query can contact

# somunadhm26@gmail.com
