<?php
//
class form_student_registration_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'         => '',
                                'param'          => array(),
                                'autoComp'       => '',
                                'rsSize'         => '',
                                'msgDisplay'     => '',
                                'errList'        => array(),
                                'fldList'        => array(),
                                'focus'          => '',
                                'navStatus'      => array(),
                                'navSummary'     => array(),
                                'navPage'        => array(),
                                'redir'          => array(),
                                'blockDisplay'   => array(),
                                'fieldDisplay'   => array(),
                                'fieldLabel'     => array(),
                                'readOnly'       => array(),
                                'btnVars'        => array(),
                                'ajaxAlert'      => '',
                                'ajaxMessage'    => '',
                                'ajaxJavascript' => array(),
                                'buttonDisplay'  => array(),
                                'calendarReload' => false,
                                'quickSearchRes' => false,
                                'displayMsg'     => false,
                                'displayMsgTxt'  => '',
                                'dyn_search'     => array(),
                                'empty_filter'   => '',
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $id;
   var $created_date;
   var $created_date_hora;
   var $modified_date;
   var $modified_date_hora;
   var $student_id;
   var $faculty_id;
   var $program_id;
   var $title_id;
   var $firstname;
   var $lastname;
   var $gender;
   var $student_pid;
   var $student_dob;
   var $race_id;
   var $nationality_id;
   var $religion_id;
   var $blood_group_id;
   var $school_id;
   var $school_address;
   var $school_district;
   var $school_province;
   var $school_year_grad;
   var $school_gpa;
   var $addr_address;
   var $addr_tambon;
   var $addr_district;
   var $addr_province;
   var $addr_postcode;
   var $addr_homephone;
   var $addr_mobilephone;
   var $addr_email;
   var $cont_address;
   var $cont_tambon;
   var $cont_district;
   var $cont_province;
   var $cont_postcode;
   var $cont_homephone;
   var $cont_mobilephone;
   var $cont_email;
   var $father_name;
   var $father_pid;
   var $father_status;
   var $father_age;
   var $father_occupation;
   var $father_annual_income;
   var $mother_name;
   var $mother_pid;
   var $mother_status;
   var $mother_age;
   var $mother_occupation;
   var $mother_annual_income;
   var $marriage_status;
   var $parent_name;
   var $parent_pid;
   var $parent_status;
   var $parent_age;
   var $parent_occupation;
   var $parent_annual_income;
   var $emer_contact;
   var $emer_homephone;
   var $emer_mobilephone;
   var $emer_relationship;
   var $emer_address;
   var $token_id;
   var $personal_photo;
   var $personal_photo_scfile_name;
   var $personal_photo_ul_name;
   var $personal_photo_scfile_type;
   var $personal_photo_ul_type;
   var $personal_photo_limpa;
   var $personal_photo_salva;
   var $out_personal_photo;
   var $firstnameeng;
   var $lastnameeng;
   var $pid_start;
   var $pid_stop;
   var $student_status;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $sc_insert_on;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['addr_address']))
          {
              $this->addr_address = $this->NM_ajax_info['param']['addr_address'];
          }
          if (isset($this->NM_ajax_info['param']['addr_district']))
          {
              $this->addr_district = $this->NM_ajax_info['param']['addr_district'];
          }
          if (isset($this->NM_ajax_info['param']['addr_email']))
          {
              $this->addr_email = $this->NM_ajax_info['param']['addr_email'];
          }
          if (isset($this->NM_ajax_info['param']['addr_homephone']))
          {
              $this->addr_homephone = $this->NM_ajax_info['param']['addr_homephone'];
          }
          if (isset($this->NM_ajax_info['param']['addr_mobilephone']))
          {
              $this->addr_mobilephone = $this->NM_ajax_info['param']['addr_mobilephone'];
          }
          if (isset($this->NM_ajax_info['param']['addr_postcode']))
          {
              $this->addr_postcode = $this->NM_ajax_info['param']['addr_postcode'];
          }
          if (isset($this->NM_ajax_info['param']['addr_province']))
          {
              $this->addr_province = $this->NM_ajax_info['param']['addr_province'];
          }
          if (isset($this->NM_ajax_info['param']['addr_tambon']))
          {
              $this->addr_tambon = $this->NM_ajax_info['param']['addr_tambon'];
          }
          if (isset($this->NM_ajax_info['param']['blood_group_id']))
          {
              $this->blood_group_id = $this->NM_ajax_info['param']['blood_group_id'];
          }
          if (isset($this->NM_ajax_info['param']['cont_address']))
          {
              $this->cont_address = $this->NM_ajax_info['param']['cont_address'];
          }
          if (isset($this->NM_ajax_info['param']['cont_district']))
          {
              $this->cont_district = $this->NM_ajax_info['param']['cont_district'];
          }
          if (isset($this->NM_ajax_info['param']['cont_email']))
          {
              $this->cont_email = $this->NM_ajax_info['param']['cont_email'];
          }
          if (isset($this->NM_ajax_info['param']['cont_homephone']))
          {
              $this->cont_homephone = $this->NM_ajax_info['param']['cont_homephone'];
          }
          if (isset($this->NM_ajax_info['param']['cont_mobilephone']))
          {
              $this->cont_mobilephone = $this->NM_ajax_info['param']['cont_mobilephone'];
          }
          if (isset($this->NM_ajax_info['param']['cont_postcode']))
          {
              $this->cont_postcode = $this->NM_ajax_info['param']['cont_postcode'];
          }
          if (isset($this->NM_ajax_info['param']['cont_province']))
          {
              $this->cont_province = $this->NM_ajax_info['param']['cont_province'];
          }
          if (isset($this->NM_ajax_info['param']['cont_tambon']))
          {
              $this->cont_tambon = $this->NM_ajax_info['param']['cont_tambon'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['emer_address']))
          {
              $this->emer_address = $this->NM_ajax_info['param']['emer_address'];
          }
          if (isset($this->NM_ajax_info['param']['emer_contact']))
          {
              $this->emer_contact = $this->NM_ajax_info['param']['emer_contact'];
          }
          if (isset($this->NM_ajax_info['param']['emer_homephone']))
          {
              $this->emer_homephone = $this->NM_ajax_info['param']['emer_homephone'];
          }
          if (isset($this->NM_ajax_info['param']['emer_mobilephone']))
          {
              $this->emer_mobilephone = $this->NM_ajax_info['param']['emer_mobilephone'];
          }
          if (isset($this->NM_ajax_info['param']['emer_relationship']))
          {
              $this->emer_relationship = $this->NM_ajax_info['param']['emer_relationship'];
          }
          if (isset($this->NM_ajax_info['param']['father_age']))
          {
              $this->father_age = $this->NM_ajax_info['param']['father_age'];
          }
          if (isset($this->NM_ajax_info['param']['father_annual_income']))
          {
              $this->father_annual_income = $this->NM_ajax_info['param']['father_annual_income'];
          }
          if (isset($this->NM_ajax_info['param']['father_name']))
          {
              $this->father_name = $this->NM_ajax_info['param']['father_name'];
          }
          if (isset($this->NM_ajax_info['param']['father_occupation']))
          {
              $this->father_occupation = $this->NM_ajax_info['param']['father_occupation'];
          }
          if (isset($this->NM_ajax_info['param']['father_pid']))
          {
              $this->father_pid = $this->NM_ajax_info['param']['father_pid'];
          }
          if (isset($this->NM_ajax_info['param']['father_status']))
          {
              $this->father_status = $this->NM_ajax_info['param']['father_status'];
          }
          if (isset($this->NM_ajax_info['param']['firstname']))
          {
              $this->firstname = $this->NM_ajax_info['param']['firstname'];
          }
          if (isset($this->NM_ajax_info['param']['firstnameeng']))
          {
              $this->firstnameeng = $this->NM_ajax_info['param']['firstnameeng'];
          }
          if (isset($this->NM_ajax_info['param']['gender']))
          {
              $this->gender = $this->NM_ajax_info['param']['gender'];
          }
          if (isset($this->NM_ajax_info['param']['id']))
          {
              $this->id = $this->NM_ajax_info['param']['id'];
          }
          if (isset($this->NM_ajax_info['param']['lastname']))
          {
              $this->lastname = $this->NM_ajax_info['param']['lastname'];
          }
          if (isset($this->NM_ajax_info['param']['lastnameeng']))
          {
              $this->lastnameeng = $this->NM_ajax_info['param']['lastnameeng'];
          }
          if (isset($this->NM_ajax_info['param']['marriage_status']))
          {
              $this->marriage_status = $this->NM_ajax_info['param']['marriage_status'];
          }
          if (isset($this->NM_ajax_info['param']['mother_age']))
          {
              $this->mother_age = $this->NM_ajax_info['param']['mother_age'];
          }
          if (isset($this->NM_ajax_info['param']['mother_annual_income']))
          {
              $this->mother_annual_income = $this->NM_ajax_info['param']['mother_annual_income'];
          }
          if (isset($this->NM_ajax_info['param']['mother_name']))
          {
              $this->mother_name = $this->NM_ajax_info['param']['mother_name'];
          }
          if (isset($this->NM_ajax_info['param']['mother_occupation']))
          {
              $this->mother_occupation = $this->NM_ajax_info['param']['mother_occupation'];
          }
          if (isset($this->NM_ajax_info['param']['mother_pid']))
          {
              $this->mother_pid = $this->NM_ajax_info['param']['mother_pid'];
          }
          if (isset($this->NM_ajax_info['param']['mother_status']))
          {
              $this->mother_status = $this->NM_ajax_info['param']['mother_status'];
          }
          if (isset($this->NM_ajax_info['param']['nationality_id']))
          {
              $this->nationality_id = $this->NM_ajax_info['param']['nationality_id'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_fast_search']))
          {
              $this->nmgp_arg_fast_search = $this->NM_ajax_info['param']['nmgp_arg_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_cond_fast_search']))
          {
              $this->nmgp_cond_fast_search = $this->NM_ajax_info['param']['nmgp_cond_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_fast_search']))
          {
              $this->nmgp_fast_search = $this->NM_ajax_info['param']['nmgp_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['parent_age']))
          {
              $this->parent_age = $this->NM_ajax_info['param']['parent_age'];
          }
          if (isset($this->NM_ajax_info['param']['parent_annual_income']))
          {
              $this->parent_annual_income = $this->NM_ajax_info['param']['parent_annual_income'];
          }
          if (isset($this->NM_ajax_info['param']['parent_name']))
          {
              $this->parent_name = $this->NM_ajax_info['param']['parent_name'];
          }
          if (isset($this->NM_ajax_info['param']['parent_occupation']))
          {
              $this->parent_occupation = $this->NM_ajax_info['param']['parent_occupation'];
          }
          if (isset($this->NM_ajax_info['param']['parent_pid']))
          {
              $this->parent_pid = $this->NM_ajax_info['param']['parent_pid'];
          }
          if (isset($this->NM_ajax_info['param']['parent_status']))
          {
              $this->parent_status = $this->NM_ajax_info['param']['parent_status'];
          }
          if (isset($this->NM_ajax_info['param']['pid_start']))
          {
              $this->pid_start = $this->NM_ajax_info['param']['pid_start'];
          }
          if (isset($this->NM_ajax_info['param']['pid_stop']))
          {
              $this->pid_stop = $this->NM_ajax_info['param']['pid_stop'];
          }
          if (isset($this->NM_ajax_info['param']['program_id']))
          {
              $this->program_id = $this->NM_ajax_info['param']['program_id'];
          }
          if (isset($this->NM_ajax_info['param']['race_id']))
          {
              $this->race_id = $this->NM_ajax_info['param']['race_id'];
          }
          if (isset($this->NM_ajax_info['param']['religion_id']))
          {
              $this->religion_id = $this->NM_ajax_info['param']['religion_id'];
          }
          if (isset($this->NM_ajax_info['param']['school_address']))
          {
              $this->school_address = $this->NM_ajax_info['param']['school_address'];
          }
          if (isset($this->NM_ajax_info['param']['school_district']))
          {
              $this->school_district = $this->NM_ajax_info['param']['school_district'];
          }
          if (isset($this->NM_ajax_info['param']['school_gpa']))
          {
              $this->school_gpa = $this->NM_ajax_info['param']['school_gpa'];
          }
          if (isset($this->NM_ajax_info['param']['school_id']))
          {
              $this->school_id = $this->NM_ajax_info['param']['school_id'];
          }
          if (isset($this->NM_ajax_info['param']['school_province']))
          {
              $this->school_province = $this->NM_ajax_info['param']['school_province'];
          }
          if (isset($this->NM_ajax_info['param']['school_year_grad']))
          {
              $this->school_year_grad = $this->NM_ajax_info['param']['school_year_grad'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['student_dob']))
          {
              $this->student_dob = $this->NM_ajax_info['param']['student_dob'];
          }
          if (isset($this->NM_ajax_info['param']['student_id']))
          {
              $this->student_id = $this->NM_ajax_info['param']['student_id'];
          }
          if (isset($this->NM_ajax_info['param']['student_pid']))
          {
              $this->student_pid = $this->NM_ajax_info['param']['student_pid'];
          }
          if (isset($this->NM_ajax_info['param']['student_status']))
          {
              $this->student_status = $this->NM_ajax_info['param']['student_status'];
          }
          if (isset($this->NM_ajax_info['param']['title_id']))
          {
              $this->title_id = $this->NM_ajax_info['param']['title_id'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->sc_conv_var = array();
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (isset($this->sc_conv_var[$nmgp_campo]))
               {
                   $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
               {
                   $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_student_registration']['nm_run_menu'] = 1;
      } 
      if (isset($_SESSION['sc_session'][$script_case_init]['form_student_registration']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_student_registration']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_student_registration']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $nmgp_parms = NM_decode_input($nmgp_parms);
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_student_registration($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_student_registration']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_student_registration']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_student_registration']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_student_registration']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_student_registration']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_student_registration']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_student_registration']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_student_registration']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_student_registration']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_student_registration']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_student_registration']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_student_registration']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_student_registration']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_student_registration_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("en_us");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("en_us");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_student_registration']['upload_field_info'] = array();

      $_SESSION['sc_session'][$script_case_init]['form_student_registration']['upload_field_info']['personal_photo'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_student_registration',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_file_height' => '0',
          'upload_file_width'  => '0',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_student_registration']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_student_registration'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_student_registration']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_student_registration']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_student_registration') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_student_registration']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - student_registration";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_student_registration")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form    = trim($str_button);
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $this->Db = $this->Ini->Db; 
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status      = "scFormInputError";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);



      $_SESSION['scriptcase']['error_icon']['form_student_registration']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_error.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_student_registration'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['qsearch'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "on";
      $this->nmgp_botoes['goto'] = "on";
      $this->nmgp_botoes['qtline'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_student_registration']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_student_registration'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_student_registration'];

              $this->nmgp_botoes['update']     = $tmpDashboardButtons['form_update']    ? 'on' : 'off';
              $this->nmgp_botoes['new']        = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['insert']     = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['delete']     = $tmpDashboardButtons['form_delete']    ? 'on' : 'off';
              $this->nmgp_botoes['copy']       = $tmpDashboardButtons['form_copy']      ? 'on' : 'off';
              $this->nmgp_botoes['first']      = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['back']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['last']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['forward']    = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['navpage']    = $tmpDashboardButtons['form_navpage']   ? 'on' : 'off';
              $this->nmgp_botoes['goto']       = $tmpDashboardButtons['form_goto']      ? 'on' : 'off';
              $this->nmgp_botoes['qtline']     = $tmpDashboardButtons['form_lineqty']   ? 'on' : 'off';
              $this->nmgp_botoes['summary']    = $tmpDashboardButtons['form_summary']   ? 'on' : 'off';
              $this->nmgp_botoes['qsearch']    = $tmpDashboardButtons['form_qsearch']   ? 'on' : 'off';
              $this->nmgp_botoes['dynsearch']  = $tmpDashboardButtons['form_dynsearch'] ? 'on' : 'off';
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['exit'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dados_form'];
          if (!isset($this->id)){$this->id = $this->nmgp_dados_form['id'];} 
          if (!isset($this->created_date)){$this->created_date = $this->nmgp_dados_form['created_date'];} 
          if (!isset($this->modified_date)){$this->modified_date = $this->nmgp_dados_form['modified_date'];} 
          if (!isset($this->faculty_id)){$this->faculty_id = $this->nmgp_dados_form['faculty_id'];} 
          if (!isset($this->token_id)){$this->token_id = $this->nmgp_dados_form['token_id'];} 
          if (!isset($this->personal_photo)){$this->personal_photo = $this->nmgp_dados_form['personal_photo'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_student_registration", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 

      if (is_file($this->Ini->path_aplicacao . 'form_student_registration_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_student_registration_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_student_registration/form_student_registration_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_student_registration_erro.class.php"); 
      }
      $this->Erro      = new form_student_registration_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['opcao']))
         { 
             if ($this->id != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_student_registration']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->sc_evento = $this->nmgp_opcao;
      $this->sc_insert_on = false;
      if (isset($this->student_id)) { $this->nm_limpa_alfa($this->student_id); }
      if (isset($this->program_id)) { $this->nm_limpa_alfa($this->program_id); }
      if (isset($this->title_id)) { $this->nm_limpa_alfa($this->title_id); }
      if (isset($this->firstname)) { $this->nm_limpa_alfa($this->firstname); }
      if (isset($this->lastname)) { $this->nm_limpa_alfa($this->lastname); }
      if (isset($this->gender)) { $this->nm_limpa_alfa($this->gender); }
      if (isset($this->student_pid)) { $this->nm_limpa_alfa($this->student_pid); }
      if (isset($this->student_dob)) { $this->nm_limpa_alfa($this->student_dob); }
      if (isset($this->race_id)) { $this->nm_limpa_alfa($this->race_id); }
      if (isset($this->nationality_id)) { $this->nm_limpa_alfa($this->nationality_id); }
      if (isset($this->religion_id)) { $this->nm_limpa_alfa($this->religion_id); }
      if (isset($this->blood_group_id)) { $this->nm_limpa_alfa($this->blood_group_id); }
      if (isset($this->school_id)) { $this->nm_limpa_alfa($this->school_id); }
      if (isset($this->school_address)) { $this->nm_limpa_alfa($this->school_address); }
      if (isset($this->school_district)) { $this->nm_limpa_alfa($this->school_district); }
      if (isset($this->school_province)) { $this->nm_limpa_alfa($this->school_province); }
      if (isset($this->school_year_grad)) { $this->nm_limpa_alfa($this->school_year_grad); }
      if (isset($this->school_gpa)) { $this->nm_limpa_alfa($this->school_gpa); }
      if (isset($this->addr_address)) { $this->nm_limpa_alfa($this->addr_address); }
      if (isset($this->addr_tambon)) { $this->nm_limpa_alfa($this->addr_tambon); }
      if (isset($this->addr_district)) { $this->nm_limpa_alfa($this->addr_district); }
      if (isset($this->addr_province)) { $this->nm_limpa_alfa($this->addr_province); }
      if (isset($this->addr_postcode)) { $this->nm_limpa_alfa($this->addr_postcode); }
      if (isset($this->addr_homephone)) { $this->nm_limpa_alfa($this->addr_homephone); }
      if (isset($this->addr_mobilephone)) { $this->nm_limpa_alfa($this->addr_mobilephone); }
      if (isset($this->addr_email)) { $this->nm_limpa_alfa($this->addr_email); }
      if (isset($this->cont_address)) { $this->nm_limpa_alfa($this->cont_address); }
      if (isset($this->cont_tambon)) { $this->nm_limpa_alfa($this->cont_tambon); }
      if (isset($this->cont_district)) { $this->nm_limpa_alfa($this->cont_district); }
      if (isset($this->cont_province)) { $this->nm_limpa_alfa($this->cont_province); }
      if (isset($this->cont_postcode)) { $this->nm_limpa_alfa($this->cont_postcode); }
      if (isset($this->cont_homephone)) { $this->nm_limpa_alfa($this->cont_homephone); }
      if (isset($this->cont_mobilephone)) { $this->nm_limpa_alfa($this->cont_mobilephone); }
      if (isset($this->cont_email)) { $this->nm_limpa_alfa($this->cont_email); }
      if (isset($this->father_name)) { $this->nm_limpa_alfa($this->father_name); }
      if (isset($this->father_pid)) { $this->nm_limpa_alfa($this->father_pid); }
      if (isset($this->father_status)) { $this->nm_limpa_alfa($this->father_status); }
      if (isset($this->father_age)) { $this->nm_limpa_alfa($this->father_age); }
      if (isset($this->father_occupation)) { $this->nm_limpa_alfa($this->father_occupation); }
      if (isset($this->father_annual_income)) { $this->nm_limpa_alfa($this->father_annual_income); }
      if (isset($this->mother_name)) { $this->nm_limpa_alfa($this->mother_name); }
      if (isset($this->mother_pid)) { $this->nm_limpa_alfa($this->mother_pid); }
      if (isset($this->mother_status)) { $this->nm_limpa_alfa($this->mother_status); }
      if (isset($this->mother_age)) { $this->nm_limpa_alfa($this->mother_age); }
      if (isset($this->mother_occupation)) { $this->nm_limpa_alfa($this->mother_occupation); }
      if (isset($this->mother_annual_income)) { $this->nm_limpa_alfa($this->mother_annual_income); }
      if (isset($this->marriage_status)) { $this->nm_limpa_alfa($this->marriage_status); }
      if (isset($this->parent_name)) { $this->nm_limpa_alfa($this->parent_name); }
      if (isset($this->parent_pid)) { $this->nm_limpa_alfa($this->parent_pid); }
      if (isset($this->parent_status)) { $this->nm_limpa_alfa($this->parent_status); }
      if (isset($this->parent_age)) { $this->nm_limpa_alfa($this->parent_age); }
      if (isset($this->parent_occupation)) { $this->nm_limpa_alfa($this->parent_occupation); }
      if (isset($this->parent_annual_income)) { $this->nm_limpa_alfa($this->parent_annual_income); }
      if (isset($this->emer_contact)) { $this->nm_limpa_alfa($this->emer_contact); }
      if (isset($this->emer_homephone)) { $this->nm_limpa_alfa($this->emer_homephone); }
      if (isset($this->emer_mobilephone)) { $this->nm_limpa_alfa($this->emer_mobilephone); }
      if (isset($this->emer_relationship)) { $this->nm_limpa_alfa($this->emer_relationship); }
      if (isset($this->emer_address)) { $this->nm_limpa_alfa($this->emer_address); }
      if (isset($this->firstnameeng)) { $this->nm_limpa_alfa($this->firstnameeng); }
      if (isset($this->lastnameeng)) { $this->nm_limpa_alfa($this->lastnameeng); }
      if (isset($this->pid_start)) { $this->nm_limpa_alfa($this->pid_start); }
      if (isset($this->pid_stop)) { $this->nm_limpa_alfa($this->pid_stop); }
      if (isset($this->student_status)) { $this->nm_limpa_alfa($this->student_status); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- id
      $this->field_config['id']               = array();
      $this->field_config['id']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['id']['symbol_dec'] = '';
      $this->field_config['id']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['id']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- created_date
      $this->field_config['created_date']                 = array();
      $this->field_config['created_date']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['created_date']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['created_date']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['created_date']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'created_date');
      //-- modified_date
      $this->field_config['modified_date']                 = array();
      $this->field_config['modified_date']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['modified_date']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['modified_date']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['modified_date']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'modified_date');
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();

      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      if ($nm_form_submit == 1 && ($this->nmgp_opcao == 'inicio' || $this->nmgp_opcao == 'igual'))
      {
          $this->nm_tira_formatacao();
      }
      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_program_id' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'program_id');
          }
          if ('validate_student_status' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'student_status');
          }
          if ('validate_student_id' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'student_id');
          }
          if ('validate_title_id' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'title_id');
          }
          if ('validate_firstname' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'firstname');
          }
          if ('validate_lastname' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lastname');
          }
          if ('validate_firstnameeng' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'firstnameeng');
          }
          if ('validate_lastnameeng' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lastnameeng');
          }
          if ('validate_gender' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'gender');
          }
          if ('validate_student_pid' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'student_pid');
          }
          if ('validate_pid_start' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pid_start');
          }
          if ('validate_pid_stop' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pid_stop');
          }
          if ('validate_student_dob' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'student_dob');
          }
          if ('validate_race_id' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'race_id');
          }
          if ('validate_nationality_id' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nationality_id');
          }
          if ('validate_religion_id' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'religion_id');
          }
          if ('validate_blood_group_id' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'blood_group_id');
          }
          if ('validate_school_id' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'school_id');
          }
          if ('validate_school_address' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'school_address');
          }
          if ('validate_school_district' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'school_district');
          }
          if ('validate_school_province' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'school_province');
          }
          if ('validate_school_year_grad' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'school_year_grad');
          }
          if ('validate_school_gpa' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'school_gpa');
          }
          if ('validate_addr_address' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'addr_address');
          }
          if ('validate_addr_tambon' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'addr_tambon');
          }
          if ('validate_addr_district' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'addr_district');
          }
          if ('validate_addr_province' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'addr_province');
          }
          if ('validate_addr_postcode' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'addr_postcode');
          }
          if ('validate_addr_homephone' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'addr_homephone');
          }
          if ('validate_addr_mobilephone' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'addr_mobilephone');
          }
          if ('validate_addr_email' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'addr_email');
          }
          if ('validate_cont_address' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cont_address');
          }
          if ('validate_cont_tambon' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cont_tambon');
          }
          if ('validate_cont_district' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cont_district');
          }
          if ('validate_cont_province' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cont_province');
          }
          if ('validate_cont_postcode' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cont_postcode');
          }
          if ('validate_cont_homephone' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cont_homephone');
          }
          if ('validate_cont_mobilephone' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cont_mobilephone');
          }
          if ('validate_cont_email' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cont_email');
          }
          if ('validate_father_name' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'father_name');
          }
          if ('validate_father_pid' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'father_pid');
          }
          if ('validate_father_status' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'father_status');
          }
          if ('validate_father_age' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'father_age');
          }
          if ('validate_father_occupation' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'father_occupation');
          }
          if ('validate_father_annual_income' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'father_annual_income');
          }
          if ('validate_mother_name' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'mother_name');
          }
          if ('validate_mother_pid' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'mother_pid');
          }
          if ('validate_mother_status' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'mother_status');
          }
          if ('validate_mother_age' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'mother_age');
          }
          if ('validate_mother_occupation' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'mother_occupation');
          }
          if ('validate_mother_annual_income' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'mother_annual_income');
          }
          if ('validate_marriage_status' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'marriage_status');
          }
          if ('validate_parent_name' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'parent_name');
          }
          if ('validate_parent_pid' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'parent_pid');
          }
          if ('validate_parent_status' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'parent_status');
          }
          if ('validate_parent_age' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'parent_age');
          }
          if ('validate_parent_occupation' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'parent_occupation');
          }
          if ('validate_parent_annual_income' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'parent_annual_income');
          }
          if ('validate_emer_contact' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emer_contact');
          }
          if ('validate_emer_homephone' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emer_homephone');
          }
          if ('validate_emer_mobilephone' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emer_mobilephone');
          }
          if ('validate_emer_relationship' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emer_relationship');
          }
          if ('validate_emer_address' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emer_address');
          }
          form_student_registration_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_student_registration_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_student_registration']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_student_registration_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && 1 == $nm_form_submit && $this->nmgp_opcao != "menu_link" && $this->nmgp_opcao != "recarga_mobile")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_evento == "update")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_evento == "delete")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_student_registration_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_student_registration_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "&script_case_session=" . session_id() . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'program_id':
               return "Program";
               break;
           case 'student_status':
               return "Student Status";
               break;
           case 'student_id':
               return "Student ID";
               break;
           case 'title_id':
               return "Title";
               break;
           case 'firstname':
               return "First name";
               break;
           case 'lastname':
               return "Last name";
               break;
           case 'firstnameeng':
               return "Firstname Eng";
               break;
           case 'lastnameeng':
               return "Lastname Eng";
               break;
           case 'gender':
               return "Gender";
               break;
           case 'student_pid':
               return "Student PID";
               break;
           case 'pid_start':
               return "PID Start Date";
               break;
           case 'pid_stop':
               return "PID Expired Date";
               break;
           case 'student_dob':
               return "Student DOB";
               break;
           case 'race_id':
               return "Race";
               break;
           case 'nationality_id':
               return "Nationality";
               break;
           case 'religion_id':
               return "Religion";
               break;
           case 'blood_group_id':
               return "Blood Group";
               break;
           case 'school_id':
               return "School";
               break;
           case 'school_address':
               return "School Address";
               break;
           case 'school_district':
               return "School District";
               break;
           case 'school_province':
               return "School Province";
               break;
           case 'school_year_grad':
               return "School Year Grad";
               break;
           case 'school_gpa':
               return "School Gpa";
               break;
           case 'addr_address':
               return "Addr Address";
               break;
           case 'addr_tambon':
               return "Addr Tambon";
               break;
           case 'addr_district':
               return "Addr District";
               break;
           case 'addr_province':
               return "Addr Province";
               break;
           case 'addr_postcode':
               return "Addr Postcode";
               break;
           case 'addr_homephone':
               return "Addr Homephone";
               break;
           case 'addr_mobilephone':
               return "Addr Mobilephone";
               break;
           case 'addr_email':
               return "Addr Email";
               break;
           case 'cont_address':
               return "Contact Address";
               break;
           case 'cont_tambon':
               return "Contact Tambon";
               break;
           case 'cont_district':
               return "Contact District";
               break;
           case 'cont_province':
               return "Contact Province";
               break;
           case 'cont_postcode':
               return "Contact Postcode";
               break;
           case 'cont_homephone':
               return "Contact Homephone";
               break;
           case 'cont_mobilephone':
               return "Contact Mobilephone";
               break;
           case 'cont_email':
               return "Contact Email";
               break;
           case 'father_name':
               return "Father Name";
               break;
           case 'father_pid':
               return "Father PID";
               break;
           case 'father_status':
               return "Father Status";
               break;
           case 'father_age':
               return "Father Age";
               break;
           case 'father_occupation':
               return "Father Occupation";
               break;
           case 'father_annual_income':
               return "Father Annual Income";
               break;
           case 'mother_name':
               return "Mother Name";
               break;
           case 'mother_pid':
               return "Mother PID";
               break;
           case 'mother_status':
               return "Mother Status";
               break;
           case 'mother_age':
               return "Mother Age";
               break;
           case 'mother_occupation':
               return "Mother Occupation";
               break;
           case 'mother_annual_income':
               return "Mother Annual Income";
               break;
           case 'marriage_status':
               return "Marriage Status";
               break;
           case 'parent_name':
               return "Parent Name";
               break;
           case 'parent_pid':
               return "Parent PID";
               break;
           case 'parent_status':
               return "Parent Status";
               break;
           case 'parent_age':
               return "Parent Age";
               break;
           case 'parent_occupation':
               return "Parent Occupation";
               break;
           case 'parent_annual_income':
               return "Parent Annual Income";
               break;
           case 'emer_contact':
               return "Emergency Contact";
               break;
           case 'emer_homephone':
               return "Emergency Homephone";
               break;
           case 'emer_mobilephone':
               return "Emergency Mobilephone";
               break;
           case 'emer_relationship':
               return "Emergency Relationship";
               break;
           case 'emer_address':
               return "Emergency Address";
               break;
           case 'id':
               return "Id";
               break;
           case 'created_date':
               return "Created Date";
               break;
           case 'modified_date':
               return "Modified Date";
               break;
           case 'faculty_id':
               return "Faculty Id";
               break;
           case 'token_id':
               return "Token Id";
               break;
           case 'personal_photo':
               return "Personal Photo";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if ('' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_student_registration']) || !is_array($this->NM_ajax_info['errList']['geral_form_student_registration']))
              {
                  $this->NM_ajax_info['errList']['geral_form_student_registration'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_student_registration'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'program_id' == $filtro)
        $this->ValidateField_program_id($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'student_status' == $filtro)
        $this->ValidateField_student_status($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'student_id' == $filtro)
        $this->ValidateField_student_id($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'title_id' == $filtro)
        $this->ValidateField_title_id($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'firstname' == $filtro)
        $this->ValidateField_firstname($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'lastname' == $filtro)
        $this->ValidateField_lastname($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'firstnameeng' == $filtro)
        $this->ValidateField_firstnameeng($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'lastnameeng' == $filtro)
        $this->ValidateField_lastnameeng($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'gender' == $filtro)
        $this->ValidateField_gender($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'student_pid' == $filtro)
        $this->ValidateField_student_pid($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'pid_start' == $filtro)
        $this->ValidateField_pid_start($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'pid_stop' == $filtro)
        $this->ValidateField_pid_stop($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'student_dob' == $filtro)
        $this->ValidateField_student_dob($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'race_id' == $filtro)
        $this->ValidateField_race_id($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nationality_id' == $filtro)
        $this->ValidateField_nationality_id($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'religion_id' == $filtro)
        $this->ValidateField_religion_id($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'blood_group_id' == $filtro)
        $this->ValidateField_blood_group_id($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'school_id' == $filtro)
        $this->ValidateField_school_id($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'school_address' == $filtro)
        $this->ValidateField_school_address($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'school_district' == $filtro)
        $this->ValidateField_school_district($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'school_province' == $filtro)
        $this->ValidateField_school_province($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'school_year_grad' == $filtro)
        $this->ValidateField_school_year_grad($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'school_gpa' == $filtro)
        $this->ValidateField_school_gpa($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'addr_address' == $filtro)
        $this->ValidateField_addr_address($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'addr_tambon' == $filtro)
        $this->ValidateField_addr_tambon($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'addr_district' == $filtro)
        $this->ValidateField_addr_district($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'addr_province' == $filtro)
        $this->ValidateField_addr_province($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'addr_postcode' == $filtro)
        $this->ValidateField_addr_postcode($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'addr_homephone' == $filtro)
        $this->ValidateField_addr_homephone($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'addr_mobilephone' == $filtro)
        $this->ValidateField_addr_mobilephone($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'addr_email' == $filtro)
        $this->ValidateField_addr_email($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cont_address' == $filtro)
        $this->ValidateField_cont_address($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cont_tambon' == $filtro)
        $this->ValidateField_cont_tambon($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cont_district' == $filtro)
        $this->ValidateField_cont_district($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cont_province' == $filtro)
        $this->ValidateField_cont_province($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cont_postcode' == $filtro)
        $this->ValidateField_cont_postcode($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cont_homephone' == $filtro)
        $this->ValidateField_cont_homephone($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cont_mobilephone' == $filtro)
        $this->ValidateField_cont_mobilephone($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cont_email' == $filtro)
        $this->ValidateField_cont_email($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'father_name' == $filtro)
        $this->ValidateField_father_name($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'father_pid' == $filtro)
        $this->ValidateField_father_pid($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'father_status' == $filtro)
        $this->ValidateField_father_status($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'father_age' == $filtro)
        $this->ValidateField_father_age($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'father_occupation' == $filtro)
        $this->ValidateField_father_occupation($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'father_annual_income' == $filtro)
        $this->ValidateField_father_annual_income($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'mother_name' == $filtro)
        $this->ValidateField_mother_name($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'mother_pid' == $filtro)
        $this->ValidateField_mother_pid($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'mother_status' == $filtro)
        $this->ValidateField_mother_status($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'mother_age' == $filtro)
        $this->ValidateField_mother_age($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'mother_occupation' == $filtro)
        $this->ValidateField_mother_occupation($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'mother_annual_income' == $filtro)
        $this->ValidateField_mother_annual_income($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'marriage_status' == $filtro)
        $this->ValidateField_marriage_status($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'parent_name' == $filtro)
        $this->ValidateField_parent_name($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'parent_pid' == $filtro)
        $this->ValidateField_parent_pid($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'parent_status' == $filtro)
        $this->ValidateField_parent_status($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'parent_age' == $filtro)
        $this->ValidateField_parent_age($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'parent_occupation' == $filtro)
        $this->ValidateField_parent_occupation($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'parent_annual_income' == $filtro)
        $this->ValidateField_parent_annual_income($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'emer_contact' == $filtro)
        $this->ValidateField_emer_contact($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'emer_homephone' == $filtro)
        $this->ValidateField_emer_homephone($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'emer_mobilephone' == $filtro)
        $this->ValidateField_emer_mobilephone($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'emer_relationship' == $filtro)
        $this->ValidateField_emer_relationship($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'emer_address' == $filtro)
        $this->ValidateField_emer_address($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_program_id(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->program_id) > 50) 
          { 
              $Campos_Crit .= "Program " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['program_id']))
              {
                  $Campos_Erros['program_id'] = array();
              }
              $Campos_Erros['program_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['program_id']) || !is_array($this->NM_ajax_info['errList']['program_id']))
              {
                  $this->NM_ajax_info['errList']['program_id'] = array();
              }
              $this->NM_ajax_info['errList']['program_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_program_id

    function ValidateField_student_status(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->student_status == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      if ($this->student_status != "")
      { 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_student_status']) && !in_array($this->student_status, $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_student_status']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['student_status']))
              {
                  $Campos_Erros['student_status'] = array();
              }
              $Campos_Erros['student_status'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['student_status']) || !is_array($this->NM_ajax_info['errList']['student_status']))
              {
                  $this->NM_ajax_info['errList']['student_status'] = array();
              }
              $this->NM_ajax_info['errList']['student_status'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
      }
    } // ValidateField_student_status

    function ValidateField_student_id(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->student_id) > 7) 
          { 
              $Campos_Crit .= "Student ID " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 7 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['student_id']))
              {
                  $Campos_Erros['student_id'] = array();
              }
              $Campos_Erros['student_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 7 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['student_id']) || !is_array($this->NM_ajax_info['errList']['student_id']))
              {
                  $this->NM_ajax_info['errList']['student_id'] = array();
              }
              $this->NM_ajax_info['errList']['student_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 7 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_student_id

    function ValidateField_title_id(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->title_id) > 11) 
          { 
              $Campos_Crit .= "Title " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['title_id']))
              {
                  $Campos_Erros['title_id'] = array();
              }
              $Campos_Erros['title_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['title_id']) || !is_array($this->NM_ajax_info['errList']['title_id']))
              {
                  $this->NM_ajax_info['errList']['title_id'] = array();
              }
              $this->NM_ajax_info['errList']['title_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_title_id

    function ValidateField_firstname(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->firstname) > 50) 
          { 
              $Campos_Crit .= "First name " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['firstname']))
              {
                  $Campos_Erros['firstname'] = array();
              }
              $Campos_Erros['firstname'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['firstname']) || !is_array($this->NM_ajax_info['errList']['firstname']))
              {
                  $this->NM_ajax_info['errList']['firstname'] = array();
              }
              $this->NM_ajax_info['errList']['firstname'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_firstname

    function ValidateField_lastname(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->lastname) > 100) 
          { 
              $Campos_Crit .= "Last name " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['lastname']))
              {
                  $Campos_Erros['lastname'] = array();
              }
              $Campos_Erros['lastname'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['lastname']) || !is_array($this->NM_ajax_info['errList']['lastname']))
              {
                  $this->NM_ajax_info['errList']['lastname'] = array();
              }
              $this->NM_ajax_info['errList']['lastname'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_lastname

    function ValidateField_firstnameeng(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->firstnameeng) > 50) 
          { 
              $Campos_Crit .= "Firstname Eng " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['firstnameeng']))
              {
                  $Campos_Erros['firstnameeng'] = array();
              }
              $Campos_Erros['firstnameeng'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['firstnameeng']) || !is_array($this->NM_ajax_info['errList']['firstnameeng']))
              {
                  $this->NM_ajax_info['errList']['firstnameeng'] = array();
              }
              $this->NM_ajax_info['errList']['firstnameeng'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_firstnameeng

    function ValidateField_lastnameeng(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->lastnameeng) > 100) 
          { 
              $Campos_Crit .= "Lastname Eng " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['lastnameeng']))
              {
                  $Campos_Erros['lastnameeng'] = array();
              }
              $Campos_Erros['lastnameeng'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['lastnameeng']) || !is_array($this->NM_ajax_info['errList']['lastnameeng']))
              {
                  $this->NM_ajax_info['errList']['lastnameeng'] = array();
              }
              $this->NM_ajax_info['errList']['lastnameeng'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_lastnameeng

    function ValidateField_gender(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->gender == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      if ($this->gender != "")
      { 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender']) && !in_array($this->gender, $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['gender']))
              {
                  $Campos_Erros['gender'] = array();
              }
              $Campos_Erros['gender'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['gender']) || !is_array($this->NM_ajax_info['errList']['gender']))
              {
                  $this->NM_ajax_info['errList']['gender'] = array();
              }
              $this->NM_ajax_info['errList']['gender'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
      }
    } // ValidateField_gender

    function ValidateField_student_pid(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->student_pid) > 13) 
          { 
              $Campos_Crit .= "Student PID " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['student_pid']))
              {
                  $Campos_Erros['student_pid'] = array();
              }
              $Campos_Erros['student_pid'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['student_pid']) || !is_array($this->NM_ajax_info['errList']['student_pid']))
              {
                  $this->NM_ajax_info['errList']['student_pid'] = array();
              }
              $this->NM_ajax_info['errList']['student_pid'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_student_pid

    function ValidateField_pid_start(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->pid_start) > 50) 
          { 
              $Campos_Crit .= "PID Start Date " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['pid_start']))
              {
                  $Campos_Erros['pid_start'] = array();
              }
              $Campos_Erros['pid_start'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['pid_start']) || !is_array($this->NM_ajax_info['errList']['pid_start']))
              {
                  $this->NM_ajax_info['errList']['pid_start'] = array();
              }
              $this->NM_ajax_info['errList']['pid_start'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_pid_start

    function ValidateField_pid_stop(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->pid_stop) > 50) 
          { 
              $Campos_Crit .= "PID Expired Date " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['pid_stop']))
              {
                  $Campos_Erros['pid_stop'] = array();
              }
              $Campos_Erros['pid_stop'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['pid_stop']) || !is_array($this->NM_ajax_info['errList']['pid_stop']))
              {
                  $this->NM_ajax_info['errList']['pid_stop'] = array();
              }
              $this->NM_ajax_info['errList']['pid_stop'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_pid_stop

    function ValidateField_student_dob(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->student_dob) > 50) 
          { 
              $Campos_Crit .= "Student DOB " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['student_dob']))
              {
                  $Campos_Erros['student_dob'] = array();
              }
              $Campos_Erros['student_dob'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['student_dob']) || !is_array($this->NM_ajax_info['errList']['student_dob']))
              {
                  $this->NM_ajax_info['errList']['student_dob'] = array();
              }
              $this->NM_ajax_info['errList']['student_dob'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_student_dob

    function ValidateField_race_id(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->race_id) > 50) 
          { 
              $Campos_Crit .= "Race " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['race_id']))
              {
                  $Campos_Erros['race_id'] = array();
              }
              $Campos_Erros['race_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['race_id']) || !is_array($this->NM_ajax_info['errList']['race_id']))
              {
                  $this->NM_ajax_info['errList']['race_id'] = array();
              }
              $this->NM_ajax_info['errList']['race_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_race_id

    function ValidateField_nationality_id(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nationality_id) > 50) 
          { 
              $Campos_Crit .= "Nationality " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nationality_id']))
              {
                  $Campos_Erros['nationality_id'] = array();
              }
              $Campos_Erros['nationality_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nationality_id']) || !is_array($this->NM_ajax_info['errList']['nationality_id']))
              {
                  $this->NM_ajax_info['errList']['nationality_id'] = array();
              }
              $this->NM_ajax_info['errList']['nationality_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_nationality_id

    function ValidateField_religion_id(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->religion_id) > 50) 
          { 
              $Campos_Crit .= "Religion " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['religion_id']))
              {
                  $Campos_Erros['religion_id'] = array();
              }
              $Campos_Erros['religion_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['religion_id']) || !is_array($this->NM_ajax_info['errList']['religion_id']))
              {
                  $this->NM_ajax_info['errList']['religion_id'] = array();
              }
              $this->NM_ajax_info['errList']['religion_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_religion_id

    function ValidateField_blood_group_id(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->blood_group_id) > 50) 
          { 
              $Campos_Crit .= "Blood Group " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['blood_group_id']))
              {
                  $Campos_Erros['blood_group_id'] = array();
              }
              $Campos_Erros['blood_group_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['blood_group_id']) || !is_array($this->NM_ajax_info['errList']['blood_group_id']))
              {
                  $this->NM_ajax_info['errList']['blood_group_id'] = array();
              }
              $this->NM_ajax_info['errList']['blood_group_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_blood_group_id

    function ValidateField_school_id(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->school_id) > 100) 
          { 
              $Campos_Crit .= "School " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['school_id']))
              {
                  $Campos_Erros['school_id'] = array();
              }
              $Campos_Erros['school_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['school_id']) || !is_array($this->NM_ajax_info['errList']['school_id']))
              {
                  $this->NM_ajax_info['errList']['school_id'] = array();
              }
              $this->NM_ajax_info['errList']['school_id'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_school_id

    function ValidateField_school_address(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->school_address) > 250) 
          { 
              $Campos_Crit .= "School Address " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['school_address']))
              {
                  $Campos_Erros['school_address'] = array();
              }
              $Campos_Erros['school_address'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['school_address']) || !is_array($this->NM_ajax_info['errList']['school_address']))
              {
                  $this->NM_ajax_info['errList']['school_address'] = array();
              }
              $this->NM_ajax_info['errList']['school_address'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_school_address

    function ValidateField_school_district(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->school_district) > 50) 
          { 
              $Campos_Crit .= "School District " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['school_district']))
              {
                  $Campos_Erros['school_district'] = array();
              }
              $Campos_Erros['school_district'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['school_district']) || !is_array($this->NM_ajax_info['errList']['school_district']))
              {
                  $this->NM_ajax_info['errList']['school_district'] = array();
              }
              $this->NM_ajax_info['errList']['school_district'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_school_district

    function ValidateField_school_province(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->school_province) > 50) 
          { 
              $Campos_Crit .= "School Province " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['school_province']))
              {
                  $Campos_Erros['school_province'] = array();
              }
              $Campos_Erros['school_province'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['school_province']) || !is_array($this->NM_ajax_info['errList']['school_province']))
              {
                  $this->NM_ajax_info['errList']['school_province'] = array();
              }
              $this->NM_ajax_info['errList']['school_province'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_school_province

    function ValidateField_school_year_grad(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->school_year_grad) > 4) 
          { 
              $Campos_Crit .= "School Year Grad " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 4 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['school_year_grad']))
              {
                  $Campos_Erros['school_year_grad'] = array();
              }
              $Campos_Erros['school_year_grad'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 4 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['school_year_grad']) || !is_array($this->NM_ajax_info['errList']['school_year_grad']))
              {
                  $this->NM_ajax_info['errList']['school_year_grad'] = array();
              }
              $this->NM_ajax_info['errList']['school_year_grad'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 4 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_school_year_grad

    function ValidateField_school_gpa(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->school_gpa) > 11) 
          { 
              $Campos_Crit .= "School Gpa " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['school_gpa']))
              {
                  $Campos_Erros['school_gpa'] = array();
              }
              $Campos_Erros['school_gpa'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['school_gpa']) || !is_array($this->NM_ajax_info['errList']['school_gpa']))
              {
                  $this->NM_ajax_info['errList']['school_gpa'] = array();
              }
              $this->NM_ajax_info['errList']['school_gpa'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_school_gpa

    function ValidateField_addr_address(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->addr_address) > 250) 
          { 
              $Campos_Crit .= "Addr Address " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['addr_address']))
              {
                  $Campos_Erros['addr_address'] = array();
              }
              $Campos_Erros['addr_address'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['addr_address']) || !is_array($this->NM_ajax_info['errList']['addr_address']))
              {
                  $this->NM_ajax_info['errList']['addr_address'] = array();
              }
              $this->NM_ajax_info['errList']['addr_address'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_addr_address

    function ValidateField_addr_tambon(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->addr_tambon) > 50) 
          { 
              $Campos_Crit .= "Addr Tambon " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['addr_tambon']))
              {
                  $Campos_Erros['addr_tambon'] = array();
              }
              $Campos_Erros['addr_tambon'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['addr_tambon']) || !is_array($this->NM_ajax_info['errList']['addr_tambon']))
              {
                  $this->NM_ajax_info['errList']['addr_tambon'] = array();
              }
              $this->NM_ajax_info['errList']['addr_tambon'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_addr_tambon

    function ValidateField_addr_district(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->addr_district) > 50) 
          { 
              $Campos_Crit .= "Addr District " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['addr_district']))
              {
                  $Campos_Erros['addr_district'] = array();
              }
              $Campos_Erros['addr_district'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['addr_district']) || !is_array($this->NM_ajax_info['errList']['addr_district']))
              {
                  $this->NM_ajax_info['errList']['addr_district'] = array();
              }
              $this->NM_ajax_info['errList']['addr_district'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_addr_district

    function ValidateField_addr_province(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->addr_province) > 50) 
          { 
              $Campos_Crit .= "Addr Province " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['addr_province']))
              {
                  $Campos_Erros['addr_province'] = array();
              }
              $Campos_Erros['addr_province'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['addr_province']) || !is_array($this->NM_ajax_info['errList']['addr_province']))
              {
                  $this->NM_ajax_info['errList']['addr_province'] = array();
              }
              $this->NM_ajax_info['errList']['addr_province'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_addr_province

    function ValidateField_addr_postcode(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->addr_postcode) > 5) 
          { 
              $Campos_Crit .= "Addr Postcode " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['addr_postcode']))
              {
                  $Campos_Erros['addr_postcode'] = array();
              }
              $Campos_Erros['addr_postcode'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['addr_postcode']) || !is_array($this->NM_ajax_info['errList']['addr_postcode']))
              {
                  $this->NM_ajax_info['errList']['addr_postcode'] = array();
              }
              $this->NM_ajax_info['errList']['addr_postcode'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_addr_postcode

    function ValidateField_addr_homephone(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->addr_homephone) > 50) 
          { 
              $Campos_Crit .= "Addr Homephone " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['addr_homephone']))
              {
                  $Campos_Erros['addr_homephone'] = array();
              }
              $Campos_Erros['addr_homephone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['addr_homephone']) || !is_array($this->NM_ajax_info['errList']['addr_homephone']))
              {
                  $this->NM_ajax_info['errList']['addr_homephone'] = array();
              }
              $this->NM_ajax_info['errList']['addr_homephone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_addr_homephone

    function ValidateField_addr_mobilephone(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->addr_mobilephone) > 50) 
          { 
              $Campos_Crit .= "Addr Mobilephone " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['addr_mobilephone']))
              {
                  $Campos_Erros['addr_mobilephone'] = array();
              }
              $Campos_Erros['addr_mobilephone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['addr_mobilephone']) || !is_array($this->NM_ajax_info['errList']['addr_mobilephone']))
              {
                  $this->NM_ajax_info['errList']['addr_mobilephone'] = array();
              }
              $this->NM_ajax_info['errList']['addr_mobilephone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_addr_mobilephone

    function ValidateField_addr_email(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->addr_email) > 50) 
          { 
              $Campos_Crit .= "Addr Email " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['addr_email']))
              {
                  $Campos_Erros['addr_email'] = array();
              }
              $Campos_Erros['addr_email'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['addr_email']) || !is_array($this->NM_ajax_info['errList']['addr_email']))
              {
                  $this->NM_ajax_info['errList']['addr_email'] = array();
              }
              $this->NM_ajax_info['errList']['addr_email'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_addr_email

    function ValidateField_cont_address(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cont_address) > 250) 
          { 
              $Campos_Crit .= "Contact Address " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cont_address']))
              {
                  $Campos_Erros['cont_address'] = array();
              }
              $Campos_Erros['cont_address'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cont_address']) || !is_array($this->NM_ajax_info['errList']['cont_address']))
              {
                  $this->NM_ajax_info['errList']['cont_address'] = array();
              }
              $this->NM_ajax_info['errList']['cont_address'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cont_address

    function ValidateField_cont_tambon(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cont_tambon) > 50) 
          { 
              $Campos_Crit .= "Contact Tambon " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cont_tambon']))
              {
                  $Campos_Erros['cont_tambon'] = array();
              }
              $Campos_Erros['cont_tambon'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cont_tambon']) || !is_array($this->NM_ajax_info['errList']['cont_tambon']))
              {
                  $this->NM_ajax_info['errList']['cont_tambon'] = array();
              }
              $this->NM_ajax_info['errList']['cont_tambon'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cont_tambon

    function ValidateField_cont_district(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cont_district) > 50) 
          { 
              $Campos_Crit .= "Contact District " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cont_district']))
              {
                  $Campos_Erros['cont_district'] = array();
              }
              $Campos_Erros['cont_district'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cont_district']) || !is_array($this->NM_ajax_info['errList']['cont_district']))
              {
                  $this->NM_ajax_info['errList']['cont_district'] = array();
              }
              $this->NM_ajax_info['errList']['cont_district'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cont_district

    function ValidateField_cont_province(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cont_province) > 50) 
          { 
              $Campos_Crit .= "Contact Province " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cont_province']))
              {
                  $Campos_Erros['cont_province'] = array();
              }
              $Campos_Erros['cont_province'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cont_province']) || !is_array($this->NM_ajax_info['errList']['cont_province']))
              {
                  $this->NM_ajax_info['errList']['cont_province'] = array();
              }
              $this->NM_ajax_info['errList']['cont_province'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cont_province

    function ValidateField_cont_postcode(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cont_postcode) > 5) 
          { 
              $Campos_Crit .= "Contact Postcode " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cont_postcode']))
              {
                  $Campos_Erros['cont_postcode'] = array();
              }
              $Campos_Erros['cont_postcode'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cont_postcode']) || !is_array($this->NM_ajax_info['errList']['cont_postcode']))
              {
                  $this->NM_ajax_info['errList']['cont_postcode'] = array();
              }
              $this->NM_ajax_info['errList']['cont_postcode'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cont_postcode

    function ValidateField_cont_homephone(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cont_homephone) > 50) 
          { 
              $Campos_Crit .= "Contact Homephone " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cont_homephone']))
              {
                  $Campos_Erros['cont_homephone'] = array();
              }
              $Campos_Erros['cont_homephone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cont_homephone']) || !is_array($this->NM_ajax_info['errList']['cont_homephone']))
              {
                  $this->NM_ajax_info['errList']['cont_homephone'] = array();
              }
              $this->NM_ajax_info['errList']['cont_homephone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cont_homephone

    function ValidateField_cont_mobilephone(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cont_mobilephone) > 50) 
          { 
              $Campos_Crit .= "Contact Mobilephone " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cont_mobilephone']))
              {
                  $Campos_Erros['cont_mobilephone'] = array();
              }
              $Campos_Erros['cont_mobilephone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cont_mobilephone']) || !is_array($this->NM_ajax_info['errList']['cont_mobilephone']))
              {
                  $this->NM_ajax_info['errList']['cont_mobilephone'] = array();
              }
              $this->NM_ajax_info['errList']['cont_mobilephone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cont_mobilephone

    function ValidateField_cont_email(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cont_email) > 50) 
          { 
              $Campos_Crit .= "Contact Email " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cont_email']))
              {
                  $Campos_Erros['cont_email'] = array();
              }
              $Campos_Erros['cont_email'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cont_email']) || !is_array($this->NM_ajax_info['errList']['cont_email']))
              {
                  $this->NM_ajax_info['errList']['cont_email'] = array();
              }
              $this->NM_ajax_info['errList']['cont_email'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cont_email

    function ValidateField_father_name(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->father_name) > 250) 
          { 
              $Campos_Crit .= "Father Name " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['father_name']))
              {
                  $Campos_Erros['father_name'] = array();
              }
              $Campos_Erros['father_name'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['father_name']) || !is_array($this->NM_ajax_info['errList']['father_name']))
              {
                  $this->NM_ajax_info['errList']['father_name'] = array();
              }
              $this->NM_ajax_info['errList']['father_name'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_father_name

    function ValidateField_father_pid(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->father_pid) > 13) 
          { 
              $Campos_Crit .= "Father PID " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['father_pid']))
              {
                  $Campos_Erros['father_pid'] = array();
              }
              $Campos_Erros['father_pid'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['father_pid']) || !is_array($this->NM_ajax_info['errList']['father_pid']))
              {
                  $this->NM_ajax_info['errList']['father_pid'] = array();
              }
              $this->NM_ajax_info['errList']['father_pid'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_father_pid

    function ValidateField_father_status(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->father_status) > 50) 
          { 
              $Campos_Crit .= "Father Status " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['father_status']))
              {
                  $Campos_Erros['father_status'] = array();
              }
              $Campos_Erros['father_status'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['father_status']) || !is_array($this->NM_ajax_info['errList']['father_status']))
              {
                  $this->NM_ajax_info['errList']['father_status'] = array();
              }
              $this->NM_ajax_info['errList']['father_status'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_father_status

    function ValidateField_father_age(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->father_age) > 50) 
          { 
              $Campos_Crit .= "Father Age " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['father_age']))
              {
                  $Campos_Erros['father_age'] = array();
              }
              $Campos_Erros['father_age'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['father_age']) || !is_array($this->NM_ajax_info['errList']['father_age']))
              {
                  $this->NM_ajax_info['errList']['father_age'] = array();
              }
              $this->NM_ajax_info['errList']['father_age'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_father_age

    function ValidateField_father_occupation(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->father_occupation) > 50) 
          { 
              $Campos_Crit .= "Father Occupation " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['father_occupation']))
              {
                  $Campos_Erros['father_occupation'] = array();
              }
              $Campos_Erros['father_occupation'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['father_occupation']) || !is_array($this->NM_ajax_info['errList']['father_occupation']))
              {
                  $this->NM_ajax_info['errList']['father_occupation'] = array();
              }
              $this->NM_ajax_info['errList']['father_occupation'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_father_occupation

    function ValidateField_father_annual_income(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->father_annual_income) > 50) 
          { 
              $Campos_Crit .= "Father Annual Income " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['father_annual_income']))
              {
                  $Campos_Erros['father_annual_income'] = array();
              }
              $Campos_Erros['father_annual_income'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['father_annual_income']) || !is_array($this->NM_ajax_info['errList']['father_annual_income']))
              {
                  $this->NM_ajax_info['errList']['father_annual_income'] = array();
              }
              $this->NM_ajax_info['errList']['father_annual_income'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_father_annual_income

    function ValidateField_mother_name(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->mother_name) > 250) 
          { 
              $Campos_Crit .= "Mother Name " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['mother_name']))
              {
                  $Campos_Erros['mother_name'] = array();
              }
              $Campos_Erros['mother_name'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['mother_name']) || !is_array($this->NM_ajax_info['errList']['mother_name']))
              {
                  $this->NM_ajax_info['errList']['mother_name'] = array();
              }
              $this->NM_ajax_info['errList']['mother_name'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_mother_name

    function ValidateField_mother_pid(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->mother_pid) > 13) 
          { 
              $Campos_Crit .= "Mother PID " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['mother_pid']))
              {
                  $Campos_Erros['mother_pid'] = array();
              }
              $Campos_Erros['mother_pid'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['mother_pid']) || !is_array($this->NM_ajax_info['errList']['mother_pid']))
              {
                  $this->NM_ajax_info['errList']['mother_pid'] = array();
              }
              $this->NM_ajax_info['errList']['mother_pid'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_mother_pid

    function ValidateField_mother_status(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->mother_status) > 50) 
          { 
              $Campos_Crit .= "Mother Status " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['mother_status']))
              {
                  $Campos_Erros['mother_status'] = array();
              }
              $Campos_Erros['mother_status'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['mother_status']) || !is_array($this->NM_ajax_info['errList']['mother_status']))
              {
                  $this->NM_ajax_info['errList']['mother_status'] = array();
              }
              $this->NM_ajax_info['errList']['mother_status'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_mother_status

    function ValidateField_mother_age(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->mother_age) > 50) 
          { 
              $Campos_Crit .= "Mother Age " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['mother_age']))
              {
                  $Campos_Erros['mother_age'] = array();
              }
              $Campos_Erros['mother_age'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['mother_age']) || !is_array($this->NM_ajax_info['errList']['mother_age']))
              {
                  $this->NM_ajax_info['errList']['mother_age'] = array();
              }
              $this->NM_ajax_info['errList']['mother_age'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_mother_age

    function ValidateField_mother_occupation(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->mother_occupation) > 50) 
          { 
              $Campos_Crit .= "Mother Occupation " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['mother_occupation']))
              {
                  $Campos_Erros['mother_occupation'] = array();
              }
              $Campos_Erros['mother_occupation'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['mother_occupation']) || !is_array($this->NM_ajax_info['errList']['mother_occupation']))
              {
                  $this->NM_ajax_info['errList']['mother_occupation'] = array();
              }
              $this->NM_ajax_info['errList']['mother_occupation'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_mother_occupation

    function ValidateField_mother_annual_income(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->mother_annual_income) > 50) 
          { 
              $Campos_Crit .= "Mother Annual Income " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['mother_annual_income']))
              {
                  $Campos_Erros['mother_annual_income'] = array();
              }
              $Campos_Erros['mother_annual_income'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['mother_annual_income']) || !is_array($this->NM_ajax_info['errList']['mother_annual_income']))
              {
                  $this->NM_ajax_info['errList']['mother_annual_income'] = array();
              }
              $this->NM_ajax_info['errList']['mother_annual_income'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_mother_annual_income

    function ValidateField_marriage_status(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->marriage_status) > 50) 
          { 
              $Campos_Crit .= "Marriage Status " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['marriage_status']))
              {
                  $Campos_Erros['marriage_status'] = array();
              }
              $Campos_Erros['marriage_status'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['marriage_status']) || !is_array($this->NM_ajax_info['errList']['marriage_status']))
              {
                  $this->NM_ajax_info['errList']['marriage_status'] = array();
              }
              $this->NM_ajax_info['errList']['marriage_status'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_marriage_status

    function ValidateField_parent_name(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->parent_name) > 100) 
          { 
              $Campos_Crit .= "Parent Name " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['parent_name']))
              {
                  $Campos_Erros['parent_name'] = array();
              }
              $Campos_Erros['parent_name'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['parent_name']) || !is_array($this->NM_ajax_info['errList']['parent_name']))
              {
                  $this->NM_ajax_info['errList']['parent_name'] = array();
              }
              $this->NM_ajax_info['errList']['parent_name'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_parent_name

    function ValidateField_parent_pid(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->parent_pid) > 13) 
          { 
              $Campos_Crit .= "Parent PID " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['parent_pid']))
              {
                  $Campos_Erros['parent_pid'] = array();
              }
              $Campos_Erros['parent_pid'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['parent_pid']) || !is_array($this->NM_ajax_info['errList']['parent_pid']))
              {
                  $this->NM_ajax_info['errList']['parent_pid'] = array();
              }
              $this->NM_ajax_info['errList']['parent_pid'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_parent_pid

    function ValidateField_parent_status(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->parent_status) > 50) 
          { 
              $Campos_Crit .= "Parent Status " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['parent_status']))
              {
                  $Campos_Erros['parent_status'] = array();
              }
              $Campos_Erros['parent_status'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['parent_status']) || !is_array($this->NM_ajax_info['errList']['parent_status']))
              {
                  $this->NM_ajax_info['errList']['parent_status'] = array();
              }
              $this->NM_ajax_info['errList']['parent_status'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_parent_status

    function ValidateField_parent_age(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->parent_age) > 11) 
          { 
              $Campos_Crit .= "Parent Age " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['parent_age']))
              {
                  $Campos_Erros['parent_age'] = array();
              }
              $Campos_Erros['parent_age'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['parent_age']) || !is_array($this->NM_ajax_info['errList']['parent_age']))
              {
                  $this->NM_ajax_info['errList']['parent_age'] = array();
              }
              $this->NM_ajax_info['errList']['parent_age'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_parent_age

    function ValidateField_parent_occupation(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->parent_occupation) > 100) 
          { 
              $Campos_Crit .= "Parent Occupation " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['parent_occupation']))
              {
                  $Campos_Erros['parent_occupation'] = array();
              }
              $Campos_Erros['parent_occupation'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['parent_occupation']) || !is_array($this->NM_ajax_info['errList']['parent_occupation']))
              {
                  $this->NM_ajax_info['errList']['parent_occupation'] = array();
              }
              $this->NM_ajax_info['errList']['parent_occupation'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_parent_occupation

    function ValidateField_parent_annual_income(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->parent_annual_income) > 50) 
          { 
              $Campos_Crit .= "Parent Annual Income " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['parent_annual_income']))
              {
                  $Campos_Erros['parent_annual_income'] = array();
              }
              $Campos_Erros['parent_annual_income'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['parent_annual_income']) || !is_array($this->NM_ajax_info['errList']['parent_annual_income']))
              {
                  $this->NM_ajax_info['errList']['parent_annual_income'] = array();
              }
              $this->NM_ajax_info['errList']['parent_annual_income'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_parent_annual_income

    function ValidateField_emer_contact(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->emer_contact) > 250) 
          { 
              $Campos_Crit .= "Emergency Contact " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['emer_contact']))
              {
                  $Campos_Erros['emer_contact'] = array();
              }
              $Campos_Erros['emer_contact'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['emer_contact']) || !is_array($this->NM_ajax_info['errList']['emer_contact']))
              {
                  $this->NM_ajax_info['errList']['emer_contact'] = array();
              }
              $this->NM_ajax_info['errList']['emer_contact'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_emer_contact

    function ValidateField_emer_homephone(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->emer_homephone) > 50) 
          { 
              $Campos_Crit .= "Emergency Homephone " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['emer_homephone']))
              {
                  $Campos_Erros['emer_homephone'] = array();
              }
              $Campos_Erros['emer_homephone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['emer_homephone']) || !is_array($this->NM_ajax_info['errList']['emer_homephone']))
              {
                  $this->NM_ajax_info['errList']['emer_homephone'] = array();
              }
              $this->NM_ajax_info['errList']['emer_homephone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_emer_homephone

    function ValidateField_emer_mobilephone(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->emer_mobilephone) > 50) 
          { 
              $Campos_Crit .= "Emergency Mobilephone " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['emer_mobilephone']))
              {
                  $Campos_Erros['emer_mobilephone'] = array();
              }
              $Campos_Erros['emer_mobilephone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['emer_mobilephone']) || !is_array($this->NM_ajax_info['errList']['emer_mobilephone']))
              {
                  $this->NM_ajax_info['errList']['emer_mobilephone'] = array();
              }
              $this->NM_ajax_info['errList']['emer_mobilephone'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_emer_mobilephone

    function ValidateField_emer_relationship(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->emer_relationship) > 50) 
          { 
              $Campos_Crit .= "Emergency Relationship " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['emer_relationship']))
              {
                  $Campos_Erros['emer_relationship'] = array();
              }
              $Campos_Erros['emer_relationship'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['emer_relationship']) || !is_array($this->NM_ajax_info['errList']['emer_relationship']))
              {
                  $this->NM_ajax_info['errList']['emer_relationship'] = array();
              }
              $this->NM_ajax_info['errList']['emer_relationship'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_emer_relationship

    function ValidateField_emer_address(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->emer_address) > 250) 
          { 
              $Campos_Crit .= "Emergency Address " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['emer_address']))
              {
                  $Campos_Erros['emer_address'] = array();
              }
              $Campos_Erros['emer_address'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['emer_address']) || !is_array($this->NM_ajax_info['errList']['emer_address']))
              {
                  $this->NM_ajax_info['errList']['emer_address'] = array();
              }
              $this->NM_ajax_info['errList']['emer_address'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_emer_address

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['program_id'] = $this->program_id;
    $this->nmgp_dados_form['student_status'] = $this->student_status;
    $this->nmgp_dados_form['student_id'] = $this->student_id;
    $this->nmgp_dados_form['title_id'] = $this->title_id;
    $this->nmgp_dados_form['firstname'] = $this->firstname;
    $this->nmgp_dados_form['lastname'] = $this->lastname;
    $this->nmgp_dados_form['firstnameeng'] = $this->firstnameeng;
    $this->nmgp_dados_form['lastnameeng'] = $this->lastnameeng;
    $this->nmgp_dados_form['gender'] = $this->gender;
    $this->nmgp_dados_form['student_pid'] = $this->student_pid;
    $this->nmgp_dados_form['pid_start'] = $this->pid_start;
    $this->nmgp_dados_form['pid_stop'] = $this->pid_stop;
    $this->nmgp_dados_form['student_dob'] = $this->student_dob;
    $this->nmgp_dados_form['race_id'] = $this->race_id;
    $this->nmgp_dados_form['nationality_id'] = $this->nationality_id;
    $this->nmgp_dados_form['religion_id'] = $this->religion_id;
    $this->nmgp_dados_form['blood_group_id'] = $this->blood_group_id;
    $this->nmgp_dados_form['school_id'] = $this->school_id;
    $this->nmgp_dados_form['school_address'] = $this->school_address;
    $this->nmgp_dados_form['school_district'] = $this->school_district;
    $this->nmgp_dados_form['school_province'] = $this->school_province;
    $this->nmgp_dados_form['school_year_grad'] = $this->school_year_grad;
    $this->nmgp_dados_form['school_gpa'] = $this->school_gpa;
    $this->nmgp_dados_form['addr_address'] = $this->addr_address;
    $this->nmgp_dados_form['addr_tambon'] = $this->addr_tambon;
    $this->nmgp_dados_form['addr_district'] = $this->addr_district;
    $this->nmgp_dados_form['addr_province'] = $this->addr_province;
    $this->nmgp_dados_form['addr_postcode'] = $this->addr_postcode;
    $this->nmgp_dados_form['addr_homephone'] = $this->addr_homephone;
    $this->nmgp_dados_form['addr_mobilephone'] = $this->addr_mobilephone;
    $this->nmgp_dados_form['addr_email'] = $this->addr_email;
    $this->nmgp_dados_form['cont_address'] = $this->cont_address;
    $this->nmgp_dados_form['cont_tambon'] = $this->cont_tambon;
    $this->nmgp_dados_form['cont_district'] = $this->cont_district;
    $this->nmgp_dados_form['cont_province'] = $this->cont_province;
    $this->nmgp_dados_form['cont_postcode'] = $this->cont_postcode;
    $this->nmgp_dados_form['cont_homephone'] = $this->cont_homephone;
    $this->nmgp_dados_form['cont_mobilephone'] = $this->cont_mobilephone;
    $this->nmgp_dados_form['cont_email'] = $this->cont_email;
    $this->nmgp_dados_form['father_name'] = $this->father_name;
    $this->nmgp_dados_form['father_pid'] = $this->father_pid;
    $this->nmgp_dados_form['father_status'] = $this->father_status;
    $this->nmgp_dados_form['father_age'] = $this->father_age;
    $this->nmgp_dados_form['father_occupation'] = $this->father_occupation;
    $this->nmgp_dados_form['father_annual_income'] = $this->father_annual_income;
    $this->nmgp_dados_form['mother_name'] = $this->mother_name;
    $this->nmgp_dados_form['mother_pid'] = $this->mother_pid;
    $this->nmgp_dados_form['mother_status'] = $this->mother_status;
    $this->nmgp_dados_form['mother_age'] = $this->mother_age;
    $this->nmgp_dados_form['mother_occupation'] = $this->mother_occupation;
    $this->nmgp_dados_form['mother_annual_income'] = $this->mother_annual_income;
    $this->nmgp_dados_form['marriage_status'] = $this->marriage_status;
    $this->nmgp_dados_form['parent_name'] = $this->parent_name;
    $this->nmgp_dados_form['parent_pid'] = $this->parent_pid;
    $this->nmgp_dados_form['parent_status'] = $this->parent_status;
    $this->nmgp_dados_form['parent_age'] = $this->parent_age;
    $this->nmgp_dados_form['parent_occupation'] = $this->parent_occupation;
    $this->nmgp_dados_form['parent_annual_income'] = $this->parent_annual_income;
    $this->nmgp_dados_form['emer_contact'] = $this->emer_contact;
    $this->nmgp_dados_form['emer_homephone'] = $this->emer_homephone;
    $this->nmgp_dados_form['emer_mobilephone'] = $this->emer_mobilephone;
    $this->nmgp_dados_form['emer_relationship'] = $this->emer_relationship;
    $this->nmgp_dados_form['emer_address'] = $this->emer_address;
    $this->nmgp_dados_form['id'] = $this->id;
    $this->nmgp_dados_form['created_date'] = $this->created_date;
    $this->nmgp_dados_form['modified_date'] = $this->modified_date;
    $this->nmgp_dados_form['faculty_id'] = $this->faculty_id;
    $this->nmgp_dados_form['token_id'] = $this->token_id;
    if (empty($this->personal_photo))
    {
        $this->personal_photo = $this->nmgp_dados_form['personal_photo'];
    }
    $this->nmgp_dados_form['personal_photo'] = $this->personal_photo;
    $this->nmgp_dados_form['personal_photo_limpa'] = $this->personal_photo_limpa;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_numero($this->id, $this->field_config['id']['symbol_grp']) ; 
      nm_limpa_data($this->created_date, $this->field_config['created_date']['date_sep']) ; 
      nm_limpa_hora($this->created_date_hora, $this->field_config['created_date']['time_sep']) ; 
      nm_limpa_data($this->modified_date, $this->field_config['modified_date']['date_sep']) ; 
      nm_limpa_hora($this->modified_date_hora, $this->field_config['modified_date']['time_sep']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~i', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "id")
      {
          nm_limpa_numero($this->id, $this->field_config['id']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               $x = 0;
               foreach ($str as $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
                   $x++;
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
       return $dt_out;
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_program_id();
          $this->ajax_return_values_student_status();
          $this->ajax_return_values_student_id();
          $this->ajax_return_values_title_id();
          $this->ajax_return_values_firstname();
          $this->ajax_return_values_lastname();
          $this->ajax_return_values_firstnameeng();
          $this->ajax_return_values_lastnameeng();
          $this->ajax_return_values_gender();
          $this->ajax_return_values_student_pid();
          $this->ajax_return_values_pid_start();
          $this->ajax_return_values_pid_stop();
          $this->ajax_return_values_student_dob();
          $this->ajax_return_values_race_id();
          $this->ajax_return_values_nationality_id();
          $this->ajax_return_values_religion_id();
          $this->ajax_return_values_blood_group_id();
          $this->ajax_return_values_school_id();
          $this->ajax_return_values_school_address();
          $this->ajax_return_values_school_district();
          $this->ajax_return_values_school_province();
          $this->ajax_return_values_school_year_grad();
          $this->ajax_return_values_school_gpa();
          $this->ajax_return_values_addr_address();
          $this->ajax_return_values_addr_tambon();
          $this->ajax_return_values_addr_district();
          $this->ajax_return_values_addr_province();
          $this->ajax_return_values_addr_postcode();
          $this->ajax_return_values_addr_homephone();
          $this->ajax_return_values_addr_mobilephone();
          $this->ajax_return_values_addr_email();
          $this->ajax_return_values_cont_address();
          $this->ajax_return_values_cont_tambon();
          $this->ajax_return_values_cont_district();
          $this->ajax_return_values_cont_province();
          $this->ajax_return_values_cont_postcode();
          $this->ajax_return_values_cont_homephone();
          $this->ajax_return_values_cont_mobilephone();
          $this->ajax_return_values_cont_email();
          $this->ajax_return_values_father_name();
          $this->ajax_return_values_father_pid();
          $this->ajax_return_values_father_status();
          $this->ajax_return_values_father_age();
          $this->ajax_return_values_father_occupation();
          $this->ajax_return_values_father_annual_income();
          $this->ajax_return_values_mother_name();
          $this->ajax_return_values_mother_pid();
          $this->ajax_return_values_mother_status();
          $this->ajax_return_values_mother_age();
          $this->ajax_return_values_mother_occupation();
          $this->ajax_return_values_mother_annual_income();
          $this->ajax_return_values_marriage_status();
          $this->ajax_return_values_parent_name();
          $this->ajax_return_values_parent_pid();
          $this->ajax_return_values_parent_status();
          $this->ajax_return_values_parent_age();
          $this->ajax_return_values_parent_occupation();
          $this->ajax_return_values_parent_annual_income();
          $this->ajax_return_values_emer_contact();
          $this->ajax_return_values_emer_homephone();
          $this->ajax_return_values_emer_mobilephone();
          $this->ajax_return_values_emer_relationship();
          $this->ajax_return_values_emer_address();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['id']['keyVal'] = form_student_registration_pack_protect_string($this->nmgp_dados_form['id']);
          }
   } // ajax_return_values

          //----- program_id
   function ajax_return_values_program_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("program_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->program_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['program_id'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- student_status
   function ajax_return_values_student_status($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("student_status", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->student_status);
              $aLookup = array();
              $this->_tmp_lookup_student_status = $this->student_status;

$aLookup[] = array(form_student_registration_pack_protect_string('1') => form_student_registration_pack_protect_string("Active"));
$aLookup[] = array(form_student_registration_pack_protect_string('0') => form_student_registration_pack_protect_string("Inactive"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_student_status'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_student_status'][] = '0';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['student_status']) && !empty($this->NM_ajax_info['select_html']['student_status']))
          {
              $sOptComp = $this->NM_ajax_info['select_html']['student_status'];
          }
          $this->NM_ajax_info['fldList']['student_status'] = array(
                       'row'    => '',
               'type'    => 'radio',
               'valList' => array($sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['student_status']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['student_status']['valList'][$i] = form_student_registration_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['student_status']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['student_status']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['student_status']['labList'] = $aLabel;
          }
   }

          //----- student_id
   function ajax_return_values_student_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("student_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->student_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['student_id'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- title_id
   function ajax_return_values_title_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("title_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->title_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['title_id'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- firstname
   function ajax_return_values_firstname($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("firstname", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->firstname);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['firstname'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- lastname
   function ajax_return_values_lastname($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lastname", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lastname);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['lastname'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- firstnameeng
   function ajax_return_values_firstnameeng($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("firstnameeng", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->firstnameeng);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['firstnameeng'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- lastnameeng
   function ajax_return_values_lastnameeng($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lastnameeng", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lastnameeng);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['lastnameeng'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- gender
   function ajax_return_values_gender($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("gender", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->gender);
              $aLookup = array();
              $this->_tmp_lookup_gender = $this->gender;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   $nm_comando = "select distinct(gender) from student_registration
where gender not like \"\"";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_student_registration_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_student_registration_pack_protect_string(NM_charset_to_utf8($rs->fields[0])));
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['gender']) && !empty($this->NM_ajax_info['select_html']['gender']))
          {
              $sOptComp = $this->NM_ajax_info['select_html']['gender'];
          }
          $this->NM_ajax_info['fldList']['gender'] = array(
                       'row'    => '',
               'type'    => 'radio',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
               'colNum'  => 1,
               'optComp'  => $sOptComp,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['gender']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['gender']['valList'][$i] = form_student_registration_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['gender']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['gender']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['gender']['labList'] = $aLabel;
          }
   }

          //----- student_pid
   function ajax_return_values_student_pid($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("student_pid", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->student_pid);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['student_pid'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- pid_start
   function ajax_return_values_pid_start($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pid_start", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pid_start);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pid_start'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- pid_stop
   function ajax_return_values_pid_stop($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pid_stop", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pid_stop);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pid_stop'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- student_dob
   function ajax_return_values_student_dob($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("student_dob", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->student_dob);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['student_dob'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- race_id
   function ajax_return_values_race_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("race_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->race_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['race_id'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nationality_id
   function ajax_return_values_nationality_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nationality_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nationality_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nationality_id'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- religion_id
   function ajax_return_values_religion_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("religion_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->religion_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['religion_id'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- blood_group_id
   function ajax_return_values_blood_group_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("blood_group_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->blood_group_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['blood_group_id'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- school_id
   function ajax_return_values_school_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("school_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->school_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['school_id'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- school_address
   function ajax_return_values_school_address($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("school_address", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->school_address);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['school_address'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- school_district
   function ajax_return_values_school_district($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("school_district", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->school_district);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['school_district'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- school_province
   function ajax_return_values_school_province($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("school_province", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->school_province);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['school_province'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- school_year_grad
   function ajax_return_values_school_year_grad($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("school_year_grad", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->school_year_grad);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['school_year_grad'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- school_gpa
   function ajax_return_values_school_gpa($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("school_gpa", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->school_gpa);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['school_gpa'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- addr_address
   function ajax_return_values_addr_address($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("addr_address", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->addr_address);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['addr_address'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- addr_tambon
   function ajax_return_values_addr_tambon($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("addr_tambon", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->addr_tambon);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['addr_tambon'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- addr_district
   function ajax_return_values_addr_district($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("addr_district", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->addr_district);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['addr_district'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- addr_province
   function ajax_return_values_addr_province($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("addr_province", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->addr_province);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['addr_province'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- addr_postcode
   function ajax_return_values_addr_postcode($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("addr_postcode", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->addr_postcode);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['addr_postcode'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- addr_homephone
   function ajax_return_values_addr_homephone($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("addr_homephone", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->addr_homephone);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['addr_homephone'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- addr_mobilephone
   function ajax_return_values_addr_mobilephone($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("addr_mobilephone", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->addr_mobilephone);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['addr_mobilephone'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- addr_email
   function ajax_return_values_addr_email($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("addr_email", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->addr_email);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['addr_email'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cont_address
   function ajax_return_values_cont_address($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cont_address", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cont_address);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cont_address'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cont_tambon
   function ajax_return_values_cont_tambon($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cont_tambon", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cont_tambon);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cont_tambon'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cont_district
   function ajax_return_values_cont_district($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cont_district", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cont_district);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cont_district'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cont_province
   function ajax_return_values_cont_province($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cont_province", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cont_province);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cont_province'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cont_postcode
   function ajax_return_values_cont_postcode($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cont_postcode", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cont_postcode);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cont_postcode'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cont_homephone
   function ajax_return_values_cont_homephone($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cont_homephone", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cont_homephone);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cont_homephone'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cont_mobilephone
   function ajax_return_values_cont_mobilephone($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cont_mobilephone", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cont_mobilephone);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cont_mobilephone'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cont_email
   function ajax_return_values_cont_email($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cont_email", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cont_email);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cont_email'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- father_name
   function ajax_return_values_father_name($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("father_name", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->father_name);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['father_name'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- father_pid
   function ajax_return_values_father_pid($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("father_pid", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->father_pid);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['father_pid'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- father_status
   function ajax_return_values_father_status($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("father_status", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->father_status);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['father_status'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- father_age
   function ajax_return_values_father_age($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("father_age", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->father_age);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['father_age'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- father_occupation
   function ajax_return_values_father_occupation($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("father_occupation", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->father_occupation);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['father_occupation'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- father_annual_income
   function ajax_return_values_father_annual_income($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("father_annual_income", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->father_annual_income);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['father_annual_income'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- mother_name
   function ajax_return_values_mother_name($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("mother_name", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->mother_name);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['mother_name'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- mother_pid
   function ajax_return_values_mother_pid($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("mother_pid", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->mother_pid);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['mother_pid'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- mother_status
   function ajax_return_values_mother_status($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("mother_status", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->mother_status);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['mother_status'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- mother_age
   function ajax_return_values_mother_age($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("mother_age", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->mother_age);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['mother_age'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- mother_occupation
   function ajax_return_values_mother_occupation($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("mother_occupation", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->mother_occupation);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['mother_occupation'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- mother_annual_income
   function ajax_return_values_mother_annual_income($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("mother_annual_income", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->mother_annual_income);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['mother_annual_income'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- marriage_status
   function ajax_return_values_marriage_status($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("marriage_status", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->marriage_status);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['marriage_status'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- parent_name
   function ajax_return_values_parent_name($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("parent_name", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->parent_name);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['parent_name'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- parent_pid
   function ajax_return_values_parent_pid($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("parent_pid", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->parent_pid);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['parent_pid'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- parent_status
   function ajax_return_values_parent_status($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("parent_status", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->parent_status);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['parent_status'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- parent_age
   function ajax_return_values_parent_age($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("parent_age", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->parent_age);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['parent_age'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- parent_occupation
   function ajax_return_values_parent_occupation($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("parent_occupation", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->parent_occupation);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['parent_occupation'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- parent_annual_income
   function ajax_return_values_parent_annual_income($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("parent_annual_income", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->parent_annual_income);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['parent_annual_income'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- emer_contact
   function ajax_return_values_emer_contact($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emer_contact", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emer_contact);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emer_contact'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- emer_homephone
   function ajax_return_values_emer_homephone($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emer_homephone", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emer_homephone);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emer_homephone'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- emer_mobilephone
   function ajax_return_values_emer_mobilephone($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emer_mobilephone", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emer_mobilephone);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emer_mobilephone'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- emer_relationship
   function ajax_return_values_emer_relationship($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emer_relationship", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emer_relationship);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emer_relationship'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- emer_address
   function ajax_return_values_emer_address($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emer_address", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emer_address);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emer_address'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 


   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros

   function nm_acessa_banco() 
   { 
      global  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      $SC_tem_cmp_update = true; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if (!in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Db->BeginTrans(); 
          $this->Ini->sc_tem_trans_banco = true; 
      } 
      $NM_val_form['program_id'] = $this->program_id;
      $NM_val_form['student_status'] = $this->student_status;
      $NM_val_form['student_id'] = $this->student_id;
      $NM_val_form['title_id'] = $this->title_id;
      $NM_val_form['firstname'] = $this->firstname;
      $NM_val_form['lastname'] = $this->lastname;
      $NM_val_form['firstnameeng'] = $this->firstnameeng;
      $NM_val_form['lastnameeng'] = $this->lastnameeng;
      $NM_val_form['gender'] = $this->gender;
      $NM_val_form['student_pid'] = $this->student_pid;
      $NM_val_form['pid_start'] = $this->pid_start;
      $NM_val_form['pid_stop'] = $this->pid_stop;
      $NM_val_form['student_dob'] = $this->student_dob;
      $NM_val_form['race_id'] = $this->race_id;
      $NM_val_form['nationality_id'] = $this->nationality_id;
      $NM_val_form['religion_id'] = $this->religion_id;
      $NM_val_form['blood_group_id'] = $this->blood_group_id;
      $NM_val_form['school_id'] = $this->school_id;
      $NM_val_form['school_address'] = $this->school_address;
      $NM_val_form['school_district'] = $this->school_district;
      $NM_val_form['school_province'] = $this->school_province;
      $NM_val_form['school_year_grad'] = $this->school_year_grad;
      $NM_val_form['school_gpa'] = $this->school_gpa;
      $NM_val_form['addr_address'] = $this->addr_address;
      $NM_val_form['addr_tambon'] = $this->addr_tambon;
      $NM_val_form['addr_district'] = $this->addr_district;
      $NM_val_form['addr_province'] = $this->addr_province;
      $NM_val_form['addr_postcode'] = $this->addr_postcode;
      $NM_val_form['addr_homephone'] = $this->addr_homephone;
      $NM_val_form['addr_mobilephone'] = $this->addr_mobilephone;
      $NM_val_form['addr_email'] = $this->addr_email;
      $NM_val_form['cont_address'] = $this->cont_address;
      $NM_val_form['cont_tambon'] = $this->cont_tambon;
      $NM_val_form['cont_district'] = $this->cont_district;
      $NM_val_form['cont_province'] = $this->cont_province;
      $NM_val_form['cont_postcode'] = $this->cont_postcode;
      $NM_val_form['cont_homephone'] = $this->cont_homephone;
      $NM_val_form['cont_mobilephone'] = $this->cont_mobilephone;
      $NM_val_form['cont_email'] = $this->cont_email;
      $NM_val_form['father_name'] = $this->father_name;
      $NM_val_form['father_pid'] = $this->father_pid;
      $NM_val_form['father_status'] = $this->father_status;
      $NM_val_form['father_age'] = $this->father_age;
      $NM_val_form['father_occupation'] = $this->father_occupation;
      $NM_val_form['father_annual_income'] = $this->father_annual_income;
      $NM_val_form['mother_name'] = $this->mother_name;
      $NM_val_form['mother_pid'] = $this->mother_pid;
      $NM_val_form['mother_status'] = $this->mother_status;
      $NM_val_form['mother_age'] = $this->mother_age;
      $NM_val_form['mother_occupation'] = $this->mother_occupation;
      $NM_val_form['mother_annual_income'] = $this->mother_annual_income;
      $NM_val_form['marriage_status'] = $this->marriage_status;
      $NM_val_form['parent_name'] = $this->parent_name;
      $NM_val_form['parent_pid'] = $this->parent_pid;
      $NM_val_form['parent_status'] = $this->parent_status;
      $NM_val_form['parent_age'] = $this->parent_age;
      $NM_val_form['parent_occupation'] = $this->parent_occupation;
      $NM_val_form['parent_annual_income'] = $this->parent_annual_income;
      $NM_val_form['emer_contact'] = $this->emer_contact;
      $NM_val_form['emer_homephone'] = $this->emer_homephone;
      $NM_val_form['emer_mobilephone'] = $this->emer_mobilephone;
      $NM_val_form['emer_relationship'] = $this->emer_relationship;
      $NM_val_form['emer_address'] = $this->emer_address;
      $NM_val_form['id'] = $this->id;
      $NM_val_form['created_date'] = $this->created_date;
      $NM_val_form['modified_date'] = $this->modified_date;
      $NM_val_form['faculty_id'] = $this->faculty_id;
      $NM_val_form['token_id'] = $this->token_id;
      $NM_val_form['personal_photo'] = $this->personal_photo;
      if ($this->id == "")  
      { 
          $this->id = 0;
      } 
      if ($this->nmgp_opcao == "alterar") 
      {
      }
      if ($this->nmgp_opcao == "alterar") 
      {
      }
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_ibase, $this->Ini->nm_bases_mysql);
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          if ($this->nmgp_opcao == "alterar") 
          {
              if ($this->created_date == "")  
              { 
                  $this->created_date = "null"; 
                  $NM_val_null[] = "created_date";
              } 
          }
          if ($this->nmgp_opcao == "alterar") 
          {
              if ($this->modified_date == "")  
              { 
                  $this->modified_date = "null"; 
                  $NM_val_null[] = "modified_date";
              } 
          }
          $this->student_id_before_qstr = $this->student_id;
          $this->student_id = substr($this->Db->qstr($this->student_id), 1, -1); 
          if ($this->student_id == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->student_id = "null"; 
              $NM_val_null[] = "student_id";
          } 
          $this->faculty_id_before_qstr = $this->faculty_id;
          $this->faculty_id = substr($this->Db->qstr($this->faculty_id), 1, -1); 
          if ($this->faculty_id == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->faculty_id = "null"; 
              $NM_val_null[] = "faculty_id";
          } 
          $this->program_id_before_qstr = $this->program_id;
          $this->program_id = substr($this->Db->qstr($this->program_id), 1, -1); 
          if ($this->program_id == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->program_id = "null"; 
              $NM_val_null[] = "program_id";
          } 
          $this->title_id_before_qstr = $this->title_id;
          $this->title_id = substr($this->Db->qstr($this->title_id), 1, -1); 
          if ($this->title_id == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->title_id = "null"; 
              $NM_val_null[] = "title_id";
          } 
          $this->firstname_before_qstr = $this->firstname;
          $this->firstname = substr($this->Db->qstr($this->firstname), 1, -1); 
          if ($this->firstname == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->firstname = "null"; 
              $NM_val_null[] = "firstname";
          } 
          $this->lastname_before_qstr = $this->lastname;
          $this->lastname = substr($this->Db->qstr($this->lastname), 1, -1); 
          if ($this->lastname == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->lastname = "null"; 
              $NM_val_null[] = "lastname";
          } 
          $this->gender_before_qstr = $this->gender;
          $this->gender = substr($this->Db->qstr($this->gender), 1, -1); 
          if ($this->gender == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->gender = "null"; 
              $NM_val_null[] = "gender";
          } 
          $this->student_pid_before_qstr = $this->student_pid;
          $this->student_pid = substr($this->Db->qstr($this->student_pid), 1, -1); 
          if ($this->student_pid == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->student_pid = "null"; 
              $NM_val_null[] = "student_pid";
          } 
          $this->student_dob_before_qstr = $this->student_dob;
          $this->student_dob = substr($this->Db->qstr($this->student_dob), 1, -1); 
          if ($this->student_dob == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->student_dob = "null"; 
              $NM_val_null[] = "student_dob";
          } 
          $this->race_id_before_qstr = $this->race_id;
          $this->race_id = substr($this->Db->qstr($this->race_id), 1, -1); 
          if ($this->race_id == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->race_id = "null"; 
              $NM_val_null[] = "race_id";
          } 
          $this->nationality_id_before_qstr = $this->nationality_id;
          $this->nationality_id = substr($this->Db->qstr($this->nationality_id), 1, -1); 
          if ($this->nationality_id == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nationality_id = "null"; 
              $NM_val_null[] = "nationality_id";
          } 
          $this->religion_id_before_qstr = $this->religion_id;
          $this->religion_id = substr($this->Db->qstr($this->religion_id), 1, -1); 
          if ($this->religion_id == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->religion_id = "null"; 
              $NM_val_null[] = "religion_id";
          } 
          $this->blood_group_id_before_qstr = $this->blood_group_id;
          $this->blood_group_id = substr($this->Db->qstr($this->blood_group_id), 1, -1); 
          if ($this->blood_group_id == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->blood_group_id = "null"; 
              $NM_val_null[] = "blood_group_id";
          } 
          $this->school_id_before_qstr = $this->school_id;
          $this->school_id = substr($this->Db->qstr($this->school_id), 1, -1); 
          if ($this->school_id == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->school_id = "null"; 
              $NM_val_null[] = "school_id";
          } 
          $this->school_address_before_qstr = $this->school_address;
          $this->school_address = substr($this->Db->qstr($this->school_address), 1, -1); 
          if ($this->school_address == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->school_address = "null"; 
              $NM_val_null[] = "school_address";
          } 
          $this->school_district_before_qstr = $this->school_district;
          $this->school_district = substr($this->Db->qstr($this->school_district), 1, -1); 
          if ($this->school_district == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->school_district = "null"; 
              $NM_val_null[] = "school_district";
          } 
          $this->school_province_before_qstr = $this->school_province;
          $this->school_province = substr($this->Db->qstr($this->school_province), 1, -1); 
          if ($this->school_province == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->school_province = "null"; 
              $NM_val_null[] = "school_province";
          } 
          $this->school_year_grad_before_qstr = $this->school_year_grad;
          $this->school_year_grad = substr($this->Db->qstr($this->school_year_grad), 1, -1); 
          if ($this->school_year_grad == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->school_year_grad = "null"; 
              $NM_val_null[] = "school_year_grad";
          } 
          $this->school_gpa_before_qstr = $this->school_gpa;
          $this->school_gpa = substr($this->Db->qstr($this->school_gpa), 1, -1); 
          if ($this->school_gpa == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->school_gpa = "null"; 
              $NM_val_null[] = "school_gpa";
          } 
          $this->addr_address_before_qstr = $this->addr_address;
          $this->addr_address = substr($this->Db->qstr($this->addr_address), 1, -1); 
          if ($this->addr_address == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->addr_address = "null"; 
              $NM_val_null[] = "addr_address";
          } 
          $this->addr_tambon_before_qstr = $this->addr_tambon;
          $this->addr_tambon = substr($this->Db->qstr($this->addr_tambon), 1, -1); 
          if ($this->addr_tambon == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->addr_tambon = "null"; 
              $NM_val_null[] = "addr_tambon";
          } 
          $this->addr_district_before_qstr = $this->addr_district;
          $this->addr_district = substr($this->Db->qstr($this->addr_district), 1, -1); 
          if ($this->addr_district == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->addr_district = "null"; 
              $NM_val_null[] = "addr_district";
          } 
          $this->addr_province_before_qstr = $this->addr_province;
          $this->addr_province = substr($this->Db->qstr($this->addr_province), 1, -1); 
          if ($this->addr_province == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->addr_province = "null"; 
              $NM_val_null[] = "addr_province";
          } 
          $this->addr_postcode_before_qstr = $this->addr_postcode;
          $this->addr_postcode = substr($this->Db->qstr($this->addr_postcode), 1, -1); 
          if ($this->addr_postcode == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->addr_postcode = "null"; 
              $NM_val_null[] = "addr_postcode";
          } 
          $this->addr_homephone_before_qstr = $this->addr_homephone;
          $this->addr_homephone = substr($this->Db->qstr($this->addr_homephone), 1, -1); 
          if ($this->addr_homephone == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->addr_homephone = "null"; 
              $NM_val_null[] = "addr_homephone";
          } 
          $this->addr_mobilephone_before_qstr = $this->addr_mobilephone;
          $this->addr_mobilephone = substr($this->Db->qstr($this->addr_mobilephone), 1, -1); 
          if ($this->addr_mobilephone == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->addr_mobilephone = "null"; 
              $NM_val_null[] = "addr_mobilephone";
          } 
          $this->addr_email_before_qstr = $this->addr_email;
          $this->addr_email = substr($this->Db->qstr($this->addr_email), 1, -1); 
          if ($this->addr_email == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->addr_email = "null"; 
              $NM_val_null[] = "addr_email";
          } 
          $this->cont_address_before_qstr = $this->cont_address;
          $this->cont_address = substr($this->Db->qstr($this->cont_address), 1, -1); 
          if ($this->cont_address == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cont_address = "null"; 
              $NM_val_null[] = "cont_address";
          } 
          $this->cont_tambon_before_qstr = $this->cont_tambon;
          $this->cont_tambon = substr($this->Db->qstr($this->cont_tambon), 1, -1); 
          if ($this->cont_tambon == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cont_tambon = "null"; 
              $NM_val_null[] = "cont_tambon";
          } 
          $this->cont_district_before_qstr = $this->cont_district;
          $this->cont_district = substr($this->Db->qstr($this->cont_district), 1, -1); 
          if ($this->cont_district == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cont_district = "null"; 
              $NM_val_null[] = "cont_district";
          } 
          $this->cont_province_before_qstr = $this->cont_province;
          $this->cont_province = substr($this->Db->qstr($this->cont_province), 1, -1); 
          if ($this->cont_province == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cont_province = "null"; 
              $NM_val_null[] = "cont_province";
          } 
          $this->cont_postcode_before_qstr = $this->cont_postcode;
          $this->cont_postcode = substr($this->Db->qstr($this->cont_postcode), 1, -1); 
          if ($this->cont_postcode == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cont_postcode = "null"; 
              $NM_val_null[] = "cont_postcode";
          } 
          $this->cont_homephone_before_qstr = $this->cont_homephone;
          $this->cont_homephone = substr($this->Db->qstr($this->cont_homephone), 1, -1); 
          if ($this->cont_homephone == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cont_homephone = "null"; 
              $NM_val_null[] = "cont_homephone";
          } 
          $this->cont_mobilephone_before_qstr = $this->cont_mobilephone;
          $this->cont_mobilephone = substr($this->Db->qstr($this->cont_mobilephone), 1, -1); 
          if ($this->cont_mobilephone == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cont_mobilephone = "null"; 
              $NM_val_null[] = "cont_mobilephone";
          } 
          $this->cont_email_before_qstr = $this->cont_email;
          $this->cont_email = substr($this->Db->qstr($this->cont_email), 1, -1); 
          if ($this->cont_email == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cont_email = "null"; 
              $NM_val_null[] = "cont_email";
          } 
          $this->father_name_before_qstr = $this->father_name;
          $this->father_name = substr($this->Db->qstr($this->father_name), 1, -1); 
          if ($this->father_name == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->father_name = "null"; 
              $NM_val_null[] = "father_name";
          } 
          $this->father_pid_before_qstr = $this->father_pid;
          $this->father_pid = substr($this->Db->qstr($this->father_pid), 1, -1); 
          if ($this->father_pid == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->father_pid = "null"; 
              $NM_val_null[] = "father_pid";
          } 
          $this->father_status_before_qstr = $this->father_status;
          $this->father_status = substr($this->Db->qstr($this->father_status), 1, -1); 
          if ($this->father_status == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->father_status = "null"; 
              $NM_val_null[] = "father_status";
          } 
          $this->father_age_before_qstr = $this->father_age;
          $this->father_age = substr($this->Db->qstr($this->father_age), 1, -1); 
          if ($this->father_age == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->father_age = "null"; 
              $NM_val_null[] = "father_age";
          } 
          $this->father_occupation_before_qstr = $this->father_occupation;
          $this->father_occupation = substr($this->Db->qstr($this->father_occupation), 1, -1); 
          if ($this->father_occupation == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->father_occupation = "null"; 
              $NM_val_null[] = "father_occupation";
          } 
          $this->father_annual_income_before_qstr = $this->father_annual_income;
          $this->father_annual_income = substr($this->Db->qstr($this->father_annual_income), 1, -1); 
          if ($this->father_annual_income == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->father_annual_income = "null"; 
              $NM_val_null[] = "father_annual_income";
          } 
          $this->mother_name_before_qstr = $this->mother_name;
          $this->mother_name = substr($this->Db->qstr($this->mother_name), 1, -1); 
          if ($this->mother_name == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->mother_name = "null"; 
              $NM_val_null[] = "mother_name";
          } 
          $this->mother_pid_before_qstr = $this->mother_pid;
          $this->mother_pid = substr($this->Db->qstr($this->mother_pid), 1, -1); 
          if ($this->mother_pid == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->mother_pid = "null"; 
              $NM_val_null[] = "mother_pid";
          } 
          $this->mother_status_before_qstr = $this->mother_status;
          $this->mother_status = substr($this->Db->qstr($this->mother_status), 1, -1); 
          if ($this->mother_status == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->mother_status = "null"; 
              $NM_val_null[] = "mother_status";
          } 
          $this->mother_age_before_qstr = $this->mother_age;
          $this->mother_age = substr($this->Db->qstr($this->mother_age), 1, -1); 
          if ($this->mother_age == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->mother_age = "null"; 
              $NM_val_null[] = "mother_age";
          } 
          $this->mother_occupation_before_qstr = $this->mother_occupation;
          $this->mother_occupation = substr($this->Db->qstr($this->mother_occupation), 1, -1); 
          if ($this->mother_occupation == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->mother_occupation = "null"; 
              $NM_val_null[] = "mother_occupation";
          } 
          $this->mother_annual_income_before_qstr = $this->mother_annual_income;
          $this->mother_annual_income = substr($this->Db->qstr($this->mother_annual_income), 1, -1); 
          if ($this->mother_annual_income == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->mother_annual_income = "null"; 
              $NM_val_null[] = "mother_annual_income";
          } 
          $this->marriage_status_before_qstr = $this->marriage_status;
          $this->marriage_status = substr($this->Db->qstr($this->marriage_status), 1, -1); 
          if ($this->marriage_status == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->marriage_status = "null"; 
              $NM_val_null[] = "marriage_status";
          } 
          $this->parent_name_before_qstr = $this->parent_name;
          $this->parent_name = substr($this->Db->qstr($this->parent_name), 1, -1); 
          if ($this->parent_name == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->parent_name = "null"; 
              $NM_val_null[] = "parent_name";
          } 
          $this->parent_pid_before_qstr = $this->parent_pid;
          $this->parent_pid = substr($this->Db->qstr($this->parent_pid), 1, -1); 
          if ($this->parent_pid == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->parent_pid = "null"; 
              $NM_val_null[] = "parent_pid";
          } 
          $this->parent_status_before_qstr = $this->parent_status;
          $this->parent_status = substr($this->Db->qstr($this->parent_status), 1, -1); 
          if ($this->parent_status == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->parent_status = "null"; 
              $NM_val_null[] = "parent_status";
          } 
          $this->parent_age_before_qstr = $this->parent_age;
          $this->parent_age = substr($this->Db->qstr($this->parent_age), 1, -1); 
          if ($this->parent_age == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->parent_age = "null"; 
              $NM_val_null[] = "parent_age";
          } 
          $this->parent_occupation_before_qstr = $this->parent_occupation;
          $this->parent_occupation = substr($this->Db->qstr($this->parent_occupation), 1, -1); 
          if ($this->parent_occupation == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->parent_occupation = "null"; 
              $NM_val_null[] = "parent_occupation";
          } 
          $this->parent_annual_income_before_qstr = $this->parent_annual_income;
          $this->parent_annual_income = substr($this->Db->qstr($this->parent_annual_income), 1, -1); 
          if ($this->parent_annual_income == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->parent_annual_income = "null"; 
              $NM_val_null[] = "parent_annual_income";
          } 
          $this->emer_contact_before_qstr = $this->emer_contact;
          $this->emer_contact = substr($this->Db->qstr($this->emer_contact), 1, -1); 
          if ($this->emer_contact == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emer_contact = "null"; 
              $NM_val_null[] = "emer_contact";
          } 
          $this->emer_homephone_before_qstr = $this->emer_homephone;
          $this->emer_homephone = substr($this->Db->qstr($this->emer_homephone), 1, -1); 
          if ($this->emer_homephone == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emer_homephone = "null"; 
              $NM_val_null[] = "emer_homephone";
          } 
          $this->emer_mobilephone_before_qstr = $this->emer_mobilephone;
          $this->emer_mobilephone = substr($this->Db->qstr($this->emer_mobilephone), 1, -1); 
          if ($this->emer_mobilephone == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emer_mobilephone = "null"; 
              $NM_val_null[] = "emer_mobilephone";
          } 
          $this->emer_relationship_before_qstr = $this->emer_relationship;
          $this->emer_relationship = substr($this->Db->qstr($this->emer_relationship), 1, -1); 
          if ($this->emer_relationship == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emer_relationship = "null"; 
              $NM_val_null[] = "emer_relationship";
          } 
          $this->emer_address_before_qstr = $this->emer_address;
          $this->emer_address = substr($this->Db->qstr($this->emer_address), 1, -1); 
          if ($this->emer_address == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emer_address = "null"; 
              $NM_val_null[] = "emer_address";
          } 
          $this->token_id_before_qstr = $this->token_id;
          $this->token_id = substr($this->Db->qstr($this->token_id), 1, -1); 
          if ($this->token_id == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->token_id = "null"; 
              $NM_val_null[] = "token_id";
          } 
          if ($this->personal_photo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->personal_photo = "null"; 
              $NM_val_null[] = "personal_photo";
          } 
          $this->firstnameeng_before_qstr = $this->firstnameeng;
          $this->firstnameeng = substr($this->Db->qstr($this->firstnameeng), 1, -1); 
          if ($this->firstnameeng == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->firstnameeng = "null"; 
              $NM_val_null[] = "firstnameeng";
          } 
          $this->lastnameeng_before_qstr = $this->lastnameeng;
          $this->lastnameeng = substr($this->Db->qstr($this->lastnameeng), 1, -1); 
          if ($this->lastnameeng == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->lastnameeng = "null"; 
              $NM_val_null[] = "lastnameeng";
          } 
          $this->pid_start_before_qstr = $this->pid_start;
          $this->pid_start = substr($this->Db->qstr($this->pid_start), 1, -1); 
          if ($this->pid_start == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pid_start = "null"; 
              $NM_val_null[] = "pid_start";
          } 
          $this->pid_stop_before_qstr = $this->pid_stop;
          $this->pid_stop = substr($this->Db->qstr($this->pid_stop), 1, -1); 
          if ($this->pid_stop == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pid_stop = "null"; 
              $NM_val_null[] = "pid_stop";
          } 
          $this->student_status_before_qstr = $this->student_status;
          $this->student_status = substr($this->Db->qstr($this->student_status), 1, -1); 
          if ($this->student_status == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->student_status = "null"; 
              $NM_val_null[] = "student_status";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_student_registration_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
              $Cmd_Unique = "select count(*) from " . $this->Ini->nm_tabela . " where (student_pid = '" . $this->student_pid . "') AND (id <> $this->id)";
              $Cmd_Unique = str_replace("'null'", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace("#null#", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $Cmd_Unique) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $Cmd_Unique;
              $rsUni = $this->Db->Execute($Cmd_Unique);
              if (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_ukey'] . " Student PID"); 
                  $this->nmgp_opcao = "nada"; 
                  $aUpdateOk[] = 'student_pid';
              }
              $rsUni->Close();
              $Cmd_Unique = "select count(*) from " . $this->Ini->nm_tabela . " where (token_id = '" . $this->token_id . "') AND (id <> $this->id)";
              $Cmd_Unique = str_replace("'null'", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace("#null#", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $Cmd_Unique) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $Cmd_Unique;
              $rsUni = $this->Db->Execute($Cmd_Unique);
              if (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_ukey'] . " Token Id"); 
                  $this->nmgp_opcao = "nada"; 
                  $aUpdateOk[] = 'token_id';
              }
              $rsUni->Close();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              $comando_oracle = "";  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET student_id = '$this->student_id', program_id = '$this->program_id', title_id = '$this->title_id', firstname = '$this->firstname', lastname = '$this->lastname', gender = '$this->gender', student_pid = '$this->student_pid', student_dob = '$this->student_dob', race_id = '$this->race_id', nationality_id = '$this->nationality_id', religion_id = '$this->religion_id', blood_group_id = '$this->blood_group_id', school_id = '$this->school_id', school_address = '$this->school_address', school_district = '$this->school_district', school_province = '$this->school_province', school_year_grad = '$this->school_year_grad', school_gpa = '$this->school_gpa', addr_address = '$this->addr_address', addr_tambon = '$this->addr_tambon', addr_district = '$this->addr_district', addr_province = '$this->addr_province', addr_postcode = '$this->addr_postcode', addr_homephone = '$this->addr_homephone', addr_mobilephone = '$this->addr_mobilephone', addr_email = '$this->addr_email', cont_address = '$this->cont_address', cont_tambon = '$this->cont_tambon', cont_district = '$this->cont_district', cont_province = '$this->cont_province', cont_postcode = '$this->cont_postcode', cont_homephone = '$this->cont_homephone', cont_mobilephone = '$this->cont_mobilephone', cont_email = '$this->cont_email', father_name = '$this->father_name', father_pid = '$this->father_pid', father_status = '$this->father_status', father_age = '$this->father_age', father_occupation = '$this->father_occupation', father_annual_income = '$this->father_annual_income', mother_name = '$this->mother_name', mother_pid = '$this->mother_pid', mother_status = '$this->mother_status', mother_age = '$this->mother_age', mother_occupation = '$this->mother_occupation', mother_annual_income = '$this->mother_annual_income', marriage_status = '$this->marriage_status', parent_name = '$this->parent_name', parent_pid = '$this->parent_pid', parent_status = '$this->parent_status', parent_age = '$this->parent_age', parent_occupation = '$this->parent_occupation', parent_annual_income = '$this->parent_annual_income', emer_contact = '$this->emer_contact', emer_homephone = '$this->emer_homephone', emer_mobilephone = '$this->emer_mobilephone', emer_relationship = '$this->emer_relationship', emer_address = '$this->emer_address', firstnameEng = '$this->firstnameeng', lastnameEng = '$this->lastnameeng', pid_start = '$this->pid_start', pid_stop = '$this->pid_stop', student_status = '$this->student_status'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET student_id = '$this->student_id', program_id = '$this->program_id', title_id = '$this->title_id', firstname = '$this->firstname', lastname = '$this->lastname', gender = '$this->gender', student_pid = '$this->student_pid', student_dob = '$this->student_dob', race_id = '$this->race_id', nationality_id = '$this->nationality_id', religion_id = '$this->religion_id', blood_group_id = '$this->blood_group_id', school_id = '$this->school_id', school_address = '$this->school_address', school_district = '$this->school_district', school_province = '$this->school_province', school_year_grad = '$this->school_year_grad', school_gpa = '$this->school_gpa', addr_address = '$this->addr_address', addr_tambon = '$this->addr_tambon', addr_district = '$this->addr_district', addr_province = '$this->addr_province', addr_postcode = '$this->addr_postcode', addr_homephone = '$this->addr_homephone', addr_mobilephone = '$this->addr_mobilephone', addr_email = '$this->addr_email', cont_address = '$this->cont_address', cont_tambon = '$this->cont_tambon', cont_district = '$this->cont_district', cont_province = '$this->cont_province', cont_postcode = '$this->cont_postcode', cont_homephone = '$this->cont_homephone', cont_mobilephone = '$this->cont_mobilephone', cont_email = '$this->cont_email', father_name = '$this->father_name', father_pid = '$this->father_pid', father_status = '$this->father_status', father_age = '$this->father_age', father_occupation = '$this->father_occupation', father_annual_income = '$this->father_annual_income', mother_name = '$this->mother_name', mother_pid = '$this->mother_pid', mother_status = '$this->mother_status', mother_age = '$this->mother_age', mother_occupation = '$this->mother_occupation', mother_annual_income = '$this->mother_annual_income', marriage_status = '$this->marriage_status', parent_name = '$this->parent_name', parent_pid = '$this->parent_pid', parent_status = '$this->parent_status', parent_age = '$this->parent_age', parent_occupation = '$this->parent_occupation', parent_annual_income = '$this->parent_annual_income', emer_contact = '$this->emer_contact', emer_homephone = '$this->emer_homephone', emer_mobilephone = '$this->emer_mobilephone', emer_relationship = '$this->emer_relationship', emer_address = '$this->emer_address', firstnameEng = '$this->firstnameeng', lastnameEng = '$this->lastnameeng', pid_start = '$this->pid_start', pid_stop = '$this->pid_stop', student_status = '$this->student_status'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET student_id = '$this->student_id', program_id = '$this->program_id', title_id = '$this->title_id', firstname = '$this->firstname', lastname = '$this->lastname', gender = '$this->gender', student_pid = '$this->student_pid', student_dob = '$this->student_dob', race_id = '$this->race_id', nationality_id = '$this->nationality_id', religion_id = '$this->religion_id', blood_group_id = '$this->blood_group_id', school_id = '$this->school_id', school_address = '$this->school_address', school_district = '$this->school_district', school_province = '$this->school_province', school_year_grad = '$this->school_year_grad', school_gpa = '$this->school_gpa', addr_address = '$this->addr_address', addr_tambon = '$this->addr_tambon', addr_district = '$this->addr_district', addr_province = '$this->addr_province', addr_postcode = '$this->addr_postcode', addr_homephone = '$this->addr_homephone', addr_mobilephone = '$this->addr_mobilephone', addr_email = '$this->addr_email', cont_address = '$this->cont_address', cont_tambon = '$this->cont_tambon', cont_district = '$this->cont_district', cont_province = '$this->cont_province', cont_postcode = '$this->cont_postcode', cont_homephone = '$this->cont_homephone', cont_mobilephone = '$this->cont_mobilephone', cont_email = '$this->cont_email', father_name = '$this->father_name', father_pid = '$this->father_pid', father_status = '$this->father_status', father_age = '$this->father_age', father_occupation = '$this->father_occupation', father_annual_income = '$this->father_annual_income', mother_name = '$this->mother_name', mother_pid = '$this->mother_pid', mother_status = '$this->mother_status', mother_age = '$this->mother_age', mother_occupation = '$this->mother_occupation', mother_annual_income = '$this->mother_annual_income', marriage_status = '$this->marriage_status', parent_name = '$this->parent_name', parent_pid = '$this->parent_pid', parent_status = '$this->parent_status', parent_age = '$this->parent_age', parent_occupation = '$this->parent_occupation', parent_annual_income = '$this->parent_annual_income', emer_contact = '$this->emer_contact', emer_homephone = '$this->emer_homephone', emer_mobilephone = '$this->emer_mobilephone', emer_relationship = '$this->emer_relationship', emer_address = '$this->emer_address', firstnameEng = '$this->firstnameeng', lastnameEng = '$this->lastnameeng', pid_start = '$this->pid_start', pid_stop = '$this->pid_stop', student_status = '$this->student_status'";  
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET student_id = '$this->student_id', program_id = '$this->program_id', title_id = '$this->title_id', firstname = '$this->firstname', lastname = '$this->lastname', gender = '$this->gender', student_pid = '$this->student_pid', student_dob = '$this->student_dob', race_id = '$this->race_id', nationality_id = '$this->nationality_id', religion_id = '$this->religion_id', blood_group_id = '$this->blood_group_id', school_id = '$this->school_id', school_address = '$this->school_address', school_district = '$this->school_district', school_province = '$this->school_province', school_year_grad = '$this->school_year_grad', school_gpa = '$this->school_gpa', addr_address = '$this->addr_address', addr_tambon = '$this->addr_tambon', addr_district = '$this->addr_district', addr_province = '$this->addr_province', addr_postcode = '$this->addr_postcode', addr_homephone = '$this->addr_homephone', addr_mobilephone = '$this->addr_mobilephone', addr_email = '$this->addr_email', cont_address = '$this->cont_address', cont_tambon = '$this->cont_tambon', cont_district = '$this->cont_district', cont_province = '$this->cont_province', cont_postcode = '$this->cont_postcode', cont_homephone = '$this->cont_homephone', cont_mobilephone = '$this->cont_mobilephone', cont_email = '$this->cont_email', father_name = '$this->father_name', father_pid = '$this->father_pid', father_status = '$this->father_status', father_age = '$this->father_age', father_occupation = '$this->father_occupation', father_annual_income = '$this->father_annual_income', mother_name = '$this->mother_name', mother_pid = '$this->mother_pid', mother_status = '$this->mother_status', mother_age = '$this->mother_age', mother_occupation = '$this->mother_occupation', mother_annual_income = '$this->mother_annual_income', marriage_status = '$this->marriage_status', parent_name = '$this->parent_name', parent_pid = '$this->parent_pid', parent_status = '$this->parent_status', parent_age = '$this->parent_age', parent_occupation = '$this->parent_occupation', parent_annual_income = '$this->parent_annual_income', emer_contact = '$this->emer_contact', emer_homephone = '$this->emer_homephone', emer_mobilephone = '$this->emer_mobilephone', emer_relationship = '$this->emer_relationship', emer_address = '$this->emer_address', firstnameEng = '$this->firstnameeng', lastnameEng = '$this->lastnameeng', pid_start = '$this->pid_start', pid_stop = '$this->pid_stop', student_status = '$this->student_status'";  
              } 
              if (isset($NM_val_form['created_date']) && $NM_val_form['created_date'] != $this->nmgp_dados_select['created_date']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  { 
                      $comando        .= " created_date = #$this->created_date#"; 
                  } 
                  else 
                  { 
                      $comando        .= " created_date = " . $this->Ini->date_delim . $this->created_date . $this->Ini->date_delim1 . ""; 
                  } 
                  $comando_oracle        .= " created_date = " . $this->Ini->date_delim . $this->created_date . $this->Ini->date_delim1 . ""; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['modified_date']) && $NM_val_form['modified_date'] != $this->nmgp_dados_select['modified_date']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  { 
                      $comando        .= " modified_date = #$this->modified_date#"; 
                  } 
                  else 
                  { 
                      $comando        .= " modified_date = " . $this->Ini->date_delim . $this->modified_date . $this->Ini->date_delim1 . ""; 
                  } 
                  $comando_oracle        .= " modified_date = " . $this->Ini->date_delim . $this->modified_date . $this->Ini->date_delim1 . ""; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['faculty_id']) && $NM_val_form['faculty_id'] != $this->nmgp_dados_select['faculty_id']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " faculty_id = '$this->faculty_id'"; 
                  $comando_oracle        .= " faculty_id = '$this->faculty_id'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['token_id']) && $NM_val_form['token_id'] != $this->nmgp_dados_select['token_id']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " token_id = '$this->token_id'"; 
                  $comando_oracle        .= " token_id = '$this->token_id'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              $aDoNotUpdate = array();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  $comando = $comando_oracle;  
                  $SC_ex_update = $SC_ex_upd_or;
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE id = $this->id ";  
              }  
              else  
              {
                  $comando .= " WHERE id = $this->id ";  
              }  
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if ($SC_ex_update || $SC_tem_cmp_update)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg(), true); 
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $this->Db->ErrorMsg();  
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_student_registration_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
          $this->student_id = $this->student_id_before_qstr;
          $this->faculty_id = $this->faculty_id_before_qstr;
          $this->program_id = $this->program_id_before_qstr;
          $this->title_id = $this->title_id_before_qstr;
          $this->firstname = $this->firstname_before_qstr;
          $this->lastname = $this->lastname_before_qstr;
          $this->gender = $this->gender_before_qstr;
          $this->student_pid = $this->student_pid_before_qstr;
          $this->student_dob = $this->student_dob_before_qstr;
          $this->race_id = $this->race_id_before_qstr;
          $this->nationality_id = $this->nationality_id_before_qstr;
          $this->religion_id = $this->religion_id_before_qstr;
          $this->blood_group_id = $this->blood_group_id_before_qstr;
          $this->school_id = $this->school_id_before_qstr;
          $this->school_address = $this->school_address_before_qstr;
          $this->school_district = $this->school_district_before_qstr;
          $this->school_province = $this->school_province_before_qstr;
          $this->school_year_grad = $this->school_year_grad_before_qstr;
          $this->school_gpa = $this->school_gpa_before_qstr;
          $this->addr_address = $this->addr_address_before_qstr;
          $this->addr_tambon = $this->addr_tambon_before_qstr;
          $this->addr_district = $this->addr_district_before_qstr;
          $this->addr_province = $this->addr_province_before_qstr;
          $this->addr_postcode = $this->addr_postcode_before_qstr;
          $this->addr_homephone = $this->addr_homephone_before_qstr;
          $this->addr_mobilephone = $this->addr_mobilephone_before_qstr;
          $this->addr_email = $this->addr_email_before_qstr;
          $this->cont_address = $this->cont_address_before_qstr;
          $this->cont_tambon = $this->cont_tambon_before_qstr;
          $this->cont_district = $this->cont_district_before_qstr;
          $this->cont_province = $this->cont_province_before_qstr;
          $this->cont_postcode = $this->cont_postcode_before_qstr;
          $this->cont_homephone = $this->cont_homephone_before_qstr;
          $this->cont_mobilephone = $this->cont_mobilephone_before_qstr;
          $this->cont_email = $this->cont_email_before_qstr;
          $this->father_name = $this->father_name_before_qstr;
          $this->father_pid = $this->father_pid_before_qstr;
          $this->father_status = $this->father_status_before_qstr;
          $this->father_age = $this->father_age_before_qstr;
          $this->father_occupation = $this->father_occupation_before_qstr;
          $this->father_annual_income = $this->father_annual_income_before_qstr;
          $this->mother_name = $this->mother_name_before_qstr;
          $this->mother_pid = $this->mother_pid_before_qstr;
          $this->mother_status = $this->mother_status_before_qstr;
          $this->mother_age = $this->mother_age_before_qstr;
          $this->mother_occupation = $this->mother_occupation_before_qstr;
          $this->mother_annual_income = $this->mother_annual_income_before_qstr;
          $this->marriage_status = $this->marriage_status_before_qstr;
          $this->parent_name = $this->parent_name_before_qstr;
          $this->parent_pid = $this->parent_pid_before_qstr;
          $this->parent_status = $this->parent_status_before_qstr;
          $this->parent_age = $this->parent_age_before_qstr;
          $this->parent_occupation = $this->parent_occupation_before_qstr;
          $this->parent_annual_income = $this->parent_annual_income_before_qstr;
          $this->emer_contact = $this->emer_contact_before_qstr;
          $this->emer_homephone = $this->emer_homephone_before_qstr;
          $this->emer_mobilephone = $this->emer_mobilephone_before_qstr;
          $this->emer_relationship = $this->emer_relationship_before_qstr;
          $this->emer_address = $this->emer_address_before_qstr;
          $this->token_id = $this->token_id_before_qstr;
          $this->firstnameeng = $this->firstnameeng_before_qstr;
          $this->lastnameeng = $this->lastnameeng_before_qstr;
          $this->pid_start = $this->pid_start_before_qstr;
          $this->pid_stop = $this->pid_stop_before_qstr;
          $this->student_status = $this->student_status_before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['db_changed'] = true;


              if     (isset($NM_val_form) && isset($NM_val_form['student_id'])) { $this->student_id = $NM_val_form['student_id']; }
              elseif (isset($this->student_id)) { $this->nm_limpa_alfa($this->student_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['program_id'])) { $this->program_id = $NM_val_form['program_id']; }
              elseif (isset($this->program_id)) { $this->nm_limpa_alfa($this->program_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['title_id'])) { $this->title_id = $NM_val_form['title_id']; }
              elseif (isset($this->title_id)) { $this->nm_limpa_alfa($this->title_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['firstname'])) { $this->firstname = $NM_val_form['firstname']; }
              elseif (isset($this->firstname)) { $this->nm_limpa_alfa($this->firstname); }
              if     (isset($NM_val_form) && isset($NM_val_form['lastname'])) { $this->lastname = $NM_val_form['lastname']; }
              elseif (isset($this->lastname)) { $this->nm_limpa_alfa($this->lastname); }
              if     (isset($NM_val_form) && isset($NM_val_form['gender'])) { $this->gender = $NM_val_form['gender']; }
              elseif (isset($this->gender)) { $this->nm_limpa_alfa($this->gender); }
              if     (isset($NM_val_form) && isset($NM_val_form['student_pid'])) { $this->student_pid = $NM_val_form['student_pid']; }
              elseif (isset($this->student_pid)) { $this->nm_limpa_alfa($this->student_pid); }
              if     (isset($NM_val_form) && isset($NM_val_form['student_dob'])) { $this->student_dob = $NM_val_form['student_dob']; }
              elseif (isset($this->student_dob)) { $this->nm_limpa_alfa($this->student_dob); }
              if     (isset($NM_val_form) && isset($NM_val_form['race_id'])) { $this->race_id = $NM_val_form['race_id']; }
              elseif (isset($this->race_id)) { $this->nm_limpa_alfa($this->race_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['nationality_id'])) { $this->nationality_id = $NM_val_form['nationality_id']; }
              elseif (isset($this->nationality_id)) { $this->nm_limpa_alfa($this->nationality_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['religion_id'])) { $this->religion_id = $NM_val_form['religion_id']; }
              elseif (isset($this->religion_id)) { $this->nm_limpa_alfa($this->religion_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['blood_group_id'])) { $this->blood_group_id = $NM_val_form['blood_group_id']; }
              elseif (isset($this->blood_group_id)) { $this->nm_limpa_alfa($this->blood_group_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['school_id'])) { $this->school_id = $NM_val_form['school_id']; }
              elseif (isset($this->school_id)) { $this->nm_limpa_alfa($this->school_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['school_address'])) { $this->school_address = $NM_val_form['school_address']; }
              elseif (isset($this->school_address)) { $this->nm_limpa_alfa($this->school_address); }
              if     (isset($NM_val_form) && isset($NM_val_form['school_district'])) { $this->school_district = $NM_val_form['school_district']; }
              elseif (isset($this->school_district)) { $this->nm_limpa_alfa($this->school_district); }
              if     (isset($NM_val_form) && isset($NM_val_form['school_province'])) { $this->school_province = $NM_val_form['school_province']; }
              elseif (isset($this->school_province)) { $this->nm_limpa_alfa($this->school_province); }
              if     (isset($NM_val_form) && isset($NM_val_form['school_year_grad'])) { $this->school_year_grad = $NM_val_form['school_year_grad']; }
              elseif (isset($this->school_year_grad)) { $this->nm_limpa_alfa($this->school_year_grad); }
              if     (isset($NM_val_form) && isset($NM_val_form['school_gpa'])) { $this->school_gpa = $NM_val_form['school_gpa']; }
              elseif (isset($this->school_gpa)) { $this->nm_limpa_alfa($this->school_gpa); }
              if     (isset($NM_val_form) && isset($NM_val_form['addr_address'])) { $this->addr_address = $NM_val_form['addr_address']; }
              elseif (isset($this->addr_address)) { $this->nm_limpa_alfa($this->addr_address); }
              if     (isset($NM_val_form) && isset($NM_val_form['addr_tambon'])) { $this->addr_tambon = $NM_val_form['addr_tambon']; }
              elseif (isset($this->addr_tambon)) { $this->nm_limpa_alfa($this->addr_tambon); }
              if     (isset($NM_val_form) && isset($NM_val_form['addr_district'])) { $this->addr_district = $NM_val_form['addr_district']; }
              elseif (isset($this->addr_district)) { $this->nm_limpa_alfa($this->addr_district); }
              if     (isset($NM_val_form) && isset($NM_val_form['addr_province'])) { $this->addr_province = $NM_val_form['addr_province']; }
              elseif (isset($this->addr_province)) { $this->nm_limpa_alfa($this->addr_province); }
              if     (isset($NM_val_form) && isset($NM_val_form['addr_postcode'])) { $this->addr_postcode = $NM_val_form['addr_postcode']; }
              elseif (isset($this->addr_postcode)) { $this->nm_limpa_alfa($this->addr_postcode); }
              if     (isset($NM_val_form) && isset($NM_val_form['addr_homephone'])) { $this->addr_homephone = $NM_val_form['addr_homephone']; }
              elseif (isset($this->addr_homephone)) { $this->nm_limpa_alfa($this->addr_homephone); }
              if     (isset($NM_val_form) && isset($NM_val_form['addr_mobilephone'])) { $this->addr_mobilephone = $NM_val_form['addr_mobilephone']; }
              elseif (isset($this->addr_mobilephone)) { $this->nm_limpa_alfa($this->addr_mobilephone); }
              if     (isset($NM_val_form) && isset($NM_val_form['addr_email'])) { $this->addr_email = $NM_val_form['addr_email']; }
              elseif (isset($this->addr_email)) { $this->nm_limpa_alfa($this->addr_email); }
              if     (isset($NM_val_form) && isset($NM_val_form['cont_address'])) { $this->cont_address = $NM_val_form['cont_address']; }
              elseif (isset($this->cont_address)) { $this->nm_limpa_alfa($this->cont_address); }
              if     (isset($NM_val_form) && isset($NM_val_form['cont_tambon'])) { $this->cont_tambon = $NM_val_form['cont_tambon']; }
              elseif (isset($this->cont_tambon)) { $this->nm_limpa_alfa($this->cont_tambon); }
              if     (isset($NM_val_form) && isset($NM_val_form['cont_district'])) { $this->cont_district = $NM_val_form['cont_district']; }
              elseif (isset($this->cont_district)) { $this->nm_limpa_alfa($this->cont_district); }
              if     (isset($NM_val_form) && isset($NM_val_form['cont_province'])) { $this->cont_province = $NM_val_form['cont_province']; }
              elseif (isset($this->cont_province)) { $this->nm_limpa_alfa($this->cont_province); }
              if     (isset($NM_val_form) && isset($NM_val_form['cont_postcode'])) { $this->cont_postcode = $NM_val_form['cont_postcode']; }
              elseif (isset($this->cont_postcode)) { $this->nm_limpa_alfa($this->cont_postcode); }
              if     (isset($NM_val_form) && isset($NM_val_form['cont_homephone'])) { $this->cont_homephone = $NM_val_form['cont_homephone']; }
              elseif (isset($this->cont_homephone)) { $this->nm_limpa_alfa($this->cont_homephone); }
              if     (isset($NM_val_form) && isset($NM_val_form['cont_mobilephone'])) { $this->cont_mobilephone = $NM_val_form['cont_mobilephone']; }
              elseif (isset($this->cont_mobilephone)) { $this->nm_limpa_alfa($this->cont_mobilephone); }
              if     (isset($NM_val_form) && isset($NM_val_form['cont_email'])) { $this->cont_email = $NM_val_form['cont_email']; }
              elseif (isset($this->cont_email)) { $this->nm_limpa_alfa($this->cont_email); }
              if     (isset($NM_val_form) && isset($NM_val_form['father_name'])) { $this->father_name = $NM_val_form['father_name']; }
              elseif (isset($this->father_name)) { $this->nm_limpa_alfa($this->father_name); }
              if     (isset($NM_val_form) && isset($NM_val_form['father_pid'])) { $this->father_pid = $NM_val_form['father_pid']; }
              elseif (isset($this->father_pid)) { $this->nm_limpa_alfa($this->father_pid); }
              if     (isset($NM_val_form) && isset($NM_val_form['father_status'])) { $this->father_status = $NM_val_form['father_status']; }
              elseif (isset($this->father_status)) { $this->nm_limpa_alfa($this->father_status); }
              if     (isset($NM_val_form) && isset($NM_val_form['father_age'])) { $this->father_age = $NM_val_form['father_age']; }
              elseif (isset($this->father_age)) { $this->nm_limpa_alfa($this->father_age); }
              if     (isset($NM_val_form) && isset($NM_val_form['father_occupation'])) { $this->father_occupation = $NM_val_form['father_occupation']; }
              elseif (isset($this->father_occupation)) { $this->nm_limpa_alfa($this->father_occupation); }
              if     (isset($NM_val_form) && isset($NM_val_form['father_annual_income'])) { $this->father_annual_income = $NM_val_form['father_annual_income']; }
              elseif (isset($this->father_annual_income)) { $this->nm_limpa_alfa($this->father_annual_income); }
              if     (isset($NM_val_form) && isset($NM_val_form['mother_name'])) { $this->mother_name = $NM_val_form['mother_name']; }
              elseif (isset($this->mother_name)) { $this->nm_limpa_alfa($this->mother_name); }
              if     (isset($NM_val_form) && isset($NM_val_form['mother_pid'])) { $this->mother_pid = $NM_val_form['mother_pid']; }
              elseif (isset($this->mother_pid)) { $this->nm_limpa_alfa($this->mother_pid); }
              if     (isset($NM_val_form) && isset($NM_val_form['mother_status'])) { $this->mother_status = $NM_val_form['mother_status']; }
              elseif (isset($this->mother_status)) { $this->nm_limpa_alfa($this->mother_status); }
              if     (isset($NM_val_form) && isset($NM_val_form['mother_age'])) { $this->mother_age = $NM_val_form['mother_age']; }
              elseif (isset($this->mother_age)) { $this->nm_limpa_alfa($this->mother_age); }
              if     (isset($NM_val_form) && isset($NM_val_form['mother_occupation'])) { $this->mother_occupation = $NM_val_form['mother_occupation']; }
              elseif (isset($this->mother_occupation)) { $this->nm_limpa_alfa($this->mother_occupation); }
              if     (isset($NM_val_form) && isset($NM_val_form['mother_annual_income'])) { $this->mother_annual_income = $NM_val_form['mother_annual_income']; }
              elseif (isset($this->mother_annual_income)) { $this->nm_limpa_alfa($this->mother_annual_income); }
              if     (isset($NM_val_form) && isset($NM_val_form['marriage_status'])) { $this->marriage_status = $NM_val_form['marriage_status']; }
              elseif (isset($this->marriage_status)) { $this->nm_limpa_alfa($this->marriage_status); }
              if     (isset($NM_val_form) && isset($NM_val_form['parent_name'])) { $this->parent_name = $NM_val_form['parent_name']; }
              elseif (isset($this->parent_name)) { $this->nm_limpa_alfa($this->parent_name); }
              if     (isset($NM_val_form) && isset($NM_val_form['parent_pid'])) { $this->parent_pid = $NM_val_form['parent_pid']; }
              elseif (isset($this->parent_pid)) { $this->nm_limpa_alfa($this->parent_pid); }
              if     (isset($NM_val_form) && isset($NM_val_form['parent_status'])) { $this->parent_status = $NM_val_form['parent_status']; }
              elseif (isset($this->parent_status)) { $this->nm_limpa_alfa($this->parent_status); }
              if     (isset($NM_val_form) && isset($NM_val_form['parent_age'])) { $this->parent_age = $NM_val_form['parent_age']; }
              elseif (isset($this->parent_age)) { $this->nm_limpa_alfa($this->parent_age); }
              if     (isset($NM_val_form) && isset($NM_val_form['parent_occupation'])) { $this->parent_occupation = $NM_val_form['parent_occupation']; }
              elseif (isset($this->parent_occupation)) { $this->nm_limpa_alfa($this->parent_occupation); }
              if     (isset($NM_val_form) && isset($NM_val_form['parent_annual_income'])) { $this->parent_annual_income = $NM_val_form['parent_annual_income']; }
              elseif (isset($this->parent_annual_income)) { $this->nm_limpa_alfa($this->parent_annual_income); }
              if     (isset($NM_val_form) && isset($NM_val_form['emer_contact'])) { $this->emer_contact = $NM_val_form['emer_contact']; }
              elseif (isset($this->emer_contact)) { $this->nm_limpa_alfa($this->emer_contact); }
              if     (isset($NM_val_form) && isset($NM_val_form['emer_homephone'])) { $this->emer_homephone = $NM_val_form['emer_homephone']; }
              elseif (isset($this->emer_homephone)) { $this->nm_limpa_alfa($this->emer_homephone); }
              if     (isset($NM_val_form) && isset($NM_val_form['emer_mobilephone'])) { $this->emer_mobilephone = $NM_val_form['emer_mobilephone']; }
              elseif (isset($this->emer_mobilephone)) { $this->nm_limpa_alfa($this->emer_mobilephone); }
              if     (isset($NM_val_form) && isset($NM_val_form['emer_relationship'])) { $this->emer_relationship = $NM_val_form['emer_relationship']; }
              elseif (isset($this->emer_relationship)) { $this->nm_limpa_alfa($this->emer_relationship); }
              if     (isset($NM_val_form) && isset($NM_val_form['emer_address'])) { $this->emer_address = $NM_val_form['emer_address']; }
              elseif (isset($this->emer_address)) { $this->nm_limpa_alfa($this->emer_address); }
              if     (isset($NM_val_form) && isset($NM_val_form['firstnameeng'])) { $this->firstnameeng = $NM_val_form['firstnameeng']; }
              elseif (isset($this->firstnameeng)) { $this->nm_limpa_alfa($this->firstnameeng); }
              if     (isset($NM_val_form) && isset($NM_val_form['lastnameeng'])) { $this->lastnameeng = $NM_val_form['lastnameeng']; }
              elseif (isset($this->lastnameeng)) { $this->nm_limpa_alfa($this->lastnameeng); }
              if     (isset($NM_val_form) && isset($NM_val_form['pid_start'])) { $this->pid_start = $NM_val_form['pid_start']; }
              elseif (isset($this->pid_start)) { $this->nm_limpa_alfa($this->pid_start); }
              if     (isset($NM_val_form) && isset($NM_val_form['pid_stop'])) { $this->pid_stop = $NM_val_form['pid_stop']; }
              elseif (isset($this->pid_stop)) { $this->nm_limpa_alfa($this->pid_stop); }
              if     (isset($NM_val_form) && isset($NM_val_form['student_status'])) { $this->student_status = $NM_val_form['student_status']; }
              elseif (isset($this->student_status)) { $this->nm_limpa_alfa($this->student_status); }

              $this->nm_formatar_campos();

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('program_id', 'student_status', 'student_id', 'title_id', 'firstname', 'lastname', 'firstnameeng', 'lastnameeng', 'gender', 'student_pid', 'pid_start', 'pid_stop', 'student_dob', 'race_id', 'nationality_id', 'religion_id', 'blood_group_id', 'school_id', 'school_address', 'school_district', 'school_province', 'school_year_grad', 'school_gpa', 'addr_address', 'addr_tambon', 'addr_district', 'addr_province', 'addr_postcode', 'addr_homephone', 'addr_mobilephone', 'addr_email', 'cont_address', 'cont_tambon', 'cont_district', 'cont_province', 'cont_postcode', 'cont_homephone', 'cont_mobilephone', 'cont_email', 'father_name', 'father_pid', 'father_status', 'father_age', 'father_occupation', 'father_annual_income', 'mother_name', 'mother_pid', 'mother_status', 'mother_age', 'mother_occupation', 'mother_annual_income', 'marriage_status', 'parent_name', 'parent_pid', 'parent_status', 'parent_age', 'parent_occupation', 'parent_annual_income', 'emer_contact', 'emer_homephone', 'emer_mobilephone', 'emer_relationship', 'emer_address'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "id, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
              $Cmd_Unique = "select count(*) from " . $this->Ini->nm_tabela . " where student_pid = '" . $this->student_pid . "'";
              $Cmd_Unique = str_replace("'null'", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace("#null#", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $Cmd_Unique) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $Cmd_Unique;
              $rsUni = $this->Db->Execute($Cmd_Unique);
              if (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_inst_uniq'] . " Student PID"); 
                  $this->nmgp_opcao = "nada"; 
                  $GLOBALS["erro_incl"] = 1; 
                  $aInsertOk[] = 'student_pid';
              }
              $rsUni->Close();
              $Cmd_Unique = "select count(*) from " . $this->Ini->nm_tabela . " where token_id = '" . $this->token_id . "'";
              $Cmd_Unique = str_replace("'null'", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace("#null#", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $Cmd_Unique) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $Cmd_Unique;
              $rsUni = $this->Db->Execute($Cmd_Unique);
              if (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_inst_uniq'] . " Token Id"); 
                  $this->nmgp_opcao = "nada"; 
                  $GLOBALS["erro_incl"] = 1; 
                  $aInsertOk[] = 'token_id';
              }
              $rsUni->Close();
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_student_registration_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              $_test_file = $this->fetchUniqueUploadName($this->personal_photo_scfile_name, $dir_file, "personal_photo");
              if (trim($this->personal_photo_scfile_name) != $_test_file)
              {
                  $this->personal_photo_scfile_name = $_test_file;
                  $this->personal_photo = $_test_file;
              }
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->created_date != "")
                  { 
                       $compl_insert     .= ", created_date";
                       $compl_insert_val .= ", #$this->created_date#";
                  } 
                  if ($this->modified_date != "")
                  { 
                       $compl_insert     .= ", modified_date";
                       $compl_insert_val .= ", #$this->modified_date#";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (student_id, faculty_id, program_id, title_id, firstname, lastname, gender, student_pid, student_dob, race_id, nationality_id, religion_id, blood_group_id, school_id, school_address, school_district, school_province, school_year_grad, school_gpa, addr_address, addr_tambon, addr_district, addr_province, addr_postcode, addr_homephone, addr_mobilephone, addr_email, cont_address, cont_tambon, cont_district, cont_province, cont_postcode, cont_homephone, cont_mobilephone, cont_email, father_name, father_pid, father_status, father_age, father_occupation, father_annual_income, mother_name, mother_pid, mother_status, mother_age, mother_occupation, mother_annual_income, marriage_status, parent_name, parent_pid, parent_status, parent_age, parent_occupation, parent_annual_income, emer_contact, emer_homephone, emer_mobilephone, emer_relationship, emer_address, token_id, personal_photo, firstnameEng, lastnameEng, pid_start, pid_stop, student_status $compl_insert) VALUES ('$this->student_id', '$this->faculty_id', '$this->program_id', '$this->title_id', '$this->firstname', '$this->lastname', '$this->gender', '$this->student_pid', '$this->student_dob', '$this->race_id', '$this->nationality_id', '$this->religion_id', '$this->blood_group_id', '$this->school_id', '$this->school_address', '$this->school_district', '$this->school_province', '$this->school_year_grad', '$this->school_gpa', '$this->addr_address', '$this->addr_tambon', '$this->addr_district', '$this->addr_province', '$this->addr_postcode', '$this->addr_homephone', '$this->addr_mobilephone', '$this->addr_email', '$this->cont_address', '$this->cont_tambon', '$this->cont_district', '$this->cont_province', '$this->cont_postcode', '$this->cont_homephone', '$this->cont_mobilephone', '$this->cont_email', '$this->father_name', '$this->father_pid', '$this->father_status', '$this->father_age', '$this->father_occupation', '$this->father_annual_income', '$this->mother_name', '$this->mother_pid', '$this->mother_status', '$this->mother_age', '$this->mother_occupation', '$this->mother_annual_income', '$this->marriage_status', '$this->parent_name', '$this->parent_pid', '$this->parent_status', '$this->parent_age', '$this->parent_occupation', '$this->parent_annual_income', '$this->emer_contact', '$this->emer_homephone', '$this->emer_mobilephone', '$this->emer_relationship', '$this->emer_address', '$this->token_id', '$this->personal_photo', '$this->firstnameeng', '$this->lastnameeng', '$this->pid_start', '$this->pid_stop', '$this->student_status' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->created_date != "")
                  { 
                       $compl_insert     .= ", created_date";
                       $compl_insert_val .= ", " . $this->Ini->date_delim . $this->created_date . $this->Ini->date_delim1 . "";
                  } 
                  if ($this->modified_date != "")
                  { 
                       $compl_insert     .= ", modified_date";
                       $compl_insert_val .= ", " . $this->Ini->date_delim . $this->modified_date . $this->Ini->date_delim1 . "";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "student_id, faculty_id, program_id, title_id, firstname, lastname, gender, student_pid, student_dob, race_id, nationality_id, religion_id, blood_group_id, school_id, school_address, school_district, school_province, school_year_grad, school_gpa, addr_address, addr_tambon, addr_district, addr_province, addr_postcode, addr_homephone, addr_mobilephone, addr_email, cont_address, cont_tambon, cont_district, cont_province, cont_postcode, cont_homephone, cont_mobilephone, cont_email, father_name, father_pid, father_status, father_age, father_occupation, father_annual_income, mother_name, mother_pid, mother_status, mother_age, mother_occupation, mother_annual_income, marriage_status, parent_name, parent_pid, parent_status, parent_age, parent_occupation, parent_annual_income, emer_contact, emer_homephone, emer_mobilephone, emer_relationship, emer_address, token_id, personal_photo, firstnameEng, lastnameEng, pid_start, pid_stop, student_status $compl_insert) VALUES (" . $NM_seq_auto . "'$this->student_id', '$this->faculty_id', '$this->program_id', '$this->title_id', '$this->firstname', '$this->lastname', '$this->gender', '$this->student_pid', '$this->student_dob', '$this->race_id', '$this->nationality_id', '$this->religion_id', '$this->blood_group_id', '$this->school_id', '$this->school_address', '$this->school_district', '$this->school_province', '$this->school_year_grad', '$this->school_gpa', '$this->addr_address', '$this->addr_tambon', '$this->addr_district', '$this->addr_province', '$this->addr_postcode', '$this->addr_homephone', '$this->addr_mobilephone', '$this->addr_email', '$this->cont_address', '$this->cont_tambon', '$this->cont_district', '$this->cont_province', '$this->cont_postcode', '$this->cont_homephone', '$this->cont_mobilephone', '$this->cont_email', '$this->father_name', '$this->father_pid', '$this->father_status', '$this->father_age', '$this->father_occupation', '$this->father_annual_income', '$this->mother_name', '$this->mother_pid', '$this->mother_status', '$this->mother_age', '$this->mother_occupation', '$this->mother_annual_income', '$this->marriage_status', '$this->parent_name', '$this->parent_pid', '$this->parent_status', '$this->parent_age', '$this->parent_occupation', '$this->parent_annual_income', '$this->emer_contact', '$this->emer_homephone', '$this->emer_mobilephone', '$this->emer_relationship', '$this->emer_address', '$this->token_id', '', '$this->firstnameeng', '$this->lastnameeng', '$this->pid_start', '$this->pid_stop', '$this->student_status' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->created_date != "")
                  { 
                       $compl_insert     .= ", created_date";
                       $compl_insert_val .= ", " . $this->Ini->date_delim . $this->created_date . $this->Ini->date_delim1 . "";
                  } 
                  if ($this->modified_date != "")
                  { 
                       $compl_insert     .= ", modified_date";
                       $compl_insert_val .= ", " . $this->Ini->date_delim . $this->modified_date . $this->Ini->date_delim1 . "";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "student_id, faculty_id, program_id, title_id, firstname, lastname, gender, student_pid, student_dob, race_id, nationality_id, religion_id, blood_group_id, school_id, school_address, school_district, school_province, school_year_grad, school_gpa, addr_address, addr_tambon, addr_district, addr_province, addr_postcode, addr_homephone, addr_mobilephone, addr_email, cont_address, cont_tambon, cont_district, cont_province, cont_postcode, cont_homephone, cont_mobilephone, cont_email, father_name, father_pid, father_status, father_age, father_occupation, father_annual_income, mother_name, mother_pid, mother_status, mother_age, mother_occupation, mother_annual_income, marriage_status, parent_name, parent_pid, parent_status, parent_age, parent_occupation, parent_annual_income, emer_contact, emer_homephone, emer_mobilephone, emer_relationship, emer_address, token_id, personal_photo, firstnameEng, lastnameEng, pid_start, pid_stop, student_status $compl_insert) VALUES (" . $NM_seq_auto . "'$this->student_id', '$this->faculty_id', '$this->program_id', '$this->title_id', '$this->firstname', '$this->lastname', '$this->gender', '$this->student_pid', '$this->student_dob', '$this->race_id', '$this->nationality_id', '$this->religion_id', '$this->blood_group_id', '$this->school_id', '$this->school_address', '$this->school_district', '$this->school_province', '$this->school_year_grad', '$this->school_gpa', '$this->addr_address', '$this->addr_tambon', '$this->addr_district', '$this->addr_province', '$this->addr_postcode', '$this->addr_homephone', '$this->addr_mobilephone', '$this->addr_email', '$this->cont_address', '$this->cont_tambon', '$this->cont_district', '$this->cont_province', '$this->cont_postcode', '$this->cont_homephone', '$this->cont_mobilephone', '$this->cont_email', '$this->father_name', '$this->father_pid', '$this->father_status', '$this->father_age', '$this->father_occupation', '$this->father_annual_income', '$this->mother_name', '$this->mother_pid', '$this->mother_status', '$this->mother_age', '$this->mother_occupation', '$this->mother_annual_income', '$this->marriage_status', '$this->parent_name', '$this->parent_pid', '$this->parent_status', '$this->parent_age', '$this->parent_occupation', '$this->parent_annual_income', '$this->emer_contact', '$this->emer_homephone', '$this->emer_mobilephone', '$this->emer_relationship', '$this->emer_address', '$this->token_id', '', '$this->firstnameeng', '$this->lastnameeng', '$this->pid_start', '$this->pid_stop', '$this->student_status' $compl_insert_val)"; 
              }
              else
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->created_date != "")
                  { 
                       $compl_insert     .= ", created_date";
                       $compl_insert_val .= ", " . $this->Ini->date_delim . $this->created_date . $this->Ini->date_delim1 . "";
                  } 
                  if ($this->modified_date != "")
                  { 
                       $compl_insert     .= ", modified_date";
                       $compl_insert_val .= ", " . $this->Ini->date_delim . $this->modified_date . $this->Ini->date_delim1 . "";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "student_id, faculty_id, program_id, title_id, firstname, lastname, gender, student_pid, student_dob, race_id, nationality_id, religion_id, blood_group_id, school_id, school_address, school_district, school_province, school_year_grad, school_gpa, addr_address, addr_tambon, addr_district, addr_province, addr_postcode, addr_homephone, addr_mobilephone, addr_email, cont_address, cont_tambon, cont_district, cont_province, cont_postcode, cont_homephone, cont_mobilephone, cont_email, father_name, father_pid, father_status, father_age, father_occupation, father_annual_income, mother_name, mother_pid, mother_status, mother_age, mother_occupation, mother_annual_income, marriage_status, parent_name, parent_pid, parent_status, parent_age, parent_occupation, parent_annual_income, emer_contact, emer_homephone, emer_mobilephone, emer_relationship, emer_address, token_id, personal_photo, firstnameEng, lastnameEng, pid_start, pid_stop, student_status $compl_insert) VALUES (" . $NM_seq_auto . "'$this->student_id', '$this->faculty_id', '$this->program_id', '$this->title_id', '$this->firstname', '$this->lastname', '$this->gender', '$this->student_pid', '$this->student_dob', '$this->race_id', '$this->nationality_id', '$this->religion_id', '$this->blood_group_id', '$this->school_id', '$this->school_address', '$this->school_district', '$this->school_province', '$this->school_year_grad', '$this->school_gpa', '$this->addr_address', '$this->addr_tambon', '$this->addr_district', '$this->addr_province', '$this->addr_postcode', '$this->addr_homephone', '$this->addr_mobilephone', '$this->addr_email', '$this->cont_address', '$this->cont_tambon', '$this->cont_district', '$this->cont_province', '$this->cont_postcode', '$this->cont_homephone', '$this->cont_mobilephone', '$this->cont_email', '$this->father_name', '$this->father_pid', '$this->father_status', '$this->father_age', '$this->father_occupation', '$this->father_annual_income', '$this->mother_name', '$this->mother_pid', '$this->mother_status', '$this->mother_age', '$this->mother_occupation', '$this->mother_annual_income', '$this->marriage_status', '$this->parent_name', '$this->parent_pid', '$this->parent_status', '$this->parent_age', '$this->parent_occupation', '$this->parent_annual_income', '$this->emer_contact', '$this->emer_homephone', '$this->emer_mobilephone', '$this->emer_relationship', '$this->emer_address', '$this->token_id', '$this->personal_photo', '$this->firstnameeng', '$this->lastnameeng', '$this->pid_start', '$this->pid_stop', '$this->student_status' $compl_insert_val)"; 
              }
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg(), true); 
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                      { 
                          $this->sc_erro_insert = $this->Db->ErrorMsg();  
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_student_registration_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase)) 
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select @@identity"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_student_registration_pack_ajax_response();
                      }
                      exit; 
                  } 
                  $this->id =  $rsy->fields[0];
                 $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_id()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select CURRVAL('')"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select gen_id(, 0) from " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_rowid()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  if (trim($this->personal_photo ) != "") 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ",  personal_photo , $this->personal_photo,  \"id = $this->id\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "personal_photo", $this->personal_photo,  "id = $this->id"); 
                      if ($rs === false)  
                      { 
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_student_registration_pack_ajax_response();
                          }
                          exit; 
                      }  
                  }  
              }  
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->sc_insert_on = true; 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->id = substr($this->Db->qstr($this->id), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id = $this->id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id = $this->id "); 
              }  
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_student_registration_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total']);
              }

              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['parms'] = "id?#?$this->id?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->id = substr($this->Db->qstr($this->id), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter'] . ")";
          }
      }
//------------ 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] == "R")
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['iframe_evento'] == "insert") 
          { 
               $this->nmgp_opcao = "novo"; 
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['select'] = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['iframe_evento'] = $this->sc_evento; 
      } 
      if (!isset($this->nmgp_opcao) || empty($this->nmgp_opcao)) 
      { 
          if (empty($this->id)) 
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
          else 
          { 
              $this->nmgp_opcao = "igual"; 
          } 
      } 
      if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->nmgp_opcao != "nada" && (trim($this->id) == "")) 
      { 
          if ($this->nmgp_opcao == "avanca")  
          { 
              $this->nmgp_opcao = "final"; 
          } 
          elseif ($this->nmgp_opcao != "novo")
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] == "F" && $this->sc_evento == "insert")
      {
          $this->nmgp_opcao = "final";
      }
      $sc_where = trim("");
      if (substr(strtolower($sc_where), 0, 5) == "where")
      {
          $sc_where  = substr($sc_where , 5);
      }
      if (!empty($sc_where))
      {
          $sc_where = " where " . $sc_where . " ";
      }
      if ('' != $sc_where_filter)
      {
          $sc_where = ('' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total']))
      { 
          $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rt = $this->Db->Execute($nmgp_select) ; 
          if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          $qt_geral_reg_form_student_registration = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total'] = $qt_geral_reg_form_student_registration;
          $rt->Close(); 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->id))
          {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $Key_Where = "id < $this->id "; 
              }  
              else  
              {
                  $Key_Where = "id < $this->id "; 
              }
              $Where_Start = (empty($sc_where)) ? " where " . $Key_Where :  $sc_where . " and (" . $Key_Where . ")";
              $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $Where_Start; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] = $rt->fields[0];
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_student_registration = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total'];
      } 
      if ($this->nmgp_opcao == "inicio") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start']++; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] > $qt_geral_reg_form_student_registration)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] = $qt_geral_reg_form_student_registration; 
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start']--; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] = $qt_geral_reg_form_student_registration; 
      } 
      if ($this->nmgp_opcao == "navpage" && ($this->nmgp_ordem - 1) <= $qt_geral_reg_form_student_registration) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] = $this->nmgp_ordem - 1; 
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] = 0;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] + 1;
      $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] + 1; 
      $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_qtd']; 
      $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total'] + 1; 
      $this->NM_gera_nav_page(); 
      $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT id, str_replace (convert(char(10),created_date,102), '.', '-') + ' ' + convert(char(8),created_date,20), str_replace (convert(char(10),modified_date,102), '.', '-') + ' ' + convert(char(8),modified_date,20), student_id, faculty_id, program_id, title_id, firstname, lastname, gender, student_pid, student_dob, race_id, nationality_id, religion_id, blood_group_id, school_id, school_address, school_district, school_province, school_year_grad, school_gpa, addr_address, addr_tambon, addr_district, addr_province, addr_postcode, addr_homephone, addr_mobilephone, addr_email, cont_address, cont_tambon, cont_district, cont_province, cont_postcode, cont_homephone, cont_mobilephone, cont_email, father_name, father_pid, father_status, father_age, father_occupation, father_annual_income, mother_name, mother_pid, mother_status, mother_age, mother_occupation, mother_annual_income, marriage_status, parent_name, parent_pid, parent_status, parent_age, parent_occupation, parent_annual_income, emer_contact, emer_homephone, emer_mobilephone, emer_relationship, emer_address, token_id, personal_photo, firstnameEng, lastnameEng, pid_start, pid_stop, student_status from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT id, created_date, modified_date, student_id, faculty_id, program_id, title_id, firstname, lastname, gender, student_pid, student_dob, race_id, nationality_id, religion_id, blood_group_id, school_id, school_address, school_district, school_province, school_year_grad, school_gpa, addr_address, addr_tambon, addr_district, addr_province, addr_postcode, addr_homephone, addr_mobilephone, addr_email, cont_address, cont_tambon, cont_district, cont_province, cont_postcode, cont_homephone, cont_mobilephone, cont_email, father_name, father_pid, father_status, father_age, father_occupation, father_annual_income, mother_name, mother_pid, mother_status, mother_age, mother_occupation, mother_annual_income, marriage_status, parent_name, parent_pid, parent_status, parent_age, parent_occupation, parent_annual_income, emer_contact, emer_homephone, emer_mobilephone, emer_relationship, emer_address, token_id, personal_photo, firstnameEng, lastnameEng, pid_start, pid_stop, student_status from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "id = $this->id"; 
              }  
              else  
              {
                  $aWhere[] = "id = $this->id"; 
              }  
              if (!empty($sc_where_filter))  
              {
                  $teste_select = $nmgp_select . $this->returnWhere($aWhere);
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $teste_select; 
                  $rs = $this->Db->Execute($teste_select); 
                  if ($rs->EOF)
                  {
                     $aWhere = array($sc_where_filter);
                  }  
                  $rs->Close(); 
              }  
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "id";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start']) ;  
              } 
          } 
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF) 
          { 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['empty_filter'] = true;
                  return; 
              }
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
              }
              $this->nmgp_opcao = "novo"; 
              $this->nm_flag_saida_novo = "S"; 
              $rs->Close(); 
              if ($this->aba_iframe)
              {
                  $this->NM_ajax_info['buttonDisplay']['exit'] = $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd_extr']); 
              $this->nmgp_opcao = "novo"; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->id = $rs->fields[0] ; 
              $this->nmgp_dados_select['id'] = $this->id;
              $this->created_date = $rs->fields[1] ; 
              if (substr($this->created_date, 10, 1) == "-") 
              { 
                 $this->created_date = substr($this->created_date, 0, 10) . " " . substr($this->created_date, 11);
              } 
              if (substr($this->created_date, 13, 1) == ".") 
              { 
                 $this->created_date = substr($this->created_date, 0, 13) . ":" . substr($this->created_date, 14, 2) . ":" . substr($this->created_date, 17);
              } 
              $this->nmgp_dados_select['created_date'] = $this->created_date;
              $this->modified_date = $rs->fields[2] ; 
              if (substr($this->modified_date, 10, 1) == "-") 
              { 
                 $this->modified_date = substr($this->modified_date, 0, 10) . " " . substr($this->modified_date, 11);
              } 
              if (substr($this->modified_date, 13, 1) == ".") 
              { 
                 $this->modified_date = substr($this->modified_date, 0, 13) . ":" . substr($this->modified_date, 14, 2) . ":" . substr($this->modified_date, 17);
              } 
              $this->nmgp_dados_select['modified_date'] = $this->modified_date;
              $this->student_id = $rs->fields[3] ; 
              $this->nmgp_dados_select['student_id'] = $this->student_id;
              $this->faculty_id = $rs->fields[4] ; 
              $this->nmgp_dados_select['faculty_id'] = $this->faculty_id;
              $this->program_id = $rs->fields[5] ; 
              $this->nmgp_dados_select['program_id'] = $this->program_id;
              $this->title_id = $rs->fields[6] ; 
              $this->nmgp_dados_select['title_id'] = $this->title_id;
              $this->firstname = $rs->fields[7] ; 
              $this->nmgp_dados_select['firstname'] = $this->firstname;
              $this->lastname = $rs->fields[8] ; 
              $this->nmgp_dados_select['lastname'] = $this->lastname;
              $this->gender = $rs->fields[9] ; 
              $this->nmgp_dados_select['gender'] = $this->gender;
              $this->student_pid = $rs->fields[10] ; 
              $this->nmgp_dados_select['student_pid'] = $this->student_pid;
              $this->student_dob = $rs->fields[11] ; 
              $this->nmgp_dados_select['student_dob'] = $this->student_dob;
              $this->race_id = $rs->fields[12] ; 
              $this->nmgp_dados_select['race_id'] = $this->race_id;
              $this->nationality_id = $rs->fields[13] ; 
              $this->nmgp_dados_select['nationality_id'] = $this->nationality_id;
              $this->religion_id = $rs->fields[14] ; 
              $this->nmgp_dados_select['religion_id'] = $this->religion_id;
              $this->blood_group_id = $rs->fields[15] ; 
              $this->nmgp_dados_select['blood_group_id'] = $this->blood_group_id;
              $this->school_id = $rs->fields[16] ; 
              $this->nmgp_dados_select['school_id'] = $this->school_id;
              $this->school_address = $rs->fields[17] ; 
              $this->nmgp_dados_select['school_address'] = $this->school_address;
              $this->school_district = $rs->fields[18] ; 
              $this->nmgp_dados_select['school_district'] = $this->school_district;
              $this->school_province = $rs->fields[19] ; 
              $this->nmgp_dados_select['school_province'] = $this->school_province;
              $this->school_year_grad = $rs->fields[20] ; 
              $this->nmgp_dados_select['school_year_grad'] = $this->school_year_grad;
              $this->school_gpa = $rs->fields[21] ; 
              $this->nmgp_dados_select['school_gpa'] = $this->school_gpa;
              $this->addr_address = $rs->fields[22] ; 
              $this->nmgp_dados_select['addr_address'] = $this->addr_address;
              $this->addr_tambon = $rs->fields[23] ; 
              $this->nmgp_dados_select['addr_tambon'] = $this->addr_tambon;
              $this->addr_district = $rs->fields[24] ; 
              $this->nmgp_dados_select['addr_district'] = $this->addr_district;
              $this->addr_province = $rs->fields[25] ; 
              $this->nmgp_dados_select['addr_province'] = $this->addr_province;
              $this->addr_postcode = $rs->fields[26] ; 
              $this->nmgp_dados_select['addr_postcode'] = $this->addr_postcode;
              $this->addr_homephone = $rs->fields[27] ; 
              $this->nmgp_dados_select['addr_homephone'] = $this->addr_homephone;
              $this->addr_mobilephone = $rs->fields[28] ; 
              $this->nmgp_dados_select['addr_mobilephone'] = $this->addr_mobilephone;
              $this->addr_email = $rs->fields[29] ; 
              $this->nmgp_dados_select['addr_email'] = $this->addr_email;
              $this->cont_address = $rs->fields[30] ; 
              $this->nmgp_dados_select['cont_address'] = $this->cont_address;
              $this->cont_tambon = $rs->fields[31] ; 
              $this->nmgp_dados_select['cont_tambon'] = $this->cont_tambon;
              $this->cont_district = $rs->fields[32] ; 
              $this->nmgp_dados_select['cont_district'] = $this->cont_district;
              $this->cont_province = $rs->fields[33] ; 
              $this->nmgp_dados_select['cont_province'] = $this->cont_province;
              $this->cont_postcode = $rs->fields[34] ; 
              $this->nmgp_dados_select['cont_postcode'] = $this->cont_postcode;
              $this->cont_homephone = $rs->fields[35] ; 
              $this->nmgp_dados_select['cont_homephone'] = $this->cont_homephone;
              $this->cont_mobilephone = $rs->fields[36] ; 
              $this->nmgp_dados_select['cont_mobilephone'] = $this->cont_mobilephone;
              $this->cont_email = $rs->fields[37] ; 
              $this->nmgp_dados_select['cont_email'] = $this->cont_email;
              $this->father_name = $rs->fields[38] ; 
              $this->nmgp_dados_select['father_name'] = $this->father_name;
              $this->father_pid = $rs->fields[39] ; 
              $this->nmgp_dados_select['father_pid'] = $this->father_pid;
              $this->father_status = $rs->fields[40] ; 
              $this->nmgp_dados_select['father_status'] = $this->father_status;
              $this->father_age = $rs->fields[41] ; 
              $this->nmgp_dados_select['father_age'] = $this->father_age;
              $this->father_occupation = $rs->fields[42] ; 
              $this->nmgp_dados_select['father_occupation'] = $this->father_occupation;
              $this->father_annual_income = $rs->fields[43] ; 
              $this->nmgp_dados_select['father_annual_income'] = $this->father_annual_income;
              $this->mother_name = $rs->fields[44] ; 
              $this->nmgp_dados_select['mother_name'] = $this->mother_name;
              $this->mother_pid = $rs->fields[45] ; 
              $this->nmgp_dados_select['mother_pid'] = $this->mother_pid;
              $this->mother_status = $rs->fields[46] ; 
              $this->nmgp_dados_select['mother_status'] = $this->mother_status;
              $this->mother_age = $rs->fields[47] ; 
              $this->nmgp_dados_select['mother_age'] = $this->mother_age;
              $this->mother_occupation = $rs->fields[48] ; 
              $this->nmgp_dados_select['mother_occupation'] = $this->mother_occupation;
              $this->mother_annual_income = $rs->fields[49] ; 
              $this->nmgp_dados_select['mother_annual_income'] = $this->mother_annual_income;
              $this->marriage_status = $rs->fields[50] ; 
              $this->nmgp_dados_select['marriage_status'] = $this->marriage_status;
              $this->parent_name = $rs->fields[51] ; 
              $this->nmgp_dados_select['parent_name'] = $this->parent_name;
              $this->parent_pid = $rs->fields[52] ; 
              $this->nmgp_dados_select['parent_pid'] = $this->parent_pid;
              $this->parent_status = $rs->fields[53] ; 
              $this->nmgp_dados_select['parent_status'] = $this->parent_status;
              $this->parent_age = $rs->fields[54] ; 
              $this->nmgp_dados_select['parent_age'] = $this->parent_age;
              $this->parent_occupation = $rs->fields[55] ; 
              $this->nmgp_dados_select['parent_occupation'] = $this->parent_occupation;
              $this->parent_annual_income = $rs->fields[56] ; 
              $this->nmgp_dados_select['parent_annual_income'] = $this->parent_annual_income;
              $this->emer_contact = $rs->fields[57] ; 
              $this->nmgp_dados_select['emer_contact'] = $this->emer_contact;
              $this->emer_homephone = $rs->fields[58] ; 
              $this->nmgp_dados_select['emer_homephone'] = $this->emer_homephone;
              $this->emer_mobilephone = $rs->fields[59] ; 
              $this->nmgp_dados_select['emer_mobilephone'] = $this->emer_mobilephone;
              $this->emer_relationship = $rs->fields[60] ; 
              $this->nmgp_dados_select['emer_relationship'] = $this->emer_relationship;
              $this->emer_address = $rs->fields[61] ; 
              $this->nmgp_dados_select['emer_address'] = $this->emer_address;
              $this->token_id = $rs->fields[62] ; 
              $this->nmgp_dados_select['token_id'] = $this->token_id;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $this->personal_photo = $this->Db->BlobDecode($rs->fields[63]) ; 
              } 
              else
              { 
                  $this->personal_photo = $rs->fields[63] ; 
              } 
              $this->nmgp_dados_select['personal_photo'] = $this->personal_photo;
              $this->firstnameeng = $rs->fields[64] ; 
              $this->nmgp_dados_select['firstnameeng'] = $this->firstnameeng;
              $this->lastnameeng = $rs->fields[65] ; 
              $this->nmgp_dados_select['lastnameeng'] = $this->lastnameeng;
              $this->pid_start = $rs->fields[66] ; 
              $this->nmgp_dados_select['pid_start'] = $this->pid_start;
              $this->pid_stop = $rs->fields[67] ; 
              $this->nmgp_dados_select['pid_stop'] = $this->pid_stop;
              $this->student_status = $rs->fields[68] ; 
              $this->nmgp_dados_select['student_status'] = $this->student_status;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->id = (string)$this->id; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['parms'] = "id?#?$this->id?@?";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['sub_dir'][0]  = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] < $qt_geral_reg_form_student_registration;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['opcao']   = '';
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->id = "";  
              $this->created_date = "";  
              $this->created_date_hora = "" ;  
              $this->modified_date = "";  
              $this->modified_date_hora = "" ;  
              $this->student_id = "";  
              $this->faculty_id = "";  
              $this->program_id = "";  
              $this->title_id = "";  
              $this->firstname = "";  
              $this->lastname = "";  
              $this->gender = "";  
              $this->student_pid = "";  
              $this->student_dob = "";  
              $this->race_id = "";  
              $this->nationality_id = "";  
              $this->religion_id = "";  
              $this->blood_group_id = "";  
              $this->school_id = "";  
              $this->school_address = "";  
              $this->school_district = "";  
              $this->school_province = "";  
              $this->school_year_grad = "";  
              $this->school_gpa = "";  
              $this->addr_address = "";  
              $this->addr_tambon = "";  
              $this->addr_district = "";  
              $this->addr_province = "";  
              $this->addr_postcode = "";  
              $this->addr_homephone = "";  
              $this->addr_mobilephone = "";  
              $this->addr_email = "";  
              $this->cont_address = "";  
              $this->cont_tambon = "";  
              $this->cont_district = "";  
              $this->cont_province = "";  
              $this->cont_postcode = "";  
              $this->cont_homephone = "";  
              $this->cont_mobilephone = "";  
              $this->cont_email = "";  
              $this->father_name = "";  
              $this->father_pid = "";  
              $this->father_status = "";  
              $this->father_age = "";  
              $this->father_occupation = "";  
              $this->father_annual_income = "";  
              $this->mother_name = "";  
              $this->mother_pid = "";  
              $this->mother_status = "";  
              $this->mother_age = "";  
              $this->mother_occupation = "";  
              $this->mother_annual_income = "";  
              $this->marriage_status = "";  
              $this->parent_name = "";  
              $this->parent_pid = "";  
              $this->parent_status = "";  
              $this->parent_age = "";  
              $this->parent_occupation = "";  
              $this->parent_annual_income = "";  
              $this->emer_contact = "";  
              $this->emer_homephone = "";  
              $this->emer_mobilephone = "";  
              $this->emer_relationship = "";  
              $this->emer_address = "";  
              $this->token_id = "";  
              $this->personal_photo = "";  
              $this->personal_photo_ul_name = "" ;  
              $this->personal_photo_ul_type = "" ;  
              $this->firstnameeng = "";  
              $this->lastnameeng = "";  
              $this->pid_start = "";  
              $this->pid_stop = "";  
              $this->student_status = "";  
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      if (!isset($this->nmgp_refresh_fields)) 
      { 
          $this->nm_proc_onload();
      }
  }
// 
//-- 
   function nm_db_retorna($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id) from " . $this->Ini->nm_tabela . " where id < $this->id" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id) from " . $this->Ini->nm_tabela . " where id < $this->id" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id) from " . $this->Ini->nm_tabela . " where id < $this->id" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id) from " . $this->Ini->nm_tabela . " where id < $this->id" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->id = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     else 
     { 
        $this->nmgp_opcao = "inicio";  
        $rs->Close();  
        return ; 
     } 
   } 
// 
//-- 
   function nm_db_avanca($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id) from " . $this->Ini->nm_tabela . " where id > $this->id" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id) from " . $this->Ini->nm_tabela . " where id > $this->id" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id) from " . $this->Ini->nm_tabela . " where id > $this->id" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id) from " . $this->Ini->nm_tabela . " where id > $this->id" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->id = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     else 
     { 
        $this->nmgp_opcao = "final";  
        $rs->Close();  
        return ; 
     } 
   } 
// 
//-- 
   function nm_db_inicio($str_where_param = '') 
   {   
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela; 
     $rs = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela);
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if ($rs->fields[0] == 0) 
     { 
         $this->nmgp_opcao = "novo"; 
         $this->nm_flag_saida_novo = "S"; 
         $rs->Close(); 
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return;
     }
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->id = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
// 
//-- 
   function nm_db_final($str_where_param = '') 
   { 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->id = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
   function NM_gera_nav_page() 
   {
       $this->SC_nav_page = "";
       $Arr_result        = array();
       $Ind_result        = 0;
       $Reg_Page   = 1;
       $Max_link   = 5;
       $Mid_link   = ceil($Max_link / 2);
       $Corr_link  = (($Max_link % 2) == 0) ? 0 : 1;
       $rec_tot    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total'] + 1;
       $rec_fim    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['reg_start'] + 1;
       $rec_fim    = ($rec_fim > $rec_tot) ? $rec_tot : $rec_fim;
       if ($rec_tot == 0)
       {
           return;
       }
       $Qtd_Pages  = ceil($rec_tot / $Reg_Page);
       $Page_Atu   = ceil($rec_fim / $Reg_Page);
       $Link_ini   = 1;
       if ($Page_Atu > $Max_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       elseif ($Page_Atu > $Mid_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       if (($Qtd_Pages - $Link_ini) < $Max_link)
       {
           $Link_ini = ($Qtd_Pages - $Max_link) + 1;
       }
       if ($Link_ini < 1)
       {
           $Link_ini = 1;
       }
       for ($x = 0; $x < $Max_link && $Link_ini <= $Qtd_Pages; $x++)
       {
           $rec = (($Link_ini - 1) * $Reg_Page) + 1;
           if ($Link_ini == $Page_Atu)
           {
               $Arr_result[$Ind_result] = '<span class="scFormToolbarNavOpen" style="vertical-align: middle;">' . $Link_ini . '</span>';
           }
           else
           {
               $Arr_result[$Ind_result] = '<a class="scFormToolbarNav" style="vertical-align: middle;" href="javascript: nm_navpage(' . $rec . ')">' . $Link_ini . '</a>';
           }
           $Link_ini++;
           $Ind_result++;
           if (($x + 1) < $Max_link && $Link_ini <= $Qtd_Pages && '' != $this->Ini->Str_toolbarnav_separator && @is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator))
           {
               $Arr_result[$Ind_result] = '<img src="' . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator . '" align="absmiddle" style="vertical-align: middle;">';
               $Ind_result++;
           }
       }
       if ($_SESSION['scriptcase']['reg_conf']['css_dir'] == "RTL")
       {
           krsort($Arr_result);
       }
       foreach ($Arr_result as $Ind_result => $Lin_result)
       {
           $this->SC_nav_page .= $Lin_result;
       }
   }
//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_student_registration_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        include_once("form_student_registration_form0.php");
        include_once("form_student_registration_form1.php");
        include_once("form_student_registration_form2.php");
        include_once("form_student_registration_form3.php");
        include_once("form_student_registration_form4.php");
 }

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

        function addUrlParam($url, $param, $value) {
                $urlParts  = explode('?', $url);
                $urlParams = isset($urlParts[1]) ? explode('&', $urlParts[1]) : array();
                $objParams = array();
                foreach ($urlParams as $paramInfo) {
                        $paramParts = explode('=', $paramInfo);
                        $objParams[ $paramParts[0] ] = isset($paramParts[1]) ? $paramParts[1] : '';
                }
                $objParams[$param] = $value;
                $urlParams = array();
                foreach ($objParams as $paramName => $paramValue) {
                        $urlParams[] = $paramName . '=' . $paramValue;
                }
                return $urlParts[0] . '?' . implode('&', $urlParams);
        }
 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

 function new_date_format($type, $field)
 {
     $new_date_format = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format .= $time_sep;
         }
         else
         {
             $new_date_format .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format;
     if ('DH' == $type)
     {
         $new_date_format                                      = explode(';', $new_date_format);
         $this->field_config[$field]['date_format_js']        = $new_date_format[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function Form_lookup_student_status()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "Active?#?1?#?S?@?";
       $nmgp_def_dados .= "Inactive?#?0?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_gender()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender'] = array(); 
    }
   $nm_comando = "select distinct(gender) from student_registration
where gender not like \"\"";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['Lookup_gender'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function SC_fast_search($field, $arg_search, $data_search)
   {
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_student_registration_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "student_id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "firstname", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "lastname", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "school_id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "addr_mobilephone", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "addr_email", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_student_status($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "student_status", $arg_search, $data_lookup);
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter_form'] . " and (" . $comando . ")";
      }
      else
      {
         $sc_where = " where " . $comando;
      }
      $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_student_registration = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['total'] = $qt_geral_reg_form_student_registration;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_student_registration_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_student_registration_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $nm_esp_postgres = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "id";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_esp_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
      $Nm_datas['created_date'] = "datetime";$Nm_datas['modified_date'] = "datetime";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
          if (isset($Nm_datas[$campo_join]))
          {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
             $nm_aspas  = "#";
             $nm_aspas1 = "#";
          }
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
          if (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
          elseif ($Nm_datas[$campo_join] == "time" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'hh24:mi:ss')";
          }
          elseif (substr($Nm_datas[$campo_join], 0, 4) == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          {
              $nome = "str_replace (convert(char(10)," . $nome . ",102), '.', '-') + ' ' + convert(char(8)," . $nome . ",20)";
          }
      }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_aspas . $Cmp . $nm_aspas1;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         switch (strtoupper($condicao))
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " like '" . $campo . "%'";
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." like '%" . $campo . "%'";
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." not like '%" . $campo . "%'";
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "GT":     // 
               $comando        .= " $nome > " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "GE":     // 
               $comando        .= " $nome >= " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "LT":     // 
               $comando        .= " $nome < " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "LE":     // 
               $comando        .= " $nome <= " . $nm_aspas . $campo . $nm_aspas1;
            break;
         }
   }
   function SC_lookup_student_status($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['1'] = "Active";
       $data_look['0'] = "Inactive";
       $result = array();
       foreach ($data_look as $chave => $label) 
       {
           if ($condicao == "eq" && $campo == $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
           {
               $result[] = $chave;
           }
           if ($condicao == "qp" && strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "np" && !strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "df" && $campo != $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "gt" && $label > $campo )
           {
               $result[] = $chave;
           }
           if ($condicao == "ge" && $label >= $campo)
            {
               $result[] = $chave;
           }
           if ($condicao == "lt" && $label < $campo)
           {
               $result[] = $chave;
           }
           if ($condicao == "le" && $label <= $campo)
           {
               $result[] = $chave;
           }
          
       }
       return $result;
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2)
   {
       $nmgp_saida_form = "form_student_registration_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_student_registration_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $sTarget = '_self';
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = $sTarget;
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_student_registration_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
    <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
     <INPUT type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_student_registration']['masterValue']))
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
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
}
?>
