<?php
/* Classification   : CCMS
Title#            : Registeration number and date plus registeration fees added
Zendesk#          : 3789 (https://jsspcms.zendesk.com/agent/tickets/3789)
comment          
05.10.2020        : Mohammad Fekrat line 143 till line 168 added 
05.10.2020        : Mohammad Fekrat line 228 till line 254 added 
05.10.2020        : Mohammad Fekrat line 300 till line 309 added 
05.10.2020        : Mohammad Fekrat  line 345 till line 374 added 
*/ 
/* Classification   : CCMS
Title#            : adding another dependent drop-down to court-decision 
Zendesk#          : 4007 (https://jsspcms.zendesk.com/agent/tickets/4007)
comment           : in line 1046 court decision class added 
26.10.2020        : Mohammad Fekrat line 1051 till line 1063 added 
26.10.2020        : Mohammad Fekrat line 1263 till line 1275 added 
26.10.2020        : Mohammad Fekrat line 1547 till line 1556 added 
*/ 
/* Classification   : CCMS
Title#            : ٔTo add the 
‘Received Date to the Huqooq Department:’ , 
‘Issuance Date from Huqooq Department:’
 ‘Sender:’ 
and 
‘Receiver:’ and 'Type:'  options under Civil CMS while adding and editing a new case under state cases.
 
Zendesk#          : 3884 (https://jsspcms.zendesk.com/agent/tickets/3884)
comment          
10.10.2020        : Sultan Ali-line 76 to 109 added 

*/ 

?>
<?php
$ftitle = "";
if($dtype == "2")
{
   $ftitle = lang('gcase_add');
}
else
{
   $ftitle = lang('case_add'); 
}
?>
<fieldset><legend class="head"><img src="<?=base_url()?>images/caseFOLDER.png"/>&nbsp;<?=$ftitle?></legend> 
<?php
 if($this->session->flashdata('msg'))
 {  
   echo "<div>".$this->session->flashdata('msg')."</div>";
 }
?>
<?php
//Change the css classes to suit your needs   
$attributes = array('id' => 'case_form','name'=>'case_form');
echo form_open('case/home/addcase/'.$dtype, $attributes); 
echo "<input type=\"hidden\" name=\"timestamp\" id=\"timestamp\" value=\"".strtotime(date('Y-m-d H:i:s'))."\"  />";
?>
<table cellpadding="0" cellspacing="0" width="100%" class="table">
    
    <tr>
    <td class="tdstyle txtlabel" valign="top" colspan="4" style="background-color:#cccccc;">
        
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                 <td width="30%" valign="top" class="txtlabel font14">
                     <img src="<?=base_url()?>images/case_list.png" style="position:relative; top:3px"/>&nbsp;<strong><?=lang('det_agency')?>:</strong>
                     <div class="txbox_div">
                         <select name="n_ministry" id="n_ministry" class="selectbox" style="width: 250px;" onchange="javascript: ministryCode('n_ministry'); validate_all('case_form')" >
                            <?=$minisopt?>
                         </select>
                         <img id="n_ministryIMG" src="<?=base_url()?>images/validationx.PNG" width="19" height="19" style="position:relative; top:4px"/>
                     </div> 
                     <strong><?=lang('case_province')?>:</strong>
                       <div class="txbox_div">
  <!--3884----start--------added condition if dtype =Law else -------------------->
        <?php
          if ($dtype==1)
        {

        ?>
         <select name="n_province" id="n_province" class="selectbox" style="width: 250px;" onchange="javascript: get_provincedeps('<?=base_url()?>case/home/getprovinceorganization2','n_ministry','n_province','minid','prid','departmentid','&');provinceCode('n_province');validate_all('case_form');
              getDepsProvinceSenderReciver('<?=base_url()?>case/home/getDepsProvinceSenderReciver','n_province','prid','senderDiv','receiverDiv','&'); 
              ">
             <option value="" selected="selected"><?=$this->lang->line('select_province')?></option>
              <?=$province?>
          </select>
        <?php
            
        }

        else 

        {
                
        ?>
           
<select name="n_province" id="n_province" class="selectbox" style="width: 250px;" onchange="javascript: get_provincedeps('<?=base_url()?>case/home/getprovinceorganization2','n_ministry','n_province','minid','prid','departmentid','&');provinceCode('n_province');validate_all('case_form');

              getDepsProvinceSenderReciver('<?=base_url()?>case/home/getDepsProvinceSenderReciver3','n_province','prid','senderDiv3','receiverDiv3','&'); 
              ">
             <option value="" selected="selected"><?=$this->lang->line('select_province')?></option>
              <?=$province?>
          </select>

        <?php

        }

        ?>
