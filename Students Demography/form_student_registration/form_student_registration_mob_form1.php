<div id="form_student_registration_mob_form1" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_1" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['school_id']))
    {
        $this->nm_new_label['school_id'] = "School";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $school_id = $this->school_id;
   $sStyleHidden_school_id = '';
   if (isset($this->nmgp_cmp_hidden['school_id']) && $this->nmgp_cmp_hidden['school_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['school_id']);
       $sStyleHidden_school_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_school_id = 'display: none;';
   $sStyleReadInp_school_id = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['school_id']) && $this->nmgp_cmp_readonly['school_id'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['school_id']);
       $sStyleReadLab_school_id = '';
       $sStyleReadInp_school_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['school_id']) && $this->nmgp_cmp_hidden['school_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="school_id" value="<?php echo $this->form_encode_input($school_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_school_id_line" id="hidden_field_data_school_id" style="<?php echo $sStyleHidden_school_id; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_school_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_school_id_label"><span id="id_label_school_id"><?php echo $this->nm_new_label['school_id']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["school_id"]) &&  $this->nmgp_cmp_readonly["school_id"] == "on") { 

 ?>
<input type="hidden" name="school_id" value="<?php echo $this->form_encode_input($school_id) . "\">" . $school_id . ""; ?>
<?php } else { ?>
<span id="id_read_on_school_id" class="sc-ui-readonly-school_id css_school_id_line" style="<?php echo $sStyleReadLab_school_id; ?>"><?php echo $this->form_encode_input($this->school_id); ?></span><span id="id_read_off_school_id" style="white-space: nowrap;<?php echo $sStyleReadInp_school_id; ?>">
 <input class="sc-js-input scFormObjectOdd css_school_id_obj" style="" id="id_sc_field_school_id" type=text name="school_id" value="<?php echo $this->form_encode_input($school_id) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_school_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_school_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['school_address']))
    {
        $this->nm_new_label['school_address'] = "School Address";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $school_address = $this->school_address;
   $sStyleHidden_school_address = '';
   if (isset($this->nmgp_cmp_hidden['school_address']) && $this->nmgp_cmp_hidden['school_address'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['school_address']);
       $sStyleHidden_school_address = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_school_address = 'display: none;';
   $sStyleReadInp_school_address = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['school_address']) && $this->nmgp_cmp_readonly['school_address'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['school_address']);
       $sStyleReadLab_school_address = '';
       $sStyleReadInp_school_address = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['school_address']) && $this->nmgp_cmp_hidden['school_address'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="school_address" value="<?php echo $this->form_encode_input($school_address) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_school_address_line" id="hidden_field_data_school_address" style="<?php echo $sStyleHidden_school_address; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_school_address_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_school_address_label"><span id="id_label_school_address"><?php echo $this->nm_new_label['school_address']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["school_address"]) &&  $this->nmgp_cmp_readonly["school_address"] == "on") { 

 ?>
<input type="hidden" name="school_address" value="<?php echo $this->form_encode_input($school_address) . "\">" . $school_address . ""; ?>
<?php } else { ?>
<span id="id_read_on_school_address" class="sc-ui-readonly-school_address css_school_address_line" style="<?php echo $sStyleReadLab_school_address; ?>"><?php echo $this->form_encode_input($this->school_address); ?></span><span id="id_read_off_school_address" style="white-space: nowrap;<?php echo $sStyleReadInp_school_address; ?>">
 <input class="sc-js-input scFormObjectOdd css_school_address_obj" style="" id="id_sc_field_school_address" type=text name="school_address" value="<?php echo $this->form_encode_input($school_address) ?>"
 size=50 maxlength=250 alt="{datatype: 'text', maxLength: 250, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_school_address_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_school_address_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['school_district']))
    {
        $this->nm_new_label['school_district'] = "School District";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $school_district = $this->school_district;
   $sStyleHidden_school_district = '';
   if (isset($this->nmgp_cmp_hidden['school_district']) && $this->nmgp_cmp_hidden['school_district'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['school_district']);
       $sStyleHidden_school_district = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_school_district = 'display: none;';
   $sStyleReadInp_school_district = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['school_district']) && $this->nmgp_cmp_readonly['school_district'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['school_district']);
       $sStyleReadLab_school_district = '';
       $sStyleReadInp_school_district = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['school_district']) && $this->nmgp_cmp_hidden['school_district'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="school_district" value="<?php echo $this->form_encode_input($school_district) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_school_district_line" id="hidden_field_data_school_district" style="<?php echo $sStyleHidden_school_district; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_school_district_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_school_district_label"><span id="id_label_school_district"><?php echo $this->nm_new_label['school_district']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["school_district"]) &&  $this->nmgp_cmp_readonly["school_district"] == "on") { 

 ?>
<input type="hidden" name="school_district" value="<?php echo $this->form_encode_input($school_district) . "\">" . $school_district . ""; ?>
<?php } else { ?>
<span id="id_read_on_school_district" class="sc-ui-readonly-school_district css_school_district_line" style="<?php echo $sStyleReadLab_school_district; ?>"><?php echo $this->form_encode_input($this->school_district); ?></span><span id="id_read_off_school_district" style="white-space: nowrap;<?php echo $sStyleReadInp_school_district; ?>">
 <input class="sc-js-input scFormObjectOdd css_school_district_obj" style="" id="id_sc_field_school_district" type=text name="school_district" value="<?php echo $this->form_encode_input($school_district) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_school_district_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_school_district_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['school_province']))
    {
        $this->nm_new_label['school_province'] = "School Province";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $school_province = $this->school_province;
   $sStyleHidden_school_province = '';
   if (isset($this->nmgp_cmp_hidden['school_province']) && $this->nmgp_cmp_hidden['school_province'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['school_province']);
       $sStyleHidden_school_province = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_school_province = 'display: none;';
   $sStyleReadInp_school_province = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['school_province']) && $this->nmgp_cmp_readonly['school_province'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['school_province']);
       $sStyleReadLab_school_province = '';
       $sStyleReadInp_school_province = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['school_province']) && $this->nmgp_cmp_hidden['school_province'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="school_province" value="<?php echo $this->form_encode_input($school_province) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_school_province_line" id="hidden_field_data_school_province" style="<?php echo $sStyleHidden_school_province; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_school_province_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_school_province_label"><span id="id_label_school_province"><?php echo $this->nm_new_label['school_province']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["school_province"]) &&  $this->nmgp_cmp_readonly["school_province"] == "on") { 

 ?>
<input type="hidden" name="school_province" value="<?php echo $this->form_encode_input($school_province) . "\">" . $school_province . ""; ?>
<?php } else { ?>
<span id="id_read_on_school_province" class="sc-ui-readonly-school_province css_school_province_line" style="<?php echo $sStyleReadLab_school_province; ?>"><?php echo $this->form_encode_input($this->school_province); ?></span><span id="id_read_off_school_province" style="white-space: nowrap;<?php echo $sStyleReadInp_school_province; ?>">
 <input class="sc-js-input scFormObjectOdd css_school_province_obj" style="" id="id_sc_field_school_province" type=text name="school_province" value="<?php echo $this->form_encode_input($school_province) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_school_province_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_school_province_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['school_year_grad']))
    {
        $this->nm_new_label['school_year_grad'] = "School Year Grad";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $school_year_grad = $this->school_year_grad;
   $sStyleHidden_school_year_grad = '';
   if (isset($this->nmgp_cmp_hidden['school_year_grad']) && $this->nmgp_cmp_hidden['school_year_grad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['school_year_grad']);
       $sStyleHidden_school_year_grad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_school_year_grad = 'display: none;';
   $sStyleReadInp_school_year_grad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['school_year_grad']) && $this->nmgp_cmp_readonly['school_year_grad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['school_year_grad']);
       $sStyleReadLab_school_year_grad = '';
       $sStyleReadInp_school_year_grad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['school_year_grad']) && $this->nmgp_cmp_hidden['school_year_grad'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="school_year_grad" value="<?php echo $this->form_encode_input($school_year_grad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_school_year_grad_line" id="hidden_field_data_school_year_grad" style="<?php echo $sStyleHidden_school_year_grad; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_school_year_grad_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_school_year_grad_label"><span id="id_label_school_year_grad"><?php echo $this->nm_new_label['school_year_grad']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["school_year_grad"]) &&  $this->nmgp_cmp_readonly["school_year_grad"] == "on") { 

 ?>
<input type="hidden" name="school_year_grad" value="<?php echo $this->form_encode_input($school_year_grad) . "\">" . $school_year_grad . ""; ?>
<?php } else { ?>
<span id="id_read_on_school_year_grad" class="sc-ui-readonly-school_year_grad css_school_year_grad_line" style="<?php echo $sStyleReadLab_school_year_grad; ?>"><?php echo $this->form_encode_input($this->school_year_grad); ?></span><span id="id_read_off_school_year_grad" style="white-space: nowrap;<?php echo $sStyleReadInp_school_year_grad; ?>">
 <input class="sc-js-input scFormObjectOdd css_school_year_grad_obj" style="" id="id_sc_field_school_year_grad" type=text name="school_year_grad" value="<?php echo $this->form_encode_input($school_year_grad) ?>"
 size=4 maxlength=4 alt="{datatype: 'text', maxLength: 4, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_school_year_grad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_school_year_grad_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['school_gpa']))
    {
        $this->nm_new_label['school_gpa'] = "School Gpa";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $school_gpa = $this->school_gpa;
   $sStyleHidden_school_gpa = '';
   if (isset($this->nmgp_cmp_hidden['school_gpa']) && $this->nmgp_cmp_hidden['school_gpa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['school_gpa']);
       $sStyleHidden_school_gpa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_school_gpa = 'display: none;';
   $sStyleReadInp_school_gpa = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['school_gpa']) && $this->nmgp_cmp_readonly['school_gpa'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['school_gpa']);
       $sStyleReadLab_school_gpa = '';
       $sStyleReadInp_school_gpa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['school_gpa']) && $this->nmgp_cmp_hidden['school_gpa'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="school_gpa" value="<?php echo $this->form_encode_input($school_gpa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_school_gpa_line" id="hidden_field_data_school_gpa" style="<?php echo $sStyleHidden_school_gpa; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_school_gpa_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_school_gpa_label"><span id="id_label_school_gpa"><?php echo $this->nm_new_label['school_gpa']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["school_gpa"]) &&  $this->nmgp_cmp_readonly["school_gpa"] == "on") { 

 ?>
<input type="hidden" name="school_gpa" value="<?php echo $this->form_encode_input($school_gpa) . "\">" . $school_gpa . ""; ?>
<?php } else { ?>
<span id="id_read_on_school_gpa" class="sc-ui-readonly-school_gpa css_school_gpa_line" style="<?php echo $sStyleReadLab_school_gpa; ?>"><?php echo $this->form_encode_input($this->school_gpa); ?></span><span id="id_read_off_school_gpa" style="white-space: nowrap;<?php echo $sStyleReadInp_school_gpa; ?>">
 <input class="sc-js-input scFormObjectOdd css_school_gpa_obj" style="" id="id_sc_field_school_gpa" type=text name="school_gpa" value="<?php echo $this->form_encode_input($school_gpa) ?>"
 size=11 maxlength=11 alt="{datatype: 'text', maxLength: 11, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_school_gpa_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_school_gpa_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
