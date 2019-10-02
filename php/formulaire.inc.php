<form action="php/post_contact.php" method="POST" class="formulaire">
    <div class="row">
        <div class="col-2">
            <label for="emailinput">E-mail</label>
        </div>
        <div class="col-1">
            <i class="fas fa-angle-right"></i>
        </div>
        <div class="col-9">
            <input type="email" name="email" id="emailinput" placeholder="payet.marielyse@gmail.com...">
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <label for="objetinput">Objet</label>
        </div>
        <div class="col-1">
            <i class="fas fa-angle-right"></i>
        </div>
        <div class="col-9">
            <input type="text" name="objet"  id="objetinput" placeholder="objet de votre message...">
        </div>
    </div>
    <div class="row">
        <textarea name="texte" placeholder="votre message..." rows="6"></textarea>
    </div>
    <div class="row">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
</form>