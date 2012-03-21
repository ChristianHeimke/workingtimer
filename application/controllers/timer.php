<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by JetBrains PhpStorm.
 * User: cheimke
 * Date: 20.03.12
 * Time: 19:47
 * To change this template use File | Settings | File Templates.
 */
class timer extends CI_Controller
{
    var $item;

    public function __construct()
    {
        parent::__construct();
        $this->item = new Timeritem();
    }

    function start(){

        $this->item->start();
        redirect("/");
    }

    function stop(){
        $this->item->stop();
        redirect("/");
    }

    function get_DiffTimestamp(){
        $query = $this->db->query('SELECT start,stop FROM timetable WHERE date="'.date("Y-m-d").'" LIMIT 1');
        $row = $query->row();

        return $row->stop - $row->start;
    }


}
