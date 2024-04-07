<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Добавить пункт меню</title> 
</head>
<body>
  <div class="modal-dialog">
		<div class="modal-content">
			<form method="post" id="form-menu" action="/admin/?mod=menu&act=view">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel4">Добавить пункт меню</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					
				
					<div class="col-md-12">
						<input type="hidden" class="form-control" value="add_menu" name="action"/>
						<input type="hidden" class="form-control" value="{$group_id}" name="group_id"/>
						
						<div class="form-group">
							<label for="category"> Заголовок ссылки</label>
							<input type="text" name="title" placeholder="Заголовок ссылки" class="form-control" value="" required />
						</div>

		
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="category"> Ссылка</label>
							<input type="text" name="url" class="form-control" value=""/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="category"> Открытие пункта меню</label>
							<select class="form-control" name="link_target">
								<option value="2">Текущее окно</option>
								<option value="1">Новое окно</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="category"> Стиль пункта меню</label>
							<select class="form-control" name="link_class">
								<option value="1">По умолчанию</option>
								<option value="2">Выделенный</option>
								<option value="3">Особый</option>								
							</select>
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


