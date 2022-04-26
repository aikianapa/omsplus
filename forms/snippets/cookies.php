<div id="wb_cookies_alert" class="alert alert-info" data-wb-where='"{{_COOK.wbcookies}}"="" AND "{{_SESS.user.wbcookies}}"=""' data-wb-hide="wb">
    <div class="container" data-wb-role="formdata" data-wb-form="pages" data-wb-item="cookies" data-wb-hide="wb">
        <button class="btn btn-close" onClick="var cookdate = new Date(new Date().getTime() + 60 * 1000 * 60 * 60 *24 *365 ); document.cookie = 'wbcookies = true; path=/; expires=\"' + cookdate + '\"'; $('#wb_cookies_alert').remove();"></button>
            {{content.cookies.data.text}}
        <style>
            #wb_cookies_alert {
                position:absolute;
                display:block;
                width:100%;
                height:auto;
                top:0;
                left:0;
                padding:15px;
                z-index:99999;
                margin-bottom: 0 !important;
                border: none !important;
                border-radius: 0;
            }
            #wb_cookies_alert p {margin:0; padding:0; height: 50px; display: table-cell; vertical-align:middle;}
            #wb_cookies_alert button {position:relative;float:right; padding:15px;}
        </style>
    </div>
</div>