@include('layouts.head')
@push('css')
</head>

    <!-- START Wrapper -->
    <div class="wrapper">

@include('layouts.topbar')
@include('layouts.sidebar')

@yield('content')

@include('layouts.footer')
@push('js')
@include('layouts.tail')