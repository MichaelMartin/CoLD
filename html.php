<?php
function getHowToContent() {
    $content = '
        <h2>HowTo</h2>
        <p>
            To use this awesome approach the following three abilities exists:
            <ul>
                <li>Put an IRI into the form on the <a href="index.php">startpage</a> and submit. 
                    A HexCode appears, that can be copied to clipboard and used to color the specific resource in your application.</li>
                <li>You use the RGB Hex code interface that returns only the HexCode for automation of this workflow.</li>
                <li>Or you take a code snippet from the <a href="index.php?page=snippets">snippet page</a> and integrate the algorithm into your application.</li>
            </ul>
        </p>
        <h3>Examples using the HTML interface</h3>
        <p>
            Use the form or add the parameter <b>?iri=what_ever_should_be_colored</b> as you can see if you click on one of the following links:
            <ul>
                <li>coloring <a href="index.php?iri=http%3A%2F%2Fdbpedia.org%2Fresource%2FLeipzig">dbpedia:Leipzig</a></li>
                <li>coloring <a href="index.php?iri=http%3A%2F%2Fdata.lod2.eu%2Fscoreboard%2Fcountry%2FNetherlands">das:Netherlands</a></li>
                <li>coloring <a href="index.php?iri=http%3A%2F%2Faksw.org%2FSoerenAuer">aksw:SoerenAuer</a></li>
                <li>Even a <a href="index.php?iri=http%3A%2F%2Fdbpedia.org%2Fpage%2FDipstick">dbpedia:Dipstick</a> can be colored acceptable.</li>
            </ul>
        </p>
        <h3>Examples using the RGB HEX interface</h3>
        <p>
            If you use the rgb.php instead of the index.php, you will receive only the RGB HEX code of the respective IRI. Try the following links:
            <ul>
                <li>RGB HexCode of <a href="rgb.php?iri=http%3A%2F%2Fdbpedia.org%2Fresource%2FLeipzig">dbpedia:Leipzig</a></li>
                <li>RGB HexCode of <a href="rgb.php?iri=http%3A%2F%2Fdata.lod2.eu%2Fscoreboard%2Fcountry%2FNetherlands">das:Netherlands</a></li>
                <li>RGB HexCode of <a href="rgb.php?iri=http%3A%2F%2Faksw.org%2FSoerenAuer">aksw:SoerenAuer</a></li>
            </ul>  
        </p>
        <h3>Examples using the RDF interface</h3>
        <p>
            If you use the rdf interface 
            <ul>
                <li><span>http://cold.aksw.org/rdf.php?iri=what_ever_you_want_to_colour</span> </li>
                <li><span>http://cold.aksw.org/rdf/?iri=what_ever_you_want_to_colour</span></li>
            </ul>
            you will receive an RDF in turtle notation about the respective IRI.<br> 
            Returning RDF files are encoded in Turtle notation and contain a mapping between given IRI and a colour resource from <a href="http://linkedopencolors.moreways.net/">Linked Open Colors</a>. 
            For mapping of both resources we provide the colour AnnotationProperty (<a href="http://cold.aksw.org/rdf/colour">http://cold.aksw.org/rdf/colour</a>). 
        </p>
        <p>
            Try the following links:
            <ul>
                <li>RDF annotation of <a href="rdf.php?iri=http%3A%2F%2Fdbpedia.org%2Fresource%2FLeipzig">dbpedia:Leipzig</a></li>
                <li>RDF annotation of <a href="rdf.php?iri=http%3A%2F%2Fdata.lod2.eu%2Fscoreboard%2Fcountry%2FNetherlands">das:Netherlands</a></li>
                <li>RDF annotation of <a href="rdf.php?iri=http%3A%2F%2Faksw.org%2FSoerenAuer">aksw:SoerenAuer</a></li>
            </ul>    
        </p>
    ';
    return $content; 
}

function getSnippetsContent() {
    $content = '
       <h2>CodeSnippets</h2>
        <p>
            The algorithm to colour the Linked Data Web is quite complex :-) <br>
            We are hashing the given IRI using md5 and cutting the last 6 characters out of the resulting hash. 
            Thats it!
        </p>
        <p>
            But to lower the barrier of integrating the algorithm into your application, you can find a few snippets in common languages in the following.
            Please copy the respective snippet to your clipboard and paste it to your source code.
            
        </p>
        <h3>PHP Snippet</h3>
        <pre style="border:1px dashed #afafaf; background-color:eaeaea;padding-top:1em">
        $iri  = "http://iri/to-be/color.ed/" ;
        $hash = hash("md5",$iri) ;
        $rgb  = "#" . substr($hash, strlen($hash) -6, strlen($hash));
        echo $rgb;
        </pre>

        <h3>JavaScript Snippet</h3>
        <pre style="border:1px dashed #afafaf; background-color:eaeaea;padding-top:1em">
        &lt;script src="http://crypto-js.googlecode.com/svn/
                        tags/3.1.2/build/rollups/md5.js"&gt;&lt;/script&gt;
        &lt;script&gt;
            var hash = CryptoJS.MD5("Message");
        &lt;/script&gt;

        var iri = "http://iri/to-be/colour.ed/";
        CryptoJS.MD5(iri);
        var rgb = "#" + hash.substr(-6);
        </pre>

        <h3>Java Snippet</h3>
        <pre style="border:1px dashed #afafaf; background-color:eaeaea;padding-top:1em">

        public static String md5Hash(byte[] bytes) {
            MessageDigest md5 = null;
            try {
                md5 = MessageDigest.getInstance("MD5");
            } catch (NoSuchAlgorithmException e) {
                e.printStackTrace();
            }
            md5.reset();
            md5.update(bytes);
            byte[] rawResult = md5.digest();
            return bytesToHexString(rawResult);
        }
        public static String bytesToHexString(byte[] bytes) {
            String result = "";
            for (int i = 0; i < bytes.length; i++) {
                int value = 0xff & bytes[i];
                if(value < 16) {
                    result += "0";
                }
                result += Integer.toHexString(value);
            }
            return result;
        }

        public static String md5Hash(String string) {
            return md5Hash(string.getBytes());
        }

        public static String getUriColor(String uri) {
            String hash = StringUtils.md5Hash("01");
            String color = "#" + hash.substring(hash.length() - 6);
            return color;
        }

        </pre>

        <h3>Maven + Java Snippet</h3>
        <pre style="border:1px dashed #afafaf; background-color:eaeaea;padding-top:1em">
        #Maven pom.xml snippet:
        &lt;repositories&gt;
            &lt;repository&gt;
                &lt;id&gt;maven.aksw.org/internal&lt;/id&gt;
                &lt;name&gt;University Leipzig, AKSW Maven2 Internal Repository&lt;/name&gt;
                &lt;url&gt;http://maven.aksw.org/repository/internal/&lt;/url&gt;
            &lt;/repository&gt;
            ...
        &lt;dependencies&gt;
            &lt;dependency&gt;
                &lt;groupId&gt;org.aksw.commons&lt;/groupId&gt;
                &lt;artifactId&gt;util&lt;/artifactId&gt;
                &lt;version&gt;0.1&lt;/version&gt;
                &lt;scope&gt;compile&lt;/scope&gt;
            &lt;dependency&gt;
            ...
            
        #Java Snippet
        import org.aksw.commons.util.strings.StringUtils;
        String hash = StringUtils.md5Hash("01");
        String color = "#" + hash.substring(hash.length() - 6);
        </pre>

        <h3>Shell Snippet</h3>
        <pre style="border:1px dashed #afafaf; background-color:eaeaea;padding-top:1em">
        $iri "http://iri/to-be/colour.ed/"
        echo -n $iri | md5 | cut -c 27-
        </pre>
    ';
    return $content; 
}

