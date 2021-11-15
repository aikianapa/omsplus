<div class="modal fade" id="{{_form}}_{{_mode}}" data-keyboard="false" data-backdrop="true" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                <h5 class="modal-title">{{header}}</h5>
            </div>
            <div class="modal-body">

                <form id="{{_form}}EditForm" data-wb-form="{{_form}}" data-wb-item="{{_item}}" class="form-horizontal" role="form">
                    <input type="hidden" name="id">
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Дата/Время</label>
                        <div class="col-sm-3">
                            <input type="datetimepicker" name="_created" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Регион</label>
                        <div class="col-sm-9" data-wb-role="tree" data-wb-item="area" data-wb-branch="{{region}}">
                            <input type="text" value="{{name}}" class="form-control" disabled>
                        </div>
                    </div>
                    <div data-wb-role="formdata" data-wb-form="users" data-wb-item="{{client}}">
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Клиент</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{fullname}}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="form-control-label">Телефон</label>
                                <input type="text" value="{{phone}}" class="form-control" disabled>
                            </div>
                            
                            <div class="col-sm-6">
                                <label class="form-control-label">Email</label>
                                <input type="text" value="{{email}}" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                    <div data-wb-role="multiinput" name="services">
                        <div data-wb-where='"{{strlen({{id}})}}" > "10"' data-wb-hide="*">
                            <div class="col-7" data-wb-role="formdata" data-wb-form="pages" data-wb-item="price">
                                    <div data-wb-role="tree" data-wb-from="content" data-wb-branch="price->{{%id}}">
                                        <input class="form-control" value="{{name->strip_tags()}}" readonly  >
                                    </div>
                            </div>
                        </div>
                        <div data-wb-where='"{{strlen({{id}})}}" < "10"' data-wb-hide="*">
                            <div class="col-7" data-wb-role="formdata" data-wb-form="pages" data-wb-item="services">
                                    <div data-wb-role="tree" data-wb-from="content" data-wb-branch="tabs->{{%id}}" data-wb-children="false">
                                        <input class="form-control" value="{{name->strip_tags()}}" readonly  >
                                    </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <input value="{{qty}}" class="form-control text-right" readonly>
                        </div>
                        <div class="col-3">
                            <input value="{{price}}" class="form-control text-right" readonly>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-3 control-label label-norobot text-right">Экстренно</label>
                        <div class="col-sm-1 norobot">
                        <label class="switch switch-success"><input type="checkbox" name="extr" disabled><span></span></label>
                        </div>
                    </div>
                    
                    <meta data-wb-role="variable" var="payed" data-wb-if='"{{payed}}"="succeeded"' value="Оплачено" else="Не оплачено">
                    <meta data-wb-role="variable" var="pclass" data-wb-if='"{{payed}}"="succeeded"' value="alert-success" else="alert-danger">
                    <p class="mt-4 alert {{_var.pclass}}">Итого по всем позициям: <b>{{total}} руб.</b> {{_var.payed}}</p>
                </form>


            </div>
            <div class="modal-footer" data-wb-role="include" src="form" data-wb-name="common_close_save" data-wb-hide="wb"></div>
            <meta data-wb-remove="#{{_form}}_{{_mode}} .modal-footer .btn-primary">
        </div>
    </div>
</div>

<script>$(document).trigger("wbapp");</script>
