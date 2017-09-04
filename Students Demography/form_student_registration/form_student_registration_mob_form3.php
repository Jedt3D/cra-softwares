<div id="form_student_registration_mob_form3" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_3" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['father_name']))
    {
        $this->nm_new_label['father_name'] = "Father Name";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $father_name = $this->father_name;
   $sStyleHidden_father_name = '';
   if (isset($this->nmgp_cmp_hidden['father_name']) && $this->nmgp_cmp_hidden['father_name'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['father_name']);
       $sStyleHidden_father_name = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_father_name = 'display: none;';
   $sStyleReadInp_father_name = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['father_name']) && $this->nmgp_cmp_readonly['father_name'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['father_name']);
       $sStyleReadLab_father_name = '';
       $sStyleReadInp_father_name = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['father_name']) && $this->nmgp_cmp_hidden['father_name'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="father_name" value="<?php echo $this->form_encode_input($father_name) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_father_name_line" id="hidden_field_data_father_name" style="<?php echo $sStyleHidden_father_name; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_father_name_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_father_name_label"><span id="id_label_father_name"><?php echo $this->nm_new_label['father_name']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["father_name"]) &&  $this->nmgp_cmp_readonly["father_name"] == "on") { 

 ?>
<input type="hidden" name="father_name" value="<?php echo $this->form_encode_input($father_name) . "\">" . $father_name . ""; ?>
<?php } else { ?>
<span id="id_read_on_father_name" class="sc-ui-readonly-father_name css_father_name_line" style="<?php echo $sStyleReadLab_father_name; ?>"><?php echo $this->form_encode_input($this->father_name); ?></span><span id="id_read_off_father_name" style="white-space: nowrap;<?php echo $sStyleReadInp_father_name; ?>">
 <input class="sc-js-input scFormObjectOdd css_father_name_obj" style="" id="id_sc_field_father_name" type=text name="father_name" value="<?php echo $this->form_encode_input($father_name) ?>"
 size=50 maxlength=250 alt="{datatype: 'text', maxLength: 250, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_father_name_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_father_name_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['father_pid']))
    {
        $this->nm_new_label['father_pid'] = "Father PID";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $father_pid = $this->father_pid;
   $sStyleHidden_father_pid = '';
   if (isset($this->nmgp_cmp_hidden['father_pid']) && $this->nmgp_cmp_hidden['father_pid'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['father_pid']);
       $sStyleHidden_father_pid = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_father_pid = 'display: none;';
   $sStyleReadInp_father_pid = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['father_pid']) && $this->nmgp_cmp_readonly['father_pid'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['father_pid']);
       $sStyleReadLab_father_pid = '';
       $sStyleReadInp_father_pid = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['father_pid']) && $this->nmgp_cmp_hidden['father_pid'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="father_pid" value="<?php echo $this->form_encode_input($father_pid) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_father_pid_line" id="hidden_field_data_father_pid" style="<?php echo $sStyleHidden_father_pid; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_father_pid_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_father_pid_label"><span id="id_label_father_pid"><?php echo $this->nm_new_label['father_pid']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["father_pid"]) &&  $this->nmgp_cmp_readonly["father_pid"] == "on") { 

 ?>
<input type="hidden" name="father_pid" value="<?php echo $this->form_encode_input($father_pid) . "\">" . $father_pid . ""; ?>
<?php } else { ?>
<span id="id_read_on_father_pid" class="sc-ui-readonly-father_pid css_father_pid_line" style="<?php echo $sStyleReadLab_father_pid; ?>"><?php echo $this->form_encode_input($this->father_pid); ?></span><span id="id_read_off_father_pid" style="white-space: nowrap;<?php echo $sStyleReadInp_father_pid; ?>">
 <input class="sc-js-input scFormObjectOdd css_father_pid_obj" style="" id="id_sc_field_father_pid" type=text name="father_pid" value="<?php echo $this->form_encode_input($father_pid) ?>"
 size=13 maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_father_pid_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_father_pid_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['father_status']))
    {
        $this->nm_new_label['father_status'] = "Father Status";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $father_status = $this->father_status;
   $sStyleHidden_father_status = '';
   if (isset($this->nmgp_cmp_hidden['father_status']) && $this->nmgp_cmp_hidden['father_status'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['father_status']);
       $sStyleHidden_father_status = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_father_status = 'display: none;';
   $sStyleReadInp_father_status = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['father_status']) && $this->nmgp_cmp_readonly['father_status'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['father_status']);
       $sStyleReadLab_father_status = '';
       $sStyleReadInp_father_status = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['father_status']) && $this->nmgp_cmp_hidden['father_status'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="father_status" value="<?php echo $this->form_encode_input($father_status) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_father_status_line" id="hidden_field_data_father_status" style="<?php echo $sStyleHidden_father_status; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_father_status_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_father_status_label"><span id="id_label_father_status"><?php echo $this->nm_new_label['father_status']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["father_status"]) &&  $this->nmgp_cmp_readonly["father_status"] == "on") { 

 ?>
<input type="hidden" name="father_status" value="<?php echo $this->form_encode_input($father_status) . "\">" . $father_status . ""; ?>
<?php } else { ?>
<span id="id_read_on_father_status" class="sc-ui-readonly-father_status css_father_status_line" style="<?php echo $sStyleReadLab_father_status; ?>"><?php echo $this->form_encode_input($this->father_status); ?></span><span id="id_read_off_father_status" style="white-space: nowrap;<?php echo $sStyleReadInp_father_status; ?>">
 <input class="sc-js-input scFormObjectOdd css_father_status_obj" style="" id="id_sc_field_father_status" type=text name="father_status" value="<?php echo $this->form_encode_input($father_status) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_father_status_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_father_status_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['father_age']))
    {
        $this->nm_new_label['father_age'] = "Father Age";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $father_age = $this->father_age;
   $sStyleHidden_father_age = '';
   if (isset($this->nmgp_cmp_hidden['father_age']) && $this->nmgp_cmp_hidden['father_age'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['father_age']);
       $sStyleHidden_father_age = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_father_age = 'display: none;';
   $sStyleReadInp_father_age = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['father_age']) && $this->nmgp_cmp_readonly['father_age'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['father_age']);
       $sStyleReadLab_father_age = '';
       $sStyleReadInp_father_age = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['father_age']) && $this->nmgp_cmp_hidden['father_age'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="father_age" value="<?php echo $this->form_encode_input($father_age) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_father_age_line" id="hidden_field_data_father_age" style="<?php echo $sStyleHidden_father_age; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_father_age_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_father_age_label"><span id="id_label_father_age"><?php echo $this->nm_new_label['father_age']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["father_age"]) &&  $this->nmgp_cmp_readonly["father_age"] == "on") { 

 ?>
<input type="hidden" name="father_age" value="<?php echo $this->form_encode_input($father_age) . "\">" . $father_age . ""; ?>
<?php } else { ?>
<span id="id_read_on_father_age" class="sc-ui-readonly-father_age css_father_age_line" style="<?php echo $sStyleReadLab_father_age; ?>"><?php echo $this->form_encode_input($this->father_age); ?></span><span id="id_read_off_father_age" style="white-space: nowrap;<?php echo $sStyleReadInp_father_age; ?>">
 <input class="sc-js-input scFormObjectOdd css_father_age_obj" style="" id="id_sc_field_father_age" type=text name="father_age" value="<?php echo $this->form_encode_input($father_age) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_father_age_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_father_age_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['father_occupation']))
    {
        $this->nm_new_label['father_occupation'] = "Father Occupation";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $father_occupation = $this->father_occupation;
   $sStyleHidden_father_occupation = '';
   if (isset($this->nmgp_cmp_hidden['father_occupation']) && $this->nmgp_cmp_hidden['father_occupation'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['father_occupation']);
       $sStyleHidden_father_occupation = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_father_occupation = 'display: none;';
   $sStyleReadInp_father_occupation = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['father_occupation']) && $this->nmgp_cmp_readonly['father_occupation'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['father_occupation']);
       $sStyleReadLab_father_occupation = '';
       $sStyleReadInp_father_occupation = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['father_occupation']) && $this->nmgp_cmp_hidden['father_occupation'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="father_occupation" value="<?php echo $this->form_encode_input($father_occupation) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_father_occupation_line" id="hidden_field_data_father_occupation" style="<?php echo $sStyleHidden_father_occupation; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_father_occupation_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_father_occupation_label"><span id="id_label_father_occupation"><?php echo $this->nm_new_label['father_occupation']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["father_occupation"]) &&  $this->nmgp_cmp_readonly["father_occupation"] == "on") { 

 ?>
<input type="hidden" name="father_occupation" value="<?php echo $this->form_encode_input($father_occupation) . "\">" . $father_occupation . ""; ?>
<?php } else { ?>
<span id="id_read_on_father_occupation" class="sc-ui-readonly-father_occupation css_father_occupation_line" style="<?php echo $sStyleReadLab_father_occupation; ?>"><?php echo $this->form_encode_input($this->father_occupation); ?></span><span id="id_read_off_father_occupation" style="white-space: nowrap;<?php echo $sStyleReadInp_father_occupation; ?>">
 <input class="sc-js-input scFormObjectOdd css_father_occupation_obj" style="" id="id_sc_field_father_occupation" type=text name="father_occupation" value="<?php echo $this->form_encode_input($father_occupation) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_father_occupation_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_father_occupation_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['father_annual_income']))
    {
        $this->nm_new_label['father_annual_income'] = "Father Annual Income";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $father_annual_income = $this->father_annual_income;
   $sStyleHidden_father_annual_income = '';
   if (isset($this->nmgp_cmp_hidden['father_annual_income']) && $this->nmgp_cmp_hidden['father_annual_income'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['father_annual_income']);
       $sStyleHidden_father_annual_income = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_father_annual_income = 'display: none;';
   $sStyleReadInp_father_annual_income = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['father_annual_income']) && $this->nmgp_cmp_readonly['father_annual_income'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['father_annual_income']);
       $sStyleReadLab_father_annual_income = '';
       $sStyleReadInp_father_annual_income = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['father_annual_income']) && $this->nmgp_cmp_hidden['father_annual_income'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="father_annual_income" value="<?php echo $this->form_encode_input($father_annual_income) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_father_annual_income_line" id="hidden_field_data_father_annual_income" style="<?php echo $sStyleHidden_father_annual_income; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_father_annual_income_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_father_annual_income_label"><span id="id_label_father_annual_income"><?php echo $this->nm_new_label['father_annual_income']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["father_annual_income"]) &&  $this->nmgp_cmp_readonly["father_annual_income"] == "on") { 

 ?>
<input type="hidden" name="father_annual_income" value="<?php echo $this->form_encode_input($father_annual_income) . "\">" . $father_annual_income . ""; ?>
<?php } else { ?>
<span id="id_read_on_father_annual_income" class="sc-ui-readonly-father_annual_income css_father_annual_income_line" style="<?php echo $sStyleReadLab_father_annual_income; ?>"><?php echo $this->form_encode_input($this->father_annual_income); ?></span><span id="id_read_off_father_annual_income" style="white-space: nowrap;<?php echo $sStyleReadInp_father_annual_income; ?>">
 <input class="sc-js-input scFormObjectOdd css_father_annual_income_obj" style="" id="id_sc_field_father_annual_income" type=text name="father_annual_income" value="<?php echo $this->form_encode_input($father_annual_income) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_father_annual_income_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_father_annual_income_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mother_name']))
    {
        $this->nm_new_label['mother_name'] = "Mother Name";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mother_name = $this->mother_name;
   $sStyleHidden_mother_name = '';
   if (isset($this->nmgp_cmp_hidden['mother_name']) && $this->nmgp_cmp_hidden['mother_name'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mother_name']);
       $sStyleHidden_mother_name = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mother_name = 'display: none;';
   $sStyleReadInp_mother_name = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mother_name']) && $this->nmgp_cmp_readonly['mother_name'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mother_name']);
       $sStyleReadLab_mother_name = '';
       $sStyleReadInp_mother_name = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mother_name']) && $this->nmgp_cmp_hidden['mother_name'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mother_name" value="<?php echo $this->form_encode_input($mother_name) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mother_name_line" id="hidden_field_data_mother_name" style="<?php echo $sStyleHidden_mother_name; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mother_name_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mother_name_label"><span id="id_label_mother_name"><?php echo $this->nm_new_label['mother_name']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mother_name"]) &&  $this->nmgp_cmp_readonly["mother_name"] == "on") { 

 ?>
<input type="hidden" name="mother_name" value="<?php echo $this->form_encode_input($mother_name) . "\">" . $mother_name . ""; ?>
<?php } else { ?>
<span id="id_read_on_mother_name" class="sc-ui-readonly-mother_name css_mother_name_line" style="<?php echo $sStyleReadLab_mother_name; ?>"><?php echo $this->form_encode_input($this->mother_name); ?></span><span id="id_read_off_mother_name" style="white-space: nowrap;<?php echo $sStyleReadInp_mother_name; ?>">
 <input class="sc-js-input scFormObjectOdd css_mother_name_obj" style="" id="id_sc_field_mother_name" type=text name="mother_name" value="<?php echo $this->form_encode_input($mother_name) ?>"
 size=50 maxlength=250 alt="{datatype: 'text', maxLength: 250, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mother_name_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mother_name_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mother_pid']))
    {
        $this->nm_new_label['mother_pid'] = "Mother PID";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mother_pid = $this->mother_pid;
   $sStyleHidden_mother_pid = '';
   if (isset($this->nmgp_cmp_hidden['mother_pid']) && $this->nmgp_cmp_hidden['mother_pid'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mother_pid']);
       $sStyleHidden_mother_pid = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mother_pid = 'display: none;';
   $sStyleReadInp_mother_pid = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mother_pid']) && $this->nmgp_cmp_readonly['mother_pid'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mother_pid']);
       $sStyleReadLab_mother_pid = '';
       $sStyleReadInp_mother_pid = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mother_pid']) && $this->nmgp_cmp_hidden['mother_pid'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mother_pid" value="<?php echo $this->form_encode_input($mother_pid) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mother_pid_line" id="hidden_field_data_mother_pid" style="<?php echo $sStyleHidden_mother_pid; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mother_pid_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mother_pid_label"><span id="id_label_mother_pid"><?php echo $this->nm_new_label['mother_pid']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mother_pid"]) &&  $this->nmgp_cmp_readonly["mother_pid"] == "on") { 

 ?>
<input type="hidden" name="mother_pid" value="<?php echo $this->form_encode_input($mother_pid) . "\">" . $mother_pid . ""; ?>
<?php } else { ?>
<span id="id_read_on_mother_pid" class="sc-ui-readonly-mother_pid css_mother_pid_line" style="<?php echo $sStyleReadLab_mother_pid; ?>"><?php echo $this->form_encode_input($this->mother_pid); ?></span><span id="id_read_off_mother_pid" style="white-space: nowrap;<?php echo $sStyleReadInp_mother_pid; ?>">
 <input class="sc-js-input scFormObjectOdd css_mother_pid_obj" style="" id="id_sc_field_mother_pid" type=text name="mother_pid" value="<?php echo $this->form_encode_input($mother_pid) ?>"
 size=13 maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mother_pid_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mother_pid_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mother_status']))
    {
        $this->nm_new_label['mother_status'] = "Mother Status";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mother_status = $this->mother_status;
   $sStyleHidden_mother_status = '';
   if (isset($this->nmgp_cmp_hidden['mother_status']) && $this->nmgp_cmp_hidden['mother_status'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mother_status']);
       $sStyleHidden_mother_status = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mother_status = 'display: none;';
   $sStyleReadInp_mother_status = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mother_status']) && $this->nmgp_cmp_readonly['mother_status'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mother_status']);
       $sStyleReadLab_mother_status = '';
       $sStyleReadInp_mother_status = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mother_status']) && $this->nmgp_cmp_hidden['mother_status'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mother_status" value="<?php echo $this->form_encode_input($mother_status) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mother_status_line" id="hidden_field_data_mother_status" style="<?php echo $sStyleHidden_mother_status; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mother_status_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mother_status_label"><span id="id_label_mother_status"><?php echo $this->nm_new_label['mother_status']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mother_status"]) &&  $this->nmgp_cmp_readonly["mother_status"] == "on") { 

 ?>
<input type="hidden" name="mother_status" value="<?php echo $this->form_encode_input($mother_status) . "\">" . $mother_status . ""; ?>
<?php } else { ?>
<span id="id_read_on_mother_status" class="sc-ui-readonly-mother_status css_mother_status_line" style="<?php echo $sStyleReadLab_mother_status; ?>"><?php echo $this->form_encode_input($this->mother_status); ?></span><span id="id_read_off_mother_status" style="white-space: nowrap;<?php echo $sStyleReadInp_mother_status; ?>">
 <input class="sc-js-input scFormObjectOdd css_mother_status_obj" style="" id="id_sc_field_mother_status" type=text name="mother_status" value="<?php echo $this->form_encode_input($mother_status) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mother_status_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mother_status_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mother_age']))
    {
        $this->nm_new_label['mother_age'] = "Mother Age";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mother_age = $this->mother_age;
   $sStyleHidden_mother_age = '';
   if (isset($this->nmgp_cmp_hidden['mother_age']) && $this->nmgp_cmp_hidden['mother_age'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mother_age']);
       $sStyleHidden_mother_age = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mother_age = 'display: none;';
   $sStyleReadInp_mother_age = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mother_age']) && $this->nmgp_cmp_readonly['mother_age'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mother_age']);
       $sStyleReadLab_mother_age = '';
       $sStyleReadInp_mother_age = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mother_age']) && $this->nmgp_cmp_hidden['mother_age'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mother_age" value="<?php echo $this->form_encode_input($mother_age) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mother_age_line" id="hidden_field_data_mother_age" style="<?php echo $sStyleHidden_mother_age; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mother_age_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mother_age_label"><span id="id_label_mother_age"><?php echo $this->nm_new_label['mother_age']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mother_age"]) &&  $this->nmgp_cmp_readonly["mother_age"] == "on") { 

 ?>
<input type="hidden" name="mother_age" value="<?php echo $this->form_encode_input($mother_age) . "\">" . $mother_age . ""; ?>
<?php } else { ?>
<span id="id_read_on_mother_age" class="sc-ui-readonly-mother_age css_mother_age_line" style="<?php echo $sStyleReadLab_mother_age; ?>"><?php echo $this->form_encode_input($this->mother_age); ?></span><span id="id_read_off_mother_age" style="white-space: nowrap;<?php echo $sStyleReadInp_mother_age; ?>">
 <input class="sc-js-input scFormObjectOdd css_mother_age_obj" style="" id="id_sc_field_mother_age" type=text name="mother_age" value="<?php echo $this->form_encode_input($mother_age) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mother_age_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mother_age_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mother_occupation']))
    {
        $this->nm_new_label['mother_occupation'] = "Mother Occupation";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mother_occupation = $this->mother_occupation;
   $sStyleHidden_mother_occupation = '';
   if (isset($this->nmgp_cmp_hidden['mother_occupation']) && $this->nmgp_cmp_hidden['mother_occupation'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mother_occupation']);
       $sStyleHidden_mother_occupation = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mother_occupation = 'display: none;';
   $sStyleReadInp_mother_occupation = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mother_occupation']) && $this->nmgp_cmp_readonly['mother_occupation'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mother_occupation']);
       $sStyleReadLab_mother_occupation = '';
       $sStyleReadInp_mother_occupation = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mother_occupation']) && $this->nmgp_cmp_hidden['mother_occupation'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mother_occupation" value="<?php echo $this->form_encode_input($mother_occupation) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mother_occupation_line" id="hidden_field_data_mother_occupation" style="<?php echo $sStyleHidden_mother_occupation; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mother_occupation_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mother_occupation_label"><span id="id_label_mother_occupation"><?php echo $this->nm_new_label['mother_occupation']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mother_occupation"]) &&  $this->nmgp_cmp_readonly["mother_occupation"] == "on") { 

 ?>
<input type="hidden" name="mother_occupation" value="<?php echo $this->form_encode_input($mother_occupation) . "\">" . $mother_occupation . ""; ?>
<?php } else { ?>
<span id="id_read_on_mother_occupation" class="sc-ui-readonly-mother_occupation css_mother_occupation_line" style="<?php echo $sStyleReadLab_mother_occupation; ?>"><?php echo $this->form_encode_input($this->mother_occupation); ?></span><span id="id_read_off_mother_occupation" style="white-space: nowrap;<?php echo $sStyleReadInp_mother_occupation; ?>">
 <input class="sc-js-input scFormObjectOdd css_mother_occupation_obj" style="" id="id_sc_field_mother_occupation" type=text name="mother_occupation" value="<?php echo $this->form_encode_input($mother_occupation) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mother_occupation_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mother_occupation_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mother_annual_income']))
    {
        $this->nm_new_label['mother_annual_income'] = "Mother Annual Income";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mother_annual_income = $this->mother_annual_income;
   $sStyleHidden_mother_annual_income = '';
   if (isset($this->nmgp_cmp_hidden['mother_annual_income']) && $this->nmgp_cmp_hidden['mother_annual_income'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mother_annual_income']);
       $sStyleHidden_mother_annual_income = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mother_annual_income = 'display: none;';
   $sStyleReadInp_mother_annual_income = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mother_annual_income']) && $this->nmgp_cmp_readonly['mother_annual_income'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mother_annual_income']);
       $sStyleReadLab_mother_annual_income = '';
       $sStyleReadInp_mother_annual_income = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mother_annual_income']) && $this->nmgp_cmp_hidden['mother_annual_income'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mother_annual_income" value="<?php echo $this->form_encode_input($mother_annual_income) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mother_annual_income_line" id="hidden_field_data_mother_annual_income" style="<?php echo $sStyleHidden_mother_annual_income; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mother_annual_income_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mother_annual_income_label"><span id="id_label_mother_annual_income"><?php echo $this->nm_new_label['mother_annual_income']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mother_annual_income"]) &&  $this->nmgp_cmp_readonly["mother_annual_income"] == "on") { 

 ?>
<input type="hidden" name="mother_annual_income" value="<?php echo $this->form_encode_input($mother_annual_income) . "\">" . $mother_annual_income . ""; ?>
<?php } else { ?>
<span id="id_read_on_mother_annual_income" class="sc-ui-readonly-mother_annual_income css_mother_annual_income_line" style="<?php echo $sStyleReadLab_mother_annual_income; ?>"><?php echo $this->form_encode_input($this->mother_annual_income); ?></span><span id="id_read_off_mother_annual_income" style="white-space: nowrap;<?php echo $sStyleReadInp_mother_annual_income; ?>">
 <input class="sc-js-input scFormObjectOdd css_mother_annual_income_obj" style="" id="id_sc_field_mother_annual_income" type=text name="mother_annual_income" value="<?php echo $this->form_encode_input($mother_annual_income) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mother_annual_income_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mother_annual_income_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['marriage_status']))
    {
        $this->nm_new_label['marriage_status'] = "Marriage Status";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $marriage_status = $this->marriage_status;
   $sStyleHidden_marriage_status = '';
   if (isset($this->nmgp_cmp_hidden['marriage_status']) && $this->nmgp_cmp_hidden['marriage_status'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['marriage_status']);
       $sStyleHidden_marriage_status = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_marriage_status = 'display: none;';
   $sStyleReadInp_marriage_status = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['marriage_status']) && $this->nmgp_cmp_readonly['marriage_status'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['marriage_status']);
       $sStyleReadLab_marriage_status = '';
       $sStyleReadInp_marriage_status = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['marriage_status']) && $this->nmgp_cmp_hidden['marriage_status'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="marriage_status" value="<?php echo $this->form_encode_input($marriage_status) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_marriage_status_line" id="hidden_field_data_marriage_status" style="<?php echo $sStyleHidden_marriage_status; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_marriage_status_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_marriage_status_label"><span id="id_label_marriage_status"><?php echo $this->nm_new_label['marriage_status']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["marriage_status"]) &&  $this->nmgp_cmp_readonly["marriage_status"] == "on") { 

 ?>
<input type="hidden" name="marriage_status" value="<?php echo $this->form_encode_input($marriage_status) . "\">" . $marriage_status . ""; ?>
<?php } else { ?>
<span id="id_read_on_marriage_status" class="sc-ui-readonly-marriage_status css_marriage_status_line" style="<?php echo $sStyleReadLab_marriage_status; ?>"><?php echo $this->form_encode_input($this->marriage_status); ?></span><span id="id_read_off_marriage_status" style="white-space: nowrap;<?php echo $sStyleReadInp_marriage_status; ?>">
 <input class="sc-js-input scFormObjectOdd css_marriage_status_obj" style="" id="id_sc_field_marriage_status" type=text name="marriage_status" value="<?php echo $this->form_encode_input($marriage_status) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_marriage_status_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_marriage_status_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
