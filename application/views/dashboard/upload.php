<main class="mdl-layout__content">
    <div class="upload_page-content">
            <form id="myForm" class="my-mdl-card mdl-card mdl-shadow--2dp" action="http://192.168.126.134/system-auto-install/index.php/Api/upload" method="post" enctype="multipart/form-data">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">上传系统</h2>
                </div>
                <div class="upload_card-content">
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="name">
                        <label class="mdl-textfield__label" for="sample1">系统名称</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield file-field">
                        <input class="mdl-textfield__input" type="text" onclick="chooseCfg()">
                        <input class="mdl-textfield__input mdl-filefield__input" type="file" name="cfg" id="config">
                        <label class="mdl-textfield__label" for="sample1">配置文件ks.cfg</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield file-field">
                        <input class="mdl-textfield__input" type="text" onclick="chooseSystem()">
                        <input class="mdl-textfield__input mdl-filefield__input ignore" type="file" id="system" name="system">
                        <label class="mdl-textfield__label" for="sample1">选择系统镜像</label>
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
</main>

<script type="text/javascript">
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
        $('#myForm').ajaxForm({
            beforeSerialize: function($form, options) {
                // return false to cancel submit
                console.log('return false to cancel submit')
            },
            beforeSubmit: function(arr, $form, options) {
                // form data array is an array of objects with name and value properties
                // [ { name: 'username', value: 'jresig' }, { name: 'password', value: 'secret' } ]
                // return false to cancel submit
                console.log(arr)
            },
            filtering: function(el, index) {
                if ( !$(el).hasClass('ignore') ) {
                    return el;
                }
            }
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

