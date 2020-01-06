<?php
// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
     $response  = "CON .....Afyayehu..... \n";
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
    $response  = "CON .....Afyayehu..... \n";
    $response  .= "Chagua lugha\n";
    $response .= "1. Endelea na Kiswahili \n";
    $response .= "2. Enderera na chidigo \n";
    $response .= "3. Enderera na chiduruma\n";
    $response .= "4. Continue in English";

} else if($text == "3") { 
// level 2 Kiduruma
    $response  = "CON .....Afyayehu..... \n";
    $response  .= "Chagua lugha\n";
    $response .= "1. Endelea na Kiswahili \n";
    $response .= "2. Enderera na chidigo \n";
    $response .= "3. Enderera na chiduruma \n";
    $response .= "4. Continue in English";
} else if ( $text == "4" ) {
// level 2 english
    $response  = "CON P.E.M \n";
    $response .= "1. What is P.E.M \n";
    $response .= "2. Common causes of P.E.M \n";
    $response .= "3. Common symptoms of P.E.M \n";
    $response .= "4. Types of P.E.M \n";
    $response .= "5. Back\n";
    $response .= "6. Exit";
} else if ( $text == "4*1" ) {
    // level 3 english
    $response = "END Protein–energy malnutrition (PEM) is a form of malnutrition that is defined as a range of pathological conditions arising from coincident lack of dietary protein and/or energy (calories) in varying proportions.  ";
}else if ( $text == "4*2" ) {
    // level 3 english
    $response  = "CON Common causes of P.E.M \n";
    $response .= "1. Lack of breast feeding and giving diluted formula \n";
    $response .= "2. Improper complementary feeding \n";
    $response .= "3. Ignorance \n";
    $response .= "4. Poverty \n";
    $response .= "5. Illiteracy \n";
    $response .= "6. Back\n";
    $response .= "7. Exit";
}else if ( $text == "4*3" ) {
    // level 3 english types of P.E.M
    $response  = "CON Types of P.E.M \n";
    $response .= "1. Marasmus \n";
    $response .= "2. Kwashiorkor \n";
    $response .= "3. Marasmus-Kwashiokor\n";
    $response .= "4. Back\n";
    $response .= "5. Exit";
}else if ( $text == "4*3*1" ) {
    // level 4 english Marasmus
    $response  = "CON Marasmus\n";
    $response .= "1. What is Marasmus\n";
    $response .= "2. Symptoms of Marasmus \n";
    $response .= "3. Remedy\n";
    $response .= "4. Back\n";
    $response .= "5. Exit";
}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;