<!--3884----end--------added condition if dtype =Law else -------------------->
                        <img id="n_provinceIMG" src="<?=base_url()?>images/validationx.PNG" width="19" height="19" style="position:relative; top:4px"/>
                      </div>     
                      <img src="<?=base_url()?>images/case_list.png" style="position:relative; top:3px"/>&nbsp;<strong><?=lang('case_department')?>:</strong>
                      <div class="txbox_div" id="departmentid">
                         <select name="n_department" id="n_department" class="selectbox" style="width: 250px;" onchange="javascript: validate_all('case_form');depCode('n_department');" >
                            <option value=""  selected="selected"><?=$this->lang->line('case_selectdep')?></option>
                            <?=$departments?>
                         </select>
                         <img id="n_departmentIMG" src="<?=base_url()?>images/validationx.PNG" width="19" height="19" style="position:relative; top:4px"/>
                     </div>
                     
                 </td>
                 <td width="30%" valign="top" class="txtlabel font14">
                 <strong><?=$this->lang->line('det_caseno')?>:</strong>
                    <div class="txbox_div">
                      <span dir="ltr">
                       <input type="text" name="mincode" id="mincode" value="<?=$ministrycode?>" style="width: 16px; background-color: #cccccc" readonly="readonly" />
                       <input type="text" name="depcode" id="depcode" value="<?=$departmentcode?>" style="width: 16px; background-color: #cccccc" readonly="readonly" />
                       <input type="text" name="prcode" id="prcode"   value="00" style="width: 16px; background-color: #cccccc" readonly="readonly" />
                       <input type="text" name="discode" id="discode"   value="00" style="width: 16px; background-color: #cccccc" readonly="readonly" />
                       <input type="text" name="yearcode" id="yearcode"   value="0000" style="width: 32px; background-color: #cccccc" readonly="readonly" />
                       <input type="text" name="d1" id="d1" value="0" style="width: 9px;" maxlength="1" />
                       <input type="text" name="d2" id="d2" value="0" style="width: 9px;" maxlength="1" />
                       <input type="text" name="d3" id="d3" value="0" style="width: 9px;" maxlength="1" />
                       <input type="text" name="d4" id="d4" value="0" style="width: 9px;" maxlength="1" />
                     </span>
                     <input type="button" name="check" id="check" value="<?=$this->lang->line('det_check')?>" class="searchButton" onclick="javascript: load_page_check('<?=base_url()?>case/home/checkCase','validdiv','0','0');" />
                     <div id="validdiv"></div>
                   </div>
                 </td>
                  <td width="20%" valign="top" class="txtlabel font14">
                 <img src="<?=base_url()?>images/employee.PNG" style="position:relative; top:3px"/><strong><?=lang('case_caseowner')?>:</strong>
                 <div class="txbox_div">
                     <?=$caseowner?>
                 </div>
                 </td>
                 <td width="20%" valign="top" class="txtlabel font14">
                 <img src="<?=base_url()?>images/attendance.PNG" style="position:relative; top:3px"/>&nbsp;<strong><?=lang('case_casedate')?>:</strong>
                 <div class="txbox_div">
                    <?=dateprovider(date('Y-m-d'),$this->mng_auth->get_language())?>
                 </div>
                 </td>
              </tr>
           </table>
    </td>
    </tr>
    <?php
    //----- law or gcase areez and marooz template -------
    echo $lawgcase_amtype;
    ?>
    <tr>
        <td class="tdstyle txtlabel"  colspan="4" style="background-color: green;color: white" align="center">
         <strong><?=lang('f_requesttype')?>:</strong>
          <select name="n_request_type" id="n_request_type" class="selectbox" style="width: 250px;" onchange="displayDivs('n_request_type');validate_all('case_form')">
               <option value=""  selected="selected"><?=$this->lang->line("f_select")?></option>
               <?=$request_type?>
            </select>
            <img id="n_request_typeIMG" src="<?=base_url()?>images/validationx.PNG" width="19" height="19" style="position:relative; top:4px"/>
        </td>     
    </tr>
    <tr>
        <td class="tdstyle txtlabel"  colspan="4">
           
            <div id="fd1" style="display: block;">
                   <table width="100%" cellpadding="0" cellspacing="0" border="0">
                      <tr>
                         <td class="tdstyle txtlabel" width="30%" valign="top">
                             <strong><?=lang('f_nontransf')?>:</strong>
                                <div class="txbox_div">
                                <input type="text" name="nontranfer" id="nontranfer" value="" class="textbox" size="24"/>
                               </div>
                               <strong><?=lang('f_price')?>:</strong>
                                <div class="txbox_div">
                                <input type="text" name="price" id="price" value="" class="textbox" size="24"/>
                               </div>
                        </td>     
                        <td class="tdstyle txtlabel" width="25%" valign="top">
                             <strong><?=lang('f_area')?>:</strong>
                                <div class="txbox_div">
                                   <textarea name="area" id="area" cols="25" rows="5"/></textarea>
                                 </div>

                        </td>
                        <td class="tdstyle txtlabel" width="25%" valign="top">
                             <strong><?=lang('f_type')?>:</strong>
                                <div class="txbox_div">
                                   <input type="text" name="type" id="type" value="" class="textbox" size="24"/> 
                               </div>
                 <?php /*  Request # 3789  (2020-10-05) (Line) - Changes start here*/ ?>
                            <?php if($dtype == "1") { ?>
                            <strong><?=lang('reg_fee')?>:</strong>
                             <div class="txbox_div">
                             <select name="reg_feesa" id="reg_feesa" style="width:230px" class="selectbox" />
                             <option value="" selected="selected"><?=$this->lang->line('det_select_rega')?></option>
                                 </select>
                                </div>
                               <strong><?=lang('per_bankrec')?>:</strong>
                               <div class="txbox_div">
                               <input type="text" name="bankreca" id="bankreca" value="" class="textbox" size="24" />
                               </div>
                               <strong><?=lang('per_bankrecdate')?>:</strong>
                               <div class="txbox_div">
                              <select id="brdaya" name="brdaya" class="selectbox" style="width:50px" >
                              <?=$b_day?>   
                               </select> /
                               <select id="brmontha" name="brmontha" class="selectbox" style="width:70px">
                               <?=$b_month?>    
                              </select>/
                              <select id="bryeara" name="bryeara" class="selectbox" style="width:60px">
                              <?=$b_year?>  
                              </select> 
                              </div>
                              <?php   } ?>
                 <?php /*  Request # 3789  (2020-10-05) (Line) - Changes end here*/ ?>
                        </td>
                        <td class="tdstyle txtlabel" width="25%">     
                       
                       <strong><?=$this->lang->line('f_location')?>:</strong> 
                           <strong><?=$this->lang->line('det_country')?>:</strong>
                            <div class="txbox_div" id="countrydiv">
                              <select name="ploc_country" id="ploc_country" style="width:190px" class="selectbox" onchange="javascript: bring_page('<?=base_url()?>case/home/provinces4','ploc_country','countrycode','pdv4','&name=plocation&w=190');" />
                                 <?=$country_opt?>
                             </select>
                           </div>
                        <div id="pdv4">   
                           <strong><?=$this->lang->line('det_province')?>:</strong>
                            <div class="txbox_div" id="pcprovincediv">
                            <select name="plocation" id="plocation" onchange="javascript: bring_page('<?=base_url()?>case/home/plocdistrictlist','plocation','provincecode','locdist','&name=plocdist&w=190');" style="width:189px" class="selectbox" />
                              <option value="" selected="selected"><?=$this->lang->line('det_select')?></option> 
                               <?=$province?> 
                            </select>
                            </div>
                            <strong><?=$this->lang->line('det_district')?>:</strong>
                            <div id="locdist">
                                <select name="plocdist" id="plocdist" style="width:190px" class="selectbox" />
                                    <option value="" selected="selected"><?=$this->lang->line('det_select')?></option> 
                                </select>
                           </div>
                           <strong><?=$this->lang->line('det_village')?>:</strong>
                            <div id="locvil">
                            <select name="plocvillage" id="plocvillage"  style="width:190px" class="selectbox" />
                                <option value=""><?=$this->lang->line('det_select')?></option> 
                            </select>
                           </div>
                      </div>
                   </td>
                   </tr>
                   </table>
            </div>
            <div id="fd2" style="display: none;">
                   <table width="100%" cellpadding="0" cellspacing="0" border="0">
                      <tr>
                         <td class="tdstyle txtlabel" width="30%" valign="top">
                             <strong><?=lang('f_transf')?>:</strong>
                                <div class="txbox_div">
                                <input type="text" name="transf" id="transf" value="" class="textbox" size="24"/>
                               </div>
                               <strong><?=lang('f_price')?>:</strong>
                                <div class="txbox_div">
                                <input type="text" name="bprice" id="bprice" value="" class="textbox" size="24"/>
                               </div>
                        </td>     
                        <td class="tdstyle txtlabel" width="25%" valign="top">
                             <strong><?=lang('f_amount')?>:</strong>
                                <div class="txbox_div">
                                   <textarea name="bquantity" id="bquantity" cols="25" rows="5"/></textarea>
                                 </div>     
                        </td>
                        <td class="tdstyle txtlabel" width="25%" valign="top">
                             <strong><?=lang('f_type')?>:</strong>
                                <div class="txbox_div">
                                   <input type="text" name="btype" id="btype" value="" class="textbox" size="24"/> 
                               </div>
                 <?php /*  Request # 3789  (2020-10-05) (Line) - Changes start here*/ ?>
                            <?php if($dtype == "1") { ?>

                             <strong><?=lang('reg_fee')?>:</strong>
                             <div class="txbox_div">
                             <select name="reg_feesb" id="reg_feesb" style="width:230px" class="selectbox" />
                             <option value="" selected="selected"><?=$this->lang->line('det_select_regb')?></option>
                                    </select>
                                </div>
                               <strong><?=lang('per_bankrec')?>:</strong>
                               <div class="txbox_div">
                               <input type="text" name="bankrecb" id="bankrecb" value="" class="textbox" size="24" />
                               </div>
                               <strong><?=lang('per_bankrecdate')?>:</strong>
                               <div class="txbox_div">
                              <select id="brdayb" name="brdayb" class="selectbox" style="width:50px" >
                              <?=$b_day?>   
                               </select> /
                               <select id="brmonthb" name="brmonthb" class="selectbox" style="width:70px">
                               <?=$b_month?>    
                              </select>/
                              <select id="bryearb" name="bryearb" class="selectbox" style="width:60px">
                              <?=$b_year?>  
                              </select> 
                              </div>
                              <?php  } ?>
                 <?php /*  Request # 3789  (2020-10-05) (Line) - Changes end here*/ ?>
                        </td>
                        <td class="tdstyle txtlabel" width="25%">     
                       
                       <strong><?=$this->lang->line('f_location')?>:</strong> 
                           <strong><?=$this->lang->line('det_country')?>:</strong>
                            <div class="txbox_div" id="countrydiv">
                              <select name="ploc_country2" id="ploc_country2" style="width:190px" class="selectbox" onchange="javascript: bring_page('<?=base_url()?>case/home/provinces5','ploc_country2','countrycode','pdv5','&name=ploc2&w=190');" />
                                 <?=$country_opt?>
                             </select>
                           </div>
                           <div id="pdv5"> 
                           <strong><?=$this->lang->line('det_province')?>:</strong>
                            <div class="txbox_div" id="pcprovincediv">
                            <select name="ploc2" id="ploc2" onchange="javascript: bring_page('<?=base_url()?>case/home/plocdistrictlist2','ploc2','provincecode','plocdiv2','&name=plocdist2&w=190');" style="width:189px" class="selectbox" />
                              <option value="" selected="selected"><?=$this->lang->line('det_select')?></option> 
                               <?=$province?> 
                            </select>
                            </div>
                            <strong><?=$this->lang->line('det_district')?>:</strong>
                            <div id="plocdiv2">
                                <select name="plocdist2" id="plocdist2" style="width:190px" class="selectbox" />
                                    <option value="" selected="selected"><?=$this->lang->line('det_select')?></option> 
                                </select>
                           </div>
                           <strong><?=$this->lang->line('det_village')?>:</strong>
                            <div id="locvil2">
                            <select name="plocvillage2" id="plocvillage2"  style="width:190px" class="selectbox" />
                                <option value=""><?=$this->lang->line('det_select')?></option> 
                            </select>
                           </div>
                       </div>
                      </td>
                      </tr>
                   </table>
            </div>

            <div id="fd3" style="display: none;">
                   <table width="100%" cellpadding="0" cellspacing="0" border="0">
                      <tr>
                         <td class="tdstyle txtlabel" width="30%" valign="top">
                             <strong><?=lang('f_disengage')?>:</strong>
                                <div class="txbox_div">
                                <input type="text" name="disengage" id="disengage" value="" class="textbox" size="24"/>
                               </div>

                 <?php /*  Request # 3789  (2020-10-05) (Line) - Changes start here*/ ?>
                                    <?php if($dtype == "1") { ?>
                            <strong><?=lang('reg_fee')?>:</strong>
                             <div class="txbox_div">
                             <select name="reg_feesc" id="reg_feesc" style="width:230px" class="selectbox" />
                             <option value="" selected="selected"><?=$this->lang->line('det_select_regc')?></option>
                                    </select>
                                </div>
                                    <?php    } ?>
                 <?php /*  Request # 3789  (2020-10-05) (Line) - Changes end here*/ ?>
                        </td>     
                        <td class="tdstyle txtlabel" width="25%" valign="top">
                             <strong><?=lang('f_divorse')?>:</strong>
                                <div class="txbox_div">
                                   <input type="text" name="divorse" id="divorse" value="" class="textbox" size="24"/>  
                                 </div>     
                        </td>
                        <td class="tdstyle txtlabel" width="25%" valign="top">
                             <strong><?=lang('f_separate')?>:</strong>
                                <div class="txbox_div">
                                   <input type="text" name="separate" id="separate" value="" class="textbox" size="24"/> 
                               </div>
                        </td>
                        <td class="tdstyle txtlabel" width="25%">     
                             <strong><?=lang('f_nafaqa')?>:</strong>
                                <div class="txbox_div">
                                   <input type="text" name="nafaqa" id="nafaqa" value="" class="textbox" size="24"/> 
                               </div>  
                             <strong><?=lang('f_hazanat')?>:</strong>
                                <div class="txbox_div">
                                   <input type="text" name="hazanat" id="hazanat" value="" class="textbox" size="24"/> 
                               </div>
                      </td>
                      </tr>
                   </table>
            </div>
            <div id="fd4" style="display: none;">
                   <table width="100%" cellpadding="0" cellspacing="0" border="0">
                      <tr>
                         <td class="tdstyle txtlabel" width="30%" valign="top">
                             <strong><?=lang('f_otherlawtype')?>:</strong>
                                <div class="txbox_div">
                                   <textarea name="other_legal_issue" id="other_legal_issue" cols="35" rows="3"/></textarea>
                                 </div>
                        </td> 
                 <?php /*  Request # 3789  (2020-10-05) (Line) - Changes start here*/ ?>
                            <?php if($dtype == "1") { ?>
                        <td class="tdstyle txtlabel" width="30%" valign="top">
                          <strong><?=lang('reg_fee')?>:</strong>
                             <div class="txbox_div">
                             <select name="reg_feesd" id="reg_feesd" style="width:230px" class="selectbox" />
                             <option value="" selected="selected"><?=$this->lang->line('det_select')?></option>
                                  <?=$registeration_fees?>            
                                    </select>
                                </div>
                                <strong><?=lang('per_bankrec')?>:</strong>
                               <div class="txbox_div">
                               <input type="text" name="bankrecd" id="bankrecd" value="" class="textbox" size="24" />
                               </div>
                               <strong><?=lang('per_bankrecdate')?>:</strong>
                               <div class="txbox_div">
                              <select id="brdayd" name="brdayd" class="selectbox" style="width:50px" >
                              <?=$b_day?>   
                               </select> /
                               <select id="brmonthd" name="brmonthd" class="selectbox" style="width:70px">
                               <?=$b_month?>    
                              </select>/
                              <select id="bryeard" name="bryeard" class="selectbox" style="width:60px">
                              <?=$b_year?>  
                              </select> 
                              </div>

                        </td>
                        <?php   } ?>
                 <?php /*  Request # 3789  (2020-10-05) (Line) - Changes end here*/ ?>
                      </tr>
                   </table>
            </div>
     
        </td>     
    </tr>
    <tr>
        <td class="tdstyle txtlabel"  colspan="4" style="background-color: green; color: white" align="center">
         <strong><?=lang('f_represent')?>:</strong>
        </td>     
    </tr>
     <tr>
        <td class="tdstyle txtlabel" valign="top">
         <strong><?=lang('gc_name2')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="repname" id="repname" value="" class="textbox" size="24"  />
           </div>  
            <strong><?=lang('gc_fname')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="fname" id="fname" value="" class="textbox" size="24" />
           </div>
         <strong><?=lang('gc_gfname')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="gfname" id="gfname" value="" class="textbox" size="24" />
           </div>  
              
        </td>     
        <td class="tdstyle txtlabel"  valign="top">
           <strong><?=lang('f_repno')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="licenseno" id="licenseno" value="" class="textbox" size="24"  />
           </div>
           <strong><?=lang('f_letterno')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="repno" id="repno" value="" class="textbox" size="24"  />
           </div>
           <strong><?=lang('f_letterdate')?>:</strong>
            <div class="txbox_div">
              <select id="repnoday" name="repnoday" class="selectbox" style="width:50px" >
                <?=$b_day?>   
               </select> /
               <select id="repnomonth" name="repnomonth" class="selectbox" style="width:70px">
                <?=$b_month?>    
               </select>/
               <select id="repnoyear" name="repnoyear" class="selectbox" style="width:60px">
                    <?=$b_year?>  
               </select>
           </div>            
        </td>
         <td class="tdstyle txtlabel" valign="top">
           <strong><?=$this->lang->line('f_address')?>:</strong>
            <strong><?=$this->lang->line('det_country')?>:</strong>
                <div class="txbox_div" id="countrydiv">
                  <select name="rep_country" id="rep_country" style="width:190px" class="selectbox" onchange="javascript: bring_page('<?=base_url()?>case/home/provinces6','rep_country','countrycode','pdv6','&name=repprovince&w=190');"/>
                     <?=$country_opt?>
                 </select>
               </div>
            <div id="pdv6">
               <strong><?=$this->lang->line('det_province')?>:</strong>
                <div class="txbox_div" id="provincediv">
                <select name="repprovince" id="repprovince" onchange="javascript: bring_page('<?=base_url()?>case/home/repdistrictslist','repprovince','provincecode','repdistdiv','&name=repdistrict&w=190');" style="width:189px" class="selectbox" />
                  <option value="" selected="selected"><?=$this->lang->line('det_select')?></option> 
                   <?=$province?> 
                </select>
                </div>
                <strong><?=$this->lang->line('det_district')?>:</strong>
                <div id="repdistdiv">
                    <select name="repdistrict" id="repdistrict" style="width:190px" class="selectbox" />
                        <option value="" selected="selected"><?=$this->lang->line('det_select')?></option> 
                    </select>
               </div>
               <strong><?=$this->lang->line('det_village')?>:</strong>
                <div id="repvildiv">
                <select name="repvillage" id="repvillage"  style="width:190px" class="selectbox" />
                    <option value=""><?=$this->lang->line('det_select')?></option> 
                </select>
               </div>
           </div>
        </td>
        <td class="tdstyle txtlabel" valign="top">
           <strong><?=lang('f_repphone')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="repphone" id="repphone" value="" class="textbox" size="24"  />
           </div>  
         </td>
    </tr>
      <tr>
        <td class="tdstyle txtlabel"  colspan="4" style="background-color: green; color: white" align="center">
         <strong><?=lang('f_represent2')?>:</strong>
        </td>     
    </tr>
     <tr>
        <td class="tdstyle txtlabel" valign="top">
         <strong><?=lang('gc_name2')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="repname2" id="repname2" value="" class="textbox" size="24"  />
           </div>  
            <strong><?=lang('gc_fname')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="fname2" id="fname2" value="" class="textbox" size="24" />
           </div>
         <strong><?=lang('gc_gfname')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="gfname2" id="gfname2" value="" class="textbox" size="24" />
           </div>  
              
        </td>     
        <td class="tdstyle txtlabel"  valign="top">
           <strong><?=lang('f_repno')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="licenseno2" id="licenseno2" value="" class="textbox" size="24"  />
           </div>
           <strong><?=lang('f_letterno')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="repno2" id="repno2" value="" class="textbox" size="24"  />
           </div>
           <strong><?=lang('f_letterdate')?>:</strong>
            <div class="txbox_div">
              <select id="repnoday2" name="repnoday2" class="selectbox" style="width:50px" >
                <?=$b_day?>   
               </select> /
               <select id="repnomonth2" name="repnomonth2" class="selectbox" style="width:70px">
                <?=$b_month?>    
               </select>/
               <select id="repnoyear2" name="repnoyear2" class="selectbox" style="width:60px">
                    <?=$b_year?>  
               </select>
           </div>           
           
        </td>
         <td class="tdstyle txtlabel" valign="top">
           <strong><?=$this->lang->line('f_address')?>:</strong>
                 <strong><?=$this->lang->line('det_country')?>:</strong>
                <div class="txbox_div" id="countrydiv">
                  <select name="rep_country2" id="rep_country2" style="width:190px" class="selectbox" onchange="javascript: bring_page('<?=base_url()?>case/home/provinces7','rep_country2','countrycode','pdv7','&name=repprovince2&w=190');" />
                     <?=$country_opt?>
                 </select>
               </div>
                <div id="pdv7"> 
               <strong><?=$this->lang->line('det_province')?>:</strong>
                <div class="txbox_div" id="provincediv">
                <select name="repprovince2" id="repprovince2" onchange="javascript: bring_page('<?=base_url()?>case/home/repdistrictslist2','repprovince2','provincecode','repdistdiv2','&name=repdistrict2&w=190');" style="width:189px" class="selectbox" />
                  <option value="" selected="selected"><?=$this->lang->line('det_select')?></option> 
                   <?=$province?> 
                </select>
                </div>
                <strong><?=$this->lang->line('det_district')?>:</strong>
                <div id="repdistdiv2">
                    <select name="repdistrict2" id="repdistrict2" style="width:190px" class="selectbox" />
                        <option value="" selected="selected"><?=$this->lang->line('det_select')?></option> 
                    </select>
               </div>
               <strong><?=$this->lang->line('det_village')?>:</strong>
                <div id="repvildiv2">
                <select name="repvillage2" id="repvillage2"  style="width:190px" class="selectbox" />
                    <option value=""><?=$this->lang->line('det_select')?></option> 
                </select>
               </div>
           </div>
        </td>
        <td class="tdstyle txtlabel" valign="top">
           <strong><?=lang('f_repphone')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="repphone2" id="repphone2" value="" class="textbox" size="24"  />
           </div>  
         </td>
    </tr>
    <tr>
        <td class="tdstyle txtlabel"  colspan="4" style="background-color: green; color: white" align="center">

         <?php
            if ($dtype==2){
        ?>
         <strong><?=lang('f_gcasesummary')?>:</strong>
        <?php
            }else {
                
        ?>
           <strong><?=lang('f_lawsummary')?>:</strong>
        <?php
            }
        ?>

        </td>     
    </tr>
    <tr>
        <td class="tdstyle txtlabel" valign="top">
        <strong><?=$this->lang->line('det_crimetype')?>:</strong>
            <div class="txbox_div">
             <select name="crimetypes[]" id="crimetypes[]" style="width:300px" class="shortenedSelect" multiple="multiple" size="12"/> 
               <option value="-1" selected="selected"><?=$this->lang->line('det_select')?></option> 
                  <?=$crime?>
              </select> 
           </div>
           <span class="fonttxt10"><?=$this->lang->line('det_keyhelp');?></span>
        </td>     
        <td class="tdstyle txtlabel"  valign="top">
         <strong><?=lang('f_datesubmit')?>:</strong>
               <div class="txbox_div">
              <select id="attday" name="attday" class="selectbox" style="width:50px" >
                <?=$b_day?>   
               </select> /
               <select id="attmonth" name="attmonth" class="selectbox" style="width:70px">
                <?=$b_month?>    
               </select>/
               <select id="attyear" name="attyear" class="selectbox" style="width:60px">
                    <?=$b_year?>  
               </select>
            </div> 
         <strong><?=lang('f_orderplace')?>:</strong>                                     
             <strong><?=$this->lang->line('det_country')?>:</strong>
                <div class="txbox_div" id="countrydiv">
                  <select name="order_country" id="order_country" style="width:190px" class="selectbox" onchange="javascript: bring_page('<?=base_url()?>case/home/provinces8','order_country','countrycode','pdv8','&name=n_province2&w=190');" />
                     <?=$country_opt?>
                 </select>
               </div>
                <div id="pdv8">   
               <strong><?=$this->lang->line('det_province')?>:</strong>
                <div class="txbox_div" id="provincediv">
                <select name="n_province2" id="n_province2" onchange="javascript: bring_page('<?=base_url()?>case/home/DistrictOrder','n_province2','provincecode','order_ds1','&name=n_district2&w=190');validate_all('case_form');" style="width:189px" class="selectbox" />
                  <option value="" selected="selected"><?=$this->lang->line('det_select')?></option> 
                   <?=$province?> 
                </select>
                <img id="n_province2IMG" src="<?=base_url()?>images/validationx.PNG" width="19" height="19" style="position:relative; top:4px"/>
                </div>
                <strong><?=$this->lang->line('det_district')?>:</strong>
                <div id="order_ds1">
                    <select name="n_district2" id="n_district2" style="width:190px" class="selectbox" />
                        <option value="" selected="selected"><?=$this->lang->line('det_select')?></option> 
                    </select>
                    <img id="n_district2IMG" src="<?=base_url()?>images/validationx.PNG" width="19" height="19" style="position:relative; top:4px"/>
               </div>
               
             </div>
             <strong><?=lang('f_address')?></strong>
            <div class="txbox_div">
            <input type="text" name="order_place" id="order_place" value="" class="textbox" size="24" />
           </div>
        </td>
        <td class="tdstyle txtlabel"  valign="top">
         <strong><?=lang('f_orderdate')?>:</strong>
            <div class="txbox_div">
              <select id="n_vdoc_day" name="n_vdoc_day" class="selectbox" style="width:50px" onchange="validate_all('case_form')" >
                <?=$rb_day?>   
               </select> 
               <img id="n_vdoc_dayIMG" src="<?=base_url()?>images/validationx.PNG" width="19" height="19" style="position:relative; top:4px"/>
               /
               <select id="n_vdoc_month" name="n_vdoc_month" class="selectbox" style="width:70px" onchange="validate_all('case_form')">
                <?=$rb_month?>    
               </select>
               <img id="n_vdoc_monthIMG" src="<?=base_url()?>images/validationx.PNG" width="19" height="19" style="position:relative; top:4px"/>
               /
               <select id="n_vdoc_year" name="n_vdoc_year" class="selectbox" style="width:60px" onchange="yearCode('n_vdoc_year');validate_all('case_form')">
                    <?=$rb_year?>  
               </select>
               <img id="n_vdoc_yearIMG" src="<?=base_url()?>images/validationx.PNG" width="19" height="19" style="position:relative; top:4px"/>                
           </div>
        </td>
        <td class="tdstyle txtlabel"  valign="top">
         <strong><?=lang('f_courtprvdec')?>:</strong>
            <div class="txbox_div">
              <textarea name="court_prdec" id="court_prdec" cols="25" rows="3"></textarea>
           </div>
        </td>
    </tr>
        <tr>
        <td class="tdstyle txtlabel" valign="top">
         <strong><?=lang('gc_sumissnumberdate')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="invite_no" id="invite_no" value="" class="textbox" size="24" />
            </div> 
            <div class="txbox_div">
              <select id="invite_day" name="invite_day" class="selectbox" style="width:50px" >
                <?=$b_day?>   
               </select> /
               <select id="invite_month" name="invite_month" class="selectbox" style="width:70px">
                <?=$b_month?>    
               </select>/
               <select id="invite_year" name="invite_year" class="selectbox" style="width:60px">
                    <?=$b_year?>  
               </select> 
           </div>
           <strong><?=lang('f_inviteplace')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="invite_place" id="invite_place" value="" class="textbox" size="24" />
           </div>
        </td>     
        <td class="tdstyle txtlabel"  valign="top">
             <strong><?=lang('gc_sumissnumberdate2')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="invite_no2" id="invite_no2" value="" class="textbox" size="24" />
            </div> 
            <div class="txbox_div">
              <select id="invite_day2" name="invite_day2" class="selectbox" style="width:50px" >
                <?=$b_day?>   
               </select> /
               <select id="invite_month2" name="invite_month2" class="selectbox" style="width:70px">
                <?=$b_month?>    
               </select>/
               <select id="invite_year2" name="invite_year2" class="selectbox" style="width:60px">
                    <?=$b_year?>  
               </select> 
           </div>
           <strong><?=lang('f_inviteplace')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="invite_place2" id="invite_place2" value="" class="textbox" size="24" />
           </div>
        </td>
        <td class="tdstyle txtlabel"  valign="top">
               <strong><?=lang('gc_sumissnumberdate3')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="invite_no3" id="invite_no3" value="" class="textbox" size="24" />
            </div> 
            <div class="txbox_div">
              <select id="invite_day3" name="invite_day3" class="selectbox" style="width:50px" >
                <?=$b_day?>   
               </select> /
               <select id="invite_month3" name="invite_month3" class="selectbox" style="width:70px">
                <?=$b_month?>    
               </select>/
               <select id="invite_year3" name="invite_year3" class="selectbox" style="width:60px">
                    <?=$b_year?>  
               </select> 
           </div>
           <strong><?=lang('f_inviteplace')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="invite_place3" id="invite_place3" value="" class="textbox" size="24" />
           </div>
        </td>
        <td class="tdstyle txtlabel"  valign="top">
         <strong><?=lang('f_placebirth')?>:</strong>
            <div class="txbox_div">
             <input type="text" name="place_birth" id="place_birth" value="" class="textbox" size="24" />
           </div>
            <strong><?=lang('f_inviterprofile')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="inviter_profile" id="inviter_profile" value="" class="textbox" size="24" />
            </div> 
            <strong><?=lang('f_inviterphone')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="inviter_phone" id="inviter_phone" value="" class="textbox" size="24" />
            </div> 
        </td>
    </tr>
    <tr>
        <td class="tdstyle txtlabel"  valign="top">
         <strong><?=lang('f_noninvite')?>:</strong>
            <div class="txbox_div">
             <!--<input type="text" name="none_invite" id="none_invite" value="" class="textbox" size="24" />  -->
             <input type="checkbox" name="none_invite" id="none_invite" value="1" class="textbox" size="24" />
           </div>
           
           <strong><?=lang('f_csavedate')?>:</strong>
           <div class="txbox_div">
               <select id="svday" name="svday" class="selectbox" style="width:50px" >
                <?=$b_day?>   
               </select> /
               <select id="svmonth" name="svmonth" class="selectbox" style="width:70px">
                <?=$b_month?>    
               </select>/
               <select id="svyear" name="svyear" class="selectbox" style="width:60px">
                    <?=$b_year?>  
               </select> 
           </div>
           
        </td>
        <td class="tdstyle txtlabel" valign="top" colspan="3">
            <strong><?=lang('f_regdate')?>:</strong>
            <div class="txbox_div">
               <select id="reg_day" name="reg_day" class="selectbox" style="width:50px" >
                <?=$b_day?>   
               </select> /
               <select id="reg_month" name="reg_month" class="selectbox" style="width:70px">
                <?=$b_month?>    
               </select>/
               <select id="reg_year" name="reg_year" class="selectbox" style="width:60px">
                    <?=$b_year?>  
               </select> 
           </div>
        </td>
        
        <!--<td class="tdstyle txtlabel" valign="top" colspan="3">
         <strong><?=lang('f_invite_letter')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="invite_letter" id="invite_letter" value="" class="textbox" size="24" />
            </div> 
        </td>-->  
    </tr>
    <tr>
        <td class="tdstyle txtlabel" valign="top">
         <strong><?=lang('f_zname')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="zname" id="zname" value="" class="textbox" size="24" />
            </div> 
        </td>   
         <td class="tdstyle txtlabel" valign="top">
         <strong><?=lang('f_zfname')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="zfname" id="zfname" value="" class="textbox" size="24" />
            </div> 
        </td>    
        <td class="tdstyle txtlabel"  valign="top">
         <strong><?=lang('f_zbplace')?>:</strong>
            <div class="txbox_div">
             <input type="text" name="zbplace" id="zbplace" value="" class="textbox" size="24" />
           </div>
        </td>
        <td class="tdstyle txtlabel" valign="top">
         <strong><?=lang('f_zcplace')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="zcplace" id="zcplace" value="" class="textbox" size="24" />
            </div> 
        </td>  
    </tr>
    <tr>
        <td class="tdstyle txtlabel" valign="top">
         <strong><?=lang('f_ztazkirano')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="ztazkirano" id="ztazkirano" value="" class="textbox" size="24" />
            </div> 
        </td>   
         <td class="tdstyle txtlabel" valign="top">
         <strong><?=lang('f_zamanatno')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="zno" id="zno" value="" class="textbox" size="24" />
            </div> 
        </td>    
        <td class="tdstyle txtlabel"  valign="top" colspan="2">
         <strong><?=lang('f_zamanatdate')?>:</strong>
            <div class="txbox_div">
              <select id="zday" name="zday" class="selectbox" style="width:50px" >
                <?=$b_day?>   
               </select> /
               <select id="zmonth" name="zmonth" class="selectbox" style="width:70px">
                <?=$b_month?>    
               </select>/
               <select id="zyear" name="zyear" class="selectbox" style="width:60px">
                    <?=$b_year?>  
               </select> 
           </div>
        </td>
    </tr>
    <tr>
        <td class="tdstyle txtlabel" valign="top">
         <strong><?=lang('f_zofficialno')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="zofficialno" id="zofficialno" value="" class="textbox" size="24" />
            </div> 
        </td>   
         <td class="tdstyle txtlabel" valign="top">
         <strong><?=lang('f_zcompanyno')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="zcompanyno" id="zcompanyno" value="" class="textbox" size="24" />
            </div> 
        </td>
        <td class="tdstyle txtlabel" valign="top">
         <strong><?=lang('f_zcompanyloc')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="zcompanyloc" id="zcompanyloc" value="" class="textbox" size="24" />
            </div> 
        </td>   
         <td class="tdstyle txtlabel" valign="top">
         <strong><?=lang('f_zphone')?>:</strong>
               <div class="txbox_div">
                <input type="text" name="zphone" id="zphone" value="" class="textbox" size="24" />
            </div> 
        </td>    
    </tr>
     <?php
     //اجراات مسلکی----
     //---- performance or implementation ---
     echo $perf;
     ?>
    <tr>
        <td class="tdstyle txtlabel" valign="top" colspan="4">
           <strong><?=lang('per_remarks')?>:</strong>
            <div class="txbox_div">
            <textarea type="text" name="per_remarks" id="per_remarks" cols="45" rows="3"/></textarea>
           </div>
        </td>
    </tr>
