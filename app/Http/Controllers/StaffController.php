<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();
        return view("backend.staff.list",compact("staffs"));
    }

    public function create()
    {
        return view("backend.staff.create");
    }

    public function store(CreateStaffRequest $request)
    {

        $staff = new Staff();
        $staff->group = $request->group;
        $staff->name = $request->name;
        $staff->birthday = $request->birthday;
        $staff->gender = $request->gender;
        $staff->phone = $request->phone;
        $staff->CMND = $request->CMND;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->save();
        return redirect()->route("staffs.list");
    }

    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        return view("backend.staff.update",compact("staff"));
    }

    public function update(Request $request)
    {



        $staff = Staff::findOrFail($request->id);

        $staff->group = $request->group;
        $staff->name = $request->name;
        $staff->birthday = $request->birthday;
        $staff->gender = $request->gender;
        $staff->phone = $request->phone;
        $staff->CMND = $request->CMND;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->save();
        return redirect()->route("staffs.list");
    }

    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();
        return redirect()->route("staffs.list");
    }

    public function searchStaff(Request $request)
    {
        $keystaff = $request->keystaff;
//        dd($keystaff);
        $staffs = Staff::where('name','LIKE','%'.$keystaff.'%')->get();
//        $data = [
//            'status' => 'success',
//            'data' => $staffs
//        ];
//        return response()->json($data);
        return view("backend.staff.list",compact("staffs"));
    }
}
