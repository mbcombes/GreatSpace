
<?php
if (!isset($_POST['name'])) {
    echo "error; you need to submit the form!";
}
$adults=$_POST['book_room_adults'];
$children=$_POST['book_room_children'];
$start=$_POST['book_date_from'];
$end=$_POST['book_date_to'];
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$content= $_POST['message'];
echo "test";
if (empty($name)||empty($visitor_email)) {
    echo "Name and email are mandatory!";
    exit;
}
$message="test test \r\n";
$email_from = "mbcombes@hotmail.com";
$subject = "New Form submission";
$email_message = "You have recieved a new message from the user $name. \r\n".
    "Number of Guests: Adults: $adults Children: $children \r\n".
    "Dates, Check-in: $start Check-Out: $end \r\n".
    "email address: $visitor_email \r\n".
    "Here is the message:\n $content \r\n".
$to = "mbcombes@hotmail.com";
$headers = "From: $email_from \r\n";

//Send the email
mail($to,$subject,$message,$headers);
echo "after mail $to"
// header('Location: http://' . $_SERVER['http_host'] . '/index.html', true, 303)
?>

