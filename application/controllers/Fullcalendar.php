<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fullcalendar extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('FullcalendarModel','fm');
    }
    public function index(){
        $eventData=$this->fm->getEvents();
        $data=[];
        foreach($eventData as $event){
            $data[]=array(
                'title'=>$event->title,
                'start'=>$event->start_event,
                'end'=>$event->end_event,
            );
        }
        $select['event']=json_encode($data);
        $this->load->view('fullcalendar',$select);
    }
}

?>