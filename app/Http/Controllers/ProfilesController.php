<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.profile')->with('user', Auth::user());
    }

    public function update(Request $request)
    {
        $this->validate($request, [
           'name' => 'required',
           'email' => 'required|email',
            'facebook' => 'required|url',
            'youtube' => 'required|url',
            $user=Auth::user();

            if($request->hasFile('avatar'))
            {
                $avatar = $request->avatar;
                $avatar_new_name = time().$avatar->getClientOriginalName();
                $avatar->move('uploads/avatars', $avatar_new_name);
                $user->profile->avatar='uploads/avatars/'.$avatar_new_name;
                $user->profile->save();
            }

            $user->name=$request->name;
            $user->email=$request->email;
            $user->profile->facebook=$request->facebook;
            $user->profile->youtube=$request->youtube;

            $user->save();
            $user->profile->save();

            if($request->has('password'))
            {
                $user->password = bcrypt($request->password);
            }

            Session::flash('success', 'Account profile updated successfully.');
            return redirect()->back();
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
