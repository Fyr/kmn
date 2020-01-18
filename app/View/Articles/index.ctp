<?
    $title = $this->ObjectType->getTitle('index', $objectType);
    echo $this->element('title', compact('title'));
?>

<div class="col-md-12 <?=($objectType == 'Photoalbum') ? 'fourth-content' : ''?>">
    <div class="row">
        <?=$this->element('paginate')?>
    </div>
    <div class="row">
<?
    $odd = true;
    foreach($aArticles as $article) {
        $objectType = $this->ArticleVars->getObjectType($article);
        if ($objectType === 'Photoalbum') {
            echo $this->element('../Articles/_gallery', compact('article'));
        } else {
            $odd = !$odd;
            if ($odd) {
                echo $this->element('../Articles/_left_article', compact('article'));
            } else {
                echo $this->element('../Articles/_right_article', compact('article'));
            }
        }
    }
?>
    </div>
    <div class="row">
        <?=$this->element('paginate')?>
    </div>
</div>