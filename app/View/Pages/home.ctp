<div class="first-content">
    <div class="col-md-3">
        <div class="author-image"><img src="/img/author_image.png" alt="Author Image"></div>
    </div>
    <div class="col-md-9">
        <?=$this->element('title', $page['Page'])?>
        <?=$this->ArticleVars->body($page)?>
        <?=$this->element('more', array('url' => array('controller' => 'pages', 'action' => 'view', 'services')))?>
        <!-- div class="fb-btn"><a rel="nofollow" href="https://fb.com/templatemo">Our FB Page</a></div-->
    </div>
</div>