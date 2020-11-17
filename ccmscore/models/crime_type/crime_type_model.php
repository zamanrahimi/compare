<?php
  /*
	crime type model which provides INSERT, UPDATE, SELECT and LOG action to all requests 
	create date: 18/12/2011
	Author: Shabnam Halimi 
	*/
class Crime_type_model extends CI_Model
{
    private $cms_db;
    private $prefix = "cms";
    function __construct()
    {
        parent::__construct();
	    $this->cms_db = $this->cms_db = $this->load->database('ccms',TRUE);
    }
    function destruct()
    {
	   // no code
    }
    //getrecord fuction get all information about crime type table
    function GetCrimetype($id=0)
    {
        //to gat data of the table
        $this->cms_db->select('*');
		$this->cms_db->from('cms_crime_types');
		$this->cms_db->where('id',$id);
		$data=$this->cms_db->get();
		if($data->num_rows()>0)
		{
            return $data;
		}
        else
        {
            return 0;
        }
    }
    function TotalRecords()
    {
        return $this->cms_db->count_all('cms_crime_types');
    }
    //function to add data into crime type table
    function GetAllRecords($offset, $nrecords, $istotal=FALSE, $lang='en')
    {
        //GetAllRecords function gets all information of crime type table
        //get one table data
        $this->cms_db->select('*, name_'.$lang." AS name");
		$this->cms_db->from($this->prefix.'_crime_types');
        //order the records
        $this->cms_db->order_by("name_".$lang,"ASC");
		//if there is a limitation data retrieve
		if(!$istotal)
		{
            $this->cms_db->limit($nrecords,$offset);
        }
        $query=$this->cms_db->get();
        if ($query->num_rows()>0)
        {
            // returns the data which is stored in $query
			return $query;
        }
        else
        {
            return FALSE;
        }
    }
    function InsertCrimetype($data=array())
    {
        if(is_array($data))
        {
            $add_data=array(
		      'name_en' =>$data['name_english'],
		      'name_dr' =>$data['name_dari'],
		      'name_pa' =>$data['name_pashto']
		  
		  );
		      // transaction start
		     $this->cms_db->trans_start();
		      //to insert data in to table
		     $this->cms_db->insert('cms_crime_types',$add_data);
		      //commit transaction
		     $this->cms_db->trans_complete();
		      return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    
    function insertSRC($data=array())
    {
        if(is_array($data))
        {
              // transaction start
             $this->cms_db->trans_start();
              //to insert data in to table
             $this->cms_db->insert('apirs_stables',$data);
              //commit transaction
             $this->cms_db->trans_complete();
              return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    
    
    //function for getting a single(one) record before update
    function One_record($table="", $colums="*", $colum="",$id=0)
    {
        if(!empty($table) && !empty($colums) && !empty($colum) && $id !=0)
        {
            $this->cms_db->select($colums);
			$this->cms_db->from($table);
			$this->cms_db->where($colum,$id);
			$data=$this->cms_db->get();
			  // to check data is coming from DB or not
			 if($data->num_rows()>0)
			 {
			   return $data;
			 }
			 else
			 {
			   return FALSE;
			 }
        }
    }
    //function to update crime type table data
    function UpdateCrimetype($data=array() ,$id=0)
    {
        $onere=$this->One_record("cms_crime_types","id","id",$id);
		if(is_array($data) && $id !=0 && $onere)
        {
            $edit_data=array(
			        'name_en' =>$data['name_english'],
			        'name_dr' =>$data['name_dari'],
			        'name_pa' =>$data['name_pashto']
		        );
           // transaction start
           $this->cms_db->trans_start();
		   //to insert data in to table  
		   $this->cms_db->where('id',$id);
		   $this->cms_db->update('cms_crime_types',$edit_data);
		   //commit transaction
		   $this->cms_db->trans_complete();
		   return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    //Function to delete the data from crime type table 
    function DeleteCrimetype($id=0)
    {
        $onere=$this->One_record("cms_crime_types","id","id",$id);
        if($id !=0 && $onere)
        {
            // transaction start
            $this->cms_db->trans_start();
			//to insert data in to table  
			$this->cms_db->where('id',$id);
			$this->cms_db->delete('cms_crime_types');
			//commit transaction
			$this->cms_db->trans_complete();
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    function getting_crime($offset, $nrecords, $istotal=FALSE,$lang='en')
    {
        if ($lang!=NULL)
        {
            $this->cms_db->select
			('
			   id,
			   name_en,
			   name_dr,
			   name_pa,
			   name_'.$lang.' AS name,
			');
			
			$this->cms_db->from('cms_crime_types');
			//order the records
			$this->cms_db->order_by("name_".$lang,"ASC");
			//if there is a limitation data retrieve
			if(!$istotal)
			{
			   $this->cms_db->limit($nrecords,$offset);
			}
			$query=$this->cms_db->get();
			if ($query->num_rows()>0)
			{
				// returns the data which is stored in $query
				return $query;
			}
			else
			{
				return FALSE;
			}
        }
        else
        {
            return FALSE;
        }
    }
    //get list of subcrime by crime type id
	function GetSubCrimeByCrime($offset, $nrecords, $istotal=FALSE,$lang='en',$crimeid=null)
	{                                                         
		// GetDetails function gets all information of bankname table
		//get one table data
		
		if($lang == 'en')
		{
		   $subcrime = "name_en";
		}
		else if($lang == 'dr')
		{
		   $subcrime = "name_dr";
		}
		else
		{
		   $subcrime = "name_pa";     
		}
		$this->cms_db->select('id,'.$subcrime.' AS name,name_en AS name_en, name_dr AS name_dr');
		$this->cms_db->from('apirs_sub_crime');
		
		//set where clause of province code
		$this->cms_db->where('crimeid',$crimeid);
		//order the records
		$this->cms_db->order_by("name_en","ASC");
		//if there is a limitation data retrieve
		if(!$istotal)
		{
		   $this->cms_db->limit($nrecords,$offset);
		}
		
		$query=$this->cms_db->get();
		if ($query->num_rows()>0)
		{
		   // returns the data which is stored in $query
			return $query;
		}
		else
		{
			return FALSE;
		}
	}
	//get list of crime description by sub crime id
	function GetCrimeDescBySubCrime($offset, $nrecords, $istotal=FALSE,$lang='en',$subid=null)
	{
		// GetDetails function gets all information of bankname table
		//get one table data
		if($lang == 'en')
		{
		   $crimedesc = "name_en";
		}
		else if($lang == 'dr')
		{
			$crimedesc = "name_dr";
		}
		else
		{
		   $crimedesc = "name_pa";     
		}
		$this->cms_db->select('id,'.$crimedesc.' AS name, name_en As name_en, name_dr AS name_dr');
		$this->cms_db->from('apirs_crime_description');
		
		//set where clause of province code
		$this->cms_db->where('subcrimeid',$subid);
		//order the records
		$this->cms_db->order_by("name_en","ASC");
		//$this->cms_db->group_by("id"); 
		//if there is a limitation data retrieve
		if(!$istotal)
		{
		   $this->cms_db->limit($nrecords,$offset);
		}
		
		$query=$this->cms_db->get();
		if ($query->num_rows()>0)
		{
		   // returns the data which is stored in $query
			return $query;
		}
		else
		{
			return FALSE;
		}
	}
	//return one crime id if exists otherwise return 0 
	function GetCrimeTypeId($id = 0)
    {
		
		//getdetails function retrieve all contact detals informaton
		//get one table data
		$this->cms_db->select('id');
		$this->cms_db->from('cms_crime_types');
		$this->cms_db->where('id',$id);
		$this->cms_db->group_by('id');
		$query = $this->cms_db->get();
		
		if($query->num_rows > 0)
		{
			//return $query object
			$arr = $query->row_array(); 
			return $arr['id'];
		}
		else
		{
			//Return 0 for empty
			return 0;
		}
    }
	//return one subcrime id if exists otherwise return 0
	function GetSubCrimeId($id = 0)
	{
		//getdetails function retrieve all crime type informaton
		//get one table data
		$this->cms_db->select('id');
		$this->cms_db->from('apirs_sub_crime');
		$this->cms_db->where('id',$id);
		$this->cms_db->group_by('id');
		$query = $this->cms_db->get();
		if($query->num_rows > 0)
		{    
			$arr = $query->row_array();
			//return $query object
			return $arr['id'];
		}
		else
		{
			//Return 0 for empty
			return 0;
		}
    }
}
//end of crime type description model
