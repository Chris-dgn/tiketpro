
@extends('layouts.app')

@section('title', __('refund.title') . ' — TiketPro')

@section('content')

<section class="section" style="padding-top: 32px;">

    <div class="page-head">
        <h1>{{ __('refund.title') }}</h1>
        <p>
            {{ __('refund.intro') }}
        </p>
    </div>

</section>

<section class="section">

    <div class="purchase-card purchase-card-narrow">

        <div class="purchase-card-head">
            <h2>{{ __('refund.form_title') }}</h2>
            <p>{{ __('refund.required_notice') }}</p>
        </div>

        @if ($errors->any())
            <div class="verify-result verify-result-ko">
                <strong>{{ __('refund.errors_title') }}</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('envoye'))
            <div class="verify-result verify-result-ok">
                <strong>{{ __('refund.success_title') }}</strong>
                {{ __('refund.success_text') }}
            </div>
        @endif

        <form class="refund-form" method="POST"
              action="{{ route('remboursement.soumettre') }}">
            @csrf

            <div class="form-group">
                <label for="nom">
                    {{ __('refund.full_name') }}
                    <span class="required-mark">*</span>
                </label>
                <input type="text" id="nom" name="nom"
                       value="{{ old('nom') }}"
                       placeholder="{{ __('refund.name_placeholder') }}" required>
            </div>

            <div class="form-group">
                <label for="email">
                    {{ __('refund.email') }}
                    <span class="required-mark">*</span>
                </label>
                <input type="email" id="email" name="email"
                       value="{{ old('email') }}"
                       placeholder="{{ __('refund.email_placeholder') }}" required>
            </div>

            <div class="form-group">
                <label for="telephone">
                    {{ __('refund.phone') }}
                </label>
                <input type="tel" id="telephone" name="telephone"
                       value="{{ old('telephone') }}"
                       placeholder="{{ __('refund.phone_placeholder') }}">
            </div>

            <div class="form-group">
                <label for="reference">
                    {{ __('refund.ticket_code') }}
                    <span class="required-mark">*</span>
                </label>
                <input type="text" id="reference" name="reference"
                       value="{{ old('reference') }}"
                       placeholder="{{ __('refund.ticket_placeholder') }}" required>
            </div>

            <div class="form-group">
                <label for="type_billet">
                    {{ __('refund.ticket_type') }}
                    <span class="required-mark">*</span>
                </label>

                <div class="custom-suggestion">
                    <input type="text" id="type_billet" name="type_billet"
                           value="{{ old('type_billet') }}"
                           placeholder="{{ __('refund.type_placeholder') }}"
                           autocomplete="off" required>

                    <button type="button" class="suggestion-toggle"
                            aria-label="{{ __('refund.show_ticket_types') }}"
                            aria-expanded="false"
                            data-target="liste-types">▾</button>
                    <div class="suggestion-list" id="liste-types" hidden>
                        <button type="button" data-value="Transcash">Transcash</button>
                        <button type="button" data-value="Neosurf">Neosurf</button>
                        <button type="button" data-value="Steam">Steam</button>
                        <button type="button" data-value="Paysafecard">Paysafecard</button>
                        <button type="button" data-value="Apple Card">Apple Card</button>
                        <button type="button" data-value="Google Play">Google Play</button>
                        <button type="button" data-value="PCS Mastercard">PCS Mastercard</button>
                    </div>
                </div>
            </div>

            <div class="form-group">
               <label for="montant">
    {{ __('refund.amount') }} (€)
    <span class="required-mark">*</span>
</label>
                <div class="custom-suggestion">
                    <input type="number" id="montant" name="montant"
                           min="1" step="0.01"
                           value="{{ old('montant') }}"
                          placeholder="{{ __('refund.amount_placeholder') }}"
                           autocomplete="off" required>
                    <button type="button" class="suggestion-toggle"
                            aria-label="Afficher les montants"
                            aria-expanded="false" data-target="liste-montants">▾</button>
                    <div class="suggestion-list" id="liste-montants" hidden>
                        <button type="button" data-value="10">10 €</button>
                        <button type="button" data-value="20">20 €</button>
                        <button type="button" data-value="50">50 €</button>
                        <button type="button" data-value="100">100 €</button>
                        <button type="button" data-value="150">150 €</button>
                        <button type="button" data-value="200">200 €</button>
                        <button type="button" data-value="250">250 €</button>
                        <button type="button" data-value="500">500 €</button>
                        <button type="button" data-value="1000">1 000 €</button>
                    </div>
                </div>
            </div>

          <div class="form-group">
    <label for="date_achat">
        {{ __('refund.purchase_date') }}
        <span class="required-mark">*</span>
    </label>

    <input type="date" id="date_achat" name="date_achat"
           value="{{ old('date_achat') }}" required>
</div>

