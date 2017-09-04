<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - student_registration"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - student_registration"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
<?php
header("X-XSS-Protection: 0");
?>
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
 </style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" media="screen" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_student_registration/form_student_registration_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_student_registration_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_binicio_off = "<?php echo $this->arr_buttons['binicio_off']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bavanca_off = "<?php echo $this->arr_buttons['bavanca_off']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bretorna_off = "<?php echo $this->arr_buttons['bretorna_off']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_bfinal_off  = "<?php echo $this->arr_buttons['bfinal_off']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).show();
       $("#sc_b_ini_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ini_" + str_pos).show();
       $("#gbl_sc_b_ini_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).show();
       $("#sc_b_ret_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ret_" + str_pos).show();
       $("#gbl_sc_b_ret_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).hide();
       $("#sc_b_ini_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ini_" + str_pos).hide();
       $("#gbl_sc_b_ini_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).hide();
       $("#sc_b_ret_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ret_" + str_pos).hide();
       $("#gbl_sc_b_ret_off_" + str_pos).show();
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).show();
       $("#sc_b_fim_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_fim_" + str_pos).show();
       $("#gbl_sc_b_fim_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).show();
       $("#sc_b_avc_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_avc_" + str_pos).show();
       $("#gbl_sc_b_avc_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).hide();
       $("#sc_b_fim_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_fim_" + str_pos).hide();
       $("#gbl_sc_b_fim_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).hide();
       $("#sc_b_avc_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_avc_" + str_pos).hide();
       $("#gbl_sc_b_avc_off_" + str_pos).show();
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
<?php

include_once('form_student_registration_mob_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
  $(".scBtnGrpClick").find("a").click(function(e){
     e.preventDefault();
  });
  $(".scBtnGrpClick").click(function(){
     var aObj = $(this).find("a"), aHref = aObj.attr("href");
     if ("javascript:" == aHref.substr(0, 11)) {
        eval(aHref.substr(11));
     }
     else {
        aObj.trigger("click");
     }
   }).mouseover(function(){
     $(this).css("cursor", "pointer");
  });
  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
     scQuickSearchInit(false, '');
     if (document.getElementById('SC_fast_search_t')) {
         $('#SC_fast_search_t').listen();
     }
     if (document.getElementById('SC_fast_search_t')) {
         scQuickSearchKeyUp('t', null);
     }
     scQSInit = false;
   });
   function SC_btn_grp_text() {
      $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
   };
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if (document.getElementById('SC_fast_search_t')) {
           if ('' == sPos || 't' == sPos) {
               scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'SC_fast_search_submit_t', 'quicksearchph_t');
           }
       }
     }
   }
   function scQuickSearchSize(sIdInput, sIdClose, sIdSubmit, sPlaceHolder) {
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oSubmit = $('#' + sIdSubmit),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'height': Math.max(oInput.height(), 16) + 'px',
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     oSubmit.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
   }
   function scQuickSearchKeyUp(sPos, e) {
     if ('' != scQSInitVal && $('#SC_fast_search_' + sPos).val() == scQSInitVal && scQSInit) {
       $('#SC_fast_search_close_' + sPos).show();
       $('#SC_fast_search_submit_' + sPos).hide();
     }
     else {
       $('#SC_fast_search_close_' + sPos).hide();
       $('#SC_fast_search_submit_' + sPos).show();
     }
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['recarga'];
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_student_registration_mob_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
 </script>
<form  name="F1" method="post" 
               action="form_student_registration_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="id" value="<?php  echo $this->form_encode_input($this->id) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_student_registration_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_student_registration_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['mostra_cab'] != "N") && (!$_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['dashboard_info']['under_dashboard'] || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['dashboard_info']['compact_mode'] || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['dashboard_info']['maximized']))
  {
?>
<tr><td>
<style>
    .scMenuTHeaderFont img, .scGridHeaderFont img , .scFormHeaderFont img , .scTabHeaderFont img , .scContainerHeaderFont img , .scFilterHeaderFont img { height:23px;}
</style>
<div class="scFormHeader" style="height: 54px; padding: 17px 15px; box-sizing: border-box;margin: -1px 0px 0px 0px;width: 100%;">
    <div class="scFormHeaderFont" style="float: left; text-transform: uppercase;"><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - student_registration"; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - student_registration"; } ?></div>
    <div class="scFormHeaderFont" style="float: right;"><?php echo date($this->dateDefaultFormat()); ?></div>
</div></td></tr>
<?php
  }
?>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{watermark:'<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>', watermarkClass: 'scFormToolbarInputWm', maxLength: 255}">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = ''; nm_move('fast_search', 't');">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_submit_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
          </span>
<?php 
      }
        $sCondStyle = ($this->nmgp_botoes['new'] != 'off' || $this->nmgp_botoes['insert'] != 'off' || $this->nmgp_botoes['exit'] != 'off' || $this->nmgp_botoes['update'] != 'off' || $this->nmgp_botoes['delete'] != 'off' || $this->nmgp_botoes['copy'] != 'off') ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "group_group_2", "scBtnGrpShow('group_2_t')", "scBtnGrpShow('group_2_t')", "sc_btgp_btn_group_2_t", "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "", "", "__sc_grp__");?>
 
<?php
        $NM_btn = true;
