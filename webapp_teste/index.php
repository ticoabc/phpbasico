<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>PHP select option</title>
    </head>
    <body class="center">
        <main>
            <form action="index.php" method="post">
                <div>
                    <label for="color">Background Color:</label>
                    <select name="color" id="color">
                        <option value="">--- Choose a color ---</option>
                        <option value="red">Red</option>
                        <option value="green" selected>Green</option>
                        <option value="blue">Blue</option>
                    </select>
                </div>
                <div>
                    <button type="submit">Select</button>
                </div>
            </form>
        </main>
    </body>
</html>