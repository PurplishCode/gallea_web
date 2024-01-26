<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        .stayactive {
            display:none;

        }

        .stayactive.active {
            display:block;
        }
    </style>
    @extends('layout.link')
    @extends('layout.script')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
<a href="#" class="navbar-brand ps-3" style="font-family:Verdana, Geneva, Tahoma, sans-serif ;font-weight:bold">UDC</a>
<button type="button" class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!" data-bs-toggle="offcanvas" data-bs-target="offcanvas" aria-controls="offcanvasexample"><i class="fas fa-bars"></i></button>

<button class="btn btn-primary" id="activeButton" type="button">Test</button>
</nav>
    </div>
</div>

<div class="stayactive">
    Let's see an experiment!
</div>

<script>
$(document).ready(function()
{
$("activebutton").on("click", function()
{
    $(".stayactive").addClass("active");
})
});
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>