<?php
//if governmental cases
if($dtype == "2")
{
?>
<tr>
<td class="tdstyle txtlabel" valign="top" colspan="4">
<!--startofprimarycourt-->
<div id="condr_div" style="clear: both;">
<table cellpadding="0" cellspacing="0" width="100%" class="table">
<tr>
 <td class="tdstyle txtlabel"  style="background-color: green;color: white" align="center">
  <strong><?=$this->lang->line('gimp_title')?>:</strong>
 </td>
</tr>
<tr>
  <td class="tdstyle txtlabel">
  <input type="button" id="addmorebtn4" class="searchButton" value="<?=lang('gc_lawaddmore')?>" />
  </td>
</tr>

</table>

 <hr />
</div>
<div id="clonnedDiv4"></div> 
</div>
<!--endofprimary-->
</td>
</tr>
<tr>
<td class="tdstyle txtlabel" valign="top" colspan="4">
     <!--startofappellatecourt-->
      <div id="condr_div" style="clear: both;">
<table cellpadding="0" cellspacing="0" width="100%" class="table">
<tr>
 <td class="tdstyle txtlabel"  style="background-color: green;color: white" align="center">
  <strong><?=$this->lang->line('gimp_apptitle')?>:</strong>
 </td>
</tr>
<tr>
  <td class="tdstyle txtlabel">
  <input type="button" id="addmorebtn2" class="searchButton" value="<?=lang('gc_lawaddmore')?>" />

<div id="clonnedDiv2"></div> 
 <hr />

</td>
</tr>

<tr>
 <td class="tdstyle txtlabel"  style="background-color: green;color: white" align="center">
  <strong><?=$this->lang->line('gimp_Tajtitle')?>:</strong>
 </td>
</tr>
<tr>
  <td class="tdstyle txtlabel">
  <input type="button" id="addmorebtn5" class="searchButton" value="<?=lang('gc_lawaddmore')?>" />

<div id="clonnedDiv5"></div> 
 <hr />

</td>
</tr>

</table>
</div>
 <!--endofappellate-->
</td>
</tr>
<?php
}
//end of governmental cases
?>
    <tr>
        <td class="tdstyle" colspan="4" style="background-color:#cccccc;">
            <input type="button" class="searchButton" onclick="javascript:do_it2('case_form');" value="<?=lang('case_save')?>" />
            <input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>case/home/index/  '" value="<?=lang('case_cancel')?>" />
        </td>
    </tr>
