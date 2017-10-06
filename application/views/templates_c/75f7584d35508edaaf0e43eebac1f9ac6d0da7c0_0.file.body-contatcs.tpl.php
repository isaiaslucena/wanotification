<?php
/* Smarty version 3.1.30, created on 2017-05-31 17:18:02
  from "/app/application/views/templates/body-contatcs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592f24fa70f652_52465534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75f7584d35508edaaf0e43eebac1f9ac6d0da7c0' => 
    array (
      0 => '/app/application/views/templates/body-contatcs.tpl',
      1 => 1496261880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:body-banner.tpl' => 1,
  ),
),false)) {
function content_592f24fa70f652_52465534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1661164426592f24fa70df54_07221849', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_1661164426592f24fa70df54_07221849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-md-6 col-center">
			<?php $_smarty_tpl->_subTemplateRender("file:body-banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<div class="row">
				<div class="col-xs-10 col-md-4 col-center">
					<a href="/contacts/add" class="btn btn-coke btn-full">
						<span class="fa fa-plus-circle fa-fw fa-2x btn-home"></span> Adicionar
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-md-4 col-center">
					<a href="/contacts/delete" class="btn btn-coke btn-full">
						<span class="fa fa-trash fa-fw fa-2x btn-home"></span> Remover
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-md-4 col-center">
					<a href="/contacts/edit" class="btn btn-coke btn-full">
						<span class="fa fa-pencil fa-fw fa-2x btn-home" style></span> Editar
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-md-4 col-center">
					<a href="/home" class="btn btn-coke btn-full">
						<span class="fa fa-arrow-circle-left fa-fw fa-2x btn-home"></span> Voltar
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
}
/* {/block 'body'} */
}
