<?php   
/* Classification   : Activation of 'Other' option in the Case subject Segment
Title#            : Activate the 'Other' option in the Case Subject Segment
Zendesk#          : 1117 (https://jsspcms.zendesk.com/agent/tickets/1117)
comment#          : 25.11.2019 Sultan Ali removed disabled='disabled' value from the option tag on line 820
25.11.2019        : disabled='disabled' value removed from option tag on line 4044.
25.11.2019        :if changed to else if on line 4042 to remove duplicate 'Other' option in the Case subject dropdown.
*/

/* Classification   : CCMS
Title#            : Defense Lawyer information
Zendesk#          : 3183 (https://jsspcms.zendesk.com/agent/tickets/3183)
comment          
15.08.2020        : line 2934 to 3088 added for getting Districts and villages drop down in report

*/
/* Classification   : CCMS
Title#            : Rulling type drop down
Zendesk#          : 3739 (https://jsspcms.zendesk.com/agent/tickets/3739)
comment          
26.09.2020        : Mohammad Fekrat line 847 to 859 added for getting the drop-down value from static table
26.09.2020        : Mohammad Fekrat line 1218 to 1220 added for inserting the value to base table 
26.09.2020        : Mohammad Fekrat line 4242 to 4265 added for getting the drop-down value from static table in edit page
26.09.2020        : Mohammad Fekrat line 4887 to 4889 added for update the value to base table 
26.09.2020        : Mohammad Fekrat line 1221 has been commented in order this field is not required to be inserted 
26.09.2020        : Mohammad Fekrat line 4886 has been commented in order this field is not required to be updated
*/
/* Classification   : CCMS
Title#            : ٔNumber of papers 
Zendesk#          : 3775 (https://jsspcms.zendesk.com/agent/tickets/3775)
comment          
27.09.2020        : line 783 added 
27.09.2020        : line 1224 added
27.09.2020        : line 3826 added 
27.09.2020        : line 4900 added

*/
/* Classification   : CCMS
Title#            : ٔto add other Department text field under law and state cases 
Zendesk#          : 3809 (https://jsspcms.zendesk.com/agent/tickets/3809)
comment          
29.09.2020        :Sultan Ali- line 796 added 
29.09.2020        : line 1240 added
29.09.2020        : line 3845 added 
29.09.2020        : line 4922 added

*/
/* Classification   : CCMS
Title#            : Registeration number and date plus registeration fees added
Zendesk#          : 3789 and 3866 (https://jsspcms.zendesk.com/agent/tickets/3789 and 3866)
comment          
05.10.2020        : Mohammad Fekrat line 761 to 769 added 
05.10.2020        : Mohammad Fekrat line 933 to 945 added 
05.10.2020        : Mohammad Fekrat line 1156 to 1160 added 
05.10.2020        : Mohammad Fekrat line 1195 to 1208 added 
05.10.2020        : Mohammad Fekrat line 1224 to 1235 added 
05.10.2020        : Mohammad Fekrat line 3869 to 3877 added 
05.10.2020        : Mohammad Fekrat line 4062 to 4118 added 
05.10.2020        : Mohammad Fekrat line 4445 to 4468 added 
05.10.2020        : Mohammad Fekrat line 4985 to 4989 added 
05.10.2020        : Mohammad Fekrat line 4995 to 5008 added 
05.10.2020        : Mohammad Fekrat line 5022 to 5033 added 
05.10.2020        : Mohammad Fekrat line 893 to 900 added for ticket 3866 
*/
/* Classification   : CCMS
Title#            : adding another dependent drop-down to court-decision 
Zendesk#          : 4007 (https://jsspcms.zendesk.com/agent/tickets/4007)
comment          
26.10.2020        : Mohammad Fekrat line 1084 till line 1095 added 
26.10.2020        : Mohammad Fekrat line 1501 till line 1503 added 
26.10.2020        : Mohammad Fekrat line 1556 till line 1558 added 
26.10.2020        : Mohammad Fekrat line 1607 till line 1609 added 
26.10.2020        : Mohammad Fekrat line 1660 till line 1662 added 
26.10.2020        : Mohammad Fekrat line 5343 till line 5365 added 
26.10.2020        : Mohammad Fekrat line 5642 till line 5644 added 
26.10.2020        : Mohammad Fekrat line 5706 till line 5708 added 
26.10.2020        : Mohammad Fekrat line 5822 till line 5833 added 
26.10.2020        : Mohammad Fekrat line 5932 till line 5934 added 
26.10.2020        : Mohammad Fekrat line 5996 till line 5998 added 
*/
/* Classification   : CCMS
Title#            : ٔTo add the 
‘Received Date to the Huqooq Department:’ , 
‘Issuance Date from Huqooq Department:’
 ‘Sender:’ 
and 
‘Receiver:’  options under Civil CMS while adding and editing a new case under state cases.
 
Zendesk#          : 3884 (https://jsspcms.zendesk.com/agent/tickets/3884)
comment          
02.11.2020        : Sultan Ali-line 878 to 881 added 
02.11.2020        : line 1261 to 1262 added
02.11.2020        : line 1412 to 1417 added 
02.11.2020        : line 4049 to 4052 added
02.11.2020        : line 4320 to 4354 added 
02.11.2020        : line 5089 to 5109 added
02.11.2020        : line 5187 to 5188 added 
02.11.2020        : line 5335 to 5340 added
02.11.2020        : line 8059 to 8099 added 


*/

