<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Qualitative;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Config;
class ResultController extends Controller
{
    private $setid,$id;
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
         $this->id=auth()->user()->id;
         $this->setid=auth()->user()->id%2+1;
        $qans = DB::select(DB::raw("select * from qualitative_analysis where setid='$this->setid'"));
        $qans1 = DB::select(DB::raw("select * from qualitatives where id='$this->id'"));
        $cans =DB::select(DB::raw("select * from comprehension where setid='$this->setid'"));
        $cans1 = DB::select(DB::raw("select * from qualitatives where id='$this->id'"));
        $crans = DB::select(DB::raw("select * from creative_test where setid='$this->setid'"));
        $crans1 = DB::select(DB::raw("select * from qualitatives where id='$this->id'"));
        $anans = DB::select(DB::raw("select * from analytical_test where setid='$this->setid'"));
        $anans1 = DB::select(DB::raw("select * from qualitatives where id='$this->id'"));
        return view('final',['qans'=>$qans,'qans1'=>$qans1,'cans'=>$cans,'cans1'=>$cans1,'crans'=>$crans,'crans1'=>$crans1,'anans'=>$anans,'anans1'=>$anans1]);  
    }

    public function fetchall(){
        $users=User::all();
        $result=Qualitative::all();
        return view('auth.resultadmin')->with('result',$result);
    }
}
