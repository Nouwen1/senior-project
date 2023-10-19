<?php




include('session_m.php');

if(!isset($login_session)){
header('Location: index.php'); 
}




$cheks = implode("','", $_POST['checkbox']);
$sql = "UPDATE facilities SET `options` = 'DISABLE' WHERE username in ('$cheks')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('Location: delete_facility.php');
$conn->close();


?>