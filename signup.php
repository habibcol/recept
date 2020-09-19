<?php
$conn = mysqli_connect('localhost', 'habib', 'Demo123', 'registration');

if(!$conn){
    echo 'Connection Error: ' . mysqli_connect_error();
}

if(isset($_POST['submit'])){
    echo htmlspecialchars($_POST['name']) . '<br>';
    echo htmlspecialchars($_POST['email']) . '<br>';
    echo htmlspecialchars($_POST['pwd']) . '<br>';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    

    $sql = "INSERT INTO accounts(Name,Email,Password) VALUES ('$name', '$email', '$pwd')";
    
    mysqli_query($conn, $sql);
    header('Location: index.php');
}



?>



<!DOCTYPE html>
<html lang="en">

    <?php include('header.php'); ?>


<div class="form-container">
        <h1>Signup!</h1>
        <form action="signup.php" method="post" class="signup">
            <label for="nm">Name</label>
            <input type="text" name="name" id="nm">
            <label for="em">Email</label>
            <input type="text" name="email" id="em">
            <label for="password">Password</label>
            <input type="password" name="pwd" id="password">
            <div class="submit-btn">
                <button type="submit" name="submit" class="btn">submit</button>
            </div>
        </form>
        
    </div>
    <?php include('footer.php'); ?>
    

</body>
</html>