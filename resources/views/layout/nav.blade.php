@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark bg-success">
    <div class="container">
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/logoNav.png') }}" alt="image" width="40px" style="margin-right: 5px;">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"> MyInventory</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link @if($currentRouteName == 'home') active @endif">Home</a></li>

                <li class="nav-item col-2 col-md-auto"><a href="{{ route('listBarang.index') }}" class="nav-link @if($currentRouteName == 'listBarang') active @endif">List Barang</a></li>

            </ul>

            <hr class="d-md-none text-white-50">

            <a href="" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> Rangga Raditya Hariyanto</a>
        </div>
    </div>
</nav>
