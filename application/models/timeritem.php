<?php
/**
 * Created by JetBrains PhpStorm.
 * User: cheimke
 * Date: 20.03.12
 * Time: 22:06
 * To change this template use File | Settings | File Templates.
 */

class Timeritem extends CI_Model
{
    var $date;
    var $start;
    var $stop;
    var $pause;
    var $total_sec;
    var $status;        // 0 -> off, 1 -> on


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    function start(){
        $query = $this->db->query("SELECT id FROM timetable WHERE date='".date("Y-m-d")."' LIMIT 1");

        if($query->num_rows()>0){
            $this->db->query("UPDATE timetable SET start='".time()."' , status=1 WHERE date='".date("Y-m-d")."'");
        }else{
            $this->db->query("INSERT INTO timetable(date,start,status) VALUES ('".date("Y-m-d")."','".time()."',1)");
        }

    }

    function stop(){
        $query = $this->db->query("SELECT start,total_sec FROM timetable WHERE date='".date("Y-m-d")."' LIMIT 1");
        $row = $query->row();

        $total = time() - $row->start + $row->total_sec;

        $this->db->query("UPDATE timetable SET stop='".time()."' , status=0 , total_sec='$total' WHERE date='".date("Y-m-d")."'");
    }

    function isRunning(){
        $query = $this->db->query("SELECT status FROM timetable WHERE date='".date("Y-m-d")."' LIMIT 1");

        if($query->num_rows()>0){
            $row = $query->row();

            if($row->status == 1)
                return true;
        }

        return false;
    }

    function getTotalSeconds($date){

       $query = $this->db->query("SELECT total_sec FROM timetable WHERE date='$date' LIMIT 1");

        if($query->num_rows > 0)
            return $query->row()->total_sec;

        return "0";
    }

    function getDuration($date){
        $secs = $this->getTotalSeconds($date);

        $vals = array('w' => (int) ($secs / 86400 / 7),
            'd' => $secs / 86400 % 7,
            'h' => $secs / 3600 % 24,
            'm' => $secs / 60 % 60,
            's' => $secs % 60);

        $ret = array();

        $added = false;
        foreach ($vals as $k => $v) {
            if ($v > 0 || $added) {
                $added = true;
                $ret[] = $v . $k;
            }
        }

        return join(' ', $ret);
    }


    function getAll(){
        $query = $this->db->query('SELECT date FROM timetable order by date');

        $items = array();


        foreach ($query->result() as $row)
        {
            $item['date'] = $row->date;
            $item['duration'] = $this->getDuration($row->date);

            $items[] = $item;
        }

        return $items;
    }


}