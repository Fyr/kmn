<?
    $this->ArticleVars->init($article, $url, $title, $teaser, $src, 'thumb600x400');
    $class = 'pull-right';
?>
        <div class="first-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-content">
                            <a href="<?=$url?>"><h2><?=$title?></h2></a>
                            <p><?=$teaser?></p>
                            <b><?=$this->PHTime->niceShort($article[$this->ArticleVars->getObjectType($article)]['modified'])?></b>
                            <?=$this->element('more', compact('url', 'class'))?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                            <a href="<?=$url?>" title="<?=$title?>">
                                <img src="<?=$src?>" alt="<?=$title?>">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
