<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;


// use Illuminate\Database\Eloquent\Model\Crud;

class StudentController extends Controller
{
    use HasFactory;
    // public function index()  
    // {  
    //     $cruds = Crud::all();  

    //     return view('index', compact('cruds'));  
    // }  

    public function index()
    {
        $users = DB::select('select * from user');
        return view('/index', ['users' => $users]);
    }
    public $leave_applicable_genders = [
        "Gender" => "Gender",
        "Male" => "Male",
        "Female" => "Female",
        "other" => "other",
    ];

    public function store(Request $request)

    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'qualifications' => 'required'
        ]);


        $name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $gender = $request->input('gender');
        $qualifications = $request->input('qualifications');
        $data = array('first_name' => $name, "last_name" => $last_name, "gender" => $gender, "qualifications" => $qualifications);
        DB::table('user')->insert($data);
        return view('/success', ['name' => $name]);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM user WHERE id = ?', [$id]);
        echo ("User Record deleted successfully.");
        return redirect('/index');
    }



    public function edit($id)
    {
        $users = DB::select('select * from user where id = ?', [$id]);
        // dd($users[0]->gender);
        // dd($this->leave_applicable_genders); 
        return view('update', ['users' => $users, 'leave_applicable_genders' => $this->leave_applicable_genders]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'qualifications' => 'required'
        ]);
        $user = DB::table('user')->find($request->id);
        $fName = $request->first_name;
        $lName = $request->last_name;
        $gender = $request->gender;
        $qualifications = $request->qualifications;
        $user = DB::update('update user set first_name=?,last_name=?,gender=?,qualifications=? where id=?', [$fName,$lName,$gender,$qualifications, $user->id]);
      
        return redirect('/index');
    }
}
