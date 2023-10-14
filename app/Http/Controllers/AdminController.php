<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Product;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Auth\Authenticatable;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homePage()
    {
$users = User::all()->count();
$products = Product::all()->count();
$orders = Orderdetail::all();
       return(view("Admin_Dashboard.index",compact("users","products","orders")));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $admin = Admin::all();

        return view('Admin_Dashboard.Admins_Create', ['admin' => $admin]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[A-Za-z\s]+$|^[\p{Arabic}\s]+$|^[\p{Hebrew}\s]+$/u', 'max:20'],
            // 'last_name' => ['required', 'regex:/^[A-Za-z\s]+$|^[\p{Arabic}\s]+$|^[\p{Hebrew}\s]+$/u', 'max:20'],
            'email' => ['required', 'unique:admins'],
            'password' => ['required','regex:/^(?=.[a-z])(?=.[A-Z])(?=.*\d).{8,}$/i' ],
        ], [
            'name.required' => 'The name field is required.',
            'name.regex' => 'The name field must contain valid characters. Only letters and spaces are allowed.',
            'name.max' => 'The name field may not be greater than 255 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'The password field is required.',
            'password.regex' => ' At least 8 characters, one lowercase letter, one uppercase letter, and one digit.',

        ]);

        $admin = new Admin;
        $admin->name = $request->name;

        $admin->email = $request->email;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/users'), $imageName);
            $admin->image = $imageName;
        }

        $admin->password = bcrypt($request->password);
        $admin->save();

         Alert::success('Added Successfuly', ' ');

        return redirect()->route('Admin_Dashboard.Admins_Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {

        $AdminList = Admin::all();

        return view('Admin_Dashboard.Admins_Data', ['admins' => $AdminList]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('Admin_Dashboard.Admins_Update')->with('admins', $admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[A-Za-z\s]+$|^[\p{Arabic}\s]+$|^[\p{Hebrew}\s]+$/u', 'max:20'],
            'email' => ['required', 'email'], // Corrected the syntax
            // 'password' => ['required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/'], // Improved the regex
        ], [
            'name.required' => 'The name field is required.',
            'name.regex' => 'The name field must contain valid characters. Only letters and spaces are allowed.',
            'name.max' => 'The name field may not be greater than 20 characters.', // Corrected the message length

            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.', // Corrected the email message

        ]);

        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/users'), $imageName);
            $admin->image = $imageName;
        }
        // $admin->password = $request->password;
        // $admin->save();

        $admin->update();
        Alert::success('Edited Successfuly', ' ');
        return redirect()->route('Admin_Dashboard.Admins_Data')->with('success', 'student data dashboard successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('Admin_Dashboard.Admins_Data')->with('success', 'student data dashboard successfully ');
    }


    public function login()
    {
       return(view("Admin_Dashboard/login"));
    }

    public function checklogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('Admin_Dashboard.index');
        } else {
            return redirect()->back()->with('error', 'Invalid Email or Password');
        }
    }



    public function logout_admin()
    {  Auth::guard('admin')->logout();
        return redirect()->route('login_admin')->with('success', 'You Have Logout Success');

    }
}
