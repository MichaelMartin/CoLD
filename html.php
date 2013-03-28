<?php
function getHowToContent() {
    $content = '
        <h2>HowTo</h2>
            To use this awesome approach the following three abilities exists:
            <ul>
                <li>Put an IRI into the form on the <a href="index.php">startpage</a> and submit. 
                    A HexCode appears, that can be copied to clipboard and used to color the specific resource in your application.</li>
                <li>You use the RGB Hex code interface that returns only the HexCode for automation of this workflow.</li>
                <li>Or you take a code snippet from the <a href="index.php?page=snippets">snippet page</a> and integrate the algorithm into your application.</li>
            </ul>
        <h3>Examples using the HTML interface</h3>
            Use the form or add the parameter <b>?iri=what_ever_should_be_colored</b> as you can see if you click on one of the following links:
            <ul>
                <li>coloring <a href="index.php?iri=http%3A%2F%2Fdbpedia.org%2Fresource%2FLeipzig">dbpedia:Leipzig</a></li>
                <li>coloring <a href="index.php?iri=http%3A%2F%2Fdata.lod2.eu%2Fscoreboard%2Fcountry%2FNetherlands">das:Netherlands</a></li>
                <li>coloring <a href="index.php?iri=http%3A%2F%2Faksw.org%2FSoerenAuer">aksw:SoerenAuer</a></li>
                <li>Even a <a href="index.php?iri=http%3A%2F%2Fdbpedia.org%2Fpage%2FDipstick">dbpedia:Dipstick</a> can be colored acceptable.</li>
            </ul>
        <h3>Examples using the RGB HEX interface</h3>
            If you use the rgb.php instead of the index.php, you will receive only the RGB HEX code of the respective IRI. Try the following links:
            <ul>
                <li>RGB HexCode of <a href="rgb.php?iri=http%3A%2F%2Fdbpedia.org%2Fresource%2FLeipzig">dbpedia:Leipzig</a></li>
                <li>RGB HexCode of <a href="rgb.php?iri=http%3A%2F%2Fdata.lod2.eu%2Fscoreboard%2Fcountry%2FNetherlands">das:Netherlands</a></li>
                <li>RGB HexCode of <a href="rgb.php?iri=http%3A%2F%2Faksw.org%2FSoerenAuer">aksw:SoerenAuer</a></li>
            </ul>    
        <h3>Examples using the RDF interface</h3>
            If you use the rdf.php instead of the index.php, you will receive RDF in turtle notation about the respective IRI. Try the following links:
            <ul>
                <li>RDF annotation of <a href="rdf.php?iri=http%3A%2F%2Fdbpedia.org%2Fresource%2FLeipzig">dbpedia:Leipzig</a></li>
                <li>RDF annotation of <a href="rdf.php?iri=http%3A%2F%2Fdata.lod2.eu%2Fscoreboard%2Fcountry%2FNetherlands">das:Netherlands</a></li>
                <li>RDF annotation of <a href="rdf.php?iri=http%3A%2F%2Faksw.org%2FSoerenAuer">aksw:SoerenAuer</a></li>
            </ul>    
    ';
    return $content; 
}

function getSnippetsContent() {
    $content = '
        <h2>CodeSnippets</h2>
        <p>
            The algorithm to color the Linked Data Web is quite complex :-) <br>
            We are hashing the given IRI using md5 and cutting the last 6 characters out of the resulting hash. 
            Thats it!
        </p>
        <p>
            But to lower the barrier of integrating the algorithm into your application, you can find a few snippets in common languages in the following.
            Please copy the respective snippet to your clipboard and paste it to your source code.
            
        </p>
        <h3>PHP Snippet</h3>
        <pre style="border:1px dashed #afafaf; background-color:eaeaea;padding-top:1em">
        $iri  = "http://mydomain/IriToBeColored/" ;
        $hash = hash("md5",$iri) ;
        $rgb  = "#" . substr($hash, strlen($hash) -6, strlen($hash));
        </pre>

        <h3>JavaScript Snippet</h3>
        <pre style="border:1px dashed #afafaf; background-color:eaeaea;padding-top:1em">
TBD
        </pre>

        <h3>Java Snippet</h3>
        <pre style="border:1px dashed #afafaf; background-color:eaeaea;padding-top:1em">
TBD   
        </pre>
    ';
    return $content; 
}

