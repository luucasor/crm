<?php /* Smarty version Smarty-3.1.7, created on 2017-05-22 02:56:48
         compiled from "C:\xampp\htdocs\crm\includes\runtime/../../layouts/vlayout\modules\Vtiger\dashboards\ContactsAndPotentialsContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2342058a4efb5092506-21246826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0ffedd97287ef401a5866313457ab0207e1c23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\dashboards\\ContactsAndPotentialsContents.tpl',
      1 => 1495421804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2342058a4efb5092506-21246826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58a4efb5284f8',
  'variables' => 
  array (
    'CONTACTS_CF' => 0,
    'POTENTIALS_CF' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a4efb5284f8')) {function content_58a4efb5284f8($_smarty_tpl) {?><div>

<style type="text/css">
    /*Custom CSS*/
    .some {
        color: black;
    }
    .aparece {
        color: red;
    }
    .footer {
        position:absolute;
        bottom:0;
        width:100%;
        margin-bottom: 60px;
    }
    #conteudo {
        margin-top: 20px;
    }

    /*Boostrap*/
    .panel-body {
        padding: 15px;
    }
    .panel-heading {
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }
    .panel-heading > .dropdown .dropdown-toggle {
        color: inherit;
    }
    .panel-title {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 16px;
        color: inherit;
    }
    .panel-title > a,
    .panel-title > small,
    .panel-title > .small,
    .panel-title > small > a,
    .panel-title > .small > a {
        color: inherit;
    }
    .panel-footer {
        padding: 10px 15px;
        background-color: #f5f5f5;
        border-top: 1px solid #ddd;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }
    .panel > .list-group,
    .panel > .panel-collapse > .list-group {
        margin-bottom: 0;
    }
    .panel > .list-group .list-group-item,
    .panel > .panel-collapse > .list-group .list-group-item {
        border-width: 1px 0;
        border-radius: 0;
    }
    .panel > .list-group:first-child .list-group-item:first-child,
    .panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
        border-top: 0;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }
    .panel > .list-group:last-child .list-group-item:last-child,
    .panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
        border-bottom: 0;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }
    .panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    .panel-heading + .list-group .list-group-item:first-child {
        border-top-width: 0;
    }
    .list-group + .panel-footer {
        border-top-width: 0;
    }
    .panel > .table,
    .panel > .table-responsive > .table,
    .panel > .panel-collapse > .table {
        margin-bottom: 0;
    }
    .panel > .table caption,
    .panel > .table-responsive > .table caption,
    .panel > .panel-collapse > .table caption {
        padding-right: 15px;
        padding-left: 15px;
    }

    .panel > .table:first-child,
    .panel > .table-responsive:first-child > .table:first-child {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }
    .panel > .table:first-child > thead:first-child > tr:first-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }
    .panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
    .panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
        border-top-left-radius: 3px;
    }
    .panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
    .panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
        border-top-right-radius: 3px;
    }
    .panel > .table:last-child,
    .panel > .table-responsive:last-child > .table:last-child {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }
    .panel > .table:last-child > tbody:last-child > tr:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
    .panel > .table:last-child > tfoot:last-child > tr:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }
    .panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
    .panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
    .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
    .panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
    .panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
    .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
        border-bottom-left-radius: 3px;
    }
    .panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
    .panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
    .panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
    .panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
        border-bottom-right-radius: 3px;
    }
    .panel > .panel-body + .table,
    .panel > .panel-body + .table-responsive,
    .panel > .table + .panel-body,
    .panel > .table-responsive + .panel-body {
        border-top: 1px solid #ddd;
    }
    .panel > .table > tbody:first-child > tr:first-child th,
    .panel > .table > tbody:first-child > tr:first-child td {
        border-top: 0;
    }
    .panel > .table-bordered,
    .panel > .table-responsive > .table-bordered {
        border: 0;
    }
    .panel > .table-bordered > thead > tr > th:first-child,
    .panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
    .panel > .table-bordered > tbody > tr > th:first-child,
    .panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
    .panel > .table-bordered > tfoot > tr > th:first-child,
    .panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
    .panel > .table-bordered > thead > tr > td:first-child,
    .panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
    .panel > .table-bordered > tbody > tr > td:first-child,
    .panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
    .panel > .table-bordered > tfoot > tr > td:first-child,
    .panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
        border-left: 0;
    }
    .panel > .table-bordered > thead > tr > th:last-child,
    .panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
    .panel > .table-bordered > tbody > tr > th:last-child,
    .panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
    .panel > .table-bordered > tfoot > tr > th:last-child,
    .panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
    .panel > .table-bordered > thead > tr > td:last-child,
    .panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
    .panel > .table-bordered > tbody > tr > td:last-child,
    .panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
    .panel > .table-bordered > tfoot > tr > td:last-child,
    .panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
        border-right: 0;
    }
    .panel > .table-bordered > thead > tr:first-child > td,
    .panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
    .panel > .table-bordered > tbody > tr:first-child > td,
    .panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
    .panel > .table-bordered > thead > tr:first-child > th,
    .panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
    .panel > .table-bordered > tbody > tr:first-child > th,
    .panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
        border-bottom: 0;
    }
    .panel > .table-bordered > tbody > tr:last-child > td,
    .panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
    .panel > .table-bordered > tfoot > tr:last-child > td,
    .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
    .panel > .table-bordered > tbody > tr:last-child > th,
    .panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
    .panel > .table-bordered > tfoot > tr:last-child > th,
    .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
        border-bottom: 0;
    }
    .panel > .table-responsive {
        margin-bottom: 0;
        border: 0;
    }
    .panel-group {
        margin-bottom: 20px;
    }
    .panel-group .panel {
        margin-bottom: 0;
        border-radius: 4px;
    }
    .panel-group .panel + .panel {
        margin-top: 5px;
    }
    .panel-group .panel-heading {
        border-bottom: 0;
    }
    .panel-group .panel-heading + .panel-collapse > .panel-body,
    .panel-group .panel-heading + .panel-collapse > .list-group {
        border-top: 1px solid #ddd;
    }
    .panel-group .panel-footer {
        border-top: 0;
    }
    .panel-group .panel-footer + .panel-collapse .panel-body {
        border-bottom: 1px solid #ddd;
    }
    .panel-default {
        border-color: #ddd;
    }
    .panel-default > .panel-heading {
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd;
    }
    .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #ddd;
    }
    .panel-default > .panel-heading .badge {
        color: #f5f5f5;
        background-color: #333;
    }
    .panel-default > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #ddd;
    }
    .panel-primary {
        border-color: #337ab7;
    }
    .panel-primary > .panel-heading {
        color: #fff;
        background-color: #337ab7;
        border-color: #337ab7;
    }
    .panel-primary > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #337ab7;
    }
    .panel-primary > .panel-heading .badge {
        color: #337ab7;
        background-color: #fff;
    }
    .panel-primary > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #337ab7;
    }
    .panel-success {
        border-color: #d6e9c6;
    }
    .panel-success > .panel-heading {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }
    .panel-success > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #d6e9c6;
    }
    .panel-success > .panel-heading .badge {
        color: #dff0d8;
        background-color: #3c763d;
    }
    .panel-success > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #d6e9c6;
    }
    .panel-info {
        border-color: #bce8f1;
    }
    .panel-info > .panel-heading {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1;
    }
    .panel-info > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #bce8f1;
    }
    .panel-info > .panel-heading .badge {
        color: #d9edf7;
        background-color: #31708f;
    }
    .panel-info > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #bce8f1;
    }
    .panel-warning {
        border-color: #faebcc;
    }
    .panel-warning > .panel-heading {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc;
    }
    .panel-warning > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #faebcc;
    }
    .panel-warning > .panel-heading .badge {
        color: #fcf8e3;
        background-color: #8a6d3b;
    }
    .panel-warning > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #faebcc;
    }
    .panel-danger {
        border-color: #ebccd1;
    }
    .panel-danger > .panel-heading {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }
    .panel-danger > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #ebccd1;
    }
    .panel-danger > .panel-heading .badge {
        color: #f2dede;
        background-color: #a94442;
    }
    .panel-danger > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #ebccd1;
    }
    .panel-body:after {
        clear: both;
    }

    .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }
    .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
        float: left;
    }
    .col-xs-12 {
        width: 100%;
    }
    .col-xs-11 {
        width: 91.66666667%;
    }
    .col-xs-10 {
        width: 83.33333333%;
    }
    .col-xs-9 {
        width: 75%;
    }
    .col-xs-8 {
        width: 66.66666667%;
    }
    .col-xs-7 {
        width: 58.33333333%;
    }
    .col-xs-6 {
        width: 50%;
    }
    .col-xs-5 {
        width: 41.66666667%;
    }
    .col-xs-4 {
        width: 33.33333333%;
    }
    .col-xs-3 {
        width: 25%;
    }
    .col-xs-2 {
        width: 16.66666667%;
    }
    .col-xs-1 {
        width: 8.33333333%;
    }
    .col-xs-pull-12 {
        right: 100%;
    }
    .col-xs-pull-11 {
        right: 91.66666667%;
    }
    .col-xs-pull-10 {
        right: 83.33333333%;
    }
    .col-xs-pull-9 {
        right: 75%;
    }
    .col-xs-pull-8 {
        right: 66.66666667%;
    }
    .col-xs-pull-7 {
        right: 58.33333333%;
    }
    .col-xs-pull-6 {
        right: 50%;
    }
    .col-xs-pull-5 {
        right: 41.66666667%;
    }
    .col-xs-pull-4 {
        right: 33.33333333%;
    }
    .col-xs-pull-3 {
        right: 25%;
    }
    .col-xs-pull-2 {
        right: 16.66666667%;
    }
    .col-xs-pull-1 {
        right: 8.33333333%;
    }
    .col-xs-pull-0 {
        right: auto;
    }
    .col-xs-push-12 {
        left: 100%;
    }
    .col-xs-push-11 {
        left: 91.66666667%;
    }
    .col-xs-push-10 {
        left: 83.33333333%;
    }
    .col-xs-push-9 {
        left: 75%;
    }
    .col-xs-push-8 {
        left: 66.66666667%;
    }
    .col-xs-push-7 {
        left: 58.33333333%;
    }
    .col-xs-push-6 {
        left: 50%;
    }
    .col-xs-push-5 {
        left: 41.66666667%;
    }
    .col-xs-push-4 {
        left: 33.33333333%;
    }
    .col-xs-push-3 {
        left: 25%;
    }
    .col-xs-push-2 {
        left: 16.66666667%;
    }
    .col-xs-push-1 {
        left: 8.33333333%;
    }
    .col-xs-push-0 {
        left: auto;
    }
    .col-xs-offset-12 {
        margin-left: 100%;
    }
    .col-xs-offset-11 {
        margin-left: 91.66666667%;
    }
    .col-xs-offset-10 {
        margin-left: 83.33333333%;
    }
    .col-xs-offset-9 {
        margin-left: 75%;
    }
    .col-xs-offset-8 {
        margin-left: 66.66666667%;
    }
    .col-xs-offset-7 {
        margin-left: 58.33333333%;
    }
    .col-xs-offset-6 {
        margin-left: 50%;
    }
    .col-xs-offset-5 {
        margin-left: 41.66666667%;
    }
    .col-xs-offset-4 {
        margin-left: 33.33333333%;
    }
    .col-xs-offset-3 {
        margin-left: 25%;
    }
    .col-xs-offset-2 {
        margin-left: 16.66666667%;
    }
    .col-xs-offset-1 {
        margin-left: 8.33333333%;
    }
    .col-xs-offset-0 {
        margin-left: 0;
    }
    @media (min-width: 768px) {
        .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
            float: left;
        }
        .col-sm-12 {
            width: 100%;
        }
        .col-sm-11 {
            width: 91.66666667%;
        }
        .col-sm-10 {
            width: 83.33333333%;
        }
        .col-sm-9 {
            width: 75%;
        }
        .col-sm-8 {
            width: 66.66666667%;
        }
        .col-sm-7 {
            width: 58.33333333%;
        }
        .col-sm-6 {
            width: 50%;
        }
        .col-sm-5 {
            width: 41.66666667%;
        }
        .col-sm-4 {
            width: 33.33333333%;
        }
        .col-sm-3 {
            width: 25%;
        }
        .col-sm-2 {
            width: 16.66666667%;
        }
        .col-sm-1 {
            width: 8.33333333%;
        }
        .col-sm-pull-12 {
            right: 100%;
        }
        .col-sm-pull-11 {
            right: 91.66666667%;
        }
        .col-sm-pull-10 {
            right: 83.33333333%;
        }
        .col-sm-pull-9 {
            right: 75%;
        }
        .col-sm-pull-8 {
            right: 66.66666667%;
        }
        .col-sm-pull-7 {
            right: 58.33333333%;
        }
        .col-sm-pull-6 {
            right: 50%;
        }
        .col-sm-pull-5 {
            right: 41.66666667%;
        }
        .col-sm-pull-4 {
            right: 33.33333333%;
        }
        .col-sm-pull-3 {
            right: 25%;
        }
        .col-sm-pull-2 {
            right: 16.66666667%;
        }
        .col-sm-pull-1 {
            right: 8.33333333%;
        }
        .col-sm-pull-0 {
            right: auto;
        }
        .col-sm-push-12 {
            left: 100%;
        }
        .col-sm-push-11 {
            left: 91.66666667%;
        }
        .col-sm-push-10 {
            left: 83.33333333%;
        }
        .col-sm-push-9 {
            left: 75%;
        }
        .col-sm-push-8 {
            left: 66.66666667%;
        }
        .col-sm-push-7 {
            left: 58.33333333%;
        }
        .col-sm-push-6 {
            left: 50%;
        }
        .col-sm-push-5 {
            left: 41.66666667%;
        }
        .col-sm-push-4 {
            left: 33.33333333%;
        }
        .col-sm-push-3 {
            left: 25%;
        }
        .col-sm-push-2 {
            left: 16.66666667%;
        }
        .col-sm-push-1 {
            left: 8.33333333%;
        }
        .col-sm-push-0 {
            left: auto;
        }
        .col-sm-offset-12 {
            margin-left: 100%;
        }
        .col-sm-offset-11 {
            margin-left: 91.66666667%;
        }
        .col-sm-offset-10 {
            margin-left: 83.33333333%;
        }
        .col-sm-offset-9 {
            margin-left: 75%;
        }
        .col-sm-offset-8 {
            margin-left: 66.66666667%;
        }
        .col-sm-offset-7 {
            margin-left: 58.33333333%;
        }
        .col-sm-offset-6 {
            margin-left: 50%;
        }
        .col-sm-offset-5 {
            margin-left: 41.66666667%;
        }
        .col-sm-offset-4 {
            margin-left: 33.33333333%;
        }
        .col-sm-offset-3 {
            margin-left: 25%;
        }
        .col-sm-offset-2 {
            margin-left: 16.66666667%;
        }
        .col-sm-offset-1 {
            margin-left: 8.33333333%;
        }
        .col-sm-offset-0 {
            margin-left: 0;
        }
    }
    @media (min-width: 992px) {
        .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
            float: left;
        }
        .col-md-12 {
            width: 100%;
        }
        .col-md-11 {
            width: 91.66666667%;
        }
        .col-md-10 {
            width: 83.33333333%;
        }
        .col-md-9 {
            width: 75%;
        }
        .col-md-8 {
            width: 66.66666667%;
        }
        .col-md-7 {
            width: 58.33333333%;
        }
        .col-md-6 {
            width: 50%;
        }
        .col-md-5 {
            width: 41.66666667%;
        }
        .col-md-4 {
            width: 33.33333333%;
        }
        .col-md-3 {
            width: 25%;
        }
        .col-md-2 {
            width: 16.66666667%;
        }
        .col-md-1 {
            width: 8.33333333%;
        }
        .col-md-pull-12 {
            right: 100%;
        }
        .col-md-pull-11 {
            right: 91.66666667%;
        }
        .col-md-pull-10 {
            right: 83.33333333%;
        }
        .col-md-pull-9 {
            right: 75%;
        }
        .col-md-pull-8 {
            right: 66.66666667%;
        }
        .col-md-pull-7 {
            right: 58.33333333%;
        }
        .col-md-pull-6 {
            right: 50%;
        }
        .col-md-pull-5 {
            right: 41.66666667%;
        }
        .col-md-pull-4 {
            right: 33.33333333%;
        }
        .col-md-pull-3 {
            right: 25%;
        }
        .col-md-pull-2 {
            right: 16.66666667%;
        }
        .col-md-pull-1 {
            right: 8.33333333%;
        }
        .col-md-pull-0 {
            right: auto;
        }
        .col-md-push-12 {
            left: 100%;
        }
        .col-md-push-11 {
            left: 91.66666667%;
        }
        .col-md-push-10 {
            left: 83.33333333%;
        }
        .col-md-push-9 {
            left: 75%;
        }
        .col-md-push-8 {
            left: 66.66666667%;
        }
        .col-md-push-7 {
            left: 58.33333333%;
        }
        .col-md-push-6 {
            left: 50%;
        }
        .col-md-push-5 {
            left: 41.66666667%;
        }
        .col-md-push-4 {
            left: 33.33333333%;
        }
        .col-md-push-3 {
            left: 25%;
        }
        .col-md-push-2 {
            left: 16.66666667%;
        }
        .col-md-push-1 {
            left: 8.33333333%;
        }
        .col-md-push-0 {
            left: auto;
        }
        .col-md-offset-12 {
            margin-left: 100%;
        }
        .col-md-offset-11 {
            margin-left: 91.66666667%;
        }
        .col-md-offset-10 {
            margin-left: 83.33333333%;
        }
        .col-md-offset-9 {
            margin-left: 75%;
        }
        .col-md-offset-8 {
            margin-left: 66.66666667%;
        }
        .col-md-offset-7 {
            margin-left: 58.33333333%;
        }
        .col-md-offset-6 {
            margin-left: 50%;
        }
        .col-md-offset-5 {
            margin-left: 41.66666667%;
        }
        .col-md-offset-4 {
            margin-left: 33.33333333%;
        }
        .col-md-offset-3 {
            margin-left: 25%;
        }
        .col-md-offset-2 {
            margin-left: 16.66666667%;
        }
        .col-md-offset-1 {
            margin-left: 8.33333333%;
        }
        .col-md-offset-0 {
            margin-left: 0;
        }
    }
    @media (min-width: 1200px) {
        .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
            float: left;
        }
        .col-lg-12 {
            width: 100%;
        }
        .col-lg-11 {
            width: 91.66666667%;
        }
        .col-lg-10 {
            width: 83.33333333%;
        }
        .col-lg-9 {
            width: 75%;
        }
        .col-lg-8 {
            width: 66.66666667%;
        }
        .col-lg-7 {
            width: 58.33333333%;
        }
        .col-lg-6 {
            width: 50%;
        }
        .col-lg-5 {
            width: 41.66666667%;
        }
        .col-lg-4 {
            width: 33.33333333%;
        }
        .col-lg-3 {
            width: 25%;
        }
        .col-lg-2 {
            width: 16.66666667%;
        }
        .col-lg-1 {
            width: 8.33333333%;
        }
        .col-lg-pull-12 {
            right: 100%;
        }
        .col-lg-pull-11 {
            right: 91.66666667%;
        }
        .col-lg-pull-10 {
            right: 83.33333333%;
        }
        .col-lg-pull-9 {
            right: 75%;
        }
        .col-lg-pull-8 {
            right: 66.66666667%;
        }
        .col-lg-pull-7 {
            right: 58.33333333%;
        }
        .col-lg-pull-6 {
            right: 50%;
        }
        .col-lg-pull-5 {
            right: 41.66666667%;
        }
        .col-lg-pull-4 {
            right: 33.33333333%;
        }
        .col-lg-pull-3 {
            right: 25%;
        }
        .col-lg-pull-2 {
            right: 16.66666667%;
        }
        .col-lg-pull-1 {
            right: 8.33333333%;
        }
        .col-lg-pull-0 {
            right: auto;
        }
        .col-lg-push-12 {
            left: 100%;
        }
        .col-lg-push-11 {
            left: 91.66666667%;
        }
        .col-lg-push-10 {
            left: 83.33333333%;
        }
        .col-lg-push-9 {
            left: 75%;
        }
        .col-lg-push-8 {
            left: 66.66666667%;
        }
        .col-lg-push-7 {
            left: 58.33333333%;
        }
        .col-lg-push-6 {
            left: 50%;
        }
        .col-lg-push-5 {
            left: 41.66666667%;
        }
        .col-lg-push-4 {
            left: 33.33333333%;
        }
        .col-lg-push-3 {
            left: 25%;
        }
        .col-lg-push-2 {
            left: 16.66666667%;
        }
        .col-lg-push-1 {
            left: 8.33333333%;
        }
        .col-lg-push-0 {
            left: auto;
        }
        .col-lg-offset-12 {
            margin-left: 100%;
        }
        .col-lg-offset-11 {
            margin-left: 91.66666667%;
        }
        .col-lg-offset-10 {
            margin-left: 83.33333333%;
        }
        .col-lg-offset-9 {
            margin-left: 75%;
        }
        .col-lg-offset-8 {
            margin-left: 66.66666667%;
        }
        .col-lg-offset-7 {
            margin-left: 58.33333333%;
        }
        .col-lg-offset-6 {
            margin-left: 50%;
        }
        .col-lg-offset-5 {
            margin-left: 41.66666667%;
        }
        .col-lg-offset-4 {
            margin-left: 33.33333333%;
        }
        .col-lg-offset-3 {
            margin-left: 25%;
        }
        .col-lg-offset-2 {
            margin-left: 16.66666667%;
        }
        .col-lg-offset-1 {
            margin-left: 8.33333333%;
        }
        .col-lg-offset-0 {
            margin-left: 0;
        }
    }

    html, body {
        max-width: 100%;
        overflow-x: hidden;
    }
    
