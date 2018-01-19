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
