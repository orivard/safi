<h2>Authentification</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('session/connecter') ?>
<B><?php echo $message ?></B><br>
	<label for="utilisateur">Utilisateur</label> 
	<input type="input" name="utilisateur" value="<?php echo set_value('utilisateur'); ?>" /><br />

	<label for="mot_de_passe">Mot de passe</label> 
	<input type="input" name="mot_de_passe" /><br />
	<br>
<input type="submit" name="submit" value="Connexion" /> 

</form>