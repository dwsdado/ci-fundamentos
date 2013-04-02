<h2>Atualizar noticia</h2>


<?php echo form_open('news/update/'. $news['id']) ?>

	<label for="title">Titulo</label> 
	<input type="input" name="title" value="<?php echo $news['title'] ?>"/><br /><br>

	<label for="text">Texto</label>
	<textarea name="text"> <?php echo $news['text'] ?>  </textarea><br/><br>
	
	<input type="submit" name="submit" value="Atualizar Noticia" /> <br> <br>

</form>
