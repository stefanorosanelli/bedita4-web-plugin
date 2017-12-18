<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= $this->Html->meta('favicon.ico', '/favicon.ico', ['type' => 'icon']) ?>

    <?= $this->Html->css('BEdita/Web.bedita') ?>
    <?= $this->Html->css('BEdita/Web.bedita-icons') ?>

    <?= $this->Html->script('BEdita/Web.libs/jquery/jquery-2.1.0.min') ?>
    <?= $this->Html->script('BEdita/Web.libs/jquery/plugins/jquery.autosize.min') ?>
    <?= $this->Html->script('BEdita/Web.libs/jquery/plugins/jquery.float_thead.min') ?>
    <?= $this->Html->script('BEdita/Web.beditaUI') ?>

    <?= $this->Html->script('BEdita/Web.libs/select2/select2.min') ?>

    <title><?= $this->fetch('title') ?></title>

    <?= $this->element('BEdita/Web.json_meta_config') ?>

</head>

<?= $this->fetch('content') ?>
