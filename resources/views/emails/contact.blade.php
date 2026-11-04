<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Message de contact — TiketPro</title>
</head>
<body style="font-family: Arial, sans-serif; color: #222; line-height: 1.6;">
    <h2>Nouveau message de contact — TiketPro</h2>

    <p>Un visiteur vient de remplir le formulaire de contact.</p>

    <h3>Informations du visiteur</h3>
    <p><strong>Nom complet :</strong> {{ $donnees['nom'] ?? '—' }}</p>
    <p><strong>Adresse e-mail :</strong> {{ $donnees['email'] ?? '—' }}</p>
    <p><strong>Sujet :</strong> {{ $donnees['sujet'] ?? '—' }}</p>

    <h3>Message</h3>
    <p style="white-space: pre-line;">{{ $donnees['message'] ?? '—' }}</p>
</body>
</html>
