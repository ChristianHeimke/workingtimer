<?php
/**
 * Created by JetBrains PhpStorm.
 * User: cheimke
 * Date: 21.03.12
 * Time: 18:40
 * To change this template use File | Settings | File Templates.
 */
class log extends CI_Controller
{

    function index(){

        $item = new Timeritem();

        $data['items'] = $item->getAll();

        $this->load->view("log",$data);
    }
}
