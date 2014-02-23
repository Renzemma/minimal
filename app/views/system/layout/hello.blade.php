<!DOCTYPE html>
<html>


{{-- Encabezado (head) --}}
@include('system.layout.header')

<body>

{{-- Contenido General --}}
@yield('content')

{{-- Pie del Sitio --}}
@include('system.layout.footer')

</body>

</html>