function getToolsContent() {
    $content = '
        <h2>List of Tools</h2>
        <p>
            Here we list Linked Data Web Applications that using the colouring algorithm to visualize RDF resources on the Web. 
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

        <div style="margin-bottom:2em">
            <h3>rdf.sh</h3>
            <p>
                A multi-tool shell script for doing Semantic Web jobs on the command line. The last addition to rdf.sh is the colouring option. 
                To use it, clone the below listed repository, and use the following command line: <pre>rdf.sh colour what_ever_should_be_coloured</pre>
                <ul>
                    <li><a href="https://github.com/seebi/rdf.sh">Github Repository</a></li>
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
        <div style="float:right">
            <a href="http://aksw.org/" style="text-decoration:none; border:0"><img src="images/logo-aksw.png" /></a>    
        </div>
        <h2>Imprint</h2>
        <p>
            This Webservice is under control of <a href="http://aksw.org/">AKSW</a> and made especially for the Fools Day 2013. 
            We hope you enjoy this Web Service. No warranty is granted for the right of the resulting colour.
            Maybe you get an impression how colourful the Linked Data Web could be, and which advantages user could have if this approach would be integrated in all those tools dealing with IRIs.
        </p>
        <p>
            If you have any suggestions to improve this WebService feel free to contact us :-)
        </p>
        <ul>
            <li><a href="http://aksw.org/">AKSW</a></li>
            <li><a href="http://aksw.org/MichaelMartin.html">Michael Martin</a></li>
            <li><a href="http://aksw.org/SoerenAuer.html">Soeren Auer</a></li>
        </ul>
        
        <h3 style="margin-top:3em">Projects</h3>
        <a href="http://lod2.eu/" style="text-decoration:none; border:0"><img src="images/logo-lod2.png" /></a>';
    return $content; 
}

function getColoringContent($iri, $hexColor, $error) {
    if (!empty($hexColor) && $error == null) {
        $resultBox ='
            <h2>Resulting colour</h2>
            <p>
            Given IRI : <br>
            <a href="'.$iri.'">'.$iri.'</a><br>&nbsp;<br>
            equates the following:
                <div style="background-color:#'.$hexColor.'" id="colorBox">
                    <div id="hexCode">#'.$hexColor.'</div>
                </div>
            </p>
            <h2>Other Result formats</h2>
            <a href="rgb.php?iri='.$iri.'">RGB Hex Code</a>&nbsp;|
            <a href="rgb.php?iri='.$iri.'&rf=json">RGB JSON</a>&nbsp;|
            &nbsp;<a href="rdf.php?iri='.$iri.'">RDF Turtle</a>';
    } else if (!empty($error)){
        $resultBox ='
        <h2>Error</h2>
        <p>'.$error.'</p>';
    }

    $content = '
        <p>
            To improve usability of generic tools processing linked data for humans, we suggest to re-use illustrations of resources. 
            This would help users to recognize/identify things in different tools far better. 
            As a first step you can colour your resources in a deterministic way. 
        </p>
        <h2>Please type in your IRI to be coloured</h2>
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
                title="colour your IRI" 
                autofocus="autofocus"
            >
            <input type="submit" value="Lets colour!">
            </form>
        </p>
        '.$resultBox;
    return $content;
}
?>
