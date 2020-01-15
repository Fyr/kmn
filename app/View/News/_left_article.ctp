<?
    $this->ArticleVars->init($article, $url, $title, $teaser, $src, 'thumb600x400');
?>
        <div class="first-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-content">
                            <h2><?=$title?></h2>
                            <p><?=$teaser?></p>
                            <div class="main-btn"><a href="#4">Continue Reading</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                            <img src="<?=$src?>" alt="<?=$title?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
