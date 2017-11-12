<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->name);
        //$rules = [
        //    'name' => 'required',
        //];
        //$this->validate($request, $rules);
        //Bonus::create([
        //    'name' => $request->name,
        //   'value' => ""
        //]);
        //ActivityLog::log('เพิ่ม Bonus : '.$request->name.' เรียบร้อยแล้ว');
        //session()->flash('massage', 'เพิ่ม Bonus '.$request->name.' เรียบร้อยแล้ว');
        $name = $request->name;
        $city = $request->city;
        return view('demoPost1_test',compact('name','city'));
    }
}
