<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Logdownload extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Logdownload_model');
    } 

    /*
     * Listing of logdownload
     */
    function index()
    {
        $data['logdownload'] = $this->Logdownload_model->get_all_logdownload();
        
        $data['_view'] = 'logdownload/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new logdownload
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nopeserta' => $this->input->post('nopeserta'),
				'datetime' => $this->input->post('datetime'),
            );
            
            $logdownload_id = $this->Logdownload_model->add_logdownload($params);
            redirect('logdownload/index');
        }
        else
        {            
            $data['_view'] = 'logdownload/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a logdownload
     */
    function edit($idlog)
    {   
        // check if the logdownload exists before trying to edit it
        $data['logdownload'] = $this->Logdownload_model->get_logdownload($idlog);
        
        if(isset($data['logdownload']['idlog']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nopeserta' => $this->input->post('nopeserta'),
					'datetime' => $this->input->post('datetime'),
                );

                $this->Logdownload_model->update_logdownload($idlog,$params);            
                redirect('logdownload/index');
            }
            else
            {
                $data['_view'] = 'logdownload/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The logdownload you are trying to edit does not exist.');
    } 

    /*
     * Deleting logdownload
     */
    function remove($idlog)
    {
        $logdownload = $this->Logdownload_model->get_logdownload($idlog);

        // check if the logdownload exists before trying to delete it
        if(isset($logdownload['idlog']))
        {
            $this->Logdownload_model->delete_logdownload($idlog);
            redirect('logdownload/index');
        }
        else
            show_error('The logdownload you are trying to delete does not exist.');
    }
    
}
