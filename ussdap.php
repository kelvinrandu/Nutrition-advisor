<?php
// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
     $response  = "CON .....Afyaplus..... \n";
    $response  .= "Chagua lugha\n";
    $response .= "1. Endelea na Kiswahili \n";
    $response .= "2. Enderera na chidigo \n";
    $response .= "3. Enderera na chiduruma \n";
    $response .= "4. Continue in English";

} else if ($text == "1") {
// level 2 Kiswahili
    $response  = "CON Unyafuzi  \n";
    $response .= "1. Unyafuzi ni nini?\n";
    $response .= "2. Dalili kuu za Unyafuzi. \n";
    $response .= "3. Aina za Unyafuzi \n";
    $response .= "4. Rudi nyuma \n";
    $response .= "5. Toka";

} else if ($text == "2") {
// level 2 Digo
    $response  = "CON .....Afyaplus..... \n";
    $response  .= "Chagua lugha\n";
    $response .= "1. Endelea na Kiswahili \n";
    $response .= "2. Enderera na chidigo \n";
    $response .= "3. Enderera na chiduruma\n";
    $response .= "4. Continue in English";

} else if($text == "3") { 
// level 2 Kiduruma
    $response  = "CON .....Afyaplus..... \n";
    $response  .= "Chagua lugha\n";
    $response .= "1. Endelea na Kiswahili \n";
    $response .= "2. Enderera na chidigo \n";
    $response .= "3. Enderera na chiduruma \n";
    $response .= "4. Continue in English";
} else if ( $text == "4" ) {
// level 2 english
    $response  = "CON P.E.M \n";
    $response .= "1. What is P.E.M \n";
    $response .= "2. Common symptoms of P.E.M \n";
    $response .= "3. Types of P.E.M \n";
    $response .= "4. Back\n";
    $response .= "5. Exit";
}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;
