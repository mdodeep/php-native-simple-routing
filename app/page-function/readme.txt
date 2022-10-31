In this folder, you can create files for functions that are linked to files in the 'page' folder.

An example of its use is as follows :

file name: dashboard.php

means that the dashboard.php file in this folder will be automatically connected to the dashboard.php file in the 'page' folder.

And the example is sending data with the post method.

in the dashboard.php file in this folder, you can directly write the native php function.

<?php
if (isset($_POST['data'])){
    // Your Function
}