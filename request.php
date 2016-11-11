<?php

// accept a term (keyword)
// respond with a value

$query = $_GET['q'];
$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
];

$xmldef = '<?xml version="1.0" encoding="UTF-8"?>
<definition>
    <word>
        <name>definition</name>
        <meaning>A statement of the exact meaning of a word, especially in a dictionary.</meaning>
    </word>
    <word>
        <name>bar</name>
        <meaning>A place that sells alcholic beverages</meaning>
    </word>
    <word>
        <name>ajax</name>
        <meaning>Technique which involves the use of javascript and xml (or JSON)</meaning>
    </word>
    <word>
        <name>html</name>
        <meaning>The standard markup language for creating web pages and web applications.</meaning>
    </word>
    <word>
        <name>css</name>
        <meaning>A style sheet language used for describing the presentation of a document written in a markup language.</meaning>
    </word>
        <word>
        <name>javascript</name>
        <meaning>A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.</meaning>
    </word>
        <word>
        <name>php</name>
        <meaning>A server-side scripting language, and a powerful tool for making dynamic and interactive websites</meaning>
    </word>
 
</definition>';

if(! $query==''){
    print "<h3>" . strtoupper($query) . "</h3>";
    print "<p>" . $definition[$query] . "</p>";
}
else{
    header('Content-Type: text/xml');
    $output = new SimpleXMLElement($xmldef);
    echo $output->asXML();
}
