<?php
$name=$_POST["NAME"];
if(!empty($name)){
    echo "$name<br>";
}
else{
    echo "Error......First Name is Empty";
    exit;
}
$Name=$_POST["name"];
if (!empty($Name)){
    echo "$Name<br>";
}
else{
    echo "Error......Last Name is Empty";
    exit;
}
$Email=$_POST["add"];
if (!empty($Email)){
    echo "$Email<br>";
}
else{
    echo "Error......Email Adrress is empty";
    exit;
}
$Password=$_POST["pass"];
$cpass=$_POST["Pass"];
if ($Password==""){
    echo "$Password<br>";
}
elseif ($Password!=$cpass){
    echo "Error.... Password does not match<br>";
}
else{
    echo "Registration Successfull";
}
