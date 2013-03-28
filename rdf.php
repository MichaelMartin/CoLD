<?php

require_once("color.php");

if (!empty($iri)) {
    $iriPart ='<'.$iri.'>  a   rdf:Resource ;
    cold:colour loc:'.$hexColor.' .';
}

#if (!empty($hexColor)) {
#    $rgb = getColorParts ($hexColor);
#    $colorPart ='cold:RGB'.$hexColor.' a dbpedia:Colour ;
#    cold:rgb "'.$hexColor.'" ;
#    dbpedia:rgbCoordinateRed   "'.$rgb['red'].'"^^xsd:nonNegativeInteger ;
#    dbpedia:rgbCoordinateGreen "'.$rgb['green'].'"^^xsd:nonNegativeInteger ;
#    dbpedia:rgbCoordinateBlue  "'.$rgb['blue'].'"^^xsd:nonNegativeInteger .
#    ' ;
#}
    
#@prefix dbpedia: <http://dbpedia.org/ontology/> .

echo '@prefix rdf:  <http://www.w3.org/1999/02/22-rdf-syntax-ns#> .
@prefix rdfs: <http://www.w3.org/2000/01/rdf-schema#> .
@prefix owl:  <http://www.w3.org/2002/07/owl#> .
@prefix cold: <http://cold.aksw.org/rdf/> .
@prefix xsd: <http://www.w3.org/2001/XMLSchema#> .
@prefix loc: <http://purl.org/colors/rgb/> .

'.$iriPart.'
'.$colorPart.'
cold:colour a owl:AnnotationProperty ;
    rdfs:label "color"@en ;
    rdfs:domain rdf:Resource ;
    rdfs:range dbpedia:Colour .
';

?>
