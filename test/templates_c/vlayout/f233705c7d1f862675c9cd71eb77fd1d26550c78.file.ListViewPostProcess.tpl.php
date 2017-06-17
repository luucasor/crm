<?php /* Smarty version Smarty-3.1.7, created on 2017-02-18 16:41:18
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Campaigns\ListViewPostProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2943158a4e8dd9953d9-59725765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f233705c7d1f862675c9cd71eb77fd1d26550c78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Campaigns\\ListViewPostProcess.tpl',
      1 => 1487436033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2943158a4e8dd9953d9-59725765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58a4e8dd9c310',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a4e8dd9c310')) {function content_58a4e8dd9c310($_smarty_tpl) {?>
</div></div><div class="container"><button id="importDinamize" class="btn btn-default"><img src="layouts/vlayout/skins/images/Integration.png" class="cursorPointer alignMiddle priceBookPopup" width="20%" height="20%">&nbsp<strong>Criar Widget</strong></button>&nbsp&nbsp<img id="loading" src="layouts/vlayout/skins/images/loading.gif" class="cursorPointer alignMiddle priceBookPopup" width="25px" height="20%" style="display: none"></br></br></div></div>

<script>
    $('#importDinamize').click(function () {

        document.getElementById("loading").style.display = 'inline';
        
        var params = {
            'module': app.getModuleName(),
            'action': "DetailAjax",
            'mode': "getLogin"
        };
        AppConnector.request(params).then(
                function (data) {
                    if(data.result['authToken']){
                        alert('Campanhas importadas com sucesso!!');
                        console.log(data.result['authToken']);
                        console.log(data.result['cList']);
                    } else {
                        alert("Erro: "+data.result['code_detail']);
                    }
                    document.getElementById("loading").style.display = 'none';
                    location.reload();
                }
        );
        

    });

</script><?php }} ?>