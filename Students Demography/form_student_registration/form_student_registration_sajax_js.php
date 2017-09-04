
 <form name="form_ajax_redir_1" method="post" style="display: none">
  <input type="hidden" name="nmgp_parms">
  <input type="hidden" name="nmgp_outra_jan">
  <input type="hidden" name="script_case_session" value="<?php echo session_id() ?>">
 </form>
 <form name="form_ajax_redir_2" method="post" style="display: none">
  <input type="hidden" name="nmgp_parms">
  <input type="hidden" name="nmgp_url_saida">
  <input type="hidden" name="script_case_init">
  <input type="hidden" name="script_case_session" value="<?php echo session_id() ?>">
 </form>

 <SCRIPT>
<?php
sajax_show_javascript();
?>

  function scCenterElement(oElem)
  {
    var $oElem    = $(oElem),
        $oWindow  = $(this),
        iElemTop  = Math.round(($oWindow.height() - $oElem.height()) / 2),
        iElemLeft = Math.round(($oWindow.width()  - $oElem.width())  / 2);

    $oElem.offset({top: iElemTop, left: iElemLeft});
  } // scCenterElement

  function scAjaxHideAutocomp(sFrameId)
  {
    if (document.getElementById("id_ac_frame_" + sFrameId))
    {
      document.getElementById("id_ac_frame_" + sFrameId).style.display = "none";
    }
  } // scAjaxHideAutocomp

  function scAjaxShowAutocomp(sFrameId)
  {
    if (document.getElementById("id_ac_frame_" + sFrameId))
    {
      document.getElementById("id_ac_frame_" + sFrameId).style.display = "";
      document.getElementById("id_ac_" + sFrameId).focus();
    }
  } // scAjaxShowAutocomp

  function scAjaxHideDebug()
  {
    if (document.getElementById("id_debug_window"))
    {
      document.getElementById("id_debug_window").style.display = "none";
      document.getElementById("id_debug_text").innerHTML = "";
    }
  } // scAjaxHideDebug

  function scAjaxShowDebug(oTemp)
  {
    if (!document.getElementById("id_debug_window"))
    {
      return;
    }
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (oResp["htmOutput"] && "" != oResp["htmOutput"])
    {
      document.getElementById("id_debug_window").style.display = "";
      document.getElementById("id_debug_text").innerHTML = scAjaxFormatDebug(oResp["htmOutput"]) + document.getElementById("id_debug_text").innerHTML;
      scCenterElement(document.getElementById("id_debug_window"));
    }
  } // scAjaxShowDebug

  function scAjaxFormatDebug(sDebugMsg)
  {
    return "<table class=\"scFormMessageTable\" style=\"margin: 1px; width: 100%\"><tr><td class=\"scFormMessageMessage\">" + scAjaxSpecCharParser(sDebugMsg) + "</td></tr></table>";
  } // scAjaxFormatDebug

  function scAjaxHideErrorDisplay(sErrorId, bForce)
  {
    if (document.getElementById("id_error_display_" + sErrorId + "_frame"))
    {
      document.getElementById("id_error_display_" + sErrorId + "_frame").style.display = "none";
      document.getElementById("id_error_display_" + sErrorId + "_text").innerHTML = "";
      if (null == bForce)
      {
          bForce = true;
      }
      if (bForce)
      {
          var $oField = $('#id_sc_field_' + sErrorId);
          if (0 < $oField.length)
          {
              $oField.removeClass(sc_css_status);
          }
      }
    }
    if (document.getElementById("id_error_display_fixed"))
    {
      document.getElementById("id_error_display_fixed").style.display = "none";
    }
  } // scAjaxHideErrorDisplay

  function scAjaxShowErrorDisplay(sErrorId, sErrorMsg)
  {
    if (oResp && oResp['redirExitInfo'])
    {
      sErrorMsg += "<br /><input type=\"button\" onClick=\"window.location='" + oResp['redirExitInfo']['action'] + "'\" value=\"Ok\">";
    }
    sErrorMsg = scAjaxErrorSql(sErrorMsg);
    if (document.getElementById("id_error_display_" + sErrorId + "_frame"))
    {
      document.getElementById("id_error_display_" + sErrorId + "_frame").style.display = "";
      document.getElementById("id_error_display_" + sErrorId + "_text").innerHTML = sErrorMsg;
      if ("table" == sErrorId)
      {
        scCenterElement(document.getElementById("id_error_display_" + sErrorId + "_frame"));
      }
      var $oField = $('#id_sc_field_' + sErrorId);
      if (0 < $oField.length)
      {
        $oField.addClass(sc_css_status);
      }
    }
    if (ajax_error_list && ajax_error_list[sErrorId] && ajax_error_list[sErrorId]["timeout"] && 0 < ajax_error_list[sErrorId]["timeout"])
    {
      setTimeout("scAjaxHideErrorDisplay('" + sErrorId + "', false)", ajax_error_list[sErrorId]["timeout"] * 1000);
    }
    /*else if ("table" == sErrorId)
    {
      document.getElementById("id_error_display_" + sErrorId + "_frame").style.left = posDispLeft + "px";
      document.getElementById("id_error_display_" + sErrorId + "_frame").style.top = posDispTop + "px";
    }*/
  } // scAjaxShowErrorDisplay

  var iErrorSqlId = 1;

  function scAjaxErrorSql(sErrorMsg)
  {
    var iTmpPos = sErrorMsg.indexOf("{SC_DB_ERROR_INI}"),
        sTmpId;
    while (-1 < iTmpPos)
    {
      sTmpId    = "sc_id_error_sql_" + iErrorSqlId;
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "<br /><span style=\"text-decoration: underline\" onClick=\"$('#" + sTmpId + "').show(); scCenterElement(document.getElementById('" + sTmpId + "'))\">" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_MID}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "</span><table class=\"scFormErrorTable\" id=\"" + sTmpId + "\" style=\"display: none; position: absolute\"><tr><td>" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_CLS}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "<br /><br /><span onClick=\"$('#" + sTmpId + "').hide()\">" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_END}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "</span></td></tr></table>" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_INI}");
      iErrorSqlId++;
    }
    return sErrorMsg;
  } // scAjaxErrorSql

  function scAjaxHideMessage()
  {
    if (document.getElementById("id_message_display_frame"))
    {
      document.getElementById("id_message_display_frame").style.display = "none";
      document.getElementById("id_message_display_text").innerHTML = "";
    }
  } // scAjaxHideMessage

  function scAjaxShowMessage()
  {
    if (!oResp["msgDisplay"] || !oResp["msgDisplay"]["msgText"])
    {
      return;
    }
    _scAjaxShowMessage(scMsgDefTitle, oResp["msgDisplay"]["msgText"], false, sc_ajaxMsgTime, false, "Ok", 0, 0, 0, 0, "", "", "", false, true);
  } // scAjaxShowMessage

  var scMsgDefClose = "";

  function _scAjaxShowMessage(sTitle, sMessage, bModal, iTimeout, bButton, sButton, iTop, iLeft, iWidth, iHeight, sRedir, sTarget, sParam, bClose, bBodyIcon) {
    if ("" == sMessage) {
      if (bModal) {
        scMsgDefClick = "close_modal";
      }
      else {
        scMsgDefClick = "close";
      }
      _scAjaxMessageBtnClick();
      document.getElementById("id_message_display_title").innerHTML = scMsgDefTitle;
      document.getElementById("id_message_display_text").innerHTML = "";
      document.getElementById("id_message_display_buttone").value = scMsgDefButton;
      document.getElementById("id_message_display_buttond").style.display = "none";
    }
    else {
      document.getElementById("id_message_display_title").innerHTML = scAjaxSpecCharParser(sTitle);
      document.getElementById("id_message_display_text").innerHTML = scAjaxSpecCharParser(sMessage);
      document.getElementById("id_message_display_buttone").value = sButton;
      document.getElementById("id_message_display_buttond").style.display = bButton ? "" : "none";
      document.getElementById("id_message_display_buttond").style.display = bButton ? "" : "none";
      document.getElementById("id_message_display_title_line").style.display = (bClose || "" != sTitle) ? "" : "none";
      document.getElementById("id_message_display_close_icon").style.display = bClose ? "" : "none";
      if (document.getElementById("id_message_display_body_icon")) {
        document.getElementById("id_message_display_body_icon").style.display = bBodyIcon ? "" : "none";
      }
      $("#id_message_display_content").css('width', (0 < iWidth ? iWidth + 'px' : ''));
      $("#id_message_display_content").css('height', (0 < iHeight ? iHeight + 'px' : ''));
      if (bModal) {
        iWidth = iWidth || 250;
        iHeight = iHeight || 200;
        scMsgDefClose = "close_modal";
        tb_show('', '#TB_inline?height=' + (iHeight + 6) + '&width=' + (iWidth + 4) + '&inlineId=id_message_display_frame&modal=true', '');
        if (bButton) {
          if ("" != sRedir && "" != sTarget) {
            scMsgDefClick = "redir2_modal";
            document.form_ajax_redir_2.action = sRedir;
            document.form_ajax_redir_2.target = sTarget;
            document.form_ajax_redir_2.nmgp_parms.value = sParam;
            document.form_ajax_redir_2.script_case_init.value = scMsgDefScInit;
          }
          else if ("" != sRedir && "" == sTarget) {
            scMsgDefClick = "redir1";
            document.form_ajax_redir_1.action = sRedir;
            document.form_ajax_redir_1.nmgp_parms.value = sParam;
          }
          else {
            scMsgDefClick = "close_modal";
          }
        }
        else if (null != iTimeout && 0 < iTimeout) {
          scMsgDefClick = "close_modal";
          setTimeout("_scAjaxMessageBtnClick()", iTimeout * 1000);
        }
      }
      else
      {
        scMsgDefClose = "close";
        $("#id_message_display_frame").css('top', (0 < iTop ? iTop + 'px' : ''));
        $("#id_message_display_frame").css('left', (0 < iLeft ? iLeft + 'px' : ''));
        document.getElementById("id_message_display_frame").style.display = "";
        if (0 == iTop && 0 == iLeft) {
          scCenterElement(document.getElementById("id_message_display_frame"));
        }
        if (bButton) {
          if ("" != sRedir && "" != sTarget) {
            scMsgDefClick = "redir2";
            document.form_ajax_redir_2.action = sRedir;
            document.form_ajax_redir_2.target = sTarget;
            document.form_ajax_redir_2.nmgp_parms.value = sParam;
            document.form_ajax_redir_2.script_case_init.value = scMsgDefScInit;
          }
          else if ("" != sRedir && "" == sTarget) {
            scMsgDefClick = "redir1";
            document.form_ajax_redir_1.action = sRedir;
            document.form_ajax_redir_1.nmgp_parms.value = sParam;
          }
          else {
            scMsgDefClick = "close";
          }
        }
        else if (null != iTimeout && 0 < iTimeout) {
          scMsgDefClick = "close";
          setTimeout("_scAjaxMessageBtnClick()", iTimeout * 1000);
        }
      }
    }
  } // _scAjaxShowMessage

  function _scAjaxMessageBtnClose() {
    switch (scMsgDefClose) {
      case "close":
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "close_modal":
        tb_remove();
        break;
    }
  } // _scAjaxMessageBtnClick

  function _scAjaxMessageBtnClick() {
    switch (scMsgDefClick) {
      case "close":
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "close_modal":
        tb_remove();
        break;
      case "redir1":
        document.form_ajax_redir_1.submit();
        break;
      case "redir2":
        document.form_ajax_redir_2.submit();
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "redir2_modal":
        document.form_ajax_redir_2.submit();
        tb_remove();
        break;
    }
  } // _scAjaxMessageBtnClick

  function scAjaxHasError()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "ERROR" == oResp["result"];
  } // scAjaxHasError

  function scAjaxIsOk()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "OK" == oResp["result"] || "SET" == oResp["result"];
  } // scAjaxIsOk

  function scAjaxIsSet()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "SET" == oResp["result"];
  } // scAjaxIsSet

  function scAjaxCalendarReload()
  {
    if (oResp["calendarReload"] && "OK" == oResp["calendarReload"])
    {
      self.parent.calendar_reload();
      self.parent.tb_remove();
    }
  } // scCalendarReload

  function scAjaxUpdateErrors(sType)
  {
    ajax_error_geral = "";
    oFieldErrors     = {};
    if (oResp["errList"])
    {
      for (iFieldErrors = 0; iFieldErrors < oResp["errList"].length; iFieldErrors++)
      {
        sTestField = oResp["errList"][iFieldErrors]["fldName"];
        if ("geral_form_student_registration" == sTestField)
        {
          if (ajax_error_geral != '') { ajax_error_geral += '<br>';}
          ajax_error_geral += scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
        }
        else
        {
          if (scFocusFirstErrorField && '' == scFocusFirstErrorName)
          {
            scFocusFirstErrorName = sTestField;
          }
          if (oResp["errList"][iFieldErrors]["numLinha"])
          {
            sTestField += oResp["errList"][iFieldErrors]["numLinha"];
          }
          if (!oFieldErrors[sTestField])
          {
            oFieldErrors[sTestField] = new Array();
          }
          oFieldErrors[sTestField][oFieldErrors[sTestField].length] = scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
        }
      }
    }
    for (iUpdateErrors = 0; iUpdateErrors < ajax_field_list.length; iUpdateErrors++)
    {
      sTestField = ajax_field_list[iUpdateErrors];
      if (oFieldErrors[sTestField])
      {
        ajax_error_list[sTestField][sType] = oFieldErrors[sTestField];
      }
    }
  } // scAjaxUpdateErrors

  function scAjaxUpdateFieldErrors(sField, sType)
  {
    aFieldErrors = new Array();
    if (oResp["errList"])
    {
      iErrorPos  = 0;
      for (iFieldErrors = 0; iFieldErrors < oResp["errList"].length; iFieldErrors++)
      {
        sTestField = oResp["errList"][iFieldErrors]["fldName"];
        if (oResp["errList"][iFieldErrors]["numLinha"])
        {
          sTestField += oResp["errList"][iFieldErrors]["numLinha"];
        }
        if (sField == sTestField)
        {
          aFieldErrors[iErrorPos] = scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
          iErrorPos++;
        }
      }
    }
        if (ajax_error_list[sField])
        {
        ajax_error_list[sField][sType] = aFieldErrors;
        }
  } // scAjaxUpdateFieldErrors

  function scAjaxListErrors(bLabel)
  {
    bFirst        = false;
    sAppErrorText = "";
    if ("" != ajax_error_geral)
    {
      bFirst         = true;
      sAppErrorText += ajax_error_geral;
    }
    for (iFieldList = 0; iFieldList < ajax_field_list.length; iFieldList++)
    {
      sFieldError = scAjaxListFieldErrors(ajax_field_list[iFieldList], bLabel);
      if ("" != sFieldError)
      {
        if (bFirst)
        {
          bFirst         = false
          sAppErrorText += "<hr size=\"1\" width=\"80%\" />";
        }
        sAppErrorText += sFieldError;
      }
    }
    return sAppErrorText;
  } // scAjaxListErrors

  function scAjaxListFieldErrors(sField, bLabel)
  {
    sErrorText = "";
    for (iErrorType = 0; iErrorType < ajax_error_type.length; iErrorType++)
    {
      if (ajax_error_list[sField])
      {
        for (iListErrors = 0; iListErrors < ajax_error_list[sField][ajax_error_type[iErrorType]].length; iListErrors++)
        {
          if (bLabel)
          {
            sErrorText += ajax_error_list[sField]["label"] + ": ";
          }
          sErrorText += ajax_error_list[sField][ajax_error_type[iErrorType]][iListErrors] + "<br />";
        }
      }
    }
    return sErrorText;
  } // scAjaxListFieldErrors

  function scAjaxSetFields()
  {
    if (!oResp["fldList"])
    {
      return true;
    }
    for (iSetFields = 0; iSetFields < oResp["fldList"].length; iSetFields++)
    {
      var sFieldName = oResp["fldList"][iSetFields]["fldName"];
      var sFieldType = oResp["fldList"][iSetFields]["fldType"];
      if ("selectdd" == sFieldType)
      {
        var bSelectDD = true;
        sFieldType = "select";
      }
      else
      {
        var bSelectDD = false;
      }
      if (oResp["fldList"][iSetFields]["valList"])
      {
        var oFieldValues = oResp["fldList"][iSetFields]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (oResp["fldList"][iSetFields]["optList"])
      {
        var oFieldOptions = oResp["fldList"][iSetFields]["optList"];
      }
      else
      {
        var oFieldOptions = null;
      }
/*
      if ("_autocomp" == sFieldName.substr(sFieldName.length - 9) &&
          iSetFields > 0 &&
          sFieldName.substr(0, sFieldName.length - 9) == oResp["fldList"][iSetFields - 1]["fldName"] &&
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)) &&
          oFieldValues[0]['value'])
      {
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)).innerHTML = oFieldValues[0]['value'];
      }
*/
      if ("_autocomp" == sFieldName.substr(sFieldName.length - 9) &&
          iSetFields > 0 &&
          sFieldName.substr(0, sFieldName.length - 9) == oResp["fldList"][iSetFields - 1]["fldName"] &&
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)))
      {
          sLabel_auto_Comp = (oFieldValues[0]['value']) ? oFieldValues[0]['value'] : "";
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)).innerHTML = sLabel_auto_Comp;
      }


      if (oResp["fldList"][iSetFields]["colNum"])
      {
        var iColNum = oResp["fldList"][iSetFields]["colNum"];
      }
      else
      {
        var iColNum = 1;
      }
      if (oResp["fldList"][iSetFields]["row"])
      {
        var iRow = oResp["fldList"][iSetFields]["row"];
      }
      else
      {
        var iRow = 1;
      }
      if (oResp["fldList"][iSetFields]["htmComp"])
      {
        var sHtmComp = oResp["fldList"][iSetFields]["htmComp"];
        sHtmComp     = sHtmComp.replace(/__AD__/gi, '"');
        sHtmComp     = sHtmComp.replace(/__AS__/gi, "'");
      }
      else
      {
        var sHtmComp = null;
      }
      if (oResp["fldList"][iSetFields]["imgFile"])
      {
        var sImgFile = oResp["fldList"][iSetFields]["imgFile"];
      }
      else
      {
        var sImgFile = "";
      }
      if (oResp["fldList"][iSetFields]["imgOrig"])
      {
        var sImgOrig = oResp["fldList"][iSetFields]["imgOrig"];
      }
      else
      {
        var sImgOrig = "";
      }
      if (oResp["fldList"][iSetFields]["keepImg"])
      {
        var sKeepImg = oResp["fldList"][iSetFields]["keepImg"];
      }
      else
      {
        var sKeepImg = "N";
      }
      if (oResp["fldList"][iSetFields]["hideName"])
      {
        var sHideName = oResp["fldList"][iSetFields]["hideName"];
      }
      else
      {
        var sHideName = "N";
      }
      if (oResp["fldList"][iSetFields]["imgLink"])
      {
        var sImgLink = oResp["fldList"][iSetFields]["imgLink"];
      }
      else
      {
        var sImgLink = null;
      }
      if (oResp["fldList"][iSetFields]["docLink"])
      {
        var sDocLink = oResp["fldList"][iSetFields]["docLink"];
      }
      else
      {
        var sDocLink = "";
      }
      if (oResp["fldList"][iSetFields]["docIcon"])
      {
        var sDocIcon = oResp["fldList"][iSetFields]["docIcon"];
      }
      else
      {
        var sDocIcon = "";
      }
      if (oResp["fldList"][iSetFields]["optComp"])
      {
        var sOptComp = oResp["fldList"][iSetFields]["optComp"];
      }
      else
      {
        var sOptComp = "";
      }
      if (oResp["fldList"][iSetFields]["optClass"])
      {
        var sOptClass = oResp["fldList"][iSetFields]["optClass"];
      }
      else
      {
        var sOptClass = "";
      }
      if (oResp["fldList"][iSetFields]["optMulti"])
      {
        var sOptMulti = oResp["fldList"][iSetFields]["optMulti"];
      }
      else
      {
        var sOptMulti = "";
      }
      if (oResp["fldList"][iSetFields]["imgHtml"])
      {
        var sImgHtml = oResp["fldList"][iSetFields]["imgHtml"];
      }
      else
      {
        var sImgHtml = "";
      }
      if (oResp["fldList"][iSetFields]["mulHtml"])
      {
        var sMULHtml = oResp["fldList"][iSetFields]["mulHtml"];
      }
      else
      {
        var sMULHtml = "";
      }
      if (oResp["fldList"][iSetFields]["updInnerHtml"])
      {
        var sInnerHtml = scAjaxSpecCharParser(oResp["fldList"][iSetFields]["updInnerHtml"]);
      }
      else
      {
        var sInnerHtml = null;
      }
      if (oResp["fldList"][iSetFields]["lookupCons"])
      {
        var sLookupCons = scAjaxSpecCharParser(oResp["fldList"][iSetFields]["lookupCons"]);
      }
      else
      {
        var sLookupCons = "";
      }
      if (oResp["clearUpload"])
      {
        var sClearUpload = scAjaxSpecCharParser(oResp["clearUpload"]);
      }
      else
      {
        var sClearUpload = "N";
      }
      if ("checkbox" == sFieldType)
      {
        scAjaxSetFieldCheckbox(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sInnerHtml, sOptComp, sOptClass, sOptMulti);
      }
      else if ("duplosel" == sFieldType)
      {
        scAjaxSetFieldDuplosel(sFieldName, oFieldValues, oFieldOptions);
      }
      else if ("imagem" == sFieldType)
      {
        scAjaxSetFieldImage(sFieldName, oFieldValues, sImgFile, sImgOrig, sImgLink, sKeepImg, sHideName);
      }
      else if ("documento" == sFieldType)
      {
        scAjaxSetFieldDocument(sFieldName, oFieldValues, sDocLink, sDocIcon, sClearUpload);
      }
      else if ("label" == sFieldType)
      {
        scAjaxSetFieldLabel(sFieldName, oFieldValues, oFieldOptions, sLookupCons);
      }
      else if ("radio" == sFieldType)
      {
        scAjaxSetFieldRadio(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp);
      }
      else if ("select" == sFieldType)
      {
        scAjaxSetFieldSelect(sFieldName, oFieldValues, oFieldOptions, bSelectDD, iRow);
      }
      else if ("text" == sFieldType)
      {
        scAjaxSetFieldText(sFieldName, oFieldValues, sLookupCons);
      }
      else if ("editor_html" == sFieldType)
      {
        scAjaxSetFieldEditorHtml(sFieldName, oFieldValues);
      }
      else if ("imagehtml" == sFieldType)
      {
        scAjaxSetFieldImageHtml(sFieldName, oFieldValues, sImgHtml);
      }
      else if ("innerhtml" == sFieldType)
      {
        scAjaxSetFieldInnerHtml(sFieldName, oFieldValues);
      }
      else if ("multi_upload" == sFieldType)
      {
        scAjaxSetFieldMultiUpload(sFieldName, sMULHtml);
      }
      scAjaxUpdateHeaderFooter(sFieldName, oFieldValues);
    }
  } // scAjaxSetFields

  function scAjaxUpdateHeaderFooter(sFieldName, oFieldValues)
  {
    if (self.updateHeaderFooter)
    {
      if (null == oFieldValues)
      {
        sNewValue = '';
      }
      else if (oFieldValues[0]["label"])
      {
        sNewValue = oFieldValues[0]["label"];
      }
      else
      {
        sNewValue = oFieldValues[0]["value"];
      }
      updateHeaderFooter(sFieldName, scAjaxSpecCharParser(sNewValue));
    }
  } // scAjaxUpdateHeaderFooter

  function scAjaxSetFieldText(sFieldName, oFieldValues, sLookupCons)
  {
    if (document.F1.elements[sFieldName])
    {
        var Temp_text = scAjaxReturnBreakLine(scAjaxSpecCharParser(scAjaxProtectBreakLine(oFieldValues[0]['value'])));
        eval ("document.F1." + sFieldName + ".value = Temp_text");
    }
    if (document.getElementById("id_lookup_" + sFieldName))
    {
      document.getElementById("id_lookup_" + sFieldName).innerHTML = sLookupCons;
    }
    if (oFieldValues[0]['label'])
    {
      scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues);
    }
    else
    {
      oFieldValues[0]['value'] = scAjaxBreakLine(oFieldValues[0]['value']);
      scAjaxSetReadonlyValue(sFieldName, oFieldValues[0]['value']);
    }
  } // scAjaxSetFieldText

  function scAjaxSetFieldSelect(sFieldName, oFieldValues, oFieldOptions, bSelectDD, iRow)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    if (bSelectDD)
    {
        $("#id_sc_field_" + sFieldName).dropdownchecklist("destroy");
    }
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      scAjaxSetFieldText(sFieldNameHtml, oFieldValues);
      return;
    }

    if (null != oFieldOptions)
    {
      $("#id_sc_field_" + sFieldName).children().remove()
      if ("<select" != oFieldOptions.substr(0, 7))
      {
        var $oField = $("#id_sc_field_" + sFieldName);
        if (0 < $oField.length)
        {
          $oField.html(oFieldOptions);
        }
        else
        {
          document.getElementById("idAjaxSelect_" + sFieldName).innerHTML = oFieldOptions;
        }
      }
      else
      {
        document.getElementById("idAjaxSelect_" + sFieldName).innerHTML = oFieldOptions;
      }
    }
    var aValues = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    var oFormField = $("#id_sc_field_" + sFieldName);
    for (iFieldSelect = 0; iFieldSelect < oFormField[0].length; iFieldSelect++)
    {
      if (scAjaxInArray(oFormField[0].options[iFieldSelect].value, aValues))
      {
        oFormField[0].options[iFieldSelect].selected = true;
      }
      else
      {
        oFormField[0].options[iFieldSelect].selected = false;
      }
    }
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
    if (bSelectDD)
    {
        scJQDDCheckBoxAdd(iRow);
    }
  } // scAjaxSetFieldSelect

  function scAjaxSetFieldDuplosel(sFieldName, oFieldValues, oFieldOptions)
  {
    var sFieldNameOrig = sFieldName + "_orig";
    var sFieldNameDest = sFieldName + "_dest";
    var oFormFieldOrig = document.F1.elements[sFieldNameOrig];
    var oFormFieldDest = document.F1.elements[sFieldNameDest];

    if (null != oFieldOptions)
    {
      scAjaxClearSelect(sFieldNameOrig);
      for (iFieldSelect = 0; iFieldSelect < oFieldOptions.length; iFieldSelect++)
      {
        oFormFieldOrig.options[iFieldSelect] = new Option(scAjaxSpecCharParser(oFieldOptions[iFieldSelect]["label"]), scAjaxSpecCharParser(oFieldOptions[iFieldSelect]["value"]));
      }
    }
    while (oFormFieldDest.length > 0)
    {
      oFormFieldDest.options[0] = null;
    }
    var aValues = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        sNewOptionLabel = oFieldValues[iFieldSelect]["label"] ? scAjaxSpecCharParser(oFieldValues[iFieldSelect]["label"]) : scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
        sNewOptionValue = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
        if (sNewOptionValue.substr(0, 8) == "@NMorder")
        {
           sNewOptionValue                      = sNewOptionValue.substr(8);
           oFormFieldDest.options[iFieldSelect] = new Option(scAjaxSpecCharParser(sNewOptionLabel), sNewOptionValue);
           sNewOptionValue                      = sNewOptionValue.substr(1);
           aValues[iFieldSelect]                = sNewOptionValue;
        }
        else
        {
           aValues[iFieldSelect]                = sNewOptionValue;
           oFormFieldDest.options[iFieldSelect] = new Option(scAjaxSpecCharParser(sNewOptionLabel), sNewOptionValue);
        }
      }
    }
    for (iFieldSelect = 0; iFieldSelect < oFormFieldOrig.length; iFieldSelect++)
    {
      oFormFieldOrig.options[iFieldSelect].selected = false;
      if (scAjaxInArray(oFormFieldOrig.options[iFieldSelect].value, aValues))
      {
        oFormFieldOrig.options[iFieldSelect].disabled    = true;
        oFormFieldOrig.options[iFieldSelect].style.color = "#A0A0A0";
      }
      else
      {
        oFormFieldOrig.options[iFieldSelect].disabled = false;
      }
    }
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldDuplosel

  function scAjaxSetFieldCheckbox(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sInnerHtml, sOptComp, sOptClass, sOptMulti)
  {
    if (document.getElementById("idAjaxCheckbox_" + sFieldName) && null != sInnerHtml)
    {
      document.getElementById("idAjaxCheckbox_" + sFieldName).innerHTML = sInnerHtml;
      return;
    }
    if (null != oFieldOptions)
    {
        scAjaxClearCheckbox(sFieldName);
    }
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      scAjaxSetFieldText(sFieldName, oFieldValues);
      return;
    }
    if (null != oFieldOptions && "" != oFieldOptions)
    {
/*      scAjaxClearCheckbox(sFieldName); */
      scAjaxRecreateOptions("Checkbox", "checkbox", sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, sOptClass, sOptMulti);
    }
    else
    {
      scAjaxSetCheckboxOptions(sFieldName, oFieldValues);
    }
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldCheckbox

  function scAjaxSetFieldRadio(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp)
  {
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      scAjaxSetFieldText(sFieldName, oFieldValues);
      return;
    }
    if (null != oFieldOptions)
    {
        scAjaxClearRadio(sFieldName);
    }
    if (null != oFieldOptions && "" != oFieldOptions)
    {
/*      scAjaxClearRadio(sFieldName); */
      scAjaxRecreateOptions("Radio", "radio", sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, "", "");
    }
    else
    {
      scAjaxSetRadioOptions(sFieldName, oFieldValues);
    }
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldRadio

  function scAjaxSetFieldLabel(sFieldName, oFieldValues, oFieldOptions, sLookupCons)
  {
    sFieldValue = oFieldValues[0]["value"];
    sFieldLabel = oFieldValues[0]["value"];
    sFieldLabel = scAjaxBreakLine(sFieldLabel);
    if (null != oFieldOptions)
    {
      for (iRecreate = 0; iRecreate < oFieldOptions.length; iRecreate++)
      {
        sOptText  = scAjaxSpecCharParser(oFieldOptions[iRecreate]["value"]);
        sOptValue = scAjaxSpecCharParser(oFieldOptions[iRecreate]["label"]);
        if (sFieldValue == sOptText)
        {
          sFieldLabel = sOptValue;
        }
      }
    }
    if (document.getElementById("id_ajax_label_" + sFieldName))
    {
      document.getElementById("id_ajax_label_" + sFieldName).innerHTML = scAjaxSpecCharParser(sFieldLabel);
    }
    if (document.F1.elements[sFieldName])
    {
//      document.F1.elements[sFieldName].value = scAjaxSpecCharParser(sFieldValue);
        Temp_text = scAjaxProtectBreakLine(sFieldValue);
        Temp_text = scAjaxSpecCharParser(Temp_text);
        document.F1.elements[sFieldName].value = scAjaxReturnBreakLine(Temp_text);

    }
    if (document.getElementById("id_lookup_" + sFieldName))
    {
      document.getElementById("id_lookup_" + sFieldName).innerHTML = sLookupCons;
    }
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(sFieldLabel));
  } // scAjaxSetFieldLabel

  function scAjaxSetFieldImage(sFieldName, oFieldValues, sImgFile, sImgOrig, sImgLink, sKeepImg, sHideName)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    if ("N" == sKeepImg && document.getElementById("id_ajax_img_"  + sFieldName))
    {
      document.getElementById("id_ajax_img_"  + sFieldName).src           = scAjaxSpecCharParser(sImgFile);
      document.getElementById("id_ajax_img_"  + sFieldName).style.display = ("" == sImgFile) ? "none" : "";
    }
    if (document.getElementById("id_ajax_link_" + sFieldName) && null != sImgLink)
    {
      document.getElementById("id_ajax_link_" + sFieldName).innerHTML = oFieldValues[0]["value"];
      document.getElementById("id_ajax_link_" + sFieldName).href      = scAjaxSpecCharParser(sImgLink);
    }
    if (document.getElementById("chk_ajax_img_" + sFieldName))
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = ("" == oFieldValues[0]["value"]) ? "none" : "";
    }
    if ("" == oFieldValues[0]["value"] && document.F1.elements[sFieldName + "_limpa"])
    {
      document.F1.elements[sFieldName + "_limpa"].checked = false;
    }
    if ("N" == sKeepImg && document.getElementById("txt_ajax_img_" + sFieldName))
    {
      document.getElementById("txt_ajax_img_" + sFieldName).innerHTML     = oFieldValues[0]["value"];
      document.getElementById("txt_ajax_img_" + sFieldName).style.display = ("" == oFieldValues[0]["value"] || "S" == sHideName) ? "none" : "";
    }
    if ("" != sImgOrig)
    {
      eval("if (var_ajax_img_" + sFieldName + ") var_ajax_img_" + sFieldName + " = '" + sImgOrig + "';");
      if (document.F1.elements["temp_out1_" + sFieldName])
      {
        document.F1.elements["temp_out_" + sFieldName].value = sImgFile;
        document.F1.elements["temp_out1_" + sFieldName].value = sImgOrig;
      }
      else if (document.F1.elements["temp_out_" + sFieldName])
      {
        document.F1.elements["temp_out_" + sFieldName].value = sImgOrig;
      }
    }
    if ("" != oFieldValues[0]["value"])
    {
      if (document.F1.elements[sFieldName + "_salva"]) document.F1.elements[sFieldName + "_salva"].value = oFieldValues[0]["value"];
    }
    else if (oResp && oResp["ajaxRequest"] && "navigate_form" == oResp["ajaxRequest"])
    {
      if (document.F1.elements[sFieldName + "_salva"]) document.F1.elements[sFieldName + "_salva"].value = "";
    }
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
  } // scAjaxSetFieldImage

  function scAjaxSetFieldDocument(sFieldName, oFieldValues, sDocLink, sDocIcon, sClearUpload)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    document.getElementById("id_ajax_doc_"  + sFieldName).innerHTML = scAjaxSpecCharParser(sDocLink);
    if (document.getElementById("id_ajax_doc_icon_"  + sFieldName))
    {
      document.getElementById("id_ajax_doc_icon_"  + sFieldName).src = scAjaxSpecCharParser(sDocIcon);
    }
    if ("" == oFieldValues[0]["value"])
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = "none";
      document.getElementById("id_ajax_doc_" + sFieldName).style.display = "none";
    }
    else
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = "";
      document.getElementById("id_ajax_doc_" + sFieldName).style.display = "";
    }
    if ("" == oFieldValues[0]["value"] && document.F1.elements[sFieldName + "_limpa"])
    {
      document.F1.elements[sFieldName + "_limpa"].checked = false;
    }
    if ("S" == sClearUpload && document.F1.elements[sFieldName + "_ul_name"])
    {
      document.F1.elements[sFieldName + "_ul_name"].value = "";
    }
    if ("" != sDocLink)
    {
      scAjaxSetReadonlyValue(sFieldName, sDocLink);
    }
    else
    {
      scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
    }
  } // scAjaxSetFieldDocument

  function scAjaxSetFieldInnerHtml(sFieldName, oFieldValues)
  {
    if (document.getElementById(sFieldName))
    {
      document.getElementById(sFieldName).innerHTML = scAjaxSpecCharParser(oFieldValues[0]["value"]);
    }
  } // scAjaxSetFieldInnerHtml

  function scAjaxSetFieldMultiUpload(sFieldName, sMULHtml)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    $("#id_sc_loaded_" + sFieldName).html(scAjaxSpecCharParser(sMULHtml));
  } // scAjaxSetFieldMultiUpload

  function scAjaxExecFieldEditorHtml(strOption, bolUI, oField)
  {
	  	if(tinymce.majorVersion > 3)
		{
			if(strOption == 'mceAddControl')
			{
				tinymce.execCommand('mceAddEditor', bolUI, oField);
			}else
			if(strOption == 'mceRemoveControl')
			{
				tinymce.execCommand('mceRemoveEditor', bolUI, oField);
			}
		}
		else
		{
			tinyMCE.execCommand(strOption, bolUI, oField);
		}
  }

  function scAjaxSetFieldEditorHtml(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName])
    {
      return;
    }
	if(tinymce.majorVersion > 3)
	{
		var oFormField = tinyMCE.get(sFieldName);
	}
	else
	{
		var oFormField = tinyMCE.getInstanceById(sFieldName);
	}
    oFormField.setContent(scAjaxSpecCharParser(oFieldValues[0]["value"]));
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
  } // scAjaxSetFieldEditorHtml

  function scAjaxSetFieldImageHtml(sFieldName, oFieldValues, sImgHtml)
  {
    if (document.getElementById("id_imghtml_" + sFieldName))
    {
      document.getElementById("id_imghtml_" + sFieldName).innerHTML = scAjaxSpecCharParser(sImgHtml);
    }
  } // scAjaxSetFieldEditorHtml

  function scAjaxSetCheckboxOptions(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"] && !document.F1.elements[sFieldName + "[0]"])
    {
      return;
    }
    var aValues    = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    if (document.F1.elements[sFieldName + "[]"])
    {
      var oFormField = document.F1.elements[sFieldName + "[]"];
      if (oFormField.length)
      {
        for (iFieldCheckbox = 0; iFieldCheckbox < oFormField.length; iFieldCheckbox++)
        {
          if (scAjaxInArray(oFormField[iFieldCheckbox].value, aValues))
          {
            oFormField[iFieldCheckbox].checked = true;
          }
          else
          {
            oFormField[iFieldCheckbox].checked = false;
          }
        }
      }
      else
      {
        if (scAjaxInArray(oFormField.value, aValues))
        {
          oFormField.checked = true;
        }
        else
        {
          oFormField.checked = false;
        }
      }
    }
    else if (document.F1.elements[sFieldName + "[0]"])
    {
      for (iFieldCheckbox = 0; iFieldCheckbox < document.F1.elements.length; iFieldCheckbox++)
      {
        oFormElement = document.F1.elements[iFieldCheckbox];
        if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1) && scAjaxInArray(oFormElement.value, aValues))
        {
          oFormElement.checked = true;
        }
        else if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1))
        {
          oFormElement.checked = false;
        }
      }
    }
    else
    {
      oFormElement = document.F1.elements[sFieldName];
      if (scAjaxInArray(oFormElement.value, aValues))
      {
        oFormElement.checked = true;
      }
      else
      {
        oFormElement.checked = false;
      }
    }
  } // scAjaxSetCheckboxOptions

  function scAjaxSetRadioOptions(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName])
    {
      return;
    }
    var oFormField = document.F1.elements[sFieldName];
    var aValues    = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    for (iFieldRadio = 0; iFieldRadio < oFormField.length; iFieldRadio++)
    {
      if (scAjaxInArray(oFormField[iFieldRadio].value, aValues))
      {
        oFormField[iFieldRadio].checked = true;
      }
    }
  } // scAjaxSetRadioOptions

  function scAjaxSetReadonlyValue(sFieldName, sFieldValue)
  {
    if (document.getElementById("id_read_on_" + sFieldName))
    {
      document.getElementById("id_read_on_" + sFieldName).innerHTML = sFieldValue;
    }
  } // scAjaxSetReadonlyValue

  function scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, sDelim)
  {
    if (null == oFieldValues)
    {
      return;
    }
    if (null == sDelim)
    {
      sDelim = " ";
    }
    sReadLabel = "";
    for (iReadArray = 0; iReadArray < oFieldValues.length; iReadArray++)
    {
      if (oFieldValues[iReadArray]["label"])
      {
        if ("" != sReadLabel)
        {
          sReadLabel += sDelim;
        }
        sReadLabel += oFieldValues[iReadArray]["label"];
      }
      else if (oFieldValues[iReadArray]["value"])
      {
        if ("" != sReadLabel)
        {
          sReadLabel += sDelim;
        }
        sReadLabel += oFieldValues[iReadArray]["value"];
      }
    }
    scAjaxSetReadonlyValue(sFieldName, sReadLabel);
  } // scAjaxSetReadonlyArrayValue

  function scAjaxGetFieldValue(sFieldGet)
  {
    sValue = "";
    if (!oResp["fldList"])
    {
      return sValue;
    }
    for (iFieldValue = 0; iFieldValue < oResp["fldList"].length; iFieldValue++)
    {
      var sFieldName  = oResp["fldList"][iFieldValue]["fldName"];
      if (oResp["fldList"][iFieldValue]["valList"])
      {
        var oFieldValues = oResp["fldList"][iFieldValue]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (sFieldGet == sFieldName && null != oFieldValues)
      {
        if (1 == oFieldValues.length)
        {
          sValue = scAjaxSpecCharParser(oFieldValues[0]["value"]);
        }
        else
        {
          sValue = new Array();
          for (jFieldValue = 0; jFieldValue < oFieldValues.length; jFieldValue++)
          {
            sValue[jFieldValue] = scAjaxSpecCharParser(oFieldValues[jFieldValue]["value"]);
          }
        }
      }
    }
    return sValue;
  } // scAjaxGetFieldValue

  function scAjaxGetKeyValue(sFieldGet)
  {
    sValue = "";
    if (!oResp["fldList"])
    {
      return sValue;
    }
    for (iKeyValue = 0; iKeyValue < oResp["fldList"].length; iKeyValue++)
    {
      var sFieldName = oResp["fldList"][iKeyValue]["fldName"];
      if (sFieldGet == sFieldName)
      {
        if (oResp["fldList"][iKeyValue]["keyVal"])
        {
          return scAjaxSpecCharParser(oResp["fldList"][iKeyValue]["keyVal"]);
        }
        else
        {
          return scAjaxGetFieldValue(sFieldGet);
        }
      }
    }
    return sValue;
  } // scAjaxGetKeyValue

  function scAjaxGetLineNumber()
  {
    sLineNumber = "";
    if (oResp["errList"])
    {
      for (iLineNumber = 0; iLineNumber < oResp["errList"].length; iLineNumber++)
      {
        if (oResp["errList"][iLineNumber]["numLinha"])
        {
          sLineNumber = oResp["errList"][iLineNumber]["numLinha"];
        }
      }
      return sLineNumber;
    }
    if (oResp["fldList"])
    {
      return oResp["fldList"][0]["numLinha"];
    }
    if (oResp["msgDisplay"])
    {
      return oResp["msgDisplay"]["numLinha"];
    }
    return sLineNumber;
  } // scAjaxGetLineNumber

  function scAjaxFieldExists(sFieldGet)
  {
    bExists = false;
    if (!oResp["fldList"])
    {
      return bExists;
    }
    for (iFieldValue = 0; iFieldValue < oResp["fldList"].length; iFieldValue++)
    {
      var sFieldName  = oResp["fldList"][iFieldValue]["fldName"];
      if (oResp["fldList"][iFieldValue]["valList"])
      {
        var oFieldValues = oResp["fldList"][iFieldValue]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (sFieldGet == sFieldName && null != oFieldValues)
      {
        bExists = true;
      }
    }
    return bExists;
  } // scAjaxFieldExists

  function scAjaxGetFieldText(sFieldName)
  {
    $oHidden = $("input[name=" + sFieldName + "]");
    if ($oHidden.length)
    {
      for (var i = 0; i < $oHidden.length; i++)
      {
        if ("hidden" == $oHidden[i].type && $oHidden[i].form && $oHidden[i].form.name && "F1" == $oHidden[i].form.name)
        {
          return scAjaxSpecCharProtect($oHidden[i].value);//.replace(/[+]/g, "__NM_PLUS__");
        }
      }
    }
    $oField = $("#id_sc_field_" + sFieldName);
    if ($oField.length && "select" != $oField[0].type.substr(0, 6))
    {
      return scAjaxSpecCharProtect($oField.val());//.replace(/[+]/g, "__NM_PLUS__");
    }
    else if (document.F1.elements[sFieldName])
    {
      return scAjaxSpecCharProtect(document.F1.elements[sFieldName].value);//.replace(/[+]/g, "__NM_PLUS__");
    }
    else
    {
      return '';
    }
  } // scAjaxGetFieldText

  function scAjaxGetFieldHidden(sFieldName)
  {
    for( i= 0; i < document.F1.elements.length; i++)
    {
       if (document.F1.elements[i].name == sFieldName)
       {
          return scAjaxSpecCharProtect(document.F1.elements[i].value);//.replace(/[+]/g, "__NM_PLUS__");
       }
    }
//    return document.F1.elements[sFieldName].value.replace(/[+]/g, "__NM_PLUS__");
  } // scAjaxGetFieldHidden

  function scAjaxGetFieldSelect(sFieldName)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return "";
    }
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      return scAjaxGetFieldHidden(sFieldNameHtml);
    }
    var oFormField = document.F1.elements[sFieldNameHtml];
    var iSelected  = oFormField.selectedIndex;
    if (-1 < iSelected)
    {
      return scAjaxSpecCharProtect(oFormField.options[iSelected].value);//.replace(/[+]/g, "__NM_PLUS__");
    }
    else
    {
      return "";
    }
  } // scAjaxGetFieldSelect

  function scAjaxGetFieldSelectMult(sFieldName, sFieldDelim)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      return scAjaxGetFieldHidden(sFieldNameHtml);
    }
    var oFormField = document.F1.elements[sFieldNameHtml];
    var sFieldVals = "";
    for (iFieldSelect = 0; iFieldSelect < oFormField.length; iFieldSelect++)
    {
      if (oFormField[iFieldSelect].selected)
      {
        if ("" != sFieldVals)
        {
          sFieldVals += sFieldDelim;
        }
        sFieldVals += scAjaxSpecCharProtect(oFormField[iFieldSelect].value);//.replace(/[+]/g, "__NM_PLUS__");
      }
    }
    return sFieldVals;
  } // scAjaxGetFieldSelectMult

  function scAjaxGetFieldCheckbox(sFieldName, sDelim)
  {
    var aValues = new Array();
    var sValue  = "";
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"] && !document.F1.elements[sFieldName + "[0]"])
    {
      return sValue;
    }
    if (document.F1.elements[sFieldName + "[]"] && "hidden" == document.F1.elements[sFieldName + "[]"].type)
    {
      return scAjaxGetFieldHidden(sFieldName + "[]");
    }
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    if (document.F1.elements[sFieldName + "[]"])
    {
      var oFormField = document.F1.elements[sFieldName + "[]"];
      if (oFormField.length)
      {
        for (iFieldCheck = 0; iFieldCheck < oFormField.length; iFieldCheck++)
        {
          if (oFormField[iFieldCheck].checked)
          {
            aValues[aValues.length] = oFormField[iFieldCheck].value;
          }
        }
      }
      else
      {
        if (oFormField.checked)
        {
          aValues[aValues.length] = oFormField.value;
        }
      }
    }
    else
    {
      for (iFieldCheck = 0; iFieldCheck < document.F1.elements.length; iFieldCheck++)
      {
        oFormElement = document.F1.elements[iFieldCheck];
        if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1) && oFormElement.checked)
        {
          aValues[aValues.length] = oFormElement.value;
        }
        else if (sFieldName == oFormElement.name && oFormElement.checked)
        {
          aValues[aValues.length] = oFormElement.value;
        }
      }
    }
    for (iFieldCheck = 0; iFieldCheck < aValues.length; iFieldCheck++)
    {
      sValue += scAjaxSpecCharProtect(aValues[iFieldCheck]);//.replace(/[+]/g, "__NM_PLUS__");
      if (iFieldCheck + 1 != aValues.length)
      {
        sValue += sDelim;
      }
    }
    return sValue;
  } // scAjaxGetFieldCheckbox

  function scAjaxGetFieldRadio(sFieldName)
  {
    if ("hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    var sValue = "";
    if (!document.F1.elements[sFieldName])
    {
      return sValue;
    }
    var oFormField = document.F1.elements[sFieldName];
    if (!oFormField.length)
    {
        var sc_cmp_radio = eval("document.F1." + sFieldName);
        if (sc_cmp_radio.checked)
        {
           sValue = scAjaxSpecCharProtect(sc_cmp_radio.value);//.replace(/[+]/g, "__NM_PLUS__");
        }
    }
    else
    {
      for (iFieldRadio = 0; iFieldRadio < oFormField.length; iFieldRadio++)
      {
        if (oFormField[iFieldRadio].checked)
        {
          sValue = scAjaxSpecCharProtect(oFormField[iFieldRadio].value);//.replace(/[+]/g, "__NM_PLUS__");
        }
      }
    }
    return sValue;
  } // scAjaxGetFieldRadio

  function scAjaxGetFieldEditorHtml(sFieldName)
  {
    if ("hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    var sValue = "";
    if (!document.F1.elements[sFieldName])
    {
      return sValue;
    }

        if(tinymce.majorVersion > 3)
        {
			var oFormField = tinyMCE.get(sFieldName);
        }
        else
        {
			var oFormField = tinyMCE.getInstanceById(sFieldName);
        }
    return scAjaxSpecCharParser(scAjaxSpecCharProtect(oFormField.getContent()));//.replace(/[+]/g, "__NM_PLUS__"));
  } // scAjaxGetFieldEditorHtml

  function scAjaxDoNothing(e)
  {
  } // scAjaxDoNothing

  function scAjaxInArray(mVal, aList)
  {
    for (iInArray = 0; iInArray < aList.length; iInArray++)
    {
      if (aList[iInArray] == mVal)
      {
        return true;
      }
    }
    return false;
  } // scAjaxInArray

  function scAjaxSpecCharParser(sParseString)
  {
    if (null == sParseString) {
      return "";
    }
    var ta = document.createElement("textarea");
    ta.innerHTML = sParseString.replace(/</g, "&lt;").replace(/>/g, "&gt;");
    return ta.value;
  } // scAjaxSpecCharParser

  function scAjaxSpecCharProtect(sOriginal)
  {
        var sProtected;
        sProtected = sOriginal.replace(/[+]/g, "__NM_PLUS__");
        sProtected = sProtected.replace(/[%]/g, "__NM_PERC__");
        return sProtected;
  } // scAjaxSpecCharProtect

  function scAjaxRecreateOptions(sFieldType, sHtmlType, sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, sOptClass, sOptMulti)
  {
    var sSuffix  = ("checkbox" == sHtmlType) ? "[]" : "";
    var sDivName = "idAjax" + sFieldType + "_" + sFieldName;
    var sDivText = "";
    var iCntLine = 0;
    var aValues  = new Array();
    var sClass;
    if (null != oFieldValues)
    {
      for (iRecreate = 0; iRecreate < oFieldValues.length; iRecreate++)
      {
        aValues[iRecreate] = scAjaxSpecCharParser(oFieldValues[iRecreate]["value"]);
      }
    }
    sDivText += "<table border=0>";
    for (iRecreate = 0; iRecreate < oFieldOptions.length; iRecreate++)
    {
        sOptText  = scAjaxSpecCharParser(oFieldOptions[iRecreate]["label"]);
        sOptValue = scAjaxSpecCharParser(oFieldOptions[iRecreate]["value"]);
        if (0 == iCntLine)
        {
            sDivText += "<tr>";
        }
        iCntLine++;
        if ("" != sOptClass)
        {
            sClass = " class=\"" + sOptClass;
            if ("" != sOptMulti)
            {
                sClass += " " + sOptClass + sOptMulti;
            }
            sClass += "\"";
        }
        if (sHtmComp == null)
        {
            sHtmComp = "";
        }
        sChecked  = (scAjaxInArray(sOptValue, aValues)) ? " checked" : "";
        sDivText += "<td class=\"scFormDataFontOdd\">";
        sDivText += "<input type=\"" + sHtmlType + "\" name=\"" + sFieldName + sSuffix + "\" value=\"" + sOptValue + "\"" + sChecked + " " + sHtmComp + " " + sOptComp + sClass + ">";
        sDivText += sOptText;
        sDivText += "</td>";
        if (iColNum == iCntLine)
        {
            sDivText += "</tr>";
            iCntLine  = 0;
        }
    }
    sDivText += "</table>";
    document.getElementById(sDivName).innerHTML = sDivText;
  } // scAjaxRecreateOptions

  function scAjaxProcOn(bForce)
  {
    if (null == bForce)
    {
      bForce = false;
    }
    if (document.getElementById("id_div_process"))
    {
      if ($ && $.blockUI && !bForce)
      {
        $.blockUI({
          message: $("#id_div_process_block"),
          overlayCSS: { backgroundColor: sc_ajaxBg },
          css: {
            borderColor: sc_ajaxBordC,
            borderStyle: sc_ajaxBordS,
            borderWidth: sc_ajaxBordW
          }
        });
      }
      else
      {
        document.getElementById("id_div_process").style.display = "";
        document.getElementById("id_fatal_error").style.display = "none";
        if (null != scCenterElement)
        {
          scCenterElement(document.getElementById("id_div_process"));
        }
      }
    }
  } // scAjaxProcOn

  function scAjaxProcOff(bForce)
  {
    if (null == bForce)
    {
      bForce = false;
    }
    if (document.getElementById("id_div_process"))
    {
      if ($ && $.unblockUI && !bForce)
      {
        $.unblockUI();
      }
      else
      {
        document.getElementById("id_div_process").style.display = "none";
      }
    }
  } // scAjaxProcOff

  function scAjaxSetMaster()
  {
    if (!oResp["masterValue"])
    {
      return;
    }
	if (scMasterDetailParentIframe && "" != scMasterDetailParentIframe)
	{
      var dbParentFrame = $(parent.document).find("[name='" + scMasterDetailParentIframe + "']");
	  if (!dbParentFrame || !dbParentFrame[0] || !dbParentFrame[0].contentWindow.scAjaxDetailValue)
	  {
		return;
	  }
      for (iMaster = 0; iMaster < oResp["masterValue"].length; iMaster++)
      {
        dbParentFrame[0].contentWindow.scAjaxDetailValue(oResp["masterValue"][iMaster]["index"], oResp["masterValue"][iMaster]["value"]);
      }
	}
    if (!parent || !parent.scAjaxDetailValue)
    {
      return;
    }
    for (iMaster = 0; iMaster < oResp["masterValue"].length; iMaster++)
    {
      parent.scAjaxDetailValue(oResp["masterValue"][iMaster]["index"], oResp["masterValue"][iMaster]["value"]);
    }
  } // scAjaxSetMaster

  function scAjaxSetFocus()
  {
    if (!oResp["setFocus"] && '' == scFocusFirstErrorName)
    {
      return;
    }
    sFieldName = oResp["setFocus"];
    if (document.F1.elements[sFieldName])
    {
        scFocusField(sFieldName);
    }
    scAjaxFocusError();
  } // scAjaxSetFocus

  function scAjaxFocusError()
  {
    if ('' != scFocusFirstErrorName)
    {
      scFocusField(scFocusFirstErrorName);
      scFocusFirstErrorName = '';
    }
  } // scAjaxFocusError

  function scAjaxSetNavStatus(sBarPos)
  {
    if (!oResp["navStatus"])
    {
      return;
    }
    sNavRet = "S";
    sNavAva = "S";
    if (oResp["navStatus"]["ret"])
    {
      sNavRet = oResp["navStatus"]["ret"];
    }
    if (oResp["navStatus"]["ava"])
    {
      sNavAva = oResp["navStatus"]["ava"];
    }
    if ("S" != sNavRet && "N" != sNavRet)
    {
      sNavRet = "S";
    }
    if ("S" != sNavAva && "N" != sNavAva)
    {
      sNavAva = "S";
    }
    Nav_permite_ret = sNavRet;
    Nav_permite_ava = sNavAva;
    nav_atualiza(Nav_permite_ret, Nav_permite_ava, sBarPos);
  } // scAjaxSetNavStatus

  function scAjaxSetSummary()
  {
    if (!oResp["navSummary"])
    {
      return;
    }
    sreg_ini = oResp["navSummary"].reg_ini;
    sreg_qtd = oResp["navSummary"].reg_qtd;
    sreg_tot = oResp["navSummary"].reg_tot;
    summary_atualiza(sreg_ini, sreg_qtd, sreg_tot);
  } // scAjaxSetSummary

  function scAjaxSetNavpage()
  {
    navpage_atualiza(oResp["navPage"]);
  } // scAjaxSetNavpage


  function scAjaxRedir(oTemp)
  {
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (!oResp["redirInfo"])
    {
      return;
    }
    sMetodo = oResp["redirInfo"]["metodo"];
    sAction = oResp["redirInfo"]["action"];
    if ("location" == sMetodo)
    {
      if ("parent.parent" == oResp["redirInfo"]["target"])
      {
        parent.parent.location = sAction;
      }
      else if ("parent" == oResp["redirInfo"]["target"])
      {
        parent.location = sAction;
      }
      else if ("_blank" == oResp["redirInfo"]["target"])
      {
        window.open(sAction, "_blank");
      }
      else
      {
        document.location = sAction;
      }
    }
    else if ("html" == sMetodo)
    {
        document.write(scAjaxSpecCharParser(oResp["redirInfo"]["action"]));
    }
    else
    {
      if (oResp["redirInfo"]["target"] == "modal")
      {
          tb_show('', sAction + '?script_case_init=' +  oResp["redirInfo"]["script_case_init"] + '&script_case_session=<?php echo session_id() ?>&nmgp_parms=' + oResp["redirInfo"]["nmgp_parms"] + '&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&TB_iframe=true&modal=true&height=' +  oResp["redirInfo"]["h_modal"] + '&width=' + oResp["redirInfo"]["w_modal"], '');
          return;
      }
      sFormRedir = (oResp["redirInfo"]["nmgp_outra_jan"]) ? "form_ajax_redir_1" : "form_ajax_redir_2";
      document.forms[sFormRedir].action           = sAction;
      document.forms[sFormRedir].target           = oResp["redirInfo"]["target"];
      document.forms[sFormRedir].nmgp_parms.value = oResp["redirInfo"]["nmgp_parms"];
      if ("form_ajax_redir_1" == sFormRedir)
      {
        document.forms[sFormRedir].nmgp_outra_jan.value = oResp["redirInfo"]["nmgp_outra_jan"];
      }
      else
      {
        document.forms[sFormRedir].nmgp_url_saida.value   = oResp["redirInfo"]["nmgp_url_saida"];
        document.forms[sFormRedir].script_case_init.value = oResp["redirInfo"]["script_case_init"];
      }
      document.forms[sFormRedir].submit();
    }
  } // scAjaxRedir

  function scAjaxSetDisplay(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    var aDispData = new Array();
    var aDispCont = {};
    if (bReset)
    {
      for (iDisplay = 0; iDisplay < ajax_block_list.length; iDisplay++)
      {
        aDispCont[ajax_block_list[iDisplay]] = aDispData.length;
        aDispData[aDispData.length] = new Array(ajax_block_id[ajax_block_list[iDisplay]], "on");
      }
      for (iDisplay = 0; iDisplay < ajax_field_list.length; iDisplay++)
      {
        if (ajax_field_id[ajax_field_list[iDisplay]])
        {
          aFieldIds = ajax_field_id[ajax_field_list[iDisplay]];
          for (iDisplay2 = 0; iDisplay2 < aFieldIds.length; iDisplay2++)
          {
            aDispCont[aFieldIds[iDisplay2]] = aDispData.length;
            aDispData[aDispData.length] = new Array(aFieldIds[iDisplay2], "on");
          }
        }
      }
    }
    if (oResp["blockDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["blockDisplay"].length; iDisplay++)
      {
        if (bReset)
        {
          aDispData[ aDispCont[ oResp["blockDisplay"][iDisplay][0] ] ][1] = oResp["blockDisplay"][iDisplay][1];
        }
        else
        {
          aDispData[aDispData.length] = new Array(ajax_block_id[ oResp["blockDisplay"][iDisplay][0] ], oResp["blockDisplay"][iDisplay][1]);
        }
      }
    }
    if (oResp["fieldDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["fieldDisplay"].length; iDisplay++)
      {
        for (iDisplay2 = 1; iDisplay2 < ajax_field_mult[ oResp["fieldDisplay"][iDisplay][0] ].length; iDisplay2++)
        {
          aFieldIds = ajax_field_id[ ajax_field_mult[ oResp["fieldDisplay"][iDisplay][0] ][iDisplay2] ];
          for (iDisplay3 = 0; iDisplay3 < aFieldIds.length; iDisplay3++)
          {
            if (bReset)
            {
              aDispData[ aDispCont[ aFieldIds[iDisplay3] ] ][1] = oResp["fieldDisplay"][iDisplay][1];
            }
            else
            {
              aDispData[aDispData.length] = new Array(aFieldIds[iDisplay3], oResp["fieldDisplay"][iDisplay][1]);
            }
          }
        }
      }
    }
    if (oResp["buttonDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["buttonDisplay"].length; iDisplay++)
      {
        var sBtnName2 = "";
        switch (oResp["buttonDisplay"][iDisplay][0])
        {
          case "first": var sBtnName = "sc_b_ini"; break;
          case "back": var sBtnName = "sc_b_ret"; break;
          case "forward": var sBtnName = "sc_b_avc"; break;
          case "last": var sBtnName = "sc_b_fim"; break;
          case "insert": var sBtnName = "sc_b_ins"; break;
          case "update": var sBtnName = "sc_b_upd"; break;
          case "delete": var sBtnName = "sc_b_del"; break;
          default: var sBtnName = "sc_b_" + oResp["buttonDisplay"][iDisplay][0]; sBtnName2 = "sc_" + oResp["buttonDisplay"][iDisplay][0]; break;
        }
        if ("sc_b_ini" == sBtnName || "sc_b_ret" == sBtnName || "sc_b_avc" == sBtnName || "sc_b_fim" == sBtnName)
        {
          scAjaxNavigateButtonDisplay(sBtnName, oResp["buttonDisplay"][iDisplay][1]);
        }
        else
        {
          aDispData[aDispData.length] = new Array(sBtnName, oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName + "_t", oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName + "_b", oResp["buttonDisplay"][iDisplay][1]);
        }
        if ("" != sBtnName2)
        {
          aDispData[aDispData.length] = new Array(sBtnName2, oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName2 + "_top", oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName2 + "_bot", oResp["buttonDisplay"][iDisplay][1]);
        }
      }
    }
    for (iDisplay = 0; iDisplay < aDispData.length; iDisplay++)
    {
      scAjaxElementDisplay(aDispData[iDisplay][0], aDispData[iDisplay][1]);
    }
  } // scAjaxSetDisplay

  function scAjaxNavigateButtonDisplay(sButton, sStatus)
  {
    sButton2 = sButton + "_off";

    if ("off" == sStatus)
    {
      sStatus2 = "off";
    }
    else
    {
      if ("sc_b_ini" == sButton || "sc_b_ret" == sButton)
      {
        if ("S" == Nav_permite_ret)
        {
          sStatus  = "on";
          sStatus2 = "off";
        }
        else
        {
          sStatus  = "off";
          sStatus2 = "on";
        }
      }
      else
      {
        if ("S" == Nav_permite_ava)
        {
          sStatus  = "on";
          sStatus2 = "off";
        }
        else
        {
          sStatus  = "off";
          sStatus2 = "on";
        }
      }
    }

    scAjaxElementDisplay(sButton        , sStatus);
    scAjaxElementDisplay(sButton + "_t" , sStatus);
    scAjaxElementDisplay(sButton + "_b" , sStatus);
    scAjaxElementDisplay(sButton2       , sStatus2);
    scAjaxElementDisplay(sButton2 + "_t", sStatus2);
    scAjaxElementDisplay(sButton2 + "_b", sStatus2);
  } // scAjaxNavigateButtonDisplay

  function scAjaxElementDisplay(sElement, sAction)
  {
    if (ajax_block_tab && ajax_block_tab[sElement] && "" != ajax_block_tab[sElement])
    {
      scAjaxElementDisplay(ajax_block_tab[sElement], sAction);
    }
    if (document.getElementById(sElement))
    {
      
      if("off" == sAction)
      {
        $('#' + sElement).hide();
      }
      else
      {
        $('#' + sElement).show();
      }
      if (document.getElementById(sElement + "_dumb"))
      {
        if("off" == sAction)
        {
          $('#' + sElement + "_dumb").hide();
        }
        else
        {
          $('#' + sElement + "_dumb").show();
        }
      }
    }
  } // scAjaxElementDisplay

  function scAjaxSetLabel(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    if (bReset)
    {
      for (iLabel = 0; iLabel < ajax_field_list.length; iLabel++)
      {
        if (ajax_field_list[iLabel] && ajax_error_list[ajax_field_list[iLabel]])
        {
          scAjaxFieldLabel(ajax_field_list[iLabel], ajax_error_list[ajax_field_list[iLabel]]["label"]);
        }
      }
    }
    if (oResp["fieldLabel"])
    {
      for (iLabel = 0; iLabel < oResp["fieldLabel"].length; iLabel++)
      {
        scAjaxFieldLabel(oResp["fieldLabel"][iLabel][0], scAjaxSpecCharParser(oResp["fieldLabel"][iLabel][1]));
      }
    }
  } // scAjaxSetLabel

  function scAjaxFieldLabel(sField, sLabel)
  {
    if (document.getElementById("id_label_" + sField) && document.getElementById("id_label_" + sField).innerHTML != sLabel)
    {
      document.getElementById("id_label_" + sField).innerHTML = sLabel;
    }
  } // scAjaxFieldLabel

  function scAjaxSetReadonly(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    if (bReset)
    {
      for (iRead = 0; iRead < ajax_field_list.length; iRead++)
      {
        scAjaxFieldRead(ajax_field_list[iRead], ajax_read_only[ajax_field_list[iRead]]);
      }
      for (iRead = 0; iRead < ajax_field_Dt_Hr.length; iRead++)
      {
        scAjaxFieldRead(ajax_field_Dt_Hr[iRead], ajax_read_only[ajax_field_Dt_Hr[iRead]]);
      }
    }
    if (oResp["readOnly"])
    {
      for (iRead = 0; iRead < oResp["readOnly"].length; iRead++)
      {
        if (ajax_read_only[ oResp["readOnly"][iRead][0] ])
        {
          scAjaxFieldRead(oResp["readOnly"][iRead][0], oResp["readOnly"][iRead][1]);
        }
        else if (oResp["rsSize"])
        {
          for (var i = 0; i <= oResp["rsSize"]; i++)
          {
            if (ajax_read_only[ oResp["readOnly"][iRead][0] + i ])
            {
              scAjaxFieldRead(oResp["readOnly"][iRead][0] + i, oResp["readOnly"][iRead][1]);
            }
          }
        }
      }
    }
  } // scAjaxSetReadonly

  function scAjaxFieldRead(sField, sStatus)
  {
    if ("on" == sStatus)
    {
      var sDisplayOff = "none";
      var sDisplayOn  = "";
    }
    else
    {
      var sDisplayOff = "";
      var sDisplayOn  = "none";
    }
    if (document.getElementById("id_read_off_" + sField))
    {
      document.getElementById("id_read_off_" + sField).style.display = sDisplayOff;
    }
    if (document.getElementById("id_read_on_" + sField))
    {
      document.getElementById("id_read_on_" + sField).style.display = sDisplayOn;
    }
  } // scAjaxFieldRead

  function scAjaxSetBtnVars()
  {
    if (oResp["btnVars"])
    {
      for (iBtn = 0; iBtn < oResp["btnVars"].length; iBtn++)
      {
        eval(oResp["btnVars"][iBtn][0] + " = scAjaxSpecCharParser('" + oResp["btnVars"][iBtn][1] + "');");
      }
    }
  } // scAjaxSetBtnVars

  function scAjaxClearText(sFormField)
  {
    document.F1.elements[sFormField].value = "";
  } // scAjaxClearText

  function scAjaxClearLabel(sFormField)
  {
    document.getElementById("id_ajax_label_" + sFormField).innerHTML = "";
  } // scAjaxClearLabel

  function scAjaxClearSelect(sFormField)
  {
    document.F1.elements[sFormField].length = 0;
  } // scAjaxClearSelect

  function scAjaxClearCheckbox(sFormField)
  {
    document.getElementById("idAjaxCheckbox_" + sFormField).innerHTML = "";
  } // scAjaxClearCheckbox

  function scAjaxClearRadio(sFormField)
  {
    document.getElementById("idAjaxRadio_" + sFormField).innerHTML = "";
  } // scAjaxClearRadio

  function scAjaxClearEditorHtml(sFormField)
  {
    if(tinymce.majorVersion > 3)
        {
                var oFormField = tinyMCE.get(sFieldName);
        }
        else
        {
                var oFormField = tinyMCE.getInstanceById(sFieldName);
        }
    oFormField.setContent("");
  } // scAjaxClearEditorHtml

  function scAjaxJavascript()
  {
    if (oResp["ajaxJavascript"])
    {
      var sJsFunc = "";
      for (var i = 0; i < oResp["ajaxJavascript"].length; i++)
      {
        sJsFunc = scAjaxSpecCharParser(oResp["ajaxJavascript"][i][0]);
        if ("" != sJsFunc)
        {
          var aParam = new Array();
          if (oResp["ajaxJavascript"][i][1] && 0 < oResp["ajaxJavascript"][i][1].length)
          {
            for (var j = 0; j < oResp["ajaxJavascript"][i][1].length; j++)
            {
              aParam.push("'" + oResp["ajaxJavascript"][i][1][j] + "'");
            }
          }
          eval("if (" + sJsFunc + ") { " + sJsFunc + "(" + aParam.join(", ") + ") }");
        }
      }
    }
  } // scAjaxJavascript

  function scAjaxAlert()
  {
    if (oResp["ajaxAlert"] && oResp["ajaxAlert"]["message"] && "" != oResp["ajaxAlert"]["message"])
    {
      alert(oResp["ajaxAlert"]["message"]);
    }
  } // scAjaxAlert

  function scAjaxMessage(oTemp)
  {
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (oResp["ajaxMessage"] && oResp["ajaxMessage"]["message"] && "" != oResp["ajaxMessage"]["message"])
    {
      var sTitle    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["title"])        ? oResp["ajaxMessage"]["title"]               : scMsgDefTitle,
          bModal    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["modal"])        ? ("Y" == oResp["ajaxMessage"]["modal"])      : false,
          iTimeout  = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["timeout"])      ? parseInt(oResp["ajaxMessage"]["timeout"])   : 0,
          bButton   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["button"])       ? ("Y" == oResp["ajaxMessage"]["button"])     : false,
          sButton   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["button_label"]) ? oResp["ajaxMessage"]["button_label"]        : "Ok",
          iTop      = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["top"])          ? parseInt(oResp["ajaxMessage"]["top"])       : 0,
          iLeft     = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["left"])         ? parseInt(oResp["ajaxMessage"]["left"])      : 0,
          iWidth    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["width"])        ? parseInt(oResp["ajaxMessage"]["width"])     : 0,
          iHeight   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["height"])       ? parseInt(oResp["ajaxMessage"]["height"])    : 0,
          bClose    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["show_close"])   ? ("Y" == oResp["ajaxMessage"]["show_close"]) : true,
          bBodyIcon = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["body_icon"])    ? ("Y" == oResp["ajaxMessage"]["body_icon"])  : true,
          sRedir    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir"])        ? oResp["ajaxMessage"]["redir"]               : "",
          sTarget   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir_target"]) ? oResp["ajaxMessage"]["redir_target"]        : "",
          sParam    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir_par"])    ? oResp["ajaxMessage"]["redir_par"]           : "";
      _scAjaxShowMessage(sTitle, oResp["ajaxMessage"]["message"], bModal, iTimeout, bButton, sButton, iTop, iLeft, iWidth, iHeight, sRedir, sTarget, sParam, bClose, bBodyIcon);
    }
  } // scAjaxAlert

  function scAjaxResponse(sResp)
  {
    eval("var oResp = " + sResp);
    return oResp;
  } // scAjaxResponse

  function scAjaxBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      input += "";
      while (input.lastIndexOf(String.fromCharCode(10)) > -1)
      {
         input = input.replace(String.fromCharCode(10), '<br>');
      }
      return input;
  } // scAjaxBreakLine

  function scAjaxProtectBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      var input1 = input + "";
      while (input1.lastIndexOf(String.fromCharCode(10)) > -1)
      {
         input1 = input1.replace(String.fromCharCode(10), '#@NM#@');
      }
      return input1;
  } // scAjaxProtectBreakLine

  function scAjaxReturnBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      while (input.lastIndexOf('#@NM#@') > -1)
      {
         input = input.replace('#@NM#@', String.fromCharCode(10));
      }
      return input;
  } // scAjaxReturnBreakLine

  function scOpenMasterDetail(widget, url)
  {
	  var iframe = $(parent.document).find("[name='" +  widget+ "']");
	  iframe.attr("src", url);
  } // scOpenMasterDetail

  function scMoveMasterDetail(widget)
  {
	  var iframe = $(parent.document).find("[name='" +  widget+ "']");
	  iframe[0].contentWindow.nm_move("apl_detalhe", true);
  } // scMoveMasterDetail

  // ---------- Validate program_id
  function do_ajax_form_student_registration_validate_program_id()
  {
    var nomeCampo_program_id = "program_id";
    var var_program_id = scAjaxGetFieldText(nomeCampo_program_id);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_program_id(var_program_id, var_script_case_init, do_ajax_form_student_registration_validate_program_id_cb);
  } // do_ajax_form_student_registration_validate_program_id

  function do_ajax_form_student_registration_validate_program_id_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "program_id";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_program_id_cb

  // ---------- Validate student_status
  function do_ajax_form_student_registration_validate_student_status()
  {
    var nomeCampo_student_status = "student_status";
    var var_student_status = scAjaxGetFieldRadio(nomeCampo_student_status);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_student_status(var_student_status, var_script_case_init, do_ajax_form_student_registration_validate_student_status_cb);
  } // do_ajax_form_student_registration_validate_student_status

  function do_ajax_form_student_registration_validate_student_status_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "student_status";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_student_status_cb

  // ---------- Validate student_id
  function do_ajax_form_student_registration_validate_student_id()
  {
    var nomeCampo_student_id = "student_id";
    var var_student_id = scAjaxGetFieldText(nomeCampo_student_id);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_student_id(var_student_id, var_script_case_init, do_ajax_form_student_registration_validate_student_id_cb);
  } // do_ajax_form_student_registration_validate_student_id

  function do_ajax_form_student_registration_validate_student_id_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "student_id";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_student_id_cb

  // ---------- Validate title_id
  function do_ajax_form_student_registration_validate_title_id()
  {
    var nomeCampo_title_id = "title_id";
    var var_title_id = scAjaxGetFieldText(nomeCampo_title_id);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_title_id(var_title_id, var_script_case_init, do_ajax_form_student_registration_validate_title_id_cb);
  } // do_ajax_form_student_registration_validate_title_id

  function do_ajax_form_student_registration_validate_title_id_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "title_id";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_title_id_cb

  // ---------- Validate firstname
  function do_ajax_form_student_registration_validate_firstname()
  {
    var nomeCampo_firstname = "firstname";
    var var_firstname = scAjaxGetFieldText(nomeCampo_firstname);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_firstname(var_firstname, var_script_case_init, do_ajax_form_student_registration_validate_firstname_cb);
  } // do_ajax_form_student_registration_validate_firstname

  function do_ajax_form_student_registration_validate_firstname_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "firstname";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_firstname_cb

  // ---------- Validate lastname
  function do_ajax_form_student_registration_validate_lastname()
  {
    var nomeCampo_lastname = "lastname";
    var var_lastname = scAjaxGetFieldText(nomeCampo_lastname);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_lastname(var_lastname, var_script_case_init, do_ajax_form_student_registration_validate_lastname_cb);
  } // do_ajax_form_student_registration_validate_lastname

  function do_ajax_form_student_registration_validate_lastname_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "lastname";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_lastname_cb

  // ---------- Validate firstnameeng
  function do_ajax_form_student_registration_validate_firstnameeng()
  {
    var nomeCampo_firstnameeng = "firstnameeng";
    var var_firstnameeng = scAjaxGetFieldText(nomeCampo_firstnameeng);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_firstnameeng(var_firstnameeng, var_script_case_init, do_ajax_form_student_registration_validate_firstnameeng_cb);
  } // do_ajax_form_student_registration_validate_firstnameeng

  function do_ajax_form_student_registration_validate_firstnameeng_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "firstnameeng";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_firstnameeng_cb

  // ---------- Validate lastnameeng
  function do_ajax_form_student_registration_validate_lastnameeng()
  {
    var nomeCampo_lastnameeng = "lastnameeng";
    var var_lastnameeng = scAjaxGetFieldText(nomeCampo_lastnameeng);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_lastnameeng(var_lastnameeng, var_script_case_init, do_ajax_form_student_registration_validate_lastnameeng_cb);
  } // do_ajax_form_student_registration_validate_lastnameeng

  function do_ajax_form_student_registration_validate_lastnameeng_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "lastnameeng";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_lastnameeng_cb

  // ---------- Validate gender
  function do_ajax_form_student_registration_validate_gender()
  {
    var nomeCampo_gender = "gender";
    var var_gender = scAjaxGetFieldRadio(nomeCampo_gender);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_gender(var_gender, var_script_case_init, do_ajax_form_student_registration_validate_gender_cb);
  } // do_ajax_form_student_registration_validate_gender

  function do_ajax_form_student_registration_validate_gender_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "gender";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_gender_cb

  // ---------- Validate student_pid
  function do_ajax_form_student_registration_validate_student_pid()
  {
    var nomeCampo_student_pid = "student_pid";
    var var_student_pid = scAjaxGetFieldText(nomeCampo_student_pid);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_student_pid(var_student_pid, var_script_case_init, do_ajax_form_student_registration_validate_student_pid_cb);
  } // do_ajax_form_student_registration_validate_student_pid

  function do_ajax_form_student_registration_validate_student_pid_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "student_pid";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_student_pid_cb

  // ---------- Validate pid_start
  function do_ajax_form_student_registration_validate_pid_start()
  {
    var nomeCampo_pid_start = "pid_start";
    var var_pid_start = scAjaxGetFieldText(nomeCampo_pid_start);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_pid_start(var_pid_start, var_script_case_init, do_ajax_form_student_registration_validate_pid_start_cb);
  } // do_ajax_form_student_registration_validate_pid_start

  function do_ajax_form_student_registration_validate_pid_start_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "pid_start";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_pid_start_cb

  // ---------- Validate pid_stop
  function do_ajax_form_student_registration_validate_pid_stop()
  {
    var nomeCampo_pid_stop = "pid_stop";
    var var_pid_stop = scAjaxGetFieldText(nomeCampo_pid_stop);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_pid_stop(var_pid_stop, var_script_case_init, do_ajax_form_student_registration_validate_pid_stop_cb);
  } // do_ajax_form_student_registration_validate_pid_stop

  function do_ajax_form_student_registration_validate_pid_stop_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "pid_stop";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_pid_stop_cb

  // ---------- Validate student_dob
  function do_ajax_form_student_registration_validate_student_dob()
  {
    var nomeCampo_student_dob = "student_dob";
    var var_student_dob = scAjaxGetFieldText(nomeCampo_student_dob);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_student_dob(var_student_dob, var_script_case_init, do_ajax_form_student_registration_validate_student_dob_cb);
  } // do_ajax_form_student_registration_validate_student_dob

  function do_ajax_form_student_registration_validate_student_dob_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "student_dob";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_student_dob_cb

  // ---------- Validate race_id
  function do_ajax_form_student_registration_validate_race_id()
  {
    var nomeCampo_race_id = "race_id";
    var var_race_id = scAjaxGetFieldText(nomeCampo_race_id);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_race_id(var_race_id, var_script_case_init, do_ajax_form_student_registration_validate_race_id_cb);
  } // do_ajax_form_student_registration_validate_race_id

  function do_ajax_form_student_registration_validate_race_id_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "race_id";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_race_id_cb

  // ---------- Validate nationality_id
  function do_ajax_form_student_registration_validate_nationality_id()
  {
    var nomeCampo_nationality_id = "nationality_id";
    var var_nationality_id = scAjaxGetFieldText(nomeCampo_nationality_id);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_nationality_id(var_nationality_id, var_script_case_init, do_ajax_form_student_registration_validate_nationality_id_cb);
  } // do_ajax_form_student_registration_validate_nationality_id

  function do_ajax_form_student_registration_validate_nationality_id_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "nationality_id";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_nationality_id_cb

  // ---------- Validate religion_id
  function do_ajax_form_student_registration_validate_religion_id()
  {
    var nomeCampo_religion_id = "religion_id";
    var var_religion_id = scAjaxGetFieldText(nomeCampo_religion_id);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_religion_id(var_religion_id, var_script_case_init, do_ajax_form_student_registration_validate_religion_id_cb);
  } // do_ajax_form_student_registration_validate_religion_id

  function do_ajax_form_student_registration_validate_religion_id_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "religion_id";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_religion_id_cb

  // ---------- Validate blood_group_id
  function do_ajax_form_student_registration_validate_blood_group_id()
  {
    var nomeCampo_blood_group_id = "blood_group_id";
    var var_blood_group_id = scAjaxGetFieldText(nomeCampo_blood_group_id);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_blood_group_id(var_blood_group_id, var_script_case_init, do_ajax_form_student_registration_validate_blood_group_id_cb);
  } // do_ajax_form_student_registration_validate_blood_group_id

  function do_ajax_form_student_registration_validate_blood_group_id_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "blood_group_id";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_blood_group_id_cb

  // ---------- Validate school_id
  function do_ajax_form_student_registration_validate_school_id()
  {
    var nomeCampo_school_id = "school_id";
    var var_school_id = scAjaxGetFieldText(nomeCampo_school_id);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_school_id(var_school_id, var_script_case_init, do_ajax_form_student_registration_validate_school_id_cb);
  } // do_ajax_form_student_registration_validate_school_id

  function do_ajax_form_student_registration_validate_school_id_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "school_id";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_school_id_cb

  // ---------- Validate school_address
  function do_ajax_form_student_registration_validate_school_address()
  {
    var nomeCampo_school_address = "school_address";
    var var_school_address = scAjaxGetFieldText(nomeCampo_school_address);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_school_address(var_school_address, var_script_case_init, do_ajax_form_student_registration_validate_school_address_cb);
  } // do_ajax_form_student_registration_validate_school_address

  function do_ajax_form_student_registration_validate_school_address_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "school_address";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_school_address_cb

  // ---------- Validate school_district
  function do_ajax_form_student_registration_validate_school_district()
  {
    var nomeCampo_school_district = "school_district";
    var var_school_district = scAjaxGetFieldText(nomeCampo_school_district);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_school_district(var_school_district, var_script_case_init, do_ajax_form_student_registration_validate_school_district_cb);
  } // do_ajax_form_student_registration_validate_school_district

  function do_ajax_form_student_registration_validate_school_district_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "school_district";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_school_district_cb

  // ---------- Validate school_province
  function do_ajax_form_student_registration_validate_school_province()
  {
    var nomeCampo_school_province = "school_province";
    var var_school_province = scAjaxGetFieldText(nomeCampo_school_province);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_school_province(var_school_province, var_script_case_init, do_ajax_form_student_registration_validate_school_province_cb);
  } // do_ajax_form_student_registration_validate_school_province

  function do_ajax_form_student_registration_validate_school_province_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "school_province";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_school_province_cb

  // ---------- Validate school_year_grad
  function do_ajax_form_student_registration_validate_school_year_grad()
  {
    var nomeCampo_school_year_grad = "school_year_grad";
    var var_school_year_grad = scAjaxGetFieldText(nomeCampo_school_year_grad);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_school_year_grad(var_school_year_grad, var_script_case_init, do_ajax_form_student_registration_validate_school_year_grad_cb);
  } // do_ajax_form_student_registration_validate_school_year_grad

  function do_ajax_form_student_registration_validate_school_year_grad_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "school_year_grad";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_school_year_grad_cb

  // ---------- Validate school_gpa
  function do_ajax_form_student_registration_validate_school_gpa()
  {
    var nomeCampo_school_gpa = "school_gpa";
    var var_school_gpa = scAjaxGetFieldText(nomeCampo_school_gpa);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_school_gpa(var_school_gpa, var_script_case_init, do_ajax_form_student_registration_validate_school_gpa_cb);
  } // do_ajax_form_student_registration_validate_school_gpa

  function do_ajax_form_student_registration_validate_school_gpa_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "school_gpa";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_school_gpa_cb

  // ---------- Validate addr_address
  function do_ajax_form_student_registration_validate_addr_address()
  {
    var nomeCampo_addr_address = "addr_address";
    var var_addr_address = scAjaxGetFieldText(nomeCampo_addr_address);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_addr_address(var_addr_address, var_script_case_init, do_ajax_form_student_registration_validate_addr_address_cb);
  } // do_ajax_form_student_registration_validate_addr_address

  function do_ajax_form_student_registration_validate_addr_address_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "addr_address";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_addr_address_cb

  // ---------- Validate addr_tambon
  function do_ajax_form_student_registration_validate_addr_tambon()
  {
    var nomeCampo_addr_tambon = "addr_tambon";
    var var_addr_tambon = scAjaxGetFieldText(nomeCampo_addr_tambon);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_addr_tambon(var_addr_tambon, var_script_case_init, do_ajax_form_student_registration_validate_addr_tambon_cb);
  } // do_ajax_form_student_registration_validate_addr_tambon

  function do_ajax_form_student_registration_validate_addr_tambon_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "addr_tambon";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_addr_tambon_cb

  // ---------- Validate addr_district
  function do_ajax_form_student_registration_validate_addr_district()
  {
    var nomeCampo_addr_district = "addr_district";
    var var_addr_district = scAjaxGetFieldText(nomeCampo_addr_district);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_addr_district(var_addr_district, var_script_case_init, do_ajax_form_student_registration_validate_addr_district_cb);
  } // do_ajax_form_student_registration_validate_addr_district

  function do_ajax_form_student_registration_validate_addr_district_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "addr_district";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_addr_district_cb

  // ---------- Validate addr_province
  function do_ajax_form_student_registration_validate_addr_province()
  {
    var nomeCampo_addr_province = "addr_province";
    var var_addr_province = scAjaxGetFieldText(nomeCampo_addr_province);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_addr_province(var_addr_province, var_script_case_init, do_ajax_form_student_registration_validate_addr_province_cb);
  } // do_ajax_form_student_registration_validate_addr_province

  function do_ajax_form_student_registration_validate_addr_province_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "addr_province";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_addr_province_cb

  // ---------- Validate addr_postcode
  function do_ajax_form_student_registration_validate_addr_postcode()
  {
    var nomeCampo_addr_postcode = "addr_postcode";
    var var_addr_postcode = scAjaxGetFieldText(nomeCampo_addr_postcode);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_addr_postcode(var_addr_postcode, var_script_case_init, do_ajax_form_student_registration_validate_addr_postcode_cb);
  } // do_ajax_form_student_registration_validate_addr_postcode

  function do_ajax_form_student_registration_validate_addr_postcode_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "addr_postcode";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_addr_postcode_cb

  // ---------- Validate addr_homephone
  function do_ajax_form_student_registration_validate_addr_homephone()
  {
    var nomeCampo_addr_homephone = "addr_homephone";
    var var_addr_homephone = scAjaxGetFieldText(nomeCampo_addr_homephone);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_addr_homephone(var_addr_homephone, var_script_case_init, do_ajax_form_student_registration_validate_addr_homephone_cb);
  } // do_ajax_form_student_registration_validate_addr_homephone

  function do_ajax_form_student_registration_validate_addr_homephone_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "addr_homephone";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_addr_homephone_cb

  // ---------- Validate addr_mobilephone
  function do_ajax_form_student_registration_validate_addr_mobilephone()
  {
    var nomeCampo_addr_mobilephone = "addr_mobilephone";
    var var_addr_mobilephone = scAjaxGetFieldText(nomeCampo_addr_mobilephone);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_addr_mobilephone(var_addr_mobilephone, var_script_case_init, do_ajax_form_student_registration_validate_addr_mobilephone_cb);
  } // do_ajax_form_student_registration_validate_addr_mobilephone

  function do_ajax_form_student_registration_validate_addr_mobilephone_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "addr_mobilephone";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_addr_mobilephone_cb

  // ---------- Validate addr_email
  function do_ajax_form_student_registration_validate_addr_email()
  {
    var nomeCampo_addr_email = "addr_email";
    var var_addr_email = scAjaxGetFieldText(nomeCampo_addr_email);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_addr_email(var_addr_email, var_script_case_init, do_ajax_form_student_registration_validate_addr_email_cb);
  } // do_ajax_form_student_registration_validate_addr_email

  function do_ajax_form_student_registration_validate_addr_email_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "addr_email";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_addr_email_cb

  // ---------- Validate cont_address
  function do_ajax_form_student_registration_validate_cont_address()
  {
    var nomeCampo_cont_address = "cont_address";
    var var_cont_address = scAjaxGetFieldText(nomeCampo_cont_address);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_cont_address(var_cont_address, var_script_case_init, do_ajax_form_student_registration_validate_cont_address_cb);
  } // do_ajax_form_student_registration_validate_cont_address

  function do_ajax_form_student_registration_validate_cont_address_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "cont_address";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_cont_address_cb

  // ---------- Validate cont_tambon
  function do_ajax_form_student_registration_validate_cont_tambon()
  {
    var nomeCampo_cont_tambon = "cont_tambon";
    var var_cont_tambon = scAjaxGetFieldText(nomeCampo_cont_tambon);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_cont_tambon(var_cont_tambon, var_script_case_init, do_ajax_form_student_registration_validate_cont_tambon_cb);
  } // do_ajax_form_student_registration_validate_cont_tambon

  function do_ajax_form_student_registration_validate_cont_tambon_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "cont_tambon";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_cont_tambon_cb

  // ---------- Validate cont_district
  function do_ajax_form_student_registration_validate_cont_district()
  {
    var nomeCampo_cont_district = "cont_district";
    var var_cont_district = scAjaxGetFieldText(nomeCampo_cont_district);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_cont_district(var_cont_district, var_script_case_init, do_ajax_form_student_registration_validate_cont_district_cb);
  } // do_ajax_form_student_registration_validate_cont_district

  function do_ajax_form_student_registration_validate_cont_district_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "cont_district";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_cont_district_cb

  // ---------- Validate cont_province
  function do_ajax_form_student_registration_validate_cont_province()
  {
    var nomeCampo_cont_province = "cont_province";
    var var_cont_province = scAjaxGetFieldText(nomeCampo_cont_province);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_cont_province(var_cont_province, var_script_case_init, do_ajax_form_student_registration_validate_cont_province_cb);
  } // do_ajax_form_student_registration_validate_cont_province

  function do_ajax_form_student_registration_validate_cont_province_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "cont_province";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_cont_province_cb

  // ---------- Validate cont_postcode
  function do_ajax_form_student_registration_validate_cont_postcode()
  {
    var nomeCampo_cont_postcode = "cont_postcode";
    var var_cont_postcode = scAjaxGetFieldText(nomeCampo_cont_postcode);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_cont_postcode(var_cont_postcode, var_script_case_init, do_ajax_form_student_registration_validate_cont_postcode_cb);
  } // do_ajax_form_student_registration_validate_cont_postcode

  function do_ajax_form_student_registration_validate_cont_postcode_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "cont_postcode";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_cont_postcode_cb

  // ---------- Validate cont_homephone
  function do_ajax_form_student_registration_validate_cont_homephone()
  {
    var nomeCampo_cont_homephone = "cont_homephone";
    var var_cont_homephone = scAjaxGetFieldText(nomeCampo_cont_homephone);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_cont_homephone(var_cont_homephone, var_script_case_init, do_ajax_form_student_registration_validate_cont_homephone_cb);
  } // do_ajax_form_student_registration_validate_cont_homephone

  function do_ajax_form_student_registration_validate_cont_homephone_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "cont_homephone";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_cont_homephone_cb

  // ---------- Validate cont_mobilephone
  function do_ajax_form_student_registration_validate_cont_mobilephone()
  {
    var nomeCampo_cont_mobilephone = "cont_mobilephone";
    var var_cont_mobilephone = scAjaxGetFieldText(nomeCampo_cont_mobilephone);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_cont_mobilephone(var_cont_mobilephone, var_script_case_init, do_ajax_form_student_registration_validate_cont_mobilephone_cb);
  } // do_ajax_form_student_registration_validate_cont_mobilephone

  function do_ajax_form_student_registration_validate_cont_mobilephone_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "cont_mobilephone";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_cont_mobilephone_cb

  // ---------- Validate cont_email
  function do_ajax_form_student_registration_validate_cont_email()
  {
    var nomeCampo_cont_email = "cont_email";
    var var_cont_email = scAjaxGetFieldText(nomeCampo_cont_email);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_cont_email(var_cont_email, var_script_case_init, do_ajax_form_student_registration_validate_cont_email_cb);
  } // do_ajax_form_student_registration_validate_cont_email

  function do_ajax_form_student_registration_validate_cont_email_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "cont_email";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_cont_email_cb

  // ---------- Validate father_name
  function do_ajax_form_student_registration_validate_father_name()
  {
    var nomeCampo_father_name = "father_name";
    var var_father_name = scAjaxGetFieldText(nomeCampo_father_name);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_father_name(var_father_name, var_script_case_init, do_ajax_form_student_registration_validate_father_name_cb);
  } // do_ajax_form_student_registration_validate_father_name

  function do_ajax_form_student_registration_validate_father_name_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "father_name";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_father_name_cb

  // ---------- Validate father_pid
  function do_ajax_form_student_registration_validate_father_pid()
  {
    var nomeCampo_father_pid = "father_pid";
    var var_father_pid = scAjaxGetFieldText(nomeCampo_father_pid);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_father_pid(var_father_pid, var_script_case_init, do_ajax_form_student_registration_validate_father_pid_cb);
  } // do_ajax_form_student_registration_validate_father_pid

  function do_ajax_form_student_registration_validate_father_pid_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "father_pid";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_father_pid_cb

  // ---------- Validate father_status
  function do_ajax_form_student_registration_validate_father_status()
  {
    var nomeCampo_father_status = "father_status";
    var var_father_status = scAjaxGetFieldText(nomeCampo_father_status);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_father_status(var_father_status, var_script_case_init, do_ajax_form_student_registration_validate_father_status_cb);
  } // do_ajax_form_student_registration_validate_father_status

  function do_ajax_form_student_registration_validate_father_status_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "father_status";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_father_status_cb

  // ---------- Validate father_age
  function do_ajax_form_student_registration_validate_father_age()
  {
    var nomeCampo_father_age = "father_age";
    var var_father_age = scAjaxGetFieldText(nomeCampo_father_age);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_father_age(var_father_age, var_script_case_init, do_ajax_form_student_registration_validate_father_age_cb);
  } // do_ajax_form_student_registration_validate_father_age

  function do_ajax_form_student_registration_validate_father_age_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "father_age";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_father_age_cb

  // ---------- Validate father_occupation
  function do_ajax_form_student_registration_validate_father_occupation()
  {
    var nomeCampo_father_occupation = "father_occupation";
    var var_father_occupation = scAjaxGetFieldText(nomeCampo_father_occupation);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_father_occupation(var_father_occupation, var_script_case_init, do_ajax_form_student_registration_validate_father_occupation_cb);
  } // do_ajax_form_student_registration_validate_father_occupation

  function do_ajax_form_student_registration_validate_father_occupation_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "father_occupation";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_father_occupation_cb

  // ---------- Validate father_annual_income
  function do_ajax_form_student_registration_validate_father_annual_income()
  {
    var nomeCampo_father_annual_income = "father_annual_income";
    var var_father_annual_income = scAjaxGetFieldText(nomeCampo_father_annual_income);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_father_annual_income(var_father_annual_income, var_script_case_init, do_ajax_form_student_registration_validate_father_annual_income_cb);
  } // do_ajax_form_student_registration_validate_father_annual_income

  function do_ajax_form_student_registration_validate_father_annual_income_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "father_annual_income";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_father_annual_income_cb

  // ---------- Validate mother_name
  function do_ajax_form_student_registration_validate_mother_name()
  {
    var nomeCampo_mother_name = "mother_name";
    var var_mother_name = scAjaxGetFieldText(nomeCampo_mother_name);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_mother_name(var_mother_name, var_script_case_init, do_ajax_form_student_registration_validate_mother_name_cb);
  } // do_ajax_form_student_registration_validate_mother_name

  function do_ajax_form_student_registration_validate_mother_name_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "mother_name";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_mother_name_cb

  // ---------- Validate mother_pid
  function do_ajax_form_student_registration_validate_mother_pid()
  {
    var nomeCampo_mother_pid = "mother_pid";
    var var_mother_pid = scAjaxGetFieldText(nomeCampo_mother_pid);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_mother_pid(var_mother_pid, var_script_case_init, do_ajax_form_student_registration_validate_mother_pid_cb);
  } // do_ajax_form_student_registration_validate_mother_pid

  function do_ajax_form_student_registration_validate_mother_pid_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "mother_pid";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_mother_pid_cb

  // ---------- Validate mother_status
  function do_ajax_form_student_registration_validate_mother_status()
  {
    var nomeCampo_mother_status = "mother_status";
    var var_mother_status = scAjaxGetFieldText(nomeCampo_mother_status);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_mother_status(var_mother_status, var_script_case_init, do_ajax_form_student_registration_validate_mother_status_cb);
  } // do_ajax_form_student_registration_validate_mother_status

  function do_ajax_form_student_registration_validate_mother_status_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "mother_status";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_mother_status_cb

  // ---------- Validate mother_age
  function do_ajax_form_student_registration_validate_mother_age()
  {
    var nomeCampo_mother_age = "mother_age";
    var var_mother_age = scAjaxGetFieldText(nomeCampo_mother_age);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_mother_age(var_mother_age, var_script_case_init, do_ajax_form_student_registration_validate_mother_age_cb);
  } // do_ajax_form_student_registration_validate_mother_age

  function do_ajax_form_student_registration_validate_mother_age_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "mother_age";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_mother_age_cb

  // ---------- Validate mother_occupation
  function do_ajax_form_student_registration_validate_mother_occupation()
  {
    var nomeCampo_mother_occupation = "mother_occupation";
    var var_mother_occupation = scAjaxGetFieldText(nomeCampo_mother_occupation);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_mother_occupation(var_mother_occupation, var_script_case_init, do_ajax_form_student_registration_validate_mother_occupation_cb);
  } // do_ajax_form_student_registration_validate_mother_occupation

  function do_ajax_form_student_registration_validate_mother_occupation_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "mother_occupation";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_mother_occupation_cb

  // ---------- Validate mother_annual_income
  function do_ajax_form_student_registration_validate_mother_annual_income()
  {
    var nomeCampo_mother_annual_income = "mother_annual_income";
    var var_mother_annual_income = scAjaxGetFieldText(nomeCampo_mother_annual_income);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_mother_annual_income(var_mother_annual_income, var_script_case_init, do_ajax_form_student_registration_validate_mother_annual_income_cb);
  } // do_ajax_form_student_registration_validate_mother_annual_income

  function do_ajax_form_student_registration_validate_mother_annual_income_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "mother_annual_income";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_mother_annual_income_cb

  // ---------- Validate marriage_status
  function do_ajax_form_student_registration_validate_marriage_status()
  {
    var nomeCampo_marriage_status = "marriage_status";
    var var_marriage_status = scAjaxGetFieldText(nomeCampo_marriage_status);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_marriage_status(var_marriage_status, var_script_case_init, do_ajax_form_student_registration_validate_marriage_status_cb);
  } // do_ajax_form_student_registration_validate_marriage_status

  function do_ajax_form_student_registration_validate_marriage_status_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "marriage_status";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_marriage_status_cb

  // ---------- Validate parent_name
  function do_ajax_form_student_registration_validate_parent_name()
  {
    var nomeCampo_parent_name = "parent_name";
    var var_parent_name = scAjaxGetFieldText(nomeCampo_parent_name);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_parent_name(var_parent_name, var_script_case_init, do_ajax_form_student_registration_validate_parent_name_cb);
  } // do_ajax_form_student_registration_validate_parent_name

  function do_ajax_form_student_registration_validate_parent_name_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "parent_name";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_parent_name_cb

  // ---------- Validate parent_pid
  function do_ajax_form_student_registration_validate_parent_pid()
  {
    var nomeCampo_parent_pid = "parent_pid";
    var var_parent_pid = scAjaxGetFieldText(nomeCampo_parent_pid);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_parent_pid(var_parent_pid, var_script_case_init, do_ajax_form_student_registration_validate_parent_pid_cb);
  } // do_ajax_form_student_registration_validate_parent_pid

  function do_ajax_form_student_registration_validate_parent_pid_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "parent_pid";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_parent_pid_cb

  // ---------- Validate parent_status
  function do_ajax_form_student_registration_validate_parent_status()
  {
    var nomeCampo_parent_status = "parent_status";
    var var_parent_status = scAjaxGetFieldText(nomeCampo_parent_status);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_parent_status(var_parent_status, var_script_case_init, do_ajax_form_student_registration_validate_parent_status_cb);
  } // do_ajax_form_student_registration_validate_parent_status

  function do_ajax_form_student_registration_validate_parent_status_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "parent_status";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_parent_status_cb

  // ---------- Validate parent_age
  function do_ajax_form_student_registration_validate_parent_age()
  {
    var nomeCampo_parent_age = "parent_age";
    var var_parent_age = scAjaxGetFieldText(nomeCampo_parent_age);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_parent_age(var_parent_age, var_script_case_init, do_ajax_form_student_registration_validate_parent_age_cb);
  } // do_ajax_form_student_registration_validate_parent_age

  function do_ajax_form_student_registration_validate_parent_age_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "parent_age";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_parent_age_cb

  // ---------- Validate parent_occupation
  function do_ajax_form_student_registration_validate_parent_occupation()
  {
    var nomeCampo_parent_occupation = "parent_occupation";
    var var_parent_occupation = scAjaxGetFieldText(nomeCampo_parent_occupation);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_parent_occupation(var_parent_occupation, var_script_case_init, do_ajax_form_student_registration_validate_parent_occupation_cb);
  } // do_ajax_form_student_registration_validate_parent_occupation

  function do_ajax_form_student_registration_validate_parent_occupation_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "parent_occupation";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_parent_occupation_cb

  // ---------- Validate parent_annual_income
  function do_ajax_form_student_registration_validate_parent_annual_income()
  {
    var nomeCampo_parent_annual_income = "parent_annual_income";
    var var_parent_annual_income = scAjaxGetFieldText(nomeCampo_parent_annual_income);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_parent_annual_income(var_parent_annual_income, var_script_case_init, do_ajax_form_student_registration_validate_parent_annual_income_cb);
  } // do_ajax_form_student_registration_validate_parent_annual_income

  function do_ajax_form_student_registration_validate_parent_annual_income_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "parent_annual_income";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_parent_annual_income_cb

  // ---------- Validate emer_contact
  function do_ajax_form_student_registration_validate_emer_contact()
  {
    var nomeCampo_emer_contact = "emer_contact";
    var var_emer_contact = scAjaxGetFieldText(nomeCampo_emer_contact);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_emer_contact(var_emer_contact, var_script_case_init, do_ajax_form_student_registration_validate_emer_contact_cb);
  } // do_ajax_form_student_registration_validate_emer_contact

  function do_ajax_form_student_registration_validate_emer_contact_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "emer_contact";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_emer_contact_cb

  // ---------- Validate emer_homephone
  function do_ajax_form_student_registration_validate_emer_homephone()
  {
    var nomeCampo_emer_homephone = "emer_homephone";
    var var_emer_homephone = scAjaxGetFieldText(nomeCampo_emer_homephone);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_emer_homephone(var_emer_homephone, var_script_case_init, do_ajax_form_student_registration_validate_emer_homephone_cb);
  } // do_ajax_form_student_registration_validate_emer_homephone

  function do_ajax_form_student_registration_validate_emer_homephone_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "emer_homephone";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_emer_homephone_cb

  // ---------- Validate emer_mobilephone
  function do_ajax_form_student_registration_validate_emer_mobilephone()
  {
    var nomeCampo_emer_mobilephone = "emer_mobilephone";
    var var_emer_mobilephone = scAjaxGetFieldText(nomeCampo_emer_mobilephone);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_emer_mobilephone(var_emer_mobilephone, var_script_case_init, do_ajax_form_student_registration_validate_emer_mobilephone_cb);
  } // do_ajax_form_student_registration_validate_emer_mobilephone

  function do_ajax_form_student_registration_validate_emer_mobilephone_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "emer_mobilephone";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_emer_mobilephone_cb

  // ---------- Validate emer_relationship
  function do_ajax_form_student_registration_validate_emer_relationship()
  {
    var nomeCampo_emer_relationship = "emer_relationship";
    var var_emer_relationship = scAjaxGetFieldText(nomeCampo_emer_relationship);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_emer_relationship(var_emer_relationship, var_script_case_init, do_ajax_form_student_registration_validate_emer_relationship_cb);
  } // do_ajax_form_student_registration_validate_emer_relationship

  function do_ajax_form_student_registration_validate_emer_relationship_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "emer_relationship";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_emer_relationship_cb

  // ---------- Validate emer_address
  function do_ajax_form_student_registration_validate_emer_address()
  {
    var nomeCampo_emer_address = "emer_address";
    var var_emer_address = scAjaxGetFieldText(nomeCampo_emer_address);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_student_registration_validate_emer_address(var_emer_address, var_script_case_init, do_ajax_form_student_registration_validate_emer_address_cb);
  } // do_ajax_form_student_registration_validate_emer_address

  function do_ajax_form_student_registration_validate_emer_address_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "emer_address";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_student_registration_validate_emer_address_cb
  // ---------- Form
  function do_ajax_form_student_registration_submit_form()
  {
    if (scEventControl_active("")) {
      setTimeout(function() { do_ajax_form_student_registration_submit_form(); }, 500);
      return;
    }
    scAjaxHideMessage();
    var var_program_id = scAjaxGetFieldText("program_id");
    var var_student_status = scAjaxGetFieldRadio("student_status");
    var var_student_id = scAjaxGetFieldText("student_id");
    var var_title_id = scAjaxGetFieldText("title_id");
    var var_firstname = scAjaxGetFieldText("firstname");
    var var_lastname = scAjaxGetFieldText("lastname");
    var var_firstnameeng = scAjaxGetFieldText("firstnameeng");
    var var_lastnameeng = scAjaxGetFieldText("lastnameeng");
    var var_gender = scAjaxGetFieldRadio("gender");
    var var_student_pid = scAjaxGetFieldText("student_pid");
    var var_pid_start = scAjaxGetFieldText("pid_start");
    var var_pid_stop = scAjaxGetFieldText("pid_stop");
    var var_student_dob = scAjaxGetFieldText("student_dob");
    var var_race_id = scAjaxGetFieldText("race_id");
    var var_nationality_id = scAjaxGetFieldText("nationality_id");
    var var_religion_id = scAjaxGetFieldText("religion_id");
    var var_blood_group_id = scAjaxGetFieldText("blood_group_id");
    var var_school_id = scAjaxGetFieldText("school_id");
    var var_school_address = scAjaxGetFieldText("school_address");
    var var_school_district = scAjaxGetFieldText("school_district");
    var var_school_province = scAjaxGetFieldText("school_province");
    var var_school_year_grad = scAjaxGetFieldText("school_year_grad");
    var var_school_gpa = scAjaxGetFieldText("school_gpa");
    var var_addr_address = scAjaxGetFieldText("addr_address");
    var var_addr_tambon = scAjaxGetFieldText("addr_tambon");
    var var_addr_district = scAjaxGetFieldText("addr_district");
    var var_addr_province = scAjaxGetFieldText("addr_province");
    var var_addr_postcode = scAjaxGetFieldText("addr_postcode");
    var var_addr_homephone = scAjaxGetFieldText("addr_homephone");
    var var_addr_mobilephone = scAjaxGetFieldText("addr_mobilephone");
    var var_addr_email = scAjaxGetFieldText("addr_email");
    var var_cont_address = scAjaxGetFieldText("cont_address");
    var var_cont_tambon = scAjaxGetFieldText("cont_tambon");
    var var_cont_district = scAjaxGetFieldText("cont_district");
    var var_cont_province = scAjaxGetFieldText("cont_province");
    var var_cont_postcode = scAjaxGetFieldText("cont_postcode");
    var var_cont_homephone = scAjaxGetFieldText("cont_homephone");
    var var_cont_mobilephone = scAjaxGetFieldText("cont_mobilephone");
    var var_cont_email = scAjaxGetFieldText("cont_email");
    var var_father_name = scAjaxGetFieldText("father_name");
    var var_father_pid = scAjaxGetFieldText("father_pid");
    var var_father_status = scAjaxGetFieldText("father_status");
    var var_father_age = scAjaxGetFieldText("father_age");
    var var_father_occupation = scAjaxGetFieldText("father_occupation");
    var var_father_annual_income = scAjaxGetFieldText("father_annual_income");
    var var_mother_name = scAjaxGetFieldText("mother_name");
    var var_mother_pid = scAjaxGetFieldText("mother_pid");
    var var_mother_status = scAjaxGetFieldText("mother_status");
    var var_mother_age = scAjaxGetFieldText("mother_age");
    var var_mother_occupation = scAjaxGetFieldText("mother_occupation");
    var var_mother_annual_income = scAjaxGetFieldText("mother_annual_income");
    var var_marriage_status = scAjaxGetFieldText("marriage_status");
    var var_parent_name = scAjaxGetFieldText("parent_name");
    var var_parent_pid = scAjaxGetFieldText("parent_pid");
    var var_parent_status = scAjaxGetFieldText("parent_status");
    var var_parent_age = scAjaxGetFieldText("parent_age");
    var var_parent_occupation = scAjaxGetFieldText("parent_occupation");
    var var_parent_annual_income = scAjaxGetFieldText("parent_annual_income");
    var var_emer_contact = scAjaxGetFieldText("emer_contact");
    var var_emer_homephone = scAjaxGetFieldText("emer_homephone");
    var var_emer_mobilephone = scAjaxGetFieldText("emer_mobilephone");
    var var_emer_relationship = scAjaxGetFieldText("emer_relationship");
    var var_emer_address = scAjaxGetFieldText("emer_address");
    var var_nm_form_submit = document.F1.nm_form_submit.value;
    var var_nmgp_url_saida = document.F1.nmgp_url_saida.value;
    var var_nmgp_opcao = document.F1.nmgp_opcao.value;
    var var_nmgp_ancora = document.F1.nmgp_ancora.value;
    var var_nmgp_num_form = document.F1.nmgp_num_form.value;
    var var_nmgp_parms = document.F1.nmgp_parms.value;
    var var_script_case_init = document.F1.script_case_init.value;
    var var_csrf_token = scAjaxGetFieldText("csrf_token");
    scAjaxProcOn();
    x_ajax_form_student_registration_submit_form(var_program_id, var_student_status, var_student_id, var_title_id, var_firstname, var_lastname, var_firstnameeng, var_lastnameeng, var_gender, var_student_pid, var_pid_start, var_pid_stop, var_student_dob, var_race_id, var_nationality_id, var_religion_id, var_blood_group_id, var_school_id, var_school_address, var_school_district, var_school_province, var_school_year_grad, var_school_gpa, var_addr_address, var_addr_tambon, var_addr_district, var_addr_province, var_addr_postcode, var_addr_homephone, var_addr_mobilephone, var_addr_email, var_cont_address, var_cont_tambon, var_cont_district, var_cont_province, var_cont_postcode, var_cont_homephone, var_cont_mobilephone, var_cont_email, var_father_name, var_father_pid, var_father_status, var_father_age, var_father_occupation, var_father_annual_income, var_mother_name, var_mother_pid, var_mother_status, var_mother_age, var_mother_occupation, var_mother_annual_income, var_marriage_status, var_parent_name, var_parent_pid, var_parent_status, var_parent_age, var_parent_occupation, var_parent_annual_income, var_emer_contact, var_emer_homephone, var_emer_mobilephone, var_emer_relationship, var_emer_address, var_nm_form_submit, var_nmgp_url_saida, var_nmgp_opcao, var_nmgp_ancora, var_nmgp_num_form, var_nmgp_parms, var_script_case_init, var_csrf_token, do_ajax_form_student_registration_submit_form_cb);
  } // do_ajax_form_student_registration_submit_form

  function do_ajax_form_student_registration_submit_form_cb(sResp)
  {
    scAjaxProcOff();
    oResp = scAjaxResponse(sResp);
    scAjaxCalendarReload();
    scAjaxUpdateErrors("valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors || "menu_link" == document.F1.nmgp_opcao.value)
    {
      $('.sc-js-ui-statusimg').css('display', 'none');
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    if (scAjaxIsOk())
    {
      scAjaxShowMessage();
      scAjaxHideErrorDisplay("table");
      scAjaxHideErrorDisplay("program_id");
      scAjaxHideErrorDisplay("student_status");
      scAjaxHideErrorDisplay("student_id");
      scAjaxHideErrorDisplay("title_id");
      scAjaxHideErrorDisplay("firstname");
      scAjaxHideErrorDisplay("lastname");
      scAjaxHideErrorDisplay("firstnameeng");
      scAjaxHideErrorDisplay("lastnameeng");
      scAjaxHideErrorDisplay("gender");
      scAjaxHideErrorDisplay("student_pid");
      scAjaxHideErrorDisplay("pid_start");
      scAjaxHideErrorDisplay("pid_stop");
      scAjaxHideErrorDisplay("student_dob");
      scAjaxHideErrorDisplay("race_id");
      scAjaxHideErrorDisplay("nationality_id");
      scAjaxHideErrorDisplay("religion_id");
      scAjaxHideErrorDisplay("blood_group_id");
      scAjaxHideErrorDisplay("school_id");
      scAjaxHideErrorDisplay("school_address");
      scAjaxHideErrorDisplay("school_district");
      scAjaxHideErrorDisplay("school_province");
      scAjaxHideErrorDisplay("school_year_grad");
      scAjaxHideErrorDisplay("school_gpa");
      scAjaxHideErrorDisplay("addr_address");
      scAjaxHideErrorDisplay("addr_tambon");
      scAjaxHideErrorDisplay("addr_district");
      scAjaxHideErrorDisplay("addr_province");
      scAjaxHideErrorDisplay("addr_postcode");
      scAjaxHideErrorDisplay("addr_homephone");
      scAjaxHideErrorDisplay("addr_mobilephone");
      scAjaxHideErrorDisplay("addr_email");
      scAjaxHideErrorDisplay("cont_address");
      scAjaxHideErrorDisplay("cont_tambon");
      scAjaxHideErrorDisplay("cont_district");
      scAjaxHideErrorDisplay("cont_province");
      scAjaxHideErrorDisplay("cont_postcode");
      scAjaxHideErrorDisplay("cont_homephone");
      scAjaxHideErrorDisplay("cont_mobilephone");
      scAjaxHideErrorDisplay("cont_email");
      scAjaxHideErrorDisplay("father_name");
      scAjaxHideErrorDisplay("father_pid");
      scAjaxHideErrorDisplay("father_status");
      scAjaxHideErrorDisplay("father_age");
      scAjaxHideErrorDisplay("father_occupation");
      scAjaxHideErrorDisplay("father_annual_income");
      scAjaxHideErrorDisplay("mother_name");
      scAjaxHideErrorDisplay("mother_pid");
      scAjaxHideErrorDisplay("mother_status");
      scAjaxHideErrorDisplay("mother_age");
      scAjaxHideErrorDisplay("mother_occupation");
      scAjaxHideErrorDisplay("mother_annual_income");
      scAjaxHideErrorDisplay("marriage_status");
      scAjaxHideErrorDisplay("parent_name");
      scAjaxHideErrorDisplay("parent_pid");
      scAjaxHideErrorDisplay("parent_status");
      scAjaxHideErrorDisplay("parent_age");
      scAjaxHideErrorDisplay("parent_occupation");
      scAjaxHideErrorDisplay("parent_annual_income");
      scAjaxHideErrorDisplay("emer_contact");
      scAjaxHideErrorDisplay("emer_homephone");
      scAjaxHideErrorDisplay("emer_mobilephone");
      scAjaxHideErrorDisplay("emer_relationship");
      scAjaxHideErrorDisplay("emer_address");
      scLigEditLookupCall();
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['under_dashboard']) {
?>
      var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['parent_widget']; ?>']");
      if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.nm_gp_move) {
        dbParentFrame[0].contentWindow.nm_gp_move("igual");
      }
<?php
}
?>
    }
    Nm_Proc_Atualiz = false;
    if (!scAjaxHasError())
    {
      scAjaxSetFields();
      scAjaxSetMaster();
      if (scInlineFormSend())
      {
        self.parent.tb_remove();
        return;
      }
    }
    scAjaxShowDebug();
    scAjaxSetDisplay();
    scAjaxSetLabel();
    scAjaxSetReadonly();
    scAjaxAlert();
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
    scAjaxRedir();
    if (hasJsFormOnload)
    {
      sc_form_onload();
    }
  } // do_ajax_form_student_registration_submit_form_cb

  var scStatusDetail = {};

  function do_ajax_form_student_registration_navigate_form()
  {
    if (scRefreshTable())
    {
      return;
    }
    scAjaxHideMessage();
    scAjaxHideErrorDisplay("table");
    scAjaxHideErrorDisplay("program_id");
    scAjaxHideErrorDisplay("student_status");
    scAjaxHideErrorDisplay("student_id");
    scAjaxHideErrorDisplay("title_id");
    scAjaxHideErrorDisplay("firstname");
    scAjaxHideErrorDisplay("lastname");
    scAjaxHideErrorDisplay("firstnameeng");
    scAjaxHideErrorDisplay("lastnameeng");
    scAjaxHideErrorDisplay("gender");
    scAjaxHideErrorDisplay("student_pid");
    scAjaxHideErrorDisplay("pid_start");
    scAjaxHideErrorDisplay("pid_stop");
    scAjaxHideErrorDisplay("student_dob");
    scAjaxHideErrorDisplay("race_id");
    scAjaxHideErrorDisplay("nationality_id");
    scAjaxHideErrorDisplay("religion_id");
    scAjaxHideErrorDisplay("blood_group_id");
    scAjaxHideErrorDisplay("school_id");
    scAjaxHideErrorDisplay("school_address");
    scAjaxHideErrorDisplay("school_district");
    scAjaxHideErrorDisplay("school_province");
    scAjaxHideErrorDisplay("school_year_grad");
    scAjaxHideErrorDisplay("school_gpa");
    scAjaxHideErrorDisplay("addr_address");
    scAjaxHideErrorDisplay("addr_tambon");
    scAjaxHideErrorDisplay("addr_district");
    scAjaxHideErrorDisplay("addr_province");
    scAjaxHideErrorDisplay("addr_postcode");
    scAjaxHideErrorDisplay("addr_homephone");
    scAjaxHideErrorDisplay("addr_mobilephone");
    scAjaxHideErrorDisplay("addr_email");
    scAjaxHideErrorDisplay("cont_address");
    scAjaxHideErrorDisplay("cont_tambon");
    scAjaxHideErrorDisplay("cont_district");
    scAjaxHideErrorDisplay("cont_province");
    scAjaxHideErrorDisplay("cont_postcode");
    scAjaxHideErrorDisplay("cont_homephone");
    scAjaxHideErrorDisplay("cont_mobilephone");
    scAjaxHideErrorDisplay("cont_email");
    scAjaxHideErrorDisplay("father_name");
    scAjaxHideErrorDisplay("father_pid");
    scAjaxHideErrorDisplay("father_status");
    scAjaxHideErrorDisplay("father_age");
    scAjaxHideErrorDisplay("father_occupation");
    scAjaxHideErrorDisplay("father_annual_income");
    scAjaxHideErrorDisplay("mother_name");
    scAjaxHideErrorDisplay("mother_pid");
    scAjaxHideErrorDisplay("mother_status");
    scAjaxHideErrorDisplay("mother_age");
    scAjaxHideErrorDisplay("mother_occupation");
    scAjaxHideErrorDisplay("mother_annual_income");
    scAjaxHideErrorDisplay("marriage_status");
    scAjaxHideErrorDisplay("parent_name");
    scAjaxHideErrorDisplay("parent_pid");
    scAjaxHideErrorDisplay("parent_status");
    scAjaxHideErrorDisplay("parent_age");
    scAjaxHideErrorDisplay("parent_occupation");
    scAjaxHideErrorDisplay("parent_annual_income");
    scAjaxHideErrorDisplay("emer_contact");
    scAjaxHideErrorDisplay("emer_homephone");
    scAjaxHideErrorDisplay("emer_mobilephone");
    scAjaxHideErrorDisplay("emer_relationship");
    scAjaxHideErrorDisplay("emer_address");
    var var_id = document.F2.id.value;
    var var_nm_form_submit = document.F2.nm_form_submit.value;
    var var_nmgp_opcao = document.F2.nmgp_opcao.value;
    var var_nmgp_ordem = document.F2.nmgp_ordem.value;
    var var_nmgp_fast_search = document.F2.nmgp_fast_search.value;
    var var_nmgp_cond_fast_search = document.F2.nmgp_cond_fast_search.value;
    var var_nmgp_arg_fast_search = document.F2.nmgp_arg_fast_search.value;
    var var_nmgp_arg_dyn_search = document.F2.nmgp_arg_dyn_search.value;
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn();
    x_ajax_form_student_registration_navigate_form(var_id, var_nm_form_submit, var_nmgp_opcao, var_nmgp_ordem, var_nmgp_fast_search,  var_nmgp_cond_fast_search,  var_nmgp_arg_fast_search, var_nmgp_arg_dyn_search, var_script_case_init, do_ajax_form_student_registration_navigate_form_cb);
  } // do_ajax_form_student_registration_navigate_form

  var scMasterDetailParentIframe = "<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['parent_widget'] ?>";
  var scMasterDetailIframe = {};