a:link, a:visited {
	text-decoration: none
	}
a:hover {
	text-decoration: underline; 
	color: black;
	}
a:active {
	text-decoration: none
	}
</style>

<div style='padding-top:10px;'>   
    <div>
        <div class="col-xs-12 col-sm-5">
            <div class="panel-heading col-xs-12 col-sm-12">
                <h1 class="panel-title" style="text-align: center; font-size: 30px"><strong>Contatos</strong></h1>
            </div>
            <div class="panel-body col-xs-12 col-sm-12" style="text-align: center;">
                <div class="panel panel-primary border1px">
                    <div class="panel-heading">
                        <h3 class="panel-title">Total</h3>
                    </div>
                    <div class="panel-body">
						<a href="http://crm.quatenusonline.com.br/crm/index.php?module=Contacts&view=List">
							<h1><?php echo $_smarty_tpl->tpl_vars['CONTACTS_CF']->value->fields('TOTAL_CONTATO');?>
</h1>
						</a>
                    </div>
                </div>
            </div>
            <div class="panel-body col-xs-12 col-sm-12" style="text-align: center;">
                <div class="panel panel-danger border1px">
                    <div class="panel-heading">
                        <h3 class="panel-title">Não Qualificados</h3>
                    </div>
                    <div class="panel-body">
						<a href="http://crm.quatenusonline.com.br/crm/index.php?module=Contacts&parent=&page=1&view=List&viewname=141&orderby=&sortorder=&search_params=%5B%5B%5B%22cf_893%22%2C%22e%22%2C%22N%C3%A3o+Qualificado%22%5D%5D%5D">
							<h1><?php echo $_smarty_tpl->tpl_vars['CONTACTS_CF']->value->fields('NQUA');?>
