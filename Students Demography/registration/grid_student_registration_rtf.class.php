<?php

class grid_student_registration_rtf
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $Texto_tag;
   var $Arquivo;
   var $Tit_doc;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();

   //---- 
   function __construct()
   {
      $this->nm_data   = new nm_data("en_us");
      $this->Texto_tag = "";
   }

   //---- 
   function monta_rtf()
   {
      $this->inicializa_vars();
      $this->gera_texto_tag();
      $this->grava_arquivo_rtf();
      $this->monta_html();
   }

   //----- 
   function inicializa_vars()
   {
      global $nm_lang;
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->Arquivo    = "sc_rtf";
      $this->Arquivo   .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arquivo   .= "_grid_student_registration";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "grid_student_registration.rtf";
   }

   //----- 
   function gera_texto_tag()
   {
     global $nm_lang;
      global
             $nm_nada, $nm_lang;

      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->sc_proc_grid = false; 
      $nm_raiz_img  = ""; 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_student_registration']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_student_registration']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_student_registration']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->firstname = $Busca_temp['firstname']; 
          $tmp_pos = strpos($this->firstname, "##@@");
          if ($tmp_pos !== false && !is_array($this->firstname))
          {
              $this->firstname = substr($this->firstname, 0, $tmp_pos);
          }
          $this->lastname = $Busca_temp['lastname']; 
          $tmp_pos = strpos($this->lastname, "##@@");
          if ($tmp_pos !== false && !is_array($this->lastname))
          {
              $this->lastname = substr($this->lastname, 0, $tmp_pos);
          }
          $this->gender = $Busca_temp['gender']; 
          $tmp_pos = strpos($this->gender, "##@@");
          if ($tmp_pos !== false && !is_array($this->gender))
          {
              $this->gender = substr($this->gender, 0, $tmp_pos);
          }
          $this->blood_group_id = $Busca_temp['blood_group_id']; 
          $tmp_pos = strpos($this->blood_group_id, "##@@");
          if ($tmp_pos !== false && !is_array($this->blood_group_id))
          {
              $this->blood_group_id = substr($this->blood_group_id, 0, $tmp_pos);
          }
          $this->school_id = $Busca_temp['school_id']; 
          $tmp_pos = strpos($this->school_id, "##@@");
          if ($tmp_pos !== false && !is_array($this->school_id))
          {
              $this->school_id = substr($this->school_id, 0, $tmp_pos);
          }
          $this->school_province = $Busca_temp['school_province']; 
          $tmp_pos = strpos($this->school_province, "##@@");
          if ($tmp_pos !== false && !is_array($this->school_province))
          {
              $this->school_province = substr($this->school_province, 0, $tmp_pos);
          }
          $this->cont_mobilephone = $Busca_temp['cont_mobilephone']; 
          $tmp_pos = strpos($this->cont_mobilephone, "##@@");
          if ($tmp_pos !== false && !is_array($this->cont_mobilephone))
          {
              $this->cont_mobilephone = substr($this->cont_mobilephone, 0, $tmp_pos);
          }
          $this->cont_email = $Busca_temp['cont_email']; 
          $tmp_pos = strpos($this->cont_email, "##@@");
          if ($tmp_pos !== false && !is_array($this->cont_email))
          {
              $this->cont_email = substr($this->cont_email, 0, $tmp_pos);
          }
          $this->firstnameeng = $Busca_temp['firstnameeng']; 
          $tmp_pos = strpos($this->firstnameeng, "##@@");
          if ($tmp_pos !== false && !is_array($this->firstnameeng))
          {
              $this->firstnameeng = substr($this->firstnameeng, 0, $tmp_pos);
          }
          $this->lastnameeng = $Busca_temp['lastnameeng']; 
          $tmp_pos = strpos($this->lastnameeng, "##@@");
          if ($tmp_pos !== false && !is_array($this->lastnameeng))
          {
              $this->lastnameeng = substr($this->lastnameeng, 0, $tmp_pos);
          }
      } 
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['rtf_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['rtf_name']);
      }
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT student_id, title_id, firstname, lastname, program_id, addr_mobilephone, addr_email, id, str_replace (convert(char(10),created_date,102), '.', '-') + ' ' + convert(char(8),created_date,20), str_replace (convert(char(10),modified_date,102), '.', '-') + ' ' + convert(char(8),modified_date,20), faculty_id from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT student_id, title_id, firstname, lastname, program_id, addr_mobilephone, addr_email, id, created_date, modified_date, faculty_id from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT student_id, title_id, firstname, lastname, program_id, addr_mobilephone, addr_email, id, created_date, modified_date, faculty_id from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
      $rs = $this->Db->Execute($nmgp_select);
      if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }

      $this->Texto_tag .= "<table>\r\n";
      $this->Texto_tag .= "<tr>\r\n";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['student_id'])) ? $this->New_label['student_id'] : "Student ID"; 
          if ($Cada_col == "student_id" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['title_id'])) ? $this->New_label['title_id'] : "Title"; 
          if ($Cada_col == "title_id" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['firstname'])) ? $this->New_label['firstname'] : "Firstname"; 
          if ($Cada_col == "firstname" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['lastname'])) ? $this->New_label['lastname'] : "Lastname"; 
          if ($Cada_col == "lastname" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['program_id'])) ? $this->New_label['program_id'] : "Program"; 
          if ($Cada_col == "program_id" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['addr_mobilephone'])) ? $this->New_label['addr_mobilephone'] : "Addr Mobilephone"; 
          if ($Cada_col == "addr_mobilephone" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['addr_email'])) ? $this->New_label['addr_email'] : "Addr Email"; 
          if ($Cada_col == "addr_email" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['id'])) ? $this->New_label['id'] : "Id"; 
          if ($Cada_col == "id" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['created_date'])) ? $this->New_label['created_date'] : "Created Date"; 
          if ($Cada_col == "created_date" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['modified_date'])) ? $this->New_label['modified_date'] : "Modified Date"; 
          if ($Cada_col == "modified_date" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['faculty_id'])) ? $this->New_label['faculty_id'] : "Faculty"; 
          if ($Cada_col == "faculty_id" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
      } 
      $this->Texto_tag .= "</tr>\r\n";
      while (!$rs->EOF)
      {
         $this->Texto_tag .= "<tr>\r\n";
         $this->student_id = $rs->fields[0] ;  
         $this->title_id = $rs->fields[1] ;  
         $this->firstname = $rs->fields[2] ;  
         $this->lastname = $rs->fields[3] ;  
         $this->program_id = $rs->fields[4] ;  
         $this->addr_mobilephone = $rs->fields[5] ;  
         $this->addr_email = $rs->fields[6] ;  
         $this->id = $rs->fields[7] ;  
         $this->id = (string)$this->id;
         $this->created_date = $rs->fields[8] ;  
         $this->modified_date = $rs->fields[9] ;  
         $this->faculty_id = $rs->fields[10] ;  
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['field_order'] as $Cada_col)
         { 
            if (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off")
            { 
                $NM_func_exp = "NM_export_" . $Cada_col;
                $this->$NM_func_exp();
            } 
         } 
         $this->Texto_tag .= "</tr>\r\n";
         $rs->MoveNext();
      }
      $this->Texto_tag .= "</table>\r\n";

      $rs->Close();
   }
   //----- student_id
   function NM_export_student_id()
   {
         $this->student_id = html_entity_decode($this->student_id, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->student_id = strip_tags($this->student_id);
         if (!NM_is_utf8($this->student_id))
         {
             $this->student_id = sc_convert_encoding($this->student_id, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->student_id = str_replace('<', '&lt;', $this->student_id);
         $this->student_id = str_replace('>', '&gt;', $this->student_id);
         $this->Texto_tag .= "<td>" . $this->student_id . "</td>\r\n";
   }
   //----- title_id
   function NM_export_title_id()
   {
         $this->title_id = html_entity_decode($this->title_id, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->title_id = strip_tags($this->title_id);
         if (!NM_is_utf8($this->title_id))
         {
             $this->title_id = sc_convert_encoding($this->title_id, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->title_id = str_replace('<', '&lt;', $this->title_id);
         $this->title_id = str_replace('>', '&gt;', $this->title_id);
         $this->Texto_tag .= "<td>" . $this->title_id . "</td>\r\n";
   }
   //----- firstname
   function NM_export_firstname()
   {
         $this->firstname = html_entity_decode($this->firstname, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->firstname = strip_tags($this->firstname);
         if (!NM_is_utf8($this->firstname))
         {
             $this->firstname = sc_convert_encoding($this->firstname, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->firstname = str_replace('<', '&lt;', $this->firstname);
         $this->firstname = str_replace('>', '&gt;', $this->firstname);
         $this->Texto_tag .= "<td>" . $this->firstname . "</td>\r\n";
   }
   //----- lastname
   function NM_export_lastname()
   {
         $this->lastname = html_entity_decode($this->lastname, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->lastname = strip_tags($this->lastname);
         if (!NM_is_utf8($this->lastname))
         {
             $this->lastname = sc_convert_encoding($this->lastname, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->lastname = str_replace('<', '&lt;', $this->lastname);
         $this->lastname = str_replace('>', '&gt;', $this->lastname);
         $this->Texto_tag .= "<td>" . $this->lastname . "</td>\r\n";
   }
   //----- program_id
   function NM_export_program_id()
   {
         $this->program_id = html_entity_decode($this->program_id, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->program_id = strip_tags($this->program_id);
         if (!NM_is_utf8($this->program_id))
         {
             $this->program_id = sc_convert_encoding($this->program_id, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->program_id = str_replace('<', '&lt;', $this->program_id);
         $this->program_id = str_replace('>', '&gt;', $this->program_id);
         $this->Texto_tag .= "<td>" . $this->program_id . "</td>\r\n";
   }
   //----- addr_mobilephone
   function NM_export_addr_mobilephone()
   {
         $this->addr_mobilephone = html_entity_decode($this->addr_mobilephone, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->addr_mobilephone = strip_tags($this->addr_mobilephone);
         if (!NM_is_utf8($this->addr_mobilephone))
         {
             $this->addr_mobilephone = sc_convert_encoding($this->addr_mobilephone, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->addr_mobilephone = str_replace('<', '&lt;', $this->addr_mobilephone);
         $this->addr_mobilephone = str_replace('>', '&gt;', $this->addr_mobilephone);
         $this->Texto_tag .= "<td>" . $this->addr_mobilephone . "</td>\r\n";
   }
   //----- addr_email
   function NM_export_addr_email()
   {
         $this->addr_email = html_entity_decode($this->addr_email, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->addr_email = strip_tags($this->addr_email);
         if (!NM_is_utf8($this->addr_email))
         {
             $this->addr_email = sc_convert_encoding($this->addr_email, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->addr_email = str_replace('<', '&lt;', $this->addr_email);
         $this->addr_email = str_replace('>', '&gt;', $this->addr_email);
         $this->Texto_tag .= "<td>" . $this->addr_email . "</td>\r\n";
   }
   //----- id
   function NM_export_id()
   {
         nmgp_Form_Num_Val($this->id, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->id))
         {
             $this->id = sc_convert_encoding($this->id, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->id = str_replace('<', '&lt;', $this->id);
         $this->id = str_replace('>', '&gt;', $this->id);
         $this->Texto_tag .= "<td>" . $this->id . "</td>\r\n";
   }
   //----- created_date
   function NM_export_created_date()
   {
         if (substr($this->created_date, 10, 1) == "-") 
         { 
             $this->created_date = substr($this->created_date, 0, 10) . " " . substr($this->created_date, 11);
         } 
         if (substr($this->created_date, 13, 1) == ".") 
         { 
            $this->created_date = substr($this->created_date, 0, 13) . ":" . substr($this->created_date, 14, 2) . ":" . substr($this->created_date, 17);
         } 
         $conteudo_x =  $this->created_date;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
         if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
         { 
             $this->nm_data->SetaData($this->created_date, "YYYY-MM-DD HH:II:SS  ");
             $this->created_date = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
         } 
         if (!NM_is_utf8($this->created_date))
         {
             $this->created_date = sc_convert_encoding($this->created_date, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->created_date = str_replace('<', '&lt;', $this->created_date);
         $this->created_date = str_replace('>', '&gt;', $this->created_date);
         $this->Texto_tag .= "<td>" . $this->created_date . "</td>\r\n";
   }
   //----- modified_date
   function NM_export_modified_date()
   {
         if (substr($this->modified_date, 10, 1) == "-") 
         { 
             $this->modified_date = substr($this->modified_date, 0, 10) . " " . substr($this->modified_date, 11);
         } 
         if (substr($this->modified_date, 13, 1) == ".") 
         { 
            $this->modified_date = substr($this->modified_date, 0, 13) . ":" . substr($this->modified_date, 14, 2) . ":" . substr($this->modified_date, 17);
         } 
         $conteudo_x =  $this->modified_date;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
         if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
         { 
             $this->nm_data->SetaData($this->modified_date, "YYYY-MM-DD HH:II:SS  ");
             $this->modified_date = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
         } 
         if (!NM_is_utf8($this->modified_date))
         {
             $this->modified_date = sc_convert_encoding($this->modified_date, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->modified_date = str_replace('<', '&lt;', $this->modified_date);
         $this->modified_date = str_replace('>', '&gt;', $this->modified_date);
         $this->Texto_tag .= "<td>" . $this->modified_date . "</td>\r\n";
   }
   //----- faculty_id
   function NM_export_faculty_id()
   {
         $this->faculty_id = html_entity_decode($this->faculty_id, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->faculty_id = strip_tags($this->faculty_id);
         if (!NM_is_utf8($this->faculty_id))
         {
             $this->faculty_id = sc_convert_encoding($this->faculty_id, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->faculty_id = str_replace('<', '&lt;', $this->faculty_id);
         $this->faculty_id = str_replace('>', '&gt;', $this->faculty_id);
         $this->Texto_tag .= "<td>" . $this->faculty_id . "</td>\r\n";
   }

   //----- 
   function grava_arquivo_rtf()
   {
      global $nm_lang, $doc_wrap;
      $rtf_f = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo, "w");
      require_once($this->Ini->path_third      . "/rtf_new/document_generator/cl_xml2driver.php"); 
      $text_ok  =  "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\r\n"; 
      $text_ok .=  "<DOC config_file=\"" . $this->Ini->path_third . "/rtf_new/doc_config.inc\" >\r\n"; 
      $text_ok .=  $this->Texto_tag; 
      $text_ok .=  "</DOC>\r\n"; 
      $xml = new nDOCGEN($text_ok,"RTF"); 
      fwrite($rtf_f, $xml->get_result_file());
      fclose($rtf_f);
   }

   function nm_conv_data_db($dt_in, $form_in, $form_out)
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
       nm_conv_form_data($dt_out, $form_in, $form_out);
       return $dt_out;
   }
   //---- 
   function monta_html()
   {
      global $nm_url_saida, $nm_lang;
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_student_registration'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_titl'] ?> - student_registration :: RTF</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
}
?>
  <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
  <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
  <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
  <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
  <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">RTF</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . "/" . $this->Arquivo ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_student_registration_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_student_registration"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="volta_grid"> 
</FORM> 
</BODY>
</HTML>
<?php
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
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
              if ($cont2 >= $tam_campo)
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
}

?>
