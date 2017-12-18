<?php
$this->assign('title', 'BEdita 4 - ' . $moduleName);
?>

<body>

<?= $this->element('BEdita/Web.modules_top_menu') ?>

<?= $this->element('BEdita/Web.left_menu') ?>

<div class="head">
    <h1><?= $object['title'] ?></h1>
    <!-- <h1>{if !empty($object)}{$object.title|escape:'html'|default:"<i>[no title]</i>"}{else}<i>[{t}New item{/t}]</i>{/if}</h1> -->
</div>

<?= $this->element('BEdita/Web.commands_menu') ?>

<div class="main">

    <?= $this->element('BEdita/Web.form_object') ?>
</div>

<?= $this->element('BEdita/Web.right_menu') ?>

</body>

