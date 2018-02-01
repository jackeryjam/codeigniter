<div class="mdl-layout__drawer">
    <span class="mdl-layout-title">dashboard</span>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href='<?=base_url()?>index.php/dashboard'>系统版面</a>
        <a class="mdl-navigation__link" href="<?=base_url()?>index.php/dashboard/upload">上传系统</a>
        <a class="mdl-navigation__link" href="<?=base_url()?>index.php/dashboard">帮助</a>
    </nav>
</div>

<script type="text/javascript">
    function setDefault($name){
        window.location.href="<?=base_url()?>"+"index.php/dashboard/setDefaultAs/"+$name;
    }    
</script>