<?php
/*
This file is actually optional, the use of this file is to facilitate the calling of functions that will be used globally in the application or web to be created.
For example, I will 'always' call the header, footer, and sidebar files because they are needed by me to display the appearance of my web application.
So to make it easier, I wrote a simple code like this so that it can be called repeatedly:

function get_header($titleApp, $pageApp)
{
    require_once 'app/template/header.php';
}

function get_sidebar()
{
    require_once 'app/template/sidebar.php';
}

function get_footer()
{
    require_once 'app/template/footer.php';
}

*/