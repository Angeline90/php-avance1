<link rel="stylesheet" href="style.css">
<form action="/thanks.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="user_firstname">
    </div>
    <div>
        <label for="email">Courriel :</label>
        <input type="email" id="mail" name="user_email">
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="texte" id="phone" name="user_phone">
    </div>
    <div>
        <label for="about">Sujet:</label>
        <select id="about" name="user_about"> 
            <option>Choisissez : </option>
            <option> Demande d'informations</option>
            <option> Réservation</option>
            <option> Réclamation</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>
