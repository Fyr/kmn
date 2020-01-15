<div class="col-md-12">
    <div class="row">
<?
    $odd = true;
    foreach($aArticles as $article) {
        $odd = !$odd;
        if ($odd) {
            echo $this->element('../News/_left_article', compact('article'));
        } else {
            echo $this->element('../News/_right_article', compact('article'));
        }
    }
?>
    </div>
</div>