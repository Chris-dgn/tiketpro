@extends('layouts.app')

@section('content')
<main class="contact-page">

    <section class="contact-hero">
        <span class="contact-eyebrow">{{ __("contact.eyebrow") }}</span>
        <h1>{{ __("contact.title") }}</h1>
        <p>{{ __("contact.intro") }}</p>
    </section>

    <section class="contact-methods">
        <article class="contact-method-card">
            <div class="contact-method-icon">✉</div>
            <h2>{{ __("contact.email_title") }}</h2>
            <p>{{ __("contact.email_text") }}</p>
            <strong>contact@usecardpro.com</strong>
            <span>{{ __("contact.email_response") }}</span>
        </article>

        <article class="contact-method-card">
            <div class="contact-method-icon">☏</div>
            <h2>{{ __("contact.chat_title") }}</h2>
            <p>{{ __("contact.chat_text") }}</p>
            <strong>{{ __("contact.chat_support") }}</strong>
            <span>{{ __("contact.chat_response") }}</span>
        </article>
    </section>

    <section class="contact-form-section">
        <div class="contact-section-heading">
            <span class="contact-eyebrow">{{ __("contact.form_eyebrow") }}</span>
            <h2>{{ __("contact.form_title") }}</h2>
            <p>{{ __("contact.form_intro") }}</p>
        </div>

        <form class="contact-form" method="POST" action="{{ route('contact.soumettre') }}">
            @csrf

            <div class="contact-form-group">
                <label for="contact-nom">{{ __("contact.name") }}</label>
                <input id="contact-nom" name="nom" type="text"
                       value="{{ old('nom') }}"
                       placeholder="{{ __("contact.name_placeholder") }}" required>
            </div>

            <div class="contact-form-group">
                <label for="contact-email">{{ __("contact.email") }}</label>
                <input id="contact-email" name="email" type="email"
                       value="{{ old('email') }}"
                       placeholder="vous@exemple.com" required>
            </div>

            <div class="contact-form-group">
                <label for="contact-sujet">{{ __("contact.subject") }}</label>
                <select id="contact-sujet" name="sujet" required>
                    <option value="">{{ __("contact.subject_placeholder") }}</option>
                    <option value="Question sur la vérification">{{ __("contact.subjects.verification") }}</option>
                    <option value="Demande de remboursement">{{ __("contact.subjects.refund") }}</option>
                    <option value="Problème technique">{{ __("contact.subjects.technical") }}</option>
                    <option value="Question générale">{{ __("contact.subjects.general") }}</option>
                    <option value="Signalement">{{ __("contact.subjects.report") }}</option>
                </select>
            </div>

            <div class="contact-form-group">
                <label for="contact-message">{{ __("contact.message") }}</label>
                <textarea id="contact-message" name="message" rows="6"
                          placeholder="{{ __("contact.message_placeholder") }}"
                          required>{{ old('message') }}</textarea>
            </div>

            <button class="contact-submit" type="submit">{{ __("contact.submit") }}</button>
            <p class="contact-form-note">{{ __("contact.privacy") }}</p>
        </form>
    </section>

    <section class="contact-faq">
        <div class="contact-section-heading">
            <span class="contact-eyebrow">{{ __("contact.faq_eyebrow") }}</span>
            <h2>{{ __("contact.faq_title") }}</h2>
        </div>

        <div class="contact-faq-grid">
            <article class="contact-faq-item">
                <h3>{{ __("contact.faq.verification_question") }}</h3>
                <p>{{ __("contact.faq.verification_answer") }}</p>
            </article>

            <article class="contact-faq-item">
                <h3>{{ __("contact.faq.ticket_question") }}</h3>
                <p>{{ __("contact.faq.ticket_answer") }}</p>
            </article>

            <article class="contact-faq-item">
                <h3>{{ __("contact.faq.refund_question") }}</h3>
                <p>{{ __("contact.faq.refund_answer") }}</p>
            </article>

            <article class="contact-faq-item">
                <h3>{{ __("contact.faq.data_question") }}</h3>
                <p>{{ __("contact.faq.data_answer") }}</p>
            </article>
        </div>
    </section>

</main>
@endsection
