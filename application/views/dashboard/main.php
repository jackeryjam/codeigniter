<main class="mdl-layout__content">
    <div class="page-content">
        <?php echo shell_exec("pwd");?>
        <?php foreach ($dirs as $value) { ?>
            <div class="my-mdl-card mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text"><?php echo $value;?></h2>
                </div>
                <div class="mdl-card__supporting-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Mauris sagittis pellentesque lacus eleifend lacinia...
                </div>
                <div class="flex-right mdl-card__actions mdl-card--border">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        设置为默认
                    </button>
                </div>
                <div class="mdl-card__menu">
                    <span class="mdl-chip">
                        <span class="mdl-chip__text">默认安装该系统</span>
                    </span>
                </div>
            </div>
        <?php } ?>
    </div>
</main>

<style>
    .page-content{
        padding: 20px 50px;
    }
    .my-mdl-card {
        width: 100%;
        margin: 20px 0;
        min-height: 0;
    }
    .flex-right{
        display: flex;
        flex-direction: row-reverse;
    }
</style>
