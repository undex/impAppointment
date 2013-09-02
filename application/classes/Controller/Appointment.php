<?php

    defined('SYSPATH') or die('No direct script access.');

    class Controller_appointment extends Controller_DefaultTemplate {
    	
    	public function action_index(){
    		$datas = ORM::factory('scheda')
    			  ->select('ID', 'Name', 'Time')
    			  ->order_by('ID', 'Asc')
    			  ->find_all();

    		$this->template->title = 'L and A s Hotel';
            $this->template->meta_keywords = 'Your Hotel';
            $this->template->meta_description = 'have it your way';
    		$this->template->header = View::factory('pages/header');
            $this->template->content = View::factory('pages/table')->set('datas',$datas);
            $this->template->footer = View::factory('pages/footer');
            $this->template->styles = array('assets/css/main.css' => 'screen');
            $this->template->scripts = array('assets/js/jquery-1.10.1.js');
    	}

    	public function action_save(){
    		if(!$this->request->post()){ 
	           return false;
	        } 
	        $this->auto_render = false;
	        $ID = $this->request->post('ID');
	        $appointment = new Model_Scheda($ID);
	        $data = array();

	       		$appointment->values($this->request->post());
	        	$appointment->Name = $this->request->post('Name');
	        	$appointment->Time = $this->request->post('Time');
	        	$appointment->save();
            	HTTP::redirect('appointment');
    	}

    	public function action_update(){
            $ID = $this->request->post('ID');
            $result = DB::select()->from('scheda')->where('ID', '=', $ID)->limit(1)->as_object()->execute();
            $appointdata = array();
                 foreach ($result as $data){
                    $appointdata = $data;
                 }  
            $this->template->content = View::factory('pages/updateForm')->bind('data',$appointdata);
        }

        public function action_recordUpdate(){
            $ID = $this->request->post('ID');
            $Name = $this->request->post('Name');
            $Time = $this->request->post('Time');
            $appointment = DB::update('scheda')->set(array('Name' =>$Name, 'Time' => $Time))->where('ID', '=', $ID)->execute();
            HTTP::redirect('appointment');
        }

    	public function action_delete(){
            $ID = $this->request->post('ID');
            $appointment = DB::delete('scheda')->where('ID', '=', $ID)->execute();

                if ($appointment){
                    echo "<script>
                            alert('Delete Successful!');
                            window.location.replace('/impAppointment/appointment');
                          </script> ";
                }else{
                    echo "<script>
                            alert('Delete Failed');
                            window.location.replace('/impAppointment/appointment');
                          </script>";
                }
    	}
    }
?>