</h1>
						</a>
                    </div>
                </div>
            </div>
            <div class="panel-body col-xs-12 col-sm-12" style="text-align: center;">
                <div class="panel panel-success border1px">
                    <div class="panel-heading">
                        <h3 class="panel-title">Qualificados</h3>
                    </div>
                    <div class="panel-body">
						<a href="http://crm.quatenusonline.com.br/crm/index.php?module=Contacts&parent=&page=1&view=List&viewname=141&orderby=&sortorder=&search_params=%5B%5B%5B%22cf_893%22%2C%22e%22%2C%22Qualificado%22%5D%5D%5D">
							<h1><?php echo $_smarty_tpl->tpl_vars['CONTACTS_CF']->value->fields('QUA');?>
</h1>
						</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-5">
            <div class="panel-heading col-xs-12 col-sm-12">
                <h1 class="panel-title" style="text-align: center; font-size: 30px"><strong>Oportunidades</strong></h1>
            </div>
            <div class="panel-body col-xs-12 col-sm-12" style="text-align: center;">
                <div class="panel panel-primary border1px">
                    <div class="panel-heading">
                        <h3 class="panel-title">Total</h3>
                    </div>
                    <div class="panel-body">
						<a href="http://crm.quatenusonline.com.br/crm/index.php?module=Potentials&view=List">
							<h1><?php echo $_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('TOTAL_VENDA');?>
