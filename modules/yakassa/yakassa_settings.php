<div data-wb-role="include" src="modal" data-wb-id="{{_ENV[route][name]}}Settings" data-wb-hide="*"></div>

<span data-wb-html="#{{_ENV[route][name]}}Settings .modal-title">Настройки Яндекс.Касса</span>
<button class="btn btn-secondary" data-dismiss="modal" data-wb-formsave="#admin_settings" data-wb-html="#{{_ENV[route][name]}}Settings .modal-footer">Готово</button>
<div data-wb-html="#{{_ENV[route][name]}}Settings .modal-body">
    <div class="row form-group">
        <label class="col-sm-4 control-label">ID Магазина</label>
        <div class="col-sm-8"><input type="text" name="yakassa[id]" class="form-control" placeholder="ID Магазина"></div>
    </div>

    <div class="row form-group">
        <label class="col-sm-4 control-label">Секретный ключ для API</label>
        <div class="col-sm-8"><input type="text" name="yakassa[key]" class="form-control" placeholder="Секретный ключ"></div>
    </div>
    
    <div class="row form-group">
        <label class="col-sm-4 control-label">URL возврата</label>
        <div class="col-sm-8"><input type="text" name="yakassa[backurl]" class="form-control" placeholder="URL для возврата в магазин"></div>
    </div>

<hr>
    <div class="row form-group">
        <label class="col-sm-4 control-label">Тестовый режим</label>
        <div class="col-sm-2">
            <label class="switch switch-success"><input type="checkbox" name="yakassa[test]"><span></span></label>
        </div>
    </div>

    <div class="row form-group">
        <label class="col-sm-4 control-label">ID Магазина (тестовый)</label>
        <div class="col-sm-8"><input type="text" name="yakassa[test_id]" class="form-control" placeholder="ID Магазина"></div>
    </div>

    <div class="row form-group">
        <label class="col-sm-4 control-label">Секретный ключ для API (тестовый)</label>
        <div class="col-sm-8"><input type="text" name="yakassa[test_key]" class="form-control" placeholder="Секретный ключ"></div>
    </div>
</div>
