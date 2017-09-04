<div id="form_student_registration_form2" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_2" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['addr_address']))
    {
        $this->nm_new_label['addr_address'] = "Addr Address";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $addr_address = $this->addr_address;
   $sStyleHidden_addr_address = '';
   if (isset($this->nmgp_cmp_hidden['addr_address']) && $this->nmgp_cmp_hidden['addr_address'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['addr_address']);
       $sStyleHidden_addr_address = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_addr_address = 'display: none;';
   $sStyleReadInp_addr_address = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['addr_address']) && $this->nmgp_cmp_readonly['addr_address'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['addr_address']);
       $sStyleReadLab_addr_address = '';
       $sStyleReadInp_addr_address = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['addr_address']) && $this->nmgp_cmp_hidden['addr_address'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="addr_address" value="<?php echo $this->form_encode_input($addr_address) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_addr_address_label" id="hidden_field_label_addr_address" style="<?php echo $sStyleHidden_addr_address; ?>"><span id="id_label_addr_address"><?php echo $this->nm_new_label['addr_address']; ?></span></TD>
    <TD class="scFormDataOdd css_addr_address_line" id="hidden_field_data_addr_address" style="<?php echo $sStyleHidden_addr_address; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_addr_address_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["addr_address"]) &&  $this->nmgp_cmp_readonly["addr_address"] == "on") { 

 ?>
<input type="hidden" name="addr_address" value="<?php echo $this->form_encode_input($addr_address) . "\">" . $addr_address . ""; ?>
<?php } else { ?>
<span id="id_read_on_addr_address" class="sc-ui-readonly-addr_address css_addr_address_line" style="<?php echo $sStyleReadLab_addr_address; ?>"><?php echo $this->form_encode_input($this->addr_address); ?></span><span id="id_read_off_addr_address" style="white-space: nowrap;<?php echo $sStyleReadInp_addr_address; ?>">
 <input class="sc-js-input scFormObjectOdd css_addr_address_obj" style="" id="id_sc_field_addr_address" type=text name="addr_address" value="<?php echo $this->form_encode_input($addr_address) ?>"
 size=50 maxlength=250 alt="{datatype: 'text', maxLength: 250, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_addr_address_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_addr_address_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['addr_tambon']))
    {
        $this->nm_new_label['addr_tambon'] = "Addr Tambon";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $addr_tambon = $this->addr_tambon;
   $sStyleHidden_addr_tambon = '';
   if (isset($this->nmgp_cmp_hidden['addr_tambon']) && $this->nmgp_cmp_hidden['addr_tambon'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['addr_tambon']);
       $sStyleHidden_addr_tambon = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_addr_tambon = 'display: none;';
   $sStyleReadInp_addr_tambon = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['addr_tambon']) && $this->nmgp_cmp_readonly['addr_tambon'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['addr_tambon']);
       $sStyleReadLab_addr_tambon = '';
       $sStyleReadInp_addr_tambon = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['addr_tambon']) && $this->nmgp_cmp_hidden['addr_tambon'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="addr_tambon" value="<?php echo $this->form_encode_input($addr_tambon) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_addr_tambon_label" id="hidden_field_label_addr_tambon" style="<?php echo $sStyleHidden_addr_tambon; ?>"><span id="id_label_addr_tambon"><?php echo $this->nm_new_label['addr_tambon']; ?></span></TD>
    <TD class="scFormDataOdd css_addr_tambon_line" id="hidden_field_data_addr_tambon" style="<?php echo $sStyleHidden_addr_tambon; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_addr_tambon_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["addr_tambon"]) &&  $this->nmgp_cmp_readonly["addr_tambon"] == "on") { 

 ?>
<input type="hidden" name="addr_tambon" value="<?php echo $this->form_encode_input($addr_tambon) . "\">" . $addr_tambon . ""; ?>
<?php } else { ?>
<span id="id_read_on_addr_tambon" class="sc-ui-readonly-addr_tambon css_addr_tambon_line" style="<?php echo $sStyleReadLab_addr_tambon; ?>"><?php echo $this->form_encode_input($this->addr_tambon); ?></span><span id="id_read_off_addr_tambon" style="white-space: nowrap;<?php echo $sStyleReadInp_addr_tambon; ?>">
 <input class="sc-js-input scFormObjectOdd css_addr_tambon_obj" style="" id="id_sc_field_addr_tambon" type=text name="addr_tambon" value="<?php echo $this->form_encode_input($addr_tambon) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_addr_tambon_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_addr_tambon_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['addr_district']))
    {
        $this->nm_new_label['addr_district'] = "Addr District";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $addr_district = $this->addr_district;
   $sStyleHidden_addr_district = '';
   if (isset($this->nmgp_cmp_hidden['addr_district']) && $this->nmgp_cmp_hidden['addr_district'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['addr_district']);
       $sStyleHidden_addr_district = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_addr_district = 'display: none;';
   $sStyleReadInp_addr_district = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['addr_district']) && $this->nmgp_cmp_readonly['addr_district'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['addr_district']);
       $sStyleReadLab_addr_district = '';
       $sStyleReadInp_addr_district = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['addr_district']) && $this->nmgp_cmp_hidden['addr_district'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="addr_district" value="<?php echo $this->form_encode_input($addr_district) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_addr_district_label" id="hidden_field_label_addr_district" style="<?php echo $sStyleHidden_addr_district; ?>"><span id="id_label_addr_district"><?php echo $this->nm_new_label['addr_district']; ?></span></TD>
    <TD class="scFormDataOdd css_addr_district_line" id="hidden_field_data_addr_district" style="<?php echo $sStyleHidden_addr_district; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_addr_district_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["addr_district"]) &&  $this->nmgp_cmp_readonly["addr_district"] == "on") { 

 ?>
<input type="hidden" name="addr_district" value="<?php echo $this->form_encode_input($addr_district) . "\">" . $addr_district . ""; ?>
<?php } else { ?>
<span id="id_read_on_addr_district" class="sc-ui-readonly-addr_district css_addr_district_line" style="<?php echo $sStyleReadLab_addr_district; ?>"><?php echo $this->form_encode_input($this->addr_district); ?></span><span id="id_read_off_addr_district" style="white-space: nowrap;<?php echo $sStyleReadInp_addr_district; ?>">
 <input class="sc-js-input scFormObjectOdd css_addr_district_obj" style="" id="id_sc_field_addr_district" type=text name="addr_district" value="<?php echo $this->form_encode_input($addr_district) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_addr_district_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_addr_district_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['addr_province']))
    {
        $this->nm_new_label['addr_province'] = "Addr Province";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $addr_province = $this->addr_province;
   $sStyleHidden_addr_province = '';
   if (isset($this->nmgp_cmp_hidden['addr_province']) && $this->nmgp_cmp_hidden['addr_province'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['addr_province']);
       $sStyleHidden_addr_province = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_addr_province = 'display: none;';
   $sStyleReadInp_addr_province = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['addr_province']) && $this->nmgp_cmp_readonly['addr_province'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['addr_province']);
       $sStyleReadLab_addr_province = '';
       $sStyleReadInp_addr_province = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['addr_province']) && $this->nmgp_cmp_hidden['addr_province'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="addr_province" value="<?php echo $this->form_encode_input($addr_province) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_addr_province_label" id="hidden_field_label_addr_province" style="<?php echo $sStyleHidden_addr_province; ?>"><span id="id_label_addr_province"><?php echo $this->nm_new_label['addr_province']; ?></span></TD>
    <TD class="scFormDataOdd css_addr_province_line" id="hidden_field_data_addr_province" style="<?php echo $sStyleHidden_addr_province; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_addr_province_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["addr_province"]) &&  $this->nmgp_cmp_readonly["addr_province"] == "on") { 

 ?>
<input type="hidden" name="addr_province" value="<?php echo $this->form_encode_input($addr_province) . "\">" . $addr_province . ""; ?>
<?php } else { ?>
<span id="id_read_on_addr_province" class="sc-ui-readonly-addr_province css_addr_province_line" style="<?php echo $sStyleReadLab_addr_province; ?>"><?php echo $this->form_encode_input($this->addr_province); ?></span><span id="id_read_off_addr_province" style="white-space: nowrap;<?php echo $sStyleReadInp_addr_province; ?>">
 <input class="sc-js-input scFormObjectOdd css_addr_province_obj" style="" id="id_sc_field_addr_province" type=text name="addr_province" value="<?php echo $this->form_encode_input($addr_province) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_addr_province_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_addr_province_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['addr_postcode']))
    {
        $this->nm_new_label['addr_postcode'] = "Addr Postcode";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $addr_postcode = $this->addr_postcode;
   $sStyleHidden_addr_postcode = '';
   if (isset($this->nmgp_cmp_hidden['addr_postcode']) && $this->nmgp_cmp_hidden['addr_postcode'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['addr_postcode']);
       $sStyleHidden_addr_postcode = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_addr_postcode = 'display: none;';
   $sStyleReadInp_addr_postcode = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['addr_postcode']) && $this->nmgp_cmp_readonly['addr_postcode'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['addr_postcode']);
       $sStyleReadLab_addr_postcode = '';
       $sStyleReadInp_addr_postcode = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['addr_postcode']) && $this->nmgp_cmp_hidden['addr_postcode'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="addr_postcode" value="<?php echo $this->form_encode_input($addr_postcode) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_addr_postcode_label" id="hidden_field_label_addr_postcode" style="<?php echo $sStyleHidden_addr_postcode; ?>"><span id="id_label_addr_postcode"><?php echo $this->nm_new_label['addr_postcode']; ?></span></TD>
    <TD class="scFormDataOdd css_addr_postcode_line" id="hidden_field_data_addr_postcode" style="<?php echo $sStyleHidden_addr_postcode; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_addr_postcode_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["addr_postcode"]) &&  $this->nmgp_cmp_readonly["addr_postcode"] == "on") { 

 ?>
<input type="hidden" name="addr_postcode" value="<?php echo $this->form_encode_input($addr_postcode) . "\">" . $addr_postcode . ""; ?>
<?php } else { ?>
<span id="id_read_on_addr_postcode" class="sc-ui-readonly-addr_postcode css_addr_postcode_line" style="<?php echo $sStyleReadLab_addr_postcode; ?>"><?php echo $this->form_encode_input($this->addr_postcode); ?></span><span id="id_read_off_addr_postcode" style="white-space: nowrap;<?php echo $sStyleReadInp_addr_postcode; ?>">
 <input class="sc-js-input scFormObjectOdd css_addr_postcode_obj" style="" id="id_sc_field_addr_postcode" type=text name="addr_postcode" value="<?php echo $this->form_encode_input($addr_postcode) ?>"
 size=5 maxlength=5 alt="{datatype: 'text', maxLength: 5, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_addr_postcode_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_addr_postcode_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['addr_homephone']))
    {
        $this->nm_new_label['addr_homephone'] = "Addr Homephone";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $addr_homephone = $this->addr_homephone;
   $sStyleHidden_addr_homephone = '';
   if (isset($this->nmgp_cmp_hidden['addr_homephone']) && $this->nmgp_cmp_hidden['addr_homephone'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['addr_homephone']);
       $sStyleHidden_addr_homephone = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_addr_homephone = 'display: none;';
   $sStyleReadInp_addr_homephone = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['addr_homephone']) && $this->nmgp_cmp_readonly['addr_homephone'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['addr_homephone']);
       $sStyleReadLab_addr_homephone = '';
       $sStyleReadInp_addr_homephone = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['addr_homephone']) && $this->nmgp_cmp_hidden['addr_homephone'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="addr_homephone" value="<?php echo $this->form_encode_input($addr_homephone) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_addr_homephone_label" id="hidden_field_label_addr_homephone" style="<?php echo $sStyleHidden_addr_homephone; ?>"><span id="id_label_addr_homephone"><?php echo $this->nm_new_label['addr_homephone']; ?></span></TD>
    <TD class="scFormDataOdd css_addr_homephone_line" id="hidden_field_data_addr_homephone" style="<?php echo $sStyleHidden_addr_homephone; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_addr_homephone_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["addr_homephone"]) &&  $this->nmgp_cmp_readonly["addr_homephone"] == "on") { 

 ?>
<input type="hidden" name="addr_homephone" value="<?php echo $this->form_encode_input($addr_homephone) . "\">" . $addr_homephone . ""; ?>
<?php } else { ?>
<span id="id_read_on_addr_homephone" class="sc-ui-readonly-addr_homephone css_addr_homephone_line" style="<?php echo $sStyleReadLab_addr_homephone; ?>"><?php echo $this->form_encode_input($this->addr_homephone); ?></span><span id="id_read_off_addr_homephone" style="white-space: nowrap;<?php echo $sStyleReadInp_addr_homephone; ?>">
 <input class="sc-js-input scFormObjectOdd css_addr_homephone_obj" style="" id="id_sc_field_addr_homephone" type=text name="addr_homephone" value="<?php echo $this->form_encode_input($addr_homephone) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_addr_homephone_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_addr_homephone_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['addr_mobilephone']))
    {
        $this->nm_new_label['addr_mobilephone'] = "Addr Mobilephone";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $addr_mobilephone = $this->addr_mobilephone;
   $sStyleHidden_addr_mobilephone = '';
   if (isset($this->nmgp_cmp_hidden['addr_mobilephone']) && $this->nmgp_cmp_hidden['addr_mobilephone'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['addr_mobilephone']);
       $sStyleHidden_addr_mobilephone = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_addr_mobilephone = 'display: none;';
   $sStyleReadInp_addr_mobilephone = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['addr_mobilephone']) && $this->nmgp_cmp_readonly['addr_mobilephone'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['addr_mobilephone']);
       $sStyleReadLab_addr_mobilephone = '';
       $sStyleReadInp_addr_mobilephone = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['addr_mobilephone']) && $this->nmgp_cmp_hidden['addr_mobilephone'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="addr_mobilephone" value="<?php echo $this->form_encode_input($addr_mobilephone) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_addr_mobilephone_label" id="hidden_field_label_addr_mobilephone" style="<?php echo $sStyleHidden_addr_mobilephone; ?>"><span id="id_label_addr_mobilephone"><?php echo $this->nm_new_label['addr_mobilephone']; ?></span></TD>
    <TD class="scFormDataOdd css_addr_mobilephone_line" id="hidden_field_data_addr_mobilephone" style="<?php echo $sStyleHidden_addr_mobilephone; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_addr_mobilephone_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["addr_mobilephone"]) &&  $this->nmgp_cmp_readonly["addr_mobilephone"] == "on") { 

 ?>
<input type="hidden" name="addr_mobilephone" value="<?php echo $this->form_encode_input($addr_mobilephone) . "\">" . $addr_mobilephone . ""; ?>
<?php } else { ?>
<span id="id_read_on_addr_mobilephone" class="sc-ui-readonly-addr_mobilephone css_addr_mobilephone_line" style="<?php echo $sStyleReadLab_addr_mobilephone; ?>"><?php echo $this->form_encode_input($this->addr_mobilephone); ?></span><span id="id_read_off_addr_mobilephone" style="white-space: nowrap;<?php echo $sStyleReadInp_addr_mobilephone; ?>">
 <input class="sc-js-input scFormObjectOdd css_addr_mobilephone_obj" style="" id="id_sc_field_addr_mobilephone" type=text name="addr_mobilephone" value="<?php echo $this->form_encode_input($addr_mobilephone) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_addr_mobilephone_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_addr_mobilephone_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['addr_email']))
    {
        $this->nm_new_label['addr_email'] = "Addr Email";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $addr_email = $this->addr_email;
   $sStyleHidden_addr_email = '';
   if (isset($this->nmgp_cmp_hidden['addr_email']) && $this->nmgp_cmp_hidden['addr_email'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['addr_email']);
       $sStyleHidden_addr_email = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_addr_email = 'display: none;';
   $sStyleReadInp_addr_email = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['addr_email']) && $this->nmgp_cmp_readonly['addr_email'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['addr_email']);
       $sStyleReadLab_addr_email = '';
       $sStyleReadInp_addr_email = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['addr_email']) && $this->nmgp_cmp_hidden['addr_email'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="addr_email" value="<?php echo $this->form_encode_input($addr_email) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_addr_email_label" id="hidden_field_label_addr_email" style="<?php echo $sStyleHidden_addr_email; ?>"><span id="id_label_addr_email"><?php echo $this->nm_new_label['addr_email']; ?></span></TD>
    <TD class="scFormDataOdd css_addr_email_line" id="hidden_field_data_addr_email" style="<?php echo $sStyleHidden_addr_email; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_addr_email_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["addr_email"]) &&  $this->nmgp_cmp_readonly["addr_email"] == "on") { 

 ?>
<input type="hidden" name="addr_email" value="<?php echo $this->form_encode_input($addr_email) . "\">" . $addr_email . ""; ?>
<?php } else { ?>
<span id="id_read_on_addr_email" class="sc-ui-readonly-addr_email css_addr_email_line" style="<?php echo $sStyleReadLab_addr_email; ?>"><?php echo $this->form_encode_input($this->addr_email); ?></span><span id="id_read_off_addr_email" style="white-space: nowrap;<?php echo $sStyleReadInp_addr_email; ?>">
 <input class="sc-js-input scFormObjectOdd css_addr_email_obj" style="" id="id_sc_field_addr_email" type=text name="addr_email" value="<?php echo $this->form_encode_input($addr_email) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_addr_email_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_addr_email_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cont_address']))
    {
        $this->nm_new_label['cont_address'] = "Contact Address";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cont_address = $this->cont_address;
   $sStyleHidden_cont_address = '';
   if (isset($this->nmgp_cmp_hidden['cont_address']) && $this->nmgp_cmp_hidden['cont_address'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cont_address']);
       $sStyleHidden_cont_address = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cont_address = 'display: none;';
   $sStyleReadInp_cont_address = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cont_address']) && $this->nmgp_cmp_readonly['cont_address'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cont_address']);
       $sStyleReadLab_cont_address = '';
       $sStyleReadInp_cont_address = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cont_address']) && $this->nmgp_cmp_hidden['cont_address'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cont_address" value="<?php echo $this->form_encode_input($cont_address) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cont_address_label" id="hidden_field_label_cont_address" style="<?php echo $sStyleHidden_cont_address; ?>"><span id="id_label_cont_address"><?php echo $this->nm_new_label['cont_address']; ?></span></TD>
    <TD class="scFormDataOdd css_cont_address_line" id="hidden_field_data_cont_address" style="<?php echo $sStyleHidden_cont_address; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cont_address_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cont_address"]) &&  $this->nmgp_cmp_readonly["cont_address"] == "on") { 

 ?>
<input type="hidden" name="cont_address" value="<?php echo $this->form_encode_input($cont_address) . "\">" . $cont_address . ""; ?>
<?php } else { ?>
<span id="id_read_on_cont_address" class="sc-ui-readonly-cont_address css_cont_address_line" style="<?php echo $sStyleReadLab_cont_address; ?>"><?php echo $this->form_encode_input($this->cont_address); ?></span><span id="id_read_off_cont_address" style="white-space: nowrap;<?php echo $sStyleReadInp_cont_address; ?>">
 <input class="sc-js-input scFormObjectOdd css_cont_address_obj" style="" id="id_sc_field_cont_address" type=text name="cont_address" value="<?php echo $this->form_encode_input($cont_address) ?>"
 size=50 maxlength=250 alt="{datatype: 'text', maxLength: 250, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cont_address_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cont_address_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cont_tambon']))
    {
        $this->nm_new_label['cont_tambon'] = "Contact Tambon";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cont_tambon = $this->cont_tambon;
   $sStyleHidden_cont_tambon = '';
   if (isset($this->nmgp_cmp_hidden['cont_tambon']) && $this->nmgp_cmp_hidden['cont_tambon'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cont_tambon']);
       $sStyleHidden_cont_tambon = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cont_tambon = 'display: none;';
   $sStyleReadInp_cont_tambon = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cont_tambon']) && $this->nmgp_cmp_readonly['cont_tambon'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cont_tambon']);
       $sStyleReadLab_cont_tambon = '';
       $sStyleReadInp_cont_tambon = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cont_tambon']) && $this->nmgp_cmp_hidden['cont_tambon'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cont_tambon" value="<?php echo $this->form_encode_input($cont_tambon) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cont_tambon_label" id="hidden_field_label_cont_tambon" style="<?php echo $sStyleHidden_cont_tambon; ?>"><span id="id_label_cont_tambon"><?php echo $this->nm_new_label['cont_tambon']; ?></span></TD>
    <TD class="scFormDataOdd css_cont_tambon_line" id="hidden_field_data_cont_tambon" style="<?php echo $sStyleHidden_cont_tambon; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cont_tambon_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cont_tambon"]) &&  $this->nmgp_cmp_readonly["cont_tambon"] == "on") { 

 ?>
<input type="hidden" name="cont_tambon" value="<?php echo $this->form_encode_input($cont_tambon) . "\">" . $cont_tambon . ""; ?>
<?php } else { ?>
<span id="id_read_on_cont_tambon" class="sc-ui-readonly-cont_tambon css_cont_tambon_line" style="<?php echo $sStyleReadLab_cont_tambon; ?>"><?php echo $this->form_encode_input($this->cont_tambon); ?></span><span id="id_read_off_cont_tambon" style="white-space: nowrap;<?php echo $sStyleReadInp_cont_tambon; ?>">
 <input class="sc-js-input scFormObjectOdd css_cont_tambon_obj" style="" id="id_sc_field_cont_tambon" type=text name="cont_tambon" value="<?php echo $this->form_encode_input($cont_tambon) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cont_tambon_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cont_tambon_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cont_district']))
    {
        $this->nm_new_label['cont_district'] = "Contact District";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cont_district = $this->cont_district;
   $sStyleHidden_cont_district = '';
   if (isset($this->nmgp_cmp_hidden['cont_district']) && $this->nmgp_cmp_hidden['cont_district'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cont_district']);
       $sStyleHidden_cont_district = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cont_district = 'display: none;';
   $sStyleReadInp_cont_district = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cont_district']) && $this->nmgp_cmp_readonly['cont_district'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cont_district']);
       $sStyleReadLab_cont_district = '';
       $sStyleReadInp_cont_district = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cont_district']) && $this->nmgp_cmp_hidden['cont_district'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cont_district" value="<?php echo $this->form_encode_input($cont_district) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cont_district_label" id="hidden_field_label_cont_district" style="<?php echo $sStyleHidden_cont_district; ?>"><span id="id_label_cont_district"><?php echo $this->nm_new_label['cont_district']; ?></span></TD>
    <TD class="scFormDataOdd css_cont_district_line" id="hidden_field_data_cont_district" style="<?php echo $sStyleHidden_cont_district; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cont_district_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cont_district"]) &&  $this->nmgp_cmp_readonly["cont_district"] == "on") { 

 ?>
<input type="hidden" name="cont_district" value="<?php echo $this->form_encode_input($cont_district) . "\">" . $cont_district . ""; ?>
<?php } else { ?>
<span id="id_read_on_cont_district" class="sc-ui-readonly-cont_district css_cont_district_line" style="<?php echo $sStyleReadLab_cont_district; ?>"><?php echo $this->form_encode_input($this->cont_district); ?></span><span id="id_read_off_cont_district" style="white-space: nowrap;<?php echo $sStyleReadInp_cont_district; ?>">
 <input class="sc-js-input scFormObjectOdd css_cont_district_obj" style="" id="id_sc_field_cont_district" type=text name="cont_district" value="<?php echo $this->form_encode_input($cont_district) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cont_district_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cont_district_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cont_province']))
    {
        $this->nm_new_label['cont_province'] = "Contact Province";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cont_province = $this->cont_province;
   $sStyleHidden_cont_province = '';
   if (isset($this->nmgp_cmp_hidden['cont_province']) && $this->nmgp_cmp_hidden['cont_province'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cont_province']);
       $sStyleHidden_cont_province = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cont_province = 'display: none;';
   $sStyleReadInp_cont_province = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cont_province']) && $this->nmgp_cmp_readonly['cont_province'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cont_province']);
       $sStyleReadLab_cont_province = '';
       $sStyleReadInp_cont_province = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cont_province']) && $this->nmgp_cmp_hidden['cont_province'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cont_province" value="<?php echo $this->form_encode_input($cont_province) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cont_province_label" id="hidden_field_label_cont_province" style="<?php echo $sStyleHidden_cont_province; ?>"><span id="id_label_cont_province"><?php echo $this->nm_new_label['cont_province']; ?></span></TD>
    <TD class="scFormDataOdd css_cont_province_line" id="hidden_field_data_cont_province" style="<?php echo $sStyleHidden_cont_province; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cont_province_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cont_province"]) &&  $this->nmgp_cmp_readonly["cont_province"] == "on") { 

 ?>
<input type="hidden" name="cont_province" value="<?php echo $this->form_encode_input($cont_province) . "\">" . $cont_province . ""; ?>
<?php } else { ?>
<span id="id_read_on_cont_province" class="sc-ui-readonly-cont_province css_cont_province_line" style="<?php echo $sStyleReadLab_cont_province; ?>"><?php echo $this->form_encode_input($this->cont_province); ?></span><span id="id_read_off_cont_province" style="white-space: nowrap;<?php echo $sStyleReadInp_cont_province; ?>">
 <input class="sc-js-input scFormObjectOdd css_cont_province_obj" style="" id="id_sc_field_cont_province" type=text name="cont_province" value="<?php echo $this->form_encode_input($cont_province) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cont_province_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cont_province_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cont_postcode']))
    {
        $this->nm_new_label['cont_postcode'] = "Contact Postcode";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cont_postcode = $this->cont_postcode;
   $sStyleHidden_cont_postcode = '';
   if (isset($this->nmgp_cmp_hidden['cont_postcode']) && $this->nmgp_cmp_hidden['cont_postcode'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cont_postcode']);
       $sStyleHidden_cont_postcode = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cont_postcode = 'display: none;';
   $sStyleReadInp_cont_postcode = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cont_postcode']) && $this->nmgp_cmp_readonly['cont_postcode'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cont_postcode']);
       $sStyleReadLab_cont_postcode = '';
       $sStyleReadInp_cont_postcode = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cont_postcode']) && $this->nmgp_cmp_hidden['cont_postcode'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cont_postcode" value="<?php echo $this->form_encode_input($cont_postcode) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cont_postcode_label" id="hidden_field_label_cont_postcode" style="<?php echo $sStyleHidden_cont_postcode; ?>"><span id="id_label_cont_postcode"><?php echo $this->nm_new_label['cont_postcode']; ?></span></TD>
    <TD class="scFormDataOdd css_cont_postcode_line" id="hidden_field_data_cont_postcode" style="<?php echo $sStyleHidden_cont_postcode; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cont_postcode_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cont_postcode"]) &&  $this->nmgp_cmp_readonly["cont_postcode"] == "on") { 

 ?>
<input type="hidden" name="cont_postcode" value="<?php echo $this->form_encode_input($cont_postcode) . "\">" . $cont_postcode . ""; ?>
<?php } else { ?>
<span id="id_read_on_cont_postcode" class="sc-ui-readonly-cont_postcode css_cont_postcode_line" style="<?php echo $sStyleReadLab_cont_postcode; ?>"><?php echo $this->form_encode_input($this->cont_postcode); ?></span><span id="id_read_off_cont_postcode" style="white-space: nowrap;<?php echo $sStyleReadInp_cont_postcode; ?>">
 <input class="sc-js-input scFormObjectOdd css_cont_postcode_obj" style="" id="id_sc_field_cont_postcode" type=text name="cont_postcode" value="<?php echo $this->form_encode_input($cont_postcode) ?>"
 size=5 maxlength=5 alt="{datatype: 'text', maxLength: 5, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cont_postcode_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cont_postcode_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cont_homephone']))
    {
        $this->nm_new_label['cont_homephone'] = "Contact Homephone";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cont_homephone = $this->cont_homephone;
   $sStyleHidden_cont_homephone = '';
   if (isset($this->nmgp_cmp_hidden['cont_homephone']) && $this->nmgp_cmp_hidden['cont_homephone'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cont_homephone']);
       $sStyleHidden_cont_homephone = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cont_homephone = 'display: none;';
   $sStyleReadInp_cont_homephone = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cont_homephone']) && $this->nmgp_cmp_readonly['cont_homephone'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cont_homephone']);
       $sStyleReadLab_cont_homephone = '';
       $sStyleReadInp_cont_homephone = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cont_homephone']) && $this->nmgp_cmp_hidden['cont_homephone'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cont_homephone" value="<?php echo $this->form_encode_input($cont_homephone) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cont_homephone_label" id="hidden_field_label_cont_homephone" style="<?php echo $sStyleHidden_cont_homephone; ?>"><span id="id_label_cont_homephone"><?php echo $this->nm_new_label['cont_homephone']; ?></span></TD>
    <TD class="scFormDataOdd css_cont_homephone_line" id="hidden_field_data_cont_homephone" style="<?php echo $sStyleHidden_cont_homephone; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cont_homephone_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cont_homephone"]) &&  $this->nmgp_cmp_readonly["cont_homephone"] == "on") { 

 ?>
<input type="hidden" name="cont_homephone" value="<?php echo $this->form_encode_input($cont_homephone) . "\">" . $cont_homephone . ""; ?>
<?php } else { ?>
<span id="id_read_on_cont_homephone" class="sc-ui-readonly-cont_homephone css_cont_homephone_line" style="<?php echo $sStyleReadLab_cont_homephone; ?>"><?php echo $this->form_encode_input($this->cont_homephone); ?></span><span id="id_read_off_cont_homephone" style="white-space: nowrap;<?php echo $sStyleReadInp_cont_homephone; ?>">
 <input class="sc-js-input scFormObjectOdd css_cont_homephone_obj" style="" id="id_sc_field_cont_homephone" type=text name="cont_homephone" value="<?php echo $this->form_encode_input($cont_homephone) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cont_homephone_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cont_homephone_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cont_mobilephone']))
    {
        $this->nm_new_label['cont_mobilephone'] = "Contact Mobilephone";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cont_mobilephone = $this->cont_mobilephone;
   $sStyleHidden_cont_mobilephone = '';
   if (isset($this->nmgp_cmp_hidden['cont_mobilephone']) && $this->nmgp_cmp_hidden['cont_mobilephone'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cont_mobilephone']);
       $sStyleHidden_cont_mobilephone = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cont_mobilephone = 'display: none;';
   $sStyleReadInp_cont_mobilephone = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cont_mobilephone']) && $this->nmgp_cmp_readonly['cont_mobilephone'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cont_mobilephone']);
       $sStyleReadLab_cont_mobilephone = '';
       $sStyleReadInp_cont_mobilephone = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cont_mobilephone']) && $this->nmgp_cmp_hidden['cont_mobilephone'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cont_mobilephone" value="<?php echo $this->form_encode_input($cont_mobilephone) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cont_mobilephone_label" id="hidden_field_label_cont_mobilephone" style="<?php echo $sStyleHidden_cont_mobilephone; ?>"><span id="id_label_cont_mobilephone"><?php echo $this->nm_new_label['cont_mobilephone']; ?></span></TD>
    <TD class="scFormDataOdd css_cont_mobilephone_line" id="hidden_field_data_cont_mobilephone" style="<?php echo $sStyleHidden_cont_mobilephone; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cont_mobilephone_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cont_mobilephone"]) &&  $this->nmgp_cmp_readonly["cont_mobilephone"] == "on") { 

 ?>
<input type="hidden" name="cont_mobilephone" value="<?php echo $this->form_encode_input($cont_mobilephone) . "\">" . $cont_mobilephone . ""; ?>
<?php } else { ?>
<span id="id_read_on_cont_mobilephone" class="sc-ui-readonly-cont_mobilephone css_cont_mobilephone_line" style="<?php echo $sStyleReadLab_cont_mobilephone; ?>"><?php echo $this->form_encode_input($this->cont_mobilephone); ?></span><span id="id_read_off_cont_mobilephone" style="white-space: nowrap;<?php echo $sStyleReadInp_cont_mobilephone; ?>">
 <input class="sc-js-input scFormObjectOdd css_cont_mobilephone_obj" style="" id="id_sc_field_cont_mobilephone" type=text name="cont_mobilephone" value="<?php echo $this->form_encode_input($cont_mobilephone) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cont_mobilephone_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cont_mobilephone_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cont_email']))
    {
        $this->nm_new_label['cont_email'] = "Contact Email";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cont_email = $this->cont_email;
   $sStyleHidden_cont_email = '';
   if (isset($this->nmgp_cmp_hidden['cont_email']) && $this->nmgp_cmp_hidden['cont_email'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cont_email']);
       $sStyleHidden_cont_email = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cont_email = 'display: none;';
   $sStyleReadInp_cont_email = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cont_email']) && $this->nmgp_cmp_readonly['cont_email'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cont_email']);
       $sStyleReadLab_cont_email = '';
       $sStyleReadInp_cont_email = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cont_email']) && $this->nmgp_cmp_hidden['cont_email'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cont_email" value="<?php echo $this->form_encode_input($cont_email) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cont_email_label" id="hidden_field_label_cont_email" style="<?php echo $sStyleHidden_cont_email; ?>"><span id="id_label_cont_email"><?php echo $this->nm_new_label['cont_email']; ?></span></TD>
    <TD class="scFormDataOdd css_cont_email_line" id="hidden_field_data_cont_email" style="<?php echo $sStyleHidden_cont_email; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cont_email_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cont_email"]) &&  $this->nmgp_cmp_readonly["cont_email"] == "on") { 

 ?>
<input type="hidden" name="cont_email" value="<?php echo $this->form_encode_input($cont_email) . "\">" . $cont_email . ""; ?>
<?php } else { ?>
<span id="id_read_on_cont_email" class="sc-ui-readonly-cont_email css_cont_email_line" style="<?php echo $sStyleReadLab_cont_email; ?>"><?php echo $this->form_encode_input($this->cont_email); ?></span><span id="id_read_off_cont_email" style="white-space: nowrap;<?php echo $sStyleReadInp_cont_email; ?>">
 <input class="sc-js-input scFormObjectOdd css_cont_email_obj" style="" id="id_sc_field_cont_email" type=text name="cont_email" value="<?php echo $this->form_encode_input($cont_email) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cont_email_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cont_email_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 


   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
