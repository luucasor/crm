<?php


//This is the sharing access privilege file
$defaultOrgSharingPermission=array('2'=>3,'4'=>3,'6'=>3,'7'=>3,'9'=>3,'13'=>3,'16'=>3,'20'=>3,'21'=>3,'22'=>3,'23'=>3,'26'=>3,'8'=>3,'14'=>3,'34'=>3,'35'=>3,'36'=>3,'38'=>3,'42'=>3,'43'=>3,'44'=>3,'45'=>3,'47'=>3,'18'=>3,'10'=>3,'51'=>3,);

$related_module_share=array(2=>array(6,),13=>array(6,),20=>array(6,2,),22=>array(6,2,20,),23=>array(6,22,),);

$Leads_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Leads_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Leads_Emails_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Leads_Emails_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Accounts_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Contacts_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Contacts_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Accounts_Potentials_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Accounts_Potentials_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_HelpDesk_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Accounts_HelpDesk_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_Emails_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Accounts_Emails_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_Quotes_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Accounts_Quotes_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_SalesOrder_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Accounts_SalesOrder_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_Invoice_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Accounts_Invoice_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Potentials_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Potentials_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Potentials_Quotes_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Potentials_Quotes_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Potentials_SalesOrder_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Potentials_SalesOrder_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$HelpDesk_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$HelpDesk_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Emails_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Emails_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Campaigns_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Campaigns_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Quotes_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Quotes_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Quotes_SalesOrder_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$Quotes_SalesOrder_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$PurchaseOrder_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$PurchaseOrder_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$SalesOrder_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$SalesOrder_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$SalesOrder_Invoice_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(1,5,6,8,9,10,11,12,13,14,15,16,18,19,20,21,24,),));

$SalesOrder_Invoice_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Invoice_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Invoice_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Documents_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Documents_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Products_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Products_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Vendors_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Vendors_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$PBXManager_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$PBXManager_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$ServiceContracts_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$ServiceContracts_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Services_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Services_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Assets_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Assets_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$ModComments_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$ModComments_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$ProjectMilestone_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$ProjectMilestone_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$ProjectTask_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$ProjectTask_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Project_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Project_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$SMSNotifier_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$SMSNotifier_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Partners_share_read_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

$Partners_share_write_permission=array('ROLE'=>array(),'GROUP'=>array(25=>array(0=>1,1=>5,2=>6,3=>8,4=>9,5=>10,6=>11,7=>12,8=>13,9=>14,10=>15,11=>16,12=>18,13=>19,14=>20,15=>21,16=>24,),));

?>