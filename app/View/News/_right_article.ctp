<?
    $this->ArticleVars->init($article, $url, $title, $teaser, $src, '800x');
?>
        <div class="second-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-image">
                            <img src="<?=$src?>" alt="second service">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-content">
                            <h2><?=$title?></h2>
                            <p><?=$teaser?></p>
                            <div class="main-btn"><a href="#4">Continue Reading</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>