<?
	if ($this->Paginator->numbers()) {
		$this->Paginator->options(array('url' => array(
			'objectType' => $this->request->param('objectType'),
			'?' => $this->request->query
		)));
?>
<div class="pagination">
	СТРАНИЦЫ: <?=$this->Paginator->numbers(array('separator' => ' '))?>
</div>
<?
	}
?>