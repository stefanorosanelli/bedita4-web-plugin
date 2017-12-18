<!-- <div class="tab"><h2>Title & Description</h2></div> -->

<fieldset id="title">

    <label>title:</label>
    <br />
    <input type="text" name="data[title]" value="<?= $object['title'] ?>" id="titleBEObject" style="width:100%" />
    <br />
    <label>description:</label>
    <br />
    <textarea style="width:100%; margin-bottom:2px; height:30px" class="mceSimple subtitle" name="data[description]"><?= $object['description'] ?></textarea>
    <label>unique name:</label>
    <br />
    <input type="text" id="nicknameBEObject" name="data[uniquename]" style="font-style:italic; width:100%" value="<?= $object['uname'] ?>"/>

</fieldset>

<!-- <div class="tab"><h2>Properties</h2></div> -->

<fieldset id="status">

    <?php foreach (['on', 'draft', 'off'] as $status): ?>
    <label><input type="radio" name="data[status]" value="<?= $status ?>" <?php if ($status === $object['status']): ?>checked="checked"<?php endif; ?> /><?= $status ?></label>
    <?php endforeach; ?>

</fieldset>
