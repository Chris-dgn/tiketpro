<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body style="font-family: Arial, sans-serif; color: #12182a; line-height: 1.6;">
    <h2>Nouvelle demande de vérification — TiketPro</h2>
    <table cellpadding="8" style="border-collapse: collapse;">
        <tr>
            <td><strong>Type de ticket</strong></td>
            <td>{{ $donnees['evenement'] ?? '—' }}</td>
        </tr>
        <tr>
            <td><strong>Montant</strong></td>
            <td>{{ $donnees['montant'] ?? '—' }}</td>
        </tr>
        <tr>
            <td><strong>Code du billet</strong></td>
            <td>{{ $donnees['code'] ?? '—' }}</td>
        </tr>
        <tr>
            <td><strong>Email du titulaire</strong></td>
            <td>{{ $donnees['email'] ?? '—' }}</td>
        </tr>
        <tr>
            <td><strong>Résultat souhaité par email</strong></td>
            <td>{{ ($donnees['recevoir_email'] ?? 'non') === 'oui' ? 'Oui' : 'Non' }}</td>
        </tr>
    </table>
    <p style="color: #9c9789; font-size: 12px; margin-top: 24px;">Envoyé depuis le formulaire de vérification de TiketPro.</p>
</body>
</html>
