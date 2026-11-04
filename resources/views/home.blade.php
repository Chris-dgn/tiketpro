@extends('layouts.app')

@section('title', 'TiketPro — Billetterie sécurisée')

@section('content')

    <section class="hero">
        <div class="hero-main">
            <div class="hero-copy">
                <h1>{!! __('home.hero_title') !!}</h1>
                <div class="hero-actions">
                    <a href="{{ route('acheter') }}" class="btn btn-primary">{{ __('home.buy_button') }}</a>
                    <a href="{{ route('verifier') }}" class="btn btn-ghost">{{ __('home.verify_button') }}</a>
                </div>
            </div>

            <div class="hero-visual">
                <img src="{{ asset('images/tiketpro-hero.jpg') }}" alt="Cartes prépayées Transcash et PCS">
            </div>
        </div>

        <div class="stats">
            <div><strong><span class="counter" data-target="100">0</span>%</strong><span>{{ __('home.stats.tracked') }}</span></div>
            <div><strong>48h</strong><span>{{ __('home.stats.refund') }}</span></div>
            <div><strong>7j/7</strong><span>{{ __('home.stats.support') }}</span></div>
        </div>
    </section>

    <section class="section">
        <div class="section-head">
            <h2>{{ __('home.how.title') }}</h2>
            <p>{{ __('home.how.subtitle') }}</p>
        </div>
        <div class="cards">
            <div class="card">
                <div class="card-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="20" r="1.3"/><circle cx="17" cy="20" r="1.3"/><path d="M3 4h2l2.4 11.2a1.8 1.8 0 001.8 1.4h7.2a1.8 1.8 0 001.8-1.4L20 8H6"/></svg>
                </div>
                <div>
                    <h3>{{ __('home.how.buy_title') }}</h3>
                    <p>{{ __('home.how.buy_text') }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 9a2 2 0 012-2h14a2 2 0 012 2v1a2 2 0 000 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2v-1a2 2 0 000-4V9z"/></svg>
                </div>
                <div>
                    <h3>{{ __('home.how.verify_title') }}</h3>
                    <p>{{ __('home.how.verify_text') }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 12a9 9 0 109-9"/><path d="M3 4v6h6"/></svg>
                </div>
                <div>
                    <h3>{{ __('home.how.refund_title') }}</h3>
                    <p>{{ __('home.how.refund_text') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="padding-bottom: 24px;">
        <div class="section-head">
            <h2>{{ __('home.why.title') }}</h2>
        </div>
        <div class="cards">
            <div class="card">
                <div class="card-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3l7 3v5c0 4.5-3 8-7 10-4-2-7-5.5-7-10V6l7-3z"/></svg>
                </div>
                <div>
                    <h3>{{ __('home.why.tracking_title') }}</h3>
                    <p>{{ __('home.why.tracking_text') }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16v13H7l-3 3V4z"/></svg>
                </div>
                <div>
                    <h3>{{ __('home.why.support_title') }}</h3>
                    <p>{{ __('home.why.support_text') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="padding-bottom: 48px;">
        <div class="section-head">
            <h2>{{ __('home.reviews.title') }}</h2>
            <p>{{ __('home.reviews.subtitle') }}</p>
        </div>
        <div class="reviews">
            <div class="review">
                <div class="review-stars">★★★★★</div>
                <p>{{ __('home.reviews.one_text') }}</p>
                <div class="review-author">
                    <div class="review-avatar">M</div>
                    <div>
                        <div class="review-author-name">Marine D.</div>
                        <div class="review-author-meta">{{ __('home.reviews.one_meta') }}</div>
                    </div>
                </div>
            </div>
            <div class="review">
                <div class="review-stars">★★★★★</div>
                <p>{{ __('home.reviews.two_text') }}</p>
                <div class="review-author">
                    <div class="review-avatar">K</div>
                    <div>
                        <div class="review-author-name">Karim B.</div>
                        <div class="review-author-meta">{{ __('home.reviews.two_meta') }}</div>
                    </div>
                </div>
            </div>
            <div class="review">
                <div class="review-stars">★★★★☆</div>
                <p>{{ __('home.reviews.three_text') }}</p>
                <div class="review-author">
                    <div class="review-avatar">S</div>
                    <div>
                        <div class="review-author-name">Salomé T.</div>
                        <div class="review-author-meta">{{ __('home.reviews.three_meta') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection