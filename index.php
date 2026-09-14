<!DOCTYPE html>
<html>
<head>
    <title>Ask for Name</title>
</head>
<body>

    <form method="POST" action="">
        <label>Please enter your name:</label>
        <input type="text" name="username">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['username']);
        if (!empty($name)) {
            echo "<h3>Hello, " . $name . "!</h3>";
        } else {
            echo "<p>Please type a valid name.</p>";
        }
    }
    ?>

</body>
</html>