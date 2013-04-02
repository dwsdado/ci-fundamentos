<div class="engloba">
<?php foreach ($news as $news_item): ?>


	<h2><?php echo $news_item['title']?></h2>
	<div id="main">
		
	</div>
	<p><a href="<?php echo site_url('/news/' . $news_item['slug']) ?>"><button> Visualizar </button></a>
	<a href="<?php echo site_url('/news/create') ?>"><button> Criar </button></a>
	<a href="<?php echo site_url('/news/update/' . $news_item['id']) ?>"><button> Editar </button></a>
	<a  href="<?php echo site_url('/news/deletar/' . $news_item['id']) ?>" ><button> Deletar </button></a></p>
	<hr>
	<br>
	<?php endforeach ?>
</div>