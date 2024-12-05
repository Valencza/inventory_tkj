@include('auth.layouts.head')
@push('css')

<body class="h-100">

@yield('content')

@push('js')
@include('auth.layouts.tail')