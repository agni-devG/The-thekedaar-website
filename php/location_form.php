<?php
$e1 = filter_input(INPUT_POST,'name');
$e2 = filter_input(INPUT_POST,'email');
$e3 = filter_input(INPUT_POST,'mobile');
$e4 = filter_input(INPUT_POST,'message');
$e6 = filter_input(INPUT_POST,'location');
if($e4 == null){
    echo "<script type='text/javascript'>alert('Please write a message!' );
    window.location.replace('https://thethekedaar.in/contact-us-2');
     </script>";
}
else{
date_default_timezone_set("Asia/Kolkata"); 
$e5 = date("Y/m/d H:i:s");
$e3 = (int)$e3;
if($e2 == null){
    $e2 = "null@gmail.com";
}
// Create connection
$conn = mysqli_connect("localhost", "thetheke_thekedaar", "Thekedaar@#*789456123", "thetheke_thekedaar_website");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
if(preg_match('/^[0-9]{10}+$/', $e3)) {
 $txt =" Name = ". $e1 . "\r\n Email = " . $e2 . "\r\n Mobile = " . $e3 ."\r\n Location = " . $e6 . "\r\n Message = " . $e4 . "\r\n Date = " . $e5 ;

$headers = [ "MIME-version: 1.0",
             "Contant-type: text/plain; charset=utf-8",
             "From: $e2",
    ];
$headers = implode("\r\n", $headers);
mail('leads@thethekedaar.in',$e1, $txt, $headers); 
     
$sql = "INSERT INTO Location_leads (Name, Mail, Mobile, Message, Date, Location)
VALUES ('$e1', '$e2', '$e3','$e4','$e5','$e6')";
if (mysqli_query($conn, $sql)) {

    echo "<script type='text/javascript'>alert('Your Message Send Successfully!' );
    window.location.replace('https://thethekedaar.in/');
    </script>";
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else{
    echo "<script type='text/javascript'>alert('Please Enter Valid Phone Number!' );
    window.location.replace('https://thethekedaar.in/');
     </script>";
}
mysqli_close($conn);

}
}
?>