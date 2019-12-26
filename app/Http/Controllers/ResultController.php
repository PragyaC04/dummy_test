<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Qualitative;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Config;
class ResultController extends Controller
{
    public function qcorrect(Request $request){
        /*$a= Config::set('q','0');
        echo $a;
        $rating = Qualitative::firstOrNew(['id' =>auth()->user()->id]);
        $data= $request->all();
        //$count=1;
        $name=array_keys($data);
        $count=count($name);
       // return $name;
       for($d=2;$d<=$count;$d=$d+1)
       // foreach($name as $n)
        {
              $rating->id= auth()->user()->id;
              $f="ANA_ANS".$name[$d-1];
              $rating->$f = $data[$name[$d-1]];
              //echo " <br> ".$f." ";
              //echo $data[$name[$d-1]];    
         }
         $rating->save();*/
        
         for($i=1;$i<=20;$i=$i+1){
            $myItem = '';
            $a="q".$i;
        if(isset($_COOKIE[$a])) {
                $myItem = $_COOKIE[$a];
                echo $myItem;
        }}
        /*$qans = DB::select('select * from qualitative_analysis where setid="1"');
        $qans1 = DB::select('select * from qualitatives where id="1"');
        $cans = DB::select('select * from comprehension where setid="1"');
        $cans1 = DB::select('select * from qualitatives where id="1"');
        $crans = DB::select('select * from creative_test where setid="1"');
        $crans1 = DB::select('select * from qualitatives where id="1"');
        $anans = DB::select('select * from analytical_test where setid="1"');
        $anans1 = DB::select('select * from qualitatives where id="1"');
        //return array_pop($qans);
        return view('final',['qans'=>$qans,'qans1'=>$qans1,'cans'=>$cans,'cans1'=>$cans1,'crans'=>$crans,'crans1'=>$crans1,'anans'=>$anans,'anans1'=>$anans1]);  
    */}
}
