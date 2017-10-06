<?php
/* Smarty version 3.1.30, created on 2017-06-07 12:22:21
  from "/app/application/views/templates/body-message.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59381a2d6e0998_34179926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a366f889b155d362416bf7ec5985d4847deef339' => 
    array (
      0 => '/app/application/views/templates/body-message.tpl',
      1 => 1496848902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:body-banner.tpl' => 1,
  ),
),false)) {
function content_59381a2d6e0998_34179926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63733288759381a2d6d2363_22463541', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_63733288759381a2d6d2363_22463541 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"/>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-md-12 col-center">
 			<?php $_smarty_tpl->_subTemplateRender("file:body-banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<div class="row">
				<div class="col-xs-12 col-md-3 col-center">
					<div class="form-group text-center">
						<button id="btnc" class="btn btn-coke"><i class="fa fa-user"></i> Contato</button>
						<button id="btng" class="btn btn-coke"><i class="fa fa-users"></i> Grupo</button>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-phone"></i></div>
							
							<input class="form-control" type="text" id="sendto" name="sendto" placeholder="Para" autocomplete="off"/>
						</div>
						<span id="nameerr" class="help-block hidden text-center"></span>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
							<textarea class="form-control" rows="8" type="text" id="msg" name="msg" placeholder="Mensagem" autocomplete="off"></textarea>
						</div>
					</div>
					<div class="form-group">
						<button id="btnsend" disabled class="btn btn-coke btn-block"><i class="fa fa-send"></i> Enviar</button>
					</div>
					<div class="form-group">
						<a href="/home" class="btn btn-coke btn-block"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="cmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cmodal">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="input-group">
							<div class="input-group-addon"><span class="fa fa-user-plus"></span></div>
							<input class="form-control  search-input" type="text" id="searchc" name="searchc" placeholder="&#xf002;" autocomplete="off"/>
						</div>
					</div>
					<div id="listgroupc" class="list-group" style="max-height: 300px; overflow-y: auto; overflow-x: hidden">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
							<button id="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id_contact'];?>
" type="button" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['contact']->value['surname'];?>
</button>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button id="btnaddcmodal" type="button" class="btn btn-primary">Adicionar</button>
			</div>
		</div>
	</div>
</div>

<div id="gmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gmodal">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="input-group">
							<div class="input-group-addon"><span class="fa fa-user-plus"></span></div>
							<input class="form-control  search-input" type="text" id="searchg" name="searchg" placeholder="&#xf002;" autocomplete="off"/>
						</div>
					</div>
					<div id="listgroupg" class="list-group" style="max-height: 300px; overflow-y: auto; overflow-x: hidden">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
							<button id="<?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
" type="button" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</button>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button id="btnaddgmodal" type="button" class="btn btn-primary">Adicionar</button>
			</div>
		</div>
	</div>
</div>


<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready( function() {
		$('#sendto').tagsinput({
			tagClass: 'tag-coke',
			focusClass: 'form-control',
			maxTags: 1
		});

		$('#searchc').on('keyup click input', function () {
			if (this.value.length > 0) {
				$('.list-group-item').hide().filter(function () {
					return $(this).text().toLowerCase().indexOf($('#searchc').val().toLowerCase()) != -1;
				}).show();
			} else {
				$('.list-group-item').show();
			}
		});

		$('#searchg').on('keyup click input', function () {
			if (this.value.length > 0) {
				$('.list-group-item').hide().filter(function () {
					return $(this).text().toLowerCase().indexOf($('#searchg').val().toLowerCase()) != -1;
				}).show();
			} else {
				$('.list-group-item').show();
			}
		});

		$('#btnc').click(function(event) {
			$('#cmodal').modal('show');
			$('#listgroupc').children('button').removeClass('active');
		});

		$('#btng').click(function(event) {
			$('#gmodal').modal('show');
			$('#listgroupg').children('button').removeClass('active');
		});

		$('#listgroupg').children('button').click(function(event) {
			$(this).toggleClass('active');
		});

		$('#listgroupc').children('button').click(function(event) {
			$(this).toggleClass('active');
		});

		// $('#cmodal').on('shown.bs.modal', function () {
		// 	// $.get('/contacts/', function(data) {
		// 	// 	optional stuff to do after success 
		// 	// });
		// 	$('#listgroupc').children('button').removeClass('active');
		// });

		// $('#gmodal').on('shown.bs.modal', function () {
		// 	// $.get('/contacts/', function(data) {
		// 	// 	optional stuff to do after success 
		// 	// });
		// 	$('#listgroupg').children('button').removeClass('active');
		// });
	});
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'body'} */
}
