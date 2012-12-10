<h2>Informations</h2>

<?php echo validation_errors(); ?>
<?php echo $message; ?>
<?php echo form_open('formulaire/create'); ?>

	<label for="prenom">Prénom</label> 
	<input type="input" name="prenom" value="<?php echo set_value('prenom'); ?>"/><br />
	
	<label for="nom">Nom</label> 
	<input type="input" name="nom" value="<?php echo set_value('nom'); ?>"/><br />
	
	<label for="genre">Genre</label> 
	<select name="genre">
		<option value="vide" <?php echo set_select('genre', 'vide'); ?> ></option>
		<option value="Homme" <?php echo set_select('genre', 'Homme'); ?> >Homme</option>
		<option value="Femme" <?php echo set_select('genre', 'Femme'); ?> >Femme</option>
	</select><br />
	
	<label for="date_naissance">Date de naissance</label> 
	<input type="input" name="date_naissance" value="<?php echo set_value('date_naissance'); ?>" /><br />
	
	<label for="adresse">Adresse</label> 
	<input type="input" name="adresse" value="<?php echo set_value('adresse'); ?>" /><br />
	
	<label for="ville">Ville</label> 
	<input type="input" name="ville" value="<?php echo set_value('ville'); ?>" /><br />
	
	<label for="code_postal">Code postal</label> 
	<input type="input" name="code_postal" value="<?php echo set_value('code_postal'); ?>" /><br />
	
	<label for="courriel">Courriel</label> 
	<input type="input" name="courriel" value="<?php echo set_value('courriel'); ?>" /><br />
	
	<label for="telephone_domicile">Téléphone (domicile)</label> 
	<input type="input" name="telephone_domicile" value="<?php echo set_value('telephone_domicile'); ?>" /><br />
	
	<label for="telephone_cellulaire">Téléphone (cellulaire)</label> 
	<input type="input" name="telephone_cellulaire" value="<?php echo set_value('telephone_cellulaire'); ?>" /><br />
	
	<label for="telephone_travail">Téléphone (travail)</label> 
	<input type="input" name="telephone_travail" value="<?php echo set_value('telephone_travail'); ?>" /><br />
	
	<label for="ville_audition">Ville d'audition</label> 
	<select name='ville_audition'>
		<option value="Vide" <?php echo set_select('ville_audition', 'vide'); ?> ></option>
		<option value="Montréal" <?php echo set_select('ville_audition', 'Montréal'); ?> >Montréal</option>
		<option value="Québec" <?php echo set_select('ville_audition', 'Québec'); ?> >Québec</option>
	</select><br />
	
	<label for="lieu_naissance">Lieu de naissance</label> 
	<input type="input" name="lieu_naissance" value="<?php echo set_value('lieu_naissance'); ?>" /><br />
	
	<label for="nom_contact">Nom du contact</label> 
	<input type="input" name="nom_contact" value="<?php echo set_value('nom_contact'); ?>" /><br />
	
	<label for="relation_contact">Relation avec le contact</label> 
	<input type="input" name="relation_contact" value="<?php echo set_value('relation_contact'); ?>" /><br />
	
	<label for="telephone_domicile_contact">Téléphone du contact (domicile)</label> 
	<input type="input" name="telephone_domicile_contact" value="<?php echo set_value('telephone_domicile_contact'); ?>" /><br />
	
	<label for="telephone_cellulaire_contact">Téléphone du contact (cellulaire)</label> 
	<input type="input" name="telephone_cellulaire_contact" value="<?php echo set_value('telephone_cellulaire_contact'); ?>" /><br />
	
	<label for="telephone_travail_contact">Téléphone du contact (travail)</label> 
	<input type="input" name="telephone_travail_contact" value="<?php echo set_value('telephone_travail_contact'); ?>" /><br />
	
	<label for="courriel_contact">Courriel du contact</label> 
	<input type="input" name="courriel_contact" value="<?php echo set_value('courriel_contact'); ?>" /><br />
	
	<input type="submit" name="submit" value="Suite" /> 

</form>
