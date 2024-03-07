<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--<link rel="stylesheet" href="normalize.css">-->
    <!--<link rel="stylesheet" href="style.css">-->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css';?>">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css';?>">
            
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div id="menu" class="global">
        <header class="entete__menu">
            <input id="chk_burger" type="checkbox" >
            <label id="burger" for="chk_burger">
                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </label>
            <?php wp_nav_menu(array("container"=>"nav")); ?>
        </header>
    </div>