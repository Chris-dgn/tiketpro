@extends('layouts.app')

@section('title', 'Vérifier un billet — TiketPro')

@section('content')

    <section class="section" style="padding-top: 32px; padding-bottom: 0;">
        <div class="page-head">
            <h1>Vérifier un billet</h1>
            <p>Entrez le code figurant sur votre billet TiketPro pour confirmer son authenticité.</p>
        </div>
    </section>

    <section class="section">
        <div class="purchase-card purchase-card-narrow">
            <form class="verify-form">
                <div class="form-group">
                    <label for="code">Code du billet</label>
                    <input type="text" id="code" name="code" placeholder="Ex. TKT-8X3F21" autocomplete="off">
                </div>

                <button type="submit" class="btn btn-primary btn-full">Vérifier mon billet</button>
            </form>

            <div class="purchase-trust">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="11" width="14" height="9" rx="2"/><path d="M8 11V7a4 4 0 018 0v4"/></svg>
                Le code n'est contrôlé que dans la base de billets de TiketPro.
            </div>
        </div>
    </section>

    <section class="section" style="padding-bottom: 48px;">
        <div class="section-head">
            <h2>Pourquoi vérifier votre billet</h2>
        </div>

        <div class="features-icons">
            <div class="feature-icon-card">
                <div class="feature-icon feature-icon-amber">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 9v4"/><path d="M12 17h.01"/><path d="M10.3 3.9L2.8 17a2 2 0 001.7 3h15a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/></svg>
                </div>
                <h3>Détection des faux billets</h3>
                <p>Un billet copié ou revendu plusieurs fois est immédiatement signalé.</p>
            </div>
            <div class="feature-icon-card">
                <div class="feature-icon feature-icon-teal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/></svg>
                </div>
                <h3>Résultat instantané</h3>
                <p>La réponse s'affiche en quelques secondes, sans attente.</p>
            </div>
            <div class="feature-icon-card">
                <div class="feature-icon feature-icon-amber">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="11" width="14" height="9" rx="2"/><path d="M8 11V7a4 4 0 018 0v4"/></svg>
                </div>
                <h3>Données protégées</h3>
                <p>Seul le code du billet est contrôlé, aucune autre donnée n'est demandée.</p>
            </div>
            <div class="feature-icon-card">
                <div class="feature-icon feature-icon-teal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M8.5 12.3l2.2 2.2 4.3-4.6"/></svg>
                </div>
                <h3>Fiabilité du contrôle</h3>
                <p>Chaque billet émis par TiketPro est comparé à son enregistrement d'origine.</p>
            </div>
        </div>
    </section>

@endsection