?>
<table style="border-collapse: collapse; border-width: 0; display: none; position: absolute; z-index: 1000" id="sc_btgp_div_group_2_t">
 <tr><td class="scBtnGrpBackground">
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_new_t">
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "nm_move ('novo');", "nm_move ('novo');", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_ins_t">
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir');", "nm_atualiza ('incluir');", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_sai_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_upd_t">
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_del_t">
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "nm_atualiza ('excluir');", "nm_atualiza ('excluir');", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sys_separator">
 </td></tr><tr><td class="scBtnGrpBackground">
  </div>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['copy'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_clone_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcopy", "nm_move ('clone');", "nm_move ('clone');", "sc_b_clone_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
?>
 </td></tr>
</table>
<?php
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['empty_filter'] = true;
       }
  }
  else
  {
?>
<script type="text/javascript">
var pag_ativa = "form_student_registration_mob_form0";
</script>
<ul class="scTabLine">
<?php
    if ($nmgp_num_form == "form_student_registration_mob_form0")
    {
        $css_celula = "scTabActive";
    }
    else
    {
        $css_celula = "scTabInactive";
    }
?>
   <li id="id_form_student_registration_mob_form0" class="<?php echo $css_celula; ?>">
    <a href="javascript: sc_exib_ocult_pag ('form_student_registration_mob_form0')">
     Information
    </a>
   </li>
<?php
    if ($nmgp_num_form == "form_student_registration_mob_form1")
    {
        $css_celula = "scTabActive";
    }
    else
    {
        $css_celula = "scTabInactive";
    }
?>
   <li id="id_form_student_registration_mob_form1" class="<?php echo $css_celula; ?>">
    <a href="javascript: sc_exib_ocult_pag ('form_student_registration_mob_form1')">
     School
    </a>
   </li>
<?php
    if ($nmgp_num_form == "form_student_registration_mob_form2")
    {
        $css_celula = "scTabActive";
    }
    else
    {
        $css_celula = "scTabInactive";
    }
?>
   <li id="id_form_student_registration_mob_form2" class="<?php echo $css_celula; ?>">
    <a href="javascript: sc_exib_ocult_pag ('form_student_registration_mob_form2')">
     Address & Contact
    </a>
   </li>
<?php
    if ($nmgp_num_form == "form_student_registration_mob_form3")
    {
        $css_celula = "scTabActive";
    }
    else
    {
        $css_celula = "scTabInactive";
    }
?>
   <li id="id_form_student_registration_mob_form3" class="<?php echo $css_celula; ?>">
    <a href="javascript: sc_exib_ocult_pag ('form_student_registration_mob_form3')">
     Father & Mother
    </a>
   </li>
<?php
    if ($nmgp_num_form == "form_student_registration_mob_form4")
    {
        $css_celula = "scTabActive";
    }
    else
    {
        $css_celula = "scTabInactive";
    }
?>
   <li id="id_form_student_registration_mob_form4" class="<?php echo $css_celula; ?>">
    <a href="javascript: sc_exib_ocult_pag ('form_student_registration_mob_form4')">
     Parent & Emergency
    </a>
   </li>
</ul>
<div style='clear:both'></div>
</td></tr> 
<tr><td style="padding: 0px">
<div id="form_student_registration_mob_form0" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['program_id']))
    {
        $this->nm_new_label['program_id'] = "Program";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $program_id = $this->program_id;
   $sStyleHidden_program_id = '';
   if (isset($this->nmgp_cmp_hidden['program_id']) && $this->nmgp_cmp_hidden['program_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['program_id']);
       $sStyleHidden_program_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_program_id = 'display: none;';
   $sStyleReadInp_program_id = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['program_id']) && $this->nmgp_cmp_readonly['program_id'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['program_id']);
       $sStyleReadLab_program_id = '';
       $sStyleReadInp_program_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['program_id']) && $this->nmgp_cmp_hidden['program_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="program_id" value="<?php echo $this->form_encode_input($program_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_program_id_line" id="hidden_field_data_program_id" style="<?php echo $sStyleHidden_program_id; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_program_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_program_id_label"><span id="id_label_program_id"><?php echo $this->nm_new_label['program_id']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["program_id"]) &&  $this->nmgp_cmp_readonly["program_id"] == "on") { 

 ?>
<input type="hidden" name="program_id" value="<?php echo $this->form_encode_input($program_id) . "\">" . $program_id . ""; ?>
<?php } else { ?>
<span id="id_read_on_program_id" class="sc-ui-readonly-program_id css_program_id_line" style="<?php echo $sStyleReadLab_program_id; ?>"><?php echo $this->form_encode_input($this->program_id); ?></span><span id="id_read_off_program_id" style="white-space: nowrap;<?php echo $sStyleReadInp_program_id; ?>">
 <input class="sc-js-input scFormObjectOdd css_program_id_obj" style="" id="id_sc_field_program_id" type=text name="program_id" value="<?php echo $this->form_encode_input($program_id) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_program_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_program_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['student_status']))
    {
        $this->nm_new_label['student_status'] = "Student Status";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $student_status = $this->student_status;
   $sStyleHidden_student_status = '';
   if (isset($this->nmgp_cmp_hidden['student_status']) && $this->nmgp_cmp_hidden['student_status'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['student_status']);
       $sStyleHidden_student_status = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_student_status = 'display: none;';
   $sStyleReadInp_student_status = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['student_status']) && $this->nmgp_cmp_readonly['student_status'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['student_status']);
       $sStyleReadLab_student_status = '';
       $sStyleReadInp_student_status = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['student_status']) && $this->nmgp_cmp_hidden['student_status'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="student_status" value="<?php echo $this->form_encode_input($student_status) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_student_status_line" id="hidden_field_data_student_status" style="<?php echo $sStyleHidden_student_status; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_student_status_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_student_status_label"><span id="id_label_student_status"><?php echo $this->nm_new_label['student_status']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["student_status"]) &&  $this->nmgp_cmp_readonly["student_status"] == "on") { 

 if ("1" == $this->student_status) { $student_status_look = "Active";} 
 if ("0" == $this->student_status) { $student_status_look = "Inactive";} 
?>
<input type="hidden" name="student_status" value="<?php echo $this->form_encode_input($student_status) . "\">" . $student_status_look . ""; ?>
<?php } else { ?>

<?php

 if ("1" == $this->student_status) { $student_status_look = "Active";} 
 if ("0" == $this->student_status) { $student_status_look = "Inactive";} 
?>
<span id="id_read_on_student_status"  class="css_student_status_line" style="<?php echo $sStyleReadLab_student_status; ?>"><?php echo $this->form_encode_input($student_status_look); ?></span><span id="id_read_off_student_status" style="<?php echo $sStyleReadInp_student_status; ?>"><div id="idAjaxRadio_student_status" style="display: inline-block">
<TABLE><TR>
  <TD class="scFormDataFontOdd css_student_status_line">    <input  type=radio name="student_status" value="1"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['Lookup_student_status'][] = '1'; ?>
<?php  if ("1" == $this->student_status)  { echo " checked" ;} ?><?php  if (empty($this->student_status)) { echo " checked" ;} ?>  onClick="" >Active</TD>
</TR>
<TR>
  <TD class="scFormDataFontOdd css_student_status_line">    <input  type=radio name="student_status" value="0"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['Lookup_student_status'][] = '0'; ?>
<?php  if ("0" == $this->student_status)  { echo " checked" ;} ?>  onClick="" >Inactive</TD>
</TR></TABLE>
</div>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_student_status_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_student_status_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['student_id']))
    {
        $this->nm_new_label['student_id'] = "Student ID";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $student_id = $this->student_id;
   $sStyleHidden_student_id = '';
   if (isset($this->nmgp_cmp_hidden['student_id']) && $this->nmgp_cmp_hidden['student_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['student_id']);
       $sStyleHidden_student_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_student_id = 'display: none;';
   $sStyleReadInp_student_id = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['student_id']) && $this->nmgp_cmp_readonly['student_id'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['student_id']);
       $sStyleReadLab_student_id = '';
       $sStyleReadInp_student_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['student_id']) && $this->nmgp_cmp_hidden['student_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="student_id" value="<?php echo $this->form_encode_input($student_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_student_id_line" id="hidden_field_data_student_id" style="<?php echo $sStyleHidden_student_id; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_student_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_student_id_label"><span id="id_label_student_id"><?php echo $this->nm_new_label['student_id']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["student_id"]) &&  $this->nmgp_cmp_readonly["student_id"] == "on") { 

 ?>
<input type="hidden" name="student_id" value="<?php echo $this->form_encode_input($student_id) . "\">" . $student_id . ""; ?>
<?php } else { ?>
<span id="id_read_on_student_id" class="sc-ui-readonly-student_id css_student_id_line" style="<?php echo $sStyleReadLab_student_id; ?>"><?php echo $this->form_encode_input($this->student_id); ?></span><span id="id_read_off_student_id" style="white-space: nowrap;<?php echo $sStyleReadInp_student_id; ?>">
 <input class="sc-js-input scFormObjectOdd css_student_id_obj" style="" id="id_sc_field_student_id" type=text name="student_id" value="<?php echo $this->form_encode_input($student_id) ?>"
 size=7 maxlength=7 alt="{datatype: 'text', maxLength: 7, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_student_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_student_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['title_id']))
    {
        $this->nm_new_label['title_id'] = "Title";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $title_id = $this->title_id;
   $sStyleHidden_title_id = '';
   if (isset($this->nmgp_cmp_hidden['title_id']) && $this->nmgp_cmp_hidden['title_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['title_id']);
       $sStyleHidden_title_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_title_id = 'display: none;';
   $sStyleReadInp_title_id = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['title_id']) && $this->nmgp_cmp_readonly['title_id'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['title_id']);
       $sStyleReadLab_title_id = '';
       $sStyleReadInp_title_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['title_id']) && $this->nmgp_cmp_hidden['title_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="title_id" value="<?php echo $this->form_encode_input($title_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_title_id_line" id="hidden_field_data_title_id" style="<?php echo $sStyleHidden_title_id; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_title_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_title_id_label"><span id="id_label_title_id"><?php echo $this->nm_new_label['title_id']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["title_id"]) &&  $this->nmgp_cmp_readonly["title_id"] == "on") { 

 ?>
<input type="hidden" name="title_id" value="<?php echo $this->form_encode_input($title_id) . "\">" . $title_id . ""; ?>
<?php } else { ?>
<span id="id_read_on_title_id" class="sc-ui-readonly-title_id css_title_id_line" style="<?php echo $sStyleReadLab_title_id; ?>"><?php echo $this->form_encode_input($this->title_id); ?></span><span id="id_read_off_title_id" style="white-space: nowrap;<?php echo $sStyleReadInp_title_id; ?>">
 <input class="sc-js-input scFormObjectOdd css_title_id_obj" style="" id="id_sc_field_title_id" type=text name="title_id" value="<?php echo $this->form_encode_input($title_id) ?>"
 size=11 maxlength=11 alt="{datatype: 'text', maxLength: 11, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_title_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_title_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['firstname']))
    {
        $this->nm_new_label['firstname'] = "First name";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $firstname = $this->firstname;
   $sStyleHidden_firstname = '';
   if (isset($this->nmgp_cmp_hidden['firstname']) && $this->nmgp_cmp_hidden['firstname'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['firstname']);
       $sStyleHidden_firstname = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_firstname = 'display: none;';
   $sStyleReadInp_firstname = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['firstname']) && $this->nmgp_cmp_readonly['firstname'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['firstname']);
       $sStyleReadLab_firstname = '';
       $sStyleReadInp_firstname = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['firstname']) && $this->nmgp_cmp_hidden['firstname'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="firstname" value="<?php echo $this->form_encode_input($firstname) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_firstname_line" id="hidden_field_data_firstname" style="<?php echo $sStyleHidden_firstname; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_firstname_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_firstname_label"><span id="id_label_firstname"><?php echo $this->nm_new_label['firstname']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["firstname"]) &&  $this->nmgp_cmp_readonly["firstname"] == "on") { 

 ?>
<input type="hidden" name="firstname" value="<?php echo $this->form_encode_input($firstname) . "\">" . $firstname . ""; ?>
<?php } else { ?>
<span id="id_read_on_firstname" class="sc-ui-readonly-firstname css_firstname_line" style="<?php echo $sStyleReadLab_firstname; ?>"><?php echo $this->form_encode_input($this->firstname); ?></span><span id="id_read_off_firstname" style="white-space: nowrap;<?php echo $sStyleReadInp_firstname; ?>">
 <input class="sc-js-input scFormObjectOdd css_firstname_obj" style="" id="id_sc_field_firstname" type=text name="firstname" value="<?php echo $this->form_encode_input($firstname) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_firstname_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_firstname_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lastname']))
    {
        $this->nm_new_label['lastname'] = "Last name";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lastname = $this->lastname;
   $sStyleHidden_lastname = '';
   if (isset($this->nmgp_cmp_hidden['lastname']) && $this->nmgp_cmp_hidden['lastname'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lastname']);
       $sStyleHidden_lastname = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lastname = 'display: none;';
   $sStyleReadInp_lastname = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lastname']) && $this->nmgp_cmp_readonly['lastname'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lastname']);
       $sStyleReadLab_lastname = '';
       $sStyleReadInp_lastname = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lastname']) && $this->nmgp_cmp_hidden['lastname'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="lastname" value="<?php echo $this->form_encode_input($lastname) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_lastname_line" id="hidden_field_data_lastname" style="<?php echo $sStyleHidden_lastname; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lastname_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_lastname_label"><span id="id_label_lastname"><?php echo $this->nm_new_label['lastname']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["lastname"]) &&  $this->nmgp_cmp_readonly["lastname"] == "on") { 

 ?>
<input type="hidden" name="lastname" value="<?php echo $this->form_encode_input($lastname) . "\">" . $lastname . ""; ?>
<?php } else { ?>
<span id="id_read_on_lastname" class="sc-ui-readonly-lastname css_lastname_line" style="<?php echo $sStyleReadLab_lastname; ?>"><?php echo $this->form_encode_input($this->lastname); ?></span><span id="id_read_off_lastname" style="white-space: nowrap;<?php echo $sStyleReadInp_lastname; ?>">
 <input class="sc-js-input scFormObjectOdd css_lastname_obj" style="" id="id_sc_field_lastname" type=text name="lastname" value="<?php echo $this->form_encode_input($lastname) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lastname_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lastname_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['firstnameeng']))
    {
        $this->nm_new_label['firstnameeng'] = "Firstname Eng";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $firstnameeng = $this->firstnameeng;
   $sStyleHidden_firstnameeng = '';
   if (isset($this->nmgp_cmp_hidden['firstnameeng']) && $this->nmgp_cmp_hidden['firstnameeng'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['firstnameeng']);
       $sStyleHidden_firstnameeng = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_firstnameeng = 'display: none;';
   $sStyleReadInp_firstnameeng = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['firstnameeng']) && $this->nmgp_cmp_readonly['firstnameeng'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['firstnameeng']);
       $sStyleReadLab_firstnameeng = '';
       $sStyleReadInp_firstnameeng = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['firstnameeng']) && $this->nmgp_cmp_hidden['firstnameeng'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="firstnameeng" value="<?php echo $this->form_encode_input($firstnameeng) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_firstnameeng_line" id="hidden_field_data_firstnameeng" style="<?php echo $sStyleHidden_firstnameeng; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_firstnameeng_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_firstnameeng_label"><span id="id_label_firstnameeng"><?php echo $this->nm_new_label['firstnameeng']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["firstnameeng"]) &&  $this->nmgp_cmp_readonly["firstnameeng"] == "on") { 

 ?>
<input type="hidden" name="firstnameeng" value="<?php echo $this->form_encode_input($firstnameeng) . "\">" . $firstnameeng . ""; ?>
<?php } else { ?>
<span id="id_read_on_firstnameeng" class="sc-ui-readonly-firstnameeng css_firstnameeng_line" style="<?php echo $sStyleReadLab_firstnameeng; ?>"><?php echo $this->form_encode_input($this->firstnameeng); ?></span><span id="id_read_off_firstnameeng" style="white-space: nowrap;<?php echo $sStyleReadInp_firstnameeng; ?>">
 <input class="sc-js-input scFormObjectOdd css_firstnameeng_obj" style="" id="id_sc_field_firstnameeng" type=text name="firstnameeng" value="<?php echo $this->form_encode_input($firstnameeng) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_firstnameeng_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_firstnameeng_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lastnameeng']))
    {
        $this->nm_new_label['lastnameeng'] = "Lastname Eng";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lastnameeng = $this->lastnameeng;
   $sStyleHidden_lastnameeng = '';
   if (isset($this->nmgp_cmp_hidden['lastnameeng']) && $this->nmgp_cmp_hidden['lastnameeng'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lastnameeng']);
       $sStyleHidden_lastnameeng = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lastnameeng = 'display: none;';
   $sStyleReadInp_lastnameeng = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lastnameeng']) && $this->nmgp_cmp_readonly['lastnameeng'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lastnameeng']);
       $sStyleReadLab_lastnameeng = '';
       $sStyleReadInp_lastnameeng = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lastnameeng']) && $this->nmgp_cmp_hidden['lastnameeng'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="lastnameeng" value="<?php echo $this->form_encode_input($lastnameeng) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_lastnameeng_line" id="hidden_field_data_lastnameeng" style="<?php echo $sStyleHidden_lastnameeng; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lastnameeng_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_lastnameeng_label"><span id="id_label_lastnameeng"><?php echo $this->nm_new_label['lastnameeng']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["lastnameeng"]) &&  $this->nmgp_cmp_readonly["lastnameeng"] == "on") { 

 ?>
<input type="hidden" name="lastnameeng" value="<?php echo $this->form_encode_input($lastnameeng) . "\">" . $lastnameeng . ""; ?>
<?php } else { ?>
<span id="id_read_on_lastnameeng" class="sc-ui-readonly-lastnameeng css_lastnameeng_line" style="<?php echo $sStyleReadLab_lastnameeng; ?>"><?php echo $this->form_encode_input($this->lastnameeng); ?></span><span id="id_read_off_lastnameeng" style="white-space: nowrap;<?php echo $sStyleReadInp_lastnameeng; ?>">
 <input class="sc-js-input scFormObjectOdd css_lastnameeng_obj" style="" id="id_sc_field_lastnameeng" type=text name="lastnameeng" value="<?php echo $this->form_encode_input($lastnameeng) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lastnameeng_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lastnameeng_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['gender']))
    {
        $this->nm_new_label['gender'] = "Gender";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gender = $this->gender;
   $sStyleHidden_gender = '';
   if (isset($this->nmgp_cmp_hidden['gender']) && $this->nmgp_cmp_hidden['gender'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gender']);
       $sStyleHidden_gender = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gender = 'display: none;';
   $sStyleReadInp_gender = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gender']) && $this->nmgp_cmp_readonly['gender'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gender']);
       $sStyleReadLab_gender = '';
       $sStyleReadInp_gender = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gender']) && $this->nmgp_cmp_hidden['gender'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gender" value="<?php echo $this->form_encode_input($gender) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gender_line" id="hidden_field_data_gender" style="<?php echo $sStyleHidden_gender; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gender_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gender_label"><span id="id_label_gender"><?php echo $this->nm_new_label['gender']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gender"]) &&  $this->nmgp_cmp_readonly["gender"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['Lookup_gender']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['Lookup_gender'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['Lookup_gender']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['Lookup_gender'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['Lookup_gender']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['Lookup_gender'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['Lookup_gender']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['Lookup_gender'] = array(); 
    }
   $nm_comando = "select distinct(gender) from student_registration
where gender not like \"\"";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration_mob']['Lookup_gender'][] = $rs->fields[0];
              $nmgp_def_dados .= $rs->fields[0] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $gender_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->gender_1))
          {
              foreach ($this->gender_1 as $tmp_gender)
              {
                  if (trim($tmp_gender) === trim($cadaselect[1])) { $gender_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->gender) === trim($cadaselect[1])) { $gender_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="gender" value="<?php echo $this->form_encode_input($gender) . "\">" . $gender_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_gender();
   $x = 0 ; 
   $gender_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->gender_1))
          {
              foreach ($this->gender_1 as $tmp_gender)
              {
                  if (trim($tmp_gender) === trim($cadaselect[1])) { $gender_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->gender) === trim($cadaselect[1])) { $gender_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_gender\" class=\"css_gender_line\" style=\"" .  $sStyleReadLab_gender . "\">" . $this->form_encode_input($gender_look) . "</span><span id=\"id_read_off_gender\" style=\"" . $sStyleReadInp_gender . "\">";
   echo "<div id=\"idAjaxRadio_gender\" style=\"display: inline-block\">\r\n";
   $y = 0 ; 
   echo "<table border=0>\r\n";
   echo " <tr>\r\n";
   while (!empty($todo[$x])) 
   {
          $cadaradio = explode("?#?", $todo[$x]) ; 
          if ($cadaradio[1] == "@ ") {$cadaradio[1]= trim($cadaradio[1]); } ; 
          if ($y == 1)
          {
              echo " </tr>\r\n";
              echo " <tr>\r\n";
              $y = 0;
          }
          echo "  <td class=\"scFormDataFontOdd css_gender_line\">\r\n";
          echo "    <input type=radio name=\"gender\" value=\"$cadaradio[1]\"";
          if (trim($this->gender) === trim($cadaradio[1])) 
          { 
              echo " checked" ; 
          } 
          if (strtoupper($cadaradio[2]) == "S") 
          { 
              if (empty($this->gender)) 
              { 
                  echo " checked" ; 
              } 
          } 
          echo "  onClick=\"" . $sCheckInsert . "\" >" ; 
          echo "" . $cadaradio[0] . "";
          $x++ ; 
          $y++ ; 
          echo "  </font></td>\r\n";
   } 
   echo " </tr>\r\n";
   echo "</table>";
   echo "</div>\r\n";
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gender_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gender_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['student_pid']))
    {
        $this->nm_new_label['student_pid'] = "Student PID";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $student_pid = $this->student_pid;
   $sStyleHidden_student_pid = '';
   if (isset($this->nmgp_cmp_hidden['student_pid']) && $this->nmgp_cmp_hidden['student_pid'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['student_pid']);
       $sStyleHidden_student_pid = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_student_pid = 'display: none;';
   $sStyleReadInp_student_pid = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['student_pid']) && $this->nmgp_cmp_readonly['student_pid'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['student_pid']);
       $sStyleReadLab_student_pid = '';
       $sStyleReadInp_student_pid = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['student_pid']) && $this->nmgp_cmp_hidden['student_pid'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="student_pid" value="<?php echo $this->form_encode_input($student_pid) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_student_pid_line" id="hidden_field_data_student_pid" style="<?php echo $sStyleHidden_student_pid; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_student_pid_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_student_pid_label"><span id="id_label_student_pid"><?php echo $this->nm_new_label['student_pid']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["student_pid"]) &&  $this->nmgp_cmp_readonly["student_pid"] == "on") { 

 ?>
<input type="hidden" name="student_pid" value="<?php echo $this->form_encode_input($student_pid) . "\">" . $student_pid . ""; ?>
<?php } else { ?>
<span id="id_read_on_student_pid" class="sc-ui-readonly-student_pid css_student_pid_line" style="<?php echo $sStyleReadLab_student_pid; ?>"><?php echo $this->form_encode_input($this->student_pid); ?></span><span id="id_read_off_student_pid" style="white-space: nowrap;<?php echo $sStyleReadInp_student_pid; ?>">
 <input class="sc-js-input scFormObjectOdd css_student_pid_obj" style="" id="id_sc_field_student_pid" type=text name="student_pid" value="<?php echo $this->form_encode_input($student_pid) ?>"
 size=13 maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_student_pid_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_student_pid_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pid_start']))
    {
        $this->nm_new_label['pid_start'] = "PID Start Date";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pid_start = $this->pid_start;
   $sStyleHidden_pid_start = '';
   if (isset($this->nmgp_cmp_hidden['pid_start']) && $this->nmgp_cmp_hidden['pid_start'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pid_start']);
       $sStyleHidden_pid_start = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pid_start = 'display: none;';
   $sStyleReadInp_pid_start = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pid_start']) && $this->nmgp_cmp_readonly['pid_start'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pid_start']);
       $sStyleReadLab_pid_start = '';
       $sStyleReadInp_pid_start = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pid_start']) && $this->nmgp_cmp_hidden['pid_start'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pid_start" value="<?php echo $this->form_encode_input($pid_start) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pid_start_line" id="hidden_field_data_pid_start" style="<?php echo $sStyleHidden_pid_start; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pid_start_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pid_start_label"><span id="id_label_pid_start"><?php echo $this->nm_new_label['pid_start']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pid_start"]) &&  $this->nmgp_cmp_readonly["pid_start"] == "on") { 

 ?>
<input type="hidden" name="pid_start" value="<?php echo $this->form_encode_input($pid_start) . "\">" . $pid_start . ""; ?>
<?php } else { ?>
<span id="id_read_on_pid_start" class="sc-ui-readonly-pid_start css_pid_start_line" style="<?php echo $sStyleReadLab_pid_start; ?>"><?php echo $this->form_encode_input($this->pid_start); ?></span><span id="id_read_off_pid_start" style="white-space: nowrap;<?php echo $sStyleReadInp_pid_start; ?>">
 <input class="sc-js-input scFormObjectOdd css_pid_start_obj" style="" id="id_sc_field_pid_start" type=text name="pid_start" value="<?php echo $this->form_encode_input($pid_start) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pid_start_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pid_start_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pid_stop']))
    {
        $this->nm_new_label['pid_stop'] = "PID Expired Date";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pid_stop = $this->pid_stop;
   $sStyleHidden_pid_stop = '';
   if (isset($this->nmgp_cmp_hidden['pid_stop']) && $this->nmgp_cmp_hidden['pid_stop'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pid_stop']);
       $sStyleHidden_pid_stop = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pid_stop = 'display: none;';
   $sStyleReadInp_pid_stop = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pid_stop']) && $this->nmgp_cmp_readonly['pid_stop'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pid_stop']);
       $sStyleReadLab_pid_stop = '';
       $sStyleReadInp_pid_stop = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pid_stop']) && $this->nmgp_cmp_hidden['pid_stop'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pid_stop" value="<?php echo $this->form_encode_input($pid_stop) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pid_stop_line" id="hidden_field_data_pid_stop" style="<?php echo $sStyleHidden_pid_stop; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pid_stop_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pid_stop_label"><span id="id_label_pid_stop"><?php echo $this->nm_new_label['pid_stop']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pid_stop"]) &&  $this->nmgp_cmp_readonly["pid_stop"] == "on") { 

 ?>
<input type="hidden" name="pid_stop" value="<?php echo $this->form_encode_input($pid_stop) . "\">" . $pid_stop . ""; ?>
<?php } else { ?>
<span id="id_read_on_pid_stop" class="sc-ui-readonly-pid_stop css_pid_stop_line" style="<?php echo $sStyleReadLab_pid_stop; ?>"><?php echo $this->form_encode_input($this->pid_stop); ?></span><span id="id_read_off_pid_stop" style="white-space: nowrap;<?php echo $sStyleReadInp_pid_stop; ?>">
 <input class="sc-js-input scFormObjectOdd css_pid_stop_obj" style="" id="id_sc_field_pid_stop" type=text name="pid_stop" value="<?php echo $this->form_encode_input($pid_stop) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pid_stop_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pid_stop_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['student_dob']))
    {
        $this->nm_new_label['student_dob'] = "Student DOB";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $student_dob = $this->student_dob;
   $sStyleHidden_student_dob = '';
   if (isset($this->nmgp_cmp_hidden['student_dob']) && $this->nmgp_cmp_hidden['student_dob'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['student_dob']);
       $sStyleHidden_student_dob = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_student_dob = 'display: none;';
   $sStyleReadInp_student_dob = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['student_dob']) && $this->nmgp_cmp_readonly['student_dob'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['student_dob']);
       $sStyleReadLab_student_dob = '';
       $sStyleReadInp_student_dob = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['student_dob']) && $this->nmgp_cmp_hidden['student_dob'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="student_dob" value="<?php echo $this->form_encode_input($student_dob) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_student_dob_line" id="hidden_field_data_student_dob" style="<?php echo $sStyleHidden_student_dob; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_student_dob_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_student_dob_label"><span id="id_label_student_dob"><?php echo $this->nm_new_label['student_dob']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["student_dob"]) &&  $this->nmgp_cmp_readonly["student_dob"] == "on") { 

 ?>
<input type="hidden" name="student_dob" value="<?php echo $this->form_encode_input($student_dob) . "\">" . $student_dob . ""; ?>
<?php } else { ?>
<span id="id_read_on_student_dob" class="sc-ui-readonly-student_dob css_student_dob_line" style="<?php echo $sStyleReadLab_student_dob; ?>"><?php echo $this->form_encode_input($this->student_dob); ?></span><span id="id_read_off_student_dob" style="white-space: nowrap;<?php echo $sStyleReadInp_student_dob; ?>">
 <input class="sc-js-input scFormObjectOdd css_student_dob_obj" style="" id="id_sc_field_student_dob" type=text name="student_dob" value="<?php echo $this->form_encode_input($student_dob) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_student_dob_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_student_dob_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['race_id']))
    {
        $this->nm_new_label['race_id'] = "Race";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $race_id = $this->race_id;
   $sStyleHidden_race_id = '';
   if (isset($this->nmgp_cmp_hidden['race_id']) && $this->nmgp_cmp_hidden['race_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['race_id']);
       $sStyleHidden_race_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_race_id = 'display: none;';
   $sStyleReadInp_race_id = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['race_id']) && $this->nmgp_cmp_readonly['race_id'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['race_id']);
       $sStyleReadLab_race_id = '';
       $sStyleReadInp_race_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['race_id']) && $this->nmgp_cmp_hidden['race_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="race_id" value="<?php echo $this->form_encode_input($race_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_race_id_line" id="hidden_field_data_race_id" style="<?php echo $sStyleHidden_race_id; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_race_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_race_id_label"><span id="id_label_race_id"><?php echo $this->nm_new_label['race_id']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["race_id"]) &&  $this->nmgp_cmp_readonly["race_id"] == "on") { 

 ?>
<input type="hidden" name="race_id" value="<?php echo $this->form_encode_input($race_id) . "\">" . $race_id . ""; ?>
<?php } else { ?>
<span id="id_read_on_race_id" class="sc-ui-readonly-race_id css_race_id_line" style="<?php echo $sStyleReadLab_race_id; ?>"><?php echo $this->form_encode_input($this->race_id); ?></span><span id="id_read_off_race_id" style="white-space: nowrap;<?php echo $sStyleReadInp_race_id; ?>">
 <input class="sc-js-input scFormObjectOdd css_race_id_obj" style="" id="id_sc_field_race_id" type=text name="race_id" value="<?php echo $this->form_encode_input($race_id) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_race_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_race_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nationality_id']))
    {
        $this->nm_new_label['nationality_id'] = "Nationality";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nationality_id = $this->nationality_id;
   $sStyleHidden_nationality_id = '';
   if (isset($this->nmgp_cmp_hidden['nationality_id']) && $this->nmgp_cmp_hidden['nationality_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nationality_id']);
       $sStyleHidden_nationality_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nationality_id = 'display: none;';
   $sStyleReadInp_nationality_id = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nationality_id']) && $this->nmgp_cmp_readonly['nationality_id'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nationality_id']);
       $sStyleReadLab_nationality_id = '';
       $sStyleReadInp_nationality_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nationality_id']) && $this->nmgp_cmp_hidden['nationality_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nationality_id" value="<?php echo $this->form_encode_input($nationality_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nationality_id_line" id="hidden_field_data_nationality_id" style="<?php echo $sStyleHidden_nationality_id; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nationality_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nationality_id_label"><span id="id_label_nationality_id"><?php echo $this->nm_new_label['nationality_id']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nationality_id"]) &&  $this->nmgp_cmp_readonly["nationality_id"] == "on") { 

 ?>
<input type="hidden" name="nationality_id" value="<?php echo $this->form_encode_input($nationality_id) . "\">" . $nationality_id . ""; ?>
<?php } else { ?>
<span id="id_read_on_nationality_id" class="sc-ui-readonly-nationality_id css_nationality_id_line" style="<?php echo $sStyleReadLab_nationality_id; ?>"><?php echo $this->form_encode_input($this->nationality_id); ?></span><span id="id_read_off_nationality_id" style="white-space: nowrap;<?php echo $sStyleReadInp_nationality_id; ?>">
 <input class="sc-js-input scFormObjectOdd css_nationality_id_obj" style="" id="id_sc_field_nationality_id" type=text name="nationality_id" value="<?php echo $this->form_encode_input($nationality_id) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nationality_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nationality_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['religion_id']))
    {
        $this->nm_new_label['religion_id'] = "Religion";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $religion_id = $this->religion_id;
   $sStyleHidden_religion_id = '';
   if (isset($this->nmgp_cmp_hidden['religion_id']) && $this->nmgp_cmp_hidden['religion_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['religion_id']);
       $sStyleHidden_religion_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_religion_id = 'display: none;';
   $sStyleReadInp_religion_id = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['religion_id']) && $this->nmgp_cmp_readonly['religion_id'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['religion_id']);
       $sStyleReadLab_religion_id = '';
       $sStyleReadInp_religion_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['religion_id']) && $this->nmgp_cmp_hidden['religion_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="religion_id" value="<?php echo $this->form_encode_input($religion_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_religion_id_line" id="hidden_field_data_religion_id" style="<?php echo $sStyleHidden_religion_id; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_religion_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_religion_id_label"><span id="id_label_religion_id"><?php echo $this->nm_new_label['religion_id']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["religion_id"]) &&  $this->nmgp_cmp_readonly["religion_id"] == "on") { 

 ?>
<input type="hidden" name="religion_id" value="<?php echo $this->form_encode_input($religion_id) . "\">" . $religion_id . ""; ?>
<?php } else { ?>
<span id="id_read_on_religion_id" class="sc-ui-readonly-religion_id css_religion_id_line" style="<?php echo $sStyleReadLab_religion_id; ?>"><?php echo $this->form_encode_input($this->religion_id); ?></span><span id="id_read_off_religion_id" style="white-space: nowrap;<?php echo $sStyleReadInp_religion_id; ?>">
 <input class="sc-js-input scFormObjectOdd css_religion_id_obj" style="" id="id_sc_field_religion_id" type=text name="religion_id" value="<?php echo $this->form_encode_input($religion_id) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_religion_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_religion_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['blood_group_id']))
    {
        $this->nm_new_label['blood_group_id'] = "Blood Group";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $blood_group_id = $this->blood_group_id;
   $sStyleHidden_blood_group_id = '';
   if (isset($this->nmgp_cmp_hidden['blood_group_id']) && $this->nmgp_cmp_hidden['blood_group_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['blood_group_id']);
       $sStyleHidden_blood_group_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_blood_group_id = 'display: none;';
   $sStyleReadInp_blood_group_id = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['blood_group_id']) && $this->nmgp_cmp_readonly['blood_group_id'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['blood_group_id']);
       $sStyleReadLab_blood_group_id = '';
       $sStyleReadInp_blood_group_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['blood_group_id']) && $this->nmgp_cmp_hidden['blood_group_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="blood_group_id" value="<?php echo $this->form_encode_input($blood_group_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_blood_group_id_line" id="hidden_field_data_blood_group_id" style="<?php echo $sStyleHidden_blood_group_id; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_blood_group_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_blood_group_id_label"><span id="id_label_blood_group_id"><?php echo $this->nm_new_label['blood_group_id']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["blood_group_id"]) &&  $this->nmgp_cmp_readonly["blood_group_id"] == "on") { 

 ?>
<input type="hidden" name="blood_group_id" value="<?php echo $this->form_encode_input($blood_group_id) . "\">" . $blood_group_id . ""; ?>
<?php } else { ?>
<span id="id_read_on_blood_group_id" class="sc-ui-readonly-blood_group_id css_blood_group_id_line" style="<?php echo $sStyleReadLab_blood_group_id; ?>"><?php echo $this->form_encode_input($this->blood_group_id); ?></span><span id="id_read_off_blood_group_id" style="white-space: nowrap;<?php echo $sStyleReadInp_blood_group_id; ?>">
 <input class="sc-js-input scFormObjectOdd css_blood_group_id_obj" style="" id="id_sc_field_blood_group_id" type=text name="blood_group_id" value="<?php echo $this->form_encode_input($blood_group_id) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_blood_group_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_blood_group_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php } ?>
   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
