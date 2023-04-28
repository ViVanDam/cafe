<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe shop</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="wrapper">
    </div>
    
    <?php
        include "header.php";
    ?>
    <section>
        <div class="banner">
            <p>Adam cafe 2009</p> <br> <br>
            <h2>Your Go-to Spot for</h2><br>
            <h2>Delicious Eats & Coffee</h2><br><br>
            <div class="btn-banner">
                <input type="button" value="Order Now">
                <input type="button" value="Our Menu">
            </div>
        </div>
        <div class="text-slide">
            <div class="text">
                <p>Weekend Brunch     I    Saturday 9am - 2pm</p>
            </div>
            <div class="text">
                <p>Daily Deal    |   Coffee & Pastry $3.99</p>
            </div>
        </div>
        <div class="theme">
            <div class="theme-item eat">
                <h1>Eat.</h1><br>
                <p class="sub-theme">Breakfast, Lunch and Artisanal Pastries</p><br><br>
                <p>I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p><br>
                <a href="">See More</a>
            </div>
            <div class="theme-item picture">
                <img src="src/food.webp" alt="eat-picture">
            </div>
            <div class="theme-item picture">
                <img src="src/drink.webp" alt="drink-picture">
            </div>
            <div class="theme-item drink">
                <h1>Drink.</h1><br>
                <p class="sub-theme">The Freshest Cup in Town</p><br><br>
                <p>I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p><br>
                <a href="">See More</a>
            </div>
            <div class="theme-item enjoy">
                <h1>Enjoy.</h1><br>
                <p class="sub-theme">Make Yourself at Home</p><br><br>
                <p>I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p><br>
                <a href="">Visit Us</a>
            </div>
            <div class="theme-item picture">
                <img src="src/enjoy.webp" alt="enjoy-picture">
            </div>
        </div>
        <div class="aboutus">
            <div class="title-aboutus">
                <h1>Drop By for a Bite.</h1>
            </div>
            <div class="add-open">
                <div class="address">
                    <h3>Address</h3><br><br>
                    <p>62 Hoang Hoa Tham Stress,</p>
                    <p>Ward 12, Tan Binh District,</p>
                    <p>Ho Chi Minh City</p>
                </div>
                <div class="open">
                    <h3>Opening Hours</h3><br><br>
                    <p>Mon - Fri: 9am - 6pm</p>
                    <p>Saturday: 10am - 2pm</p>
                    <p>Sunday: Closed</p>
                </div>
            </div>
        </div>
        <div class="truth-views">
            <img src="src/view1.png" alt="views">
            <img src="src/view2.png" alt="views">
            <img src="src/view3.png" alt="views">
            <img src="src/view4.png" alt="views">
            <img src="src/view5.png" alt="views">
        </div>
    </section>

    <?php
        include "footer.php";
    ?>
</body>
</html>