/* Classification   : CCMS
Title#            : ٔTo add the 
‘Type:’  options under Civil CMS while adding and editing a new case under state cases.
 
Zendesk#          : 3883 (https://jsspcms.zendesk.com/agent/tickets/3883)
comment          
02.11.2020        : Sultan Ali-line 884 added 
02.11.2020        : line 1078 to 1088 added
02.11.2020        : line 1420 added 
02.11.2020        : line 4055 added 
02.11.2020        : line 4631 to 4653 added 
02.11.2020        : line 5343 added 

*/

   /*
     Case Controller
     version: 2.0 
     Creation date: 25/4/2014
     Author: Naser
   */
    class Home extends CI_controller
    {
        //define local variables 
        private $file_types     = "gif|jpg|jpeg|png|pdf|txt|xls|xlsx|doc|docx|zip|tif|tiff|wav";
        private $picture_types     = "gif|jpg|jpeg|png";
        public  $file_info      = array();
        private $prefix    = "cms";
        //constructor function  
        function __construct()
        {
            parent::__construct();
            $this->load->model('case/case_model'); 
            $this->load->model('static_tables/statictables_model');
            $this->load->model('crime_type/crime_type_model');
            $this->load->model('province/province_model');
            $this->load->model('case/ghuquq_model');
            $this->load->model('documents/documents_model');
            $this->load->library('form_validation'); 
            $this->load->library('ajax_pagination'); 
            $this->load->library('clean_encrypt');    
            $this->load->library('dateconverter');    
            $this->load->library('mng_auth'); 
            $this->load->helper('datecheck');
            $this->load->helper('language');
            $this->load->library('upload');    
            //load translation file from application folder
            $this->lang->load('case',$this->mng_auth->get_language_name());
            $this->lang->load('gcase',$this->mng_auth->get_language_name());
            
        }
        //destructor function 
        function __destruct()
        {
            //empty space
        }
        //index function  
        function index($dtype = 1)
        {
            //check if this user is logged in or not
            //if this user is not logged in and its not admin
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {     
                //==== list all cases
                $this->ListCases($dtype);
            }
        }
        
        private function Search($dtype = 1)
        {
            //----
            $optionsec = "";
            $allsMod  = $this->mng_auth->all_submodules('c');
            if($allsMod)
            {
               if($allsMod->num_rows()>0)
               {
                  foreach($allsMod->result() as $row)
                  {
                      if($row->code =="cc" || $row->code == "cd"|| $row->code == "cf")
                      {
                         continue;
                      }
                      else
                      {
                          //=== check language and add list in english
                          $name  = $row->name;
                          if($dtype == 1 && $row->code == "ca")
                          {
                               $optionsec.="<option value=\"".$row->code."\" selected=\"selected\">".$name."</option>";
                          }
                          else if($dtype == 2 && $row->code == "cb")
                          {
                               $optionsec.="<option value=\"".$row->code."\" selected=\"selected\">".$name."</option>";
                          }
                          else
                          {
                               $optionsec.="<option value=\"".$row->code."\">".$name."</option>";
                          }
                       }
                  }
               }
            }
            //echo $optionsec;exit;
            $data['section'] = $optionsec;
            
            $typeopt = "";
            $searchtype = $this->lang->line('langtype');
            $isFound = FALSE;
            foreach($searchtype AS $key => $item)
            {
                $typeopt .="<option value=\"".$key."\">".$item."</option>";
            }
            $data['types'] = $typeopt;
            
            // initial crime detection 
            $req_type = "";
            $reqObj = $this->statictables_model->GetCaseStatic_Tables2(1,0,0,TRUE,$this->mng_auth->get_language());
            if($reqObj)
            {
                foreach($reqObj->result() as $row)
                {
                   $req_type.="<option value = '".$row->id."' ".set_select('req_type', $row->id).">".$row->name_en."</option>";    
                }
            }        
            $data['request_type'] = $req_type;
            
            //------- year option for case ---
            $diff = 0;
            $yearopt = "";
            if($this->mng_auth->get_language() == 'dr')
            {
               $diff = 621;
            }
            $yearopt .="<option value=\"-1\" selected=\"selected\">".$this->lang->line('det_searchall')."</option>";
            for($i = (date('Y') - $diff); $i>(1990-$diff); $i--)
            {
               $yearopt .="<option value=\"".$i."\">".$i."</option>";
            }
            $data['yearopt'] = $yearopt;
            $recper = "<option value=\"10\" selected=\"selected\">10</option>";
            $recper .= "<option value=\"20\">20</option>";
            $recper .= "<option value=\"50\">50</option>";
            $recper .= "<option value=\"100\">100</option>";
            $data['nrec'] = $recper; 
            
            //---- province list option ---
            $province_opt = "";
            $province_opt = "<option value=\"-1\" selected=\"selected\">".$this->lang->line('det_searchall')."</option>";
            //$allpr = $this->province_model->GetAllProvinces(0,0,TRUE,$this->mng_auth->get_language());
            $allpr = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());                     
            if($allpr)
            {
                if($allpr->num_rows()>0)
                {
                    foreach($allpr->result() as $item=>$val)
                    {
                        $province_opt.="<option value ='".$val->code."'>".$val->name."</option>";  
                    }
                }
            }
            $data['province'] = $province_opt; 
            /*
            //==== confidentiality ===
            $conf = "<option value=\"-1\" selected=\"selected\">".$this->lang->line('det_searchall')."</option>";
            $conf .= "<option value=\"1\">".$this->lang->line('det_class')."</option>";
            $conf .= "<option value=\"2\">".$this->lang->line('det_unclass')."</option>";
            $data['condfident'] = $conf; 
            
            
            //==== get all ministries by afghanistan republic ====
            $allMinis = $this->mng_auth->GetAllParDeps(array('1000000001'));
            //----- check if there is any object found---
            $minopt = "";
            $mincode = array();
            $minopt = "<option value=\"-1\" selected=\"selected\">".$this->lang->line('det_searchall')."</option>";
            if($allMinis)
            {
                foreach($allMinis->result() AS $item)
                {
                    $mincode[] = $item->id;
                    $minopt .="<option value=\"".$item->id."\">".$item->name."</option>"; 
                }
            
            }      
            $data['minopt'] = $minopt; 
            
            //----- get all departments -----
            $allDeps = $this->mng_auth->GetAllParDeps($mincode);  
            $depoption = "";
            $depoption = "<option value=\"-1\" selected=\"selected\">".$this->lang->line('det_searchall')."</option>";
            if($allDeps)
            {
                foreach($allDeps->result() AS $item)
                {
                    $depoption .="<option value=\"".$item->id."\">".$item->name."</option>"; 
                }
            
            }      
            $data['depoption'] = $depoption; 
            */ 
            $search = $this->load->view("case/search",$data,TRUE);
            return $search;
        }
        
        //---- get departemnt by parent ---
        function GetOrganization()
        {
            //if this user is not logged in and its not admin
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                
                $mincode =  array();
                //----- get all departments -----
                if($this->input->post('depid') == "-1")
                {
                    //=== get all ministry and get all departments ===
                    $allMinis = $this->mng_auth->GetAllParDeps(array('1000000001'));
                   
                    //----- check if there is any object found---
                    $mincode = array();
                    if($allMinis)
                    {
                        foreach($allMinis->result() AS $item)
                        {
                            $mincode[] = $item->id;
                        }
                    
                    } 
                    // get all departments ===
                    $allDeps = $this->mng_auth->GetAllParDeps($mincode);       
                }
                else
                {
                   $allDeps = $this->mng_auth->GetAllParDeps(array($this->input->post('depid'))); 
                } 
                $depoption = "";
                $depoption = "<option value=\"-1\" selected=\"selected\">".$this->lang->line('det_searchall')."</option>";
                if($allDeps)
                {
                    foreach($allDeps->result() AS $item)
                    {
                        $depoption .="<option value=\"".$item->id."\">".$item->name."</option>"; 
                    }
                
                }
                $dropd  = "<strong>".$this->lang->line('det_sdep').":</strong>&nbsp;";
                $dropd .= "<select name=\"departments\" id=\"departments\" class=\"selectbox\" style=\"width: 250px;\">";    
                $dropd .= $depoption;
                $dropd .="</select>";
                
                //show dropdwon
                echo $dropd;
            
            }
        
        }
        
        //---- get departemnt by parent ---
        function GetProvinceOrganization()
        {
            //if this user is not logged in and its not admin
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                $mincode =  array();
                //----- get all departments -----
                if($this->input->post('depid') == "-1")
                {
                     if($this->input->post('prid') == '-1')
                     {
                        //=== get all ministry and get all departments ===
                        $allMinis = $this->mng_auth->GetAllParDeps(array('1000000001'));
                       
                        //----- check if there is any object found---
                        $mincode = array();
                        if($allMinis)
                        {
                            foreach($allMinis->result() AS $item)
                            {
                                $mincode[] = $item->id;
                            }
                        
                        } 
                        // get all departments ===
                        $allDeps = $this->mng_auth->GetAllParDeps($mincode); 
                     } 
                     else
                     {
                         //=== get all departments with the given departemnt and province code ====
                         //=== get all ministry and get all departments ===
                        $allMinis = $this->mng_auth->GetAllParDeps(array('1000000001'));
                        //----- check if there is any object found---
                        $mincode = array();
                        if($allMinis)
                        {
                            foreach($allMinis->result() AS $item)
                            {
                                $mincode[] = $item->id;
                            }
                        
                        }  
                        // get all departments ===
                        $allDeps = $this->mng_auth->GetAllParProvince($mincode,$this->input->post('prid')); 
                         
                         
                     }     
                }
                else
                {
                   
                   //--- check if ministry is selected but no province --- 
                   if($this->input->post('prid') == '-1')
                   { 
                        $allDeps = $this->mng_auth->GetAllParDeps(array($this->input->post('depid')));
                   }
                   else
                   {
                        $allDeps = $this->mng_auth->GetAllParProvince(array($this->input->post('depid')),$this->input->post('prid'));
                   } 
                } 
                $depoption = "";
                $depoption = "<option value=\"-1\" selected=\"selected\">".$this->lang->line('det_searchall')."</option>";
                if($allDeps)
                {
                    foreach($allDeps->result() AS $item)
                    {
                        $depoption .="<option value=\"".$item->id."\">".$item->name."</option>"; 
                    }
                
                }
                $dropd  = "<strong>".$this->lang->line('det_sdep').":</strong>&nbsp;";
                $dropd .= "<select name=\"departments\" id=\"departments\" class=\"selectbox\" style=\"width: 250px;\">";    
                $dropd .= $depoption;
                $dropd .="</select>";
                
                //show dropdwon
                echo $dropd;
            
            }
        
        }
        
        //---- search form ---
        function SearchData()
        {
             //if this user is not logged in and its not admin
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {           
                    
                    //integrate ajax pagination
                    $str_post_str = '&ajax=1';
                    //-- provide ajax pagination details for the next pagintaion ----
                    $str_post_str .= "&section=".$this->input->post('section');
                    if(strlen(trim($this->input->post('keyword')))>0)
                    {
                        $str_post_str .= "&keyword=".trim($this->input->post('keyword'));
                    }
                    $str_post_str .= "&type=".trim($this->input->post('type'));
                    $str_post_str .= "&rtype=".trim($this->input->post('rtype'));
                    $str_post_str .= "&province=".$this->input->post('province');
                    $str_post_str .= "&nrec=".$this->input->post('nrec');
                    $str_post_str .= "&year=".$this->input->post('year');
                    if($this->input->post('nrec'))
                    {
                        $recpage  = $this->input->post('nrec');
                    }
                    else
                    {
                        $recpage  = $this->config->item('recordperpage');//number of records per page 
                    }                    
                    $starting = $this->input->post('starting');         //get counter which page record 
                    //if its the first page than show starting from 0
                    if(!$starting) 
                    {
                        $starting =0;
                    }      //if its first page loading initialize counter to 1 
                    //get total records
                    $data = array();
                    $therecords = $this->case_model->SearchData($starting,$recpage,FALSE,$this->mng_auth->get_language());
                    //check object
                    $data['records'] = $therecords;
                    $data['code'] = $this->input->post('section');
                    
                    //ajax engine pagination
                    /*
                    * params:
                    * 1.total record
                    * 2:starting of pagination like 0,10,20 etc
                    * 3.record per page 10, or could be 50 according to config item
                    * 4.First label translation
                    * 5.Last label translation
                    * 6.Previous lable translation
                    * 7.Next lable translation
                    * 8.page label translation
                    * 9.of lable translation
                    * 10.total lable translation
                    * 11.link to url like personnel/home/getdetails
                    * 12. div id to show the ajax returned data 
                    * 13. any attachment post data to pass to the next ajax request
                    */
                    $this->ajax_pagination->make_search(
                            $this->case_model->TotalRecordsBysearch(),
                            $starting,
                            $recpage,
                            $this->lang->line('case_first'),
                            $this->lang->line('case_last'),
                            $this->lang->line('case_previous'),
                            $this->lang->line('case_next'),
                            $this->lang->line('case_page'),
                            $this->lang->line('case_of'),
                            $this->lang->line('case_total'),
                            base_url()."case/home/searchdata",
                            'caseajaxdiv',
                            $str_post_str
                    );
                    //provide to view of the page
                    $data['links']     = $this->ajax_pagination->anchors;
                    $data['total']     = $this->ajax_pagination->total;   
                    $data['page']      = $starting;   
                    
                    $this->load->view('case/case_list',$data);  

            }
        
        }
        
        //list function  
        function ListCases($dtype = 1)
        {
             //check if this user is logged in or not
            //if this user is not logged in and its not admin
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {     
                
                //check if I have access role sub module case
               if(1)
               {
                    $add_tpl ="";  
                    //check if I have data entry role
                    //if the user has data entry role provide a data entry button
                    if($this->mng_auth->IsAddable('ca') || $this->mng_auth->IsAddable('cb'))
                    {
                        //provide a data entry view with buttons
                        $add_tpl = $this->load->view("case/addcase_tpl","",TRUE);
                    } 
                  
                    //----- list search form ---
                    $search = $this->Search($dtype);
                    //integrate ajax pagination
                    $str_post_str = '&ajax=1';
                    $recpage  = $this->config->item('recordperpage');//number of records per page                   
                    $starting = $this->input->post('starting');         //get counter which page record 
                    //if its the first page than show starting from 0
                    if(!$starting) 
                    {
                        $starting =0;
                    }      //if its first page loading initialize counter to 1 
                    //get total records
                    $data = array();
                    $therecords = $this->case_model->GetAllRecords($starting,$recpage,FALSE,$this->mng_auth->get_language(),$dtype);
                    //check object
                    $data['records'] = $therecords;
                    //$totalRocords = $this->case_model->GetAllRecords(0,0,TRUE,$this->mng_auth->get_language(),$dtype);
                    //echo $totalRocords;exit;
                    //ajax engine pagination
                    /*
                    * params:
                    * 1.total record
                    * 2:starting of pagination like 0,10,20 etc
                    * 3.record per page 10, or could be 50 according to config item
                    * 4.First label translation
                    * 5.Last label translation
                    * 6.Previous lable translation
                    * 7.Next lable translation
                    * 8.page label translation
                    * 9.of lable translation
                    * 10.total lable translation
                    * 11.link to url like personnel/home/getdetails
                    * 12. div id to show the ajax returned data 
                    * 13. any attachment post data to pass to the next ajax request
                    */
                   
                    $this->ajax_pagination->make_search(
                            $this->case_model->TotalRecords($dtype),
                            $starting,
                            $recpage,
                            $this->lang->line('case_first'),
                            $this->lang->line('case_last'),
                            $this->lang->line('case_previous'),
                            $this->lang->line('case_next'),
                            $this->lang->line('case_page'),
                            $this->lang->line('case_of'),
                            $this->lang->line('case_total'),
                            base_url()."case/home/ListCases/".$dtype,
                            'caseajaxdiv',
                            $str_post_str
                    );
                    //provide to view of the page
                    $data['links']     = $this->ajax_pagination->anchors;
                    $data['total']     = $this->ajax_pagination->total;   
                    $data['page']      = $starting;   
                 
                    if($this->input->post('ajax')==1)
                    {
                        $this->load->view('case/case_list',$data);  
                    }
                    else
                    {
                        header_tpl($this->mng_auth->get_language());
                        //include top banner 
                        banner_tpl();
                        //load left template
                        left_tpl();
                        //load right tpl
                        right_tpl(); 
                        
                        $message = $this->load->view('case/case_list',$data,TRUE);
                        //provide main content
                        //content_tpl($add_tpl.$search.$message);
                        content_tpl($add_tpl.$search.$message);
                        //end of develpers view
                        //provide footer
                        footer_tpl();
                    }
               }
            }
        }
       
        function addProcess()
        {
            
             //if this user is not logged in and its not admin
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                
                // --- load process form form ----
                //load translation file from application folder
                
                $data = array();
                
                //get available departments to data entry
                $Department = 0;
                $AllDepObj = $this->mng_auth->GetDepartmentsByRole(array('r1','r7'),TRUE,'gb');
                //department option List
                $ministries = array();
                $depOptList = "";
                if($AllDepObj)
                {
                    //if there is one department get department id and provide set select
                    if($AllDepObj->num_rows()==1)
                    {
                        $Department = $AllDepObj->row()->id; 
                        //SET DEPARTMENT ID TO GET DEPARTMENT
                        foreach($AllDepObj->result() AS $item)
                        {
                            $ministries[] = $item->id;
                            $depOptList.="<option value=\"".$item->id."\" ".set_select("n_department",$item->id,TRUE).">".$item->name."</option>";
                        }
                    }
                    else
                    {
                        $depOptList = "<option value=\"\"  selected=\"selected\">".$this->lang->line('dep_selectdep')."</option>";
                        //provide multiple department option and to select
                        foreach($AllDepObj->result() AS $item)
                        {
                            $ministries[] = $item->id;
                            $depOptList.="<option value=\"".$item->id."\" ".set_select("n_department",$item->id,FALSE).">".$item->name."</option>";
                        }
                    }
                }
                $data['departments']     = $depOptList;
                $ministopt = "";
                //---- get parent ministries ---
                if(count($ministries)>0)
                {
                     //GetParentDep
                     $ministryObj = $this->mng_auth->GetDepartmentByChild($ministries);
                     //---- checkif there is any object  returned
                     if($ministryObj)
                     {
                         if($ministryObj->num_rows() == 1)
                         {
                              $ministopt = "<option value=\"".$ministryObj->row()->id."\" selected=\"selected\">".$ministryObj->row()->name."</option>";
                         }
                         else
                         {
                             $ministopt = "<option value=\"\"  selected=\"selected\">".$this->lang->line('dep_selectmin')."</option>";
                             foreach($ministryObj->result() AS $item)
                             {
                                 $ministopt .= "<option value=\"".$item->id."\">".$item->name."</option>";
                             }
                         }
                         
                     }
                     
                }
                $data['minisopt']  = $ministopt;
                $data['caseowner'] = $this->mng_auth->GetCaseOwner($this->mng_auth->get_user_id()); 
                //==== date details =====
                $data['b_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),0,0,1);
                $data['b_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),0,0,1);
                $data['b_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),0,0,1);
            
                
                
                $this->lang->load('process',$this->mng_auth->get_language_name());
                //get all submodule list
                $message = $this->load->view("processfrm/case_insert",$data,TRUE);   
                $submodulelink = $this->mng_auth->allsubmodules_bymcode();
                $tab_template  = tab_tpl_cms($submodulelink,$message,"cb",0,"add");
                //provide tab
                //provide template to see
                //place header file
                  
                header_tpl($this->mng_auth->get_language());
                
                //include top banner 
                banner_tpl();
                //load left template
                left_tpl();
                //load right tpl
                right_tpl(); 
                
                content_tpl($tab_template);
                //end of develpers view
                //provide footer
                footer_tpl();    
                
               
            }
            
            
        }
        //add function    
        function addcase($dtype = 1)
        {
            //check if the user is logged in
            //if this user is not logged in and its not admin
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            { 
                
                //check if I have access to case sub module
                //check if I have access role sub module case
               if(1)
               {
                  //check if I have add role to add a case
                  //if the user has data entry role provide a data entry button
                  if($this->mng_auth->IsAddable('ca') || $this->mng_auth->IsAddable('cb'))
                  { 
                   
                    //form validation rules 
                    $this->form_validation->set_rules('n_ministry', "", 'required|trim');    
                    $this->form_validation->set_rules('n_department', "", 'required|trim');    
                    $this->form_validation->set_rules('n_name', "", 'required|trim');    
                    $this->form_validation->set_rules('surname', "", 'trim');    
                    $this->form_validation->set_rules('n_fname',"", 'required|trim');    
                    $this->form_validation->set_rules('n_gfname',"", 'required|trim');    
                    $this->form_validation->set_rules('tazkirano',"", 'trim');    
                    $this->form_validation->set_rules('docidtype',"", 'trim');    
                    $this->form_validation->set_rules('job',"", 'trim');    
                    $this->form_validation->set_rules('phone',"", 'trim');    
                    $this->form_validation->set_rules('n_name2',"", 'required|trim');    
                    $this->form_validation->set_rules('surname2',"", 'trim');    
                    $this->form_validation->set_rules('n_fname2',"", 'required|trim');    
                    $this->form_validation->set_rules('n_gfname2',"", 'required|trim');    
                    $this->form_validation->set_rules('tazkirano2',"", 'trim');    
                    $this->form_validation->set_rules('job2',"", 'trim');    
                    $this->form_validation->set_rules('phone2',"", 'trim');    
                    $this->form_validation->set_rules('n_request_type',"", 'required|trim');
                    $this->form_validation->set_rules('nontranfer',"", 'trim');     
                    $this->form_validation->set_rules('price',"", 'trim');     
                    $this->form_validation->set_rules('area',"", 'trim');     
                    $this->form_validation->set_rules('type',"", 'trim');     
                    $this->form_validation->set_rules('transf',"", 'trim');     
                    $this->form_validation->set_rules('bprice',"", 'trim');   
               /* Request # 3789  (2020-10-05) (Line) - Changes start here */
                    $this->form_validation->set_rules('reg_feesa',"", 'trim');  
                    $this->form_validation->set_rules('bankreca',"", 'trim');     
                    $this->form_validation->set_rules('reg_feesb',"", 'trim');     
                    $this->form_validation->set_rules('bankrecb',"", 'trim');     
                    $this->form_validation->set_rules('reg_feesc',"", 'trim');     
                    $this->form_validation->set_rules('reg_feesd',"", 'trim');  
                    $this->form_validation->set_rules('bankrecd',"", 'trim');              
               /* Request # 3789  (2020-10-05) (Line) - Changes end here */
                    $this->form_validation->set_rules('bquantity',"", 'trim');     
                    $this->form_validation->set_rules('btype',"", 'trim');     
                    $this->form_validation->set_rules('disengage',"", 'trim');     
                    $this->form_validation->set_rules('divorse',"", 'trim');     
                    $this->form_validation->set_rules('separate',"", 'trim');     
                    $this->form_validation->set_rules('nafaqa',"", 'trim');     
                    $this->form_validation->set_rules('hazanat',"", 'trim');     
                    $this->form_validation->set_rules('other_legal_issue',"", 'trim');     
                    $this->form_validation->set_rules('repname',"", 'trim');     
                    $this->form_validation->set_rules('fname',"", 'trim');     
                    $this->form_validation->set_rules('gfname',"", 'trim');     
                    $this->form_validation->set_rules('licenseno',"", 'trim');     
                    $this->form_validation->set_rules('repno',"", 'trim');     
                    $this->form_validation->set_rules('repphone',"", 'trim');     
                    
                    $this->form_validation->set_rules('repname2',"", 'trim');     
                    $this->form_validation->set_rules('fname2',"", 'trim');     
                    $this->form_validation->set_rules('gfname2',"", 'trim');     
                    $this->form_validation->set_rules('licenseno2',"", 'trim');     
                    $this->form_validation->set_rules('repno2',"", 'trim');     
                    $this->form_validation->set_rules('repphone2',"", 'trim');     
    
                    $this->form_validation->set_rules('order_place',"", 'trim');     
                    $this->form_validation->set_rules('court_prdec',"", 'trim');     
                    $this->form_validation->set_rules('place_birth',"", 'trim');     
                    $this->form_validation->set_rules('inviter_profile',"", 'trim');     
                    $this->form_validation->set_rules('inviter_phone',"", 'trim');     
                    $this->form_validation->set_rules('none_invite',"", 'trim');     
                    $this->form_validation->set_rules('invite_letter',"", 'trim');     
                    $this->form_validation->set_rules('zname',"", 'trim');     
                    $this->form_validation->set_rules('zfname',"", 'trim');     
                    $this->form_validation->set_rules('zbplace',"", 'trim');     
                    $this->form_validation->set_rules('zcplace',"", 'trim');     
                    $this->form_validation->set_rules('ztazkirano',"", 'trim');     
                    $this->form_validation->set_rules('zno',"", 'trim');     
                    $this->form_validation->set_rules('zofficialno',"", 'trim');     
                    $this->form_validation->set_rules('zcompanyno',"", 'trim');     
                    $this->form_validation->set_rules('zcompanyloc',"", 'trim');     
                    $this->form_validation->set_rules('zphone',"", 'trim');     
                    $this->form_validation->set_rules('prof_name',"", 'trim');     
                    $this->form_validation->set_rules('prof_fname',"", 'trim');     
                    $this->form_validation->set_rules('prof_office',"", 'trim');     
                    $this->form_validation->set_rules('prof_phone',"", 'trim');     
                    $this->form_validation->set_rules('per_determination',"", 'trim');     
                    $this->form_validation->set_rules('per_amount',"", 'trim');     
                    $this->form_validation->set_rules('per_tenth',"", 'trim');     
                    $this->form_validation->set_rules('per_bankrec',"", 'trim');     
                    $this->form_validation->set_rules('per_refdocs',"", 'trim');     
                    //------3775-----start-----------------------------------
                    $this->form_validation->set_rules('no_of_papers',"", 'trim'); 
                    //------3775------end--------------------------------------------    
                    //-----3809-----start-----------------------------------
                    $this->form_validation->set_rules('other_deps',"", 'trim'); 
                    //------3809------end--------------------------------------------  
                    //-----3884-----start---for Add--------------------------------
                    $this->form_validation->set_rules('rec_number2',"", 'trim'); 
                    $this->form_validation->set_rules('issnumber2',"", 'trim'); 
                    $this->form_validation->set_rules('sender2',"", 'trim'); 
                    $this->form_validation->set_rules('receiver2',"", 'trim'); 
                     //------3884------end----for Add--------------------------------   
                     //------3883------start----for Add--------------------------------   
                    $this->form_validation->set_rules('gpr_type2',"", 'trim'); 
                     //------3883------end----for Add--------------------------------   
                   
                    $this->form_validation->set_rules('per_remarks',"", 'trim');     
                    $this->form_validation->set_rules('per_implement',"", 'trim');
                    
                    $this->form_validation->set_rules('imp_discuss',"", 'trim');     
                    $this->form_validation->set_rules('imp_amount',"", 'trim');     
                    $this->form_validation->set_rules('imp_educ',"", 'trim');     
                    $this->form_validation->set_rules('imp_nextauth',"", 'trim');     
                    $this->form_validation->set_rules('imp_bank',"", 'trim');     
                    $this->form_validation->set_rules('imp_amount',"", 'trim');     
                    $this->form_validation->set_rules('imp_remarks',"", 'trim'); 
                    
                    $this->form_validation->set_rules('invite_no',"", 'trim');     
                    $this->form_validation->set_rules('invite_place',"", 'trim');     
                    $this->form_validation->set_rules('invite_no2',"", 'trim');     
                    $this->form_validation->set_rules('invite_place2',"", 'trim'); 
                    $this->form_validation->set_rules('invite_no3',"", 'trim'); 
                    $this->form_validation->set_rules('invite_place3',"", 'trim');    
                    if ($this->form_validation->run() == FALSE) // validation hasn't been passed 
                    {
                        //provide case owner
                        $data['caseowner'] = $this->mng_auth->GetCaseOwner($this->mng_auth->get_user_id()); 
                        
                        //==== dob details =====
                        $data['b_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),0,0,1);
                        $data['b_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),0,0,1);
                        $data['b_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),0,0,1);
                        
                        //------ required dates ----
                        $data['rb_day']      = $this->datedetails_req(1,0,0,'bday',$this->mng_auth->get_language(),0,0,1);
                        $data['rb_month']    = $this->datedetails_req(0,1,0,'bmonth',$this->mng_auth->get_language(),0,0,1);
                        $data['rb_year']     = $this->datedetails_req(0,0,1,'byear',$this->mng_auth->get_language(),0,0,1);
                      
                        
                        //###################### Get all ministries which access to civil cms ########
                        $ministryObj = $this->mng_auth->GetAllParDeps(array('1000000001'));
                        //GetParentDep
                        //$ministryObj = $this->mng_auth->GetDepartmentByChild($ministries);
                        //---- checkif there is any object  returned
                        if($ministryObj)
                        { 
                             $ministopt = "<option value=\"\" >".$this->lang->line('case_selectdep2')."</option>";
                             foreach($ministryObj->result() AS $item)
                             {
                                 $ministopt .= "<option value=\"".$item->id."_".$item->org_code."\">".$item->name."</option>";
                             } 
                        }
                        $data['minisopt']        = $ministopt;     
                        $data['departments']     = "";
                        
                        $departmentcode = "00";
                        $ministrycode   = "00";
                        $data['departmentcode']  = $departmentcode;
                        $data['ministrycode']    = $ministrycode;
                        // initial crime detection 
                        $req_type = "";
                        $reqObj = $this->statictables_model->GetCaseStatic_Tables2(1,0,0,TRUE,$this->mng_auth->get_language());
                        if($reqObj)
                        {
                            foreach($reqObj->result() as $row)
                            {
                                if($row->id == 1)
                                {
                                    $req_type.="<option value = '".$row->id."' ".set_select('req_type', $row->id,TRUE).">".$row->name_en."</option>";
                                }
                                //Zendesk #1117 activating 'Other' option in the Case subject Dropdown disabled='disabled' value removed from the option tag on line 820 
                                else if($row->id==4)
                                {
                                    $req_type.="<option value = '".$row->id."' ".set_select('req_type', $row->id).">".$row->name_en."</option>";
                                }
                             /* Request # 3866  (2020-10-05) (Line) - Changes start here */
                                else if($row->id==3)
                                {
                                    if($dtype==1){
                                        $req_type.="<option value = '".$row->id."' ".set_select('req_type', $row->id).">".$row->name_en."</option>";
                                    }
                                }
                           /* Request # 3866  (2020-10-05) (Line) - Changes end here */
                                else
                                {
                                   $req_type.="<option value = '".$row->id."' ".set_select('req_type', $row->id).">".$row->name_en."</option>";
                                }
                            }
                        }   
                        // case civil 3739   =========
                          // get rulling_type
                        $rul_type = "";
                        $rul_obj = $this->statictables_model->GetCaseStatic_Tables2(29,0,0,TRUE,$this->mng_auth->get_language());
                        if($rul_obj)
                        {
                            foreach($rul_obj->result() as $row)
                            {
                                $rul_type.="<option value = '".$row->id."' ".set_select('rull_type', $row->id).">".$row->name_en."</option>";    
                            }
                        }        
                        $data['ruling_type'] = $rul_type;
                        // ====== case 3739 end ====================     
                        $data['request_type'] = $req_type;
                        
                        // get gender
                        $gender_type = "";
                        $genderObj = $this->statictables_model->GetCaseStatic_Tables2(21,0,0,TRUE,$this->mng_auth->get_language());
                        if($genderObj)
                        {
                            foreach($genderObj->result() as $row)
                            {
                                $gender_type.="<option value = '".$row->id."' ".set_select('gender1', $row->id).">".$row->name_en."</option>";    
                            }
                        }        
                        $data['gender'] = $gender_type;
                   /* Request # 3789  (2020-10-05) (Line) - Changes start here */
                          // get rulling_type
                        $reg_fee = "";
                        $reg_obj = $this->statictables_model->GetCaseStatic_Tables2(31,0,0,TRUE,$this->mng_auth->get_language());
                        if($reg_obj)
                        {
                            foreach($reg_obj->result() as $row)
                            {
                                $reg_fee.="<option value = '".$row->id."' ".set_select('reg_fees', $row->id).">".$row->name_en."</option>";    
                            }
                        }        
                        $data['registeration_fees'] = $reg_fee;
               /* Request # 3789  (2020-10-05) (Line) - Changes end here */
                        // get province
                        $province_opt = "";
                        //$allpr = $this->province_model->GetAllProvinces(0,0,TRUE,$this->mng_auth->get_language());
                        $allpr = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());                     
                        if($allpr)
                        {
                            if($allpr->num_rows()>0)
                            {
                                foreach($allpr->result() as $item=>$val)
                                {
                                    $province_opt.="<option value ='".$val->code."' ".set_select('n_prov',$val->code).">".$val->name."</option>";  
                                }
                            }
                        }
                        $data['province'] = $province_opt;  
                        $data['district'] = "";  
                        //############### tab type ##################
                        
                         $this->load->model('users/user_model');
                    
                        $AllDepObj = $this->user_model->getAllDepartmentsbyMod($this->mng_auth->get_language(),$this->mng_auth->default_mod,1);
                        //---- get departments ----
                        $senders_opt   = "";
                        $receivers_opt = "";
                        if($AllDepObj)
                        {
                            foreach($AllDepObj->result() AS $item)
                            {
                               $senders_opt.="<option value=\"".$item->id."\">".$item->name."</option>";
                               $receivers_opt.="<option value=\"".$item->id."\">".$item->name."</option>";
                            } 
                        }
                        $data['senders']   = $senders_opt;
                        $data['receivers'] = $receivers_opt;
                        
                        //check the tab type
                        $tabtype = "";
                        if($dtype == "2") {$tabtype = "cb";} else {$tabtype = "ca";}
                        //get all submodule list
                         //====get country list and provide Afghanistan selection ====
                        $allcountry = $this->province_model->GetAllCountries($this->mng_auth->get_language());
                        $country_opt = "";
                        if($allcountry)
                        {
                            if($allcountry->num_rows()>0)
                            {
                                foreach($allcountry->result() as $item=>$val)
                                {
                                    //set selected option
                                    if($val->id ==  1)
                                    {
                                        $country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id,TRUE).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id).">".$val->name."</option>";  
                                    }
                                }
                            }
                        } 
                        $data['country_opt'] = $country_opt;
                        
                        $am_tpl = "";
                        $perf_tpl = "";
                        if($dtype == "2")
                        {
                            $am_tpl = $this->load->view("gcase/gcase_am",$data,TRUE);   

                            //-3883-------start-added to populated the type drop down while adding ---
                              $req_type4 = "";
                            $reqObj4 = $this->statictables_model->GetCaseStatic_Tables2(22,0,0,TRUE,$this->mng_auth->get_language());
                            if($reqObj4)
                            {
                                foreach($reqObj4->result() as $row)
                                {
                                    $req_type4.="<option value = '".$row->id."'>".$row->name_en."</option>";
                                }
                            } 

                             $data['type4'] = $req_type4;
                            //-3883---------end-added to populated the type drop down while adding --- 
                            $perf_tpl = $this->load->view("gcase/gcase_perf",$data,TRUE); 
                            
                            //load language file too of ghuquq
                            $req_type = "";
                            $reqObj = $this->statictables_model->GetCaseStatic_Tables2(22,0,0,TRUE,$this->mng_auth->get_language());
                            if($reqObj)
                            {
                                foreach($reqObj->result() as $row)
                                {
                                    $req_type.="<option value = '".$row->id."'>".$row->name_en."</option>";
                                }
                            } 
                            
                            //load dropdown data for Court Desession
                            $dec_type = "";
                            $decObj = $this->statictables_model->GetCaseStatic_Tables2(23,0,0,TRUE,$this->mng_auth->get_language());
                            if($decObj)
                            {
                                foreach($decObj->result() as $row)
                                {
                                    $dec_type.="<option value = '".$row->id."'>".$row->name_en."</option>";
                                }
                            }  
                            
                            //load dropdown data for land
                            $land_type = "";
                            $decObj = $this->statictables_model->GetCaseStatic_Tables2(24,0,0,TRUE,$this->mng_auth->get_language());
                            if($decObj)
                            {
                                foreach($decObj->result() as $row)
                                {
                                    $land_type.="<option value = '".$row->id."'>".$row->name_en."</option>";
                                }
                            } 
                            //load dropdown data for money
                            $money_type = "";
                            $decObj = $this->statictables_model->GetCaseStatic_Tables2(25,0,0,TRUE,$this->mng_auth->get_language());
                            if($decObj)
                            {
                                foreach($decObj->result() as $row)
                                {
                                    $money_type.="<option value = '".$row->id."'>".$row->name_en."</option>";
                                }
                            }
                            
                            //load dropdown data for other
                            $other_type = "";
                            $decObj = $this->statictables_model->GetCaseStatic_Tables2(26,0,0,TRUE,$this->mng_auth->get_language());
                            if($decObj)
                            {
                                foreach($decObj->result() as $row)
                                {
                                    $other_type.="<option value = '".$row->id."'>".$row->name_en."</option>";
                                }
                            }
                            /* ticket 4007 ------------------------- */
                             $dec_type_oth = "";
                            $decObj_oth = $this->statictables_model->GetCaseStatic_Tables2(32,0,0,TRUE,$this->mng_auth->get_language());
                            if($decObj_oth)
                            {
                                foreach($decObj_oth->result() as $row)
                                {
                                    $dec_type_oth.="<option value = '".$row->id."'>".$row->name_en."</option>";
                                }
                            }  
                            $data['court_dec_oth'] = $dec_type_oth;
                            /* ticket 4007 end ------------------- */
                                   
                            $data['type'] = $req_type;
                            $data['court_dec'] = $dec_type;
                            $data['land_type'] = $land_type;
                            $data['money_type'] = $money_type;
                            $data['other_type'] = $other_type;
                            
                            $data['day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),0,0,1);
                            $data['month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),0,0,1);
                            $data['year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),0,0,1);
                              
                        }
                        else
                        {
                            $am_tpl   = $this->load->view("case/law_am",$data,TRUE); 
                            $perf_tpl = $this->load->view("case/law_perf",$data,TRUE); 
                        }
                        //send areez marooz template
                        $data['lawgcase_amtype'] = $am_tpl;
                        $data['perf'] = $perf_tpl;
                        $data['dtype'] = $dtype;
                        
                        // get Crime type
                        $crime = "";
                        $crimetitle = $this->crime_type_model->GetAllRecords(0,0,TRUE,$this->mng_auth->get_language());
                        if($crimetitle)
                        {
                            foreach($crimetitle->result() as $row)
                            {
                                $crime.="<option value = '".$row->id."' ".set_select('n_type', $row->id).">".$row->name."</option>";
                            }
                        }
                        $data['crime'] = $crime;     
                        $message       = $this->load->view("case/case_insert",$data,TRUE);   
                        $submodulelink = $this->mng_auth->allsubmodules_bymcode();
                        $tab_template  = tab_tpl_cms($submodulelink,$message,$tabtype,0,"add");
                        //provide tab
                        //provide template to see
                        //place header file
                          
                        header_tpl($this->mng_auth->get_language());
                        
                        //include top banner 
                        banner_tpl();
                        //load left template
                        left_tpl();
                        //load right tpl
                        right_tpl(); 
                        
                        content_tpl($tab_template);
                        //end of develpers view
                        //provide footer
                        footer_tpl();               
                    }
                    else
                    {
                       
                        //########## check case number and insert or contineu ############# 
                        // === check for the posted data and insert into the database ===
                        $casenumber = $this->input->post('mincode')."-".$this->input->post('depcode')."-".$this->input->post('prcode')."-".$this->input->post('discode')."-".$this->input->post('yearcode')."-".$this->input->post('d1').$this->input->post('d2').$this->input->post('d3').$this->input->post('d4');
                        //---- check case number and redirect in case if case number exists---
                        //=== get one record of the case ===
                        $caserow = $this->case_model->GetOneRecord("law","case_number,id","case_number",$casenumber);
                        //--- check if the case exist ---
                        if($caserow)
                        {
                           if($caserow->num_rows()>0)
                           {
                               
                                $this->session->set_flashdata('msg','<div class="error">'.$this->lang->line('det_invalid').'</div>');
                                redirect('case/home/addcase','refresh');    
                           }
                           
                        } 
                        
                        $depid = "";
                        $minid = "";
                        $dep = explode("_",$this->input->post('n_department'));
                        $minist = explode("_",$this->input->post('n_ministry'));
                        $depid = $dep[0];
                        $minid = $minist[0];
                        
                        //====== vissue date attorney date ===
                        $vissue_date    = datecheck($this->input->post('attyear'),$this->input->post('attmonth'),$this->input->post('attday'),$this->mng_auth->get_language());  
                        $vdoc_date      = datecheck($this->input->post('n_vdoc_year'),$this->input->post('n_vdoc_month'),$this->input->post('n_vdoc_day'),$this->mng_auth->get_language());  
                        //$invite_date  = datecheck($this->input->post('invite_year'),$this->input->post('invite_month'),$this->input->post('invite_day'),$this->mng_auth->get_language());  
                        $zdate    = datecheck($this->input->post('zyear'),$this->input->post('zmonth'),$this->input->post('zday'),$this->mng_auth->get_language());  
                        $brecdate    = datecheck($this->input->post('bryear'),$this->input->post('brmonth'),$this->input->post('brday'),$this->mng_auth->get_language());  
               /* Request # 3789  (2020-10-05) (Line) - Changes start here */
                        $brecdate_pr    = datecheck($this->input->post('bryeara'),$this->input->post('brmontha'),$this->input->post('brdaya'),$this->mng_auth->get_language());
                        $brecdate_bu    = datecheck($this->input->post('bryearb'),$this->input->post('brmonthb'),$this->input->post('brdayb'),$this->mng_auth->get_language());
                        $brecdate_oth    = datecheck($this->input->post('bryeard'),$this->input->post('brmonthd'),$this->input->post('brdayd'),$this->mng_auth->get_language());
               /* Request # 3789  (2020-10-05) (Line) - Changes end here */
                        //rep date 1
                        $attrepdate   = datecheck($this->input->post('repnoyear'),$this->input->post('repnomonth'),$this->input->post('repnoday'),$this->mng_auth->get_language());  
                        $attrepdate2    = datecheck($this->input->post('repnoyear2'),$this->input->post('repnomonth2'),$this->input->post('repnoday2'),$this->mng_auth->get_language());  
                        
                        $invite_date    = datecheck($this->input->post('invite_year'),$this->input->post('invite_month'),$this->input->post('invite_day'),$this->mng_auth->get_language());      
                        $invite_date2   = datecheck($this->input->post('invite_year2'),$this->input->post('invite_month2'),$this->input->post('invite_day2'),$this->mng_auth->get_language());      
                        $invite_date3   = datecheck($this->input->post('invite_year3'),$this->input->post('invite_month3'),$this->input->post('invite_day3'),$this->mng_auth->get_language());      
                        
                        $save_date      = datecheck($this->input->post('svyear'),$this->input->post('svmonth'),$this->input->post('svday'),$this->mng_auth->get_language());      
                        $doc_reg_date      = datecheck($this->input->post('reg_year'),$this->input->post('reg_month'),$this->input->post('reg_day'),$this->mng_auth->get_language());      
                        //-3884------start-added for saving recieve date and send date------
                         $doc_reci_date      = datecheck($this->input->post('ryear2'),$this->input->post('rmonth2'),$this->input->post('rday2'),$this->mng_auth->get_language()); 
                        $doc_send_date      = datecheck($this->input->post('syear2'),$this->input->post('smonth2'),$this->input->post('sday2'),$this->mng_auth->get_language());       
                        //-3884----end-added for saving recieve date and send date------   
                        
                        //=== get crime types and add to database ===
                        $crtype =$this->input->post('crimetypes'); 
                        $crimeTypes = "";
                        if(count($crtype)>0 && is_array($crtype))
                        {
                             //---check if there is any -1 found
                             if(in_array("-1",$crtype))
                             {
                                unset($crtype[0]); 
                             }
                             if(count($crtype)>1)
                             {
                                $crimeTypes = implode(",",$crtype);
                             }
                             else
                             {
                                sort($crtype);
                                if(count($crtype)>0)
                                { 
                                    $crimeTypes = $crtype[0];
                                }
                             }
                        }
               /* Request # 3789  (2020-10-05) (Line) - Changes start here */
                         $rega="";
                         $regb="";
                         $regc="";
                         if ($this->input->post('n_request_type')==1){
                            $rega=1;
                         }
                         else if ($this->input->post('n_request_type')==2){
                            $regb=2;
                         }
                         else if ($this->input->post('n_request_type')==3){
                            $regc=3;
                         }
               /* Request # 3789  (2020-10-05) (Line) - Changes end here */
                        //==== form data ====
                        $form_data = array(
                                            'case_number'            =>$casenumber, 
                                            'crime_type'             =>$crimeTypes,         
                                            'dtype'                  =>$dtype,   
                                            'ar_type'                =>$this->input->post('n_request_type'),
                                            'pr_nontransf'           =>$this->input->post('nontranfer'),
                                            'pr_price'               =>$this->input->post('price'),
                                            'pr_borderarea'          =>$this->input->post('area'),
                                            'pr_type'                =>$this->input->post('type'),
                                            'pr_province'            =>$this->input->post('plocation'),
                                            'pr_district'            =>$this->input->post('plocdist'),
                                            'pr_village'             =>$this->input->post('plocvillage'),
                                            'bs_transf'              =>$this->input->post('transf'),
                                            'bs_price'               =>$this->input->post('bprice'),
                                         /* Request # 3789  (2020-10-05) (Line) - Changes start here */
                                            'reg_fees_pr'            =>$rega,
                                            'per_bankrec_pr'         =>$this->input->post('bankreca'),
                                            'per_bankrecdate_pr'     =>$brecdate_pr,
                                            'reg_fees_bus'           =>$regb,
                                            'per_bankrec_bus'        =>$this->input->post('bankrecb'),
                                            'per_bankrecdate_bus'    =>$brecdate_bu,
                                            'reg_fees_fam'           =>$regc,
                                            'reg_fees_oth'        =>$this->input->post('reg_feesd'),
                                            'per_bankrec_oth'        =>$this->input->post('bankrecd'),
                                            'per_bankrecdate_oth'    =>$brecdate_oth,
                                          /* Request # 3789  (2020-10-05) (Line) - Changes end here */
                                            'bs_quantity'            =>$this->input->post('bquantity'),
                                            'bs_type'                =>$this->input->post('btype'),
                                            'bs_province'            =>$this->input->post('ploc2'),
                                            'bs_district'            =>$this->input->post('plocdist2'),
                                            'bs_village'             =>$this->input->post('plocvillage2'),
                                            'fm_disnom'              =>$this->input->post('disengage'),
                                            'fm_divorce'             =>$this->input->post('divorse'),
                                            'fm_tafriq'              =>$this->input->post('separate'),
                                            'fm_nafkusut'            =>$this->input->post('nafaqa'),
                                            'fm_hazanat'             =>$this->input->post('hazanat'),
                                            'other_law_type'         =>$this->input->post('other_legal_issue'),
                                            'att_name'               =>$this->input->post('repname'),
                                            'att_fname'              =>$this->input->post('fname'),
                                            'att_gfname'             =>$this->input->post('gfname'),
                                            'att_license'             =>$this->input->post('licenseno'),
                                            'att_repno'             =>$this->input->post('repno'),
                                            'att_repdate'            =>$attrepdate,
                                            'att_phone'             =>$this->input->post('repphone'),    
                                            'att_name2'               =>$this->input->post('repname2'),
                                            'att_fname2'              =>$this->input->post('fname2'),
                                            'att_gfname2'             =>$this->input->post('gfname2'),
                                            'att_license2'             =>$this->input->post('licenseno2'),
                                            'att_repno2'             =>$this->input->post('repno2'),
                                            'att_repdate2'            =>$attrepdate2,
                                            'att_phone2'             =>$this->input->post('repphone2'),
                                            'att_pbprovince'         =>$this->input->post('repprovince'),
                                            'att_pbdistrict'         =>$this->input->post('repdistrict'),
                                            'att_pbvillage'          =>$this->input->post('repvillage'),
                                            'att_pbprovince2'         =>$this->input->post('repprovince2'),
                                            'att_pbdistrict2'         =>$this->input->post('repdistrict2'),
                                            'att_pbvillage2'          =>$this->input->post('repvillage2'),
                                            'hq_presdate'            =>$vissue_date,
                                            'hq_placeissue'          =>$this->input->post('order_place'),
                                            'hq_issuedate'           =>$vdoc_date,
                                            'hq_prdecision'          =>$this->input->post('court_prdec'),
                                            'hq_inviteno'            =>$this->input->post('invite_no'),
                                            'hq_invitedate'          =>$invite_date,
                                            'hq_invite_place'        =>$this->input->post('invite_place'),
                                            'hq_inviteno2'            =>$this->input->post('invite_no2'),
                                            'hq_invitedate2'          =>$invite_date2,
                                            'hq_invite_place2'        =>$this->input->post('invite_place2'),
                                            'hq_inviteno3'            =>$this->input->post('invite_no3'),
                                            'hq_invitedate3'          =>$invite_date3,
                                            'hq_invite_place3'        =>$this->input->post('invite_place3'),
                                            'hq_address'              =>$this->input->post('place_birth'),
                                            'hq_jalbrec'              =>$this->input->post('inviter_profile'),
                                            'hq_jalbphone'            =>$this->input->post('inviter_phone'),
                                            'hq_jalbsave'             =>$this->input->post('none_invite'),
                                            //--New added
                                            'hq_jalbsavedate'         =>$save_date,
                                            'hq_regdate'              =>$doc_reg_date,
                                            
                                            'hq_jalbfollow'           =>$this->input->post('invite_letter'),
                                            'hq_zname'                =>$this->input->post('zname'),
                                            'hq_zfname'               =>$this->input->post('zfname'),
                                            'hq_zpbaddress'           =>$this->input->post('zbplace'),
                                            'hq_zcurrentplace'        =>$this->input->post('zcplace'),
                                            'hq_ztazkirano'           =>$this->input->post('ztazkirano'),
                                            'hq_znumber'              =>$this->input->post('zno'),
                                            'hq_zadate'               => $zdate,
                                            'hq_zlicense'              =>$this->input->post('zofficialno'),
                                            'hq_zcompany'              =>$this->input->post('zcompanyno'),
                                            'hq_zcomaddress'           =>$this->input->post('zcompanyloc'),
                                            'hq_zphone'               =>$this->input->post('zphone'),
                                            'per_name'               =>$this->input->post('prof_name'),
                                            'per_fname'               =>$this->input->post('prof_fname'),
                                            'per_department'          =>$this->input->post('prof_office'),
                                            'per_phone'               =>$this->input->post('prof_phone'),
                                            'per_iswritten'           =>$this->input->post('per_iswritten'),
                                            'per_isrecon'             =>$this->input->post('per_isrecon'),
                                            'per_determination'       =>$this->input->post('per_determination'),
                                            'per_amount'              =>$this->input->post('per_amount'),
                                            'per_tenth'               =>$this->input->post('per_tenth'),
                                            'per_bankrec'             =>$this->input->post('per_bankrec'),
                                            'per_bankrecdate'         =>$brecdate,
                                            'per_refdoc'              =>$this->input->post('per_refdocs'),
                               //-----------------3775---start-----------------
                            'no_of_paper'              =>$this->input->post('no_of_papers'),
                            //---------------3775---start----------------------------
                             //-----------------3809---start-----------------
                            'other_dep'              =>$this->input->post('other_deps'),
                             //---------------3809---start----------------------------
                            //-3884---start-added to save the newly added fields----------------
                            'rec_number2'              =>$this->input->post('rec_number2'),
                            'send_date2'                =>$doc_send_date,
                            'rec_date2'                 =>$doc_reci_date,
                            'issue_number2'              =>$this->input->post('issnumber2'),
                            'sender33'              =>$this->input->post('sender2'),
                            'receiver33'              =>$this->input->post('receiver2'),
                            //-3884---end-added to save the newly added fields----------------
                            //-3883---start-added to save the newly added fields----------------
                            'type2'              =>$this->input->post('gpr_type2'),
                            //-3883---end-added to save the newly added fields----------------
                                            'remarks'                 =>$this->input->post('per_remarks'),
                                            'order_province'          =>$this->input->post('n_province2'),
                                            'order_district'          =>$this->input->post('n_district2'),
                                            'userid'               =>$this->mng_auth->get_user_id(), 
                                            'department'           =>$depid, 
                                            'ministry'             =>$minid, 
                                            'registerdate'             =>date('Y-m-d H:i:s'),
                                            'gper_negotiate'           =>$this->input->post('negotiate'),
                                             //  ticket 3739 ===============
                                            'rulling_type'           =>$this->input->post('rull_type'),
                                             // ticket 3739   end =====================
                                            //'gper_isrecon'             =>$this->input->post('solut'),
                                            'gper_verif'               =>$this->input->post('verif'),
                                            'gper_implement'           =>$this->input->post('per_implement'), 
                                            'ploc_country'           =>$this->input->post('ploc_country'), 
                                            'ploc_country2'           =>$this->input->post('ploc_country2'), 
                                            'rep_country'           =>$this->input->post('rep_country'), 
                                            'rep_country2'           =>$this->input->post('rep_country2'), 
                                            'order_country'           =>$this->input->post('order_country'), 
                         );
                        // run insert model to write data to db
                        if ($this->case_model->AddCase($form_data,$this->mng_auth->get_user_id()) == TRUE) 
                        {  
                            //UPLOAD FILES and pictures
                            $lastcaseid  = $this->case_model->lastInsertid;
                            
                            //------- get areez details and add to its table----
                            $areezdata = array(
                                            'ar_name'               =>$this->input->post('n_name'),
                                            'ar_surname'            =>$this->input->post('surname'),
                                            'ar_fname'              =>$this->input->post('n_fname'),
                                            'ar_gfname'             =>$this->input->post('n_gfname'),
                                            'ar_tazkirano'          =>$this->input->post('tazkirano'),
                                            'ar_job'                =>$this->input->post('job'),
                                            'ar_docnotype'          =>$this->input->post('docidtype'),
                                            'ar_phone'              =>$this->input->post('phone'),
                                            'ar_pbprovince'         =>$this->input->post('ar_pbprovince'),
                                            'ar_pbdistrict'         =>$this->input->post('ar_pbdistrict'),
                                            'ar_pbvillage'          =>$this->input->post('ar_pbvillage'),
                                            'ar_pcprovince'         =>$this->input->post('pcprovince'),
                                            'ar_pcdistrict'         =>$this->input->post('pcdistrict'),
                                            'ar_pcvillage'          =>$this->input->post('pcvillage'),
                                            'gender'                =>$this->input->post('gender1'),
                                            'pb_country'            =>$this->input->post('pb_country'),
                                            'pc_country'            =>$this->input->post('pc_country'),
                                            'kochi'                 =>$this->input->post('kochi'),
                                            'case_urn'              =>$lastcaseid,
                                            'userid'                =>$this->mng_auth->get_user_id(), 
                                            'department'            =>$this->input->post('n_department'), 
                                            'ministry'              =>$this->input->post('n_ministry'), 
                                            'registerdate'          =>date('Y-m-d H:i:s'),    
                            );
                            $this->case_model->AddAreez($areezdata);
                            //########## Get Marooz Details ################
                            $maroozdata = array(
                                            'mr_name'                =>$this->input->post('n_name2'),
                                            'mr_surname'             =>$this->input->post('surname2'),
                                            'mr_fname'               =>$this->input->post('n_fname2'),
                                            'mr_gfname'              =>$this->input->post('n_gfname2'),
                                            'mr_tazkirano'           =>$this->input->post('tazkirano2'),
                                            'mr_job'                 =>$this->input->post('job2'),
                                            'mr_doctypeno'           =>$this->input->post('docidtype2'),
                                            'mr_phone'               =>$this->input->post('phone2'),
                                            'mr_pbprovince'          =>$this->input->post('pbprovince2'),
                                            'mr_pbdistrict'          =>$this->input->post('pbdistrict2'),
                                            'mr_pbvillage'           =>$this->input->post('pbvillage2'),
                                            'mr_pcprovince'          =>$this->input->post('pcprovince2'),
                                            'mr_pcdistrict'          =>$this->input->post('pcdistrict2'),
                                            'mr_pcvillage'           =>$this->input->post('pcvillage2'),
                                            'gender'                =>$this->input->post('gender2'),
                                            'pb_country'            =>$this->input->post('pb_country2'),
                                            'pc_country'            =>$this->input->post('pc_country2'),
                                            'kochi'                 =>$this->input->post('kochi2'),
                                            'case_urn'              =>$lastcaseid,
                                            'userid'                =>$this->mng_auth->get_user_id(), 
                                            'department'            =>$this->input->post('n_department'), 
                                            'ministry'              =>$this->input->post('n_ministry'), 
                                            'registerdate'          =>date('Y-m-d H:i:s'),    
                            );
                            $this->case_model->AddMarooz($maroozdata);
                            
                            //---- addmultiple sender and receiver to the database ----
                            $rec_number = $this->input->post('rec_number');
                            $rec_dateday = $this->input->post('rday');
                            $rec_datemonth = $this->input->post('rmonth');
                            $rec_dateyear = $this->input->post('ryear');
                            $sender = $this->input->post('sender');
                            
                            $send_dateday = $this->input->post('sday');
                            $send_datemonth = $this->input->post('smonth');
                            $send_dateyear = $this->input->post('syear');
                            $issnumber = $this->input->post('issnumber');
                            $receiver = $this->input->post('receiver');
                            
                            //batch data
                            $batch_data = array();
                            
                            //----batch insert by providing array ---
                            if(is_array($rec_number) && isset($rec_number) && count($rec_number) >0)
                            {
                                foreach($rec_number AS $key => $val)
                                {
                                    //name val and other section key
                                    //other selection
                                    if(trim($val) != "" && $sender[$key] != "")
                                    {
                                        $rec_date    = datecheck($rec_dateyear[$key],$rec_datemonth[$key],$rec_dateday[$key],$this->mng_auth->get_language());  
                                        $send_date    = datecheck($send_dateyear[$key],$send_datemonth[$key],$send_dateday[$key],$this->mng_auth->get_language());  
                                      
                                        $prdepid = array(
                                              'case_urn'      => $lastcaseid,
                                              'rec_number'    => $val,
                                              'rec_date'      => $rec_date,
                                              'sender'        => $sender[$key],
                                              'issue_number'  => $issnumber[$key],
                                              'send_date'     => $send_date, 
                                              'receiver'      => $receiver[$key] 
                                          );
                                        //push in a global array
                                        array_push($batch_data,$prdepid);
                                    } 
                                      
                                }
                            }
                            if(count($batch_data)>0)
                            {
                                //--- insert batch data ---
                                $this->case_model->addLawSendRe($batch_data);  
                            }  
                            //encrypt case urn
                            $en_caseurn = $this->clean_encrypt->encode($lastcaseid.'='.$lastcaseid);
                            //set success message for the end user
                            //check form type 
                            $msg = "";
                            if($dtype == "2")
                            {
                                //START OF PRIMARY$$$$$
                                $type = $this->input->post('gpr_type');
                                $rec_dateday = $this->input->post('gpr_rday');
                                $rec_datemonth = $this->input->post('gpr_rmonth');
                                $rec_dateyear = $this->input->post('gpr_ryear');
                                $rec_number = $this->input->post('gpr_rec_number');
                                //issue date and number
                                $iss_dateday = $this->input->post('gpr_issday');
                                $iss_datemonth = $this->input->post('gpr_issmonth');
                                $iss_dateyear = $this->input->post('gpr_issyear');
                                $iss_number = $this->input->post('gpr_iss_number');

                                $andraj_number  = $this->input->post('gpr_andraj_number');  
                                $auth_next  = $this->input->post('gpr_next_auth');  
                                $name  = $this->input->post('gpr_name');  
                                $fname  = $this->input->post('gpr_fathername');  
                                $phone  = $this->input->post('gpr_phone');  
                                // gov benefit or lost for after court section 
                                $gov_benefit  = $this->input->post('n_gpr_court_dec');
                                /* ticket 4007 start here -------------- */
                                $gov_benefit_nxt  = $this->input->post('court_dec_next');
                                /* ticket 4007 end here -------------- */
                                //$land  = $this->input->post('gpr_land');  
                                $land_type  = $this->input->post('gpr_land_type');  
                                $land_value  = $this->input->post('gpr_land_value');  
                                //$money  = $this->input->post('gpr_money');  
                                $money_type = $this->input->post('gpr_money_type');  
                                $money_value  = $this->input->post('gpr_money_value');  
                                //$other  = $this->input->post('gpr_other');  
                                $other_type  = $this->input->post('gpr_other_type');  
                                $other_value   = $this->input->post('gpr_other_value');  
                                
                                $pr_day = $this->input->post('gpr_prday');
                                $pr_month = $this->input->post('gpr_prmonth');
                                $pr_year = $this->input->post('gpr_pryear');
                                
                                $dpr_day = $this->input->post('gpr_dprday');
                                $dpr_month = $this->input->post('gpr_dprmonth');
                                $dpr_year = $this->input->post('gpr_dpryear');
                                
                                
                                
                                //batch data
                                $batch_data = array(); 
                                //----batch insert by providing array ---
                                if($gov_benefit && $gov_benefit !=""){
                                foreach($rec_number AS $key => $val)
                                {
                                    //name val and other section key
                                    //other selection
                                    if(trim($val) != "")
                                    {
                                        $rec_date    = datecheck($rec_dateyear[$key],$rec_datemonth[$key],$rec_dateday[$key],$this->mng_auth->get_language());  
                                        $iss_date    = datecheck($iss_dateyear[$key],$iss_datemonth[$key],$iss_dateday[$key],$this->mng_auth->get_language());  
                                      
                                        //provided date
                                        $pr_date    = datecheck($pr_year[$key],$pr_month[$key],$pr_day[$key],$this->mng_auth->get_language()); 
                                        //defendant provided date
                                        $dpr_date    = datecheck($dpr_year[$key],$dpr_month[$key],$dpr_day[$key],$this->mng_auth->get_language()); 
                                      
                                        $prdepid = array(
                                              'case_urn'          => $lastcaseid,
                                              'type'              => $type[$key],
                                              'table_type'        => "1",
                                              'rec_date'          => $rec_date,
                                              'rec_number'        => $rec_number[$key],
                                              'iss_date'          => $iss_date,   
                                              'iss_number'        => $iss_number[$key],
                                              'andraj_number'     => $andraj_number[$key],
                                              'next_auth'         => $auth_next[$key],
                                              'name'              => $name[$key],
                                              'fathername'        => $fname[$key],
                                              'telephone'         => $phone[$key],
                                              'gov_benefit'       => $gov_benefit[$key],
                                              /* ticket 4007 start here ------------ */
                                              'gov_benefit_nxt'       => $gov_benefit_nxt[$key],
                                              /* ticket 4007 end here -------------  */
                                              //'land_fine'         => $land[$key],
                                              'land_type'         => $land_type[$key],
                                              'land_value'        => $land_value[$key],
                                              //'money_fine'        => $money[$key],
                                              'money_type'        => $money_type[$key],
                                              'money_value'       => $money_value[$key],
                                              //'other_fine'        => $other[$key],
                                              'other_type'        => $other_type[$key],
                                              'other_value'       => $other_value[$key],
                                              'provide_date'      => $pr_date,
                                              'defprovide_date'   => $dpr_date,
                                              'userid'            => $this->mng_auth->get_user_id(),
                                              'registerdate'      => date('Y-m-d H:i:s'),
                                              'department'        =>$this->input->post('n_department'), 
                                              'ministry'          =>$this->input->post('n_ministry'),
                                          );
                                        //push in a global array
                                       // print_r($prdepid);exit;
                                        array_push($batch_data,$prdepid);
                                    } 
                                      
                                }
                                }
                                if(count($batch_data)>0)
                                {
                                    //--- insert batch data ---
                                    $this->ghuquq_model->addImplementation($batch_data);  
                                }
                                //=======END OF PRIMARY =====
                                //===============START OF APPELLATE
                                $type = $this->input->post('app_type');
                                $rec_dateday = $this->input->post('app_rday');
                                $rec_datemonth = $this->input->post('app_rmonth');
                                $rec_dateyear = $this->input->post('app_ryear');
                                $rec_number = $this->input->post('app_rec_number');
                                //issue date and number
                                $iss_dateday = $this->input->post('app_issday');
                                $iss_datemonth = $this->input->post('app_issmonth');
                                $iss_dateyear = $this->input->post('app_issyear');
                                $iss_number = $this->input->post('app_iss_number');

                                $andraj_number  = $this->input->post('app_andraj_number');  
                                $auth_next  = $this->input->post('app_next_auth');  
                                $name  = $this->input->post('app_name');  
                                $fname  = $this->input->post('app_fathername');  
                                $phone  = $this->input->post('app_phone');  
                                // gov benefit or lost for after court section 
                                $gov_benefit  = $this->input->post('n_app_court_dec');
                                /* ticket 4007 ----------------- */
                                $gov_benefit_nxt  = $this->input->post('court_app_next');  
                                /* ticket 4007 end ----------------  */  
                                //$land  = $this->input->post('app_land');  
                                $land_type  = $this->input->post('app_land_type');  
                                $land_value  = $this->input->post('app_land_value');  
                                //$money  = $this->input->post('app_money');  
                                $money_type = $this->input->post('app_money_type');  
                                $money_value  = $this->input->post('app_money_value');  
                                //$other  = $this->input->post('app_other');  
                                $other_type  = $this->input->post('app_other_type');  
                                $other_value   = $this->input->post('app_other_value');
                                
                                
                                $pr_day = $this->input->post('app_prday');
                                $pr_month = $this->input->post('app_prmonth');
                                $pr_year = $this->input->post('app_pryear');
                                
                                $dpr_day = $this->input->post('app_dprday');
                                $dpr_month = $this->input->post('app_dprmonth');
                                $dpr_year = $this->input->post('app_dpryear');
                                //batch data
                                $batch_data = array(); 
                                //----batch insert by providing array ---
                                if($gov_benefit && $gov_benefit!=""){
                                foreach($rec_number AS $key => $val)
                                {
                                    //name val and other section key
                                    //other selection
                                    if(trim($val) != "")
                                    {
                                        $rec_date    = datecheck($rec_dateyear[$key],$rec_datemonth[$key],$rec_dateday[$key],$this->mng_auth->get_language());  
                                        $iss_date    = datecheck($iss_dateyear[$key],$iss_datemonth[$key],$iss_dateday[$key],$this->mng_auth->get_language());  
                                      
                                        //provided date
                                        $pr_date    = datecheck($pr_year[$key],$pr_month[$key],$pr_day[$key],$this->mng_auth->get_language()); 
                                        //defendant provided date
                                        $dpr_date    = datecheck($dpr_year[$key],$dpr_month[$key],$dpr_day[$key],$this->mng_auth->get_language()); 
                                      
                                        $prdepid = array(
                                              'case_urn'      => $lastcaseid,
                                              'type'          => $type[$key],
                                              'table_type'    => "2",
                                              'rec_date'          => $rec_date,
                                              'rec_number'        => $rec_number[$key],
                                              'iss_date'          => $iss_date,   
                                              'iss_number'        => $iss_number[$key],
                                              'andraj_number'     => $andraj_number[$key],
                                              'next_auth'         => $auth_next[$key],
                                              'name'              => $name[$key],
                                              'fathername'        => $fname[$key],
                                              'telephone'         => $phone[$key],
                                              'gov_benefit'       => $gov_benefit[$key],
                                              /* ticket 4007 start ----------  */
                                              'gov_benefit_nxt'       => $gov_benefit_nxt[$key],
                                              /*  ticket 4007 end -------------  */
                                              //'land_fine'         => $land[$key],
                                              'land_type'         => $land_type[$key],
                                              'land_value'        => $land_value[$key],
                                              //'money_fine'        => $money[$key],
                                              'money_type'        => $money_type[$key],
                                              'money_value'       => $money_value[$key],
                                              //'other_fine'        => $other[$key],
                                              'other_type'        => $other_type[$key],
                                              'other_value'       => $other_value[$key],
                                              'provide_date'      => $pr_date,
                                              'defprovide_date'   => $dpr_date,
                                              'userid'            => $this->mng_auth->get_user_id(),
                                              'registerdate'      => date('Y-m-d H:i:s'),
                                              'department'        =>$this->input->post('n_department'), 
                                              'ministry'          =>$this->input->post('n_ministry'),
                                          );
                                        //push in a global array
                                        array_push($batch_data,$prdepid);
                                    } 
                                      
                                }
                                }
                                if(count($batch_data)>0)
                                {
                                    //--- insert batch data ---
                                    $this->ghuquq_model->addImplementation($batch_data);  
                                }
                                
                                //============END OF APPELLATE IMPLEMENTATION-=======
                                
                                //============start OF tajdednazar -=======
                                 $type = $this->input->post('taj_type');
                                $rec_dateday = $this->input->post('taj_rday');
                                $rec_datemonth = $this->input->post('taj_rmonth');
                                $rec_dateyear = $this->input->post('taj_ryear');
                                $rec_number = $this->input->post('taj_rec_number');
                                //issue date and number
                                $iss_dateday = $this->input->post('taj_issday');
                                $iss_datemonth = $this->input->post('taj_issmonth');
                                $iss_dateyear = $this->input->post('taj_issyear');
                                $iss_number = $this->input->post('taj_iss_number');
                                
                                //batch data
                                $batch_data = array(); 
                                if($rec_number && $rec_number =!""){
                                //----batch insert by providing array ---
                                foreach($rec_number AS $key => $val)
                                {
                                    //name val and other section key
                                    //other selection
                                    if(trim($val) != "")
                                    {
                                        $rec_date    = datecheck($rec_dateyear[$key],$rec_datemonth[$key],$rec_dateday[$key],$this->mng_auth->get_language());  
                                        $iss_date    = datecheck($iss_dateyear[$key],$iss_datemonth[$key],$iss_dateday[$key],$this->mng_auth->get_language());  
                                      
                                        //defendant provided date
                                        $prdepid = array(
                                              'case_urn'          => $lastcaseid,
                                              'type'              => $type[$key],
                                              'table_type'        => "5",
                                              'rec_date'          => $rec_date,
                                              'rec_number'        => $rec_number[$key],
                                              'iss_date'          => $iss_date,   
                                              'iss_number'        => $iss_number[$key],
                                              'userid'            => $this->mng_auth->get_user_id(),
                                              'registerdate'      => date('Y-m-d H:i:s'),
                                              'department'        =>$this->input->post('n_department'), 
                                              'ministry'          =>$this->input->post('n_ministry'),
                                          );
                                        //push in a global array
                                        array_push($batch_data,$prdepid);
                                    } 
                                      
                                }
                                }
                                if(count($batch_data)>0)
                                {
                                    //--- insert batch data ---
                                    $this->ghuquq_model->addImplementation($batch_data);  
                                }
                                
                                //============end OF tajdednazar -=======
                                
                                $msg = $this->lang->line('gc_case_successfull_msg');
                            }
                            else
                            {
                                $msg = $this->lang->line('case_successfull_msg');
                            }
                            
                            $this->session->set_flashdata('msg','<div class="success">'.$msg.'</div>');
                            //the information has therefore been successfully saved in the db                                                
                            redirect('case/home/viewcase/'.$en_caseurn);   // or whatever logic needs to occur
                        }
                        else
                        {  
                            $this->session->set_flashdata('msg','<div class="error">'.$this->lang->line('case_insert_error').'</div>');
                            redirect('case/home/addcase/'.$en_caseurn);    
                        }
                    }
                  }
                  else
                  {
                     //unautherized section
                     $this->load->view('unauthorized');
                  }
               }
                    
            }
        }
        //get province list by department id 
        function GetDepProvince()
        {
            //if this user is not logged in and its not admin
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                $str ="<select name=\"n_prov\" id=\"n_prov\" style=\"width:210px\" class=\"selectbox\"
                onchange=\"javascript: bring_page('".base_url()."case/home/districtslist','n_prov','provincecode','ds1','&name=n_district&w=210');validate_all('case_form');\">";

                $str.="<option value=\"\">".$this->lang->line('select_province')."</option>";
                $province_opt = "";
                $department = $this->input->post("depid");
                //IF THE DPEARTMENT IS NOT NULL
                if($department !="")
                {
                    //get this user available data entry province list
                    $ProvinceListObj = $this->mng_auth->GetDepProvinces($department,TRUE);
                    // get all province

                    if($ProvinceListObj)
                    {
                        foreach($ProvinceListObj->result() as $item)
                        {
                        $province_opt.="<option value ='".$item->code."'>".$item->name."</option>";  
                        }
                    }
                }
                $str.=$province_opt."</select>";
                $str.="&nbsp;<img id=\"n_provIMG\" src=\"".base_url()."images/validationx.PNG\" width=\"19\" height=\"19\" style=\"position:relative; top:4px\"/>";
                echo $str;
            }
        }
        
        //--- get department list ---
        function GetDepartments()
        {
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                
                //------ get department dropdowns -----
                $depid = array();
                $depid[] = $this->input->post('depid');
                
                //---- checkif there is any object  returned
                
                //-- get department available
                $AllDepObj = $this->mng_auth->GetDepartmentsByRole(array('r1','r7'),TRUE,'ca');
                //print_r($AllDepObj->result_array());exit;
                $deps = array();
                if($AllDepObj)
                {
                    //SET DEPARTMENT ID TO GET DEPARTMENT
                    foreach($AllDepObj->result() AS $item)
                    {
                        $deps[] = $item->id;
                    }
                }
                //GetParentDep
                $ministryObj = $this->mng_auth->GetDepartmentByID($depid,$deps);
                $isValid = "x";
                if($ministryObj)
                {
                     if($ministryObj->num_rows() == 1)
                     {
                          $ministopt = "<option value=\"".$ministryObj->row()->id."\" selected=\"selected\">".$ministryObj->row()->name."</option>";
                          $isValid = "y";
                     }
                     else
                     {
                         $ministopt = "<option value=\"\"  selected=\"selected\">".$this->lang->line('case_selectdep')."</option>";
                         foreach($ministryObj->result() AS $item)
                         {
                             $ministopt .= "<option value=\"".$item->id."\">".$item->name."</option>";
                         }
                     }
                     
                }
                else
                {
                   //---- display ----
                   $ministopt = "<option value=\"\"  selected=\"selected\">".$this->lang->line('case_selectdep')."</option>";
                }
                //--- display department ---
                echo "<select name=\"n_department\" id=\"n_department\" class=\"selectbox\" style=\"width: 250px;\" onchange=\"javascript: validate_all('case_form');depCode('n_department');\" >";
                echo $ministopt;
                echo "</select>";
                echo "&nbsp;<img id=\"n_departmentIMG\" src=\"".base_url()."images/validation".$isValid.".PNG\" width=\"19\" height=\"19\" style=\"position:relative; top:4px\"/>";
                   
            }
            
        }
        
        //Province list 
        function Provinces()
        { 

            //==== check if the country is afghanistan ===
            if($this->input->post('countrycode') == 1)
            {
                //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/DistrictsList','".$this->input->post('name')."','provincecode','ar_ds1','&name=ar_pbdistrict&w=190');\"
                 >";
                $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                    }
                }
                $str.="</select>";
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"ar_ds1\">";
                $districtOpt .= "<select name=\"ar_pbdistrict\" id=\"ar_pbdistrict\" style=\"width:190px\" class=\"selectbox\" />";
                $districtOpt .= "<option value=\"\" selected=\"selected\">".$this->lang->line('det_select')."</option>"; 
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"ar_pbvill\">";
                $villageopt.="<select name=\"ar_pbvillage\" id=\"ar_pbvillage\"  style=\"width:190px\" class=\"selectbox\"  />";
                $villageopt.="<option value=\"\">".$this->lang->line('det_select')."</option>";                                        
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===   
            }
            else
            {
                 //==== get unknow province district and village =====
                $prcode = ""; 
                 //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/districtslist','".$this->input->post('name')."','provincecode','ar_ds1','&name=ar_pbdistrict&w=190');\"
                 >";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        if($row->code == 35)
                        {
                            $prcode  =  $row->code;
                            $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                        }
                    }
                }
                $str.="</select>";
                
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $lang = "";
                if($this->mng_auth->get_language() != "en")
                {
                    $lang = "_dr";
                }
                
                $districtObj = $this->province_model->GetOneRecord($this->prefix."_districts","district".$lang." AS name,districtcode,village".$lang." AS villname,villagecode","provincecode",$prcode);
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"ar_ds1\">";
                $districtOpt .= "<select name=\"ar_pbdistrict\" id=\"ar_pbdistrict\" style=\"width:190px\" class=\"selectbox\" />";
                if($districtObj)
                {
                    $districtOpt .= "<option value=\"".$districtObj->row()->districtcode."\" selected=\"selected\">".$districtObj->row()->name."</option>"; 
                }
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"ar_pbvill\">";
                $villageopt.="<select name=\"ar_pbvillage\" id=\"ar_pbvillage\" style=\"width:190px\" class=\"selectbox\"  />";
                if($districtObj)
                {
                    $villageopt .= "<option value=\"".$districtObj->row()->villagecode."\" selected=\"selected\">".$districtObj->row()->villname."</option>"; 
                }
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===
                
            }
            
        }
        
        //Province list 
        function Provinces2()
        { 

            //==== check if the country is afghanistan ===
            if($this->input->post('countrycode') == 1)
            {
                //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/districtslist2','".$this->input->post('name')."','provincecode','ds3','&name=pbdistrict2&w=190');\"
                 >";
                $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                    }
                }
                $str.="</select>";
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"ds3\">";
                $districtOpt .= "<select name=\"pbdistrict2\" id=\"pbdistrict2\" style=\"width:190px\" class=\"selectbox\" />";
                $districtOpt .= "<option value=\"\" selected=\"selected\">".$this->lang->line('det_select')."</option>"; 
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"pbvill2\">";
                $villageopt.="<select name=\"pbvillage2\" id=\"pbvillage2\"  style=\"width:190px\" class=\"selectbox\"  />";
                $villageopt.="<option value=\"\">".$this->lang->line('det_select')."</option>";                                        
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===   
            }
            else
            {
                 //==== get unknow province district and village =====
                $prcode = ""; 
                 //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/districtslist2','".$this->input->post('name')."','provincecode','ds3','&name=pbdistrict2&w=190');\"
                 >";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        if($row->code == 35)
                        {
                            $prcode  =  $row->code;
                            $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                        }
                    }
                }
                $str.="</select>";
                
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $lang = "";
                if($this->mng_auth->get_language() != "en")
                {
                    $lang = "_dr";
                }
                
                $districtObj = $this->province_model->GetOneRecord($this->prefix."_districts","district".$lang." AS name,districtcode,village".$lang." AS villname,villagecode","provincecode",$prcode);
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"ds3\">";
                $districtOpt .= "<select name=\"pbdistrict2\" id=\"pbdistrict2\" style=\"width:190px\" class=\"selectbox\" />";
                if($districtObj)
                {
                    $districtOpt .= "<option value=\"".$districtObj->row()->districtcode."\" selected=\"selected\">".$districtObj->row()->name."</option>"; 
                }
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"pbvill2\">";
                $villageopt.="<select name=\"pbvillage2\" id=\"pbvillage2\" style=\"width:190px\" class=\"selectbox\"  />";
                if($districtObj)
                {
                    $villageopt .= "<option value=\"".$districtObj->row()->villagecode."\" selected=\"selected\">".$districtObj->row()->villname."</option>"; 
                }
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===
                
            }
            
        }
        
        //Province list 
        function Provinces3()
        { 

            //==== check if the country is afghanistan ===
            if($this->input->post('countrycode') == 1)
            {
                //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/pcdistrictslist2','".$this->input->post('name')."','provincecode','ds4','&name=pcdistrict2&w=190');\"
                 >";
                $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                    }
                }
                $str.="</select>";
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"ds4\">";
                $districtOpt .= "<select name=\"pcdistrict2\" id=\"pbdistrict2\" style=\"width:190px\" class=\"selectbox\" />";
                $districtOpt .= "<option value=\"\" selected=\"selected\">".$this->lang->line('det_select')."</option>"; 
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"pcvill2\">";
                $villageopt.="<select name=\"pcvillage2\" id=\"pcvillage2\"  style=\"width:190px\" class=\"selectbox\"  />";
                $villageopt.="<option value=\"\">".$this->lang->line('det_select')."</option>";                                        
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===   
            }
            else
            {
                 //==== get unknow province district and village =====
                $prcode = ""; 
                 //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/pcdistrictslist2','".$this->input->post('name')."','provincecode','ds4','&name=pcdistrict2&w=190');\"
                 >";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        if($row->code == 35)
                        {
                            $prcode  =  $row->code;
                            $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                        }
                    }
                }
                $str.="</select>";
                
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $lang = "";
                if($this->mng_auth->get_language() != "en")
                {
                    $lang = "_dr";
                }
                
                $districtObj = $this->province_model->GetOneRecord($this->prefix."_districts","district".$lang." AS name,districtcode,village".$lang." AS villname,villagecode","provincecode",$prcode);
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"ds4\">";
                $districtOpt .= "<select name=\"pcdistrict2\" id=\"pcdistrict2\" style=\"width:190px\" class=\"selectbox\" />";
                if($districtObj)
                {
                    $districtOpt .= "<option value=\"".$districtObj->row()->districtcode."\" selected=\"selected\">".$districtObj->row()->name."</option>"; 
                }
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"pcvill2\">";
                $villageopt.="<select name=\"pcvillage2\" id=\"pcvillage2\" style=\"width:190px\" class=\"selectbox\"  />";
                if($districtObj)
                {
                    $villageopt .= "<option value=\"".$districtObj->row()->villagecode."\" selected=\"selected\">".$districtObj->row()->villname."</option>"; 
                }
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===
                
            }
            
        }
        //Province list 
        function Provinces4()
        { 

            //==== check if the country is afghanistan ===
            if($this->input->post('countrycode') == 1)
            {
                //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/plocdistrictlist','".$this->input->post('name')."','provincecode','locdist','&name=plocdist&w=190');\"
                 >";
                $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                    }
                }
                $str.="</select>";
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"locdist\">";
                $districtOpt .= "<select name=\"plocdist\" id=\"plocdist\" style=\"width:190px\" class=\"selectbox\" />";
                $districtOpt .= "<option value=\"\" selected=\"selected\">".$this->lang->line('det_select')."</option>"; 
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"locvil\">";
                $villageopt.="<select name=\"plocvillage\" id=\"plocvillage\" style=\"width:190px\" class=\"selectbox\" />";
                $villageopt.="<option value=\"\">".$this->lang->line('det_select')."</option>";                                        
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===   
            }
            else
            {
                 //==== get unknow province district and village =====
                $prcode = ""; 
                 //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/plocdistrictlist','".$this->input->post('name')."','provincecode','locdist','&name=plocdist&w=190');\"
                 >";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        if($row->code == 35)
                        {
                            $prcode  =  $row->code;
                            $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                        }
                    }
                }
                $str.="</select>";
                
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $lang = "";
                if($this->mng_auth->get_language() != "en")
                {
                    $lang = "_dr";
                }
                
                $districtObj = $this->province_model->GetOneRecord($this->prefix."_districts","district".$lang." AS name,districtcode,village".$lang." AS villname,villagecode","provincecode",$prcode);
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"locdist\">";
                $districtOpt .= "<select name=\"plocdist\" id=\"plocdist\" style=\"width:190px\" class=\"selectbox\" />";
                if($districtObj)
                {
                    $districtOpt .= "<option value=\"".$districtObj->row()->districtcode."\" selected=\"selected\">".$districtObj->row()->name."</option>"; 
                }
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"locvil\">";
                $villageopt.="<select name=\"plocvillage\" id=\"plocvillage\" style=\"width:190px\" class=\"selectbox\"  />";
                if($districtObj)
                {
                    $villageopt .= "<option value=\"".$districtObj->row()->villagecode."\" selected=\"selected\">".$districtObj->row()->villname."</option>"; 
                }
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===
                
            }
            
        }
        //Province list 
        function Provinces5()
        { 

            //==== check if the country is afghanistan ===
            if($this->input->post('countrycode') == 1)
            {
                //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/plocdistrictlist2','".$this->input->post('name')."','provincecode','plocdiv2','&name=plocdist2&w=190');\"
                 >";
                $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                    }
                }
                $str.="</select>";
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"plocdiv2\">";
                $districtOpt .= "<select name=\"plocdist2\" id=\"plocdist2\" style=\"width:190px\" class=\"selectbox\" />";
                $districtOpt .= "<option value=\"\" selected=\"selected\">".$this->lang->line('det_select')."</option>"; 
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"locvil2\">";
                $villageopt.="<select name=\"plocvillage2\" id=\"plocvillage2\" style=\"width:190px\" class=\"selectbox\" />";
                $villageopt.="<option value=\"\">".$this->lang->line('det_select')."</option>";                                        
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===   
            }
            else
            {
                 //==== get unknow province district and village =====
                $prcode = ""; 
                 //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/plocdistrictlist2','".$this->input->post('name')."','provincecode','plocdiv2','&name=plocdist2&w=190');\"
                 >";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        if($row->code == 35)
                        {
                            $prcode  =  $row->code;
                            $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                        }
                    }
                }
                $str.="</select>";
                
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $lang = "";
                if($this->mng_auth->get_language() != "en")
                {
                    $lang = "_dr";
                }
                
                $districtObj = $this->province_model->GetOneRecord($this->prefix."_districts","district".$lang." AS name,districtcode,village".$lang." AS villname,villagecode","provincecode",$prcode);
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"plocdiv2\">";
                $districtOpt .= "<select name=\"plocdist2\" id=\"plocdist2\" style=\"width:190px\" class=\"selectbox\" />";
                if($districtObj)
                {
                    $districtOpt .= "<option value=\"".$districtObj->row()->districtcode."\" selected=\"selected\">".$districtObj->row()->name."</option>"; 
                }
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"locvil2\">";
                $villageopt.="<select name=\"plocvillage2\" id=\"plocvillage2\" style=\"width:190px\" class=\"selectbox\"  />";
                if($districtObj)
                {
                    $villageopt .= "<option value=\"".$districtObj->row()->villagecode."\" selected=\"selected\">".$districtObj->row()->villname."</option>"; 
                }
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===
                
            }
            
        }
        function Provinces6()
        { 

            //==== check if the country is afghanistan ===
            if($this->input->post('countrycode') == 1)
            {
                //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/repdistrictslist','".$this->input->post('name')."','provincecode','repdistdiv','&name=repdistrict&w=190');\"
                 >";
                $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                    }
                }
                $str.="</select>";
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"repdistdiv\">";
                $districtOpt .= "<select name=\"repdistrict\" id=\"repdistrict\" style=\"width:190px\" class=\"selectbox\" />";
                $districtOpt .= "<option value=\"\" selected=\"selected\">".$this->lang->line('det_select')."</option>"; 
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"repvildiv\">";
                $villageopt.="<select name=\"repvillage\" id=\"repvillage\" style=\"width:190px\" class=\"selectbox\" />";
                $villageopt.="<option value=\"\">".$this->lang->line('det_select')."</option>";                                        
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===   
            }
            else
            {
                 //==== get unknow province district and village =====
                $prcode = ""; 
                 //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/plocdistrictlist2','".$this->input->post('name')."','provincecode','repdistdiv','&name=repdistrict&w=190');\"
                 >";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        if($row->code == 35)
                        {
                            $prcode  =  $row->code;
                            $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                        }
                    }
                }
                $str.="</select>";
                
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $lang = "";
                if($this->mng_auth->get_language() != "en")
                {
                    $lang = "_dr";
                }
                
                $districtObj = $this->province_model->GetOneRecord($this->prefix."_districts","district".$lang." AS name,districtcode,village".$lang." AS villname,villagecode","provincecode",$prcode);
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"repdistdiv\">";
                $districtOpt .= "<select name=\"repdistrict\" id=\"repdistrict\" style=\"width:190px\" class=\"selectbox\" />";
                if($districtObj)
                {
                    $districtOpt .= "<option value=\"".$districtObj->row()->districtcode."\" selected=\"selected\">".$districtObj->row()->name."</option>"; 
                }
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"repvildiv\">";
                $villageopt.="<select name=\"repvillage\" id=\"repvillage\" style=\"width:190px\" class=\"selectbox\"  />";
                if($districtObj)
                {
                    $villageopt .= "<option value=\"".$districtObj->row()->villagecode."\" selected=\"selected\">".$districtObj->row()->villname."</option>"; 
                }
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===
                
            }
            
        }
        
        function Provinces7()
        { 

            //==== check if the country is afghanistan ===
            if($this->input->post('countrycode') == 1)
            {
                //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/repdistrictslist2','".$this->input->post('name')."','provincecode','repdistdiv2','&name=repdistrict2&w=190');\"
                 >";
                $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                    }
                }
                $str.="</select>";
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"repdistdiv2\">";
                $districtOpt .= "<select name=\"repdistrict2\" id=\"repdistrict2\" style=\"width:190px\" class=\"selectbox\" />";
                $districtOpt .= "<option value=\"\" selected=\"selected\">".$this->lang->line('det_select')."</option>"; 
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"repvildiv2\">";
                $villageopt.="<select name=\"repvillage2\" id=\"repvillage2\" style=\"width:190px\" class=\"selectbox\" />";
                $villageopt.="<option value=\"\">".$this->lang->line('det_select')."</option>";                                        
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===   
            }
            else
            {
                 //==== get unknow province district and village =====
                $prcode = ""; 
                 //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/repdistrictslist2','".$this->input->post('name')."','provincecode','repdistdiv2','&name=repdistrict2&w=190');\"
                 >";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        if($row->code == 35)
                        {
                            $prcode  =  $row->code;
                            $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                        }
                    }
                }
                $str.="</select>";
                
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $lang = "";
                if($this->mng_auth->get_language() != "en")
                {
                    $lang = "_dr";
                }
                
                $districtObj = $this->province_model->GetOneRecord($this->prefix."_districts","district".$lang." AS name,districtcode,village".$lang." AS villname,villagecode","provincecode",$prcode);
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"repdistdiv2\">";
                $districtOpt .= "<select name=\"repdistrict2\" id=\"repdistrict2\" style=\"width:190px\" class=\"selectbox\" />";
                if($districtObj)
                {
                    $districtOpt .= "<option value=\"".$districtObj->row()->districtcode."\" selected=\"selected\">".$districtObj->row()->name."</option>"; 
                }
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"repvildiv2\">";
                $villageopt.="<select name=\"repvillage2\" id=\"repvillage2\" style=\"width:190px\" class=\"selectbox\"  />";
                if($districtObj)
                {
                    $villageopt .= "<option value=\"".$districtObj->row()->villagecode."\" selected=\"selected\">".$districtObj->row()->villname."</option>"; 
                }
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===
                
            }
            
        }
        function Provinces8()
        { 

            //==== check if the country is afghanistan ===
            if($this->input->post('countrycode') == 1)
            {
                //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/DistrictOrder','".$this->input->post('name')."','provincecode','order_ds1','&name=n_district2&w=190');validate_all('case_form');\"
                 >";
                $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                    }
                }
                $str.="</select>";
                $str.="<img id=\"n_province2IMG\" src=\"".base_url()."images/validationx.png\" width=\"19\" height=\"19\" style=\"position:relative; top:4px\"/>";
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"order_ds1\">";
                $districtOpt .= "<select name=\"n_district2\" id=\"n_district2\" style=\"width:190px\" class=\"selectbox\" onchange=\"validate_all('case_form');\"/>";
                $districtOpt .= "<option value=\"\" selected=\"selected\">".$this->lang->line('det_select')."</option>"; 
                $districtOpt .= "</select>";
                $districtOpt .= "&nbsp;<img id=\"n_district2IMG\" src=\"".base_url()."images/validationx.png\" width=\"19\" height=\"19\" style=\"position:relative; top:4px\"/>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of village option ===   
            }
            else
            {
                 //==== get unknow province district and village =====
                $prcode = ""; 
                 //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/DistrictOrder','".$this->input->post('name')."','provincecode','order_ds1','&name=n_district2&w=190');validate_all('case_form');\"
                 >";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        if($row->code == 35)
                        {
                            $prcode  =  $row->code;
                            $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                        }
                    }
                }
                $str.="</select>";
                $str.="<img id=\"n_province2IMG\" src=\"".base_url()."images/validationy.png\" width=\"19\" height=\"19\" style=\"position:relative; top:4px\"/>";
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"provincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $lang = "";
                if($this->mng_auth->get_language() != "en")
                {
                    $lang = "_dr";
                }
                
                $districtObj = $this->province_model->GetOneRecord($this->prefix."_districts","district".$lang." AS name,districtcode,village".$lang." AS villname,villagecode","provincecode",$prcode);
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"order_ds1\">";
                $districtOpt .= "<select name=\"n_district2\" id=\"n_district2\" style=\"width:190px\" class=\"selectbox\" onchange=\"validate_all('case_form');\"/>";
                if($districtObj)
                {
                    $districtOpt .= "<option value=\"".$districtObj->row()->districtcode."\" selected=\"selected\">".$districtObj->row()->name."</option>"; 
                }
                $districtOpt .= "</select>";
                $districtOpt .= "&nbsp;<img id=\"n_district2IMG\" src=\"".base_url()."images/validationy.png\" width=\"19\" height=\"19\" style=\"position:relative; top:4px\"/>";
                $districtOpt .= "</div>";
                echo $districtOpt;  
            }
            
        }
        //Province list 
        function PCProvinces()
        { 

            //==== check if the country is afghanistan ===
            if($this->input->post('countrycode') == 1)
            {
                //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/pcdistrictslist','".$this->input->post('name')."','provincecode','ds2','&name=pcdistrict&w=190');\"
                 >";
                $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                    }
                }
                $str.="</select>";
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"pcprovincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"ds2\">";
                $districtOpt .= "<select name=\"pcdistrict\" id=\"pcdistrict\" style=\"width:190px\" class=\"selectbox\" />";
                $districtOpt .= "<option value=\"\" selected=\"selected\">".$this->lang->line('det_select')."</option>"; 
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"pcvill\">";
                $villageopt.="<select name=\"pcvillage\" id=\"pcvillage\"  style=\"width:190px\" class=\"selectbox\"  />";
                $villageopt.="<option value=\"\">".$this->lang->line('det_select')."</option>";                                        
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===   
            }
            else
            {
                 //==== get unknow province district and village =====
                $prcode = ""; 
                 //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/pcdistrictslist','".$this->input->post('name')."','provincecode','ds2','&name=pcdistrict&w=190');\"
                 >";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        if($row->code == 35)
                        {
                            $prcode  =  $row->code;
                            $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                        }
                    }
                }
                $str.="</select>";
                
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"pcprovincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $lang = "";
                if($this->mng_auth->get_language() != "en")
                {
                    $lang = "_dr";
                }
                
                $districtObj = $this->province_model->GetOneRecord($this->prefix."_districts","district".$lang." AS name,districtcode,village".$lang." AS villname,villagecode","provincecode",$prcode);
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"ds2\">";
                $districtOpt .= "<select name=\"pcdistrict\" id=\"pcdistrict\" style=\"width:190px\" class=\"selectbox\" />";
                if($districtObj)
                {
                    $districtOpt .= "<option value=\"".$districtObj->row()->districtcode."\" selected=\"selected\">".$districtObj->row()->name."</option>"; 
                }
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"pcvill\">";
                $villageopt.="<select name=\"pcvillage\" id=\"pcvillage\"  style=\"width:190px\" class=\"selectbox\"  />";
                if($districtObj)
                {
                    $villageopt .= "<option value=\"".$districtObj->row()->villagecode."\" selected=\"selected\">".$districtObj->row()->villname."</option>"; 
                }
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===
                
            }
            
        }
        
        //Province list 
        function PAProvinces()
        { 

            //==== check if the country is afghanistan ===
            if($this->input->post('countrycode') == 1)
            {
                //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/padistrictslist','".$this->input->post('name')."','provincecode','ds3','&name=padistrict&w=190');provinceCode('paprovince');\"
                 >";
                $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                    }
                }
                $str.="</select>";
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"paprovincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"ds3\">";
                $districtOpt .= "<select name=\"padistrict\" id=\"padistrict\" style=\"width:190px\" class=\"selectbox\" />";
                $districtOpt .= "<option value=\"\" selected=\"selected\">".$this->lang->line('det_select')."</option>"; 
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"pavill\">";
                $villageopt.="<select name=\"pavillage\" id=\"pavillage\"  style=\"width:190px\" class=\"selectbox\"  />";
                $villageopt.="<option value=\"\">".$this->lang->line('det_select')."</option>";                                        
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===   
            }
            else
            {
                 //==== get unknow province district and village =====
                $prcode = ""; 
                 //load all district by province 
                $allPr   = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                 onchange=\"javascript: bring_page('".base_url()."case/home/padistrictslist','".$this->input->post('name')."','provincecode','ds3','&name=padistrict&w=190');\"
                 >";
                if($allPr)
                {
                    foreach($allPr->result() AS $row)
                    {
                        if($row->code == 35)
                        {
                            $prcode  =  $row->code;
                            $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                        }
                    }
                }
                $str.="</select>";
                
                echo "<strong>".$this->lang->line('det_province').":</strong>
                <div class=\"txbox_div\" id=\"paprovincediv\">";
                echo $str;
                echo "</div>";
                //===== end of province
                //===== district start ===
                $lang = "";
                if($this->mng_auth->get_language() != "en")
                {
                    $lang = "_dr";
                }
                
                $districtObj = $this->province_model->GetOneRecord($this->prefix."_districts","district".$lang." AS name,districtcode,village".$lang." AS villname,villagecode","provincecode",$prcode);
                $districtOpt  = "";
                $districtOpt  = "<strong>".$this->lang->line('det_district').":</strong>";
                $districtOpt .="<div id=\"ds3\">";
                $districtOpt .= "<select name=\"padistrict\" id=\"padistrict\" style=\"width:190px\" class=\"selectbox\" />";
                if($districtObj)
                {
                    $districtOpt .= "<option value=\"".$districtObj->row()->districtcode."\" selected=\"selected\">".$districtObj->row()->name."</option>"; 
                }
                $districtOpt .= "</select>";
                $districtOpt .= "</div>";
                echo $districtOpt;
                //==== end of district option ====
                //==== start of village option =====
                $villageopt = "";
                $villageopt ="<strong>".$this->lang->line('det_village').":</strong>";
                $villageopt.="<div id=\"pavill\">";
                $villageopt.="<select name=\"pavillage\" id=\"pavillage\"  style=\"width:190px\" class=\"selectbox\"  />";
                if($districtObj)
                {
                    $villageopt .= "<option value=\"".$districtObj->row()->villagecode."\" selected=\"selected\">".$districtObj->row()->villname."</option>"; 
                }
                $villageopt.="</select>";
                $villageopt.="</div>";
                echo $villageopt;
                //==== end of village option ===
                
            }
            
        }
         
         //district list 
        function DistrictOrder()
        { 
           
            //load all district by province 
            $allDes   = $this->province_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
             onchange = \"districtCode('".$this->input->post('name')."'); validate_all('case_form');\">";
            $str.="<option value=\"\">".$this->lang->line('select_district')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            $str.="&nbsp;<img id=\"".$this->input->post('name')."IMG\" src=\"".base_url()."images/validationx.PNG\" width=\"19\" height=\"19\" style=\"position:relative; top:4px\" />";
            echo $str;
        }
               
           
        //district list 
        function DistrictsList()
        { 
           
            //load all district by province 
            $allDes   = $this->province_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
             onchange=\"bring_page('".base_url()."case/home/villagelist','".$this->input->post('name')."','districtcode','ar_pbvill','&name=ar_pbvillage&w=190');\">";
            $str.="<option value=\"\">".$this->lang->line('select_district')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        
         //district list 
        function DistrictsList2()
        { 
           
            //load all district by province 
            $allDes   = $this->province_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
             onchange=\"bring_page('".base_url()."case/home/villagelist2','".$this->input->post('name')."','districtcode','pbvill2','&name=pbvillage2&w=190');\">";
            $str.="<option value=\"\">".$this->lang->line('select_district')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        
        //district list 
        function PCDistrictsList()
        { 
            //Print_r($_POST); exit;
            //load all district by province 
            $allDes   = $this->province_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
             onchange=\"bring_page('".base_url()."case/home/pcvillagelist2','".$this->input->post('name')."','districtcode','pcvill','&name=pcvillage&w=190');\">";
            $str.="<option value=\"\">".$this->lang->line('select_district')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        
        //district list 
        function PCDistrictsList2()
        { 
            //Print_r($_POST); exit;
            //load all district by province 
            $allDes   = $this->province_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
             onchange=\"bring_page('".base_url()."case/home/pcvillagelist2','".$this->input->post('name')."','districtcode','pcvill2','&name=pcvillage2&w=190');\">";
            $str.="<option value=\"\">".$this->lang->line('select_district')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        
        
        function PADistrictsList()
        { 
            //Print_r($_POST); exit;
            //load all district by province 
            $allDes   = $this->province_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
             onchange=\"bring_page('".base_url()."case/home/pavillagelist','".$this->input->post('name')."','districtcode','pavill','&name=pavillage&w=190');districtCode('".$this->input->post('name')."')\">";
            $str.="<option value=\"\">".$this->lang->line('select_district')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        
        
        //district list 
        function plocdistrictlist()
        { 
           
            //load all district by province 
            $allDes   = $this->province_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
             onchange=\"bring_page('".base_url()."case/home/villagelist','".$this->input->post('name')."','districtcode','locvil','&name=plocvillage&w=190');\">";
            $str.="<option value=\"\">".$this->lang->line('select_district')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }

        //------3183----15082020---------
        function wakilArezdistrictlist()
        { 
           
            //load all district by province 
            $allDes   = $this->province_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
             onchange=\"bring_page('".base_url()."case/home/wakilArezVillageList','".$this->input->post('name')."','districtcode','repvildiv3','&name=repvillage3&w=190');\">";
            $str.="<option value=\"\">".$this->lang->line('select_district')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }


           function wakilArezVillageList()
        {
            //load all district by province 
            $allDes   = $this->province_model->GetVillageByDistrict(0,0,true,$this->mng_auth->get_language(),$this->input->post('districtcode'));
            //print_r($allDes->result_array()); exit;
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\">";
            $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->villagecode." ".set_select($this->input->post('name'),$row->villagecode).">".$row->villagename."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }


         function wakilMarozdistrictlist()
        { 
           
            //load all district by province 
            $allDes   = $this->province_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
             onchange=\"bring_page('".base_url()."case/home/wakilMarozVillageList','".$this->input->post('name')."','districtcode','repvildiv22','&name=repvillage22&w=190');\">";
            $str.="<option value=\"\">".$this->lang->line('select_district')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }


           function wakilMarozVillageList()
        {
            //load all district by province 
            $allDes   = $this->province_model->GetVillageByDistrict(0,0,true,$this->mng_auth->get_language(),$this->input->post('districtcode'));
            //print_r($allDes->result_array()); exit;
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\">";
            $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->villagecode." ".set_select($this->input->post('name'),$row->villagecode).">".$row->villagename."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }


           function wakilArezdistrictlistgcase()
        { 
           
            //load all district by province 
            $allDes   = $this->province_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
             onchange=\"bring_page('".base_url()."case/home/wakilArezVillageListgcase','".$this->input->post('name')."','districtcode','repvildiv4','&name=repvillage4&w=190');\">";
            $str.="<option value=\"\">".$this->lang->line('select_district')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }


           function wakilArezVillageListgcase()
        {
            //load all district by province 
            $allDes   = $this->province_model->GetVillageByDistrict(0,0,true,$this->mng_auth->get_language(),$this->input->post('districtcode'));
            //print_r($allDes->result_array()); exit;
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\">";
            $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->villagecode." ".set_select($this->input->post('name'),$row->villagecode).">".$row->villagename."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }



          function wakilMarozdistrictlistgcase()
        { 
           
            //load all district by province 
            $allDes   = $this->province_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
             onchange=\"bring_page('".base_url()."case/home/wakilMarozVillageListgcase','".$this->input->post('name')."','districtcode','repvildiv5','&name=repvillage5&w=190');\">";
            $str.="<option value=\"\">".$this->lang->line('select_district')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }


           function wakilMarozVillageListgcase()
        {
            //load all district by province 
            $allDes   = $this->province_model->GetVillageByDistrict(0,0,true,$this->mng_auth->get_language(),$this->input->post('districtcode'));
            //print_r($allDes->result_array()); exit;
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\">";
            $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->villagecode." ".set_select($this->input->post('name'),$row->villagecode).">".$row->villagename."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        //------3183-------15082020-----------------
        
        //district list 
        function plocdistrictlist2()
        { 
           
            //load all district by province 
            $allDes   = $this->province_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
             onchange=\"bring_page('".base_url()."case/home/villagelist','".$this->input->post('name')."','districtcode','locvil2','&name=plocvillage2&w=190');\">";
            $str.="<option value=\"\">".$this->lang->line('select_district')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        
        //district list 
        function RepDistrictsList()
        { 
           
            //load all district by province 
            $allDes   = $this->province_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
             onchange=\"bring_page('".base_url()."case/home/repvillagelist','".$this->input->post('name')."','districtcode','repvildiv','&name=repvillage&w=190');\">";
            $str.="<option value=\"\">".$this->lang->line('select_district')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        
        //district list 
        function RepDistrictsList2()
        { 
           
            //load all district by province 
            $allDes   = $this->province_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
             onchange=\"bring_page('".base_url()."case/home/RepVillageList2','".$this->input->post('name')."','districtcode','repvildiv2','&name=repvillage2&w=190');\">";
            $str.="<option value=\"\">".$this->lang->line('select_district')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        
    
        function VillageList()
        {
            //load all district by province 
            $allDes   = $this->province_model->GetVillageByDistrict(0,0,true,$this->mng_auth->get_language(),$this->input->post('districtcode'));
            //print_r($allDes->result_array()); exit;
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\">";
            $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->villagecode." ".set_select($this->input->post('name'),$row->villagecode).">".$row->villagename."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        function RepVillageList()
        {
            //load all district by province 
            $allDes   = $this->province_model->GetVillageByDistrict(0,0,true,$this->mng_auth->get_language(),$this->input->post('districtcode'));
            //print_r($allDes->result_array()); exit;
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\">";
            $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->villagecode." ".set_select($this->input->post('name'),$row->villagecode).">".$row->villagename."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        
        function RepVillageList2()
        {
            //load all district by province 
            $allDes   = $this->province_model->GetVillageByDistrict(0,0,true,$this->mng_auth->get_language(),$this->input->post('districtcode'));
            //print_r($allDes->result_array()); exit;
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\">";
            $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->villagecode." ".set_select($this->input->post('name'),$row->villagecode).">".$row->villagename."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        
        function VillageList2()
        {
            //load all district by province 
            $allDes   = $this->province_model->GetVillageByDistrict(0,0,true,$this->mng_auth->get_language(),$this->input->post('districtcode'));
            //print_r($allDes->result_array()); exit;
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\">";
            $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->villagecode." ".set_select($this->input->post('name'),$row->villagecode).">".$row->villagename."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        
        function PCVillageList()
        {
            //load all district by province 
            $allDes   = $this->province_model->GetVillageByDistrict(0,0,true,$this->mng_auth->get_language(),$this->input->post('districtcode'));
            //print_r($allDes->result_array()); exit;
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\">";
            $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->villagecode." ".set_select($this->input->post('name'),$row->villagecode).">".$row->villagename."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        function PCVillageList2()
        {
            //load all district by province 
            $allDes   = $this->province_model->GetVillageByDistrict(0,0,true,$this->mng_auth->get_language(),$this->input->post('districtcode'));
            //print_r($allDes->result_array()); exit;
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\">";
            $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->villagecode." ".set_select($this->input->post('name'),$row->villagecode).">".$row->villagename."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        
        function PAVillageList()
        {
            //load all district by province 
            $allDes   = $this->province_model->GetVillageByDistrict(0,0,true,$this->mng_auth->get_language(),$this->input->post('districtcode'));
            //print_r($allDes->result_array()); exit;
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\">";
            $str.="<option value=\"\">".$this->lang->line('det_select')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->villagecode." ".set_select($this->input->post('name'),$row->villagecode).">".$row->villagename."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        
        
        
        //Sub Crime list  
        function SubCrimelist()
        {      
                $this->load->model('crime_type/crime_type_model');
                //load all district by province 
                $allDes   = $this->crime_type_model->GetSubCrimeByCrime(0,0,true,$this->mng_auth->get_language(),$this->input->post('id'));
                $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
                onchange=\"javascript: bring_page('".base_url()."case/home/CrimeDescriptionlist','n_stype','id','descdiv','&name=n_desc&w=210'); validate_all('case_form');\"
                >";
                $str.="<option value=\"\">".$this->lang->line('select_stype')."</option>";
                if($allDes)
                {
                    foreach($allDes->result() AS $row)
                    {
                        $str.="<option value=".$row->id." ".set_select($this->input->post('name'),$row->id).">".$row->name."</option>";
                    }
                }
                $str.="</select>";
                $str.="&nbsp;<img id=\"n_stypeIMG\" src=\"".base_url()."images/validationx.PNG\" width=\"19\" height=\"19\" style=\"position:relative; top:4px\"/>";
                echo $str;
        }
        //Crime Description list
        function CrimeDescriptionlist()
        { 
            $this->load->model('crime_type/crime_type_model');
            //load all district by province 
            $allDes   = $this->crime_type_model->GetCrimeDescBySubCrime(0,0,true,$this->mng_auth->get_language(),$this->input->post('id'));
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
            onchange=validate_all('case_form')>";
            $str.="<option value=\"\">".$this->lang->line('select_desc')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->id." ".set_select($this->input->post('name'),$row->id).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            $str.="&nbsp;<img id=\"n_descIMG\" src=\"".base_url()."images/validationx.PNG\" width=\"19\" height=\"19\" style=\"position:relative; top:4px\"/>";
            echo $str;
        }
        //view case 
        function viewcase($cid=0)
        {
             //check if this user is logged in or not
             //if this user is not logged in and its not admin
            if(!$this->mng_auth->is_logged_in()) 
            {  
                //logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {  
                //verify case urn to plain and check if has the access level
                $enc_caseid = $cid;
                $casedecoded = $this->mng_auth->check_case_id($enc_caseid); 
                
                if($casedecoded!=0)
                {
                    
                    //redirect report encrypted id
                    $report_encid = "";
                    $view = "";
                    //$caseSummary = casesummary($casedecoded);
                    $caseSummary = $casedecoded;
                    $submodulelink = $this->mng_auth->allsubmodules_bymcode();  
                    //check if the user has the view role or all view of the case
                    if($this->mng_auth->IsViewable($casedecoded,"ca") || $this->mng_auth->IsViewable($casedecoded,"cb"))
                    {   
                        $getdetails = $this->case_model->getcase($casedecoded,$this->mng_auth->get_language())->row_array();
    
                        //provide a data entry view with buttons 
                        if(!$getdetails)
                        {
                            exit;
                        }
                        
                        $caseid = 0; 
                        $data['details']     = $getdetails;
                        $data['caseurn']     = $casedecoded;
                        $data['enc_caseid']  = $cid;
                        
                        //--- get areez data ---
                        $areezObj = "";
                        //--- get time stamp data and display in the list ---
                        $areezObj = $this->case_model->getAreez($casedecoded,$this->mng_auth->get_language());
                        if($areezObj)
                        {  
                           $data['areezObj']   = $areezObj;
                          
                        }
                        //--- get marooz data ---
                        $maroozObj = "";
                        //--- get time stamp data and display in the list ---
                        $maroozObj = $this->case_model->getMarooz($casedecoded,$this->mng_auth->get_language());
                        if($maroozObj)
                        {  
                           $data['maroozObj']   = $maroozObj;
                          
                        }
                        
                        $st_crtypes = "";
                        //---- crime types ----
                        if(strlen($getdetails['crime_type']) > 0)
                        {
                           $crms = array(); 
                           
                           //--- explode all values and get names ---
                           if(strstr($getdetails['crime_type'],",") == TRUE)
                           {
                              $crms = explode(",",$getdetails['crime_type']);
                              for($i=0;$i<count($crms);$i++)
                              {
                                 $crtObj = $this->crime_type_model->One_record("cms_crime_types","name_".$this->mng_auth->get_language()." AS name","id",$crms[$i]);
                                 if($crtObj && $crtObj->num_rows()>0)
                                 {
                                    $st_crtypes.=($i+1).". ".$crtObj->row()->name."<br />";
                                 }
                              }
                           }
                           else
                           {
                               $crtObj = $this->crime_type_model->One_record("cms_crime_types","name_".$this->mng_auth->get_language()." AS name","id",$getdetails['crime_type']);
                               if($crtObj && $crtObj->num_rows()>0)
                               {
                                    $st_crtypes.=$crtObj->row()->name;
                               }
                           } 
                        }
                        $data['st_crtypes'] = $st_crtypes;
                        
                        //############## respondant profile ##############
                        $res_view = "";
                        //--- get time stamp data and display in the list ---
                        $dataRes = $this->case_model->getres_case($casedecoded,$this->mng_auth->get_language());
                        if($dataRes)
                        {  
                           $data_pr['records']   = $dataRes;
                           $res_view = $this->load->view("case/caseres_list",$data_pr,TRUE);
                        }
                        $data['res_view']  = $res_view;
                        $data_sr = array();
                        $sendrec_view = "";
                        //--- get the sender and receiver list ----
                        $dataSendRec = $this->case_model->getSendReceives($casedecoded,$this->mng_auth->get_language());
                        $data_sr['records'] = $dataSendRec;
                        $sendrec_view = $this->load->view("case/lawsendrec_list",$data_sr,TRUE);
                              
                        //---- end of req profile --
                        $data['sendrec_view']  = $sendrec_view;
                        //######## end of resp profile ########
                        if($getdetails['dtype'] == 2)
                        { 
                            $recPrimaryList = $this->listProceedingRecords($casedecoded,$cid,1);
                            $recAppellateList = $this->listProceedingRecords($casedecoded,$cid,2);
                            $recTajdednazarList = $this->listProceedingRecords($casedecoded,$cid,5);
                            
                            $data['primary_list'] = $recPrimaryList; 
                            $data['appellate_list'] = $recAppellateList; 
                            $data['tajdednazar_list'] = $recTajdednazarList; 
                            
                        }
                        
                        //get case images
                        //$data['imagelist'] = $this->GetPictures($casedecoded,$enc_caseid);
                        $view = $this->load->view('case/case_view',$data,TRUE);
                        $highlight = "";
                        //check if the user has highlight role
                    } 
                    else
                    {
                        $view = "<div class=\"warning\">".$this->lang->line('det_noaccess')."</div>";
                    }
                    
                    //---- case summary to be displayed at top ----
                    $summary = casesummary($casedecoded);
                    $tpl_type = "";
                    if($getdetails['dtype'] == 2)
                    {
                       $tpl_type = "cb"; 
                    }
                    else
                    {
                       $tpl_type = "ca";
                    }
                    //echo $casesum;exit;
                    $message = tab_tpl_cms($submodulelink,$summary.$view,$tpl_type,$cid,"view",$report_encid); 
                    header_tpl($this->mng_auth->get_language());
                    //include top banner 
                    banner_tpl();
                    //load left template
                    left_tpl();
                    //echo $message;exit;
                    //load right tpl
                    right_tpl_att($enc_caseid,$casedecoded);
                    //right_tpl(); 
                    //provide main content
                    content_tpl($message);
                    //end of develpers view  
                    //provide footer
                    footer_tpl();
                
                }
                else
                {
                    //unautherized section
                    $this->load->view('unauthorized');
                }
            }
        } 
        //upload document
        function upload($file_name=0,$inputName = "")
        {       
             //check if the user is logged in 
             //if this user is not logged in and its not admin
             if(!$this->mng_auth->is_logged_in()) 
             {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
             }
             else
             {   
                //if the user has data entry role provide a data entry button
                if($this->mng_auth->IsAddable(0,0))
                { 
              
                  if($_FILES)
                  {
                       $config['upload_path']   =   "./asnad/";
                       $config['allowed_types'] =   $this->file_types;
                       //$config['file_name']     =   $urn."_".rand(99,1000).date('YmdHis') ;
                       $config['file_name']     =   $file_name ;
                       $this->upload->initialize($config);
                       if(!$this->upload->do_upload($inputName))
                       {
                          return FALSE;
                         
                       }
                       else
                       {     
                      
                           $this->file_info=$this->upload->data();
                           return TRUE;
                       }          
                  }
                }
                else
                {
                  //does not have add role or the case is from some other department 
                  return FALSE;
                }
             }
        } 
        //upload document
        function upload_pictures($file_name=0,$inputName = "")
        {       
             //check if the user is logged in 
             //if this user is not logged in and its not admin
             if(!$this->mng_auth->is_logged_in()) 
             {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
             }
             else
             {   
                  
                
                  if($_FILES)
                  {
                       $config['upload_path']   =   "./aksa/";
                       $config['allowed_types'] =   $this->picture_types;
                       $config['file_name']     =   $file_name ;
                       $this->upload->initialize($config);
                       if(!$this->upload->do_upload($inputName))
                       {
                           
                           return FALSE;
                         
                       }
                       else
                       {     
                           $this->file_info=$this->upload->data();
                           $resize_det = $this->resizeImage($this->file_info['file_path'],$this->file_info['file_name'],"thumb",105,90);
                           return TRUE;
                       }          
                  }
                  else
                  {
                      return FALSE;
                  }
             }
        }
        //function for resizing the images   
        function resizeImage($source_image_path,$source_image_name,$new_image_name,$width,$height)
        { 
            $config['image_library'] = 'gd2';
            $config['source_image'] = $source_image_path.$source_image_name;
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = TRUE;
            $config['quality'] = '100%';
            $config['new_image'] = $source_image_path.'/'.$new_image_name.'_'.$source_image_name; 
            $config['width'] = $width;
            $config['height'] = $height;
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            
        }
        //function to get case images 
        function GetPictures($caseURN=0,$caseid=0)
        {
            //check login authentication
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                $ImageList = "";
                //get pictures
                $picObj = $this->case_model->GetPictureList($caseURN);
                if($picObj)
                {   
                    $i=0;
                    //provide all images
                    foreach($picObj->result() AS $row)
                    {
                        $ImageList .="
                            <div class=\"imagepanel\">
                                 <a href=\"javascript: void(0);\" class=\"imageborder\"  
                                 onclick=\"javascript:create_foo('100','100');load_page('".base_url()."case/home/listpictures/".$caseid."','foo','&caseurn=".$caseURN."&starting=".$i."&caseid=".$caseid."');\">
                                 <img src=\"".base_url()."image/index/thumb_".$row->picture."\"  /></a>
                            </div>
                           ";
                        $i++;
                    }
                    
                }
                return $ImageList;
            }
        }
        //function to list case images  
        function ListPictures()
        {
        
            //check login authentication
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                //verify case id and verify report
                $enc_caseid = $this->input->post('caseid'); 
                $casedecoded = $this->mng_auth->check_case_id($enc_caseid);
                if($casedecoded != 0 )
                {
                    //check if the user has the view role or all view of the case
                    if($this->mng_auth->IsViewable())
                    {
                        $caseURN = $casedecoded; 
                         //get vehicle urn pictures
                         //get all vehicle records by case number
                        //integrate ajax pagination
                        $str_post_str = '&ajax=1&caseid='.$enc_caseid;
                        $recpage  = $this->config->item('recordview');                  
                        $starting = $this->input->post('starting');    
                        //if its the first page than show starting from 0
                        if(!$starting) 
                        {
                            $starting =0;
                        }
                        $picObj = $this->case_model->GetPicture($starting,$recpage,FALSE,$caseURN);
                        if($picObj)
                        {
                            //display view of the picture
                            $Image="
                                <div class=\"imagepanel2\">
                                     <a href=\"javascript: void(0);\" class=\"imageborder2\">
                                     <img src=\"".base_url()."image/index/".$picObj->row()->picture."\"  /></a>
                                </div>
                               ";
                            
                        }
                        $data['image']      = $Image;
                        $data['encoded']      = $enc_caseid;
                        $data['pic_id']      = $picObj->row()->id;
                        //get pagination details
                        $this->ajax_pagination->make_search(
                            $this->case_model->TotalPictures($caseURN),
                            $starting,
                            $recpage,
                            $this->lang->line('case_first'),
                            $this->lang->line('case_last'),
                            $this->lang->line('case_previous'),
                            $this->lang->line('case_next'),
                            $this->lang->line('case_page'),
                            $this->lang->line('case_of'),
                            $this->lang->line('case_total'),
                            base_url()."case/home/listpictures",
                            'vehicleimgid',
                            $str_post_str
                        );
                        //provide to view of the page
                        $data['links']     = $this->ajax_pagination->anchors;
                        $data['total']     = $this->ajax_pagination->total;   
                        $data['page']      = $starting;
                        if($this->input->post('ajax') ==1)
                        {
                            $imageView = $this->load->view("case/case_imageview",$data);
                        }
                        else
                        {
                            //load image view file
                            $imageView = $this->load->view("case/case_imageview",$data,TRUE);
                            $datapop['content'] = $imageView;
                            $datapop['title']   = $this->lang->line('case_image')." - ".$caseURN;
                            $datapop['buttons'] = "<input type=\"button\" class=\"searchButton rightBtn\" value=\"".$this->lang->line('case_closebtn')."\" onclick=\"javascript: delete_foo();\"/>";
                            $this->load->view("case/ajaxpopup",$datapop);
                        } 
                    }   
                }
            }
        }
        //edit case 
        function EditCase($caseurn = 0,$dtype = 1)
        {
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                 //verify case number
                $isEditable = true;
                 $enc_caseid  = $caseurn;
                 $casedecoded = $this->mng_auth->check_case_id($enc_caseid); 
                 if($casedecoded!=0)
                 {
                    
                   if(1)
                   {
                    
                    //form validation rules 
                    $this->form_validation->set_rules('n_ministry', "", 'required|trim');    
                    $this->form_validation->set_rules('n_department', "", 'required|trim');    
                    $this->form_validation->set_rules('n_request_type',"", 'required|trim');
                    $this->form_validation->set_rules('nontranfer',"", 'trim');     
                    $this->form_validation->set_rules('price',"", 'trim');     
                    $this->form_validation->set_rules('area',"", 'trim');     
                    $this->form_validation->set_rules('type',"", 'trim');     
                    $this->form_validation->set_rules('transf',"", 'trim');     
                    $this->form_validation->set_rules('bprice',"", 'trim'); 
               /* Request # 3789  (2020-10-05) (Line) - Changes start here */
                    $this->form_validation->set_rules('reg_feesa',"", 'trim');  
                    $this->form_validation->set_rules('bankreca',"", 'trim');     
                    $this->form_validation->set_rules('reg_feesb',"", 'trim');     
                    $this->form_validation->set_rules('bankrecb',"", 'trim');     
                    $this->form_validation->set_rules('reg_feesc',"", 'trim');     
                    $this->form_validation->set_rules('reg_feesd',"", 'trim');  
                    $this->form_validation->set_rules('bankrecd',"", 'trim');              
               /* Request # 3789  (2020-10-05) (Line) - Changes end here */
                    $this->form_validation->set_rules('bquantity',"", 'trim');     
                    $this->form_validation->set_rules('btype',"", 'trim');     
                    $this->form_validation->set_rules('disengage',"", 'trim');     
                    $this->form_validation->set_rules('divorse',"", 'trim');     
                    $this->form_validation->set_rules('separate',"", 'trim');     
                    $this->form_validation->set_rules('nafaqa',"", 'trim');     
                    $this->form_validation->set_rules('hazanat',"", 'trim');     
                    $this->form_validation->set_rules('other_legal_issue',"", 'trim');     
                    $this->form_validation->set_rules('repname',"", 'trim');     
                    $this->form_validation->set_rules('fname',"", 'trim');     
                    $this->form_validation->set_rules('gfname',"", 'trim');     
                    $this->form_validation->set_rules('licenseno',"", 'trim');     
                    $this->form_validation->set_rules('repno',"", 'trim');     
                    $this->form_validation->set_rules('repphone',"", 'trim');     
                    
                    $this->form_validation->set_rules('repname2',"", 'trim');     
                    $this->form_validation->set_rules('fname2',"", 'trim');     
                    $this->form_validation->set_rules('gfname2',"", 'trim');     
                    $this->form_validation->set_rules('licenseno2',"", 'trim');     
                    $this->form_validation->set_rules('repno2',"", 'trim');     
                    $this->form_validation->set_rules('repphone2',"", 'trim');     
    
                    $this->form_validation->set_rules('order_place',"", 'trim');     
                    $this->form_validation->set_rules('court_prdec',"", 'trim');     
                    $this->form_validation->set_rules('place_birth',"", 'trim');     
                    $this->form_validation->set_rules('inviter_profile',"", 'trim');     
                    $this->form_validation->set_rules('inviter_phone',"", 'trim');     
                    $this->form_validation->set_rules('none_invite',"", 'trim');     
                    $this->form_validation->set_rules('invite_letter',"", 'trim');     
                    $this->form_validation->set_rules('zname',"", 'trim');     
                    $this->form_validation->set_rules('zfname',"", 'trim');     
                    $this->form_validation->set_rules('zbplace',"", 'trim');     
                    $this->form_validation->set_rules('zcplace',"", 'trim');     
                    $this->form_validation->set_rules('ztazkirano',"", 'trim');     
                    $this->form_validation->set_rules('zno',"", 'trim');     
                    $this->form_validation->set_rules('zofficialno',"", 'trim');     
                    $this->form_validation->set_rules('zcompanyno',"", 'trim');     
                    $this->form_validation->set_rules('zcompanyloc',"", 'trim');     
                    $this->form_validation->set_rules('zphone',"", 'trim');     
                    $this->form_validation->set_rules('prof_name',"", 'trim');     
                    $this->form_validation->set_rules('prof_fname',"", 'trim');     
                    $this->form_validation->set_rules('prof_office',"", 'trim');     
                    $this->form_validation->set_rules('prof_phone',"", 'trim');     
                    $this->form_validation->set_rules('per_determination',"", 'trim');     
                    $this->form_validation->set_rules('per_amount',"", 'trim');     
                    $this->form_validation->set_rules('per_tenth',"", 'trim');     
                    $this->form_validation->set_rules('per_bankrec',"", 'trim');     
                    $this->form_validation->set_rules('per_refdocs',"", 'trim');
                     //------3775-----start-----------------------------------
                    $this->form_validation->set_rules('no_of_papers',"", 'trim'); 
                    //------3775------end-------------------------------------------- 
                   //------3809-----start-----------------------------------
                    $this->form_validation->set_rules('other_deps',"", 'trim'); 
                   //------3809------end--------------------------------------------      
                    //-----3884-----start-------------------------------------------
                    $this->form_validation->set_rules('rec_number2',"", 'trim'); 
                    $this->form_validation->set_rules('issnumber2',"", 'trim'); 
                    $this->form_validation->set_rules('sender2',"", 'trim'); 
                    $this->form_validation->set_rules('receiver2',"", 'trim');
                     //-----3884-----end------------------------------------------- 
                     //-----3883-----start-------------------------------------------
                    $this->form_validation->set_rules('req_type2',"", 'trim'); 
                    //------3883------end--------------------------------------------  
                    $this->form_validation->set_rules('per_remarks',"", 'trim');     
                    $this->form_validation->set_rules('per_implement',"", 'trim');     
                    
                    
                    $this->form_validation->set_rules('imp_discuss',"", 'trim');     
                    $this->form_validation->set_rules('imp_amount',"", 'trim');     
                    $this->form_validation->set_rules('imp_educ',"", 'trim');     
                    $this->form_validation->set_rules('imp_nextauth',"", 'trim');     
                    $this->form_validation->set_rules('imp_bank',"", 'trim');     
                    $this->form_validation->set_rules('imp_amount',"", 'trim');     
                    $this->form_validation->set_rules('imp_remarks',"", 'trim'); 
                    
                    $this->form_validation->set_rules('invite_no',"", 'trim');     
                    $this->form_validation->set_rules('invite_place',"", 'trim');     
                    $this->form_validation->set_rules('invite_no2',"", 'trim');     
                    $this->form_validation->set_rules('invite_place2',"", 'trim'); 
                    $this->form_validation->set_rules('invite_no3',"", 'trim'); 
                    $this->form_validation->set_rules('invite_place3',"", 'trim');
                    if ($this->form_validation->run() == FALSE) // validation hasn't been passed 
                    {
                        
                        //==== get case details === 
                        $caserow = $this->case_model->GetOneRecord("law","*","id",$casedecoded)->row();
                        $data['rowobj'] = $caserow;
                        $data['enc_caseid'] = $enc_caseid;
                        
                        //====get country list and provide Afghanistan selection ====
                        $allcountry = $this->province_model->GetAllCountries($this->mng_auth->get_language());
                        $country_opt = "";
                        $ploc_country = "";
                        $ploc_country2 = "";
                        $rep_country = "";
                        $rep_country2 = "";
                        $order_country = "";
                     
                        if($allcountry)
                        {
                            if($allcountry->num_rows()>0)
                            {
                                foreach($allcountry->result() as $item=>$val)
                                {
                                    //set selected option
                                    if($val->id ==  1)
                                    {
                                        $country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id,TRUE).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id).">".$val->name."</option>";  
                                    }
                                    
                                    if($val->id == $caserow->ploc_country)
                                    {
                                        $ploc_country.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id,TRUE).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $ploc_country.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id).">".$val->name."</option>";  
                                    }
                                    
                                    if($val->id == $caserow->ploc_country2)
                                    {
                                        $ploc_country2.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id,TRUE).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $ploc_country2.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id).">".$val->name."</option>";  
                                    }
                                    if($val->id == $caserow->rep_country)
                                    {
                                        $rep_country.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id,TRUE).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $rep_country.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id).">".$val->name."</option>";  
                                    }
                                    if($val->id == $caserow->rep_country2)
                                    {
                                        $rep_country2.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id,TRUE).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $rep_country2.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id).">".$val->name."</option>";  
                                    }
                                    
                                    if($val->id == $caserow->order_country)
                                    {
                                        $order_country.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id,TRUE).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $order_country.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id).">".$val->name."</option>";  
                                    } 
                                }
                            }
                        } 
                        $data['country_opt'] = $country_opt;
                        $data['ploc_country'] = $ploc_country;
                        $data['ploc_country2'] = $ploc_country2;
                        $data['rep_country'] = $rep_country;
                        $data['rep_country2'] = $rep_country2;
                        $data['order_country'] = $order_country;
                        
                        //################## AREEZ AND MARROOZ DETAILS ###################
                        //--- get areez data ---
                        $areezObj = "";
                        //--- get time stamp data and display in the list ---
                        $areezObj = $this->case_model->getAreez($casedecoded,$this->mng_auth->get_language());
                        if($areezObj)
                        {  
                           $data['areezObj']   = $areezObj;
                          
                        }
                        //--- get marooz data ---
                        $maroozObj = "";
                        //--- get time stamp data and display in the list ---
                        $maroozObj = $this->case_model->getMarooz($casedecoded,$this->mng_auth->get_language());
                        if($maroozObj)
                        {  
                           $data['maroozObj']   = $maroozObj;
                          
                        }
                        
                        //provide case owner
                        $data['caseowner'] = $this->mng_auth->GetCaseOwner($this->mng_auth->get_user_id()); 
                        
                        //==== dob details =====
                        $data['b_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),0,0,1);
                        $data['b_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),0,0,1);
                        $data['b_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),0,0,1);
                   /* Request # 3789  (2020-10-05) (Line) - Changes start here */
                         $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             
                             $dateattor = explode("-",$caserow->per_bankrecdate_pr);
                             $data['pr_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['pr_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['pr_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->per_bankrecdate_pr);  
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['pr_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['pr_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['pr_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }

                          $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             
                             $dateattor = explode("-",$caserow->per_bankrecdate_bus);
                             $data['bus_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['bus_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['bus_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->per_bankrecdate_bus);  
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['bus_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['bus_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['bus_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }
                          $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             
                             $dateattor = explode("-",$caserow->per_bankrecdate_oth);
                             $data['oth_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['oth_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['oth_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->per_bankrecdate_oth);  
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['oth_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['oth_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['oth_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }
                        /* Request # 3789  (2020-10-05) (Line) - Changes end here */
                        //----- attorney date1 -----
                        $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             
                             $dateattor = explode("-",$caserow->att_repdate);
                             $data['att_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['att_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['att_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->att_repdate);  
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['att_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['att_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['att_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }
                        //----- attorney date2 -----
                        $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             
                             $dateattor = explode("-",$caserow->att_repdate2);
                             $data['att_day2']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['att_month2']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['att_year2']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->att_repdate2);  
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['att_day2']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['att_month2']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['att_year2']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }
                        $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             
                             $dateattor = explode("-",$caserow->hq_presdate);
                             $data['pres_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['pres_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['pres_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->hq_presdate);  
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['pres_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['pres_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['pres_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }
                        $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             
                             $dateattor = explode("-",$caserow->hq_issuedate);
                             $data['hqis_day']      = $this->datedetails_req(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['hqis_month']    = $this->datedetails_req(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['hqis_year']     = $this->datedetails_req(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->hq_issuedate);  
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['hqis_day']      = $this->datedetails_req(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['hqis_month']    = $this->datedetails_req(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['hqis_year']     = $this->datedetails_req(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }
                    
//-------3884----start--added to edit the recieve date and send date---------------
                        $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             $dateattor = explode("-",$caserow->send_date2);
                             $data['send_daygcase']      = $this->datedetails_req(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['send_monthgcase']    = $this->datedetails_req(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['send_yeargcase']     = $this->datedetails_req(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->send_date2);  
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['send_daygcase']      = $this->datedetails_req(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['send_monthgcase']    = $this->datedetails_req(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['send_yeargcase']     = $this->datedetails_req(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }
                        
                        $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             $dateattor = explode("-",$caserow->rec_date2);
                             $data['rec_daygcase']      = $this->datedetails_req(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['rec_monthgcase']    = $this->datedetails_req(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['rec_yeargcase']     = $this->datedetails_req(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->rec_date2);  
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['rec_daygcase']      = $this->datedetails_req(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['rec_monthgcase']    = $this->datedetails_req(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['rec_yeargcase']     = $this->datedetails_req(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }
//---3884---end---added to edit the recieve date and send date---------                    
                            $dateattor = "";
                            if($this->mng_auth->get_language() == "en")
                            {
                             
                             $dateattor = explode("-",$caserow->hq_invitedate);
                             $data['inv_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['inv_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['inv_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->hq_invitedate);  
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['inv_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['inv_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['inv_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }
                        $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             
                             $dateattor = explode("-",$caserow->hq_invitedate2);
                             $data['inv_day2']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['inv_month2']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['inv_year2']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->hq_invitedate2);  
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['inv_day2']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['inv_month2']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['inv_year2']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }
                        $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             
                             $dateattor = explode("-",$caserow->hq_invitedate3);
                             $data['inv_day3']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['inv_month3']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['inv_year3']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->hq_invitedate3);  
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['inv_day3']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['inv_month3']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['inv_year3']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }
                        
                        
                        //----- zamanat letter date ---
                        $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             
                             $dateattor = explode("-",$caserow->hq_zadate);
                             $data['hqz_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['hqz_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['hqz_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->hq_zadate);  
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['hqz_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['hqz_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['hqz_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }
                        //----- bank receive date ---
                        $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             
                             $dateattor = explode("-",$caserow->per_bankrecdate);
                             $data['hqb_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['hqb_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['hqb_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->per_bankrecdate);  
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['hqb_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['hqb_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['hqb_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }
                        
                         //-----Save Date 
                        $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             
                             $dateattor = explode("-",$caserow->hq_jalbsavedate);
                             $data['csv_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['csv_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['csv_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->hq_jalbsavedate);       
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['csv_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['csv_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['csv_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        }
                        
                        //-----Register Date 
                        $dateattor = "";
                        if($this->mng_auth->get_language() == "en")
                        {
                             
                             $dateattor = explode("-",$caserow->hq_regdate);        
                             $data['reg_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                             $data['reg_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['reg_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                        }
                        else
                        {
                             $dateattor   = explode("-",$caserow->hq_regdate);       
                             $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                             $dateattor   = explode("-",$detdatehj);
                             $data['reg_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                             $data['reg_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                             $data['reg_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                        } 
                        ///
                        //###################### Get all ministries which access to civil cms ########
                        $departmentcode = "00";
                        $ministrycode   = "00";
                        $ministryObj = $this->mng_auth->GetAllParDeps(array('1000000001'));
                        //GetParentDep
                        //$ministryObj = $this->mng_auth->GetDepartmentByChild($ministries);
                        //---- checkif there is any object  returned
                        if($ministryObj)
                        { 
                             $ministopt = "<option value=\"\" >".$this->lang->line('case_selectdep2')."</option>";
                             foreach($ministryObj->result() AS $item)
                             {
                                 if($caserow->ministry == $item->id)
                                 {
                                    $ministrycode = $item->org_code; 
                                    $ministopt .= "<option value=\"".$item->id."_".$item->org_code."\" selected=\"selected\">".$item->name."</option>";
                                 }
                                 else
                                 {
                                    $ministopt .= "<option value=\"".$item->id."_".$item->org_code."\">".$item->name."</option>";
                                 }
                             } 
                        }
                        $data['minisopt']        = $ministopt; 
                        $allDeps = $this->mng_auth->GetAllParProvince(array($caserow->ministry),$caserow->order_province);
                        $depoption = "";
                        $depoption = "<option value=\"\" selected=\"selected\">".$this->lang->line('case_selectdep')."</option>";
                        if($allDeps)
                        {
                            foreach($allDeps->result() AS $item)
                            {
                                if($caserow->department == $item->id)
                                {
                                    $departmentcode = $item->org_code;
                                    $depoption .="<option value=\"".$item->id."_".$item->org_code."\" selected=\"selected\">".$item->name."</option>"; 
                                }
                                else
                                {
                                    $depoption .="<option value=\"".$item->id."_".$item->org_code."\">".$item->name."</option>"; 
                                }
                            }
                        }
                        $data['departments']     = $depoption;
                        
                        $data['departmentcode']  = $departmentcode;
                        $data['ministrycode']    = $ministrycode;
                        
                        //--- case number ===
                        $casenumber = explode("-",$caserow->case_number);
                        $cprcode = $casenumber[2];
                        $cdscode = $casenumber[3];
                        
                        $year   = $casenumber[4];
                        $d1     = substr($casenumber[5],0,1);
                        $d2     = substr($casenumber[5],1,1);
                        $d3     = substr($casenumber[5],2,1);
                        $d4     = substr($casenumber[5],3,1);
                 
                        $data['cprcode'] =$cprcode;
                        $data['cdscode'] =$cdscode;
                        $data['yearcode'] =$year;
                        $data['d1'] =  $d1;
                        $data['d2'] =  $d2;
                        $data['d3'] =  $d3;
                        $data['d4'] =  $d4;
                        // initial crime detection 
                        $req_type = "";
                        $reqObj = $this->statictables_model->GetCaseStatic_Tables2(1,0,0,TRUE,$this->mng_auth->get_language());
                        if($reqObj)
                        {
                            foreach($reqObj->result() as $row)
                            {
                                if($row->id == $caserow->ar_type)
                                //Zendesk #1117
                                //25.11.2019 Sultan Ali activating 'Other' option in Case subject Dropdown for both law and state cases edit pages,disabled='disabled' value removed from option tag on line 4044.
                                //if changed to else if on line 4042 to remove duplicate 'Other' option in the Case subject dropdown in edit page.
                                {
                                    $req_type.="<option value = '".$row->id."' ".set_select('req_type', $row->id,TRUE).">".$row->name_en."</option>";
                                }
                                else if($row->id!=4)
                                {
                                   $req_type.="<option value = '".$row->id."' ".set_select('req_type', $row->id).">".$row->name_en."</option>";
                                }

                                else if($row->id==4)
                                {
                                    $req_type.="<option value = '".$row->id."' ".set_select('req_type', $row->id).">".$row->name_en."</option>";
                                }
                            }
                        }        
                        $data['request_type'] = $req_type;
                         // case civil 3739   =========
                     $ruling_type  = "";
                     $rullSelect="";
                     $rullObj2 = $this->statictables_model->GetCaseStatic_Tables2(29,0,0,TRUE,$this->mng_auth->get_language());
                     if($rullObj2)
                     {
                        foreach($rullObj2->result() as $row_rull)
                        {
                            if($row_rull->id == $caserow->rulling_type)
                            {
                                $rullSelect="selected";
                                $ruling_type.="<option value = '".$row_rull->id."'".$rullSelect.">".$row_rull->name_en."</option>";
                            }
                            else
                            {
                                $rullSelect="";
                                $ruling_type.="<option value = '".$row_rull->id."' ".$rullSelect.">".$row_rull->name_en."</option>";
                            }
                        
                        }
                     }
                     $data['rulling_type'] = $ruling_type;

                        // ====== case 3739 end ====================       
               /* Request # 3789  (2020-10-05) (Line) - Changes start here */
                     $reg_fees  = "";
                     $regSelect="";
                     $regObj2 = $this->statictables_model->GetCaseStatic_Tables2(31,0,0,TRUE,$this->mng_auth->get_language());
                     if($regObj2)
                     {
                        foreach($regObj2->result() as $row_reg)
                        {
                            if($row_reg->id == $caserow->reg_fees_oth)
                            {
                                $regSelect="selected";
                                $reg_fees.="<option value = '".$row_reg->id."'".$regSelect.">".$row_reg->name_en."</option>";
                            }
                            else
                            {
                                $regSelect="";
                                $reg_fees.="<option value = '".$row_reg->id."' ".$regSelect.">".$row_reg->name_en."</option>";
                            }
                        
                        }
                     }
                     $data['registeration_fees'] = $reg_fees;
               
               /* Request # 3789  (2020-10-05) (Line) - Changes end here */
    //-------3883--------start---added to get the 'type' drop down displayed -------------------
                        $type3 = "";
                        $reqObj3 = $this->statictables_model->GetCaseStatic_Tables2(22,0,0,TRUE,$this->mng_auth->get_language());
                        if($reqObj3)
                        {
                            foreach($reqObj3->result() as $row)
                            {
                                if($row->id == $caserow->type2)
                                
                                {
                                    $type3.="<option value = '".$row->id."' ".set_select('type3', $row->id,TRUE).">".$row->name_en."</option>";
                                }
                                else if($row->id!=273)
                                {
                                   $type3.="<option value = '".$row->id."' ".set_select('type3', $row->id).">".$row->name_en."</option>";
                                }

                                else if($row->id==273)
                                {
                                    $type3.="<option value = '".$row->id."' ".set_select('type3', $row->id).">".$row->name_en."</option>";
                                }
                            }
                        }        
                        $data['type3'] = $type3;
//---------3883--------end-----added to get the 'type' drop down displayed-----------------  
                        
                        $order_province = "";
                        $ar_pbprovince ="";
                        $ar_pcprovince ="";
                        $mr_pbprovince ="";
                        $mr_pcprovince ="";
                        $pr_province ="";
                        $bs_province ="";
                        // get province
                        $province_opt = "";
                        
                        //---- attorney province ----
                        $att_province ="";
                        $att_province2 ="";
                        
                        //$allpr = $this->province_model->GetAllProvinces(0,0,TRUE,$this->mng_auth->get_language());
                        $allpr = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());                     
                        if($allpr)
                        {
                            if($allpr->num_rows()>0)
                            {
                                foreach($allpr->result() as $item=>$val)
                                {
                                    
                                    //pr province for emlaki
                                    if($val->code == $caserow->pr_province)
                                    {
                                        $pr_province.="<option value ='".$val->code."' ".set_select('n_prov',$val->code,true).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $pr_province.="<option value ='".$val->code."' ".set_select('n_prov',$val->code).">".$val->name."</option>";    
                                    }
                                    
                                    //pr province for emlaki
                                    if($val->code == $caserow->bs_province)
                                    {
                                        $bs_province.="<option value ='".$val->code."' ".set_select('n_prov',$val->code,true).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $bs_province.="<option value ='".$val->code."' ".set_select('n_prov',$val->code).">".$val->name."</option>";    
                                    }
                                    
                                    //attorney province ====
                                    if($val->code == $caserow->att_pbprovince)
                                    {
                                        $att_province.="<option value ='".$val->code."' ".set_select('n_prov',$val->code,true).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $att_province.="<option value ='".$val->code."' ".set_select('n_prov',$val->code).">".$val->name."</option>";    
                                    }
                                    
                                    //attorney province ====
                                    if($val->code == $caserow->att_pbprovince2)
                                    {
                                        $att_province2.="<option value ='".$val->code."' ".set_select('n_prov',$val->code,true).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $att_province2.="<option value ='".$val->code."' ".set_select('n_prov',$val->code).">".$val->name."</option>";    
                                    }
                                    
                                    //attorney province ====
                                    if($val->code == $caserow->order_province)
                                    {
                                        $order_province.="<option value ='".$val->code."' ".set_select('n_prov',$val->code,true).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $order_province.="<option value ='".$val->code."' ".set_select('n_prov',$val->code).">".$val->name."</option>";    
                                    }
                                    
                                }
                            }
                        }
                        $data['ar_pbprovince'] = $ar_pbprovince;  
                        $data['ar_pcprovince'] = $ar_pcprovince;  
                        $data['mr_pbprovince'] = $mr_pbprovince;  
                        $data['mr_pcprovince'] = $mr_pcprovince;  
                        $data['pr_province']   = $pr_province;  
                        $data['bs_province']   = $bs_province;  
                        $data['province']      = $ar_pbprovince;  
                        $data['att_province']  = $att_province;  
                        $data['att_province2'] = $att_province2;  
                        $data['order_province'] = $order_province;  
                        //================= ORDER DISTRICT =============
                        $order_district = "";
                        if($caserow->order_province > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetDistrictsByProvince(0,0,TRUE,$this->mng_auth->get_language(),$caserow->order_province); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->code == $caserow->order_district)
                                       {
                                           $order_district.="<option value=\"".$val->code."\" selected=\"selected\">".$val->name."</option>";
                                          
                                       }
                                       else
                                       {
                                           $order_district.="<option value=\"".$val->code."\" >".$val->name."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['order_district'] = $order_district;  
                        
                        
                        //######### get personnel moolki district ##########
                        $pr_district = "";
                        $pr_code = "0";
                        if($caserow->pr_province > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetDistrictsByProvince(0,0,TRUE,$this->mng_auth->get_language(),$caserow->pr_province); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->code == $caserow->pr_district)
                                       {
                                           $pr_district.="<option value=\"".$val->code."\" selected=\"selected\">".$val->name."</option>";
                                           $pr_code = $val->code;
                                       }
                                       else
                                       {
                                           $pr_district.="<option value=\"".$val->code."\" >".$val->name."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['pr_district'] = $pr_district; 
                        //######### get bs district ##########
                        $bs_district = "";
                        $bs_code = "0";
                        if($caserow->bs_province > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetDistrictsByProvince(0,0,TRUE,$this->mng_auth->get_language(),$caserow->bs_province); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->code == $caserow->bs_district)
                                       {
                                           $bs_district.="<option value=\"".$val->code."\" selected=\"selected\">".$val->name."</option>";
                                           $bs_code = $val->code;
                                       }
                                       else
                                       {
                                           $bs_district.="<option value=\"".$val->code."\" >".$val->name."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['bs_district'] = $bs_district;                           
                        //######### Get attorney district ##########
                        $att_district = "";
                        $att_code = "0";
                        if($caserow->att_pbprovince > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetDistrictsByProvince(0,0,TRUE,$this->mng_auth->get_language(),$caserow->att_pbprovince); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->code == $caserow->att_pbdistrict)
                                       {
                                           $att_district.="<option value=\"".$val->code."\" selected=\"selected\">".$val->name."</option>";
                                           $att_code = $val->code;
                                       }
                                       else
                                       {
                                           $att_district.="<option value=\"".$val->code."\" >".$val->name."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['att_district'] = $att_district;  
                         //######### Get attorney district2 ##########
                        $att_district2 = "";
                        $att_code2 = "0";
                        if($caserow->att_pbprovince2 > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetDistrictsByProvince(0,0,TRUE,$this->mng_auth->get_language(),$caserow->att_pbprovince2); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->code == $caserow->att_pbdistrict2)
                                       {
                                           $att_district2.="<option value=\"".$val->code."\" selected=\"selected\">".$val->name."</option>";
                                           $att_code2 = $val->code;
                                       }
                                       else
                                       {
                                           $att_district2.="<option value=\"".$val->code."\" >".$val->name."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['att_district2'] = $att_district2;                          
                        
                        //######### get mooolki current villages ##########
                        $pr_village = "";
                        if($pr_code > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetVillageByDistrict(0,0,TRUE,$this->mng_auth->get_language(),$pr_code); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->villagecode == $caserow->pr_village)
                                       {
                                           $pr_village.="<option value=\"".$val->villagecode."\" selected=\"selected\">".$val->villagename."</option>";
                                       }
                                       else
                                       {
                                           $pr_village.="<option value=\"".$val->villagecode."\" >".$val->villagename."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['pr_village'] = $pr_village;
                        //######### get business current villages ##########
                        $bs_village = "";
                        if($bs_code > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetVillageByDistrict(0,0,TRUE,$this->mng_auth->get_language(),$bs_code); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->villagecode == $caserow->bs_village)
                                       {
                                           $bs_village.="<option value=\"".$val->villagecode."\" selected=\"selected\">".$val->villagename."</option>";
                                       }
                                       else
                                       {
                                           $bs_village.="<option value=\"".$val->villagecode."\" >".$val->villagename."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['bs_village'] = $bs_village;
                        //######### get attorney villages ##########
                        $att_village = "";
                        if($att_code > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetVillageByDistrict(0,0,TRUE,$this->mng_auth->get_language(),$att_code); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->villagecode == $caserow->att_pbvillage)
                                       {
                                           $att_village.="<option value=\"".$val->villagecode."\" selected=\"selected\">".$val->villagename."</option>";
                                       }
                                       else
                                       {
                                           $att_village.="<option value=\"".$val->villagecode."\" >".$val->villagename."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['att_village'] = $att_village;
                        //######### get attorney villages2 ##########
                        $att_village2 = "";
                        if($att_code2 > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetVillageByDistrict(0,0,TRUE,$this->mng_auth->get_language(),$att_code2); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->villagecode == $caserow->att_pbvillage2)
                                       {
                                           $att_village2.="<option value=\"".$val->villagecode."\" selected=\"selected\">".$val->villagename."</option>";
                                       }
                                       else
                                       {
                                           $att_village2.="<option value=\"".$val->villagecode."\" >".$val->villagename."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['att_village2'] = $att_village2;
                        //------- get all crime types -----
                        //----- initiale crime detection ----
                         $empty_select = "";
                         $crlist = array();
                         $crtypedb = $caserow->crime_type; 
                         $crlist = array();
                         if(strlen($crtypedb)>0)
                         {
                             if(strpos($crtypedb,",") !== FALSE)
                             {
                                $crlist = explode(",",$crtypedb);
                             }
                             else
                             {
                                $crlist[] = $crtypedb;
                             }
                         }
                        // get Crime type
                        $crime = "";   
                        $empty_select = "";
                        $crimetitle = $this->crime_type_model->GetAllRecords(0,0,TRUE,$this->mng_auth->get_language());
                        if($crimetitle)
                        {
                            foreach($crimetitle->result() as $row)
                            {
                                if(in_array($row->id,$crlist))
                                {
                                    $crime.="<option value = '".$row->id."' selected=\"selected\">".$row->name."</option>";
                                }
                                else
                                {
                                    $crime.="<option value = '".$row->id."' >".$row->name."</option>"; 
                                    $empty_select = "selected=\"selected\"";
                                }
                            }
                        }
                         //---- check if there is any crime type then empty empty selection
                        if(strlen($crtypedb)>0)
                        {
                             $empty_select = "";
                        }
                        $data['crime'] = $crime;    
                        $data['emptyselect'] = $empty_select;    
                        
                        $this->load->model('users/user_model');
                    
                        $AllDepObj = $this->user_model->GetDepsByProvinceSenderReceiver($caserow->order_province,$this->mng_auth->get_language(),$this->mng_auth->default_mod,1);
                        //---- get departments ----
                        $senders_opt   = "";
                        $name='org_name'.$this->mng_auth->get_language();
                        $receivers_opt = "";
                        if($AllDepObj)
                        {
                            foreach($AllDepObj->result() AS $item)
                            {
                               $senders_opt.="<option value=\"".$item->id."\">".$item->$name."</option>";
                               $receivers_opt.="<option value=\"".$item->id."\">".$item->$name."</option>";
                            } 
                        }
                        $data['alldepobject'] = $AllDepObj;
                        $data['senders']   = $senders_opt;
                        $data['receivers'] = $receivers_opt;
                         //--- get the sender and receiver list ----
                        $dataSendRec = $this->case_model->getSendReceives($casedecoded,$this->mng_auth->get_language());
                        $data['records'] = $dataSendRec;
                        if($caserow->dtype == "2")
                        {

                            $recPrimaryList = $this->listProceedingRecords($casedecoded,$enc_caseid,1,$isEditable);
                            $recAppellateList = $this->listProceedingRecords($casedecoded,$enc_caseid,2,$isEditable);
                            $recTajdednazarList = $this->listProceedingRecords($casedecoded,$enc_caseid,5,$isEditable);
                            
                            $data['primary_list'] = $recPrimaryList; 
                            $data['appellate_list'] = $recAppellateList; 
                            $data['tajdednazar_list'] = $recTajdednazarList;    
                        }
                        
                        //---- case summary to be displayed at top ----
                        $summary = casesummary($casedecoded);
                        //###############3check if its gcase#########
                        $tpl_type = "";
                        if($caserow->dtype == "2")
                        {
                            $tpl_type = "cb";
                        }
                        else
                        {
                            $tpl_type = "ca";
                        }
                        //get all submodule list

//---3884---------------------------------------------start
                        $this->load->model('users/user_model');                    
                        $AllDepObj2 = $this->user_model->GetDepsByProvinceSenderReceiver($caserow->order_province,$this->mng_auth->get_language(),$this->mng_auth->default_mod,1);
                        
                        $senders_opt2   = "";
                        $name2='org_name'.$this->mng_auth->get_language();
                        $receivers_opt2 = "";
                        if($AllDepObj2)
                        {
                            foreach($AllDepObj2->result() AS $item2)
                            {
                               $senders_opt2.="<option value=\"".$item2->id."\">".$item2->id."</option>";
                               $receivers_opt2.="<option value=\"".$item2->id."\">".$item2->id."</option>";
                            } 
                        }

                         //$dataSendRec2 = $this->case_model->getSendReceives($casedecoded,$this->mng_auth->get_language());
                        $data['records2'] = $caserow;

                        $data['alldepobject2'] = $AllDepObj2;
                        $data['senders_opt2']   = $senders_opt2;
                        $data['receivers_opt2'] = $receivers_opt2;
    //---3884----------------------end------------------------------------

                        $message = $this->load->view("case/case_edit",$data,TRUE);   
                        $submodulelink = $this->mng_auth->allsubmodules_bymcode();
                        $tab_template  = tab_tpl_cms($submodulelink,$summary.$message,$tpl_type,$enc_caseid,"view");
                        //provide tab
                        //provide template to see
                        //place header file
                          
                        header_tpl($this->mng_auth->get_language());
                        
                        //include top banner 
                        banner_tpl();
                        //load left template
                        left_tpl();
                        //load right tpl
                        right_tpl(); 
                        
                        content_tpl($tab_template);
                        //end of develpers view
                        //provide footer
                        footer_tpl();                  
                    }
                    else
                    {
                        
                        // === check for the posted data and insert into the database ===
                        $casenumber = $this->input->post('mincode')."-".$this->input->post('depcode')."-".$this->input->post('prcode')."-".$this->input->post('discode')."-".$this->input->post('yearcode')."-".$this->input->post('d1').$this->input->post('d2').$this->input->post('d3').$this->input->post('d4');
                        //---- check case number and redirect in case if case number exists---
                        //=== get one record of the case ===
                        $caserow = $this->case_model->GetOneRecord("law","case_number,id","case_number",$casenumber);
                        //--- check if the case exist ---
                        if($caserow)
                        {
                           if($caserow->num_rows()>0)
                           {
                               
                                if($caserow->row()->id != $casedecoded)
                                {
                                    $this->session->set_flashdata('msg','<div class="error">'.$this->lang->line('det_invalid').'</div>');
                                    redirect('case/home/addcase','refresh');    
                                }
                           }
                           
                        } 
                        $crtype =$this->input->post('crimetypes'); 
                        $crimeTypes = "";
                        if(count($crtype)>0 && is_array($crtype))
                        {
                             //---check if there is any -1 found
                             if(in_array("-1",$crtype))
                             {
                                unset($crtype[0]); 
                             }
                             if(count($crtype)>1)
                             {
                                $crimeTypes = implode(",",$crtype);
                             }
                             else
                             {
                                sort($crtype);
                                if(count($crtype)>0)
                                { 
                                    $crimeTypes = $crtype[0];
                                }
                             }
                        }
                        $depid = "";
                        $minid = "";
                        $dep = explode("_",$this->input->post('n_department'));
                        $minist = explode("_",$this->input->post('n_ministry'));
                        $depid = $dep[0];
                        $minid = $minist[0];
                       //====== vissue date attorney date ===
                        $vissue_date    = datecheck($this->input->post('attyear'),$this->input->post('attmonth'),$this->input->post('attday'),$this->mng_auth->get_language());  
                        $vdoc_date    = datecheck($this->input->post('n_vdoc_year'),$this->input->post('n_vdoc_month'),$this->input->post('n_vdoc_day'),$this->mng_auth->get_language());  
//-3884--added to edit recive date and issue date---start-----------------
                          $rec_gcase_date    = datecheck($this->input->post('rec_year_gcase'),$this->input->post('rec_month_gcase'),$this->input->post('rec_day_gcase'),$this->mng_auth->get_language());
                          $send_gcase_date    = datecheck($this->input->post('send_year_gcase'),$this->input->post('send_month_gcase'),$this->input->post('send_day_gcase'),$this->mng_auth->get_language()); 
//-3884--added to edit recive date and issue date-----end--------- 
                        //$invite_date    = datecheck($this->input->post('invite_year'),$this->input->post('invite_month'),$this->input->post('invite_day'),$this->mng_auth->get_language());  
                        $zdate    = datecheck($this->input->post('zyear'),$this->input->post('zmonth'),$this->input->post('zday'),$this->mng_auth->get_language());  
                        $brecdate    = datecheck($this->input->post('bryear'),$this->input->post('brmonth'),$this->input->post('brday'),$this->mng_auth->get_language());  
                                              
                        //rep date 1
                        $attrepdate    = datecheck($this->input->post('repnoyear'),$this->input->post('repnomonth'),$this->input->post('repnoday'),$this->mng_auth->get_language());  
                        $attrepdate2    = datecheck($this->input->post('repnoyear2'),$this->input->post('repnomonth2'),$this->input->post('repnoday2'),$this->mng_auth->get_language());  
                        
                        $invite_date    = datecheck($this->input->post('invite_year'),$this->input->post('invite_month'),$this->input->post('invite_day'),$this->mng_auth->get_language());      
                        $invite_date2   = datecheck($this->input->post('invite_year2'),$this->input->post('invite_month2'),$this->input->post('invite_day2'),$this->mng_auth->get_language());      
                        $invite_date3   = datecheck($this->input->post('invite_year3'),$this->input->post('invite_month3'),$this->input->post('invite_day3'),$this->mng_auth->get_language());      
                       /* Request # 3789  (2020-10-05) (Line) - Changes start here */
                        $brecdate_pr    = datecheck($this->input->post('bryeara'),$this->input->post('brmontha'),$this->input->post('brdaya'),$this->mng_auth->get_language());
                        $brecdate_bu    = datecheck($this->input->post('bryearb'),$this->input->post('brmonthb'),$this->input->post('brdayb'),$this->mng_auth->get_language());
                        $brecdate_oth    = datecheck($this->input->post('bryeard'),$this->input->post('brmonthd'),$this->input->post('brdayd'),$this->mng_auth->get_language());
                    /* Request # 3789  (2020-10-05) (Line) - Changes end here */
                        ///---Case Save Date
                        $save_date      = datecheck($this->input->post('svyear'),$this->input->post('svmonth'),$this->input->post('svday'),$this->mng_auth->get_language());      
                        $doc_reg_date      = datecheck($this->input->post('reg_year'),$this->input->post('reg_month'),$this->input->post('reg_day'),$this->mng_auth->get_language());      
                          
                        //==== form data ====
               /* Request # 3789  (2020-10-05) (Line) - Changes start here */
                         $rega="";
                         $regb="";
                         $regc="";
                         if ($this->input->post('n_request_type')==1){
                            $rega=1;
                         }
                         else if ($this->input->post('n_request_type')==2){
                            $regb=2;
                         }
                         else if ($this->input->post('n_request_type')==3){
                            $regc=3;
                         }
               /* Request # 3789  (2020-10-05) (Line) - Changes end here */
                        $form_data = array(
                                            'case_number'            =>$casenumber,  
                                            'crime_type'             =>$crimeTypes,  
                                            'ar_type'                =>$this->input->post('n_request_type'),
                                            'pr_nontransf'           =>$this->input->post('nontranfer'),
                                            'pr_price'               =>$this->input->post('price'),
                                            'pr_borderarea'          =>$this->input->post('area'),
                                            'pr_type'                =>$this->input->post('type'),
                                            'pr_province'            =>$this->input->post('plocation'),
                                            'pr_district'            =>$this->input->post('plocdist'),
                                            'pr_village'             =>$this->input->post('plocvillage'),
                                            'bs_transf'              =>$this->input->post('transf'),
                                            'bs_price'               =>$this->input->post('bprice'),
                                         /* Request # 3789  (2020-10-05) (Line) - Changes start here */
                                            'reg_fees_pr'            =>$rega,
                                            'per_bankrec_pr'         =>$this->input->post('bankreca'),
                                            'per_bankrecdate_pr'     =>$brecdate_pr,
                                            'reg_fees_bus'           =>$regb,
                                            'per_bankrec_bus'        =>$this->input->post('bankrecb'),
                                            'per_bankrecdate_bus'    =>$brecdate_bu,
                                            'reg_fees_fam'           =>$regc,
                                            'reg_fees_oth'        =>$this->input->post('reg_feesd'),
                                            'per_bankrec_oth'        =>$this->input->post('bankrecd'),
                                            'per_bankrecdate_oth'    =>$brecdate_oth,
                                         /* Request # 3789  (2020-10-05) (Line) - Changes end here */
                                            'bs_quantity'            =>$this->input->post('bquantity'),
                                            'bs_type'                =>$this->input->post('btype'),
                                            'bs_province'            =>$this->input->post('ploc2'),
                                            'bs_district'            =>$this->input->post('plocdist2'),
                                            'bs_village'             =>$this->input->post('plocvillage2'),
                                            'fm_disnom'              =>$this->input->post('disengage'),
                                            'fm_divorce'             =>$this->input->post('divorse'),
                                            'fm_tafriq'              =>$this->input->post('separate'),
                                            'fm_nafkusut'            =>$this->input->post('nafaqa'),
                                            'fm_hazanat'             =>$this->input->post('hazanat'),
                                            'other_law_type'         =>$this->input->post('other_legal_issue'),
                                            'att_name'               =>$this->input->post('repname'),
                                            'att_fname'              =>$this->input->post('fname'),
                                            'att_gfname'             =>$this->input->post('gfname'),
                                            'att_license'             =>$this->input->post('licenseno'),
                                            'att_repno'             =>$this->input->post('repno'),
                                            'att_repdate'            =>$attrepdate,
                                            'att_phone'             =>$this->input->post('repphone'),
                                            
                                            'att_name2'               =>$this->input->post('repname2'),
                                            'att_fname2'              =>$this->input->post('fname2'),
                                            'att_gfname2'             =>$this->input->post('gfname2'),
                                            'att_license2'             =>$this->input->post('licenseno2'),
                                            'att_repno2'             =>$this->input->post('repno2'),
                                            'att_repdate2'            =>$attrepdate2,
                                            'att_phone2'             =>$this->input->post('repphone2'),
                                            
                                            'att_pbprovince'         =>$this->input->post('repprovince'),
                                            'att_pbdistrict'         =>$this->input->post('repdistrict'),
                                            'att_pbvillage'          =>$this->input->post('repvillage'),
                                            'att_pbprovince2'         =>$this->input->post('repprovince2'),
                                            'att_pbdistrict2'         =>$this->input->post('repdistrict2'),
                                            'att_pbvillage2'          =>$this->input->post('repvillage2'),
                                            'hq_presdate'            =>$vissue_date,
                                            'hq_placeissue'          =>$this->input->post('order_place'),
                                            'hq_issuedate'           =>$vdoc_date,
                                            'hq_prdecision'          =>$this->input->post('court_prdec'),
                                            'hq_inviteno'            =>$this->input->post('invite_no'),
                                            'hq_invitedate'          =>$invite_date,
                                            'hq_invite_place'        =>$this->input->post('invite_place'),
                                            'hq_inviteno2'            =>$this->input->post('invite_no2'),
                                            'hq_invitedate2'          =>$invite_date2,
                                            'hq_invite_place2'        =>$this->input->post('invite_place2'),
                                            'hq_inviteno3'            =>$this->input->post('invite_no3'),
                                            'hq_invitedate3'          =>$invite_date3,
                                            'hq_invite_place3'        =>$this->input->post('invite_place3'),
                                            'hq_address'              =>$this->input->post('place_birth'),
                                            'hq_jalbrec'              =>$this->input->post('inviter_profile'),
                                            'hq_jalbphone'            =>$this->input->post('inviter_phone'),
                                            'hq_jalbsave'             =>$this->input->post('none_invite'),
                                            //--Neww
                                            'hq_jalbsavedate'         =>$save_date,
                                            'hq_regdate'              =>$doc_reg_date,
                                            
                                            'hq_jalbfollow'           =>$this->input->post('invite_letter'),
                                            'hq_zname'                =>$this->input->post('zname'),
                                            'hq_zfname'               =>$this->input->post('zfname'),
                                            'hq_zpbaddress'           =>$this->input->post('zbplace'),
                                            'hq_zcurrentplace'        =>$this->input->post('zcplace'),
                                            'hq_ztazkirano'           =>$this->input->post('ztazkirano'),
                                            'hq_znumber'              =>$this->input->post('zno'),
                                            'hq_zadate'               => $zdate,
                                            'hq_zlicense'              =>$this->input->post('zofficialno'),
                                            'hq_zcompany'              =>$this->input->post('zcompanyno'),
                                            'hq_zcomaddress'           =>$this->input->post('zcompanyloc'),
                                            'hq_zphone'               =>$this->input->post('zphone'),
                                            'per_name'               =>$this->input->post('prof_name'),
                                            'per_fname'               =>$this->input->post('prof_fname'),
                                            'per_department'          =>$this->input->post('prof_office'),
                                            'per_phone'               =>$this->input->post('prof_phone'),
                                            'per_iswritten'           =>$this->input->post('per_iswritten'),
                                            'per_isrecon'             =>$this->input->post('per_isrecon'),
                                            'per_determination'       =>$this->input->post('per_determination'),
                                            'per_amount'              =>$this->input->post('per_amount'),
                                            'per_tenth'               =>$this->input->post('per_tenth'),
                                            'per_bankrec'             =>$this->input->post('per_bankrec'),
                                            'per_bankrecdate'         =>$brecdate,
                                            'per_refdoc'              =>$this->input->post('per_refdocs'),
                                            //-----------------3775---start-----------------
                                            'no_of_paper'              =>$this->input->post('no_of_papers'),
                                            //---------------3775---start----------------------------
                                            //-----------------3809---start-----------------
                                            'other_dep'              =>$this->input->post('other_deps'),
                                           //---------------3809---start----------------------------
                                            //-3884---start--for edit ------------------
                                            'rec_number2'              =>$this->input->post('rec_number2'),
                                            'send_date2'                =>$send_gcase_date,
                                            'rec_date2'                 =>$rec_gcase_date,
                                            'issue_number2'              =>$this->input->post('issnumber2'),
                                            'sender33'              =>$this->input->post('sender2'),
                                            'receiver33'              =>$this->input->post('receiver2'),
                                             //-3884---end---for edit----------------------
                                             //-3883---end---for edit----------------------
                                            'type2'              =>$this->input->post('req_type2'),
                                             //-3883---end---for edit----------------------
                                           
                                            'remarks'                 =>$this->input->post('per_remarks'),
                                            'order_province'          =>$this->input->post('n_province2'), 
                                            'order_district'          =>$this->input->post('n_district2'), 
                                            'ministry'                =>$minid, 
                                            'department'              =>$depid,
                                            'gper_negotiate'           =>$this->input->post('negotiate'),
                                          /* 'gper_isrecon'             =>$this->input->post('solut'),*/   
                                             // ticket 3739 ========================
                                            'rulling_type'           =>$this->input->post('rull_type'),
                                             // ticket 3739 end ==================
                                            'gper_verif'               =>$this->input->post('verif'),
                                            'gper_implement'           =>$this->input->post('per_implement'),
                                            'ploc_country'           =>$this->input->post('ploc_country'), 
                                            'ploc_country2'           =>$this->input->post('ploc_country2'), 
                                            'rep_country'           =>$this->input->post('rep_country'), 
                                            'rep_country2'           =>$this->input->post('rep_country2'), 
                                            'order_country'           =>$this->input->post('order_country'),             
                                       
                         );
                         
                        // run insert model to write data to db
                        if ($this->case_model->UpdateCase($form_data,$casedecoded,$this->mng_auth->get_user_id()) == TRUE) 
                        { 
                            
                            //---- addmultiple sender and receiver to the database ----
                            $rec_number = $this->input->post('rec_number');
                            $rec_dateday = $this->input->post('rday');
                            $rec_datemonth = $this->input->post('rmonth');
                            $rec_dateyear = $this->input->post('ryear');
                            $sender = $this->input->post('sender');
                            
                            $send_dateday = $this->input->post('sday');
                            $send_datemonth = $this->input->post('smonth');
                            $send_dateyear = $this->input->post('syear');
                            $issnumber = $this->input->post('issnumber');
                            $receiver = $this->input->post('receiver');
                            
                            //batch data
                            $batch_data = array();
                            if(count($rec_number)>0 && is_array($rec_number))
                            {
                                
                                //----batch insert by providing array ---
                                foreach($rec_number AS $key => $val)
                                {
                                //name val and other section key
                                //other selection
                                if(trim($val) != "" && $sender[$key] != "")
                                {
                                    $rec_date    = datecheck($rec_dateyear[$key],$rec_datemonth[$key],$rec_dateday[$key],$this->mng_auth->get_language());  
                                    $send_date    = datecheck($send_dateyear[$key],$send_datemonth[$key],$send_dateday[$key],$this->mng_auth->get_language());  
                                  
                                    $prdepid = array(
                                          'case_urn'      => $casedecoded,
                                          'rec_number'    => $val,
                                          'rec_date'      => $rec_date,
                                          'sender'        => $sender[$key],
                                          'issue_number'  => $issnumber[$key],
                                          'send_date'     => $send_date, 
                                          'receiver'      => $receiver[$key] 
                                      );
                                    //push in a global array
                                    array_push($batch_data,$prdepid);
                                } 
                                  
                            }
                            }
                            //remove case (law) send and receive
                            $this->case_model->removeAllSendRec($casedecoded);
                            if(count($batch_data)>0 && is_array($batch_data))
                            {
                                //--- insert batch data ---
                                $this->case_model->addLawSendRe($batch_data);  
                            }
                            
                            //check form type 
                            $msg = "";
                            if($dtype == "2")
                            {
                                $msg = $this->lang->line('gcase_editsuccmsg');
                            }
                            else
                            {
                                $msg = $this->lang->line('det_editmsg');
                            }
                            //----- updated case details ---
                            //set success message for the end user
                            $this->session->set_flashdata('msg','<div class="success">'.$msg.'</div>');
                            //the information has therefore been successfully saved in the db                                                
                            redirect('case/home/viewcase/'.$enc_caseid);   // or whatever logic needs to occur
                
                        }
                        else
                        {
                            //----- un successfull details -----
                             //----- updated case details ---
                            //set success message for the end user
                            $this->session->set_flashdata('msg','<div class="error">'.$this->lang->line('case_successfull_msg').'</div>');
                            //the information has therefore been successfully saved in the db                                                
                            redirect('case/home/viewcase/'.$enc_caseid);   // or whatever logic needs to occur
                
                        } 
                    }
                   }
                 }
                 else
                 {
                
                     //unautherized section
                     $this->load->view('unauthorized');
                 }
            }
        }

        //--- edit cse proceeeding ---
        function edit_case_proceeding($enc_id)
        {
            //---- check user is valide -----
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                //=== decrypt case id ===
                $id_decoded = $this->mng_auth->check_case_id($enc_id);

                //== check if decoded case id is valid ==
                if($id_decoded != 0 && $this->mng_auth->IsAddable('cb')==TRUE)
                { 
                    $recObj = $this->ghuquq_model->GetOneRecord("case_proceeding","*","id",$id_decoded);

                    if(!$recObj)
                    {
                        exit;
                    }
                    $rowObj = $recObj->row();
                    $dtype = $rowObj->table_type;
                    $data = array();
                    $casedecoded = $recObj->row()->case_urn;
                    //display primary edit form
                    // $data['enc_caseid'] = $enc_caseid;
                    $data['enc_id']     = $enc_id;
                    $data['dtype']     = $dtype;
                    
                    // initial crime detection 
                    $req_type = "";
                    $reqObj = $this->statictables_model->GetCaseStatic_Tables2(22,0,0,TRUE,$this->mng_auth->get_language());
                    if($reqObj)
                    {
                        foreach($reqObj->result() as $row)
                        {
                            if($row->id == $recObj->row()->type)
                            {
                               $req_type.="<option value = '".$row->id."' selected=\"selected\">".$row->name_en."</option>";
                            }
                            else
                            {
                               $req_type.="<option value = '".$row->id."'>".$row->name_en."</option>";
                            }
                        }
                    } 
                    
                    // court dec for primary court
                     $court_dec  = "";
                     $decSelect="";
                     $decObj2 = $this->statictables_model->GetCaseStatic_Tables2(23,0,0,TRUE,$this->mng_auth->get_language());
                     if($decObj2)
                     {
                        foreach($decObj2->result() as $row_dec)
                        {
                            if($row_dec->id == $recObj->row()->gov_benefit)
                            {
                                $decSelect="selected";
                                $court_dec.="<option value = '".$row_dec->id."'".$decSelect.">".$row_dec->name_en."</option>";
                            }
                            else
                            {
                                $decSelect="";
                                $court_dec.="<option value = '".$row_dec->id."' ".$decSelect.">".$row_dec->name_en."</option>";
                            }
                        
                        }
                     }
                     /* ticket 4007 ---------------------- */
                     $court_dec_nxt  = "";
                     $decSelect_nxt="";
                     $decObj2_nxt = $this->statictables_model->GetCaseStatic_Tables2(32,0,0,TRUE,$this->mng_auth->get_language());
                     if($decObj2_nxt)
                     {
                        foreach($decObj2_nxt->result() as $row_dec_nxt)
                        {
                            if($row_dec_nxt->id == $recObj->row()->gov_benefit_nxt)
                            {
                                $decSelect_nxt="selected";
                                $court_dec_nxt.="<option value = '".$row_dec_nxt->id."'".$decSelect_nxt.">".$row_dec_nxt->name_en."</option>";
                            }
                            else
                            {
                                $decSelect_nxt="";
                                $court_dec_nxt.="<option value = '".$row_dec_nxt->id."' ".$decSelect_nxt.">".$row_dec_nxt->name_en."</option>";
                            }
                        
                        }
                     }
                      $data['court_dec_oth']  = $court_dec_nxt;
                     /* ticket 4007 ----------------------------- end */
                     //land type dropdown 
                     $land_type  = "";
                     $landSelect="";
                     $decObj3 = $this->statictables_model->GetCaseStatic_Tables2(24,0,0,TRUE,$this->mng_auth->get_language());
                     if($decObj3)
                     {
                        foreach($decObj3->result() as $row_dec)
                        {
                            if($row_dec->id == $recObj->row()->land_type)
                            {
                                $landSelect="selected";
                                $land_type.="<option value = '".$row_dec->id."'".$landSelect.">".$row_dec->name_en."</option>";
                            }
                            else
                            {
                                $landSelect="";
                                $land_type.="<option value = '".$row_dec->id."' ".$landSelect.">".$row_dec->name_en."</option>";
                            }
                        
                        }
                     }
                     
                     //Money type dropdown 
                     $money_type  = "";
                     $moneySelect="";
                     $decObj4 = $this->statictables_model->GetCaseStatic_Tables2(25,0,0,TRUE,$this->mng_auth->get_language());
                     if($decObj4)
                     {
                        foreach($decObj4->result() as $row_dec)
                        {
                            if($row_dec->id == $recObj->row()->money_type)
                            {
                                $moneySelect="selected";
                                $money_type.="<option value = '".$row_dec->id."'".$moneySelect.">".$row_dec->name_en."</option>";
                            }
                            else
                            {
                                $moneySelect="";
                                $money_type.="<option value = '".$row_dec->id."' ".$moneySelect.">".$row_dec->name_en."</option>";
                            }
                        
                        }
                     }
                     
                     //Other type dropdown 
                     $other_type  = "";
                     $otherSelect="";
                     $decObj5 = $this->statictables_model->GetCaseStatic_Tables2(26,0,0,TRUE,$this->mng_auth->get_language());
                     if($decObj5)
                     {
                        foreach($decObj5->result() as $row_dec)
                        {
                            if($row_dec->id == $recObj->row()->other_type)
                            {
                                $otherSelect="selected";
                                $other_type.="<option value = '".$row_dec->id."'".$otherSelect.">".$row_dec->name_en."</option>";
                            }
                            else
                            {
                                $otherSelect="";
                                $other_type.="<option value = '".$row_dec->id."' ".$otherSelect.">".$row_dec->name_en."</option>";
                            }
                        
                        }
                     }
                                
                    $data['court_dec']  = $court_dec;
                    $data['land_type']  = $land_type;
                    $data['money_type'] = $money_type;
                    $data['other_type'] = $other_type;
                    $data['req_type']  = $req_type;
                    $data['data_rec']   = $recObj->row();
                    
                    //----- received date -----
                    $dateattor = "";
                    if($this->mng_auth->get_language() == "en")
                    {
                         
                         $dateattor = explode("-",$recObj->row()->rec_date);
                         $data['rec_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                         $data['rec_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                         $data['rec_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                    }
                    else
                    {
                         $dateattor   = explode("-",$recObj->row()->rec_date);  
                         $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                         $dateattor   = explode("-",$detdatehj);
                         $data['rec_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                         $data['rec_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                         $data['rec_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                    }
                    
                    if($this->mng_auth->get_language() == "en")
                    {
                         
                         $dateattor = explode("-",$recObj->row()->iss_date);
                         $data['iss_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                         $data['iss_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                         $data['iss_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                    }
                    else
                    {
                         $dateattor   = explode("-",$recObj->row()->iss_date);  
                         $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                         $dateattor   = explode("-",$detdatehj);
                         $data['iss_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                         $data['iss_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                         $data['iss_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                    }
                    
                    if($this->mng_auth->get_language() == "en")
                    {
                         
                         $dateattor = explode("-",$recObj->row()->provide_date);
                         $data['pr_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                         $data['pr_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                         $data['pr_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                    }
                    else
                    {
                         $dateattor   = explode("-",$recObj->row()->provide_date);  
                         $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                         $dateattor   = explode("-",$detdatehj);
                         $data['pr_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                         $data['pr_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                         $data['pr_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                    }
                    
                    if($this->mng_auth->get_language() == "en")
                    {
                         
                         $dateattor = explode("-",$recObj->row()->defprovide_date);
                         $data['dpr_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[2],1);
                         $data['dpr_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                         $data['dpr_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[0],1);
                    }
                    else
                    {
                         $dateattor   = explode("-",$recObj->row()->defprovide_date);  
                         $detdatehj = $this->dateconverter->Toshamsi_short($dateattor[0],$dateattor[1],$dateattor[2]);    
                         $dateattor   = explode("-",$detdatehj);
                         $data['dpr_day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),1,$dateattor[0],1);
                         $data['dpr_month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),1,$dateattor[1],1);
                         $data['dpr_year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),1,$dateattor[2],1);
                    }
                    
                    
                    $data['day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),0,0,1);
                    $data['month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),0,0,1);
                    $data['year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),0,0,1);
                    
                    // $recSupList = $this->listProceedingRecords($casedecoded,$enc_caseid,3);
                    
                    // get list of all agencies/ministires
                    $ministryObj = $this->mng_auth->GetAllParDeps(array('1000000001'));
                    //---- checkif there is any object  returned
                    if($ministryObj)
                    {
                        $ministopt = "<option value=\"\"  selected=\"selected\">".$this->lang->line('selectmin')."</option>";
                        foreach($ministryObj->result() AS $item)
                        {
                            log_message('DEBUG', 'controllers/ghuquq>editcase : min: ' . $rowObj->ministry . ", dep: " . $item->id);
                            if($rowObj->ministry == $item->id)
                            {
                                $ministopt .= "<option value=\"".$item->id."\" selected=\"selected\">".$item->name."</option>";
                                  
                            }
                            else
                            {
                                $ministopt .= "<option value=\"".$item->id."\">".$item->name."</option>";
                            }
                        }
                    }
                    $data['minisopt'] = $ministopt;     

                    $data['departments'] = "";
                    //--- department option ---
                     $AllDepObj = $this->mng_auth->GetAllParDeps(array($rowObj->ministry));
                     $depOptList = "";
                     if($AllDepObj)
                     {
                        $depOptList = "<option value=\"\"  selected=\"selected\">".$this->lang->line('selectdep')."</option>";
                        //provide multiple department option and to select
                        foreach($AllDepObj->result() AS $item)
                        {
                            
                            if($rowObj->department == $item->id)
                            {
                                 $depOptList .= "<option value=\"".$item->id."\" selected=\"selected\">".$item->name."</option>";
                                
                            }
                            else
                            {
                                $depOptList .= "<option value=\"".$item->id."\">".$item->name."</option>";
                            }
                        }
                    }
                    $data['departments']     = $depOptList;
                    
                     //------- detention summary -----//
                    if($rowObj)
                    {
                        $data['recordowner']  = $this->mng_auth->GetCaseOwner($rowObj->userid); 
                        $date               = explode(" ",$rowObj->registerdate);  
                        $data['date']       = dateprovider($date[0],$this->mng_auth->get_language());  
                        $data['time']       = substr($date[1],0,5);  
                    }

                    $this->load->view('ghuquq/case_proceeding_edit',$data);
                }
                else
                {
                    $this->load->view('unauthorized');          
                }
            }
        }

        // update the case proceeding (Primary, Appellate, Tajdidnazar)
        function doedit_case_proceeding($enc_id)
        {
            //---- check user is valide -----
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                //=== decrypt case id ===
                $id_decoded = $this->mng_auth->check_case_id($enc_id);

                $result['success'] = false;
                $result['message'] = $this->lang->line('det_invalid');

                //== check if decoded case id is valid ==
                if($id_decoded != 0)
                { 
                    $this->form_validation->set_rules('n_ministry', "", 'required|trim');
                    $this->form_validation->set_rules('n_department', "", 'required|trim');
                    $dtype = $this->input->post('dtype');

                    // we dont have gov_befefit field in dtype=5 (tajdednazar)
                    if($dtype != 5)
                    {
                        $this->form_validation->set_rules('n_data_court_dec', "", 'required|trim');
                    }

                    if ($this->form_validation->run() == FALSE) // validation hasn't been passed 
                    {
                        $result['message'] = $this->lang->line('validatin_faild');
                    }
                    else
                    {
                        $dtype = $this->input->post('dtype');
                        $type = $this->input->post('req_type');
                        $rec_dateday = $this->input->post('data_rday');
                        $rec_datemonth = $this->input->post('data_rmonth');
                        $rec_dateyear = $this->input->post('data_ryear');
                        $rec_number = $this->input->post('data_rec_number');
                        //issue date and number
                        $iss_dateday = $this->input->post('data_issday');
                        $iss_datemonth = $this->input->post('data_issmonth');
                        $iss_dateyear = $this->input->post('data_issyear');
                        $iss_number = $this->input->post('data_iss_number');

                        $andraj_number  = $this->input->post('data_andraj_number');  
                        $auth_next  = $this->input->post('data_next_auth');  
                        $name  = $this->input->post('data_name');  
                        $fname  = $this->input->post('data_fathername');  
                        $phone  = $this->input->post('data_phone');  
                        
                        // gov benefit or lost for after court section 

                        $gov_benefit  = $this->input->post('n_data_court_dec');

                         /* ticket 4007 --------------- start */
                        $gov_benefit_nxt  = $this->input->post('court_dec_next');
                         /* ticket 4007 ----------------- end */
                        $land = $this->input->post('data_land');
                        $land_type  = $this->input->post('data_land_type');  
                        $land_value  = $this->input->post('data_land_value');

                        $money = $this->input->post('data_money');
                        $money_type = $this->input->post('data_money_type');  
                        $money_value  = $this->input->post('data_money_value');

                        $other = $this->input->post('data_other');
                        $other_type  = $this->input->post('data_other_type');  
                        $other_value   = $this->input->post('data_other_value'); 
                        
                        $pr_day = $this->input->post('data_prday');
                        $pr_month = $this->input->post('data_prmonth');
                        $pr_year = $this->input->post('data_pryear');
                        
                        $dpr_day = $this->input->post('data_dprday');
                        $dpr_month = $this->input->post('data_dprmonth');
                        $dpr_year = $this->input->post('data_dpryear');
                        
                        $department = $this->input->post('n_department');
                        $ministry = $this->input->post('n_ministry');
                        
                        $rec_date    = datecheck($rec_dateyear,$rec_datemonth,$rec_dateday,$this->mng_auth->get_language());  
                        $iss_date    = datecheck($iss_dateyear,$iss_datemonth,$iss_dateday,$this->mng_auth->get_language());  
                      
                        //provided date
                        $pr_date    = datecheck($pr_year,$pr_month,$pr_day,$this->mng_auth->get_language()); 
                        //defendant provided date
                        $dpr_date    = datecheck($dpr_year,$dpr_month,$dpr_day,$this->mng_auth->get_language());

                        if (!$land)
                        {
                            $land_type = NULL;
                            $land_value = NULL;
                        }
                        if (!$money)
                        {
                            $money_type = NULL;
                            $money_value = NULL;
                        }
                        if (!$other)
                        {
                            $other_type = NULL;
                            $other_value = NULL;
                        }
                      
                        $data = array(
                              // 'case_urn'      => $casedecoded,
                              'type'          => $type,
                              'table_type'    => $dtype,
                              'rec_date'          => $rec_date,
                              'rec_number'        => $rec_number,
                              'iss_date'          => $iss_date,   
                              'iss_number'        => $iss_number,
                              'andraj_number'     => $andraj_number,
                              'next_auth'         => $auth_next,
                              'name'              => $name,
                              'fathername'        => $fname,
                              'telephone'         => $phone,
                              'gov_benefit'       => $gov_benefit,
                              /* ticket 4007 start ------- */
                              'gov_benefit_nxt'       => $gov_benefit_nxt,
                              /* ticket 4007 end --------- */
                              //'land_fine'         => $land[$key],
                              'land_type'         => $land_type,
                              'land_value'        => $land_value,
                              //'money_fine'        => $money[$key],
                              'money_type'        => $money_type,
                              'money_value'       => $money_value,
                              //'other_fine'        => $other[$key],
                              'other_type'        => $other_type,
                              'other_value'       => $other_value,
                              'provide_date'      => $pr_date,
                              'defprovide_date'   => $dpr_date,
                              //'userid'            => $this->mng_auth->get_user_id(),
                              //s'registerdate'      => date('Y-m-d H:i:s'),
                              'department'        => $department,
                              'ministry'          => $ministry,
                          );

                        if($this->ghuquq_model->updateCaseProceeding($data, $id_decoded) == TRUE)
                        {
                            $result['success'] = true;
                            $result['message'] = $this->lang->line('gc_case_successfull_msg');
                        }
                        else
                        {
                            $result['message'] = $this->lang->line('operation_faild');
                        }
                        
                    }
                }
                else
                {
                    $result['message'] = $this->lang->line('invalid_id');     
                }
                echo json_encode($result);
            }
        }

        // get the detials for drop downs for insert screen of case proceeding (Primary, Appellate, Tajdidnazar)
        function insert_case_proceeding($enc_caseid, $dtype) {
            if(!$this->mng_auth->is_logged_in()) 
            {  
                //logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                $casedecoded=$this->mng_auth->check_case_id($enc_caseid);
                //== check if decoded case id is valid ==
                if($casedecoded != 0 && $this->mng_auth->IsAddable('cb')==TRUE)
                {
                    $caseObj = $this->ghuquq_model->GetOneRecord("law","dtype","id",$casedecoded);
                    if(!$caseObj)
                    {
                       exit;
                    }

                    $data = array();
                    $data['enc_caseid'] = $enc_caseid;
                    $data['dtype'] = $dtype;

                    //load language file too of ghuquq
                    $req_type = "";
                    $reqObj = $this->statictables_model->GetCaseStatic_Tables2(22,0,0,TRUE,$this->mng_auth->get_language());
                    if($reqObj)
                    {
                        foreach($reqObj->result() as $row)
                        {
                            $req_type.="<option value = '".$row->id."'>".$row->name_en."</option>";
                        }
                    } 
                    
                    //load dropdown data for Court Desession
                    $dec_type = "";
                    $decObj = $this->statictables_model->GetCaseStatic_Tables2(23,0,0,TRUE,$this->mng_auth->get_language());
                    if($decObj)
                    {
                        foreach($decObj->result() as $row)
                        {
                            $dec_type.="<option value = '".$row->id."'>".$row->name_en."</option>";
                        }
                    }  
                    
                    //load dropdown data for land
                    $land_type = "";
                    $decObj = $this->statictables_model->GetCaseStatic_Tables2(24,0,0,TRUE,$this->mng_auth->get_language());
                    if($decObj)
                    {
                        foreach($decObj->result() as $row)
                        {
                            $land_type.="<option value = '".$row->id."'>".$row->name_en."</option>";
                        }
                    } 
                    //load dropdown data for money
                    $money_type = "";
                    $decObj = $this->statictables_model->GetCaseStatic_Tables2(25,0,0,TRUE,$this->mng_auth->get_language());
                    if($decObj)
                    {
                        foreach($decObj->result() as $row)
                        {
                            $money_type.="<option value = '".$row->id."'>".$row->name_en."</option>";
                        }
                    }
                    
                    //load dropdown data for other
                    $other_type = "";
                    $decObj = $this->statictables_model->GetCaseStatic_Tables2(26,0,0,TRUE,$this->mng_auth->get_language());
                    if($decObj)
                    {
                        foreach($decObj->result() as $row)
                        {
                            $other_type.="<option value = '".$row->id."'>".$row->name_en."</option>";
                        }
                    }
                     /* ticket 4007 ------------------------- */
                    $dec_type_oth = "";
                    $decObj_oth = $this->statictables_model->GetCaseStatic_Tables2(32,0,0,TRUE,$this->mng_auth->get_language());
                    if($decObj_oth)
                    {
                    foreach($decObj_oth->result() as $row)
                         {
                        $dec_type_oth.="<option value = '".$row->id."'>".$row->name_en."</option>";
                        }
                    }  
                    $data['court_dec_oth'] = $dec_type_oth;
                    /* ticket 4007 end ------------------- */
                           
                    $data['req_type'] = $req_type;
                    $data['court_dec'] = $dec_type;
                    $data['land_type'] = $land_type;
                    $data['money_type'] = $money_type;
                    $data['other_type'] = $other_type;
                    
                    $data['day']      = $this->datedetails(1,0,0,'bday',$this->mng_auth->get_language(),0,0,1);
                    $data['month']    = $this->datedetails(0,1,0,'bmonth',$this->mng_auth->get_language(),0,0,1);
                    $data['year']     = $this->datedetails(0,0,1,'byear',$this->mng_auth->get_language(),0,0,1);

                    //provide record owner
                    $data['recordowner'] = $this->mng_auth->GetCaseOwner($this->mng_auth->get_user_id());

                    // get list of all agencies/ministires
                    $ministryObj = $this->mng_auth->GetAllParDeps(array('1000000001'));
                    //---- checkif there is any object  returned
                    if($ministryObj)
                    { 
                        $ministopt = "<option value=\"\" >".$this->lang->line('selectmin')."</option>";
                        foreach($ministryObj->result() AS $item)
                        {
                            $ministopt .= "<option value=\"".$item->id."\">".$item->name."</option>";
                        } 
                    }
                    $data['minisopt']        = $ministopt;
                    $data['departments']     = "<option value=\"\" >".$this->lang->line('selectmin')."</option>";
                    
                    $this->load->view('ghuquq/case_proceeding_insert',$data);
                }
                else
                {
                    //unautherized section
                    $this->load->view('unauthorized');
                }
            }
        }

        // add case proceeding (Primary, Appellate, Tajdidnazar)
        function add_case_proceeding($enc_caseid)
        {
            //check if user is logged in
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                //--- check if the encoded casee number is fine
                //=== decrypt case id ===
                $casedecoded = $this->mng_auth->check_case_id($enc_caseid);

                $result['success'] = false;
                $result['message'] = $this->lang->line('det_invalid');
                
                //== check if decoded case id is valid ==
                if($casedecoded != 0)
                {
                    //check if there is any post data available
                    $this->form_validation->set_rules('n_ministry', "", 'required|trim');
                    $this->form_validation->set_rules('n_department', "", 'required|trim');
                    $dtype = $this->input->post('dtype');

                    // we dont have gov_befefit field in dtype=5 (tajdednazar)
                    if($dtype != 5)
                    {
                        $this->form_validation->set_rules('n_data_court_dec', "", 'required|trim');
                    }

                    if ($this->form_validation->run() == FALSE) // validation hasn't been passed 
                    {
                        $result['message'] = $this->lang->line('validatin_faild');
                    }
                    else
                    {
                        //--- provide data entry data for batch insert ---
                        //---- addmultiple sender and receiver to the database ----
                        $type = $this->input->post('req_type');
                        $rec_dateday = $this->input->post('data_rday');
                        $rec_datemonth = $this->input->post('data_rmonth');
                        $rec_dateyear = $this->input->post('data_ryear');
                        $rec_number = $this->input->post('data_rec_number');
                        //issue date and number
                        $iss_dateday = $this->input->post('data_issday');
                        $iss_datemonth = $this->input->post('data_issmonth');
                        $iss_dateyear = $this->input->post('data_issyear');
                        $iss_number = $this->input->post('data_iss_number');

                        $andraj_number  = $this->input->post('data_andraj_number');  
                        $auth_next  = $this->input->post('data_next_auth');  
                        $name  = $this->input->post('data_name');  
                        $fname  = $this->input->post('data_fathername');  
                        $phone  = $this->input->post('data_phone');  
                        
                        // gov benefit or lost for after court section 
                        $gov_benefit  = $this->input->post('n_data_court_dec'); 
                        
                        /* ticket 4007 ---------------- */
                        $gov_benefit_nxt  = $this->input->post('court_dec_next'); 
                        /* ticket 4007 ------------------  */
                        $land = $this->input->post('data_land');
                        $land_type  = $this->input->post('data_land_type');  
                        $land_value  = $this->input->post('data_land_value');

                        $money = $this->input->post('data_money');
                        $money_type = $this->input->post('data_money_type');  
                        $money_value  = $this->input->post('data_money_value');

                        $other = $this->input->post('data_other');
                        $other_type  = $this->input->post('data_other_type');  
                        $other_value   = $this->input->post('data_other_value'); 
                        
                        $pr_day = $this->input->post('data_prday');
                        $pr_month = $this->input->post('data_prmonth');
                        $pr_year = $this->input->post('data_pryear');
                        
                        $dpr_day = $this->input->post('data_dprday');
                        $dpr_month = $this->input->post('data_dprmonth');
                        $dpr_year = $this->input->post('data_dpryear');
                        
                        $department = $this->input->post('n_department');
                        $ministry = $this->input->post('n_ministry');

                        $rec_date    = datecheck($rec_dateyear,$rec_datemonth,$rec_dateday,$this->mng_auth->get_language());  
                        $iss_date    = datecheck($iss_dateyear,$iss_datemonth,$iss_dateday,$this->mng_auth->get_language());  
                      
                        //provided date
                        $pr_date    = datecheck($pr_year,$pr_month,$pr_day,$this->mng_auth->get_language()); 
                        //defendant provided date
                        $dpr_date    = datecheck($dpr_year,$dpr_month,$dpr_day,$this->mng_auth->get_language());

                        if (!$land)
                        {
                            $land_type = NULL;
                            $land_value = NULL;
                        }
                        if (!$money)
                        {
                            $money_type = NULL;
                            $money_value = NULL;
                        }
                        if (!$other)
                        {
                            $other_type = NULL;
                            $other_value = NULL;
                        }
                      
                        $data = array(
                              'case_urn'      => $casedecoded,
                              'type'          => $type,
                              'table_type'    => $dtype,
                              'rec_date'          => $rec_date,
                              'rec_number'        => $rec_number,
                              'iss_date'          => $iss_date,   
                              'iss_number'        => $iss_number,
                              'andraj_number'     => $andraj_number,
                              'next_auth'         => $auth_next,
                              'name'              => $name,
                              'fathername'        => $fname,
                              'telephone'         => $phone,
                              'gov_benefit'       => $gov_benefit,
                              /* ticket 4007 --------------------- */
                              'gov_benefit_nxt'       => $gov_benefit_nxt,
                               /* ticket 4007 end --------------- */
                              //'land_fine'         => $land[$key],
                              'land_type'         => $land_type,
                              'land_value'        => $land_value,
                              //'money_fine'        => $money[$key],
                              'money_type'        => $money_type,
                              'money_value'       => $money_value,
                              //'other_fine'        => $other[$key],
                              'other_type'        => $other_type,
                              'other_value'       => $other_value,
                              'provide_date'      => $pr_date,
                              'defprovide_date'   => $dpr_date,
                              'userid'            => $this->mng_auth->get_user_id(),
                              'registerdate'      => date('Y-m-d H:i:s'),
                              'department'        => $department,
                              'ministry'          => $ministry,
                          );
                        
                        //--- insert data ---
                        if($this->ghuquq_model->addCaseProceeding($data) == TRUE)
                        {
                            $result['success'] = true;
                            $result['message'] = $this->lang->line('gc_case_successfull_msg');
                        }
                        else
                        {
                            $result['message'] = $this->lang->line('operation_faild');
                        }  
                    }
                }
                echo json_encode($result);
            }
        }

        // list all case proceeding (Primary, Appellate, Tajdidnazar)
        function list_case_proceeding($enc_caseid,$type = 1, $isEditable = 0)
        {
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                $case_urn = $this->mng_auth->check_case_id($enc_caseid);
                echo $this->listProceedingRecords($case_urn,$enc_caseid,$type, $isEditable);
            }
        }

        //search district function 
        function DistrictsList3()
        { 
            //load all district by province 
            $allDes   = $this->case_model->GetDistrictsByProvince(0,0,true,$this->mng_auth->get_language(),$this->input->post('provincecode'));
            //print_r($allDes->result_array()); exit;
            $str ="<select name=\"".$this->input->post('name')."\" id=\"".$this->input->post('name')."\" style=\"width:".$this->input->post('w')."px\" class=\"selectbox\"
            onchange=\"javascript: bring_page('".base_url()."case/home/villagelist3','".$this->input->post('name')."','districtcode','vil1','&name=pbvillage&w=150');\"
            >";
            $str.="<option value=\"\">".$this->lang->line('case_alldistrict')."</option>";
            if($allDes)
            {
                foreach($allDes->result() AS $row)
                {
                    $str.="<option value=".$row->code." ".set_select($this->input->post('name'),$row->code).">".$row->name."</option>";
                }
            }
            $str.="</select>";
            echo $str;
        }
        /*refence cases*/ 
        function allrefrences($enc_caseid =0)
        {
            //check if the user is logged in
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {  
                  //check if the user has view access
                  //check if I have access role sub module case
                  if($this->mng_auth->check_my_smod('ga'))
                  {
                     //verify case urn to plain and check if has the access level
                     if($this->input->post('caseid'))
                     {
                        //
                        $enc_caseid = $this->input->post('caseid');
                     }
                     else
                     {
                        $enc_caseid = $enc_caseid;
                     }
                     $casedecoded = $this->mng_auth->check_case_id($enc_caseid); 
                     if($casedecoded!=0)
                     {
                         
                            $caseSummary = casesummary($casedecoded); 
                            //get from database
                            //integrate ajax pagination
                            $str_post_str = '&ajax=1&caseid='.$enc_caseid;
                            $recpage  = $this->config->item('recordperpage');//number of records per page                   
                            $starting = $this->input->post('starting');         //get counter which page record 
                            //if its the first page than show starting from 0
                            if(!$starting) 
                            {
                                $starting =0;
                            }      //if its first page loading initialize counter to 1 
                            //get total records
                            $data = array();
                            $therecords = $this->case_model->GetAllRefCases($starting,$recpage,FALSE,$this->mng_auth->get_language(),$casedecoded);
                            //check object
                            $data['records'] = $therecords;

                            //ajax engine pagination
                            /*
                            * params:
                            * 1.total record
                            * 2:starting of pagination like 0,10,20 etc
                            * 3.record per page 10, or could be 50 according to config item
                            * 4.First label translation
                            * 5.Last label translation
                            * 6.Previous lable translation
                            * 7.Next lable translation
                            * 8.page label translation
                            * 9.of lable translation
                            * 10.total lable translation
                            * 11.link to url like personnel/home/getdetails
                            * 12. div id to show the ajax returned data 
                            * 13. any attachment post data to pass to the next ajax request
                            */
                            $this->ajax_pagination->make_search(
                                    $this->case_model->TotalallRefCases($casedecoded),
                                    $starting,
                                    $recpage,
                                    $this->lang->line('case_first'),
                                    $this->lang->line('case_last'),
                                    $this->lang->line('case_previous'),
                                    $this->lang->line('case_next'),
                                    $this->lang->line('case_page'),
                                    $this->lang->line('case_of'),
                                    $this->lang->line('case_total'),
                                    base_url()."case/home/allrefrences",
                                    'caseajaxrefdiv',
                                    $str_post_str
                            );
                            //provide to view of the page
                            $data['links']     = $this->ajax_pagination->anchors;
                            $data['total']     = $this->ajax_pagination->total;   
                            $data['page']      = $starting;   
                            if($this->input->post('ajax')==1)
                            {
                                $this->load->view('case/case_reflist',$data);  
                            }
                            else
                            {
                                header_tpl($this->mng_auth->get_language());
                                //include top banner 
                                banner_tpl();
                                //load left template
                                left_tpl();
                                //load right tpl
                                right_tpl(); 
                                
                                $message = $this->load->view('case/case_reflist',$data,TRUE);
                                //provide main content
                                content_tpl($caseSummary.$message);
                                //end of develpers view
                                //provide footer
                                footer_tpl();
                            }
                
                     }
                  }
            }
        }
        
        //datedetails function 
        private function datedetails($day=0,$month=0,$year=0,$field,$typeofdate='',$foredit=0,$section=0,$stop=0)
        {
            if ($day!=0)
            {
                $StartDateDay = '';
                //if the day is 00 in database
                if($foredit==0 || $section=='00')
                {
                    $StartDateDay.="<option value ='00' selected=\"selected\" ".set_select($field,'',TRUE).">".$this->lang->line('det_day')."</option>";
                }
                else
                {
                    $StartDateDay.="<option value ='00' selected=\"selected\" ".set_select($field,'').">".$this->lang->line('det_day')."</option>"; 
                }
                for($i=1; $i<=31; $i++)
                {
                    if(strlen($i)< 2)                                                  
                    {
                        $i="0".$i;
                    }
                    if($section!=0 && $section==$i)
                    {
                        $StartDateDay.="<option value ='".$i."' ".set_select($field,$i,TRUE).">".$i."</option>";
                    }
                    else
                    {
                        $StartDateDay.="<option value ='".$i."' ".set_select($field,$i).">".$i."</option>";
                    }   
                }
                return $StartDateDay; 
            }

            if($month!=0)
            {
                $StartDateMonth = '';
                //if the month is 00 in database
                if($foredit==0 || $section=='00')
                {
                    if($stop==0)
                    {
                        $StartDateMonth.="<option value ='00' selected=\"selected\" ".set_select($field,'',TRUE).">".$this->lang->line('det_month')."</option>";
                    }
                    else
                    {
                        $StartDateMonth.="<option value ='' selected=\"selected\" ".set_select($field,'',TRUE).">".$this->lang->line('det_month')."</option>";  
                    }
                }
                else
                {
                   $StartDateMonth.="<option value ='00' selected=\"selected\" ".set_select($field,'').">".$this->lang->line('det_month')."</option>";
                }
                $lettermonths = Array();
                if($typeofdate=='en')
                {
                    $nameofarray = 'date_monthsnames_en';
                }
                else
                {
                    $nameofarray = 'date_monthsnames_dr';
                }
                $lettermonths = $this->lang->line($nameofarray);
                for($i=1; $i<=12; $i++)
                {   
                    if($section!=0 && $section==$i)
                    {
                        $StartDateMonth.="<option value ='".$i."' ".set_select($field,$i,TRUE).">".$lettermonths[$i]."</option>"; 
                    }
                    else
                    {
                        $StartDateMonth.="<option value ='".$i."' ".set_select($field,$i).">".$lettermonths[$i]."</option>";   
                    }
                }   

                return $StartDateMonth;
            }
            if($year!=0)
            {
                if($typeofdate=='en')
                {
                    $startyear = date('Y') - 90;
                    $endyear   = date('Y') + 0;
                }
                else
                {
                    $startyear = date('Y') - 621 - 90;
                    $endyear   = date('Y') - 621 + 0; 
                }
                $StartDateYear = '';
                //if the year is 0000 in database
                if($foredit==0 || $section=='0000')
                {
                    if($stop==0)
                    {
                        $StartDateYear.="<option value ='0000' selected=\"selected\" ".set_select($field,'',TRUE).">".$this->lang->line('det_year')."</option>";
                    }
                    else
                    {
                        $StartDateYear.="<option value ='' selected=\"selected\" ".set_select($field,'',TRUE).">".$this->lang->line('det_year')."</option>";  
                    }
                }
                else
                {
                    $StartDateYear.="<option value ='' selected=\"selected\" ".set_select($field,'').">".$this->lang->line('det_year')."</option>";  
                }
                for($i=$endyear; $i>=$startyear; $i--)
                {
                    if($section!=0 && $section==$i)
                    {
                        $StartDateYear.="<option value ='".$i."' ".set_select($field,$i,TRUE).">".$i."</option>"; 
                    }
                    else
                    {
                        $StartDateYear.="<option value ='".$i."' ".set_select($field,$i).">".$i."</option>";
                    }  
                }    
            }
            return $StartDateYear;   
       } 
       
        //datedetails function 
        private function datedetails_req($day=0,$month=0,$year=0,$field,$typeofdate='',$foredit=0,$section=0,$stop=0)
        {
            if ($day!=0)
            {
                $StartDateDay = '';
                //if the day is 00 in database
                if($foredit==0 || $section=='00')
                {
                    if($stop==0)
                    {
                        $StartDateDay.="<option value ='00' selected=\"selected\" ".set_select($field,'',TRUE).">".$this->lang->line('det_day')."</option>";
                    }
                    else
                    {
                        if($section == '00' && $foredit ==1)
                        {
                            $StartDateDay.="<option value =''>".$this->lang->line('det_day')."</option>";
                            $StartDateDay.="<option value ='00'  selected=\"selected\"  ".set_select($field,'').">00</option>";
                        }
                        else
                        {
                            $StartDateDay.="<option value ='' selected=\"selected\" ".set_select($field,'',TRUE).">".$this->lang->line('det_day')."</option>";
                            $StartDateDay.="<option value ='00' ".set_select($field,'').">00</option>";
                        }
                    }
                }
                else
                {
                    $StartDateDay.="<option value ='' selected=\"selected\" ".set_select($field,'').">".$this->lang->line('det_day')."</option>"; 
                    $StartDateDay.="<option value ='00' ".set_select($field,'').">00</option>";
                }
                for($i=1; $i<=31; $i++)
                {
                    if(strlen($i)< 2)                                                  
                    {
                        $i="0".$i;
                    }
                    if($section!=0 && $section==$i)
                    {
                        $StartDateDay.="<option value ='".$i."' ".set_select($field,$i,TRUE).">".$i."</option>";
                    }
                    else
                    {
                        $StartDateDay.="<option value ='".$i."' ".set_select($field,$i).">".$i."</option>";
                    }   
                }
                return $StartDateDay; 
            }

            if($month!=0)
            {
                $StartDateMonth = '';
                //if the month is 00 in database
                if($foredit==0 || $section=='00')
                {
                    if($stop==0)
                    {
                        $StartDateMonth.="<option value ='00' selected=\"selected\" ".set_select($field,'',TRUE).">".$this->lang->line('det_month')."</option>";
                    }
                    else
                    {
                        if($section == '00' && $foredit ==1)
                        {
                            $StartDateMonth.="<option value =''>".$this->lang->line('det_month')."</option>";  
                            $StartDateMonth.="<option value ='00' selected=\"selected\">00</option>";  
                        }
                        else
                        {
                            $StartDateMonth.="<option value ='' selected=\"selected\" ".set_select($field,'',TRUE).">".$this->lang->line('det_month')."</option>";  
                            $StartDateMonth.="<option value ='00' ".set_select($field,'').">00</option>";  
                        }
                    }
                }
                else
                {
                   $StartDateMonth.="<option value ='' selected=\"selected\" ".set_select($field,'').">".$this->lang->line('det_month')."</option>";
                   $StartDateMonth.="<option value ='00' ".set_select($field,'').">00</option>"; 
                }
                $lettermonths = Array();
                if($typeofdate=='en')
                {
                    $nameofarray = 'date_monthsnames_en';
                }
                else
                {
                    $nameofarray = 'date_monthsnames_dr';
                }
                $lettermonths = $this->lang->line($nameofarray);
                for($i=1; $i<=12; $i++)
                {   
                    if($section!=0 && $section==$i)
                    {
                        $StartDateMonth.="<option value ='".$i."' ".set_select($field,$i,TRUE).">".$lettermonths[$i]."</option>"; 
                    }
                    else
                    {
                        $StartDateMonth.="<option value ='".$i."' ".set_select($field,$i).">".$lettermonths[$i]."</option>";   
                    }
                }   

                return $StartDateMonth;
            }
            if($year!=0)
            {
                if($typeofdate=='en')
                {
                    $startyear = date('Y') - 90;
                    $endyear   = date('Y') + 0;
                }
                else
                {
                    $startyear = date('Y') - 621 - 90;
                    $endyear   = date('Y') - 621 + 0; 
                }
                $StartDateYear = '';
                //if the year is 0000 in database
                if($foredit==0 || $section=='0000')
                {
                    if($stop==0)
                    {
                        $StartDateYear.="<option value ='0000' selected=\"selected\" ".set_select($field,'',TRUE).">".$this->lang->line('det_year')."</option>";
                    }
                    else
                    {
                        if($section == '0000' && $foredit ==1)
                        {
                            $StartDateYear.="<option value =''>".$this->lang->line('det_year')."</option>";  
                            $StartDateYear.="<option value ='0000' selected=\"selected\">0000</option>";  
                        }
                        else
                        {
                            $StartDateYear.="<option value ='' selected=\"selected\" ".set_select($field,'',TRUE).">".$this->lang->line('det_year')."</option>";  
                            $StartDateYear.="<option value ='0000'>0000</option>";  
                        }
                    }
                }
                else
                {
                    $StartDateYear.="<option value ='' selected=\"selected\" ".set_select($field,'').">".$this->lang->line('det_year')."</option>";  
                    $StartDateYear.="<option value ='0000'>0000</option>"; 
                }
                for($i=$endyear; $i>=$startyear; $i--)
                {
                    if($section!=0 && $section==$i)
                    {
                        $StartDateYear.="<option value ='".$i."' ".set_select($field,$i,TRUE).">".$i."</option>"; 
                    }
                    else
                    {
                        $StartDateYear.="<option value ='".$i."' ".set_select($field,$i).">".$i."</option>";
                    }  
                }    
            }
            return $StartDateYear;   
        } 
       
        //function for age
        function age($number,$field,$foredit=0,$section=0)
        {   
            $number = "";
            if($foredit==0 || $section=='0')
            {
                $number.="<option value ='00' selected=\"selected\" ".set_select($field,'',TRUE).">0</option>";
            }
            for($i=1; $i<=99; $i++)
            {
                if($section!=0 && $section==$i)
                {
                    $number.="<option value ='".$i."' ".set_select($field,$i,TRUE).">".$i."</option>";
                }
                else
                {
                    $number.="<option value ='".$i."' ".set_select($field,$i).">".$i."</option>";
                }   
            }
            return $number; 
         }
       
         //time provider
        private function timedetails($hour=0,$minute=0,$field,$foredit=0,$section=-1)
        { 
            $timedetails = ''; 

            if($hour==1)  
            {
                if(strlen($section) < 2)
                {
                    $section = "0".$section; 
                }
                //if the day is 00 in database
                if($foredit==0)
                {
                    $timedetails.="<option value ='00' selected=\"selected\" ".set_select($field,'00',TRUE).">".$this->lang->line('det_hour')."</option>";
                    $timedetails.="<option value ='00' selected=\"selected\" ".set_select($field,'00',TRUE).">00</option>";
                }
                else
                {
                   if($section == 0)
                   {
                      $timedetails.="<option value ='00' selected=\"selected\" ".set_select($field,'00',TRUE).">".$this->lang->line('det_hour')."</option>"; 
                      $timedetails.="<option value ='00' selected=\"selected\" ".set_select($field,'00',TRUE).">00</option>"; 
                   }
                   else
                   {
                      $timedetails.="<option value ='00' selected=\"selected\" ".set_select($field,'00').">".$this->lang->line('det_hour')."</option>"; 
                      $timedetails.="<option value ='00' selected=\"selected\" ".set_select($field,'00').">00</option>"; 
                   }
                }
                for($i=1; $i<=24; $i++)
                {
                    if(strlen($i)< 2)                                                  
                    {
                        $i="0".$i;
                    }
                    if($section !=-1 && $i==$section)
                    { 
                        $timedetails.="<option value ='".$i."' ".set_select($field,$i,TRUE).">".$i."</option>";
                    }
                    else
                    {
                        $timedetails.="<option value ='".$i."' ".set_select($field,$i).">".$i."</option>";
                    }   
                }   
            }

            elseif($minute==1)  
            {
                if(strlen($section) < 2)
                {
                    $section = "0".$section; 
                }
                //if the day is 00 in database
                if($foredit==0)
                {
                    $timedetails.="<option value ='00' selected=\"selected\" ".set_select($field,'00',TRUE).">".$this->lang->line('det_minute')."</option>";
                    $timedetails.="<option value ='00' ".set_select($field,'00').">00</option>";
                }
                else
                {
                    $timedetails.="<option value ='00' selected=\"selected\" ".set_select($field,'00',TRUE).">".$this->lang->line('det_minute')."</option>";
                    if($section == 0)
                    {
                       $timedetails.="<option value ='00' selected=\"selected\" ".set_select($field,'00').">00</option>";
                    }
                    else
                    {
                       $timedetails.="<option value ='00' ".set_select($field,'00').">00</option>";
                    }
                }
                for($i=1; $i<60; $i++)
                {
                    if(strlen($i)< 2)                                                  
                    {
                        $i="0".$i;
                    }
                    if($section !=-1 && $i==$section)
                    {
                        $timedetails.="<option value ='".$i."' ".set_select($field,$i,TRUE).">".$i."</option>";
                    }
                    else
                    {
                        $timedetails.="<option value ='".$i."' ".set_select($field,$i).">".$i."</option>";    
                    }   
                } 
            }

            return $timedetails; 
        } 
        
        //==== check case number ==
        //add function    
        function checkCase()
        {
            //check if the user is logged in
            //if this user is not logged in and its not admin
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            { 
                
                //---- check if the case number  is exist --
                //=== get one record of the case ===
                
                if($this->input->post('isupdate') == 0)
                {
                   $caserow = $this->case_model->GetOneRecord("law","case_number,id","case_number",$this->input->post('casenum')); 
                   //--- check if the case exist ---
                   if($caserow)
                   {
                       if($caserow->num_rows()>0)
                       {
                           echo "<div class=\"error2\">".$this->lang->line('det_invalid')."</div>";
                       }
                       else
                       {
                           echo "<div class=\"success2\">".$this->lang->line('det_valid')."</div>";
                       }
                   
                   }
                   else
                   {
                       echo "<div class=\"success2\">".$this->lang->line('det_valid')."</div>";
                   } 
                    
                }
                else
                {
                   //==== decrypt case number and check with databse
                   $casedecoded = $this->mng_auth->check_case_id($this->input->post('id')); 
                   if($casedecoded!=0)
                   {
                      $caserow = $this->case_model->GetOneRecord("law","case_number,id","case_number",$this->input->post('casenum'));   
                      if($caserow)
                      {
                           if($caserow->num_rows()>0)
                           {
                               //--- check if the id is same with the given case number --
                               if($caserow->row()->id == $casedecoded)
                               {
                                  //--- no changes ===
                                  echo "<div class=\"success2\">".$this->lang->line('det_validnochange')."</div>";
                               }
                               else
                               {
                                  echo "<div class=\"error2\">".$this->lang->line('det_invalid')."</div>";
                               } 
                           }
                      }
                      else
                      {
                          echo "<div class=\"success2\">".$this->lang->line('det_valid')."</div>";
                      }
                   }
                   else
                   {
                      exit;
                   }
                }
                
                
            }
        }
        
        function AddTmpP()
        {
            //check if the user is logged in
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                
                //--- provide data array ---
                $timestamp = $this->input->post('timestamp');
                if($timestamp)
                {
                   $data = array(
                     "name" => $this->input->post('n_name'),
                     "surname" => $this->input->post('surname'),
                     "fname" => $this->input->post('n_fname'),
                     "gfname" => $this->input->post('n_gfname'),
                     "tazkira" => $this->input->post('tazkirano'),
                     "docidtype" => $this->input->post('docidtype'),
                     "job" => $this->input->post('job'),
                     "phone" => $this->input->post('phone'),
                     "pbprovince" => $this->input->post('pbprovince'),
                     "pbdistrict" => $this->input->post('pbdistrict'),
                     "pbvillage" => $this->input->post('pbvillage'),
                     "pcprovince" => $this->input->post('pcprovince'),
                     "pcdistrict" => $this->input->post('pcdistrict'),
                     "pcvillage"  => $this->input->post('pcvillage'),
                     "timestamp"  => $timestamp,
                     "userid"  => $this->mng_auth->get_user_id(),
                     "registerdate" => date('Y-m-d H:i')
                   );
                    //print_r($data);exit;
                   //--- insert into temp table ----
                   $this->case_model->AddTempP($data);
                   $data  = array();
                   //--- get time stamp data and display in the list ---
                   $dataTmp = $this->case_model->getTempP($timestamp,$this->mng_auth->get_user_id(),$this->mng_auth->get_language());
                   if($dataTmp)
                   {  
                       $data['records']   = $dataTmp;
                       $data['timestamp'] = $timestamp;
                       $this->load->view("case/casetmp_list",$data);
                   }
                   
                   
                }
               
            }
        }
        
        function AddTmpP2()
        {
            //check if the user is logged in
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                
                //--- provide data array ---
                $timestamp = $this->input->post('timestamp');
                if($timestamp)
                {
                   $data = array(
                     "name" => $this->input->post('n_name'),
                     "surname" => $this->input->post('surname'),
                     "fname" => $this->input->post('n_fname'),
                     "gfname" => $this->input->post('n_gfname'),
                     "tazkira" => $this->input->post('tazkirano'),
                     "docidtype" => $this->input->post('docidtype'),
                     "job" => $this->input->post('job'),
                     "phone" => $this->input->post('phone'),
                     "pbprovince" => $this->input->post('pbprovince'),
                     "pbdistrict" => $this->input->post('pbdistrict'),
                     "pbvillage" => $this->input->post('pbvillage'),
                     "pcprovince" => $this->input->post('pcprovince'),
                     "pcdistrict" => $this->input->post('pcdistrict'),
                     "pcvillage"  => $this->input->post('pcvillage'),
                     "timestamp"  => $timestamp,
                     "userid"  => $this->mng_auth->get_user_id(),
                     "registerdate" => date('Y-m-d H:i')
                   );
                   //--- insert into temp table ----
                   $this->case_model->AddTempP2($data);
                   $data  = array();
                   //--- get time stamp data and display in the list ---
                   $dataTmp = $this->case_model->getTempP2($timestamp,$this->mng_auth->get_user_id(),$this->mng_auth->get_language());
                   if($dataTmp)
                   {  
                       $data['records']   = $dataTmp;
                       $data['timestamp'] = $timestamp;
                       $this->load->view("case/casetmp_list2",$data);
                   }
                   
                   
                }
               
            }
        }
        
        //---- remove profile information ---
        function rmtmp()
        {
            //check if the user is logged in
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                
                $timestamp = $this->input->post('timestamp');
                $this->case_model->RemoveTmpData($this->input->post('id'),$timestamp);
                $data  = array();
                   //--- get time stamp data and display in the list ---
               $dataTmp = $this->case_model->getTempP($timestamp,$this->mng_auth->get_user_id(),$this->mng_auth->get_language());
               if($dataTmp)
               {  
                   $data['records']   = $dataTmp;
                   $data['timestamp'] = $timestamp;
                   $this->load->view("case/casetmp_list",$data);
               }
            } 
        }
        
        //---- remove profile information ---
        function rmtmp2()
        {
            //check if the user is logged in
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                                               
                $timestamp = $this->input->post('timestamp');
                $this->case_model->RemoveTmpData2($this->input->post('id'),$timestamp);
                $data  = array();     
                   //--- get time stamp data and display in the list ---
               $dataTmp = $this->case_model->getTempP2($timestamp,$this->mng_auth->get_user_id(),$this->mng_auth->get_language());
               if($dataTmp)
               {  
                   $data['records']   = $dataTmp;
                   $data['timestamp'] = $timestamp;
                   $this->load->view("case/casetmp_list2",$data);
               }
            } 
        }
        
        //--- function add areez -----
        function addareez($enc_caseid)
        {
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            { 
                $casedecoded = $this->mng_auth->check_case_id($enc_caseid); 
                if($casedecoded!=0)
                {
                
                    //set form validation ----
                    $this->form_validation->set_rules('n_name', "", 'required|trim');    
                    $this->form_validation->set_rules('surname', "", 'trim');    
                    $this->form_validation->set_rules('n_fname',"", 'required|trim');    
                    $this->form_validation->set_rules('n_gfname',"", 'required|trim');    
                    $this->form_validation->set_rules('tazkirano',"", 'trim');    
                    $this->form_validation->set_rules('docidtype',"", 'trim');    
                    $this->form_validation->set_rules('job',"", 'trim');    
                    $this->form_validation->set_rules('phone',"", 'trim');  
                    if ($this->form_validation->run() == FALSE) // validation hasn't been passed 
                    { 
                        
                        $data =  array();
                        $data['enc_caseid'] = $enc_caseid;
                        // get province
                         //====get country list and provide Afghanistan selection ====
                        $allcountry = $this->province_model->GetAllCountries($this->mng_auth->get_language());
                        $pb_country_opt = "";
                        $pc_country_opt = "";
                        if($allcountry)
                        {
                            if($allcountry->num_rows()>0)
                            {
                                foreach($allcountry->result() as $item=>$val)
                                {
                                    //set selected option
                                    if($val->id ==  1)
                                    {
                                        $pb_country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id,TRUE).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $pb_country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id).">".$val->name."</option>";  
                                    }
                                    
                                }
                            }
                        } 
                        $data['pb_country'] = $pb_country_opt;
                        
                        $province_opt = "";
                        //$allpr = $this->province_model->GetAllProvinces(0,0,TRUE,$this->mng_auth->get_language());
                        $allpr = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());                     
                        if($allpr)
                        {
                            if($allpr->num_rows()>0)
                            {
                                foreach($allpr->result() as $item=>$val)
                                {
                                    $province_opt.="<option value ='".$val->code."' ".set_select('n_prov',$val->code).">".$val->name."</option>";  
                                }
                            }
                        }
                        $data['province'] = $province_opt;  
                        $data['district'] = "";  
                        
                        // get gender
                        $gender_type = "";
                        $genderObj = $this->statictables_model->GetCaseStatic_Tables2(21,0,0,TRUE,$this->mng_auth->get_language());
                        if($genderObj)
                        {
                            foreach($genderObj->result() as $row)
                            {
                                $gender_type.="<option value = '".$row->id."' ".set_select('gender1', $row->id).">".$row->name_en."</option>";    
                            }
                        }        
                        $data['gender'] = $gender_type;

                       //provide record owner
                        $data['recordowner'] = $this->mng_auth->GetCaseOwner($this->mng_auth->get_user_id());

                        // get list of all agencies/ministires
                        $ministryObj = $this->mng_auth->GetAllParDeps(array('1000000001'));
                        //---- checkif there is any object  returned
                        if($ministryObj)
                        { 
                            $ministopt = "<option value=\"\" >".$this->lang->line('selectmin')."</option>";
                            foreach($ministryObj->result() AS $item)
                            {
                                $ministopt .= "<option value=\"".$item->id."\">".$item->name."</option>";
                            } 
                        }
                        $data['minisopt']        = $ministopt;
                        $data['departments']     = "";
                        
                        $form = $this->load->view("case/areez_insert",$data,TRUE);
                        //echo $casedecoded
                        $message =$form;
                        $summary = casesummary($casedecoded);
                        popupheader_tpl($this->mng_auth->get_language());
                
                        //provide main content
                        popupcontent_tpl($summary.$message);
                        //end of develpers view  
                        //provide footer
                        footer_tpl();
                    }
                    else
                    {
                        //save data and display message and exit
                        //------- get areez details and add to its table----
                        $areezdata = array(
                                        'ar_name'               =>$this->input->post('n_name'),
                                        'ar_surname'            =>$this->input->post('surname'),
                                        'ar_fname'              =>$this->input->post('n_fname'),
                                        'ar_gfname'             =>$this->input->post('n_gfname'),
                                        'ar_tazkirano'          =>$this->input->post('tazkirano'),
                                        'ar_job'                =>$this->input->post('job'),
                                        'ar_docnotype'          =>$this->input->post('docidtype'),
                                        'ar_phone'              =>$this->input->post('phone'),
                                        'ar_pbprovince'         =>$this->input->post('ar_pbprovince'),
                                        'ar_pbdistrict'         =>$this->input->post('ar_pbdistrict'),
                                        'ar_pbvillage'          =>$this->input->post('ar_pbvillage'),
                                        'ar_pcprovince'         =>$this->input->post('pcprovince'),
                                        'ar_pcdistrict'         =>$this->input->post('pcdistrict'),
                                        'ar_pcvillage'          =>$this->input->post('pcvillage'),
                                        'gender'                =>$this->input->post('gender1'),
                                        'case_urn'              =>$casedecoded,
                                        'userid'                =>$this->mng_auth->get_user_id(), 
                                        'department'            =>$this->input->post('n_department'), 
                                        'ministry'              =>$this->input->post('n_ministry'), 
                                        'registerdate'          =>date('Y-m-d H:i:s'), 
                                        'pb_country'            =>$this->input->post('pb_country'),
                                        'pc_country'            =>$this->input->post('pc_country'),
                                        'kochi'                 =>$this->input->post('kochi'),   
                        );
                        $isAdded = $this->case_model->AddAreez($areezdata);
                        if($isAdded)
                        {
                            popupheader_tpl($this->mng_auth->get_language());
                            echo "<div class=\"success\"><h2>".lang('gc_areezmsg')."</h2></div>";
                            echo "<input type=\"button\" class=\"searchButton\" onclick=\"javascript: closeAndRefresh()\" value=\"".lang('case_cancel')."\" />";
                        }
                        
                    }
                    
                }                
            }
        }
        
        //--- function add areez -----
        function editareez($enc_caseid, $id = 0)
        {
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            { 
                $casedecoded = $this->mng_auth->check_case_id($enc_caseid); 
                if($casedecoded!=0)
                {
                
                    //set form validation ----
                    $this->form_validation->set_rules('n_name', "", 'required|trim');    
                    $this->form_validation->set_rules('surname', "", 'trim');    
                    $this->form_validation->set_rules('n_fname',"", 'required|trim');    
                    $this->form_validation->set_rules('n_gfname',"", 'required|trim');    
                    $this->form_validation->set_rules('tazkirano',"", 'trim');    
                    $this->form_validation->set_rules('docidtype',"", 'trim');    
                    $this->form_validation->set_rules('job',"", 'trim');    
                    $this->form_validation->set_rules('phone',"", 'trim');  
                    if ($this->form_validation->run() == FALSE) // validation hasn't been passed 
                    { 
                        
                        $data =  array();
                        
                        //---- get areez details ------
                        $areezObj = $this->case_model->GetOneRecord("areez","*","id",$id);
                        if(!$areezObj) { exit;}
                        $data['rowobj'] = $areezObj->row();
                        $caserow        = $areezObj->row();
                        $data['enc_caseid'] = $enc_caseid;
                        // get province
                        
                        //====get country list and provide Afghanistan selection ====
                        $allcountry = $this->province_model->GetAllCountries($this->mng_auth->get_language());
                        $pb_country_opt = "";
                        $pc_country_opt = "";
                        if($allcountry)
                        {
                            if($allcountry->num_rows()>0)
                            {
                                foreach($allcountry->result() as $item=>$val)
                                {
                                    //set selected option
                                    if($val->id ==  $areezObj->row()->pb_country)
                                    {
                                        $pb_country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id,TRUE).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $pb_country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id).">".$val->name."</option>";  
                                    }
                                    
                                    if($val->id ==  $areezObj->row()->pc_country)
                                    {
                                        $pc_country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id,TRUE).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $pc_country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id).">".$val->name."</option>";  
                                    }
                                    
                                }
                            }
                        } 
                        $data['pb_country'] = $pb_country_opt;
                        $data['pc_country'] = $pc_country_opt;
                        
                        $ar_pbprovince = "";
                        $ar_pcprovince = "";
                        //$allpr = $this->province_model->GetAllProvinces(0,0,TRUE,$this->mng_auth->get_language());
                        $allpr = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());                     
                        if($allpr)
                        {
                            if($allpr->num_rows()>0)
                            {
                                foreach($allpr->result() as $item=>$val)
                                {
                                    if($val->code == $caserow->ar_pbprovince)
                                    {
                                        $ar_pbprovince.="<option value ='".$val->code."' ".set_select('n_prov',$val->code,true).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $ar_pbprovince.="<option value ='".$val->code."' ".set_select('n_prov',$val->code).">".$val->name."</option>";    
                                    }
                                    //ar current province
                                    if($val->code == $caserow->ar_pcprovince)
                                    {
                                        $ar_pcprovince.="<option value ='".$val->code."' ".set_select('n_prov',$val->code,true).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $ar_pcprovince.="<option value ='".$val->code."' ".set_select('n_prov',$val->code).">".$val->name."</option>";    
                                    }   
                                }
                            }
                        }
                        $data['ar_pbprovince'] = $ar_pbprovince;  
                        $data['ar_pcprovince'] = $ar_pcprovince;  
                        //--- get districts ---
                        $ar_pbdistrictopt = "";
                        $ar_pbcode = "0";
                        if($caserow->ar_pbprovince > 0)
                        {
                            
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetDistrictsByProvince(0,0,TRUE,$this->mng_auth->get_language(),$caserow->ar_pbprovince); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->code == $caserow->ar_pbdistrict)
                                       {
                                           $ar_pbdistrictopt.="<option value=\"".$val->code."\" selected=\"selected\">".$val->name."</option>";
                                           $ar_pbcode = $val->code;
                                       }
                                       else
                                       {
                                           $ar_pbdistrictopt.="<option value=\"".$val->code."\" >".$val->name."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        //echo $ar_pbdistrictopt;exit;
                        $data['ar_pbdistrict'] = $ar_pbdistrictopt;  
                        //######### get areez pc district ##########
                        $ar_pcdistrictopt = "";
                        $ar_pccode = "0";
                        if($caserow->ar_pcprovince > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetDistrictsByProvince(0,0,TRUE,$this->mng_auth->get_language(),$caserow->ar_pcprovince); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->code == $caserow->ar_pcdistrict)
                                       {
                                           $ar_pcdistrictopt.="<option value=\"".$val->code."\" selected=\"selected\">".$val->name."</option>";
                                           $ar_pccode = $val->code;
                                       }
                                       else
                                       {
                                           $ar_pcdistrictopt.="<option value=\"".$val->code."\" >".$val->name."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['ar_pcdistrict'] = $ar_pcdistrictopt;  
                        
                        //######### get areez current villages ##########
                        $ar_pbvillage = "";
                        if($ar_pbcode > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetVillageByDistrict(0,0,TRUE,$this->mng_auth->get_language(),$ar_pbcode); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->villagecode == $caserow->ar_pbvillage)
                                       {
                                           $ar_pbvillage.="<option value=\"".$val->villagecode."\" selected=\"selected\">".$val->villagename."</option>";
                                       }
                                       else
                                       {
                                           $ar_pbvillage.="<option value=\"".$val->villagecode."\" >".$val->villagename."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['ar_pbvillage'] = $ar_pbvillage;
                        
                        //######### get areez current villages ##########
                        $ar_pcvillage = "";
                        if($ar_pccode > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetVillageByDistrict(0,0,TRUE,$this->mng_auth->get_language(),$ar_pccode); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->villagecode == $caserow->ar_pcvillage)
                                       {
                                           $ar_pcvillage.="<option value=\"".$val->villagecode."\" selected=\"selected\">".$val->villagename."</option>";
                                       }
                                       else
                                       {
                                           $ar_pcvillage.="<option value=\"".$val->villagecode."\" >".$val->villagename."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['ar_pcvillage'] = $ar_pcvillage;
                        // get gender
                        $gender_type = "";
                        $genderObj = $this->statictables_model->GetCaseStatic_Tables2(21,0,0,TRUE,$this->mng_auth->get_language());
                        if($genderObj)
                        {
                            foreach($genderObj->result() as $row)
                            {
                                if($row->id  == $caserow->gender)
                                {
                                    $gender_type.="<option value = '".$row->id."' ".set_select('gender1', $row->id,TRUE).">".$row->name_en."</option>";    
                                }
                                else
                                {
                                     $gender_type.="<option value = '".$row->id."' ".set_select('gender1', $row->id).">".$row->name_en."</option>";
                                }
                            }
                        }        
                        $data['gender'] = $gender_type;
                        
                        // get list of all agencies/ministires
                        $ministryObj = $this->mng_auth->GetAllParDeps(array('1000000001'));
                        //---- checkif there is any object  returned
                        if($ministryObj)
                        {
                            $ministopt = "<option value=\"\"  selected=\"selected\">".$this->lang->line('selectmin')."</option>";
                            foreach($ministryObj->result() AS $item)
                            {
                                log_message('DEBUG', 'controllers/ghuquq>editcase : min: ' . $caserow->ministry . ", dep: " . $item->id);
                                if($caserow->ministry == $item->id)
                                {
                                    $ministopt .= "<option value=\"".$item->id."\" selected=\"selected\">".$item->name."</option>";
                                      
                                }
                                else
                                {
                                    $ministopt .= "<option value=\"".$item->id."\">".$item->name."</option>";
                                }
                            }
                        }
                        $data['minisopt']        = $ministopt;     

                        $data['departments']     = "";
                        //--- department option ---
                         $AllDepObj = $this->mng_auth->GetAllParDeps(array($caserow->ministry));
                         $depOptList = "";
                         if($AllDepObj)
                         {
                            $depOptList = "<option value=\"\"  selected=\"selected\">".$this->lang->line('selectdep')."</option>";
                            //provide multiple department option and to select
                            foreach($AllDepObj->result() AS $item)
                            {
                                
                                if($caserow->department == $item->id)
                                {
                                     $depOptList .= "<option value=\"".$item->id."\" selected=\"selected\">".$item->name."</option>";
                                    
                                }
                                else
                                {
                                    $depOptList .= "<option value=\"".$item->id."\">".$item->name."</option>";
                                }
                            }
                        }
                        $data['departments']     = $depOptList;

                        $data['recordowner']  = $this->mng_auth->GetCaseOwner($caserow->userid);
                        $date               = explode(" ",$caserow->registerdate);  
                        $data['date']       = dateprovider($date[0],$this->mng_auth->get_language());  
                        $data['time']       = substr($date[1],0,5);
                        
                        $form = $this->load->view("case/areez_edit",$data,TRUE);
                        //echo $casedecoded
                        $message =$form;
                        $summary = casesummary($casedecoded);
                        popupheader_tpl($this->mng_auth->get_language());
                
                        //provide main content
                        popupcontent_tpl($summary.$message);
                        //end of develpers view  
                        //provide footer
                        footer_tpl();
                    }
                    else
                    {
                        //save data and display message and exit
                        //------- get areez details and add to its table----
                        $areezdata = array(
                                        'ar_name'               =>$this->input->post('n_name'),
                                        'ar_surname'            =>$this->input->post('surname'),
                                        'ar_fname'              =>$this->input->post('n_fname'),
                                        'ar_gfname'             =>$this->input->post('n_gfname'),
                                        'ar_tazkirano'          =>$this->input->post('tazkirano'),
                                        'ar_job'                =>$this->input->post('job'),
                                        'ar_docnotype'          =>$this->input->post('docidtype'),
                                        'ar_phone'              =>$this->input->post('phone'),
                                        'ar_pbprovince'         =>$this->input->post('ar_pbprovince'),
                                        'ar_pbdistrict'         =>$this->input->post('ar_pbdistrict'),
                                        'ar_pbvillage'          =>$this->input->post('ar_pbvillage'),
                                        'ar_pcprovince'         =>$this->input->post('pcprovince'),
                                        'ar_pcdistrict'         =>$this->input->post('pcdistrict'),
                                        'ar_pcvillage'          =>$this->input->post('pcvillage'),
                                        'gender'                =>$this->input->post('gender1'),
                                        'pb_country'            =>$this->input->post('pb_country'),
                                        'pc_country'            =>$this->input->post('pc_country'),
                                        'kochi'                 =>$this->input->post('kochi'),
                                        'userid'                => $this->mng_auth->get_user_id(),
                                        'department'            =>$this->input->post('n_department'),
                                        'ministry'              =>$this->input->post('n_ministry'),
                                        'registerdate'          => date('Y-m-d H:i:s'),
                        );
                        $isUpdated = $this->case_model->updateAreez($areezdata,$casedecoded,$id);
                        if($isUpdated)
                        {
                            popupheader_tpl($this->mng_auth->get_language());
                            echo "<div class=\"success\"><h2>".lang('gc_editmsg')."</h2></div>";
                            echo "<input type=\"button\" class=\"searchButton\" onclick=\"javascript: closeAndRefresh()\" value=\"".lang('case_cancel')."\" />";
                        }
                        
                    }
                    
                }                
            }
        }
        
        //--- function add areez -----
        function addMarooz($enc_caseid)
        {
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            { 
                $casedecoded = $this->mng_auth->check_case_id($enc_caseid); 
                if($casedecoded!=0)
                {
                
                    //set form validation ----
                    $this->form_validation->set_rules('n_name2',"", 'required|trim');    
                    $this->form_validation->set_rules('surname2',"", 'trim');    
                    $this->form_validation->set_rules('n_fname2',"", 'required|trim');    
                    $this->form_validation->set_rules('n_gfname2',"", 'required|trim');    
                    $this->form_validation->set_rules('tazkirano2',"", 'trim');    
                    $this->form_validation->set_rules('job2',"", 'trim');    
                    $this->form_validation->set_rules('phone2',"", 'trim');    
                    if ($this->form_validation->run() == FALSE) // validation hasn't been passed 
                    { 
                        
                        $data =  array();
                        $data['enc_caseid'] = $enc_caseid;
                        $allcountry = $this->province_model->GetAllCountries($this->mng_auth->get_language());
                        $pb_country_opt = "";
                        $pc_country_opt = "";
                        if($allcountry)
                        {
                            if($allcountry->num_rows()>0)
                            {
                                foreach($allcountry->result() as $item=>$val)
                                {
                                    //set selected option
                                    if($val->id ==  1)
                                    {
                                        $pb_country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id,TRUE).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $pb_country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id).">".$val->name."</option>";  
                                    }
                                    
                                }
                            }
                        } 
                        $data['pb_country'] = $pb_country_opt;
                        // get province
                        $province_opt = "";
                        //$allpr = $this->province_model->GetAllProvinces(0,0,TRUE,$this->mng_auth->get_language());
                        $allpr = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());                     
                        if($allpr)
                        {
                            if($allpr->num_rows()>0)
                            {
                                foreach($allpr->result() as $item=>$val)
                                {
                                    $province_opt.="<option value ='".$val->code."' ".set_select('n_prov',$val->code).">".$val->name."</option>";  
                                }
                            }
                        }
                        $data['province'] = $province_opt;  
                        $data['district'] = "";  
                        
                        // get gender
                        $gender_type = "";
                        $genderObj = $this->statictables_model->GetCaseStatic_Tables2(21,0,0,TRUE,$this->mng_auth->get_language());
                        if($genderObj)
                        {
                            foreach($genderObj->result() as $row)
                            {
                                $gender_type.="<option value = '".$row->id."' ".set_select('gender1', $row->id).">".$row->name_en."</option>";    
                            }
                        }        
                        $data['gender'] = $gender_type;
                        
                        //provide record owner
                        $data['recordowner'] = $this->mng_auth->GetCaseOwner($this->mng_auth->get_user_id());

                        // get list of all agencies/ministires
                        $ministryObj = $this->mng_auth->GetAllParDeps(array('1000000001'));
                        //---- checkif there is any object  returned
                        if($ministryObj)
                        { 
                            $ministopt = "<option value=\"\" >".$this->lang->line('selectmin')."</option>";
                            foreach($ministryObj->result() AS $item)
                            {
                                $ministopt .= "<option value=\"".$item->id."\">".$item->name."</option>";
                            } 
                        }
                        $data['minisopt']        = $ministopt;
                        $data['departments']     = "";
                        
                        $form = $this->load->view("case/marooz_insert",$data,TRUE);
                        //echo $casedecoded
                        $message =$form;
                        $summary = casesummary($casedecoded);
                        popupheader_tpl($this->mng_auth->get_language());
                
                        //provide main content
                        popupcontent_tpl($summary.$message);
                        //end of develpers view  
                        //provide footer
                        footer_tpl();
                    }
                    else
                    {
                        //########## Get Marooz Details ################
                        $maroozdata = array(
                                            'mr_name'                =>$this->input->post('n_name2'),
                                            'mr_surname'             =>$this->input->post('surname2'),
                                            'mr_fname'               =>$this->input->post('n_fname2'),
                                            'mr_gfname'              =>$this->input->post('n_gfname2'),
                                            'mr_tazkirano'           =>$this->input->post('tazkirano2'),
                                            'mr_job'                 =>$this->input->post('job2'),
                                            'mr_doctypeno'           =>$this->input->post('docidtype2'),
                                            'mr_phone'               =>$this->input->post('phone2'),
                                            'mr_pbprovince'          =>$this->input->post('pbprovince2'),
                                            'mr_pbdistrict'          =>$this->input->post('pbdistrict2'),
                                            'mr_pbvillage'           =>$this->input->post('pbvillage2'),
                                            'mr_pcprovince'          =>$this->input->post('pcprovince2'),
                                            'mr_pcdistrict'          =>$this->input->post('pcdistrict2'),
                                            'mr_pcvillage'           =>$this->input->post('pcvillage2'),
                                            'gender'                 =>$this->input->post('gender1'),
                                            'case_urn'               =>$casedecoded,
                                            'userid'                 =>$this->mng_auth->get_user_id(), 
                                            'registerdate'           =>date('Y-m-d H:i:s'),
                                            'pb_country'            =>$this->input->post('pb_country'),
                                            'pc_country'            =>$this->input->post('pc_country'),
                                            'kochi'                 =>$this->input->post('kochi'),  
                                            'department'            =>$this->input->post('n_department'),
                                            'ministry'              =>$this->input->post('n_ministry'),   
                            );
                        $isAdded = $this->case_model->AddMarooz($maroozdata);
                        if($isAdded)
                        {
                            echo "<div class=\"success\"><h2>".lang('gc_editmarozmsg')."</h2></div>";
                        }
                        
                    }
                    
                }                
            }
        }
        
        
        //--- function add areez -----
        function editMarooz($enc_caseid, $id = 0)
        {
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            { 
                $casedecoded = $this->mng_auth->check_case_id($enc_caseid); 
                if($casedecoded!=0)
                {
                
                    //set form validation ----
                    $this->form_validation->set_rules('n_name2',"", 'required|trim');    
                    $this->form_validation->set_rules('surname2',"", 'trim');    
                    $this->form_validation->set_rules('n_fname2',"", 'required|trim');    
                    $this->form_validation->set_rules('n_gfname2',"", 'required|trim');    
                    $this->form_validation->set_rules('tazkirano',"", 'trim');    
                    $this->form_validation->set_rules('job',"", 'trim');    
                    $this->form_validation->set_rules('phone',"", 'trim');    
                    if ($this->form_validation->run() == FALSE) // validation hasn't been passed 
                    { 
                        
                        $data =  array();
                        
                        //---- get areez details ------
                        $areezObj = $this->case_model->GetOneRecord("marooz","*","id",$id);
                        if(!$areezObj) { exit;}
                        $data['rowobj'] = $areezObj->row();
                        $caserow        = $areezObj->row();
                        $data['enc_caseid'] = $enc_caseid;
                        // get province
                        //====get country list and provide Afghanistan selection ====
                        $allcountry = $this->province_model->GetAllCountries($this->mng_auth->get_language());
                        $pb_country_opt = "";
                        $pc_country_opt = "";
                        if($allcountry)
                        {
                            if($allcountry->num_rows()>0)
                            {
                                foreach($allcountry->result() as $item=>$val)
                                {
                                    //set selected option
                                    if($val->id ==  $areezObj->row()->pb_country)
                                    {
                                        $pb_country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id,TRUE).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $pb_country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id).">".$val->name."</option>";  
                                    }
                                    
                                    if($val->id ==  $areezObj->row()->pc_country)
                                    {
                                        $pc_country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id,TRUE).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $pc_country_opt.="<option value ='".$val->id."' ".set_select('pbcountry',$val->id).">".$val->name."</option>";  
                                    }
                                    
                                }
                            }
                        } 
                        $data['pb_country'] = $pb_country_opt;
                        $data['pc_country'] = $pc_country_opt;
                        $ar_pbprovince = "";
                        $ar_pcprovince = "";
                        //$allpr = $this->province_model->GetAllProvinces(0,0,TRUE,$this->mng_auth->get_language());
                        $allpr = $this->province_model->GetAllProvinces(0,0,true,$this->mng_auth->get_language());                     
                        if($allpr)
                        {
                            if($allpr->num_rows()>0)
                            {
                                foreach($allpr->result() as $item=>$val)
                                {
                                    if($val->code == $caserow->mr_pbprovince)
                                    {
                                        $ar_pbprovince.="<option value ='".$val->code."' ".set_select('n_prov',$val->code,true).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $ar_pbprovince.="<option value ='".$val->code."' ".set_select('n_prov',$val->code).">".$val->name."</option>";    
                                    }
                                    //ar current province
                                    if($val->code == $caserow->mr_pcprovince)
                                    {
                                        $ar_pcprovince.="<option value ='".$val->code."' ".set_select('n_prov',$val->code,true).">".$val->name."</option>";  
                                    }
                                    else
                                    {
                                        $ar_pcprovince.="<option value ='".$val->code."' ".set_select('n_prov',$val->code).">".$val->name."</option>";    
                                    }   
                                }
                            }
                        }
                        $data['ar_pbprovince'] = $ar_pbprovince;  
                        $data['ar_pcprovince'] = $ar_pcprovince;  
                        //--- get districts ---
                        $ar_pbdistrictopt = "";
                        $ar_pbcode = "0";
                        if($caserow->mr_pbprovince > 0)
                        {
                            
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetDistrictsByProvince(0,0,TRUE,$this->mng_auth->get_language(),$caserow->mr_pbprovince); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->code == $caserow->mr_pbdistrict)
                                       {
                                           $ar_pbdistrictopt.="<option value=\"".$val->code."\" selected=\"selected\">".$val->name."</option>";
                                           $ar_pbcode = $val->code;
                                       }
                                       else
                                       {
                                           $ar_pbdistrictopt.="<option value=\"".$val->code."\" >".$val->name."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        //echo $ar_pbdistrictopt;exit;
                        $data['ar_pbdistrict'] = $ar_pbdistrictopt;  
                        //######### get areez pc district ##########
                        $ar_pcdistrictopt = "";
                        $ar_pccode = "0";
                        if($caserow->mr_pcprovince > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetDistrictsByProvince(0,0,TRUE,$this->mng_auth->get_language(),$caserow->mr_pcprovince); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->code == $caserow->mr_pcdistrict)
                                       {
                                           $ar_pcdistrictopt.="<option value=\"".$val->code."\" selected=\"selected\">".$val->name."</option>";
                                           $ar_pccode = $val->code;
                                       }
                                       else
                                       {
                                           $ar_pcdistrictopt.="<option value=\"".$val->code."\" >".$val->name."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['ar_pcdistrict'] = $ar_pcdistrictopt;  
                        
                        //######### get areez current villages ##########
                        $ar_pbvillage = "";
                        if($ar_pbcode > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetVillageByDistrict(0,0,TRUE,$this->mng_auth->get_language(),$ar_pbcode); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->villagecode == $caserow->mr_pbvillage)
                                       {
                                           $ar_pbvillage.="<option value=\"".$val->villagecode."\" selected=\"selected\">".$val->villagename."</option>";
                                       }
                                       else
                                       {
                                           $ar_pbvillage.="<option value=\"".$val->villagecode."\" >".$val->villagename."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['ar_pbvillage'] = $ar_pbvillage;
                        
                        //######### get areez current villages ##########
                        $ar_pcvillage = "";
                        if($ar_pccode > 0)
                        {
                           //=== get province pbprcode district list 
                           $distObj = $this->province_model->GetVillageByDistrict(0,0,TRUE,$this->mng_auth->get_language(),$ar_pccode); 
                           if($distObj)
                           {
                                if($distObj->num_rows()>0)
                                {
                                    foreach($distObj->result() as $item=>$val)
                                    {
                                       //----- check distrinct of pb
                                       if($val->villagecode == $caserow->mr_pcvillage)
                                       {
                                           $ar_pcvillage.="<option value=\"".$val->villagecode."\" selected=\"selected\">".$val->villagename."</option>";
                                       }
                                       else
                                       {
                                           $ar_pcvillage.="<option value=\"".$val->villagecode."\" >".$val->villagename."</option>";
                                       }
                                    }
                                }
                           }
                           
                        }
                        $data['ar_pcvillage'] = $ar_pcvillage;
                        
                        // get gender
                        $gender_type = "";
                        $genderObj = $this->statictables_model->GetCaseStatic_Tables2(21,0,0,TRUE,$this->mng_auth->get_language());
                        if($genderObj)
                        {
                            foreach($genderObj->result() as $row)
                            {
                                if($row->id  == $caserow->gender)
                                {
                                    $gender_type.="<option value = '".$row->id."' ".set_select('gender1', $row->id,TRUE).">".$row->name_en."</option>";    
                                }
                                else
                                {
                                     $gender_type.="<option value = '".$row->id."' ".set_select('gender1', $row->id).">".$row->name_en."</option>";
                                }
                            }
                        }        
                        $data['gender'] = $gender_type;
                        
                        // get list of all agencies/ministires
                        $ministryObj = $this->mng_auth->GetAllParDeps(array('1000000001'));
                        //---- checkif there is any object  returned
                        if($ministryObj)
                        {
                            $ministopt = "<option value=\"\"  selected=\"selected\">".$this->lang->line('selectmin')."</option>";
                            foreach($ministryObj->result() AS $item)
                            {
                                log_message('DEBUG', 'controllers/ghuquq>editcase : min: ' . $caserow->ministry . ", dep: " . $item->id);
                                if($caserow->ministry == $item->id)
                                {
                                    $ministopt .= "<option value=\"".$item->id."\" selected=\"selected\">".$item->name."</option>";
                                      
                                }
                                else
                                {
                                    $ministopt .= "<option value=\"".$item->id."\">".$item->name."</option>";
                                }
                            }
                        }
                        $data['minisopt']        = $ministopt;     

                        $data['departments']     = "";
                        //--- department option ---
                         $AllDepObj = $this->mng_auth->GetAllParDeps(array($caserow->ministry));
                         $depOptList = "";
                         if($AllDepObj)
                         {
                            $depOptList = "<option value=\"\"  selected=\"selected\">".$this->lang->line('selectdep')."</option>";
                            //provide multiple department option and to select
                            foreach($AllDepObj->result() AS $item)
                            {
                                
                                if($caserow->department == $item->id)
                                {
                                     $depOptList .= "<option value=\"".$item->id."\" selected=\"selected\">".$item->name."</option>";
                                    
                                }
                                else
                                {
                                    $depOptList .= "<option value=\"".$item->id."\">".$item->name."</option>";
                                }
                            }
                        }
                        $data['departments']     = $depOptList;

                        $data['recordowner']  = $this->mng_auth->GetCaseOwner($caserow->userid);
                        $date               = explode(" ",$caserow->registerdate);  
                        $data['date']       = dateprovider($date[0],$this->mng_auth->get_language());  
                        $data['time']       = substr($date[1],0,5);
                        
                        
                        $form = $this->load->view("case/marooz_edit",$data,TRUE);
                        //echo $casedecoded
                        $message =$form;
                        $summary = casesummary($casedecoded);
                        popupheader_tpl($this->mng_auth->get_language());
                
                        //provide main content
                        popupcontent_tpl($summary.$message);
                        //end of develpers view  
                        //provide footer
                        footer_tpl();
                    }
                    else
                    {
                        //########## Get Marooz Details ################
                        $maroozdata = array(
                                            'mr_name'                =>$this->input->post('n_name2'),
                                            'mr_surname'             =>$this->input->post('surname2'),
                                            'mr_fname'               =>$this->input->post('n_fname2'),
                                            'mr_gfname'              =>$this->input->post('n_gfname2'),
                                            'mr_tazkirano'           =>$this->input->post('tazkirano'),
                                            'mr_job'                 =>$this->input->post('job'),
                                            'mr_doctypeno'           =>$this->input->post('docidtype'),
                                            'mr_phone'               =>$this->input->post('phone'),
                                            'mr_pbprovince'          =>$this->input->post('ar_pbprovince'),
                                            'mr_pbdistrict'          =>$this->input->post('ar_pbdistrict'),
                                            'mr_pbvillage'           =>$this->input->post('ar_pbvillage'),
                                            'mr_pcprovince'          =>$this->input->post('pcprovince'),
                                            'mr_pcdistrict'          =>$this->input->post('pcdistrict'),
                                            'mr_pcvillage'           =>$this->input->post('pcvillage'),
                                            'gender'                =>$this->input->post('gender1'),
                                            'pb_country'            =>$this->input->post('pb_country'),
                                            'pc_country'            =>$this->input->post('pc_country'),
                                            'kochi'                 =>$this->input->post('kochi'),
                                            'userid'                => $this->mng_auth->get_user_id(),
                                            'department'            =>$this->input->post('n_department'),
                                            'ministry'              =>$this->input->post('n_ministry'),
                                            'registerdate'          => date('Y-m-d H:i:s'),
                            );
                        
                        $isEdited = $this->case_model->updateMarooz($maroozdata,$casedecoded,$id);
                        if($isEdited)
                        {
                            popupheader_tpl($this->mng_auth->get_language());
                            echo "<div class=\"success\"><h2>".lang('gc_editmarozmsg')."</h2></div>";
                            echo "<input type=\"button\" class=\"searchButton\" onclick=\"javascript: closeAndRefresh()\" value=\"".lang('case_cancel')."\" />";
                        }
                        
                    }
                    
                }                
            }
        }
        
        
        //---- get departemnt by parent ---
       function GetProvinceOrganization2()
       {
            //if this user is not logged in and its not admin
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                
                //---- get all departments where parent is provided and province code exists ----
                
                if($this->input->post('minid') != "" && $this->input->post('prid') != "")
                {
                    $allDeps = $this->mng_auth->GetAllParProvince(array($this->input->post('minid')),$this->input->post('prid'));
                    $depoption = "";
                    $depoption = "<option value=\"\" selected=\"selected\">".$this->lang->line('case_selectdep')."</option>";
                    if($allDeps)
                    {
                        foreach($allDeps->result() AS $item)
                        {
                            $depoption .="<option value=\"".$item->id."_".$item->org_code."\">".$item->name."</option>"; 
                        }
                    }
                    $dropd = "";
                    $dropd .= "<select name=\"n_department\" id=\"n_department\" class=\"selectbox\" style=\"width: 250px;\" onchange=\"depCode('n_department');validate_all('case_form');\" >";    
                    $dropd .= $depoption;
                    $dropd .="</select>";
                    $dropd .="&nbsp;<img id=\"n_departmentIMG\" src=\"".base_url()."images/validationx.PNG\" width=\"19\" height=\"19\" style=\"position:relative; top:4px\"/>";
                    
                    //show dropdwon
                    echo $dropd;
                }
            }
        
    }
    
    //---- get departemnt by Province for sender and receiver Added By @Ali Abassi ---
       function getDepsProvinceSenderReciver()
       {
            //if this user is not logged in and its not admin
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                
                //---- get all departments where parent is provided and province code exists ----
                
                if($this->input->post('prid') != "")
                {
                    $name="org_name".$this->mng_auth->get_language();
                    $allDeps = $this->mng_auth->GetAllParProvinceSenderReciver($this->input->post('prid'));
                    $depoption = "";
                    $depoption = "<option value=\"\" selected=\"selected\">".$this->lang->line('case_selectdep')."</option>";
                    if($allDeps)
                    {
                        foreach($allDeps->result() AS $item)
                        {
                            $depoption .="<option value=\"".$item->id."\">".$item->$name."</option>"; 
                        }
                    }
                    $dropd = "<div id='senderDiv' class='txbox_div' >";
                    $dropd .= "<select name=\"sender[]\" id=\"sender[]\" class=\"selectbox\" style=\"width: 250px;\" >";
                    $dropd .= $depoption;
                    $dropd .="</select></div>";
                    $dropd .="<div id='receiverDiv' class='txbox_div's>";
                    $dropd .= "<select name=\"receiver[]\" id=\"receiver[]\" class=\"selectbox\" style=\"width: 250px;\" >";    
                    $dropd .= $depoption;
                    $dropd .="</select></div>";
                    
                    //show dropdwon
                    echo $dropd;
                }
            }
        
        }
          //------------------3884----=======================----start
    function getDepsProvinceSenderReciver3()
       {
            //if this user is not logged in and its not admin
            if(!$this->mng_auth->is_logged_in()) 
            {  
                // logged in, if user is logged in than redirect to home
                redirect($this->config->item('auth_link'));
            }
            else
            {
                
                //---- get all departments where parent is provided and province code exists ----
                
                if($this->input->post('prid') != "")
                {
                    $name="org_name".$this->mng_auth->get_language();
                    $allDeps = $this->mng_auth->GetAllParProvinceSenderReciver($this->input->post('prid'));
                    $depoption = "";
                    $depoption = "<option value=\"\" selected=\"selected\">".$this->lang->line('case_selectdep')."</option>";
                    if($allDeps)
                    {
                        foreach($allDeps->result() AS $item)
                        {
                            $depoption .="<option value=\"".$item->id."\">".$item->$name."</option>"; 
                        }
                    }
                    $dropd = "<div id='senderDiv3' class='txbox_div' >";
                    $dropd .= "<select name=\"sender2\" id=\"sender2\" class=\"selectbox\" style=\"width: 250px;\" >";
                    $dropd .= $depoption;
                    $dropd .="</select></div>";
                    $dropd .="<div id='receiverDiv3' class='txbox_div' >";
                    $dropd .= "<select name=\"receiver2\" id=\"receiver2\" class=\"selectbox\" style=\"width: 250px;\" >";    
                    $dropd .= $depoption;
                    $dropd .="</select></div>";
                    
                    //show dropdwon
                    echo $dropd;
                }
            }
        
        }
     

    //------------------3884--------------------------end----
        
        //datedetails function 
         
        //---- get list of records ----
        private function listProceedingRecords($case_urn,$enc_caseid,$type = 1, $isEditable = 0)
        {
            $data = array();
            $resObj = $this->ghuquq_model->allProceedingRecords($case_urn,$type,$this->mng_auth->get_language());

            $data['isEditable'] = $isEditable;
            $data['records']         = $resObj;
            //print_r($resObj->row('gov_benefit'));exit;
            $data['enc_caseid']      = $enc_caseid;
            $data['dtype']      = $type;
            if($type == 1)
            {
               $reclist = $this->load->view("ghuquq/case_proceeding_list",$data,TRUE);
            }
            else if($type == 2)
            {
                $reclist = $this->load->view("ghuquq/case_proceeding_list",$data,TRUE);
            }
            else if($type == 3)
            {
                $reclist = $this->load->view("ghuquq/supreme_list",$data,TRUE);
            }
            else if($type == 5)
            {
                $reclist = $this->load->view("ghuquq/case_proceeding_list",$data,TRUE);
            }
            //return list 
            return $reclist;
        }
        
        // function for generating court decission for benefet or lost of governoment 
        //---- get prison list for housing information 
        function getGovBenefet()
        {
            $prlist = "<select name=\"n_gpr_court_dec[]\" id=\"n_gpr_court_dec\" style=\"width:220px\" class=\"selectbox\" onchange=\"validate_all('case_form');\" />";
            $prlist.= "<option value=\"\" selected=\"selected\">".$this->lang->line('g_selectopt')."</option>";
            // get static list
            //$type = $this->input->post('type');
            //==== get detention details ==== 
            if(true)
            {
                //$dec_type = "";
                $decObj = $this->statictables_model->GetCaseStatic_Tables2(23,0,0,TRUE,$this->mng_auth->get_language());
                if($decObj)
                {
                    foreach($decObj->result() as $row)
                    {
                        $prlist.="<option value = '".$row->id."'>".$row->name_en."</option>";
                    }
                }
                
            }
            $prlist.='</select>'.' <img id="n_gpr_court_decIMG" src="'.base_url().'images/validationx.PNG" width="19" height="19" style="position:relative; top:4px"/>';        
            echo $prlist;
        }
        
        // get type for the second time 
        function getGprCourtType()
        {
            $prlist = "<select name=\"gpr_type[]\" id=\"gpr_type[]\" style=\"width:220px\" class=\"selectbox\" onchange=\"bring_page('".base_url()."/case/home/getGovBenefet','n_gpr_court_dec','type','courtDiv','&');\" />";
            $prlist.= "<option value=\"\" selected=\"selected\">".$this->lang->line('g_selectopt')."</option>";
            // get static list
            //$type = $this->input->post('type');
            //==== get detention details ==== 
            if(true)
            {
                
                //load language file too of ghuquq
                $reqObj = $this->statictables_model->GetCaseStatic_Tables2(22,0,0,TRUE,$this->mng_auth->get_language());
                if($reqObj)
                {
                    foreach($reqObj->result() as $row)
                    {
                        $prlist.="<option value = '".$row->id."'>".$row->name_en."</option>";
                    }
                }
            }
            $prlist.='</select>';        
            echo $prlist;
        }
        
    }
   // end of case controller file                                                                        
   //location: apirscore/controllers/case/home
