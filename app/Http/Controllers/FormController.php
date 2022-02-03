<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    
      
    // public function __construct()  
    // {  
    //     parent::__construct();  
  
    //     //calling model  
    //     $this->load->model("formmodel", "a");
    // }  
    // public function index()  
    // {  
    //     $this->load->view("form");  
    //     // $this->load->savingdata;
    // }  
    public function insert(){
        return view('forms');
    }
   public function savingdata()  
    {  
       echo "this array is used to get fetch data from the view page.  ";
        $data = array(  
                        'name'     => $this->input->post('name'),  
                        'meaning'  => $this->input->post('meaning'),  
                        'gender'   => $this->input->post('gender'),  
                        'religion' => $this->input->post('religion')  
                        );  
        //insert data into database table.  
        $this->db->insert('users',$data);  
  
        redirect("success");  
    }  

}
