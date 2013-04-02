<div class='engloba'>
	<?php

		echo "<h1>". $news['title']. "</h1>"; 
		echo $news['text'];
	?>
<br> <br>
<p><a href="<?php echo site_url('/news/') ?>"><button> Noticias </button></a>
<a href="<?php echo site_url('/news/create') ?>"><button> Criar nova Noticia </button></a></p>
</div>