<?php

function hashUri($uri) {
    return hash("md5",$uri) ;
}
function color($hash) {
    return substr($hash,strlen($hash) -6, strlen($hash));
    #return substr($hash,0, 6);
}

function getColorParts ($hexRGB) {
    if (strlen($hexRGB) == 6) {
        $rgb_dec = array (
            "red"   => hexdec(substr($hexRGB, 0, 2)),
            "green" => hexdec(substr($hexRGB, 2, 2)),
            "blue"  => hexdec(substr($hexRGB, 4, 2)));
        return $rgb_dec;
    } 
    return false;
}

function checkIRI($iri){
    #$pattern = "/(?<!\\)\\(?![\[\]\\\^\$\.\|\*\+\(\)QEnrtaefvdwsDWSbAZzB1-9GX]|x\{[0-9a-f]{1,4}\}|\c[A-Z]|)/";
    #$isIRI = preg_match ($pattern, $iri);
    
    #have to check the IRI validate regex again, but later
    $isIRI = 1 ;
    if (1 === $isIRI) {
        return TRUE;
    }
    return FALSE;
}

$hexColor = null;
$iri = null;
$error = null;

if (!empty($_REQUEST['iri'])){
    #check if URI is correct else message
    $iri = $_REQUEST['iri'];

    if (FALSE == checkIRI($iri)) {
        $error = "No valid IRI is given";
    }
    $hash = hashUri($iri);
    $hexColor = color($hash);
}
?>
