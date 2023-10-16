<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */

    public function view($id)
    {
        $user = User::find($id);

        return redirect('Admin_Dashboard.user_View', ['user' => $user]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();

        return view('Admin_Dashboard.user_Create', ['user' => $user]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'regex:/^[A-Za-z\s]+$|^[\p{Arabic}\s]+$|^[\p{Hebrew}\s]+$/u', 'max:20'],
            'email' => ['required', 'unique:users'],
            'password' => ['required','regex:/^(?=.[a-z])(?=.[A-Z])(?=.*\d).{8,}$/i',"confirmed" ],
            'number' => [
                'required',
                'min:8',
                'regex:/^9627\d{8}$/'
            ], 'image' => 'required|image|mimes:jpeg,png|max:2048',
        ], [
            'name.required' => 'The name field is required.',
            'name.regex' => 'The name field must contain valid characters. Only letters and spaces are allowed.',
            'name.max' => 'The name field may not be greater than 255 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'The password field is required.',
            'password.regex' => ' At least 8 characters, one lowercase letter, one uppercase letter, and one digit.',

        ]);
        $user =  new User;
        $user->name = $request->name;
        // $user->LastName = $request->LastName;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->number = $request->phone;
        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/users'), $imageName);


            // $imagePath = $request->file('image')->store('images/users');
            $user->image =  $imageName;
        }
        $user->save();

        Alert::success('Added Successfuly', ' ');

        return redirect()->route('Admin_Dashboard.User')->with('success', 'student data dashboard successfully ');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

        $UserList = User::all();

        $title = 'Delete User!';
        return view('Admin_Dashboard.User', ['users' => $UserList]);



    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin_Dashboard.User_Update')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[A-Za-z\s]+$|^[\p{Arabic}\s]+$|^[\p{Hebrew}\s]+$/u', 'max:20'],
            'email' => ['required'],

            'number' => [
                'required',
                'min:8',
                'regex:/^9627\d{8}$/'
            ]

        ]);

        $user = User::find($id);
        $user->name = $request->name;
         $user->email= $request->email;
        // $user->password= $request->password;
        $user->number = $request->number;
        if ($request->hasFile('image')) {
            //  Validate and store the uploaded image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/users'), $imageName);


            // $imagePath = $request->file('image')->store('images/users');
            $user->image =  $imageName;
        }

        $user->update();
        Alert::success('Updated Successfuly', ' ');

        // $admin->update();
        return redirect()->route('Admin_Dashboard.User')->with('success', 'student data dashboard successfully ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('Admin_Dashboard.User')->with('success', 'student data dashboard successfully ');
    }
}
