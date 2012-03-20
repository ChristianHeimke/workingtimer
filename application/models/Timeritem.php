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
    var $status;        // 0 -> off, 1 -> on, 2 -> pause

}