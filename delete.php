<?php
$con=mysqli_connect('localhost','root','','youtube');
$id=$_POST['id'];
$sql="delete from todo_list where id=$id";
mysqli_query($con,$sql);
?>