</h1>
						</a>
                    </div>
                </div>
            </div>
            <div class="panel-body col-xs-12 col-sm-12" style="text-align: center;">
                <div class="panel panel-default border1px">
                    <div class="panel-heading">
                        <h3 class="panel-title">Em Prospecção</h3>
                    </div>
                    <div class="panel-body">
						<a href="http://crm.quatenusonline.com.br/crm/index.php?module=Potentials&parent=&page=1&view=List&viewname=10&orderby=&sortorder=&search_params=%5B%5B%5B%22sales_stage%22%2C%22e%22%2C%22Em+prospec%C3%A7%C3%A3o%22%5D%5D%5D">
							<h1><?php echo $_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('PROSPECCAO_PROPOSTA');?>
</h1>
						</a>
                    </div>
                </div>
            </div>
            <div class="panel-body col-xs-12 col-sm-12" style="text-align: center;">
                <div class="panel panel-default border1px">
                    <div class="panel-heading">
                        <h3 class="panel-title">Em Negociação</h3>
                    </div>
                    <div class="panel-body">
						<a href="http://crm.quatenusonline.com.br/crm/index.php?module=Potentials&parent=&page=1&view=List&viewname=10&orderby=&sortorder=&search_params=%5B%5B%5B%22sales_stage%22%2C%22e%22%2C%22Em+negocia%C3%A7%C3%A3o%22%5D%5D%5D">
							<h1><?php echo $_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('NEGOCIACAO_PROPOSTA');?>
