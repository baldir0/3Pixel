<link rel="stylesheet" type="text/css" href="/styles/editor.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<script>
  function format(command, value)
  {
    document.execCommand(command, false, value);
  }
</script>

<div class="toolbar">
  <!--bold-->
  <a href="javascript:void(0)" onclick="format('bold')"><span class="toolbarElement fas fa-bold"></span></a>
  <!--italic-->
  <a href="javascript:void(0)" onclick="format('italic')"><span class="toolbarElement fas fa-italic"></span></a>
  <!--unordered list-->
  <a href="javascript:void(0)" onclick="format('insertunorderedlist')"><span class="toolbarElement fas fa-list-ul"></span></a>
  <!--ordered list-->
  <a href="javascript:void(0)" onclick="format('insertorderedlist')"><span class="toolbarElement fas fa-list-ol"></span></a>
  <!--align left-->
  <a href="javascript:void(0)" onclick="format('justifyleft')"><span class="toolbarElement fas fa-align-left"></span></a>
  <!--align center-->
  <a href="javascript:void(0)" onclick="format('justifycenter')"><span class="toolbarElement fas fa-align-center"></span></a>
  <!--align right-->
  <a href="javascript:void(0)" onclick="format('justifyright')"><span class="toolbarElement fas fa-align-right"></span></a>
  <!--justify-->
  <a href="javascript:void(0)" onclick="format('justifyFull')"><span class="toolbarElement fas fa-align-justify"></span></a>
  <!--strike through-->
  <a href="javascript:void(0)" onclick="format('strikeThrough')"><span class="toolbarElement fas fa-strikethrough"></span></a>
  <!--underline-->
  <a href="javascript:void(0)" onclick="format('underline')"><span class="toolbarElement fas fa-underline"></span></a>
  <!--insertImage-->
  <a href="javascript:void(0)" onclick="format('InsertImage')"><span class="toolbarElement fas fa-Image"></span></a>
</div>

<div class="text-editor" contenteditable="true">

</div>
