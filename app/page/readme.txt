In this folder, you can create files for the display that are linked to the function files in the 'page-function' folder.

An example of its use is as follows:

file name: dashboard.php

means that the dashboard.php file in this folder will be automatically connected to the dashboard.php file in the 'page-function' folder.

And for example, sending data with the post method, then in the dashboard file in this folder you only write the display code, not the data transmission function.

in the dashboard.php file in this folder, you can directly write the code for the dashboard.php view.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <input type="text" name="test" value="">
    <button type="submit" name="data" value="Submit">
    </form>
</body>
</html>
