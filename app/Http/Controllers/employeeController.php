<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index()
    {
        $ds = employee::all();
        return view('employee.emp_index',['ds'=>$ds]);
    }
    public function create(){
        return view('employee.create');
    }

    public function store(Request  $request){
        employee::create($request->all());
        return redirect()->route('employee.index')->with('success', 'Employee created successfully');
    }

    public function edit($emp_id)
    {
        $ds = employee::find($emp_id);
    //dd($ds);
    return view('employee.edit', ['item' => $ds, 'id' => $emp_id]);

        // dd($pharma);
        // $query = pharma::where('id', $pharma->id);
        // dd($query->toSql());
        // return view('Employee.edit', compact('pharma'));
    }

    public function update(Request $request, $id)
{
    //dd("update");
    // $validatedData = $request->validate([
    //     'Employee_Id' => 'required',
    //     'Cate_Id' => 'required',
    //     'Employee_Name' => 'required',
    //     'Unit' => 'required',
    //     'Unit_Price' => 'required',
    //     'Quantity_In_Stock' => 'required',
    //     'Image' => 'required',
    //     'Status' => 'required',
    //     'Description' => 'required',
    // ]);
    //  $query = pharma::where('Employee_Id', $id);
    //     dd($query->toSql());
    $Employee = employee::find($id);
    //dd($Employee->Employee_Name);

    // Update the Employee
    $Employee->update($request->all());

    return redirect('/admin/employee')->with('success', 'Employee updated successfully');
}

    public function destroy(int $Employee_Id)
    {
        $Employee = employee::findOrFail($Employee_Id);

        $Employee->delete();
        return redirect('/admin/employee')->with('success', 'Employee deleted successfully');
    }
}
