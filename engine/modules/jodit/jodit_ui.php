<div>
<textarea class="jodit wb-content-editor" data-lang="{{_sett.locale}}"></textarea>
<link rel="stylesheet" href="/engine/modules/jodit/build/jodit.min.css">
<link rel="stylesheet" href="/engine/modules/jodit/jodit.css">
<script>
  wbapp.scriptWait("/engine/modules/jodit/jodit.js",{},function(){
    $(document).trigger("jodit-js");
  });
</script>
</div>