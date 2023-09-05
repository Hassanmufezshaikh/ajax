
<!-- file name is create a //fetchintextbox.php and make db connection -->

<?php 
// Script to connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "ajaxs";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
} else {
    // echo "Connection successful!!";
}
if(isset($_POST['search_post_btn'])){

    $id = $_post['id'];
    $sql =" SLECT * FROM ajaxtable WHERE id='$id'";
    $res= mysqli_query($conn, $sql);
    if($res)
    {
        while($row =mysqli_fetch_array($res)){
            ?>
                    <tr>
                <th class="msg" scope="col">Enter Name</th>
                <td><input type="text" class="textbox" name="name" id="name" value="<?php echo $row['id']  ?>"></td>
                </tr>
                <tr>
                <th class="msg" scope="col">Enter Email ID</th>
                <td><input type="text" class="textbox" name="email" id="email" value="<?php echo $row['email']  ?>"></td>
                </tr>
                <tr>
                <th class="msg" scope="col">Enter Contact</th>
                <td><input type="text" class="textbox" name="contact" id="contact" value="<?php echo $row['contact']  ?>"></td>
                </tr>
                <th></th>
                <td style="text-align: center;">
                <input type="submit" class="btn centered-btn" name="insertbtn" id="insertbtn" value="Add">
            </td>
                </tr>


            <?php
        }

    }
    else{
        echo "DATA NOT FOUND";

    }
}


?>