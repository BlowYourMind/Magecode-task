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
                <li><a class="links" href="/">Home</a></li>
                <li><a class="links" href="services">Services</a></li>
                <li><a class="links" href="about">About</a></li>
                <li><a class="links" href="contact">Contact</a></li>
                <li><a class="links" href="faq">FAQ</a></li>
                @guest
                    <li><a class="sign-up" href="register">SIGN UP</a></li>
                @endguest
            </ul>
        </nav>
        <img src="images/menu-icon.png" alt="menu-icon" class="hamburger-menu-icon" onclick="toggleMenu()"/>
    </div>
    @yield('content')
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
