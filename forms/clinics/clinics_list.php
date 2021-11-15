<div class="element-wrapper">
    <h6 class="element-header">
                     Клиники
                     <button class="btn btn-sm btn-success pull-right" data-wb-ajax="/form/edit/{{_GET[form]}}/_new" data-wb-append="body">
                       <i class="fa fa-plus"></i> Новая клиника
                     </button>
    </h6>
    <div class="element-box">
        <div class="table-responsive">
            <table class="table table-lightborder">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Наименование</th>
                        <th class="text-center">На главной</th>
                        <th class="text-center">Отображать</th>
                        <th class="text-right">{{_LANG[action]}}</th>
                    </tr>
                </thead>
                <tbody data-wb-role="foreach" data-wb-table="{{_form}}" data-wb-add="true" data-wb-size="{{_ENV[page_size]}}" data-wb-sort="name:a">
                    <tr>
                        <td class="nowrap"> {{id}} </td>
                        <td class="nowrap"> {{name}}<br><a href="{{link}}" target="_blank"><small>{{link}}</small></a></td>
                        <td class="text-center">
                            <div class="status-pill green" data-title="{{_LANG[home]}}" data-wb-where='tohome="on"' data-toggle="tooltip"></div>
                            <div class="status-pill red" data-title="{{_LANG[home]}}" data-wb-where='tohome=""' data-toggle="tooltip"></div>
                        </td>

                        <td class="text-center">
                            <div class="status-pill green" data-title="{{_LANG[on]}}" data-wb-role="where" data='active="on"' data-toggle="tooltip"></div>
                            <div class="status-pill red" data-title="{{_LANG[off]}}" data-wb-role="where" data='active=""' data-toggle="tooltip"></div>
                        </td>
                        <td class="text-right" data-wb-role="include" src="/engine/forms/common/item_actions.php"> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/locale" data-wb-role="inlclude" src="news_list"></script>
