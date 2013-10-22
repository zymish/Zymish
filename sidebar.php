<ul>
	<li class='submenu<?=$site['page'][1]=='overview'?' active':''?>'>
		<a href='<?= SITE_ROOT ?>overview'><i class='icon icon-th-large'></i><span>Overview</span></a>
	</li>
	<li class='submenu<?=$site['page'][1]=='projects'?' active':''?>'>
		<a href='#collapseOne' data-toggle='collapse'>
			<i class='icon-hand-right'></i><span>Projects</span>
		</a>
		<div class='collapse' id='collapseOne'>
			<div class='widget-content'>
				<a class='white' href='<?= SITE_ROOT ?>projects.palace.overview'><i class='icon icon-folder-open'></i> The Palace (working title)</a><br />
				<a class='white' href='<?= SITE_ROOT ?>projects.mind-games.overview'><i class='icon icon-tasks'></i> Mind Games (working title)</a>
			</div>
		</div>
	</li>
</ul>