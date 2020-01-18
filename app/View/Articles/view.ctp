<?
	$this->ArticleVars->init($article, $url, $title, $teaser, $src, 'noresize');
?>
	<h1><?=$title?></h1>
	<p><?=$this->PHTime->niceShort($article[$this->ArticleVars->getObjectType($article)]['modified'])?></p>
	<?=$this->ArticleVars->body($article)?>
<?
	if ($objectType === 'Photoalbum') {
?>
<div class="fourth-content">
	<div class="row">

<?
		foreach($aMedia as $media) {
			$alt = $media['Media']['orig_fname'];
			$orig = $this->Media->imageUrl($media, 'noresize');
?>
		<div class="col-md-4 col-sm-6">
			<div class="item">
				<div class="thumb">
					<!--a href="<?=$this->Media->imageUrl($media, 'noresize')?>" data-lightbox="image-1">
						<div class="hover-effect">
							<div class="hover-content">
								<h2><?=$title?></h2>
								<p><?=$teaser?></p>
							</div>
						</div>
					</a-->
					<div class="image">
						<a class="fancybox" href="<?=$orig?>" rel="photoalobum">
							<img src="<?=$this->Media->imageUrl($media, 'thumb600x400')?>" alt="<?=$alt?>">
						</a>
					</div>
				</div>
			</div>
		</div>
<?
		}
?>
	</div>
</div>
<script>
$(function(){
	$('.fancybox').fancybox({
		padding: 5
	});
});
</script>
<?
	}
?>