<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        

        
        .colorDime {
            color:bisque
        }

html, body { 
    height: 100%; 
    font-family: 'Ubuntu', sans-serif; 
} 
    </style>
    @extends('layout.link')
    @extends('layout.script')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
<div class="container-fluid p-0 d-flex h-100">
    <div id="bdSidebar" class="d-flex flex-column flex-shrink-0 p-3 bg-dark text-white  offcanvas-start pl-4">
<a href="#" class="navbar-brand text-center fw-bold" style="color:blueviolet">UDC</a>
<hr>
<ul class="colorDime nav nav-pills flex-column mb-auto">
    <li class="nav-item mb-1">
        <a href="{{ route('home.album') }}" class="colorDime pl-3" style="text-decoration: none;">
            <i class="colorDime fa-regular fa-image pe-2"></i>
            <span class="topic">Albums</span>
        </a>
    </li>
    <li class="nav-item mb-1 pt-3">
        <a href="{{ route("home.gallery") }}" class="colorDime" style="text-decoration: none;">
            <i class="colorDime fa-regular fa-camera pe-2"></i>
            <span class="topic">Foto</span>
        </a>
    </li>
   <li class="sidebar-item nav-item mb-1 pt-3">
<a href="#" class="sidebar-link collapsed colorDime" style="text-decoration: none" aria-expanded="false" data-bs-target="#settings" data-bs-toggle="collapse" aria-controls="settings">
<i class="fa-regular fa-cog pe-2"></i>
<span class="topic">Settings</span>
</a>
<ul class="sidebar-dropdown list-unstyled collapse" id="settings" data-bs-parent="#sidebar">
<li class="sidebar-item">
<a href="#" class="sidebar-link">
    <i class="fa fa-signin-in-alt pe-2">
        <span class="topic">LOGIN</span>
    </i>
</a>
</li>
</ul>
    </li>
</ul>


</div>
</body>
</html>
