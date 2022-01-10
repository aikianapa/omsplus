<div class="element-wrapper">
    <h6 class="element-header">Отчёт по промо-кодам</h6>
</div>
    <div class="element-box">
        <div class="table-responsive">
            <table class="table table-lightborder">
                <thead>
                    <tr>
                        <th>Дата/Время</th>
                        <th>Регион</th>
                        <th>Клиент</th>
                        <th class="text-right">Сумма</th>
                        <th class="text-center">Оплачен</th>
                        <th class="text-right">Промокод</th>
                    </tr>
                </thead>
                <tbody data-wb-role="foreach" data-wb-table="{{_form}}" data-wb-size="{{_ENV[page_size]}}" data-wb-sort="_created:d active:d" data-wb-where='promo>""' data-wb-group="promo" data-wb-total="total">
                    <tr>
                        <td class="nowrap"> {{date("d.m.Y H:i",{{strtotime({{_created}})}})}} </td>
                        <td class="nowrap" data-wb-role="tree" data-wb-item="area" data-wb-branch="{{region}}" data-wb-hide="wb"> {{name}} </td>
                        <td class="nowrap" data-wb-role="formdata" data-wb-form="users" data-wb-item="{{client}}" data-wb-hide="wb">{{fullname}}<small><br>{{phone}}</small></td>
                        <td class="text-right" data-wb-fld="total">{{total}}</td>
                        <td class="text-center">
                            <div class="status-pill green" data-title="{{payed}}" data-wb-where='"{{payed}}"="succeeded"' data-toggle="tooltip"></div>
                            <div class="status-pill red" data-title="{{payed}}" data-wb-where='"{{payed}}"!="succeeded"' data-toggle="tooltip"></div>
                        </td>
                        <td class="text-right" data-wb-fld="promo">{{promo}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>