<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addEmployee()
    {
        return view('index');
    }

    
    public function createEmployee(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->designation = $request->designation;
        $employee->save();
        return back()->with('success','Employee Inserted Successfully');

    }

    
    public function getEmployee()
    {
        $employees = Employee::orderBy('id')->get();
        return view('employees',compact('employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Edit(Employee $id){
         $employees = Employee::find($id);
        return view('edit',['employees'=>$id]);
    }

    public function Update(Request $request ,$id){
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->designation = $request->designation;
        $employee->save();


        // $data = array();
        // $data['name'] = $request->name;
        // $data['designation'] = $request->designation;
        // DB::table('categories')->where('id',$id)->update($data);

        
        // redirect to employees naming route system
        return redirect()->route('employees')->with('success','Employee Updated Successfully');

    }

    
    public function deleteEmployee($id)
    {
        Employee::where('id',$id)->delete();
        return back()->with('success', 'Employee Deleted Successfully');
    }
}
