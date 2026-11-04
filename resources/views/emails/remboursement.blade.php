<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Demande de remboursement — TiketPro</title>
</head>
<body style="font-family: Arial, sans-serif; color: #222; line-height: 1.6;">
    <h2>Nouvelle demande de remboursement — TiketPro</h2>

    <p>Une nouvelle demande de remboursement a été soumise.</p>

    <h3>Informations du demandeur</h3>
    <p><strong>Nom complet :</strong> {{ $donnees['nom'] ?? '—' }}</p>
    <p><strong>Email :</strong> {{ $donnees['email'] ?? '—' }}</p>
    <p><strong>Téléphone :</strong> {{ $donnees['telephone'] ?? '—' }}</p>

    <h3>Informations du ticket</h3>
    <p><strong>Code du ticket :</strong> {{ $donnees['reference'] ?? '—' }}</p>
    <p><strong>Type de billet :</strong> {{ $donnees['type_billet'] ?? '—' }}</p>
    <p><strong>Montant demandé :</strong> {{ $donnees['montant'] ?? '—' }} €</p>
    <p><strong>Date d'achat :</strong> {{ $donnees['date_achat'] ?? '—' }}</p>

    <h3>Motif de la demande</h3>
    <p>{{ $donnees['motif'] ?? '—' }}</p>

    <h3>Informations complémentaires</h3>
    <p>{{ $donnees['details'] ?? 'Aucune information complémentaire.' }}</p>
</body>
</html>
