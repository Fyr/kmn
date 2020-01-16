<?
	$this->ArticleVars->init($article, $url, $title, $teaser, $src, 'noresize');
?>
	<h1><?=$title?></h1>
	<b><?=$this->PHTime->niceShort($article[$this->ArticleVars->getObjectType($article)]['modified'])?></b>
	<?=$this->ArticleVars->body($article)?>
