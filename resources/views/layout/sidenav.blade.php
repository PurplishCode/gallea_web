<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.link')
    @extends('layout.script')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
<a href="#" class="navbar-brand ps-3" style="font-family:Verdana, Geneva, Tahoma, sans-serif ;font-weight:bold">UDC</a>
<button type="button" class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!" data-bs-toggle="offcanvas" data-bs-target="offcanvas" aria-controls="offcanvasexample"><a href="#offcanvasexample"><i class="fas fa-bars"></i></a></button>
</nav>
<div id="layoutSidenav offcanvasexample" class="offcanvas offcanvas-start" tabindex="-1" aria-labelledby="offcanvasexampleLabel">
    <div id="layoutSidenav_nav">
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="nav offcanvas-header">
        <div class="sb-sidenav-menu-heading">
            Inside
        </div>
    </div>
</nav>
    </div>
</div>
</body>
</html>