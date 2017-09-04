<div id="form_student_registration_form4" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_4" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['parent_name']))
    {
        $this->nm_new_label['parent_name'] = "Parent Name";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $parent_name = $this->parent_name;
   $sStyleHidden_parent_name = '';
   if (isset($this->nmgp_cmp_hidden['parent_name']) && $this->nmgp_cmp_hidden['parent_name'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['parent_name']);
       $sStyleHidden_parent_name = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_parent_name = 'display: none;';
   $sStyleReadInp_parent_name = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['parent_name']) && $this->nmgp_cmp_readonly['parent_name'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['parent_name']);
       $sStyleReadLab_parent_name = '';
       $sStyleReadInp_parent_name = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['parent_name']) && $this->nmgp_cmp_hidden['parent_name'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="parent_name" value="<?php echo $this->form_encode_input($parent_name) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_parent_name_label" id="hidden_field_label_parent_name" style="<?php echo $sStyleHidden_parent_name; ?>"><span id="id_label_parent_name"><?php echo $this->nm_new_label['parent_name']; ?></span></TD>
    <TD class="scFormDataOdd css_parent_name_line" id="hidden_field_data_parent_name" style="<?php echo $sStyleHidden_parent_name; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_parent_name_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["parent_name"]) &&  $this->nmgp_cmp_readonly["parent_name"] == "on") { 

 ?>
<input type="hidden" name="parent_name" value="<?php echo $this->form_encode_input($parent_name) . "\">" . $parent_name . ""; ?>
<?php } else { ?>
<span id="id_read_on_parent_name" class="sc-ui-readonly-parent_name css_parent_name_line" style="<?php echo $sStyleReadLab_parent_name; ?>"><?php echo $this->form_encode_input($this->parent_name); ?></span><span id="id_read_off_parent_name" style="white-space: nowrap;<?php echo $sStyleReadInp_parent_name; ?>">
 <input class="sc-js-input scFormObjectOdd css_parent_name_obj" style="" id="id_sc_field_parent_name" type=text name="parent_name" value="<?php echo $this->form_encode_input($parent_name) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_parent_name_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_parent_name_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['parent_pid']))
    {
        $this->nm_new_label['parent_pid'] = "Parent PID";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $parent_pid = $this->parent_pid;
   $sStyleHidden_parent_pid = '';
   if (isset($this->nmgp_cmp_hidden['parent_pid']) && $this->nmgp_cmp_hidden['parent_pid'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['parent_pid']);
       $sStyleHidden_parent_pid = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_parent_pid = 'display: none;';
   $sStyleReadInp_parent_pid = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['parent_pid']) && $this->nmgp_cmp_readonly['parent_pid'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['parent_pid']);
       $sStyleReadLab_parent_pid = '';
       $sStyleReadInp_parent_pid = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['parent_pid']) && $this->nmgp_cmp_hidden['parent_pid'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="parent_pid" value="<?php echo $this->form_encode_input($parent_pid) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_parent_pid_label" id="hidden_field_label_parent_pid" style="<?php echo $sStyleHidden_parent_pid; ?>"><span id="id_label_parent_pid"><?php echo $this->nm_new_label['parent_pid']; ?></span></TD>
    <TD class="scFormDataOdd css_parent_pid_line" id="hidden_field_data_parent_pid" style="<?php echo $sStyleHidden_parent_pid; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_parent_pid_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["parent_pid"]) &&  $this->nmgp_cmp_readonly["parent_pid"] == "on") { 

 ?>
<input type="hidden" name="parent_pid" value="<?php echo $this->form_encode_input($parent_pid) . "\">" . $parent_pid . ""; ?>
<?php } else { ?>
<span id="id_read_on_parent_pid" class="sc-ui-readonly-parent_pid css_parent_pid_line" style="<?php echo $sStyleReadLab_parent_pid; ?>"><?php echo $this->form_encode_input($this->parent_pid); ?></span><span id="id_read_off_parent_pid" style="white-space: nowrap;<?php echo $sStyleReadInp_parent_pid; ?>">
 <input class="sc-js-input scFormObjectOdd css_parent_pid_obj" style="" id="id_sc_field_parent_pid" type=text name="parent_pid" value="<?php echo $this->form_encode_input($parent_pid) ?>"
 size=13 maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_parent_pid_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_parent_pid_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['parent_status']))
    {
        $this->nm_new_label['parent_status'] = "Parent Status";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $parent_status = $this->parent_status;
   $sStyleHidden_parent_status = '';
   if (isset($this->nmgp_cmp_hidden['parent_status']) && $this->nmgp_cmp_hidden['parent_status'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['parent_status']);
       $sStyleHidden_parent_status = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_parent_status = 'display: none;';
   $sStyleReadInp_parent_status = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['parent_status']) && $this->nmgp_cmp_readonly['parent_status'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['parent_status']);
       $sStyleReadLab_parent_status = '';
       $sStyleReadInp_parent_status = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['parent_status']) && $this->nmgp_cmp_hidden['parent_status'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="parent_status" value="<?php echo $this->form_encode_input($parent_status) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_parent_status_label" id="hidden_field_label_parent_status" style="<?php echo $sStyleHidden_parent_status; ?>"><span id="id_label_parent_status"><?php echo $this->nm_new_label['parent_status']; ?></span></TD>
    <TD class="scFormDataOdd css_parent_status_line" id="hidden_field_data_parent_status" style="<?php echo $sStyleHidden_parent_status; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_parent_status_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["parent_status"]) &&  $this->nmgp_cmp_readonly["parent_status"] == "on") { 

 ?>
<input type="hidden" name="parent_status" value="<?php echo $this->form_encode_input($parent_status) . "\">" . $parent_status . ""; ?>
<?php } else { ?>
<span id="id_read_on_parent_status" class="sc-ui-readonly-parent_status css_parent_status_line" style="<?php echo $sStyleReadLab_parent_status; ?>"><?php echo $this->form_encode_input($this->parent_status); ?></span><span id="id_read_off_parent_status" style="white-space: nowrap;<?php echo $sStyleReadInp_parent_status; ?>">
 <input class="sc-js-input scFormObjectOdd css_parent_status_obj" style="" id="id_sc_field_parent_status" type=text name="parent_status" value="<?php echo $this->form_encode_input($parent_status) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_parent_status_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_parent_status_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['parent_age']))
    {
        $this->nm_new_label['parent_age'] = "Parent Age";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $parent_age = $this->parent_age;
   $sStyleHidden_parent_age = '';
   if (isset($this->nmgp_cmp_hidden['parent_age']) && $this->nmgp_cmp_hidden['parent_age'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['parent_age']);
       $sStyleHidden_parent_age = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_parent_age = 'display: none;';
   $sStyleReadInp_parent_age = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['parent_age']) && $this->nmgp_cmp_readonly['parent_age'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['parent_age']);
       $sStyleReadLab_parent_age = '';
       $sStyleReadInp_parent_age = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['parent_age']) && $this->nmgp_cmp_hidden['parent_age'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="parent_age" value="<?php echo $this->form_encode_input($parent_age) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_parent_age_label" id="hidden_field_label_parent_age" style="<?php echo $sStyleHidden_parent_age; ?>"><span id="id_label_parent_age"><?php echo $this->nm_new_label['parent_age']; ?></span></TD>
    <TD class="scFormDataOdd css_parent_age_line" id="hidden_field_data_parent_age" style="<?php echo $sStyleHidden_parent_age; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_parent_age_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["parent_age"]) &&  $this->nmgp_cmp_readonly["parent_age"] == "on") { 

 ?>
<input type="hidden" name="parent_age" value="<?php echo $this->form_encode_input($parent_age) . "\">" . $parent_age . ""; ?>
<?php } else { ?>
<span id="id_read_on_parent_age" class="sc-ui-readonly-parent_age css_parent_age_line" style="<?php echo $sStyleReadLab_parent_age; ?>"><?php echo $this->form_encode_input($this->parent_age); ?></span><span id="id_read_off_parent_age" style="white-space: nowrap;<?php echo $sStyleReadInp_parent_age; ?>">
 <input class="sc-js-input scFormObjectOdd css_parent_age_obj" style="" id="id_sc_field_parent_age" type=text name="parent_age" value="<?php echo $this->form_encode_input($parent_age) ?>"
 size=11 maxlength=11 alt="{datatype: 'text', maxLength: 11, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_parent_age_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_parent_age_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['parent_occupation']))
    {
        $this->nm_new_label['parent_occupation'] = "Parent Occupation";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $parent_occupation = $this->parent_occupation;
   $sStyleHidden_parent_occupation = '';
   if (isset($this->nmgp_cmp_hidden['parent_occupation']) && $this->nmgp_cmp_hidden['parent_occupation'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['parent_occupation']);
       $sStyleHidden_parent_occupation = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_parent_occupation = 'display: none;';
   $sStyleReadInp_parent_occupation = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['parent_occupation']) && $this->nmgp_cmp_readonly['parent_occupation'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['parent_occupation']);
       $sStyleReadLab_parent_occupation = '';
       $sStyleReadInp_parent_occupation = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['parent_occupation']) && $this->nmgp_cmp_hidden['parent_occupation'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="parent_occupation" value="<?php echo $this->form_encode_input($parent_occupation) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_parent_occupation_label" id="hidden_field_label_parent_occupation" style="<?php echo $sStyleHidden_parent_occupation; ?>"><span id="id_label_parent_occupation"><?php echo $this->nm_new_label['parent_occupation']; ?></span></TD>
    <TD class="scFormDataOdd css_parent_occupation_line" id="hidden_field_data_parent_occupation" style="<?php echo $sStyleHidden_parent_occupation; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_parent_occupation_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["parent_occupation"]) &&  $this->nmgp_cmp_readonly["parent_occupation"] == "on") { 

 ?>
<input type="hidden" name="parent_occupation" value="<?php echo $this->form_encode_input($parent_occupation) . "\">" . $parent_occupation . ""; ?>
<?php } else { ?>
<span id="id_read_on_parent_occupation" class="sc-ui-readonly-parent_occupation css_parent_occupation_line" style="<?php echo $sStyleReadLab_parent_occupation; ?>"><?php echo $this->form_encode_input($this->parent_occupation); ?></span><span id="id_read_off_parent_occupation" style="white-space: nowrap;<?php echo $sStyleReadInp_parent_occupation; ?>">
 <input class="sc-js-input scFormObjectOdd css_parent_occupation_obj" style="" id="id_sc_field_parent_occupation" type=text name="parent_occupation" value="<?php echo $this->form_encode_input($parent_occupation) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_parent_occupation_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_parent_occupation_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['parent_annual_income']))
    {
        $this->nm_new_label['parent_annual_income'] = "Parent Annual Income";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $parent_annual_income = $this->parent_annual_income;
   $sStyleHidden_parent_annual_income = '';
   if (isset($this->nmgp_cmp_hidden['parent_annual_income']) && $this->nmgp_cmp_hidden['parent_annual_income'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['parent_annual_income']);
       $sStyleHidden_parent_annual_income = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_parent_annual_income = 'display: none;';
   $sStyleReadInp_parent_annual_income = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['parent_annual_income']) && $this->nmgp_cmp_readonly['parent_annual_income'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['parent_annual_income']);
       $sStyleReadLab_parent_annual_income = '';
       $sStyleReadInp_parent_annual_income = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['parent_annual_income']) && $this->nmgp_cmp_hidden['parent_annual_income'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="parent_annual_income" value="<?php echo $this->form_encode_input($parent_annual_income) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_parent_annual_income_label" id="hidden_field_label_parent_annual_income" style="<?php echo $sStyleHidden_parent_annual_income; ?>"><span id="id_label_parent_annual_income"><?php echo $this->nm_new_label['parent_annual_income']; ?></span></TD>
    <TD class="scFormDataOdd css_parent_annual_income_line" id="hidden_field_data_parent_annual_income" style="<?php echo $sStyleHidden_parent_annual_income; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_parent_annual_income_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["parent_annual_income"]) &&  $this->nmgp_cmp_readonly["parent_annual_income"] == "on") { 

 ?>
<input type="hidden" name="parent_annual_income" value="<?php echo $this->form_encode_input($parent_annual_income) . "\">" . $parent_annual_income . ""; ?>
<?php } else { ?>
<span id="id_read_on_parent_annual_income" class="sc-ui-readonly-parent_annual_income css_parent_annual_income_line" style="<?php echo $sStyleReadLab_parent_annual_income; ?>"><?php echo $this->form_encode_input($this->parent_annual_income); ?></span><span id="id_read_off_parent_annual_income" style="white-space: nowrap;<?php echo $sStyleReadInp_parent_annual_income; ?>">
 <input class="sc-js-input scFormObjectOdd css_parent_annual_income_obj" style="" id="id_sc_field_parent_annual_income" type=text name="parent_annual_income" value="<?php echo $this->form_encode_input($parent_annual_income) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_parent_annual_income_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_parent_annual_income_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emer_contact']))
    {
        $this->nm_new_label['emer_contact'] = "Emergency Contact";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emer_contact = $this->emer_contact;
   $sStyleHidden_emer_contact = '';
   if (isset($this->nmgp_cmp_hidden['emer_contact']) && $this->nmgp_cmp_hidden['emer_contact'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emer_contact']);
       $sStyleHidden_emer_contact = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emer_contact = 'display: none;';
   $sStyleReadInp_emer_contact = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emer_contact']) && $this->nmgp_cmp_readonly['emer_contact'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emer_contact']);
       $sStyleReadLab_emer_contact = '';
       $sStyleReadInp_emer_contact = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emer_contact']) && $this->nmgp_cmp_hidden['emer_contact'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emer_contact" value="<?php echo $this->form_encode_input($emer_contact) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_emer_contact_label" id="hidden_field_label_emer_contact" style="<?php echo $sStyleHidden_emer_contact; ?>"><span id="id_label_emer_contact"><?php echo $this->nm_new_label['emer_contact']; ?></span></TD>
    <TD class="scFormDataOdd css_emer_contact_line" id="hidden_field_data_emer_contact" style="<?php echo $sStyleHidden_emer_contact; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emer_contact_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emer_contact"]) &&  $this->nmgp_cmp_readonly["emer_contact"] == "on") { 

 ?>
<input type="hidden" name="emer_contact" value="<?php echo $this->form_encode_input($emer_contact) . "\">" . $emer_contact . ""; ?>
<?php } else { ?>
<span id="id_read_on_emer_contact" class="sc-ui-readonly-emer_contact css_emer_contact_line" style="<?php echo $sStyleReadLab_emer_contact; ?>"><?php echo $this->form_encode_input($this->emer_contact); ?></span><span id="id_read_off_emer_contact" style="white-space: nowrap;<?php echo $sStyleReadInp_emer_contact; ?>">
 <input class="sc-js-input scFormObjectOdd css_emer_contact_obj" style="" id="id_sc_field_emer_contact" type=text name="emer_contact" value="<?php echo $this->form_encode_input($emer_contact) ?>"
 size=50 maxlength=250 alt="{datatype: 'text', maxLength: 250, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emer_contact_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emer_contact_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emer_homephone']))
    {
        $this->nm_new_label['emer_homephone'] = "Emergency Homephone";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emer_homephone = $this->emer_homephone;
   $sStyleHidden_emer_homephone = '';
   if (isset($this->nmgp_cmp_hidden['emer_homephone']) && $this->nmgp_cmp_hidden['emer_homephone'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emer_homephone']);
       $sStyleHidden_emer_homephone = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emer_homephone = 'display: none;';
   $sStyleReadInp_emer_homephone = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emer_homephone']) && $this->nmgp_cmp_readonly['emer_homephone'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emer_homephone']);
       $sStyleReadLab_emer_homephone = '';
       $sStyleReadInp_emer_homephone = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emer_homephone']) && $this->nmgp_cmp_hidden['emer_homephone'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emer_homephone" value="<?php echo $this->form_encode_input($emer_homephone) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_emer_homephone_label" id="hidden_field_label_emer_homephone" style="<?php echo $sStyleHidden_emer_homephone; ?>"><span id="id_label_emer_homephone"><?php echo $this->nm_new_label['emer_homephone']; ?></span></TD>
    <TD class="scFormDataOdd css_emer_homephone_line" id="hidden_field_data_emer_homephone" style="<?php echo $sStyleHidden_emer_homephone; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emer_homephone_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emer_homephone"]) &&  $this->nmgp_cmp_readonly["emer_homephone"] == "on") { 

 ?>
<input type="hidden" name="emer_homephone" value="<?php echo $this->form_encode_input($emer_homephone) . "\">" . $emer_homephone . ""; ?>
<?php } else { ?>
<span id="id_read_on_emer_homephone" class="sc-ui-readonly-emer_homephone css_emer_homephone_line" style="<?php echo $sStyleReadLab_emer_homephone; ?>"><?php echo $this->form_encode_input($this->emer_homephone); ?></span><span id="id_read_off_emer_homephone" style="white-space: nowrap;<?php echo $sStyleReadInp_emer_homephone; ?>">
 <input class="sc-js-input scFormObjectOdd css_emer_homephone_obj" style="" id="id_sc_field_emer_homephone" type=text name="emer_homephone" value="<?php echo $this->form_encode_input($emer_homephone) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emer_homephone_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emer_homephone_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emer_mobilephone']))
    {
        $this->nm_new_label['emer_mobilephone'] = "Emergency Mobilephone";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emer_mobilephone = $this->emer_mobilephone;
   $sStyleHidden_emer_mobilephone = '';
   if (isset($this->nmgp_cmp_hidden['emer_mobilephone']) && $this->nmgp_cmp_hidden['emer_mobilephone'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emer_mobilephone']);
       $sStyleHidden_emer_mobilephone = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emer_mobilephone = 'display: none;';
   $sStyleReadInp_emer_mobilephone = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emer_mobilephone']) && $this->nmgp_cmp_readonly['emer_mobilephone'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emer_mobilephone']);
       $sStyleReadLab_emer_mobilephone = '';
       $sStyleReadInp_emer_mobilephone = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emer_mobilephone']) && $this->nmgp_cmp_hidden['emer_mobilephone'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emer_mobilephone" value="<?php echo $this->form_encode_input($emer_mobilephone) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_emer_mobilephone_label" id="hidden_field_label_emer_mobilephone" style="<?php echo $sStyleHidden_emer_mobilephone; ?>"><span id="id_label_emer_mobilephone"><?php echo $this->nm_new_label['emer_mobilephone']; ?></span></TD>
    <TD class="scFormDataOdd css_emer_mobilephone_line" id="hidden_field_data_emer_mobilephone" style="<?php echo $sStyleHidden_emer_mobilephone; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emer_mobilephone_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emer_mobilephone"]) &&  $this->nmgp_cmp_readonly["emer_mobilephone"] == "on") { 

 ?>
<input type="hidden" name="emer_mobilephone" value="<?php echo $this->form_encode_input($emer_mobilephone) . "\">" . $emer_mobilephone . ""; ?>
<?php } else { ?>
<span id="id_read_on_emer_mobilephone" class="sc-ui-readonly-emer_mobilephone css_emer_mobilephone_line" style="<?php echo $sStyleReadLab_emer_mobilephone; ?>"><?php echo $this->form_encode_input($this->emer_mobilephone); ?></span><span id="id_read_off_emer_mobilephone" style="white-space: nowrap;<?php echo $sStyleReadInp_emer_mobilephone; ?>">
 <input class="sc-js-input scFormObjectOdd css_emer_mobilephone_obj" style="" id="id_sc_field_emer_mobilephone" type=text name="emer_mobilephone" value="<?php echo $this->form_encode_input($emer_mobilephone) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emer_mobilephone_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emer_mobilephone_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emer_relationship']))
    {
        $this->nm_new_label['emer_relationship'] = "Emergency Relationship";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emer_relationship = $this->emer_relationship;
   $sStyleHidden_emer_relationship = '';
   if (isset($this->nmgp_cmp_hidden['emer_relationship']) && $this->nmgp_cmp_hidden['emer_relationship'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emer_relationship']);
       $sStyleHidden_emer_relationship = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emer_relationship = 'display: none;';
   $sStyleReadInp_emer_relationship = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emer_relationship']) && $this->nmgp_cmp_readonly['emer_relationship'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emer_relationship']);
       $sStyleReadLab_emer_relationship = '';
       $sStyleReadInp_emer_relationship = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emer_relationship']) && $this->nmgp_cmp_hidden['emer_relationship'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emer_relationship" value="<?php echo $this->form_encode_input($emer_relationship) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_emer_relationship_label" id="hidden_field_label_emer_relationship" style="<?php echo $sStyleHidden_emer_relationship; ?>"><span id="id_label_emer_relationship"><?php echo $this->nm_new_label['emer_relationship']; ?></span></TD>
    <TD class="scFormDataOdd css_emer_relationship_line" id="hidden_field_data_emer_relationship" style="<?php echo $sStyleHidden_emer_relationship; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emer_relationship_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emer_relationship"]) &&  $this->nmgp_cmp_readonly["emer_relationship"] == "on") { 

 ?>
<input type="hidden" name="emer_relationship" value="<?php echo $this->form_encode_input($emer_relationship) . "\">" . $emer_relationship . ""; ?>
<?php } else { ?>
<span id="id_read_on_emer_relationship" class="sc-ui-readonly-emer_relationship css_emer_relationship_line" style="<?php echo $sStyleReadLab_emer_relationship; ?>"><?php echo $this->form_encode_input($this->emer_relationship); ?></span><span id="id_read_off_emer_relationship" style="white-space: nowrap;<?php echo $sStyleReadInp_emer_relationship; ?>">
 <input class="sc-js-input scFormObjectOdd css_emer_relationship_obj" style="" id="id_sc_field_emer_relationship" type=text name="emer_relationship" value="<?php echo $this->form_encode_input($emer_relationship) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emer_relationship_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emer_relationship_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emer_address']))
    {
        $this->nm_new_label['emer_address'] = "Emergency Address";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emer_address = $this->emer_address;
   $sStyleHidden_emer_address = '';
   if (isset($this->nmgp_cmp_hidden['emer_address']) && $this->nmgp_cmp_hidden['emer_address'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emer_address']);
       $sStyleHidden_emer_address = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emer_address = 'display: none;';
   $sStyleReadInp_emer_address = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emer_address']) && $this->nmgp_cmp_readonly['emer_address'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emer_address']);
       $sStyleReadLab_emer_address = '';
       $sStyleReadInp_emer_address = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emer_address']) && $this->nmgp_cmp_hidden['emer_address'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emer_address" value="<?php echo $this->form_encode_input($emer_address) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_emer_address_label" id="hidden_field_label_emer_address" style="<?php echo $sStyleHidden_emer_address; ?>"><span id="id_label_emer_address"><?php echo $this->nm_new_label['emer_address']; ?></span></TD>
    <TD class="scFormDataOdd css_emer_address_line" id="hidden_field_data_emer_address" style="<?php echo $sStyleHidden_emer_address; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emer_address_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emer_address"]) &&  $this->nmgp_cmp_readonly["emer_address"] == "on") { 

 ?>
<input type="hidden" name="emer_address" value="<?php echo $this->form_encode_input($emer_address) . "\">" . $emer_address . ""; ?>
<?php } else { ?>
<span id="id_read_on_emer_address" class="sc-ui-readonly-emer_address css_emer_address_line" style="<?php echo $sStyleReadLab_emer_address; ?>"><?php echo $this->form_encode_input($this->emer_address); ?></span><span id="id_read_off_emer_address" style="white-space: nowrap;<?php echo $sStyleReadInp_emer_address; ?>">
 <input class="sc-js-input scFormObjectOdd css_emer_address_obj" style="" id="id_sc_field_emer_address" type=text name="emer_address" value="<?php echo $this->form_encode_input($emer_address) ?>"
 size=50 maxlength=250 alt="{datatype: 'text', maxLength: 250, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emer_address_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emer_address_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 


   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
</td></tr>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "birpara", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", "brec_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio_off", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna_off", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca_off", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal_off", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] != "R")
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
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
 $NM_pag_atual = "form_student_registration_form0";
 if (isset($this->nmgp_ancora) && $this->nmgp_ancora != "")
 {
     $NM_pag_atual = "form_student_registration_form" . $this->nmgp_ancora;
 }
?>
  document.getElementById('<?php echo $NM_pag_atual; ?>').style.width='';
  document.getElementById('<?php echo $NM_pag_atual; ?>').style.height='';
  document.getElementById('<?php echo $NM_pag_atual; ?>').style.display='';
  document.getElementById('<?php echo $NM_pag_atual; ?>').style.overflow='visible';
</script> 
<?php
      $Tzone = ini_get('date.timezone');
      if (empty($Tzone))
      {
?>
<script> 
  _scAjaxShowMessage('', "<?php echo $this->Ini->Nm_lang['lang_errm_tz']; ?>", false, 0, false, "Ok", 0, 0, 0, 0, "", "", "", true, false);
</script> 
<?php
      }
?>
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3,4);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_student_registration");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_student_registration");
 parent.scAjaxDetailHeight("form_student_registration", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_student_registration", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_student_registration", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
?>
<script type="text/javascript">
_scAjaxShowMessage(scMsgDefTitle, "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", false, sc_ajaxMsgTime, false, "Ok", 0, 0, 0, 0, "", "", "", false, true);
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-in"><?php echo $this->Ini->Nm_lang['lang_version_mobile']; ?></span>
<?php
       }
?>
</body> 
</html> 
