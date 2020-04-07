<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="script.js">
    <script type="text/javascript" src="./scripts/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="./scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="./scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="./scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <link rel="stylesheet" href="galleryFinish.php">
    <title>Gallery</title>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $("a.photo").fancybox({
                transitionIn: 'elastic',
                transitionOut: 'elastic',
                scrolling: 'auto'
            });
        });

    </script>
</head>

<body>
    
        <div class="menu">
            <a href="index.php" style="text-decoration:none;">Главная</a>
            <a href="AboutMe.php">О себе</a>
            <a href="Blog.php">Блог</a>
            <a href="Gallery.php">Галерея</a>
            <a href="Game.php">Игра</a>
        </div>
    <div class="wrapper">
    <div id="gallery" class="gallery">
        <div class="line1">
            <div class="block">
                <img class="image" src="images/16.jpg">
            </div>
            <div class="block">
                <img class="image" src="images/15.jpg">
            </div>
            <div class="block">
                <img class="image" src="images/16.jpg">
            </div>
            <div class="block">
                <img class="image" src="images/15.jpg">
            </div>
        </div>
        <div id="presentation" class="center"></div>
        <div class="line1">
            <div class="block">
                <img class="image" src="images/16.jpg">
            </div>
            <div class="block">
                <img class="image" src="images/15.jpg">
            </div>
            <div class="block">
                <img class="image" src="images/16.jpg">
            </div>
            <div class="block">
                <img class="image" src="images/15.jpg">
            </div>
        </div>
    </div>
</div>
            
   <script>
    let gallery = document.getElementById("gallery");
    gallery.onclick = function(event) {
        let target = event.target;
        if (target.classList.contains('image')) {
            printSquare(target.getAttribute("src"));
        }
    }

    function printSquare(src) {
        let img = document.createElement("img");
        img.className += "big-image";
        img.setAttribute("src", src);
        let place = document.getElementById("presentation");
        place.innerHTML = "";
        place.append(img);
    }
</script>
</body>

</html>
