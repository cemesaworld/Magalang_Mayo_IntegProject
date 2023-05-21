<!DOCTYPE html>
<html>
<head>
    <title> Boac, Marinduque Tourism</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Boac, Marinduque Tourism Details</h1>
    <?php
    $xmlFile = 'files/index.xml';
    if (file_exists($xmlFile)) {
        $tours = simplexml_load_file($xmlFile);
        foreach ($tours->tour as $tour) {
            echo "<div>";
            echo "<h2>{$tour->title}</h2>";
            echo "<p>Date: {$tour->date}</p>";
            echo "<p>Description: {$tour->description}</p>";
            echo "<p>Author: {$tour->author}</p>";
            echo "<img src='images/{$tour->image}' alt='Tour Image'>";
            echo "</div>";
        }
    } else {
        echo "No tourism details found.";
    }
    ?>
</body>
</html>