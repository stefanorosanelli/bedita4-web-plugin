<?php
    $back = '';
?>

<div class="secondcolumn <?php echo (!empty($fixed) ? 'fixed' : '');?>;">

<!--{if !empty($view->action) && $view->action != "index" && $view->action != "categories"}
		{assign var="back" value=$session->read("backFromView")|escape}
	{else}
		{assign_concat var="back" 1=$html->url('/') 2=$currentModule.url}
	{/if}
-->
    <div class="modules">
        <label class="<?= $currentModule->name ?>" rel="<?= $baseUrl . '/' . $currentModule->name ?>"><?= $currentModule->name ?></label>
    </div>

    <?php if ($this->template !== 'index'): ?>

    <div class="insidecol">
        <input class="bemaincommands" type="button" value=" save " name="save" id="saveBEObject" />
        <input class="bemaincommands" type="button" value=" publish " name="publish" id="publishBEObject" />
        <input class="bemaincommands" type="button" value=" clone " name="clone" id="cloneBEObject" />
        <input class="bemaincommands" type="button" value=" delete " name="delete" id="delBEObject" />
<!--
        {$view->element('prevnext')}
-->
    </div>

    <?php endif; ?>
</div>