</table>
<?=form_close()?>
<div style="display: none;">
    <div id="sendrecm_div4" class="sendrecm_div4" style="clear: both;">
    <table cellpadding="0" cellspacing="0" width="100%" class="table">
    <tr>
       <td class="tdstyle txtlabel" width="25%" valign="top">
          <strong><?=lang('gimp_type')?>:</strong>
          <div class="txbox_div" id="gprTypeDiv">
              <select name="gpr_type[]" id="gpr_type[]" class="selectbox" style="width: 200px">
                  <option value=""><?=lang('g_selectopt')?></option>
                   <?=$type?>
              </select>
          </div> 
          <strong><?=lang('gimp_recdate')?>:</strong>
            <div class="txbox_div">
              <select id="gpr_rday[]" name="gpr_rday[]" class="selectbox" style="width:50px" >
                <?=$day?>   
               </select> /
               <select id="gpr_rmonth[]" name="gpr_rmonth[]" class="selectbox" style="width:70px">
                <?=$month?>    
               </select>/
               <select id="gpr_ryear[]" name="gpr_ryear[]" class="selectbox" style="width:60px">
                    <?=$year?>  
               </select>
           </div>
           
           <strong><?=lang('gimp_recnumber')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="gpr_rec_number[]" id="gpr_rec_number[]" value="" class="textbox" size="24" />
           </div>
           
        </td>
        <td class="tdstyle txtlabel" width="25%" valign="top">
         <strong><?=lang('gimp_issdate')?>:</strong>
            <div class="txbox_div">
              <select id="gpr_issday[]" name="gpr_issday[]" class="selectbox" style="width:50px" >
                <?=$day?>   
               </select> /
               <select id="gpr_issmonth[]" name="gpr_issmonth[]" class="selectbox" style="width:70px">
                <?=$month?>    
               </select>/
               <select id="gpr_issyear[]" name="gpr_issyear[]" class="selectbox" style="width:60px">
                    <?=$year?>  
               </select>
           </div>
           
           <strong><?=lang('gimp_issnumber')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="gpr_iss_number[]" id="gpr_iss_number[]" value="" class="textbox" size="24" />
           </div>
           <strong><?=lang('gimp_andrec')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="gpr_andraj_number[]" id="gpr_andraj_number[]" value="" class="textbox" size="24" />
           </div>
           <strong><?=lang('gimp_nextauth')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="gpr_next_auth[]" id="gpr_next_auth[]" value="" class="textbox" size="24" />
           </div>
        </td>     
        <td class="tdstyle txtlabel" width="25%" valign="top">
         
           <strong><?=lang('gimp_profile')?>:</strong><br /><strong><?=lang('gimp_name')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="gpr_name[]" id="gpr_name[]" value="" class="textbox" size="24" />
           </div>
           <strong><?=lang('gimp_fname')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="gpr_fathername[]" id="gpr_fathername[]" value="" class="textbox" size="24" />
           </div>
           <strong><?=lang('gimp_phone')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="gpr_phone[]" id="gpr_phone[]" value="" class="textbox" size="24" />
           </div>
        </td>
        <td class="tdstyle txtlabel" width="25%" valign="top">
           <strong><?=lang('gimp_imp')?>:</strong><br /> <strong><?=lang('gimp_dateprovide')?>:</strong> 
            <div class="txbox_div">
              <select id="gpr_prday[]" name="gpr_prday[]" class="selectbox" style="width:50px" >
                <?=$day?>   
               </select> /
               <select id="gpr_prmonth[]" name="gpr_prmonth[]" class="selectbox" style="width:70px">
                <?=$month?>    
               </select>/
               <select id="gpr_pryear[]" name="gpr_pryear[]" class="selectbox" style="width:60px">
                    <?=$year?>  
               </select>
           </div>
           <strong><?=lang('gimp_datedefprovide')?>:</strong>
            <div class="txbox_div">
              <select id="gpr_dprday[]" name="gpr_dprday[]" class="selectbox" style="width:50px" >
                <?=$day?>   
               </select> /
               <select id="gpr_dprmonth[]" name="gpr_dprmonth[]" class="selectbox" style="width:70px">
                <?=$month?>    
               </select>/
               <select id="gpr_dpryear[]" name="gpr_dpryear[]" class="selectbox" style="width:60px">
                    <?=$year?>  
               </select>
           </div>
           <strong><?=lang('court_dec')?>:</strong>
           <div class="txbox_div" id="courtDiv">
               <select name="n_gpr_court_dec[]" id="n_gpr_court_dec" class="selectbox court_decision" style="width: 200px" onchange="javascript: validate_all('case_form');javascript:next_drop()" >
                  <option value=""><?=lang('g_selectopt')?></option>
                   <?=$court_dec?>
              </select>
              <img id="n_gpr_court_decIMG" src="<?=base_url()?>images/validationx.PNG" width="19" height="19" style="position:relative; top:4px"/>
           <?php   /*   ticket 4007  start ----------- */ ?>
               <div style="height:50px; padding-top: 10px">
                <span class="showcontent" style="display:none;">
                <strong><?=lang('court_dec_nxt')?>:</strong>
                <div class="txbox_div" id="courtDiv">
              <select name="court_dec_next[]" id="court_dec_next[]" class="selectbox"   style="width: 200px"  >
                  <option value=""><?=lang('g_selectopt')?></option>
                   <?=$court_dec_oth?>
              </select>
              </div>                
            </span>
                </div>
           <?php   /*   ticket 4007  end ----------- */ ?>
           </div> 
            
        </td>
        
    </tr>
    
    <table id="courtFineDiv" cellpadding="0" cellspacing="0" width="100%" class="table">
    <tr >
        <td class="tdstyle txtlabel" width="33%" valign="top">
            <div class="txbox_div">
            <input id="gpr_land[]" name="gpr_land[]" value="1" type="checkbox" onchange="showNextDiv(this);">
            <label for="gpr_land[]">
            <strong><?=$this->lang->line('fine_land');?> :</strong>
            </label>
            </div>
            
            <div class="txbox_div" style="display: none;">
            <label for="gpr_land_type[]">
            <strong><?=$this->lang->line('type');?> :</strong>
            </label>
            <br/>
            <select id="gpr_land_type[]" name="gpr_land_type[]" class="selectbox" style="width: 200px" >
                <option value=""><?=lang('g_selectopt')?></option>
                <?=$land_type?>
            </select>
            <br/>
            <label for="gpr_land_value[]">
            <strong><?=$this->lang->line('value');?> :</strong>
            </label>
            <br/>
            <input type="number" id="gpr_land_value[]" name="gpr_land_value[]">
            </div>
            
        </td>
        <td class="tdstyle txtlabel" width="33%" valign="top">
           <div class="txbox_div">
            <input id="gpr_money[]" name="gpr_money[]" value="1" type="checkbox" onchange="showNextDiv(this);">
            <label for="gpr_money[]">
            <strong><?=$this->lang->line('fine_money');?> :</strong>
            </label>
            </div>
            
            <div class="txbox_div" style="display: none;">
            <label for="gpr_money_type[]">
            <strong><?=$this->lang->line('type');?> :</strong>
            </label>
            <br/>
            <select id="gpr_money_type[]" name="gpr_money_type[]" class="selectbox" style="width: 200px" >
                <option value=""><?=lang('g_selectopt')?></option>
                <?=$money_type?>
            </select>
            <br/>
            <label for="gpr_money_value[]">
            <strong><?=$this->lang->line('value');?> :</strong>
            </label>
            <br/>
            <input type="number" id="gpr_money_value[]" name="gpr_money_value[]">
            </div> 
        </td>
        <td class="tdstyle txtlabel" width="" valign="top">
            <div class="txbox_div">
            <input id="gpr_other[]" name="gpr_other[]" value="1" type="checkbox" onchange="showNextDiv(this);">
            <label for="gpr_other[]">
            <strong><?=$this->lang->line('fine_other');?> :</strong>
            </label>
            </div>
            
            <div class="txbox_div" style="display: none;">
            <label for="gpr_other_type[]">
            <strong><?=$this->lang->line('type');?> :</strong>
            </label>
            <br/>
            <select id="gpr_other_type[]" name="gpr_other_type[]" class="selectbox" style="width: 200px" >
                <option value=""><?=lang('g_selectopt')?></option>
                <?=$other_type?>
            </select>
            <br/>
            <label for="gpr_other_value[]">
            <strong><?=$this->lang->line('value');?> :</strong>
            </label>
            <br/>
            <input type="text" id="gpr_other_value[]" name="gpr_other_value[]">
            </div> 
        </td>
        <td class="tdstyle txtlabel" width="" valign="middle">
        <div class="fm-opt" >
              <input type="button" id="removeBtn" class='removeBtn' value=" - " style="display: none;"/>
        </div>
        </td>
    </tr>
    </table>
