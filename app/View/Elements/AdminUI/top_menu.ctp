<div class="page-header navbar navbar-fixed-top">
	<div class="page-header-inner ">
		<div class="page-logo">
			<a href="<?=$this->Html->url(array('controller' => 'Admin', 'action' => 'index'))?>">
				<!-- img src="/img/logo-white.png" alt="logo" class="logo-default" style="height: 30px; position: relative; top: -7px;" /-->
				<span class="logo-default"> CMS <?=Configure::read('domain.title')?> </span>
			</a>
			<div class="menu-toggler sidebar-toggler"> </div>
		</div>
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<li class="dropdown" style="padding-top: 14px; margin: 0 20px; ">
					<span><?=__('Welcome, %s!', '<b>Admin</b>')?></span>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" href="<?=$this->Html->url(array('controller' => 'Admin', 'action' => 'index'))?>" title="<?=__('Admin Homepage')?>">
						<i class="icon-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;
					</a>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" href="<?=$this->Html->url(array('controller' => 'pages', 'action' => 'home'))?>" title="<?=__('Website Homepage')?>" target="_blank">
						<i class="icon-globe"></i>&nbsp;&nbsp;&nbsp;&nbsp;
					</a>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" href="<?=$this->Html->url(array('controller' => 'AdminAuth', 'action' => 'logout'))?>" title="<?=__('Logout')?>">
						<i class="icon-logout"></i>&nbsp;&nbsp;&nbsp;&nbsp;
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>