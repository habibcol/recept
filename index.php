<?php
$conn = mysqli_connect('localhost', 'habib', 'Demo123', 'fee');

if(!$conn){
    echo 'Connection Error: ' . mysqli_connect_error();
}
$query = "SELECT * FROM collection";


if ($result=mysqli_query($conn,$query)){
    $rowcount=mysqli_num_rows($result);
    // printf("Result set has %d rows.\n",$rowcount);
    // echo $rowcount;
    $receipt = $rowcount +1000;
    // echo $receipt;
    // // Free result set
    mysqli_free_result($result);
}




if(isset($_POST['submit'])){
    

    
    // echo htmlspecialchars($_POST['name']) . '<br>';
    // echo htmlspecialchars($_POST['batch']) . '<br>';
    // echo htmlspecialchars($_POST['month']) . '<br>';
    // echo htmlspecialchars($_POST['tk']) . '<br>';

    $name = $_POST['name'];
    $batch = $_POST['batch'];
    $month = $_POST['month'];
    $tk = $_POST['tk'];
    $comment = $_POST['comment'];
    

    $sql = "INSERT INTO collection( Name, Batch, Month, Taka, comment) VALUES ('$name', '$batch', '$month', '$tk', '$comment')";
    
    mysqli_query($conn, $sql);
}

    date_default_timezone_set("Asia/Dhaka");
    $errorName =  "" ;
    $errorMonth =  "" ;
    $errorTk =  "" ;
    $print = "";
    if(isset($_POST['submit'])){

        session_start();
        $_SESSION['name'] = $_POST['name'];
        $name =  $_SESSION['name'];
        $_SESSION['batch'] = $_POST['batch'];
        $batch =  $_SESSION['batch'];
        $_SESSION['month'] = $_POST['month'];
        $month =  $_SESSION['month'];
        $_SESSION['tk'] = $_POST['tk'];
        $tk =  $_SESSION['tk'];

        

        if(strlen($_POST['name']) ==0){
            $errorName = "<p class=" . "red-text" . ">Name can't be blank!</p>" ;
        }elseif(strlen($_POST['month']) ==0){
            $errorMonth = "<p class=" . "red-text" . ">Month can't be blank!</p>" ;
        }elseif(strlen($_POST['tk']) ==0){
            $errorTk = "<p class=" . "red-text" . ">Taka can't be blank!</p>" ;
        }else{
            $print = '<input  type="submit" name="print" class="btn print" value="print" onclick="window.print()">';
        }
    //    echo $name;

        
    }
 
?>



<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

        <div class="form-wrap">
                <h2>Fee Collection Form</h2>
                <form action="index.php" class="main-form" method="POST" id="fee">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <?php echo $errorName;?>
                    <label for="batch">Batch:</label>
                    <select name="batch" id="batch" >
                        <option value="STT 4-5">STT 4-5</option>
                        <option value="SMW 4-5">SMW 4-5</option>
                        <option value="STT 3-4">STT 3-4</option>
                        <option value="STT 8-9">STT 8-9</option>
                    </select>
                    <label for="month">Month</label>
                    <input type="text" name="month" id="month">
                    <?php echo $errorMonth;?>
                    <label for="tk">Tk</label>
                    <input type="number" name="tk" id="tk">
                    <?php echo $errorTk;?>
                    <label for="comment">Comment</label>
                    <textarea name="comment" form="fee"></textarea>
                    <div class="btn-div">
                        <input  type="submit" name="submit" class="btn">  
                        <?php echo $print; ?>
                    </div>
                    
            </div>
        </div>

        <!-- onclick="window.print()" -->


        <div class="printable">
            <!-- Student Copy -->
            <div class="student-copy">
            <h2>Kobir Tutorial</h2>
            <div class="address">
                <p>South Side of Taz tower, Edward<br> College Gate, Pabna</p>
                <p>Mobile:01713735104</p>
            </div>
            <p><b> Fees Receipt</b></p>
            <p><b>Student Copy</b></p>
            <table class="table-info">
                <tr>
                    <td>Date: <?php echo date("d-m-Y h:ia"); ?></td>
                    <td>Receipt No:<?php echo $receipt; ?> </td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td>Batch:</td>
                    <td><?php echo $batch; ?></td>
                </tr>
                <tr>
                    <td>Month:</td>
                    <td><?php echo $month; ?></td>
                </tr>
                <tr>
                    <td>Tuition Fee:</td>
                    <td>৳<?php echo $tk; ?>.00</td>
                </tr>
            </table>
            <div class="foot">
                <br>
                <br>
                <hr>
                <p>signature</p>
                
            </div>
            <div class="copyright">
                <p>Developed By: <br> Md. Habibur Rahman Habib &copy;2020 </p>
            </div>
            </div>

            <!-- Office Copy -->

            <div class="ofice-copy">
                <p>✂---------------------------</p>
                <h2>Kobir Tutorial</h2>
                <div class="address">
                    <p>South Side of Taz tower, Edward<br> College Gate, Pabna</p>
                    <p>Mobile:01713735104</p>
                </div>
            <p><b> Fees Receipt</b></p>
            <p><b>Office Copy</b></p>
            <table class="table-info">
                <tr>
                    <td>Date:<?php echo date("d-m-Y h:ia"); ?></td>
                    <td>Receipt No: <?php echo $receipt; ?></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td>Batch:</td>
                    <td><?php echo $batch; ?></td>
                </tr>
                <tr>
                    <td>Month:</td>
                    <td><?php echo $month; ?></td>
                </tr>
                <tr>
                    <td>Tuition Fee:</td>
                    <td>৳<?php echo $tk; ?>.00</td>
                </tr>
            </table>
            <div class="copyright">
                <p>Developed By: <br> Md. Habibur Rahman Habib &copy;2020 </p>
            </div>
            
            </div>

        </div>
        
        <?php include('footer.php'); ?>   
        
        
</html>


