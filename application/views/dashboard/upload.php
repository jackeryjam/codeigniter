<main class="mdl-layout__content">
    <div class="upload_page-content">
        <form id="myForm" class="my-mdl-card mdl-card mdl-shadow--2dp" action="<?=base_url()?>/index.php/Api/upload" method="post" enctype="multipart/form-data">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">上传系统</h2>
            </div>
            <div class="upload_card-content">
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" name="name">
                    <label class="mdl-textfield__label" for="sample1">系统名称</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield file-field">
                    <input class="mdl-textfield__input" type="text" onclick="chooseCfg()" id='configInput'>
                    <input class="mdl-textfield__input mdl-filefield__input" type="file" name="cfg" id="config">
                    <label class="mdl-textfield__label" for="configInput"  id='configText'>配置文件ks.cfg</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield file-field">
                    <input class="mdl-textfield__input" type="text" id="systemInput" onclick="chooseSystem()">
                    <input class="mdl-textfield__input mdl-filefield__input ignore" type="file" id="system" name="system">
                    <label class="mdl-textfield__label" for="systemInput" id="systemText">选择系统镜像</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "3" name="desc"></textarea>
                    <label class="mdl-textfield__label" for="sample5">系统相关介绍说明</label>
                </div>

            </div>
            <div class="flex-right mdl-card__actions mdl-card--border">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">
                    上传
                </button>
            </div>
        </form>
    </div>
    <dialog class="mdl-dialog">
        <h4 class="mdl-dialog__title">上传系统成功</h4>
        <div class="mdl-dialog__content">
            <p>
                是否将该系统设置为默认
            </p>
        </div>
        <div class="mdl-dialog__actions">
            <button type="button" class="mdl-button close" id="agreebtn">好的</button>
            <button type="button" class="mdl-button close" id="disagreebtn">不用了</button>
        </div>
    </dialog>
    <div id="demo-snackbar-example" class="mdl-js-snackbar mdl-snackbar">
        <div class="mdl-snackbar__text"></div>
        <button class="mdl-snackbar__action" type="button"></button>
    </div>
</main>

<script type="text/javascript">
    var systemname = "";

    function chooseCfg(){
        $("#config").click();
    }

    function chooseSystem(){
        $("#system").click();
    }

    function upload(){
        console.log($("#config"));
    }

   $(function(){
        var dialog = document.querySelector('dialog');
        $('#myForm').ajaxForm({
            beforeSerialize: function($form, options) {
                // return false to cancel submit
                console.log('return false to cancel submit')
            },
            beforeSubmit: function(arr, $form, options) {
                systemname = arr[0].name;
                var snackbarContainer = document.querySelector('#demo-snackbar-example');
                var data = {
                    message: '系统上传中，请不要离开此页面',
                    timeout: 2000,
                    actionText: 'GET'
                };
                snackbarContainer.MaterialSnackbar.showSnackbar(data);
                console.log(arr)
            },
            // uploadProgress: function (event, position, total, percentComplete ) {
                
            // },
            success: function(data, textStatus, jqXHR, $form) {
                console.log(data);
                dialog.showModal();
            }
        });
        dialog.querySelector('#disagreebtn').addEventListener('click', function() {
            console.log(systemname)
            dialog.close();
        });
        dialog.querySelector('#agreebtn').addEventListener('click', function() {
            dialog.close();
            window.location.href = "<?=base_url()?>"+"index.php/dashboard/setDefaultAs/" + systemname;
        });
        $('#config').change(function(){
            var f = document.getElementById("config").files; 
            $('#configText').html(f[0].name)
            $('#configText').css("color","black");
        });
        $('#system').change(function(){
            var f = document.getElementById("system").files; 
            $('#systemText').html(f[0].value)
            $('#systemText').css("color","black");
        });
    });

</script>
          
<style type="text/css">
    .upload_page-content{
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
    .upload_card-content{
        padding: 10px 20px;
        display: flex;
        flex-direction: column;
    }
    .upload_page-content .mdl-textfield{
        width: 100%;
    }
    .upload_page-content input[type="file"] {

    }
    .mdl-filefield__input {
        width: 0;
        height: 0;
        overflow: hidden;
        z-index: 1;
        padding: 0;
    }
</style>

