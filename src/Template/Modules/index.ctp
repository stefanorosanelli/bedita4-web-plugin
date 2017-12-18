<?php
$this->assign('title', 'BEdita 4 - ' . $moduleName);
?>

<body>

<?= $this->element('BEdita/Web.modules_top_menu') ?>

<?= $this->element('BEdita/Web.left_menu') ?>

<?= $this->element('BEdita/Web.commands_menu') ?>

<?= $this->element('BEdita/Web.pagination_toolbar') ?>


<div class="mainfull">

    <?= $this->element('BEdita/Web.filters') ?>

    <?= $this->element('BEdita/Web.list_objects') ?>

</div>

</body>
