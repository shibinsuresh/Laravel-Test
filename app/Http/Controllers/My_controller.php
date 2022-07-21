<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class My_controller extends Controller
{
   public function add(Request $request)
   {
    
        if ($request->has('data')) {
            $dt=request()->data;
            $rst=explode('|',$dt);
            $sql=DB::table('employees')->insert(['department_id'=>$rst[0],'designation_id'=>$rst[1],'name'=>$rst[2],'email'=>$rst[3]]);
            if($sql)
            {
                echo "Add successfully";
            }
            else{
                echo "Not Added";
            }
          }
    
    
   }
   public function dlt(Request $request)
   {
    
        if ($request->has('id')) {
            $dt=request()->id;
            
            $sql=DB::table('employees')->where(['id'=>$dt])->delete();
            if($sql)
            {
                echo "Delete successfully";
            }
            else{
                echo "Not Deleted";
            }
          }
    
    
   }
   public function upd(Request $request)
   {
    
        if ($request->has('data')) {
            $dt=request()->data;
            $rst=explode('|',$dt);
            $sql=DB::table('employees')->where(['id'=>$rst[0]])->update(['department_id'=>$rst[1],'designation_id'=>$rst[2],'name'=>$rst[3],'email'=>$rst[4]]);
            if($sql)
            {
                echo "Updated successfully";
            }
            else{
                echo "Not Update";
            }
          }
    
    
   }

}
