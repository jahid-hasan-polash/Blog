<?php

namespace App\Http\Controllers\Auth;

use App\Model\User;
use Validator;
use Auth;
use Mail;
use View;
use Hash;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    // private $redirectTo = '/';
    // private $maxLoginAttempts = 5;
    // protected $loginPath = '/login';
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public $redirectTo = '/dashboard';
    public $maxLoginAttempts = 5;
    public $loginPath = '/login';

    // following construtor is commented as we have define guest middleware
    // public function __construct()
    // {
    //     $this->middleware('guest', ['except' => 'getLogout']);
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


    protected function postRegister(Request $request){
        
        $data = $request->all();
        $validation = AuthController::validator($data);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();

        } else if($data['password'] != $data['confirm_password']){
            return redirect()->back()->withErrors("password didn't match")->withInput();

        } else {
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->quotes = $data['about'];

            if($user->save()){
                return redirect()->route('dashboard')
                        ->withSuccess('successfully registered You can login now');

            } else {
                return redirect()->back()->withErrors('Something went wrong. Try again.')->withInput();

            }
            
        }
    }

    // if you want to override 
    // protected function getLogin()
    // {
    //     return view('auth.login');
    // }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')
                    ->with('success',"You are successfully logged out.");
        // return 'Logout Panel';
    }

    public function dashboard(){
      
        return view('dashboard')
                    ->with('title','Dashboard');
    }

    public function changePassword(){
        return view('auth.changePassword')
                    ->with('title',"Change Password")->with('user', Auth::user());
        // return 'Change Password';
    }

    public function doChangePassword(Request $request){
        $rules =[
            'password'              => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ];
        $data = $request->all();

        $validation = Validator::make($data,$rules);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }else{
            $user = Auth::user();
            $user->password = Hash::make($data['password']);

            if($user->save()){
                Auth::logout();
                return redirect()->route('login')
                            ->with('success','Your password changed successfully.');
            }else{
                return redirect()->route('dashboard')
                            ->with('error',"Something went wrong.Please Try again.");
            }
        }
         // return 'Do Change Password';

    }

    public function profile() {
        return view('profile')->with('title', "Profile")->with('user', Auth::user());
    }

    public function editProfile($id){
        return view('editProfile')->with('title', "Edit Profile")->with('user', Auth::user());
    }

    public function doEditProfile(Request $request){
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255'
            ];

        $data = $request->all();
        $validation = Validator::make($data,$rules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();

        } else {
            $user = Auth::user();

            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->quotes = $data['about'];

            if($user->save()){
                return redirect()->route('dashboard')->withSuccess('Profile Updated successfully');

            } else {
                return redirect()->back()->withErrors('Something went Wrong.')->withInput();

            }
        }
        


    }
}
