<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Food Form</title>
    <link rel = "stylesheet" href = "/pico.min.css"> <!-- link css page to html to add css -->
</head>
<body>
    <main class = "container">
    <div class="container mt-5">
        <h2>Favorite Food Form</h2>
        <form method="post" action="intro.php">
            <label for="name">Name:</label>   <!-- Enter the name -->
            <input type="text" id="name" name="name" required><br><br>

            <label>Favorite Food:</label><br>   <!-- radio buttons to select the option -->
            <input type="radio" id="pulao" name="food" value="Pulao" required>
            <label for="pulao">Pulao</label><br>

            <input type="radio" id="paneer" name="food" value="Paneer" required>
            <label for="paneer">Paneer</label><br>
            
            <input type="radio" id="pizza" name="food" value="Pizza" required>
            <label for="pizza">Pizza</label><br><br>

            <input type="submit" value="Submit">  <!-- submit button to submit the form -->

            
        </form>

        
    </div>
    </main>
</body>
</html>
