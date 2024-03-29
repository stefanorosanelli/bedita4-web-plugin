
<?php
use Cake\Core\Configure;
$version = Configure::read('BEdita.version');
$colophon = Configure::read('Project.colophon', '');
?>

<script type="text/javascript">
    $(document).ready(function(){
        var cw = $('#cw').html();
        var ch = $('#ch').html();
    var rndm = Math.floor(Math.random()*2);
    if (rndm == 0) {
        $('#ch').html(cw);
        $('#cw').html(ch);
    }
});
</script>

<div class="belinks" style="padding:10px 0px">
<a href="https://www.bedita.com/who-are-we" title="Chialab&Channelweb" target="besite">BEdita <?= $version ?> © </a><br>
    <strong id="ch"><a href="https://www.chialab.it" target="_blank">Chialab</a></strong> and <strong id="cw"><a href="https://www.channelweb.it" target="_blank">ChannelWeb</a></strong> <br>
    <?= date('Y') ?>
<br />
<a href="https://www.bedita.com" title="BEdita web site" target="besite">www.bedita.com</a>
</div>

<?= $colophon ?>
