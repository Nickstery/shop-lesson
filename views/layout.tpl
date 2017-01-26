<html>
<head>
    <title>{block name=title}Default Page Title{/block}</title>
    <link rel="stylesheet" type="text/css" href="../public/css/app.css">
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="#">
                Some Branding
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="/home">Home</a></li>
                <li><a href="/announcements">Announcements</a></li>
                <li><a href="/program" >Program</a></li>
                <li><a href="/contacts" >Contacts</a></li>
                <li><a href="/photos" >Photos</a></li>
                <li><a href="/registration" >Registration</a></li>
                <li><a href="/info" >Local info</a></li>

            </ul>

        </div>
    </div>
</nav>
<div class="container">
{block name=body}{/block}
</div>
</body>
</html>