<h2>Questions</h2>

<?php echo validation_errors(); ?>
<?php echo form_open('formulaire/questions1'); ?>
	
	<label for="confirm_id"></label> 
	<input type="hidden" name="confirm_id" value="<?php echo set_value('confirm_id', $confirm_id); ?>"/>
	
	<label for="question1">Blah blah question 1?</label> 
	<input type="input" name="question1" value="<?php echo set_value('question1'); ?>"/><br />
	
	<label for="question2">Veni vidi vici question 2?</label> 
	<input type="input" name="question2" value="<?php echo set_value('question2'); ?>"/><br />
	
	<input type="submit" name="submit" value="Terminer" /> 

</form>