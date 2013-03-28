<?php

require_once("color.php");

$ns = "http://clod.aksw.org";
$colorUri = $ns."#".$hexColor;

echo '
    PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#> .
    <'.$iri.'>  a   rdf:Resource ;

    
';

?>
