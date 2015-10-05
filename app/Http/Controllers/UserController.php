<?php

namespace App\Http\Controllers;

use Log;
use App\User;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Return a listing of all users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = User::orderBy('last_name', 'asc')->get();
        //$returnData = array( "users" => $users ); 
        
        return response()->json( ['users' => $users->toArray()] );
    }

    /**
     * Return the specified user.
     *
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        $user = User::find($id); 

        if ( $user ) {
            $returnData = array( "user" => $user );

            return $returnData;    
        } else {
            $returnData = array(
                'user' => $user,
                'status' => 'error',
                'message' => 'User not found with an id of ' . $id . '.'
            );

            return response()->json($returnData, 404);
        }
        
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'user.first_name' => 'required|max:255',
            'user.last_name' => 'max:255',
            'user.email' => 'required|email|max:255|unique:users,email',
            'user.company' => 'required|max:255'
        ]);

        $user = $request->user;

        if ( isset($user['password']) ) {
            $this->validate($user, [
                'user.password' => 'required|confirmed|min:8'
            ]);

            $user['password'] = bcrypt($user['password']);
        }

        $newUser = User::create( $user );

        return response()->json(['user' => $newUser]);
    }

    /**
     * Edit the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
