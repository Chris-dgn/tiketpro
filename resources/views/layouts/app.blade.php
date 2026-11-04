<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'TiketPro — Billetterie sécurisée')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="app-shell">

        <div class="topbar">
            <div class="topbar-inner">
                <a href="{{ route('home') }}" class="brand">
                    <span class="brand-mark brand-mark-orbit" aria-label="TiketPro">T</span>
                </a>

                <nav class="topnav-links">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 10.5L12 4l8 6.5"/><path d="M6 9.5V19a1 1 0 001 1h3v-5h4v5h3a1 1 0 001-1V9.5"/></svg>
                        {{ __('site.nav.home') }}
                    </a>
                    <a href="{{ route('acheter') }}" class="{{ request()->routeIs('acheter') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="20" r="1.3"/><circle cx="17" cy="20" r="1.3"/><path d="M3 4h2l2.4 11.2a1.8 1.8 0 001.8 1.4h7.2a1.8 1.8 0 001.8-1.4L20 8H6"/></svg>
                        {{ __('site.nav.buy') }}
                    </a>
                    <a href="{{ route('verifier') }}" class="{{ request()->routeIs('verifier') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="6.5" width="18" height="11" rx="2"/><path d="M9 6.5v11" stroke-dasharray="2 2"/></svg>
                        {{ __('site.nav.verify') }}
                    </a>
                    <a href="{{ route('remboursement') }}" class="{{ request()->routeIs('remboursement') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12a8 8 0 1 0 2.4-5.7"/><path d="M4 5v5h5"/></svg>
                        {{ __('site.nav.refund') }}
                    </a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5h16v13H7l-3 3V5z"/></svg>
                        {{ __('site.nav.contact') }}
                    </a>
                </nav>

                <form method="POST" action="{{ route('langue.changer') }}">
                    @csrf
                    <select class="lang-select" name="locale"
                            aria-label="{{ __('site.language.label') }}"
                            onchange="this.form.submit()">
                        <option value="fr" {{ app()->getLocale() === 'fr' ? 'selected' : '' }}>🇫🇷 Français</option>
                        <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>🇬🇧 English</option>
                        <option value="de" {{ app()->getLocale() === 'de' ? 'selected' : '' }}>🇩🇪 Deutsch</option>
                        <option value="es" {{ app()->getLocale() === 'es' ? 'selected' : '' }}>🇪🇸 Español</option>
                        <option value="nl" {{ app()->getLocale() === 'nl' ? 'selected' : '' }}>🇳🇱 Nederlands</option>
                    </select>
                </form>
            </div>
        </div>

        <main>
            @yield('content')
        </main>

        <footer class="site-footer">
            <div class="footer-inner">
                <a href="{{ route('home') }}" class="footer-brand">
                    <span class="brand-mark">T</span>
                    TiketPro
                </a>
                <p class="footer-copy">© {{ date('Y') }} TiketPro. {{ __('site.footer.rights') }}</p>
            </div>
        </footer>

        <nav class="bottom-nav">
            <a href="{{ route('home') }}" class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 10.5L12 4l8 6.5"/><path d="M6 9.5V19a1 1 0 001 1h3v-5h4v5h3a1 1 0 001-1V9.5"/></svg>
                {{ __('site.nav.home') }}
            </a>
            <a href="{{ route('acheter') }}" class="nav-item {{ request()->routeIs('acheter') ? 'active' : '' }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="20" r="1.3"/><circle cx="17" cy="20" r="1.3"/><path d="M3 4h2l2.4 11.2a1.8 1.8 0 001.8 1.4h7.2a1.8 1.8 0 001.8-1.4L20 8H6"/></svg>
                {{ __('site.nav.buy') }}
            </a>
            <a href="{{ route('verifier') }}" class="nav-item {{ request()->routeIs('verifier') ? 'active' : '' }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="6.5" width="18" height="11" rx="2"/><path d="M9 6.5v11" stroke-dasharray="2 2"/></svg>
                {{ __('site.nav.verify') }}
            </a>
            <a href="{{ route('remboursement') }}" class="nav-item {{ request()->routeIs('remboursement') ? 'active' : '' }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12a8 8 0 1 0 2.4-5.7"/><path d="M4 5v5h5"/></svg>
                {{ __('site.nav.refund_short') }}
            </a>
            <a href="{{ route('contact') }}" class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5h16v13H7l-3 3V5z"/></svg>
                {{ __('site.nav.contact') }}
            </a>
        </nav>

    </div>
</body>
</html>