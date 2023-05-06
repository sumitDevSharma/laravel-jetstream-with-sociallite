<?php 
if (! function_exists('calculateToMinutes')) {
    function calculateToMinutes($timeString)
    {   
        $timeInMinutes = '';
        if($timeString){
            $time = explode(' ', $timeString);
            if($time[1]=='hours' && !empty($time[3]) && $time[3]=='mins'){
                $timeInMinutes = intval($time[0]) * 60 + intval($time[2]);
            }
            elseif($time[1]=='hours' && empty($time[3])){
                $timeInMinutes = intval($time[0])* 60;
            }
            else{
                $timeInMinutes =  intval($time[0]);
            }
        }
        return $timeInMinutes;
    }
}
if (! function_exists('convertToMinutes')) {
    function convertToMinutes($string) {
        $arr =[];
        $totalMins="";
        $parts = explode(" ", trim($string));
        dd($string);
        foreach ($parts as $i => $part) {
            if ($i % 2 == 0) {
                $arr[] = intval($part);
            }
        }
        
        if(count($arr)> 1){
        $totalMins = ($arr[0] * 60) + $arr[1];
        }else{
         $totalMins = $arr[0];
        }
        
        return $totalMins;
    }
}
?>