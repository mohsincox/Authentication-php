<?php namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Redirect;
use Session;
use Hash;
use Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
// use Illuminate\Contracts\Pagination\Presenter;

class UserController extends Controller {

	

	public function abc()
	{
		return view('regi');
	}


	public function regist(Request $request)
	{
		$user = new User();
		$user->name = $request->input('name');
		$user->password = Hash::make($request->input('password'));
		$user->user_type = $request->input('user_type');
		$user->user_id = $request->input('user_id');
		$user->save();
		Session::flash('success', 'Successfully Registration completed.'); 
		return Redirect('login');
	}

	public function login(Request $request)
	{
		if($request->method() == 'POST'){
			$user_id = $request->input('user_id');
			$password = $request->input('password');
			if (Auth::attempt(array('user_id' => $user_id, 'password' => $password), true))
			{
    			Session::flash('success', 'Successfully log in.'); 
				return Redirect('show');
			}
			else {
				Session::flash('success', 'Incorrect input. Try again.'); 
				return Redirect('login');
			}
		}
		return view('log');
	}

	public function logout(){
		Auth::logout();
		Session::flash('success', 'Successfully Logout.'); 
		return Redirect('login');
	}
	
	public function show()
	{
		if(Auth::check()){
			//$users = User::paginate(1);
			$users = User::get();
			return view('show')->with('use', $users);
		}
		else {
			Session::flash('success', 'You should log in first.'); 
			return Redirect('login');
		}
	}
	public function edit(Request $request, $id)
	{
		if($request->method() == 'POST'){
			$user_id = $request->input('id');
			$user = User::find($user_id);

			$user->name = $request->input('name');
			$user->user_type = $request->input('user_type');
			$user->save();
			Session::flash('success', 'Successfully Edited.'); 
			return Redirect('show');
		}
		$data['user'] = User::find($id);
		return view('edit',$data);
	}

	public function delete(Request $request, $id)
	{
		User::destroy($id);
		Session::flash('success', 'Successfully Deleted.'); 
		return Redirect('show');
	}
	/*
	public function regist(Request $request)
	{
		//////////////////////////////// Additional code for unique user name and user id //////////////
		$rules = array(
                'name' => 'required|unique:users',
				'password' => 'required|min:3',
				'user_type' => 'required',
				'user_id' => 'required|unique:users',
            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return Redirect('abc')
                                ->withErrors($validator);
            } else {    ////////////////////////////////////////// end /////////////////////
				$user = new User();
				$user->name = $request->input('name');
				$user->password = Hash::make($request->input('password'));
				$user->user_type = $request->input('user_type');
				$user->user_id = $request->input('user_id');
				$user->save();
				echo 'successfully Inserted.';
				return redirect('show');
			}
	}
	*/ 
	
