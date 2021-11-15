<div class="modal fade" id="{{_form}}_{{_mode}}" data-keyboard="false" data-backdrop="true" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title">{{header}}</h5>
      </div>
      <div class="modal-body">

<form id="{{_form}}EditForm" data-wb-form="{{_form}}" data-wb-item="{{_item}}"  class="form-horizontal" role="form">
	<div class="form-group row">
        <label class="col-sm-3 form-control-label">Наименование</label>
        <div class="input-group col-sm-9">
        <input type="text" class="form-control" name="name" placeholder="Наименование" required >
        </div>
	</div>
    
    <div class="form-group row">
	  <label class="col-sm-3 form-control-label">Ссылка на сайт</label>
	   <div class="col-sm-9"><input type="text" class="form-control" name="link" placeholder="Ссылка" ></div>
	</div>

	<div class="form-group row">
        <label class="col-sm-3 form-control-label">Регион</label>
        <div class="input-group col-sm-9">
            <select class="form-control" placeholder="Регион" name="region" data-wb-role="tree" data-wb-item="area" data-wb-tpl="false" data-wb-hide="false">
                <option value="{{id}}">{{name}}</option>
            </select>
        </div>
	</div>
    
    <div class="form-group row">
        <label class="col-sm-2 form-control-label">Отображать</label>
        <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="active"><span></span></label></div>

        <label class="col-sm-2 form-control-label">На главную</label>
        <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="tohome"><span></span></label></div>
    </div>

</form>


    </div>
            <div class="modal-footer" data-wb-role="include" src="form" data-wb-name="common_close_save" data-wb-hide="wb"></div>

		</div>
</div>
</div>
