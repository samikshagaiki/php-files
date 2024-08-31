<!DOCTYPE html>
<html lang = "en" data-theme="dark">
    <head>
        <meta charset = "UTF-8">
        <title>Form</title>
        <link rel="stylesheet" href="/pico.min.css">
    </head>
    <body>
        <main class = "container">
           <ul>
            <?php foreach($person as $key => $feature):?>
                <li><strong><?= $key ; ?></strong>=><?= $feature; ?></li>
                <?php endforeach; ?>
            </ul>

        </main>
        
    </body>
</html>
