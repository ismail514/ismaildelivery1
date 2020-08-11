 <?php
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if ($text == "") {
    $response = "CON what would you want to check \n";
    $response .=  "1. ismail delivery \n";
    $response  .=  "2. kahlid delivery ";

} else if ($text == "1") {

    $response = "CON choose delivery information to view \n";
    $response .= "1. Account number  \n";
    $response .= "2. Account Balance to contenu ";
} else if ($text == "2") {

    $response = "END your phone number is " .$phoneNumber;

} else if ($text == "1*1") {
    $accountNumber = "Acc101";
    $response = "END your account number with ismail is " .$accountNumber;



} else if ($text == "1*2"){
    $balance = " KES 500bir ";
    $response = " END your balance with ismail is " .$balance;

}

header('content-type; text/plain');
echo $response;

 ?>