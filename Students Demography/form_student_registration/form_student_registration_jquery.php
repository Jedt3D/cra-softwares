
function scJQGeneralAdd() {
  $('input:text.sc-js-input').listen();
  $('input:password.sc-js-input').listen();
  $('input:checkbox.sc-js-input').listen();
  $('input:radio.sc-js-input').listen();
  $('select.sc-js-input').listen();
  $('textarea.sc-js-input').listen();

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($oField.length > 0) {
    switch ($oField[0].name) {
      case 'program_id':
      case 'student_status':
      case 'student_id':
      case 'title_id':
      case 'firstname':
      case 'lastname':
      case 'firstnameeng':
      case 'lastnameeng':
      case 'gender':
      case 'student_pid':
      case 'pid_start':
      case 'pid_stop':
      case 'student_dob':
      case 'race_id':
      case 'nationality_id':
      case 'religion_id':
      case 'blood_group_id':
        sc_exib_ocult_pag('form_student_registration_form0');
        break;
      case 'school_id':
      case 'school_address':
      case 'school_district':
      case 'school_province':
      case 'school_year_grad':
      case 'school_gpa':
        sc_exib_ocult_pag('form_student_registration_form1');
        break;
      case 'addr_address':
      case 'addr_tambon':
      case 'addr_district':
      case 'addr_province':
      case 'addr_postcode':
      case 'addr_homephone':
      case 'addr_mobilephone':
      case 'addr_email':
      case 'cont_address':
      case 'cont_tambon':
      case 'cont_district':
      case 'cont_province':
      case 'cont_postcode':
      case 'cont_homephone':
      case 'cont_mobilephone':
      case 'cont_email':
        sc_exib_ocult_pag('form_student_registration_form2');
        break;
      case 'father_name':
      case 'father_pid':
      case 'father_status':
      case 'father_age':
      case 'father_occupation':
      case 'father_annual_income':
      case 'mother_name':
      case 'mother_pid':
      case 'mother_status':
      case 'mother_age':
      case 'mother_occupation':
      case 'mother_annual_income':
      case 'marriage_status':
        sc_exib_ocult_pag('form_student_registration_form3');
        break;
      case 'parent_name':
      case 'parent_pid':
      case 'parent_status':
      case 'parent_age':
      case 'parent_occupation':
      case 'parent_annual_income':
      case 'emer_contact':
      case 'emer_homephone':
      case 'emer_mobilephone':
      case 'emer_relationship':
      case 'emer_address':
        sc_exib_ocult_pag('form_student_registration_form4');
        break;
    }
  }

  if (false == scSetFocusOnField($oField) && $("#id_ac_" + sField).length > 0) {
    if (false == scSetFocusOnField($("#id_ac_" + sField))) {
      setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["program_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["student_status" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["student_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["title_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["firstname" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["lastname" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["firstnameeng" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["lastnameeng" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["gender" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["student_pid" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pid_start" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pid_stop" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["student_dob" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["race_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nationality_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["religion_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["blood_group_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["school_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["school_address" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["school_district" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["school_province" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["school_year_grad" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["school_gpa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["addr_address" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["addr_tambon" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["addr_district" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["addr_province" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["addr_postcode" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["addr_homephone" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["addr_mobilephone" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["addr_email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cont_address" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cont_tambon" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cont_district" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cont_province" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cont_postcode" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cont_homephone" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cont_mobilephone" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cont_email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["father_name" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["father_pid" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["father_status" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["father_age" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["father_occupation" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["father_annual_income" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["mother_name" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["mother_pid" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["mother_status" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["mother_age" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["mother_occupation" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["mother_annual_income" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["marriage_status" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["parent_name" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["parent_pid" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["parent_status" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["parent_age" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["parent_occupation" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["parent_annual_income" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["emer_contact" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["emer_homephone" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["emer_mobilephone" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["emer_relationship" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["emer_address" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["program_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["program_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["student_status" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["student_status" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["student_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["student_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["title_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["title_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["firstname" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["firstname" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lastname" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lastname" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["firstnameeng" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["firstnameeng" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lastnameeng" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lastnameeng" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gender" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gender" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["student_pid" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["student_pid" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pid_start" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pid_start" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pid_stop" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pid_stop" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["student_dob" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["student_dob" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["race_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["race_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nationality_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nationality_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["religion_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["religion_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["blood_group_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["blood_group_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["school_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["school_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["school_address" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["school_address" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["school_district" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["school_district" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["school_province" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["school_province" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["school_year_grad" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["school_year_grad" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["school_gpa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["school_gpa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["addr_address" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["addr_address" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["addr_tambon" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["addr_tambon" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["addr_district" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["addr_district" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["addr_province" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["addr_province" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["addr_postcode" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["addr_postcode" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["addr_homephone" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["addr_homephone" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["addr_mobilephone" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["addr_mobilephone" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["addr_email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["addr_email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cont_address" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cont_address" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cont_tambon" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cont_tambon" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cont_district" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cont_district" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cont_province" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cont_province" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cont_postcode" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cont_postcode" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cont_homephone" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cont_homephone" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cont_mobilephone" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cont_mobilephone" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cont_email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cont_email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["father_name" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["father_name" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["father_pid" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["father_pid" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["father_status" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["father_status" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["father_age" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["father_age" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["father_occupation" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["father_occupation" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["father_annual_income" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["father_annual_income" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mother_name" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mother_name" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mother_pid" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mother_pid" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mother_status" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mother_status" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mother_age" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mother_age" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mother_occupation" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mother_occupation" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mother_annual_income" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mother_annual_income" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["marriage_status" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["marriage_status" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["parent_name" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["parent_name" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["parent_pid" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["parent_pid" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["parent_status" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["parent_status" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["parent_age" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["parent_age" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["parent_occupation" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["parent_occupation" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["parent_annual_income" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["parent_annual_income" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emer_contact" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emer_contact" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emer_homephone" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emer_homephone" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emer_mobilephone" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emer_mobilephone" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emer_relationship" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emer_relationship" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emer_address" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emer_address" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_student_id' + iSeqRow).bind('blur', function() { sc_form_student_registration_student_id_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_student_registration_student_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_program_id' + iSeqRow).bind('blur', function() { sc_form_student_registration_program_id_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_student_registration_program_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_title_id' + iSeqRow).bind('blur', function() { sc_form_student_registration_title_id_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_student_registration_title_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_firstname' + iSeqRow).bind('blur', function() { sc_form_student_registration_firstname_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_student_registration_firstname_onfocus(this, iSeqRow) });
  $('#id_sc_field_lastname' + iSeqRow).bind('blur', function() { sc_form_student_registration_lastname_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_student_registration_lastname_onfocus(this, iSeqRow) });
  $('#id_sc_field_gender' + iSeqRow).bind('blur', function() { sc_form_student_registration_gender_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_student_registration_gender_onfocus(this, iSeqRow) });
  $('#id_sc_field_student_pid' + iSeqRow).bind('blur', function() { sc_form_student_registration_student_pid_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_student_registration_student_pid_onfocus(this, iSeqRow) });
  $('#id_sc_field_student_dob' + iSeqRow).bind('blur', function() { sc_form_student_registration_student_dob_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_student_registration_student_dob_onfocus(this, iSeqRow) });
  $('#id_sc_field_race_id' + iSeqRow).bind('blur', function() { sc_form_student_registration_race_id_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_student_registration_race_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_nationality_id' + iSeqRow).bind('blur', function() { sc_form_student_registration_nationality_id_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_student_registration_nationality_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_religion_id' + iSeqRow).bind('blur', function() { sc_form_student_registration_religion_id_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_student_registration_religion_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_blood_group_id' + iSeqRow).bind('blur', function() { sc_form_student_registration_blood_group_id_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_student_registration_blood_group_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_school_id' + iSeqRow).bind('blur', function() { sc_form_student_registration_school_id_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_student_registration_school_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_school_address' + iSeqRow).bind('blur', function() { sc_form_student_registration_school_address_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_student_registration_school_address_onfocus(this, iSeqRow) });
  $('#id_sc_field_school_district' + iSeqRow).bind('blur', function() { sc_form_student_registration_school_district_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_student_registration_school_district_onfocus(this, iSeqRow) });
  $('#id_sc_field_school_province' + iSeqRow).bind('blur', function() { sc_form_student_registration_school_province_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_student_registration_school_province_onfocus(this, iSeqRow) });
  $('#id_sc_field_school_year_grad' + iSeqRow).bind('blur', function() { sc_form_student_registration_school_year_grad_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_student_registration_school_year_grad_onfocus(this, iSeqRow) });
  $('#id_sc_field_school_gpa' + iSeqRow).bind('blur', function() { sc_form_student_registration_school_gpa_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_student_registration_school_gpa_onfocus(this, iSeqRow) });
  $('#id_sc_field_addr_address' + iSeqRow).bind('blur', function() { sc_form_student_registration_addr_address_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_student_registration_addr_address_onfocus(this, iSeqRow) });
  $('#id_sc_field_addr_tambon' + iSeqRow).bind('blur', function() { sc_form_student_registration_addr_tambon_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_student_registration_addr_tambon_onfocus(this, iSeqRow) });
  $('#id_sc_field_addr_district' + iSeqRow).bind('blur', function() { sc_form_student_registration_addr_district_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_student_registration_addr_district_onfocus(this, iSeqRow) });
  $('#id_sc_field_addr_province' + iSeqRow).bind('blur', function() { sc_form_student_registration_addr_province_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_student_registration_addr_province_onfocus(this, iSeqRow) });
  $('#id_sc_field_addr_postcode' + iSeqRow).bind('blur', function() { sc_form_student_registration_addr_postcode_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_student_registration_addr_postcode_onfocus(this, iSeqRow) });
  $('#id_sc_field_addr_homephone' + iSeqRow).bind('blur', function() { sc_form_student_registration_addr_homephone_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_student_registration_addr_homephone_onfocus(this, iSeqRow) });
  $('#id_sc_field_addr_mobilephone' + iSeqRow).bind('blur', function() { sc_form_student_registration_addr_mobilephone_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_student_registration_addr_mobilephone_onfocus(this, iSeqRow) });
  $('#id_sc_field_addr_email' + iSeqRow).bind('blur', function() { sc_form_student_registration_addr_email_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_student_registration_addr_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_cont_address' + iSeqRow).bind('blur', function() { sc_form_student_registration_cont_address_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_student_registration_cont_address_onfocus(this, iSeqRow) });
  $('#id_sc_field_cont_tambon' + iSeqRow).bind('blur', function() { sc_form_student_registration_cont_tambon_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_student_registration_cont_tambon_onfocus(this, iSeqRow) });
  $('#id_sc_field_cont_district' + iSeqRow).bind('blur', function() { sc_form_student_registration_cont_district_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_student_registration_cont_district_onfocus(this, iSeqRow) });
  $('#id_sc_field_cont_province' + iSeqRow).bind('blur', function() { sc_form_student_registration_cont_province_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_student_registration_cont_province_onfocus(this, iSeqRow) });
  $('#id_sc_field_cont_postcode' + iSeqRow).bind('blur', function() { sc_form_student_registration_cont_postcode_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_student_registration_cont_postcode_onfocus(this, iSeqRow) });
  $('#id_sc_field_cont_homephone' + iSeqRow).bind('blur', function() { sc_form_student_registration_cont_homephone_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_student_registration_cont_homephone_onfocus(this, iSeqRow) });
  $('#id_sc_field_cont_mobilephone' + iSeqRow).bind('blur', function() { sc_form_student_registration_cont_mobilephone_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_student_registration_cont_mobilephone_onfocus(this, iSeqRow) });
  $('#id_sc_field_cont_email' + iSeqRow).bind('blur', function() { sc_form_student_registration_cont_email_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_student_registration_cont_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_father_name' + iSeqRow).bind('blur', function() { sc_form_student_registration_father_name_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_student_registration_father_name_onfocus(this, iSeqRow) });
  $('#id_sc_field_father_pid' + iSeqRow).bind('blur', function() { sc_form_student_registration_father_pid_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_student_registration_father_pid_onfocus(this, iSeqRow) });
  $('#id_sc_field_father_status' + iSeqRow).bind('blur', function() { sc_form_student_registration_father_status_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_student_registration_father_status_onfocus(this, iSeqRow) });
  $('#id_sc_field_father_age' + iSeqRow).bind('blur', function() { sc_form_student_registration_father_age_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_student_registration_father_age_onfocus(this, iSeqRow) });
  $('#id_sc_field_father_occupation' + iSeqRow).bind('blur', function() { sc_form_student_registration_father_occupation_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_student_registration_father_occupation_onfocus(this, iSeqRow) });
  $('#id_sc_field_father_annual_income' + iSeqRow).bind('blur', function() { sc_form_student_registration_father_annual_income_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_student_registration_father_annual_income_onfocus(this, iSeqRow) });
  $('#id_sc_field_mother_name' + iSeqRow).bind('blur', function() { sc_form_student_registration_mother_name_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_student_registration_mother_name_onfocus(this, iSeqRow) });
  $('#id_sc_field_mother_pid' + iSeqRow).bind('blur', function() { sc_form_student_registration_mother_pid_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_student_registration_mother_pid_onfocus(this, iSeqRow) });
  $('#id_sc_field_mother_status' + iSeqRow).bind('blur', function() { sc_form_student_registration_mother_status_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_student_registration_mother_status_onfocus(this, iSeqRow) });
  $('#id_sc_field_mother_age' + iSeqRow).bind('blur', function() { sc_form_student_registration_mother_age_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_student_registration_mother_age_onfocus(this, iSeqRow) });
  $('#id_sc_field_mother_occupation' + iSeqRow).bind('blur', function() { sc_form_student_registration_mother_occupation_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_student_registration_mother_occupation_onfocus(this, iSeqRow) });
  $('#id_sc_field_mother_annual_income' + iSeqRow).bind('blur', function() { sc_form_student_registration_mother_annual_income_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_student_registration_mother_annual_income_onfocus(this, iSeqRow) });
  $('#id_sc_field_marriage_status' + iSeqRow).bind('blur', function() { sc_form_student_registration_marriage_status_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_student_registration_marriage_status_onfocus(this, iSeqRow) });
  $('#id_sc_field_parent_name' + iSeqRow).bind('blur', function() { sc_form_student_registration_parent_name_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_student_registration_parent_name_onfocus(this, iSeqRow) });
  $('#id_sc_field_parent_pid' + iSeqRow).bind('blur', function() { sc_form_student_registration_parent_pid_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_student_registration_parent_pid_onfocus(this, iSeqRow) });
  $('#id_sc_field_parent_status' + iSeqRow).bind('blur', function() { sc_form_student_registration_parent_status_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_student_registration_parent_status_onfocus(this, iSeqRow) });
  $('#id_sc_field_parent_age' + iSeqRow).bind('blur', function() { sc_form_student_registration_parent_age_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_student_registration_parent_age_onfocus(this, iSeqRow) });
  $('#id_sc_field_parent_occupation' + iSeqRow).bind('blur', function() { sc_form_student_registration_parent_occupation_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_student_registration_parent_occupation_onfocus(this, iSeqRow) });
  $('#id_sc_field_parent_annual_income' + iSeqRow).bind('blur', function() { sc_form_student_registration_parent_annual_income_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_student_registration_parent_annual_income_onfocus(this, iSeqRow) });
  $('#id_sc_field_emer_contact' + iSeqRow).bind('blur', function() { sc_form_student_registration_emer_contact_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_student_registration_emer_contact_onfocus(this, iSeqRow) });
  $('#id_sc_field_emer_homephone' + iSeqRow).bind('blur', function() { sc_form_student_registration_emer_homephone_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_student_registration_emer_homephone_onfocus(this, iSeqRow) });
  $('#id_sc_field_emer_mobilephone' + iSeqRow).bind('blur', function() { sc_form_student_registration_emer_mobilephone_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_student_registration_emer_mobilephone_onfocus(this, iSeqRow) });
  $('#id_sc_field_emer_relationship' + iSeqRow).bind('blur', function() { sc_form_student_registration_emer_relationship_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_student_registration_emer_relationship_onfocus(this, iSeqRow) });
  $('#id_sc_field_emer_address' + iSeqRow).bind('blur', function() { sc_form_student_registration_emer_address_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_student_registration_emer_address_onfocus(this, iSeqRow) });
  $('#id_sc_field_firstnameeng' + iSeqRow).bind('blur', function() { sc_form_student_registration_firstnameeng_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_student_registration_firstnameeng_onfocus(this, iSeqRow) });
  $('#id_sc_field_lastnameeng' + iSeqRow).bind('blur', function() { sc_form_student_registration_lastnameeng_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_student_registration_lastnameeng_onfocus(this, iSeqRow) });
  $('#id_sc_field_pid_start' + iSeqRow).bind('blur', function() { sc_form_student_registration_pid_start_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_student_registration_pid_start_onfocus(this, iSeqRow) });
  $('#id_sc_field_pid_stop' + iSeqRow).bind('blur', function() { sc_form_student_registration_pid_stop_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_student_registration_pid_stop_onfocus(this, iSeqRow) });
  $('#id_sc_field_student_status' + iSeqRow).bind('blur', function() { sc_form_student_registration_student_status_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_student_registration_student_status_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_student_registration_student_id_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_student_id();
  scCssBlur(oThis);
}

function sc_form_student_registration_student_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_program_id_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_program_id();
  scCssBlur(oThis);
}

function sc_form_student_registration_program_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_title_id_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_title_id();
  scCssBlur(oThis);
}

function sc_form_student_registration_title_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_firstname_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_firstname();
  scCssBlur(oThis);
}

function sc_form_student_registration_firstname_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_lastname_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_lastname();
  scCssBlur(oThis);
}

function sc_form_student_registration_lastname_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_gender_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_gender();
  scCssBlur(oThis);
}

function sc_form_student_registration_gender_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_student_pid_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_student_pid();
  scCssBlur(oThis);
}

function sc_form_student_registration_student_pid_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_student_dob_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_student_dob();
  scCssBlur(oThis);
}

function sc_form_student_registration_student_dob_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_race_id_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_race_id();
  scCssBlur(oThis);
}

function sc_form_student_registration_race_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_nationality_id_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_nationality_id();
  scCssBlur(oThis);
}

function sc_form_student_registration_nationality_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_religion_id_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_religion_id();
  scCssBlur(oThis);
}

function sc_form_student_registration_religion_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_blood_group_id_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_blood_group_id();
  scCssBlur(oThis);
}

function sc_form_student_registration_blood_group_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_school_id_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_school_id();
  scCssBlur(oThis);
}

function sc_form_student_registration_school_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_school_address_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_school_address();
  scCssBlur(oThis);
}

function sc_form_student_registration_school_address_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_school_district_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_school_district();
  scCssBlur(oThis);
}

function sc_form_student_registration_school_district_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_school_province_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_school_province();
  scCssBlur(oThis);
}

function sc_form_student_registration_school_province_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_school_year_grad_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_school_year_grad();
  scCssBlur(oThis);
}

function sc_form_student_registration_school_year_grad_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_school_gpa_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_school_gpa();
  scCssBlur(oThis);
}

function sc_form_student_registration_school_gpa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_addr_address_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_addr_address();
  scCssBlur(oThis);
}

function sc_form_student_registration_addr_address_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_addr_tambon_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_addr_tambon();
  scCssBlur(oThis);
}

function sc_form_student_registration_addr_tambon_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_addr_district_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_addr_district();
  scCssBlur(oThis);
}

function sc_form_student_registration_addr_district_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_addr_province_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_addr_province();
  scCssBlur(oThis);
}

function sc_form_student_registration_addr_province_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_addr_postcode_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_addr_postcode();
  scCssBlur(oThis);
}

function sc_form_student_registration_addr_postcode_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_addr_homephone_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_addr_homephone();
  scCssBlur(oThis);
}

function sc_form_student_registration_addr_homephone_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_addr_mobilephone_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_addr_mobilephone();
  scCssBlur(oThis);
}

function sc_form_student_registration_addr_mobilephone_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_addr_email_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_addr_email();
  scCssBlur(oThis);
}

function sc_form_student_registration_addr_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_cont_address_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_cont_address();
  scCssBlur(oThis);
}

function sc_form_student_registration_cont_address_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_cont_tambon_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_cont_tambon();
  scCssBlur(oThis);
}

function sc_form_student_registration_cont_tambon_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_cont_district_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_cont_district();
  scCssBlur(oThis);
}

function sc_form_student_registration_cont_district_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_cont_province_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_cont_province();
  scCssBlur(oThis);
}

function sc_form_student_registration_cont_province_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_cont_postcode_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_cont_postcode();
  scCssBlur(oThis);
}

function sc_form_student_registration_cont_postcode_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_cont_homephone_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_cont_homephone();
  scCssBlur(oThis);
}

function sc_form_student_registration_cont_homephone_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_cont_mobilephone_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_cont_mobilephone();
  scCssBlur(oThis);
}

function sc_form_student_registration_cont_mobilephone_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_cont_email_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_cont_email();
  scCssBlur(oThis);
}

function sc_form_student_registration_cont_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_father_name_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_father_name();
  scCssBlur(oThis);
}

function sc_form_student_registration_father_name_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_father_pid_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_father_pid();
  scCssBlur(oThis);
}

function sc_form_student_registration_father_pid_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_father_status_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_father_status();
  scCssBlur(oThis);
}

function sc_form_student_registration_father_status_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_father_age_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_father_age();
  scCssBlur(oThis);
}

function sc_form_student_registration_father_age_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_father_occupation_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_father_occupation();
  scCssBlur(oThis);
}

function sc_form_student_registration_father_occupation_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_father_annual_income_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_father_annual_income();
  scCssBlur(oThis);
}

function sc_form_student_registration_father_annual_income_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_mother_name_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_mother_name();
  scCssBlur(oThis);
}

function sc_form_student_registration_mother_name_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_mother_pid_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_mother_pid();
  scCssBlur(oThis);
}

function sc_form_student_registration_mother_pid_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_mother_status_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_mother_status();
  scCssBlur(oThis);
}

function sc_form_student_registration_mother_status_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_mother_age_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_mother_age();
  scCssBlur(oThis);
}

function sc_form_student_registration_mother_age_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_mother_occupation_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_mother_occupation();
  scCssBlur(oThis);
}

function sc_form_student_registration_mother_occupation_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_mother_annual_income_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_mother_annual_income();
  scCssBlur(oThis);
}

function sc_form_student_registration_mother_annual_income_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_marriage_status_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_marriage_status();
  scCssBlur(oThis);
}

function sc_form_student_registration_marriage_status_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_parent_name_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_parent_name();
  scCssBlur(oThis);
}

function sc_form_student_registration_parent_name_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_parent_pid_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_parent_pid();
  scCssBlur(oThis);
}

function sc_form_student_registration_parent_pid_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_parent_status_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_parent_status();
  scCssBlur(oThis);
}

function sc_form_student_registration_parent_status_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_parent_age_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_parent_age();
  scCssBlur(oThis);
}

function sc_form_student_registration_parent_age_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_parent_occupation_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_parent_occupation();
  scCssBlur(oThis);
}

function sc_form_student_registration_parent_occupation_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_parent_annual_income_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_parent_annual_income();
  scCssBlur(oThis);
}

function sc_form_student_registration_parent_annual_income_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_emer_contact_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_emer_contact();
  scCssBlur(oThis);
}

function sc_form_student_registration_emer_contact_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_emer_homephone_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_emer_homephone();
  scCssBlur(oThis);
}

function sc_form_student_registration_emer_homephone_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_emer_mobilephone_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_emer_mobilephone();
  scCssBlur(oThis);
}

function sc_form_student_registration_emer_mobilephone_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_emer_relationship_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_emer_relationship();
  scCssBlur(oThis);
}

function sc_form_student_registration_emer_relationship_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_emer_address_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_emer_address();
  scCssBlur(oThis);
}

function sc_form_student_registration_emer_address_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_firstnameeng_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_firstnameeng();
  scCssBlur(oThis);
}

function sc_form_student_registration_firstnameeng_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_lastnameeng_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_lastnameeng();
  scCssBlur(oThis);
}

function sc_form_student_registration_lastnameeng_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_pid_start_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_pid_start();
  scCssBlur(oThis);
}

function sc_form_student_registration_pid_start_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_pid_stop_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_pid_stop();
  scCssBlur(oThis);
}

function sc_form_student_registration_pid_stop_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_student_registration_student_status_onblur(oThis, iSeqRow) {
  do_ajax_form_student_registration_validate_student_status();
  scCssBlur(oThis);
}

function sc_form_student_registration_student_status_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_created_date" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_created_date" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['created_date']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['created_date']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
      monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['created_date']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

  $("#id_sc_field_modified_date" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_modified_date" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['modified_date']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['modified_date']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
      monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['modified_date']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_personal_photo" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_student_registration_ul_save.php",
    dropZone: $("#hidden_field_data_personal_photo" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'personal_photo'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_personal_photo" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_personal_photo" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_personal_photo" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_personal_photo" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      $("#id_sc_field_personal_photo" + iSeqRow).val("");
      $("#id_sc_field_personal_photo_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_personal_photo_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_personal_photo = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_personal_photo) ? "none" : "";
      $("#id_ajax_img_personal_photo" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_personal_photo" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_personal_photo) {
        document.F1.temp_out_personal_photo.value = var_ajax_img_thumb;
        document.F1.temp_out1_personal_photo.value = var_ajax_img_personal_photo;
      }
      else if (document.F1.temp_out_personal_photo) {
        document.F1.temp_out_personal_photo.value = var_ajax_img_personal_photo;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_personal_photo" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_personal_photo" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_personal_photo" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_personal_photo" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

