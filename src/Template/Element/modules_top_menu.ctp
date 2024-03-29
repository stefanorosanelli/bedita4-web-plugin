<div class="modulesmenutop">
    <div class="modulesmenucaption">go to: &nbsp;<a>be</a></div>

    <nav class="modulesmenu">
        <a title="search" class="searchtrigger"></a>
        <a title="id or unique name" class="searchbyidtrigger"></a>

        <?php foreach ($modules as $mod): ?>
            <?php if ($mod->enabled): ?>
            <a href="<?= $baseUrl . '/' . $mod->name ?>" title="<?= $mod->name ?>"
                class="<?= $mod->name ?>  <?php if ($mod->name == $currentModule->name): ?> on<?php endif ?>"></a>
            <?php endif ?>
        <?php endforeach; ?>
        <a href="<?= $baseUrl ?>" title="Dashboard" class="bedita"></a>
    </nav>

	<!-- {* searchDestination default is "index". Fot different defaults set $params.searchDestination in various modules views.tpl *} -->
	<!-- <form class="searchobjects" {if !empty($stringSearched)}style="display:block"{/if} 	action="{$html->url('/')}{$moduleName|default:''}/{$searchDestination|default:'index'}{if !empty($sectionSel)}/id:{$sectionSel.id}{/if}" method="post">
		{$beForm->csrf()}
	{if $substringSearch|default:true}
		<input type="checkbox" {if !$view->SessionFilter->check() || $view->SessionFilter->check('substring')}checked="checked"{/if} id="substring" name="filter[substring]" /> {t}substring{/t}
	{/if}
		<input type="text" placeholder="{t}search{/t} {$searchDestination|default:''}" name="filter[query]" value="{$view->SessionFilter->read('query')}"/>
		<input type="submit" value="{t}GO{/t}"/>
	</form> -->

	<!-- {* search by id or nickname (unique name) *} -->
	<!-- <form style="visibility: hidden" class="searchobjectsbyid" action="{$html->url('/')}pages/gotoObjectById" method="get">
		<input type="text" placeholder="{t}id or unique name{/t}" name="objectId" value=""/>
		<input type="submit" value="{t}GO{/t}"/>
	</form> -->

</div>
<!-- {$view->element('modulesmenu_dyn')} -->
