<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img class="brand-logo" src="{{ asset('assets/visual-pymes_isotipo.png') }}" alt="{{ config('app.name') }}">
        <h1>{{ config('app.name', 'Laravel') }}</h1>
    </a>

    <x-navbar />
</nav>