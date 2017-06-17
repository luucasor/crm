{* Smarty Template*}
{strip}
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            </br>
            <div class="panel-body">
                <div class="collapse" id="collapseExample">
                    {include file="ContactInfoView.tpl"|vtemplate_path:$MODULE_NAME}
                </div>   
            </div>
        </div>
    </div>
    {include file='DetailViewBlockView.tpl'|@vtemplate_path:'Vtiger'}
{/strip}
