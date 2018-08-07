<?php
/* Smarty version 3.1.30, created on 2018-08-06 15:54:02
  from "/app/application/views/templates/body-home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b68994ae9f5f1_77086184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb75ebea68dc88d46baf614bfa377627cb917ac2' => 
    array (
      0 => '/app/application/views/templates/body-home.tpl',
      1 => 1533581322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:body-banner.tpl' => 1,
  ),
),false)) {
function content_5b68994ae9f5f1_77086184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14607787545b68994ae9d800_14645125', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_14607787545b68994ae9d800_14645125 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-md-12 col-center">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-center">
					<?php $_smarty_tpl->_subTemplateRender("file:body-banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-3 col-center">
					<div class="col-xs-6 col-md-6">
						<a href="contacts" class="btn btn-coke btn-full">
							<span class="fa fa-address-book-o fa-2x fa-fw btn-home"></span><br>
							Contatos
						</a>
					</div>
					<div class="col-xs-6 col-md-6">
						<a href="groups" class="btn btn-coke btn-full">
							<span class="fa fa-users fa-2x fa-fw btn-home"></span><br>
							Grupos
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-3 col-center">
					<div class="col-xs-6 col-md-6">
						<a href="message" class="btn btn-coke btn-full">
							<span class="fa fa-comments-o fa-2x fa-fw btn-home" style></span><br>
							Mensagem
						</a>
					</div>
					<div class="col-xs-6 col-md-6">
						<a href="alerts" class="btn btn-coke btn-full">
							<span class="fa fa-bell-o fa-2x fa-fw btn-home"></span><br>
							Alertas
						</a>
					</div>
					<div class="col-xs-6 col-md-6">
						<a href="queue" class="btn btn-coke btn-full">
							<span class="fa fa-server fa-2x fa-fw btn-home"></span><br>
							Fila
						</a>
					</div>
					<div class="col-xs-6 col-md-6">
						<a href="/login/signout" class="btn btn-coke btn-full">
							<span class="fa fa-sign-out fa-2x fa-fw btn-home"></span><br>
							Sair
						</a>
					</div>
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
