<?php

require_once("color.php");

if (!empty($_REQUEST['rf'])) {
    $rgb = getColorParts ($hexColor);
    
    switch($_REQUEST['rf']) {
        case 'json' :
            $resultArray = array(
                'iri' => $iri ,
                'rgb' => "#".$hexColor ,
                'rdf' => "http://purl.org/colors/rgb/".$hexColor
            );
            echo json_encode($resultArray);
            break;
            
        case 'plain' :
            break;
    }
    
} else {
    echo "#".$hexColor;
}

?>