</div>

<!-- after applet court -->
<div id="sendrecm_div2" class="sendrecm_div2" style="clear: both;">
<table cellpadding="0" cellspacing="0" width="100%" class="table">
    <tr>
       <td class="tdstyle txtlabel" width="25%" valign="top">
          <strong><?=lang('gimp_type')?>:</strong>
          <div class="txbox_div">
              <select name="app_type[]" id="app_type[]" class="selectbox" style="width: 200px">
                  <option value=""><?=lang('g_selectopt')?></option>
                   <?=$type?>
              </select>
          </div> 
          <strong><?=lang('gimp_recdate')?>:</strong>
            <div class="txbox_div">
              <select id="app_rday[]" name="app_rday[]" class="selectbox" style="width:50px" >
                <?=$day?>   
               </select> /
               <select id="app_rmonth[]" name="app_rmonth[]" class="selectbox" style="width:70px">
                <?=$month?>    
               </select>/
               <select id="app_ryear[]" name="app_ryear[]" class="selectbox" style="width:60px">
                    <?=$year?>  
               </select>
           </div>
           
           <strong><?=lang('gimp_recnumber')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="app_rec_number[]" id="app_rec_number[]" value="" class="textbox" size="24" />
           </div>
           
        </td>
        <td class="tdstyle txtlabel" width="25%" valign="top">
         <strong><?=lang('gimp_issdate')?>:</strong>
            <div class="txbox_div">
              <select id="app_issday[]" name="app_issday[]" class="selectbox" style="width:50px" >
                <?=$day?>   
               </select> /
               <select id="app_issmonth[]" name="app_issmonth[]" class="selectbox" style="width:70px">
                <?=$month?>    
               </select>/
               <select id="app_issyear[]" name="app_issyear[]" class="selectbox" style="width:60px">
                    <?=$year?>  
               </select>
           </div>
           
           <strong><?=lang('gimp_issnumber')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="app_iss_number[]" id="app_iss_number[]" value="" class="textbox" size="24" />
           </div>
           <strong><?=lang('gimp_andrec')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="app_andraj_number[]" id="app_andraj_number[]" value="" class="textbox" size="24" />
           </div>
           <strong><?=lang('gimp_nextauth')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="app_next_auth[]" id="app_next_auth[]" value="" class="textbox" size="24" />
           </div>
        </td>     
        <td class="tdstyle txtlabel" width="25%" valign="top">
         
           <strong><?=lang('gimp_profile')?>:</strong><br /><strong><?=lang('gimp_name')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="app_name[]" id="app_name[]" value="" class="textbox" size="24" />
           </div>
           <strong><?=lang('gimp_fname')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="app_fathername[]" id="app_fathername[]" value="" class="textbox" size="24" />
           </div>
           <strong><?=lang('gimp_phone')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="app_phone[]" id="app_phone[]" value="" class="textbox" size="24" />
           </div>
        </td>
        <td class="tdstyle txtlabel" width="25%" valign="top">
           <strong><?=lang('gimp_imp')?>:</strong><br /> <strong><?=lang('gimp_dateprovide')?>:</strong> 
            <div class="txbox_div">
              <select id="app_prday[]" name="app_prday[]" class="selectbox" style="width:50px" >
                <?=$day?>   
               </select> /
               <select id="app_prmonth[]" name="app_prmonth[]" class="selectbox" style="width:70px">
                <?=$month?>    
               </select>/
               <select id="app_pryear[]" name="app_pryear[]" class="selectbox" style="width:60px">
                    <?=$year?>  
               </select>
           </div>
           <strong><?=lang('gimp_datedefprovide')?>:</strong>
            <div class="txbox_div">
              <select id="app_dprday[]" name="app_dprday[]" class="selectbox" style="width:50px" >
                <?=$day?>   
               </select> /
               <select id="app_dprmonth[]" name="app_dprmonth[]" class="selectbox" style="width:70px">
                <?=$month?>    
               </select>/
               <select id="app_dpryear[]" name="app_dpryear[]" class="selectbox" style="width:60px">
                    <?=$year?>  
               </select>
           </div>
           <strong><?=lang('court_dec')?>:</strong>
           <div class="txbox_div" id="courtDiv">
              <select name="n_app_court_dec[]" id="n_app_court_dec" class="selectbox court_decision" style="width: 200px" onchange="javascript: validate_all('case_form');javascript:next_drop()" >
                  <option value=""><?=lang('g_selectopt')?></option>
                   <?=$court_dec?>
              </select>
              <img id="n_app_court_decIMG" src="<?=base_url()?>images/validationx.PNG" width="19" height="19" style="position:relative; top:4px"/>
           </div> 
           <?php   /*   ticket 4007  start ----------- */ ?>
               <div style="height:50px; padding-top: 10px">
                <span class="showcontent" style="display:none;">
                <strong><?=lang('court_dec_nxt')?>:</strong>
                <div class="txbox_div" id="courtDiv">
              <select name="court_app_next" id="court_app_next" class="selectbox"   style="width: 200px"  >
                  <option value=""><?=lang('g_selectopt')?></option>
                   <?=$court_dec_oth?>
              </select>
              </div>                
            </span>
                </div>
           <?php   /*   ticket 4007  end ----------- */ ?>
           
             
        </td>
    </tr>
    
    <table id="courtFineDiv" cellpadding="0" cellspacing="0" width="100%" class="table">
    <tr >
        <td class="tdstyle txtlabel" width="33%" valign="top">
            <div class="txbox_div">
            <input id="app_land[]" name="app_land[]" value="1" type="checkbox" onchange="showNextDiv(this);">
            <label for="app_land[]">
            <strong><?=$this->lang->line('fine_land');?> :</strong>
            </label>
            </div>
            
            <div class="txbox_div" style="display: none;">
            <label for="app_land_type[]">
            <strong><?=$this->lang->line('type');?> :</strong>
            </label>
            <br/>
            <select id="app_land_type[]" name="app_land_type[]" class="selectbox" style="width: 200px" >
                <option value=""><?=lang('g_selectopt')?></option>
                <?=$land_type?>
            </select>
            <br/>
            <label for="app_land_value[]">
            <strong><?=$this->lang->line('value');?> :</strong>
            </label>
            <br/>
            <input type="number" id="app_land_value[]" name="app_land_value[]">
            </div>
            
        </td>
        <td class="tdstyle txtlabel" width="33%" valign="top">
           <div class="txbox_div">
            <input id="app_money[]" name="app_money[]" value="1" type="checkbox" onchange="showNextDiv(this);">
            <label for="app_money[]">
            <strong><?=$this->lang->line('fine_money');?> :</strong>
            </label>
            </div>
            
            <div class="txbox_div" style="display: none;">
            <label for="app_money_type[]">
            <strong><?=$this->lang->line('type');?> :</strong>
            </label>
            <br/>
            <select id="app_money_type[]" name="app_money_type[]" class="selectbox" style="width: 200px" >
                <option value=""><?=lang('g_selectopt')?></option>
                <?=$money_type?>
            </select>
            <br/>
            <label for="app_money_value[]">
            <strong><?=$this->lang->line('value');?> :</strong>
            </label>
            <br/>
            <input type="number" id="app_money_value[]" name="app_money_value[]">
            </div> 
        </td>
        <td class="tdstyle txtlabel" width="" valign="top">
            <div class="txbox_div">
            <input id="app_other[]" name="app_other[]" value="1" type="checkbox" onchange="showNextDiv(this);">
            <label for="app_other[]">
            <strong><?=$this->lang->line('fine_other');?> :</strong>
            </label>
            </div>
            
            <div class="txbox_div" style="display: none;">
            <label for="app_other_type[]">
            <strong><?=$this->lang->line('type');?> :</strong>
            </label>
            <br/>
            <select id="app_other_type[]" name="app_other_type[]" class="selectbox" style="width: 200px" >
                <option value=""><?=lang('g_selectopt')?></option>
                <?=$other_type?>
            </select>
            <br/>
            <label for="app_other_value[]">
            <strong><?=$this->lang->line('value');?> :</strong>
            </label>
            <br/>
            <input type="text" id="app_other_value[]" name="gpr_other_value[]">
            </div> 
        </td>
        <td class="tdstyle txtlabel" width="" valign="middle">
        <div class="fm-opt" >
              <input type="button" id="removeBtn" class='removeBtn' value=" - " style="display: none;"/>
        </div> 
        </td>
    </tr>
    </table>
    
