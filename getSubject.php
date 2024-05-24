<?php
header('Content-Type: text/xml'); // Set the content type to XML

include 'dbconfig.php';
$query = "SELECT * FROM subject";

$result = mysqli_query($conn, $query);
$num_results = mysqli_num_rows($result);

$doc = new DOMDocument();
$doc->formatOutput = true;

$root = $doc->createElement("subjects");
$doc->appendChild($root);

while ($row = $result->fetch_assoc()) {
    $thing = $doc->createElement("thing");
    $root->appendChild($thing);

    $subject = $doc->createElement("subjectName", $row["subjectName"]);
    $thing->appendChild($subject);
}

mysqli_close($conn);

echo $doc->saveXML();
?>
