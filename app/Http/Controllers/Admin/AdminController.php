<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admins;
use App\Mail\AdminResetPassword;
use validator;
use Auth;
use Hash;
use Mail;
use DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function login(){ ////// Start Login Get /////////
        $title = trans('admin.loginPage');
        if(auth()->guard('admin')->user()){
            return redirect(AdminUrl('dashboard'));
        }else{
            return view('Admin.login' ,['title' => $title]);
        }
    }/////////////// End Login Get ////////////////////

    public function checkLogin(Request $request){/////////////// Start Login Post ////////////////////
        $remember = $request->rememberMe == 1? true :false;
        if(auth()->guard('admin')->attempt(['email'=> $request->email, 'password'=>$request->password],$remember)){
            return redirect(AdminUrl("dashboard"));
        }else{
            session('error',trans('admin.wrong_name_password'));
            return redirect(AdminUrl('/'));
        }

    }/////////////// End Login Post ////////////////////

    public function logout(){/////////////// Start Logout Function ////////////////////
        Auth::guard('admin')->logout();
        return redirect(AdminUrl('/'));
    }/////////////// End Logout Function ////////////////////

    public function editAdmin(){
        $title = trans('admin.editAdmin');
        $admin = Auth::guard('admin')->user();
        $adminEmail = Auth::guard('admin')->user()->email;
        $adminid = Admins::where('email',$adminEmail)->first()->id;
        $titleSummary = trans('admin.editAdminSummary');
        return view('admin.editAdmin',['title' => $title, 'titleSummary' => $titleSummary, 'admin'=>$admin, 'adminId' => $adminid]);
    }

    public function updateAdmin(Request $request){
        $id = $request->id;
        $rules =[
          'name'=>'required|min:6',
          'email'=>'required|email',
          'password'=>'required|confirmed|min:6',
        ];
        $niceNames =[
          'name'=>trans('admin.name'),
          'email'=>trans('admin.email'),
          'password'=>trans('admin.password'),
        ];
        $data = $this->validate(request(),$rules,[],$niceNames);
        $data['password'] = Hash::make($request->password);
        Admins::where('id',$id)->update($data);
        $message = trans('admin.editAdminSuccess');
        return redirect()->back()->with('success',$message);

    }

    public function forgot_password(){
        $title = trans('admin.resetPassword');
        return view('Admin.resetPassword',['title'=>$title]);
    }

    public function reset_password(){
        $admin = Admins::where('email', request('email'))->first();
        if(!empty($admin)){
            $token = app('auth.password.broker')->createToken($admin);
            \DB::table('password_resets')->insert([
                'email'=> $admin->email,
                'token'=> $token,
                'created_at' => Carbon::now(),
            ]);
            Mail::to($admin->email)->send(new AdminResetPassword(['admin'=>$admin, 'token'=>$token]));
            $message = trans('admin.Check_Your_Email_To_Reset_Your_Password');
            return back()->with('success',$message);
        }else{
            $message = trans('admin.check_email');
            return redirect()->back()->with('failed',$message);
        }
    }
    public function new_password($token){
        $remember_token = \DB::table('password_resets')->where('token', $token)->where('created_at','>',  Carbon::now()->subHours(2))->first();
        if(!empty($remember_token)){
            $title = trans('admin.PasswordReset');
            return view('Admin.newPassword', ['admin'=>$remember_token, 'title'=>$title]);
        }else{
            $message = trans('admin.Sorry_The_Email_You_Entered_Is_Not_In_Our_DataBase_Or_Reset_Time_is_over');
            return redirect(AdminUrl('forgot/password'))->with('failed',$message);
        }

    }
    public function change_password($token){
        $rules = [
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ];
        $niceNames = [
            'password' => trans('admin.password'),
            'password_confirmation' => trans('admin.passwordConfirmation'),
        ];
        $this->validate(request(),$rules,[],$niceNames);
        $remember_token = \DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();
        if(!empty($remember_token)){
            Admins::where('email',$remember_token->email)->update(['email'=>$remember_token->email, 'password'=>bcrypt(request('password'))]);
            \DB::table('password_resets')->where('email', $remember_token->email)->delete();
            auth()->guard('admin')->attempt(['email'=>$remember_token->email,'password' =>request('password') ], true);
            return  redirect(AdminUrl('/'));
        }else{
            $message = trans('admin.Please_Check_Your_Email_Address');
            return redirect(AdminUrl('forgot/password'))->with('failed',$message);
        }
    }
}
