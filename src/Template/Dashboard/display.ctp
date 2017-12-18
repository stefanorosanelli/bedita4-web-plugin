<?php
$this->assign('title', __('BEdita 4 - Dashboard'));
?>

<body class="home">

<?= $this->element('BEdita/Web.left_menu') ?>

<div class="dashboardcontainer">
    <div class="dashboard dashboard-modules">
        <ul class="modules">
        <?php foreach ($modules as $mod): ?>
            <?php if ($mod->enabled): ?>
            <li class="<?= $mod->name ?>">
                <a href="<?= $baseUrl . '/' . $mod->name ?>" title="<?= $mod->name ?>"><?= $mod->name ?></a>
            </li>
            <?php endif ?>
        <?php endforeach; ?>
    </div>
</div>

</body>
