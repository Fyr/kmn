<?
    $this->ArticleVars->init($article, $url, $title, $teaser, $src, '800x');
    $class = 'pull-right';
?>
        <div class="second-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-image">
                            <a href="<?=$url?>" title="<?=$title?>">
                                <img src="<?=$src?>" alt="<?=$title?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-content">
                            <a href="<?=$url?>"><h2><?=$title?></h2></a>
                            <p><?=$teaser?></p>
                            <b><?=$this->PHTime->niceShort($article[$this->ArticleVars->getObjectType($article)]['modified'])?></b>
                            <?=$this->element('more', compact('url', 'class'))?>
                        </div>
                    </div>
                </div>
            </div>
        </div>