<h2>Criar nova noticia</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

	<label for="title">Titulo</label> 
	<input type="input" name="title" /><br /><br>

	<label for="text">Texto</label>
	<textarea name="text"></textarea><br /><br>
	
	<input type="submit" name="submit" value="Criar nova Noticia" /> <br> <br>

</form>
