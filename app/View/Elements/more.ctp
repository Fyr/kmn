<div class="main-btn<?=(isset($class) ? ' '.$class : '')?>">
    <a href="<?=(is_array($url)) ? $this->Html->url($url) : $url?>"><?=__('more')?>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
</div>