<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boac, Marinduque Tourism Website</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<section id="contact">
	<h2>Contact Us</h2>
	<form method="POST" action="submit_contact.php" onsubmit="return validateForm()">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<label for="message">Message:</label>
		<textarea id="message" name="message" required></textarea>
		<input type="submit" value="Send">
	</form>
</section>
    <script>
        function validateForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;

  if (name == "") {
    alert("Name must be filled out");
    return false;
  }

  if (email == "") {
    alert("Email must be filled out");
    return false;
  }

  if (message == "") {
    alert("Message must be filled out");
    return false;
  }

  return true;
}
</script>

	</main>
	<footer>
		<p>&copy; 2023 Boac, Marinduque Tourism Website</p>
	</footer>
    </script>
</body>
</html>