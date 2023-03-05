<?php



$errorMSG = "";



// NAME

if (empty($_POST["name"])) {

    $errorMSG = "Nombre obligatorio ";

} else {

    $name = $_POST["name"];

}



// EMAIL

if (empty($_POST["email"])) {

    $errorMSG .= "Correo obligatorio ";

} else {

    $email = $_POST["email"];

}



// MSG Guest

if (empty($_POST["guest"])) {

    $errorMSG .= "Asunto obligatorio ";

} else {

    $guest = $_POST["guest"];

}





// MSG Event

if (empty($_POST["event"])) {

    $errorMSG .= "Asunto obligatorio ";

} else {

    $event = $_POST["event"];

}





// MESSAGE

if (empty($_POST["message"])) {

    $errorMSG .= "SE requiere un mensaje ";

} else {

    $message = $_POST["message"];

}





$EmailTo = "";

$Subject = "Nuevo mensaje desde la pagina web";



// prepare email body text

$Body = "";

$Body .= "Name: ";

$Body .= $name;

$Body .= "\n";

$Body .= "Email: ";

$Body .= $email;

$Body .= "\n";

$Body .= "guest: ";

$Body .= $guest;

$Body .= "\n";

$Body .= "event: ";

$Body .= $event;

$Body .= "\n";

$Body .= "Message: ";

$Body .= $message;

$Body .= "\n";



$success = mail($EmailTo, $Subject, $Body, "From:".$email);



if ($success && $errorMSG == ""){

   echo "success";

}else{

    if($errorMSG == ""){

        echo "Something went wrong :(";

    } else {

        echo $errorMSG;

    }

}



?>