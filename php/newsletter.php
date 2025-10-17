
<?php
$e1 = filter_input(INPUT_POST,'email');
?>
<?php
if($e1 == null){
    echo "<script type='text/javascript'>alert('Please enter mail id!' );
    window.location.replace('https://thethekedaar.in/');
     </script>";
}
else{
// Create connection
$conn = mysqli_connect("localhost", "thetheke_thekedaar", "Thekedaar@#*789456123", "thetheke_thekedaar_website");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql1 = "SELECT Mail FROM news_letter where Mail='$e1'";
$result = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $mail= $row["Mail"];
  }
}
if($mail != null){
    echo "<script type='text/javascript'>alert('Sorry this email id already exist!' );
    window.location.replace('https://thethekedaar.in/');
     </script>";

} 
else{
    $to=$e1; //change to ur mail address
    $subject="Welcome to Thethekedaar";
    $message =  file_get_contents('welcome.html'); // Your Template        
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers .= "From: info@thethekedaar.in"; 
    mail($to, $subject, $message, $headers); 

date_default_timezone_set('Asia/Kolkata');
$e5 = date('d-m-Y H:i:sa');
$sql = "INSERT INTO news_letter (Mail, Date)
VALUES ('$e1','$e5')";
if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Thank you for Subscribe our Newsletter!' );
       window.location.replace('https://thethekedaar.in/');
       </script>";
       
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
}
?>

