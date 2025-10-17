<?php
$e1 = filter_input(INPUT_POST,'name');
$e2 = filter_input(INPUT_POST,'email');
$e3 = filter_input(INPUT_POST,'mobile');
$e4 = filter_input(INPUT_POST,'message');
if($e4 == null){
    echo "<script type='text/javascript'>alert('Please write a message!' );
    window.location.replace('https://thethekedaar.in/contact-us-2');
     </script>";
}
else{
$e5 = date("Y/m/d");
$e3 = (int)$e3;
// Create connection
$conn = mysqli_connect("localhost", "thetheke_thekedaar", "Thekedaar@#*789456123", "thetheke_thekedaar_website");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
if(preg_match('/^[0-9]{10}+$/', $e3)) {
 $txt =" Name = ". $e1 . "\r\n Email = " . $e2 . "\r\n Mobile = " . $e3 . "\r\n Message = " . $e4 . "\r\n Date = " . $e5 ;
$headers = [ "MIME-version: 1.0",
             "Contant-type: text/plain; charset=utf-8",
             "From: $e2",
    ];
$headers = implode("\r\n", $headers);
mail('leads@thethekedaar.in',$e1, $txt, $headers); 
     

$sql = "INSERT INTO Customer (Name, Mail, Subject, Message, Date)
VALUES ('$e1', '$e2', '$e3','$e4','$e5')";
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
    window.location.replace('https://thethekedaar.in/contact-us-2');
     </script>";
}
mysqli_close($conn);

}
}
?>