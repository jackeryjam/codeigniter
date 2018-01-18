<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>dashboard</title>
        <link rel="stylesheet" href="<?php echo base_url();?>resourse/style/material/material.min.css">
        <script src="<?php echo base_url();?>resourse/style/material/material.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <!-- The drawer is always open in large screens. The header is always shown,
        even in small screens. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
                    mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">自动化系统安装平台</span>
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                            mdl-textfield--floating-label mdl-textfield--align-right">
                    <label class="mdl-button mdl-js-button mdl-button--icon"
                        for="fixed-header-drawer-exp">
                    <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" name="sample"
                            id="fixed-header-drawer-exp">
                    </div>
                </div>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">dashboard</span>
                <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
                </nav>
            </div>
            <main class="mdl-layout__content">
                <div class="page-content">
                    <div class="my-mdl-card mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Centos7</h2>
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

                </div>
            </main>
        </div>
    </body>
</html>

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