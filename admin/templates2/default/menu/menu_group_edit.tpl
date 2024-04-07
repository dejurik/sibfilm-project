<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Редактировать группу меню</title>  
</head>
<body>
  <div class="modal-dialog">
		<div class="modal-content">
			<form method="post" id="form-menu" action="/admin/?mod=menu&act=view">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">Редактировать группу «{$titlemenu}»</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" name="title" class="form-control" value="{$titlemenu}" required />
							<input type="hidden" class="form-control" value="{$group_id}" name="group_id" required />
							<input type="hidden" class="form-control" value="edit_group_menu" name="action" required />
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
					Отмена
				</button>
				<button class="btn btn-primary" type="submit">
					Сохранить
				</button>
			</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</body>
</html>