function getToolsContent() {
    $content = '
        <h2>List of Tools</h2>
        <p>
            Here we list Linked Data Web Applications that using the coloring algorithm to visualize RDF resources on the Web. 
        </p>
        <div style="margin-bottom:2em">
            <img src="images/CubeViz_Logo.jpg" style="float:right;width:150px;"/>
            <h3>CubeViz</h3>
            <p>
                CubeViz is a facetted browser for statistical data which utilizes the RDF Data Cube vocabulary which is the state-of-the-art in representing statistical data in RDF. 
                This vocabulary is compatible with SDMX and is being increasingly adopted. 
                Based on the vocabulary and the encoded Data Cube, CubeViz generates a facetted browsing widget that can be used to interactively filter observations to be visualized in charts. Based on the selected structure, CubeViz offers beneficiary chart types and options which can be selected by users.<br>
                <ul>
                    <li><a href="http://aksw.org/Projects/CubeViz">Link to CubeViz Project Page</a></li>
                    <li><a href="http://cubeviz.aksw.org/">Link to the CubeViz Demo</a></li>
                </ul>
                
            </p>
        </div>
        <div style="border:1px dashed #afafaf; background-color:eaeaea; padding:1em;">
            <h2>You want to see your tool in this list?</h2>
            <p>
                If you support this idea please let us know. We will add your tool to the list (But without warranty). 
                <a href="http://aksw.org/MichaelMartin">Michael Martin</a> is the responsible person and should be contacted via <a href="mailto:martin@informatik.uni-leipzig.de">Email</a>.
                We only need the following from you:
                <ul>
                    <li>Name of the Tool</li>
                    <li>Short description</li>
                    <li>Screenshot / Logo</li>
                    <li>Link to the Demo, Repository etc. (something where using can try it out.)</li>
                </ul>
                Alternativly you can send us an RDF description about the tool.
            </p>
        </div>
    ';
    return $content; 
}


function getImprintContent() {
    $content = '
        <h2>Imprint</h2>
        <p>
            This Webservice is under control of AKSW and made especially for the Fools Day 2013. 
            We hope you enjoy this Web Service. 
            Maybe you get an impression how colorful the Linked Data Web could be, and which advantages user could have if this approach would be integrated in all those tools dealing with IRIs.
        </p>
        <p>
            If you have any suggestions to improve this WebService feel free to contact us :-)
        </p>
        <ul>
            <li><a href="http://aksw.org/">AKSW</a></li>
            <li><a href="http://aksw.org/MichaelMartin.html">Michael Martin</a></li>
            <li><a href="http://aksw.org/SoerenAuer.html">Soeren Auer</a></li>
            <li><a href="">Color the Linked Data Web Repository</a></li>
        </ul>
        
        No warranty is granted for the right of the resulting color.
    ';
    return $content; 
}

function getColoringContent($iri, $hexColor, $error) {
    if (!empty($hexColor) && $error == null) {
        $resultBox ='
            <h2>Color</h2>
            <p>
            Given IRI : <br>
            <a href="'.$iri.'">'.$iri.'</a><br>&nbsp;<br>
            equates the following:
                <div style="background-color:#'.$hexColor.'" id="colorBox">
                    <div id="hexCode">#'.$hexColor.'</div>
                </div>
            </p>
            <h2>Other Result formats</h2>
            <a href="rgb.php?iri='.$iri.'">RGB Hex Code</a>&nbsp;|&nbsp;<a href="rdf.php?iri='.$iri.'">RDF representation</a>';
    } else if (!empty($error)){
        $resultBox ='
        <h2>Error</h2>
        <p>'.$error.'</p>';
    }

    $content = '
        <p>
            To improve usability of generic tools processing linked data for humans, we suggest to re-use illustrations of resources. 
            This would help users to recognize/identify things in different tools far better. 
            As a first step you can color your resources in a deterministic way. 
        </p>
        <h2>Please type in your IRI to be colored</h2>
        <p>
            <form action="index.php" method="GET" target="_self">
             <input 
                type="search" 
                name="iri" 
                value="'.$iri.'" 
                id="iri" 
                role="textbox" 
                accesskey="c" 
                placeholder="type in an IRI" 
                title="color your IRI" 
                autofocus="autofocus"
            >
            <input type="submit" value="Lets color!">
            </form>
        </p>
        '.$resultBox;
    return $content;
}
?>
