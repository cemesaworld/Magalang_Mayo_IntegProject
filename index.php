<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
	<title>Boac Tourism Website</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<header>
		<h1>Boac, Marinduque Tourism Website</h1>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="tours.php">Tours</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section id="home">
			<h2>PARINE NA BAYA! SA KINAGISNANG BOAC MARINDUQUE!</h2>
			<p>Boac! home to the province’s business and educational districts. This is where most of the secondary schools and colleges are as well as the public market, sports arena and some medium-rise buildings. It is also where one of the three ports of entry to Marinduque is located (Cawit Port). Despite being commercialized, the municipality of Boac still preserves historical and cultural places. A few notable ones are The Diocesan Shrine of Our Lady of Biglang Awa which rests on top of a hill and boasts a good view of the provincial capital and Boac National Museum which is the oldest existing structure in the area features various collections from traditional handicrafts to Moriones costumes to old musical instruments.</p>
		</section>
		<section id="tours">
			<h2>Popular Tours</h2>
			<!-- Insert code here to display popular tours from your XML file -->
				<?php
	$xml = simplexml_load_file('files/index.xml') or die("Error: Cannot create object");
	foreach ($xml->tour as $tour) {
		echo '<div class="tour">';
		echo '<h3>' . $tour->destination . '</h3>';
		echo '<p>' . $tour->description . '</p>';
		echo '<p><strong>Price:</strong> ' . $tour->price . '</p>';
		echo '</div>';
	}
	?>

</body>
</html>