</table>
 <hr />
</div>
<!--after tajdednazar -->
<div id="sendrecm_div5" class="sendrecm_div5" style="clear: both;">
<table cellpadding="0" cellspacing="0" width="100%" class="table">
    <tr>
       <td class="tdstyle txtlabel" width="50%" valign="top">
          <strong><?=lang('gimp_type')?>:</strong>
          <div class="txbox_div">
              <select name="taj_type[]" id="taj_type[]" class="selectbox" style="width: 200px">
                  <option value=""><?=lang('g_selectopt')?></option>
                   <?=$type?>
              </select>
          </div> 
          <strong><?=lang('gimp_recdate')?>:</strong>
            <div class="txbox_div">
              <select id="taj_rday[]" name="taj_rday[]" class="selectbox" style="width:50px" >
                <?=$day?>   
               </select> /
               <select id="taj_rmonth[]" name="taj_rmonth[]" class="selectbox" style="width:70px">
                <?=$month?>    
               </select>/
               <select id="taj_ryear[]" name="taj_ryear[]" class="selectbox" style="width:60px">
                    <?=$year?>  
               </select>
           </div>
           
           <strong><?=lang('gimp_recnumber')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="taj_rec_number[]" id="taj_rec_number[]" value="" class="textbox" size="24" />
           </div>
           
        </td>
        <td class="tdstyle txtlabel" width="50%" valign="top">
         <strong><?=lang('taj_issdate')?>:</strong>
            <div class="txbox_div">
              <select id="taj_issday[]" name="taj_issday[]" class="selectbox" style="width:50px" >
                <?=$day?>   
               </select> /
               <select id="taj_issmonth[]" name="taj_issmonth[]" class="selectbox" style="width:70px">
                <?=$month?>    
               </select>/
               <select id="taj_issyear[]" name="taj_issyear[]" class="selectbox" style="width:60px">
                    <?=$year?>  
               </select>
           </div>
           
           <strong><?=lang('taj_issuenumber')?>:</strong>
            <div class="txbox_div">
            <input type="text" name="taj_iss_number[]" id="taj_iss_number[]" value="" class="textbox" size="24" />
           </div>
           <div class="fm-opt" >
              <input type="button" id="removeBtn" class='removeBtn' value=" - " style="display: none;"/>
           </div>
        </td>     
    </tr>
