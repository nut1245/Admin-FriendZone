<?php
$con = mysqli_connect("localhost", "friendszon_admin", "123456", "friendszon_admin") or die("Error: " . mysqli_error($con));

// Count Request User
$sql_users = "SELECT COUNT(*) FROM users WHERE statusUser = 0";
$requestUser = mysqli_query($con, $sql_users);

// Count Success User
$sql_users = "SELECT COUNT(*) FROM users WHERE statusUser = 1";
$successUser = mysqli_query($con, $sql_users);

// Count All ReportPost
$sql_report = "SELECT COUNT(*) FROM report";
$reportPost = mysqli_query($con, $sql_report);

// Count All User
$sql_report = "SELECT COUNT(*) FROM users";
$allUser = mysqli_query($con, $sql_report);

// Count All BlockUser
$sql_BlockUser = "SELECT COUNT(*) FROM users WHERE statusUser = 3";
$blockUser = mysqli_query($con, $sql_BlockUser);

// Count All Post
$sql_Post = "SELECT COUNT(*) FROM post";
$allPost = mysqli_query($con, $sql_Post);

// Count All PostOpen
$sql_PostOpen = "SELECT COUNT(*) FROM post WHERE statusPost = 1";
$PostOpen = mysqli_query($con, $sql_PostOpen);

// Count All PostClose
$sql_PostClose = "SELECT COUNT(*) FROM post WHERE statusPost = 0";
$PostClose = mysqli_query($con, $sql_PostClose);

?>

