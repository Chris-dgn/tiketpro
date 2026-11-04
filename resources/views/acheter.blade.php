@extends('layouts.app')

@section('title', __('buy.title') . ' — TiketPro')

@section('content')

    <section class="section" style="padding-top: 32px; padding-bottom: 0;">
        <div class="page-head">
            <h1>{{ __('buy.title') }}</h1>
            <p>{{ __('buy.intro') }}</p>
        </div>
    </section>

    <section class="section">
        <div class="purchase-card">
            <div class="purchase-card-head">
                <h2>{{ __('buy.platforms_title') }}</h2>
                <p>{{ __('buy.platforms_text') }}</p>
            </div>

            <div class="events-grid">
                @foreach ($evenements as $evenement)
                    <div class="event-card">
                        <div class="event-cover">
                            @if (!empty($evenement['image']))
                                <img src="{{ asset($evenement['image']) }}" alt="" class="event-cover-img" style="object-position: {{ $evenement['position'] ?? 'center' }};">
                            @endif
                            <span class="event-category">{{ $evenement['categorie'] }}</span>
                        </div>
                        <div class="event-body">
                            <h3>{{ $evenement['titre'] }}</h3>
                            <p class="event-lieu">{{ $evenement['lieu'] }}</p>
                            <div class="event-footer">
                                <a href="{{ $evenement['lien'] ?? '#' }}" target="_blank" rel="noopener noreferrer" class="btn btn-dark btn-sm">{{ $evenement['bouton'] ?? __('buy.buy_button') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="purchase-trust">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="11" width="14" height="9" rx="2"/><path d="M8 11V7a4 4 0 018 0v4"/></svg>
                {{ __('buy.secure') }}
            </div>
        </div>
    </section>

    <section class="section">
        <div class="section-head">
            <h2>{{ __('buy.steps_title') }}</h2>
            <p>{{ __('buy.steps_intro') }}</p>
        </div>

        <div class="steps-numbered">
            <div class="step-numbered">
                <div class="step-circle">1</div>
                <h3>{{ __('buy.steps.one_title') }}</h3>
                <p>{{ __('buy.steps.one_text') }}</p>
            </div>
            <div class="step-numbered">
                <div class="step-circle">2</div>
                <h3>{{ __('buy.steps.two_title') }}</h3>
                <p>{{ __('buy.steps.two_text') }}</p>
            </div>
            <div class="step-numbered">
                <div class="step-circle">3</div>
                <h3>{{ __('buy.steps.three_title') }}</h3>
                <p>{{ __('buy.steps.three_text') }}</p>
            </div>
            <div class="step-numbered">
                <div class="step-circle">4</div>
                <h3>{{ __('buy.steps.four_title') }}</h3>
                <p>{{ __('buy.steps.four_text') }}</p>
            </div>
        </div>
    </section>

    <section class="section" style="padding-bottom: 48px;">
        <div class="section-head">
            <h2>{{ __('buy.why_title') }}</h2>
        </div>

        <div class="features-icons">
            <div class="feature-icon-card">
                <div class="feature-icon feature-icon-amber">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l7 3v5c0 4.5-3 8-7 10-4-2-7-5.5-7-10V6l7-3z"/></svg>
                </div>
                <h3>{{ __('buy.features.security_title') }}</h3>
                <p>{{ __('buy.features.security_text') }}</p>
            </div>
            <div class="feature-icon-card">
                <div class="feature-icon feature-icon-teal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg>
                </div>
                <h3>{{ __('buy.features.activation_title') }}</h3>
                <p>{{ __('buy.features.activation_text') }}</p>
            </div>
            <div class="feature-icon-card">
                <div class="feature-icon feature-icon-amber">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M4 13v-1a8 8 0 0 1 16 0v1"/><rect x="3" y="13" width="4" height="6" rx="1.5"/><rect x="17" y="13" width="4" height="6" rx="1.5"/></svg>
                </div>
                <h3>{{ __('buy.features.support_title') }}</h3>
                <p>{{ __('buy.features.support_text') }}</p>
            </div>
            <div class="feature-icon-card">
                <div class="feature-icon feature-icon-teal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M8.5 12.3l2.2 2.2 4.3-4.6"/></svg>
                </div>
                <h3>{{ __('buy.features.authenticity_title') }}</h3>
                <p>{{ __('buy.features.authenticity_text') }}</p>
            </div>
        </div>
    </section>

@endsection