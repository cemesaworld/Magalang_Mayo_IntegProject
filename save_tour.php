<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $description = $_POST["content"];
    $date = $_POST["date"];
    $image = $_POST["image"];
    $author = $_POST["author"];

    // Move the uploaded image to a directory on your server
    $uploadDirectory = __DIR__ . "/images/";
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true);
    }
    $image = $_FILES["image"];
    $filename = uniqid() . "." . pathinfo($image["name"], PATHINFO_EXTENSION);
    $destination = $uploadDirectory . $filename;
    move_uploaded_file($image["tmp_name"], $destination);

    $xmlFile = 'files/index.xml';

    // Load the existing XML file or create a new one
    if (file_exists($xmlFile)) {
        $tours = simplexml_load_file($xmlFile);
    } else {
        $tours = new SimpleXMLElement('<tours></tours>');
    }

    $tour = $tours->addChild('tour');
    $tour->addChild('title', $title);
    $tour->addChild('content', $content);
    $tour->addChild('date', $date);
    $tour->addChild('image', $filename);
    $tour->addChild('author', $author);

    $tours->asXML($xmlFile);

    echo "Tourism details saved successfully.";
}
?>