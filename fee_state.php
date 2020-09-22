<?php
$conn = mysqli_connect('localhost', 'habib', 'Demo123', 'fee');

if(!$conn){
    echo 'Connection Error: ' . mysqli_connect_error();
}
$sql = "SELECT * FROM collection";
$result = mysqli_query($conn, $sql);
print_r($result);
?>


<!DOCTYPE html>
<html lang="en">

    <?php include('header.php'); ?>

    <!-- <?php echo $result; ?> -->
    <?php include('footer.php'); ?>
    
</body>
</html>