<div class="form-group">
    <label for="motif">
        {{ __('refund.reason') }}
        <span class="required-mark">*</span>
    </label>

    <select id="motif" name="motif" required>
        <option value="">{{ __('refund.reason_placeholder') }}</option>
        <option value="Paiement effectue mais commande non confirmee">{{ __('refund.reason_payment_unconfirmed') }}</option>
        <option value="Erreur lors de la commande">{{ __('refund.reason_order_error') }}</option>
        <option value="Montant incorrect">{{ __('refund.reason_wrong_amount') }}</option>
        <option value="Ticket ou carte non conforme">{{ __('refund.reason_invalid_ticket') }}</option>
        <option value="Demande d'annulation">{{ __('refund.reason_cancellation') }}</option>
        <option value="Paiement en double">{{ __('refund.reason_duplicate_payment') }}</option>
        <option value="Autre">{{ __('refund.reason_other') }}</option>
    </select>
</div>

<div class="form-group">
    <label for="details">
        {{ __('refund.additional_details') }}
    </label>

    <textarea id="details" name="details"
              rows="5"
              placeholder="{{ __('refund.details_placeholder') }}">{{ old('details') }}</textarea>
</div>

<button type="submit" class="btn btn-primary btn-full">
    {{ __('refund.submit_request') }}
</button>

</form>

<div class="purchase-trust">
    {{ __('refund.privacy_notice') }}
</div>

</div>
</section>


<!-- SECTIONS CONDITIONS REMBOURSEMENT -->

<section class="refund-info-section">
    <div class="refund-section-heading">
        <h2>{{ __('refund.conditions_title') }}</h2>
    </div>

    <div class="refund-conditions-grid">

        <article class="refund-condition-card">
            <div class="refund-icon">✓</div>
            <h3>{{ __('refund.conditions.delay_title') }}</h3>
            <p>{{ __('refund.conditions.delay_text') }}</p>
        </article>

        <article class="refund-condition-card">
            <div class="refund-icon">▤</div>
            <h3>{{ __('refund.conditions.proof_title') }}</h3>
            <p>{{ __('refund.conditions.proof_text') }}</p>
        </article>

        <article class="refund-condition-card">
            <div class="refund-icon">⊘</div>
            <h3>{{ __('refund.conditions.unused_title') }}</h3>
            <p>{{ __('refund.conditions.unused_text') }}</p>
        </article>

        <article class="refund-condition-card">
            <div class="refund-icon">◈</div>
            <h3>{{ __('refund.conditions.authenticity_title') }}</h3>
            <p>{{ __('refund.conditions.authenticity_text') }}</p>
        </article>

    </div>
</section>

<section class="refund-info-section refund-timeline-section">

    <div class="refund-section-heading">
        <h2>{{ __('refund.timeline_title') }}</h2>
        <p>{{ __('refund.timeline_intro') }}</p>
    </div>

    <div class="refund-timeline-grid">

        <article class="refund-step-card">
            <div class="refund-step-number">1</div>
            <h3>{{ __('refund.steps.verification_title') }}</h3>
            <p>{{ __('refund.steps.verification_text') }}</p>
        </article>

        <article class="refund-step-card">
            <div class="refund-step-number">2</div>
            <h3>{{ __('refund.steps.processing_title') }}</h3>
            <p>{{ __('refund.steps.processing_text') }}</p>
        </article>

        <article class="refund-step-card">
            <div class="refund-step-number">3</div>
            <h3>{{ __('refund.steps.receipt_title') }}</h3>
            <p>{{ __('refund.steps.receipt_text') }}</p>
        </article>

    </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.custom-suggestion').forEach(function (wrapper) {
        const input = wrapper.querySelector('input');
        const toggle = wrapper.querySelector('.suggestion-toggle');
        const list = wrapper.querySelector('.suggestion-list');

        toggle.addEventListener('click', function () {
            const opening = list.hidden;

            document.querySelectorAll('.suggestion-list').forEach(function (otherList) {
                otherList.hidden = true;
            });
            document.querySelectorAll('.suggestion-toggle').forEach(function (otherToggle) {
                otherToggle.setAttribute('aria-expanded', 'false');
            });

            list.hidden = !opening;
            toggle.setAttribute('aria-expanded', String(opening));
        });

        list.querySelectorAll('button[data-value]').forEach(function (option) {
            option.addEventListener('click', function () {
                input.value = option.dataset.value;
                input.dispatchEvent(new Event('input', { bubbles: true }));
                list.hidden = true;
                toggle.setAttribute('aria-expanded', 'false');
            });
        });
    });

    document.addEventListener('click', function (event) {
        if (!event.target.closest('.custom-suggestion')) {
            document.querySelectorAll('.suggestion-list').forEach(function (list) {
                list.hidden = true;
            });
            document.querySelectorAll('.suggestion-toggle').forEach(function (toggle) {
                toggle.setAttribute('aria-expanded', 'false');
            });
        }
    });
});
</script>

@endsection
