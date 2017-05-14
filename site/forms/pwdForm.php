<form action="chgPwd.php" method="post">
    <label class="label">Mot de passe actuel :</label>
    <input class="login text" type="password" name="currentPWD" id="currentPWD">

    <label class="label">Nouveau mot de passe :</label>
    <input class="login text" type="password" name="newPWD1" id="newPWD1" title="Minimum 4 caractères, au moins 1 majuscule, 1 minuscule et 1 chiffre.">

    <label class="label">Nouveau mot de passe :</label>
    <input class="login text" type="password" name="newPWD2" id="newPWD2" title="Minimum 4 caractères, au moins 1 majuscule, 1 minuscule et 1 chiffre.">

    <div class="changingData wid">
        <div class="btn saveChanges">
            <input type="submit" value="Enregistrer" title="Enregistrer le changement" id="disabled" disabled>
        </div>
        <div class="btn cancelChanges" title="Retour à votre compte"  onclick="cancel()">
            <p>Annuler</p>
        </div>
    </div>
</form>
