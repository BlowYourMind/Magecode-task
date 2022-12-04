<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>

</head>
<body>
<div class="container">
    <div class="navbar">
        <img src="images/logo.png" alt="Logo-image" class="logo">
        <nav>
            <ul id="menuList">
                <li><a class="links" href="#">Home</a></li>
                <li><a class="links" href="#">Services</a></li>
                <li><a class="links" href="#">About</a></li>
                <li><a class="links" href="#">Contact</a></li>
                <li><a class="links" href="#">FAQ</a></li>
                <li><a class="sign-up" href="#">SIGN UP</a></li>

            </ul>
        </nav>
        <img src="images/menu-icon.png" alt="menu-icon" class="hamburger-menu-icon" onclick="toggleMenu()"/>
    </div>
    <div class="row">
        <div class="col-1">
            <h2>Digital</h2>
            <h3>Marketing</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Vestibulum
                retrum metus at enim congue scelerisque. Sed suscipit metu
            <p>non iaculis semper sonsectetur adipiscing elit.</p>
            <button type="button" class="learn-more-button">
                learn more
            </button>
        </div>
        <div class="col-2">
            <img class="main-image" src="images/main-page-image.jpg" alt="main page image"></div>
    </div>
</div>
</div>

<script>
    var menuList = document.getElementById("menuList")
    menuList.style.maxHeight = "0px"

    function toggleMenu() {
        if (menuList.style.maxHeight === "0px") {
            menuList.style.maxHeight = "400px";
        } else {
            menuList.style.maxHeight = "0px";
        }
    }
</script>
</body>
</html>