</h1>
						</a>
                    </div>
                </div>
            </div>
            <div class="panel-body col-xs-12 col-sm-12" style="text-align: center;">
                <div class="panel panel-danger border1px">
                    <div class="panel-heading">
                        <h3 class="panel-title">Perdidas</h3>
                    </div>
                    <div class="panel-body">
						<a href="http://crm.quatenusonline.com.br/crm/index.php?module=Potentials&parent=&page=1&view=List&viewname=10&orderby=&sortorder=&search_params=%5B%5B%5B%22sales_stage%22%2C%22e%22%2C%22Closed+Lost%22%5D%5D%5D">
							<h1><?php echo $_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('PER');?>
</h1>
						</a>
                    </div>
                </div>
            </div>
            <div class="panel-body col-xs-12 col-sm-12" style="text-align: center;">
                <div class="panel panel-success border1px">
                    <div class="panel-heading">
                        <h3 class="panel-title">Convertidas</h3>
                    </div>
                    <div class="panel-body">
						<a href="http://crm.quatenusonline.com.br/crm/index.php?module=Potentials&parent=&page=1&view=List&viewname=10&orderby=&sortorder=&search_params=%5B%5B%5B%22sales_stage%22%2C%22e%22%2C%22Closed+Won%22%5D%5D%5D">
							<h1><?php echo $_smarty_tpl->tpl_vars['POTENTIALS_CF']->value->fields('CON');?>
</h1>
						</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div><?php }} ?>