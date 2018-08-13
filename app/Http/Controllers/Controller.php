<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function duration($ytDuration) {
        $date = new \DateTime('1970-01-01');
        $date->add(new \DateInterval($ytDuration));
        return $date->format('H:i:s');
    }
    function secToHR($seconds) {
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds / 60) % 60);
        $seconds = $seconds % 60;
        $result="";
        if($hours>0&&$hours<10){
            $result=$result."0".$hours.":";
        }
        elseif ($hours>=10){
            $result=$result.$hours.":";
        }
        if($minutes>0&&$minutes<10){
            $result=$result."0".$minutes.":";
        }
        elseif ($minutes>=10){
            $result=$result.$minutes.":";
        }
        else{
            $result=$result."00:";
        }
        if($seconds>0&&$seconds<10){
            $result=$result."0".$seconds;
        }
        elseif ($seconds>=10){
            $result=$result.$seconds;
        }
        else{
            $result=$result."00";
        }
        return $result;
    }
    function rmrf($dir) {
        foreach (glob($dir) as $file) {
            if (is_dir($file)) {
                $this->rmrf("$file/*");
                rmdir($file);
            } else {
                unlink($file);
            }
        }
    }
}