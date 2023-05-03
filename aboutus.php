<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe shop</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/main.js"></script>
    <style>
        .nav ul li:nth-child(2) a {
            color: aqua;
        }
    </style>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <section>
        <div class="slogan">
            <h1>This Is Us</h1><br><br>
            <p>We're big believers in the power of a good meal and a friendly place to eat it.</p><br>
            <p>Stop by for fresh, locally sourced food, served with a warm smile.</p>
        </div>
        <div class="theme">
            <div class="theme-item picture">
                <img src="src/eggs.webp" alt="eggs-dish-picture">
            </div>
            <div class="theme-item eggs">
                <h1>The Best Bite in the Neighborhood</h1><br><br>
                <p>I'm an extra long title. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p><br>
                <a href="">View Menu</a>
            </div>
        </div>
        <div class="title-box">
            <h1>Real Food. No Secret Ingredients.</h1>
        </div>
        <div class="theme">
            <div class="theme-item staff">
                <h1>From Our Hearts to Your Plate</h1><br><br>
                <p>I'm an extra long title. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p><br>
                <a href="">Visit Us</a>
            </div>
            <div class="theme-item picture">
                <img src="src/staff.webp" alt="staff-picture">
            </div>
        </div>
    </section>
    <?php
        include "footer.php";
    ?>
</body>
</html>