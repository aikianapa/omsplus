<div>
<h3>{{_subject}}</h3>
Клиент: {{client}}<br>
Телефон: {{phone}}<br>
Эл.почта: {{email}}<br>
<br>
<b>Нужна помощь:</b><br>
<br>
<ol data-wb-role="foreach" data-wb-json="{{_POST[service]}}" data-wb-tpl="false" data-wb-hide="wb">
    <li>{{_value}} - {{_POST[qty][{{_idx}}]}}</li>
</ol>
</div>