<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.head._head')

<body>
    <div class="layout">
        @yield('sidebar')
        <!-- Main Content -->
        <div class="main main-visible">
            @yield('content')
        </div>
        <!-- Main Content -->
    </div>

    @yield('extras')

    @stack('modals')

    @include('layouts.partials.script._scripts')

</body>
</html>
