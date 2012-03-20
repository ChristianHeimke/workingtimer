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
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function start(){
        $this->db->query("INSERT INTO timetable(date,start) VALUES ('".date("Y-m-d")."','".time()."')");
        redirect("/");
    }

    function stop(){
        $this->db->query("UPDATE timetable SET stop='".time()."' WHERE date='".date("Y-m-d")."'");
        redirect("/");
    }

    function pause(){
        $query = $this->db->query('SELECT id FROM timetable WHERE date="'.date("Y-m-d").'" LIMIT 1');
        $row = $query->row();

        $id = $row->id;
    }

    function get_DiffTimestamp(){
        $query = $this->db->query('SELECT start,stop FROM timetable WHERE date="'.date("Y-m-d").'" LIMIT 1');
        $row = $query->row();

        return $row->stop - $row->start;
    }


}
