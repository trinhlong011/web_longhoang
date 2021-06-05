<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab2_longhoang</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        function onReady(){
            document.getElementsByClassName("n1").style.color = "black";
        }
    </script>
</head>
<body>
    <header id="header">
    </header>
    <nav id="nav">
        <button onclick="onReady()" id="nav" class="n1">home</button>
        <button id="nav" class="n2">classes</button>
        <button id="nav" class="n3">catering</button>
        <button id="nav" class="n4">about</button>
        <button id="nav" class="n5">contact</button>
    </nav>
    <section id="content">
        <div id="item_content">
            <div id="item">
                <div id="item_con">
                    <div id="img" class="img1">
                    </div>
                    <p>Bok Choi</p>
                </div>
                <div id="item_con">
                    <div id="img" class="img2">
                    </div>
                    <p>Teriyaki Sauce</p>
                </div>
            </div>
            <div id="content">
                <div id="content_con">
                    <h2>Japanese Vegetarian</h2>
                    <h3>Five week course in london</h3>
                    <h4>A five week introducetion to traditional 
                        Japanese vegetarian meals, teaching you a 
                        selection of rice and noodle and dishes.
                    </h4>
                </div>
                <div id="content_con">
                    <h2>Sauces Masterclass</h2>
                    <h3>One day workshop</h3>
                    <h4>
                        An intensive one-day course looing at how
                        to create the most decious sauces for use in 
                        a range of Japanese cookery.
                    </h4>
    
                </div>
            </div>
        </div>
        <div  id="comment">
            <div id="popular">
                <h2>Popular Recipes</h2>
                <h4>Yakitori (grilled chicken)</h4>
                <h4>Tsukune (minced chicken patties)</h4>
                <h4>Okonomiyaki (savory pancakes)</h4>
                <h4>Mizutaki (chicken stew)</h4>
            </div>
            <div id="contact">
                <h2>Contact</h2>
                <h4>Yoko's Kitchen 27 Redchurch Street Shoreditch <br> London E2 7FP</h4>
            </div>
        </div>
    </section>
    <footer id="footer">

    </footer>
</body>
</html>