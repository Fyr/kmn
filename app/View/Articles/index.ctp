<div class="col-md-12">
    <div class="row">
        <?=$this->element('paginate')?>
    </div>
    <div class="row">
<?
    $odd = true;
    foreach($aArticles as $article) {
        $odd = !$odd;
        if ($odd) {
            echo $this->element('../Articles/_left_article', compact('article'));
        } else {
            echo $this->element('../Articles/_right_article', compact('article'));
        }
    }
?>
    </div>
    <div class="row">
        <?=$this->element('paginate')?>
    </div>
</div>