<?php
foreach ($this->Ini->sc_lig_iframe as $tmp_i => $tmp_v)
{
?>
  scMasterDetailIframe["<?php echo $tmp_i; ?>"] = "<?php echo $tmp_v; ?>";
<?php
}
?>
  function do_ajax_form_student_registration_navigate_form_cb(sResp)
  {
    scAjaxProcOff();
    oResp = scAjaxResponse(sResp);
    if (oResp['empty_filter'] && oResp['empty_filter'] == "ok")
    {
        document.F5.nmgp_opcao.value = "inicio";
        document.F5.nmgp_parms.value = "";
        document.F5.submit();
    }
    if ("ERROR" == oResp.result)
    {
        scAjaxShowErrorDisplay("table", oResp.errList[0].msgText);
        scAjaxProcOff();
        return;
    }
    else if (oResp["navSummary"].reg_tot == 0)
    {
       $("#sc-ui-empty-form").show();
       sc_hide_form_student_registration_form();
    }
    sc_mupload_ok = true;
    scAjaxSetFields();
    document.F2.id.value = scAjaxGetKeyValue("id");
    scAjaxSetSummary();
    scAjaxSetNavpage();
    scAjaxShowDebug();
    scAjaxSetLabel(true);
    scAjaxSetReadonly(true);
    scAjaxSetMaster();
    scAjaxSetNavStatus("t");
    scAjaxSetNavStatus("b");
    scAjaxSetDisplay(true);
    scAjaxSetBtnVars();
    $('.sc-js-ui-statusimg').css('display', 'none');
    scAjaxAlert();
    scAjaxMessage();
    scAjaxJavascript();
    scQSInit = true;
    scQSInitVal = $("#SC_fast_search_t").val();
    scQuickSearchKeyUp('t', null);
    $('#SC_fast_search_t').blur();
    scQuickSearchInit(true, '');
    scQSInit = false;
    scAjaxSetFocus();
<?php
if ($this->Embutida_form)
{
?>
    do_ajax_form_student_registration_restore_buttons();
<?php
}
?>
    if (hasJsFormOnload)
    {
      sc_form_onload();
    }
  } // do_ajax_form_student_registration_navigate_form_cb
  function sc_hide_form_student_registration_form()
  {
    for (var block_id in ajax_block_id) {
      $("#div_" + ajax_block_id[block_id]).hide();
    }
  } // sc_hide_form_student_registration_form


  function scAjaxDetailProc()
  {
    return true;
  } // scAjaxDetailProc


  var ajax_error_geral = "";

  var ajax_error_type = new Array("valid", "onblur", "onchange", "onclick", "onfocus");

  var ajax_field_list = new Array();
  var ajax_field_Dt_Hr = new Array();
  ajax_field_list[0] = "program_id";
  ajax_field_list[1] = "student_status";
  ajax_field_list[2] = "student_id";
  ajax_field_list[3] = "title_id";
  ajax_field_list[4] = "firstname";
  ajax_field_list[5] = "lastname";
  ajax_field_list[6] = "firstnameeng";
  ajax_field_list[7] = "lastnameeng";
  ajax_field_list[8] = "gender";
  ajax_field_list[9] = "student_pid";
  ajax_field_list[10] = "pid_start";
  ajax_field_list[11] = "pid_stop";
  ajax_field_list[12] = "student_dob";
  ajax_field_list[13] = "race_id";
  ajax_field_list[14] = "nationality_id";
  ajax_field_list[15] = "religion_id";
  ajax_field_list[16] = "blood_group_id";
  ajax_field_list[17] = "school_id";
  ajax_field_list[18] = "school_address";
  ajax_field_list[19] = "school_district";
  ajax_field_list[20] = "school_province";
  ajax_field_list[21] = "school_year_grad";
  ajax_field_list[22] = "school_gpa";
  ajax_field_list[23] = "addr_address";
  ajax_field_list[24] = "addr_tambon";
  ajax_field_list[25] = "addr_district";
  ajax_field_list[26] = "addr_province";
  ajax_field_list[27] = "addr_postcode";
  ajax_field_list[28] = "addr_homephone";
  ajax_field_list[29] = "addr_mobilephone";
  ajax_field_list[30] = "addr_email";
  ajax_field_list[31] = "cont_address";
  ajax_field_list[32] = "cont_tambon";
  ajax_field_list[33] = "cont_district";
  ajax_field_list[34] = "cont_province";
  ajax_field_list[35] = "cont_postcode";
  ajax_field_list[36] = "cont_homephone";
  ajax_field_list[37] = "cont_mobilephone";
  ajax_field_list[38] = "cont_email";
  ajax_field_list[39] = "father_name";
  ajax_field_list[40] = "father_pid";
  ajax_field_list[41] = "father_status";
  ajax_field_list[42] = "father_age";
  ajax_field_list[43] = "father_occupation";
  ajax_field_list[44] = "father_annual_income";
  ajax_field_list[45] = "mother_name";
  ajax_field_list[46] = "mother_pid";
  ajax_field_list[47] = "mother_status";
  ajax_field_list[48] = "mother_age";
  ajax_field_list[49] = "mother_occupation";
  ajax_field_list[50] = "mother_annual_income";
  ajax_field_list[51] = "marriage_status";
  ajax_field_list[52] = "parent_name";
  ajax_field_list[53] = "parent_pid";
  ajax_field_list[54] = "parent_status";
  ajax_field_list[55] = "parent_age";
  ajax_field_list[56] = "parent_occupation";
  ajax_field_list[57] = "parent_annual_income";
  ajax_field_list[58] = "emer_contact";
  ajax_field_list[59] = "emer_homephone";
  ajax_field_list[60] = "emer_mobilephone";
  ajax_field_list[61] = "emer_relationship";
  ajax_field_list[62] = "emer_address";

  var ajax_block_list = new Array();
  ajax_block_list[0] = "0";
  ajax_block_list[1] = "1";
  ajax_block_list[2] = "2";
  ajax_block_list[3] = "3";
  ajax_block_list[4] = "4";

  var ajax_error_list = {
    "program_id": {"label": "Program", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "student_status": {"label": "Student Status", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "student_id": {"label": "Student ID", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "title_id": {"label": "Title", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "firstname": {"label": "First name", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "lastname": {"label": "Last name", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "firstnameeng": {"label": "Firstname Eng", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "lastnameeng": {"label": "Lastname Eng", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "gender": {"label": "Gender", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "student_pid": {"label": "Student PID", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "pid_start": {"label": "PID Start Date", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "pid_stop": {"label": "PID Expired Date", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "student_dob": {"label": "Student DOB", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "race_id": {"label": "Race", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "nationality_id": {"label": "Nationality", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "religion_id": {"label": "Religion", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "blood_group_id": {"label": "Blood Group", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "school_id": {"label": "School", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "school_address": {"label": "School Address", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "school_district": {"label": "School District", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "school_province": {"label": "School Province", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "school_year_grad": {"label": "School Year Grad", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "school_gpa": {"label": "School Gpa", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "addr_address": {"label": "Addr Address", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "addr_tambon": {"label": "Addr Tambon", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "addr_district": {"label": "Addr District", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "addr_province": {"label": "Addr Province", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "addr_postcode": {"label": "Addr Postcode", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "addr_homephone": {"label": "Addr Homephone", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "addr_mobilephone": {"label": "Addr Mobilephone", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "addr_email": {"label": "Addr Email", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cont_address": {"label": "Contact Address", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cont_tambon": {"label": "Contact Tambon", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cont_district": {"label": "Contact District", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cont_province": {"label": "Contact Province", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cont_postcode": {"label": "Contact Postcode", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cont_homephone": {"label": "Contact Homephone", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cont_mobilephone": {"label": "Contact Mobilephone", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cont_email": {"label": "Contact Email", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "father_name": {"label": "Father Name", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "father_pid": {"label": "Father PID", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "father_status": {"label": "Father Status", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "father_age": {"label": "Father Age", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "father_occupation": {"label": "Father Occupation", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "father_annual_income": {"label": "Father Annual Income", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "mother_name": {"label": "Mother Name", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "mother_pid": {"label": "Mother PID", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "mother_status": {"label": "Mother Status", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "mother_age": {"label": "Mother Age", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "mother_occupation": {"label": "Mother Occupation", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "mother_annual_income": {"label": "Mother Annual Income", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "marriage_status": {"label": "Marriage Status", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "parent_name": {"label": "Parent Name", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "parent_pid": {"label": "Parent PID", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "parent_status": {"label": "Parent Status", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "parent_age": {"label": "Parent Age", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "parent_occupation": {"label": "Parent Occupation", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "parent_annual_income": {"label": "Parent Annual Income", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "emer_contact": {"label": "Emergency Contact", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "emer_homephone": {"label": "Emergency Homephone", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "emer_mobilephone": {"label": "Emergency Mobilephone", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "emer_relationship": {"label": "Emergency Relationship", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "emer_address": {"label": "Emergency Address", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5}
  };
  var ajax_error_timeout = 5;

  var ajax_block_id = {
    "0": "hidden_bloco_0",
    "1": "hidden_bloco_1",
    "2": "hidden_bloco_2",
    "3": "hidden_bloco_3",
    "4": "hidden_bloco_4"
  };

  var ajax_block_tab = {
    "hidden_bloco_0": "",
    "hidden_bloco_1": "",
    "hidden_bloco_2": "",
    "hidden_bloco_3": "",
    "hidden_bloco_4": ""
  };

  var ajax_field_mult = {
    "program_id": new Array(),
    "student_status": new Array(),
    "student_id": new Array(),
    "title_id": new Array(),
    "firstname": new Array(),
    "lastname": new Array(),
    "firstnameeng": new Array(),
    "lastnameeng": new Array(),
    "gender": new Array(),
    "student_pid": new Array(),
    "pid_start": new Array(),
    "pid_stop": new Array(),
    "student_dob": new Array(),
    "race_id": new Array(),
    "nationality_id": new Array(),
    "religion_id": new Array(),
    "blood_group_id": new Array(),
    "school_id": new Array(),
    "school_address": new Array(),
    "school_district": new Array(),
    "school_province": new Array(),
    "school_year_grad": new Array(),
    "school_gpa": new Array(),
    "addr_address": new Array(),
    "addr_tambon": new Array(),
    "addr_district": new Array(),
    "addr_province": new Array(),
    "addr_postcode": new Array(),
    "addr_homephone": new Array(),
    "addr_mobilephone": new Array(),
    "addr_email": new Array(),
    "cont_address": new Array(),
    "cont_tambon": new Array(),
    "cont_district": new Array(),
    "cont_province": new Array(),
    "cont_postcode": new Array(),
    "cont_homephone": new Array(),
    "cont_mobilephone": new Array(),
    "cont_email": new Array(),
    "father_name": new Array(),
    "father_pid": new Array(),
    "father_status": new Array(),
    "father_age": new Array(),
    "father_occupation": new Array(),
    "father_annual_income": new Array(),
    "mother_name": new Array(),
    "mother_pid": new Array(),
    "mother_status": new Array(),
    "mother_age": new Array(),
    "mother_occupation": new Array(),
    "mother_annual_income": new Array(),
    "marriage_status": new Array(),
    "parent_name": new Array(),
    "parent_pid": new Array(),
    "parent_status": new Array(),
    "parent_age": new Array(),
    "parent_occupation": new Array(),
    "parent_annual_income": new Array(),
    "emer_contact": new Array(),
    "emer_homephone": new Array(),
    "emer_mobilephone": new Array(),
    "emer_relationship": new Array(),
    "emer_address": new Array()
  };
  ajax_field_mult["program_id"][1] = "program_id";
  ajax_field_mult["student_status"][1] = "student_status";
  ajax_field_mult["student_id"][1] = "student_id";
  ajax_field_mult["title_id"][1] = "title_id";
  ajax_field_mult["firstname"][1] = "firstname";
  ajax_field_mult["lastname"][1] = "lastname";
  ajax_field_mult["firstnameeng"][1] = "firstnameeng";
  ajax_field_mult["lastnameeng"][1] = "lastnameeng";
  ajax_field_mult["gender"][1] = "gender";
  ajax_field_mult["student_pid"][1] = "student_pid";
  ajax_field_mult["pid_start"][1] = "pid_start";
  ajax_field_mult["pid_stop"][1] = "pid_stop";
  ajax_field_mult["student_dob"][1] = "student_dob";
  ajax_field_mult["race_id"][1] = "race_id";
  ajax_field_mult["nationality_id"][1] = "nationality_id";
  ajax_field_mult["religion_id"][1] = "religion_id";
  ajax_field_mult["blood_group_id"][1] = "blood_group_id";
  ajax_field_mult["school_id"][1] = "school_id";
  ajax_field_mult["school_address"][1] = "school_address";
  ajax_field_mult["school_district"][1] = "school_district";
  ajax_field_mult["school_province"][1] = "school_province";
  ajax_field_mult["school_year_grad"][1] = "school_year_grad";
  ajax_field_mult["school_gpa"][1] = "school_gpa";
  ajax_field_mult["addr_address"][1] = "addr_address";
  ajax_field_mult["addr_tambon"][1] = "addr_tambon";
  ajax_field_mult["addr_district"][1] = "addr_district";
  ajax_field_mult["addr_province"][1] = "addr_province";
  ajax_field_mult["addr_postcode"][1] = "addr_postcode";
  ajax_field_mult["addr_homephone"][1] = "addr_homephone";
  ajax_field_mult["addr_mobilephone"][1] = "addr_mobilephone";
  ajax_field_mult["addr_email"][1] = "addr_email";
  ajax_field_mult["cont_address"][1] = "cont_address";
  ajax_field_mult["cont_tambon"][1] = "cont_tambon";
  ajax_field_mult["cont_district"][1] = "cont_district";
  ajax_field_mult["cont_province"][1] = "cont_province";
  ajax_field_mult["cont_postcode"][1] = "cont_postcode";
  ajax_field_mult["cont_homephone"][1] = "cont_homephone";
  ajax_field_mult["cont_mobilephone"][1] = "cont_mobilephone";
  ajax_field_mult["cont_email"][1] = "cont_email";
  ajax_field_mult["father_name"][1] = "father_name";
  ajax_field_mult["father_pid"][1] = "father_pid";
  ajax_field_mult["father_status"][1] = "father_status";
  ajax_field_mult["father_age"][1] = "father_age";
  ajax_field_mult["father_occupation"][1] = "father_occupation";
  ajax_field_mult["father_annual_income"][1] = "father_annual_income";
  ajax_field_mult["mother_name"][1] = "mother_name";
  ajax_field_mult["mother_pid"][1] = "mother_pid";
  ajax_field_mult["mother_status"][1] = "mother_status";
  ajax_field_mult["mother_age"][1] = "mother_age";
  ajax_field_mult["mother_occupation"][1] = "mother_occupation";
  ajax_field_mult["mother_annual_income"][1] = "mother_annual_income";
  ajax_field_mult["marriage_status"][1] = "marriage_status";
  ajax_field_mult["parent_name"][1] = "parent_name";
  ajax_field_mult["parent_pid"][1] = "parent_pid";
  ajax_field_mult["parent_status"][1] = "parent_status";
  ajax_field_mult["parent_age"][1] = "parent_age";
  ajax_field_mult["parent_occupation"][1] = "parent_occupation";
  ajax_field_mult["parent_annual_income"][1] = "parent_annual_income";
  ajax_field_mult["emer_contact"][1] = "emer_contact";
  ajax_field_mult["emer_homephone"][1] = "emer_homephone";
  ajax_field_mult["emer_mobilephone"][1] = "emer_mobilephone";
  ajax_field_mult["emer_relationship"][1] = "emer_relationship";
  ajax_field_mult["emer_address"][1] = "emer_address";

  var ajax_field_id = {
    "program_id": new Array("hidden_field_label_program_id", "hidden_field_data_program_id"),
    "student_status": new Array("hidden_field_label_student_status", "hidden_field_data_student_status"),
    "student_id": new Array("hidden_field_label_student_id", "hidden_field_data_student_id"),
    "title_id": new Array("hidden_field_label_title_id", "hidden_field_data_title_id"),
    "firstname": new Array("hidden_field_label_firstname", "hidden_field_data_firstname"),
    "lastname": new Array("hidden_field_label_lastname", "hidden_field_data_lastname"),
    "firstnameeng": new Array("hidden_field_label_firstnameeng", "hidden_field_data_firstnameeng"),
    "lastnameeng": new Array("hidden_field_label_lastnameeng", "hidden_field_data_lastnameeng"),
    "gender": new Array("hidden_field_label_gender", "hidden_field_data_gender"),
    "student_pid": new Array("hidden_field_label_student_pid", "hidden_field_data_student_pid"),
    "pid_start": new Array("hidden_field_label_pid_start", "hidden_field_data_pid_start"),
    "pid_stop": new Array("hidden_field_label_pid_stop", "hidden_field_data_pid_stop"),
    "student_dob": new Array("hidden_field_label_student_dob", "hidden_field_data_student_dob"),
    "race_id": new Array("hidden_field_label_race_id", "hidden_field_data_race_id"),
    "nationality_id": new Array("hidden_field_label_nationality_id", "hidden_field_data_nationality_id"),
    "religion_id": new Array("hidden_field_label_religion_id", "hidden_field_data_religion_id"),
    "blood_group_id": new Array("hidden_field_label_blood_group_id", "hidden_field_data_blood_group_id"),
    "school_id": new Array("hidden_field_label_school_id", "hidden_field_data_school_id"),
    "school_address": new Array("hidden_field_label_school_address", "hidden_field_data_school_address"),
    "school_district": new Array("hidden_field_label_school_district", "hidden_field_data_school_district"),
    "school_province": new Array("hidden_field_label_school_province", "hidden_field_data_school_province"),
    "school_year_grad": new Array("hidden_field_label_school_year_grad", "hidden_field_data_school_year_grad"),
    "school_gpa": new Array("hidden_field_label_school_gpa", "hidden_field_data_school_gpa"),
    "addr_address": new Array("hidden_field_label_addr_address", "hidden_field_data_addr_address"),
    "addr_tambon": new Array("hidden_field_label_addr_tambon", "hidden_field_data_addr_tambon"),
    "addr_district": new Array("hidden_field_label_addr_district", "hidden_field_data_addr_district"),
    "addr_province": new Array("hidden_field_label_addr_province", "hidden_field_data_addr_province"),
    "addr_postcode": new Array("hidden_field_label_addr_postcode", "hidden_field_data_addr_postcode"),
    "addr_homephone": new Array("hidden_field_label_addr_homephone", "hidden_field_data_addr_homephone"),
    "addr_mobilephone": new Array("hidden_field_label_addr_mobilephone", "hidden_field_data_addr_mobilephone"),
    "addr_email": new Array("hidden_field_label_addr_email", "hidden_field_data_addr_email"),
    "cont_address": new Array("hidden_field_label_cont_address", "hidden_field_data_cont_address"),
    "cont_tambon": new Array("hidden_field_label_cont_tambon", "hidden_field_data_cont_tambon"),
    "cont_district": new Array("hidden_field_label_cont_district", "hidden_field_data_cont_district"),
    "cont_province": new Array("hidden_field_label_cont_province", "hidden_field_data_cont_province"),
    "cont_postcode": new Array("hidden_field_label_cont_postcode", "hidden_field_data_cont_postcode"),
    "cont_homephone": new Array("hidden_field_label_cont_homephone", "hidden_field_data_cont_homephone"),
    "cont_mobilephone": new Array("hidden_field_label_cont_mobilephone", "hidden_field_data_cont_mobilephone"),
    "cont_email": new Array("hidden_field_label_cont_email", "hidden_field_data_cont_email"),
    "father_name": new Array("hidden_field_label_father_name", "hidden_field_data_father_name"),
    "father_pid": new Array("hidden_field_label_father_pid", "hidden_field_data_father_pid"),
    "father_status": new Array("hidden_field_label_father_status", "hidden_field_data_father_status"),
    "father_age": new Array("hidden_field_label_father_age", "hidden_field_data_father_age"),
    "father_occupation": new Array("hidden_field_label_father_occupation", "hidden_field_data_father_occupation"),
    "father_annual_income": new Array("hidden_field_label_father_annual_income", "hidden_field_data_father_annual_income"),
    "mother_name": new Array("hidden_field_label_mother_name", "hidden_field_data_mother_name"),
    "mother_pid": new Array("hidden_field_label_mother_pid", "hidden_field_data_mother_pid"),
    "mother_status": new Array("hidden_field_label_mother_status", "hidden_field_data_mother_status"),
    "mother_age": new Array("hidden_field_label_mother_age", "hidden_field_data_mother_age"),
    "mother_occupation": new Array("hidden_field_label_mother_occupation", "hidden_field_data_mother_occupation"),
    "mother_annual_income": new Array("hidden_field_label_mother_annual_income", "hidden_field_data_mother_annual_income"),
    "marriage_status": new Array("hidden_field_label_marriage_status", "hidden_field_data_marriage_status"),
    "parent_name": new Array("hidden_field_label_parent_name", "hidden_field_data_parent_name"),
    "parent_pid": new Array("hidden_field_label_parent_pid", "hidden_field_data_parent_pid"),
    "parent_status": new Array("hidden_field_label_parent_status", "hidden_field_data_parent_status"),
    "parent_age": new Array("hidden_field_label_parent_age", "hidden_field_data_parent_age"),
    "parent_occupation": new Array("hidden_field_label_parent_occupation", "hidden_field_data_parent_occupation"),
    "parent_annual_income": new Array("hidden_field_label_parent_annual_income", "hidden_field_data_parent_annual_income"),
    "emer_contact": new Array("hidden_field_label_emer_contact", "hidden_field_data_emer_contact"),
    "emer_homephone": new Array("hidden_field_label_emer_homephone", "hidden_field_data_emer_homephone"),
    "emer_mobilephone": new Array("hidden_field_label_emer_mobilephone", "hidden_field_data_emer_mobilephone"),
    "emer_relationship": new Array("hidden_field_label_emer_relationship", "hidden_field_data_emer_relationship"),
    "emer_address": new Array("hidden_field_label_emer_address", "hidden_field_data_emer_address")
  };

  var ajax_read_only = {
    "program_id": "off",
    "student_status": "off",
    "student_id": "off",
    "title_id": "off",
    "firstname": "off",
    "lastname": "off",
    "firstnameeng": "off",
    "lastnameeng": "off",
    "gender": "off",
    "student_pid": "off",
    "pid_start": "off",
    "pid_stop": "off",
    "student_dob": "off",
    "race_id": "off",
    "nationality_id": "off",
    "religion_id": "off",
    "blood_group_id": "off",
    "school_id": "off",
    "school_address": "off",
    "school_district": "off",
    "school_province": "off",
    "school_year_grad": "off",
    "school_gpa": "off",
    "addr_address": "off",
    "addr_tambon": "off",
    "addr_district": "off",
    "addr_province": "off",
    "addr_postcode": "off",
    "addr_homephone": "off",
    "addr_mobilephone": "off",
    "addr_email": "off",
    "cont_address": "off",
    "cont_tambon": "off",
    "cont_district": "off",
    "cont_province": "off",
    "cont_postcode": "off",
    "cont_homephone": "off",
    "cont_mobilephone": "off",
    "cont_email": "off",
    "father_name": "off",
    "father_pid": "off",
    "father_status": "off",
    "father_age": "off",
    "father_occupation": "off",
    "father_annual_income": "off",
    "mother_name": "off",
    "mother_pid": "off",
    "mother_status": "off",
    "mother_age": "off",
    "mother_occupation": "off",
    "mother_annual_income": "off",
    "marriage_status": "off",
    "parent_name": "off",
    "parent_pid": "off",
    "parent_status": "off",
    "parent_age": "off",
    "parent_occupation": "off",
    "parent_annual_income": "off",
    "emer_contact": "off",
    "emer_homephone": "off",
    "emer_mobilephone": "off",
    "emer_relationship": "off",
    "emer_address": "off"
  };
  var bRefreshTable = false;
  function scRefreshTable()
  {
    return false;
  }

  function scAjaxDetailValue(sIndex, sValue)
  {
    var aValue = new Array();
    aValue[0] = {"value" : sValue};
    if ("program_id" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("student_status" == sIndex)
    {
      scAjaxSetFieldRadio(sIndex, aValue, null, 1, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("student_id" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("title_id" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("firstname" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("lastname" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("firstnameeng" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("lastnameeng" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("gender" == sIndex)
    {
      scAjaxSetFieldRadio(sIndex, aValue, null, 1, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("student_pid" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("pid_start" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("pid_stop" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("student_dob" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("race_id" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("nationality_id" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("religion_id" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("blood_group_id" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("school_id" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("school_address" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("school_district" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("school_province" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("school_year_grad" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("school_gpa" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("addr_address" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("addr_tambon" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("addr_district" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("addr_province" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("addr_postcode" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("addr_homephone" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("addr_mobilephone" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("addr_email" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("cont_address" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("cont_tambon" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("cont_district" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("cont_province" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("cont_postcode" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("cont_homephone" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("cont_mobilephone" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("cont_email" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("father_name" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("father_pid" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("father_status" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("father_age" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("father_occupation" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("father_annual_income" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("mother_name" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("mother_pid" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("mother_status" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("mother_age" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("mother_occupation" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("mother_annual_income" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("marriage_status" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("parent_name" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("parent_pid" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("parent_status" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("parent_age" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("parent_occupation" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("parent_annual_income" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("emer_contact" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("emer_homephone" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("emer_mobilephone" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("emer_relationship" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("emer_address" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    scAjaxSetFieldInnerHtml(sIndex, aValue);
  }
 </SCRIPT>