</table>
 <hr />
</div>

</div>



</fieldset>
<?$q=1;?> 
<script language="javascript">
  validate_all('case_form');
  /*
  $('#addmorebtn').click(function(){
    var $orginal = $('form #sendrecm_div');
    var $cloned = $orginal.clone();
     $cloned.appendTo('#clonnedDiv');
  });
  */
  var id = 0;
  var a = <?=$q?>; 
  $('#addmorebtn').click(function(){
            id++;
            var prot = $(document).find(".sendrecm_div").clone();
            prot.attr("class", 'sendrecm_div'+id)
            prot.children('.removeBtn').show();
            prot.find(".id").attr("value", id);
            //prot.find('input').val('');
            
            prot.find('input.removeBtn').val('-');
            prot.find('input.removeBtn').show();
            $(document).find("div #clonnedDiv").append(prot);
    }); 
    $(document).on("click",".removeBtn",function(){
            $(this).closest("#sendrecm_div").remove();
    });
  
    var id3 = 0;
    $('#addmorebtn3').click(function(){
            id3++;
            var prot = $(document).find(".sendrecm_div3").clone();
            prot.attr("class", 'sendrecm_div3'+id3)
            prot.children('.removeBtn').show();
            prot.find(".id").attr("value", id3);
            //prot.find('input').val('');
            prot.find('input.removeBtn').val('-');
            prot.find('input.removeBtn').show();
            $(document).find("div #clonnedDiv3").append(prot);
    }); 
    $(document).on("click",".removeBtn",function(){
            $(this).closest("#sendrecm_div3").remove();
    });
    
    var id2 = 0;
  $('#addmorebtn2').click(function(){
            id2++;
            var prot = $(document).find(".sendrecm_div2").clone();
            prot.attr("class", 'sendrecm_div2'+id2)
            prot.children('.removeBtn').show();
            prot.find(".id").attr("value", id2);
            //prot.find('input').val('');
            // gov_benefit 
            prot.find("#n_app_court_dec").attr("id", 'n_app_court_dec'+a);
            prot.find("#n_app_court_dec"+"IMG").attr("id", 'n_app_court_dec'+a+"IMG");
            prot.find("#n_app_court_dec"+a+"IMG").attr("src", '/cms/images/validationx.PNG');
            
            prot.find('input.removeBtn').val('-');
            prot.find('input.removeBtn').show();
            $(document).find("div #clonnedDiv2").append(prot);
    }); 
    $(document).on("click",".removeBtn",function(){
            $(this).closest("#sendrecm_div2").remove();
    });
    
    
    var id4 = 0;
    $('#addmorebtn4').click(function(){
            id4++;
            a++; 
            var prot = $(document).find(".sendrecm_div4").clone();
            prot.attr("class", 'sendrecm_div4'+id4)
            prot.children('.removeBtn').show();
            prot.find(".id").attr("value", id4);
            //prot.find('input').val('');
            
            // gov_benefit 
            prot.find("#n_gpr_court_dec").attr("id", 'n_gpr_court_dec'+a);
            prot.find("#n_gpr_court_dec"+"IMG").attr("id", 'n_gpr_court_dec'+a+"IMG");
            prot.find("#n_gpr_court_dec"+a+"IMG").attr("src", '/cms/images/validationx.PNG');
            
            prot.find('input.removeBtn').val('-');
            prot.find('input.removeBtn').show();
            $(document).find("div #clonnedDiv4").append(prot);
    });
    $(document).on("click",".removeBtn",function(){
            $(this).closest("#sendrecm_div4").remove();
    });
    
    var id5 = 0;
    $('#addmorebtn5').click(function(){
            id5++;
            var prot = $(document).find(".sendrecm_div5").clone();
            prot.attr("class", 'sendrecm_div5'+id5)
            prot.children('.removeBtn').show();
            prot.find(".id").attr("value", id5);
           // prot.find('input').val('');
            
            prot.find('input.removeBtn').val('-');
            prot.find('input.removeBtn').show();
            $(document).find("div #clonnedDiv5").append(prot);
    }); 
    $(document).on("click",".removeBtn",function(){
            $(this).closest("#sendrecm_div5").remove();
    });
    
    function showNextDiv (element){
        if($(element).is(':checked')){
        $(element).parent().next().css("display", "block");
        }else {
        $(element).parent().next().css("display", "none");
        }
    }
    //validate_all('addimp'); 
    
<?php   /*   ticket 4007  start ----------- */ ?> 
function next_drop(){
var selectedopt = $('.court_decision').find(":selected").val();
 if (selectedopt == 301) {
        $('.showcontent').show();
          } else {
        $('.showcontent').hide();
    }
}
<?php   /*   ticket 4007  end ----------- */ ?>
</script>