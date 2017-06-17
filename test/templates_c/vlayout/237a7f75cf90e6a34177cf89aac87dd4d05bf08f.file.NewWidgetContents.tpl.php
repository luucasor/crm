<?php /* Smarty version Smarty-3.1.7, created on 2017-02-20 13:32:30
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Vtiger\dashboards\NewWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2692558a87d3a80eb41-07109201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '237a7f75cf90e6a34177cf89aac87dd4d05bf08f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\dashboards\\NewWidgetContents.tpl',
      1 => 1487558450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2692558a87d3a80eb41-07109201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58a87d3a80ffe',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a87d3a80ffe')) {function content_58a87d3a80ffe($_smarty_tpl) {?>
<div style='padding:10px;'>   
    <div style="width: 410px; height:540px; overflow: scroll; overflow-x: hidden;">
		<p class="text-justify"><span style="color:red;">ATENÇÃO:</span> Para criar um novo widget sera necessario os seguintes <br/>
																		 passos:</p><br/>
		<h3>1º Passo</h3>
		<p class="text-justify">Criar nova entidade "vtiger_module_dashboard_widgets",<br/>
								executar o comando abaixo via teste unitário ou ação de botão.</p><br/>
									<code>$home = Vtiger_Module::getInstance('Home');</code><br/>
									<code>$home->addLink('DASHBOARDWIDGET', 'Sold', <br/>
													'index.php?module=Home&view=ShowWidget&name=Sold','', '1');</code><br/><br/>
		<p class="text-justify">Obs:<i> Este passo foi automatizado com ação do botão abaixo,<br/>
										o nome "Sold" é apenas utilizado com sugestão.</i></p>			
								
		<label for="name">Nome</label>
		<input type="text" name="name" id="name">
		<input type="button" value="Criar" id="create">
		&nbsp&nbsp<img id="loading" src="layouts/vlayout/skins/images/loading.gif" class="cursorPointer alignMiddle priceBookPopup" width="25px" height="20%" style="display: none">
		<p class="text-justify">Obs: Utilizar <strong>CamelCase</strong>, com a primeira letra maiúscula.</p><br/><br/>
		<h3>2º Passo</h3><br/>
		<p class="text-justify">No diretório "/modules/Vtiger/dashboards/" será necessário criar o <br/>
								controller responsável por alimentar os dados do Dashboard. <br/>
								ex: Sold.php<br/><br/>
								Esta classe deve conter a function process que irá chamar a view <br/>
								com o Gráfico ou tela a ser mostrada no Widget:</p><br/>
									<code>$content = $request->get('content');</code><br/>
									<code>if(!empty($content))&#123;</code><br/>
									<code>&nbsp&nbsp$viewer->view('dashboards/SoldContents.tpl', $moduleName);</code><br/>
									<code>&#125; else &#123;</code><br/>
									<code>&nbsp&nbsp$viewer->view('dashboards/Sold.tpl', $moduleName);</code><br/>
									<code>&#125;</code><br/><br/>
		<h3>3º Passo</h3><br/>
		<p class="text-justify">Dentro do diretório "/layouts/vlayout/modules/Vtiger/dashboards/"<br/>
								devem ser criados os arquivos "SoldContents.tpl" e "Sold.tpl".<br/>
								Sold.tpl é a tela completa Sold + SoldContents e SoldContents.tpl<br/> 
								é apenas o conteúdo da tela. <br/>
								Obs: <i>Isso é utilizado para quando houver o refresh do widget,<br/>
								seja feito apenas com o conteúdo e não o Widget Inteiro.</i></p><br/><br/>
		<h3>4º Passo</h3><br/>
		<p class="text-justify">Para alterar o tamanho do Widget, basta adicionar uma validação <br/>
								no arquivo "/modules/Vtiger/models/Widget.php" pelo title do widget.<br/>
								ex:<br/><br/>
									<code>public function getWidth()&#123;</code><br/>
									<code>&nbspif($title == 'Sold')&#123;</code><br/>
									<code>&nbsp&nbsp$this->set('width', '10');</code><br/>
									<code>&nbsp&#125;</code><br/>
									<code>&#125;</code><br/><br/>

									<code>public function getHeight()&#123;</code><br/>
									<code>&nbspif($title == 'Sold')&#123;</code><br/>
									<code>&nbsp&nbsp$this->set('height', '1.5');</code><br/>
									<code>&nbsp&#125;</code><br/>
									<code>&#125;</code><br/><br/>
		<h3>5º Passo</h3><br/>
		<p class="text-justify">Para utilizar o header com o filtro de data e usuário, basta utilizar<br/>
								como base o widget LeadsBySource, nas classes <br/>
								LeadsBySource.php e LeadsBySource.tpl conseguimos tirar uma<br/>
								boa noção de como montar o filtro.<br/>
								* É necessário copiar o dashboardWidgetHeader da classe .tpl<br/>
								(corrigindo a nomenclatura das variáveis, caso seja necessário).<br/>
								* No arquivo Sold.php será necessário adicionar a function<br/>
								getSearchParams para pegar os dados passados pelo filtro.</p><br/><br/>
    </div>
</div>
<script>
    $('#create').click(function () {

        document.getElementById("loading").style.display = 'inline';
		var name = document.getElementById("name").value;
        
        var params = {
            'module': app.getModuleName(),
            'action': "NewWidgetAjax",
			'name' : name,
            'mode': "process"
        };
        AppConnector.request(params).then(
                function (data) {
                    if(data.result['Save'] == "OK"){
                        alert("Widget '"+ name +"' criado com sucesso!!");
						document.getElementById("name").disabled = true; 
						document.getElementById('create').disabled = true; 
                    } else {
                        alert("Erro: "+data.result['code_detail']);
                    }
                    document.getElementById("loading").style.display = 'none';
					location.reload();
                }
        );
        

    });

<?php }} ?>