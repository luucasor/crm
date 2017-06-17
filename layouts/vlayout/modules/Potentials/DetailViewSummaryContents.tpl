{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is:  vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*
********************************************************************************/
-->*}
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
    {include file='SummaryViewWidgets.tpl'|vtemplate_path:$MODULE_NAME}
{/strip}