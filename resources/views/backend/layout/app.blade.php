<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layout.common-head')
</head>

<body class="g-sidenav-show  bg-gray-200">
    @include('backend.layout.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        
        @include('backend.layout.header')
        

        @section('main-content')
        @show
        {{-- @include('backend.layout.footer') --}}
    </main>
    
    @include('backend.layout.common-end')
    @stack('custom-scripts')
</body>
