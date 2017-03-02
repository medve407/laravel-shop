<?php

namespace App\Http\Controllers;

use App\User;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Return the products layout.
     */
    public function getLogin(){
        return view('user.login',[
            'route' => 'login'
        ]);
    }
    /*
     * It handle the post from /login.
     */
    public function postLogin(Request $request){
        $this->validate($request,[
            'username'  => 'required',
            'password'  => 'required'
        ]);
        // If the user can log in
        if ( Auth::attempt([ 'username' => $request->input('username'), 'password' => $request->input('password')] )) {
            session('kosar.items');
            // Redirect to the index page if the user is logged in .
            return redirect('/')->with(['message' => 'Welcome back!']);
        } else {
            // If it is not successful, then redirect back with a message to the login site.
            return redirect()->back()->withErrors(['The username or password is wrong.']);
        }
    }
    /**
     * Logout the user if logged in.
     */
    public function getLogout()
    {
        // If the user is logged in, log out.
        if (Auth::check()) Auth::logout();
        // Redirect to the index page.
        return redirect('/');
    }
    /**
     * Return the signup layout.
     */
    public function getSignup(){
        return view('user.signup',[
            'route' => 'signup'
        ]);
    }
    /*
     * It handle the post from /signup.
     */
    public function postSignup(Request $request){
        $this->validate($request,[
            'username'  => 'required',
            'password'  => 'required',
            'email'     => 'required',
        ]);
        // Create new User object.
        $user = new User([
            'username'  => $request->input('username'),
            'password'  => bcrypt($request->input('password')),
            'email'     => $request->input('email'),
        ]);
        // Save the new User
        $user->save();
        // Redirect the user to the cart page.
        $request->back();
    }
    /**
     * It return for the user what does he/she has in his/her cart.
     */
    public function getCart(){
        // If the user is logged in!
        if(Auth::check())
            return view('cart.index');
        else
            // If the user is not logged in, then redirect him/her to the login page.
            return redirect('/login');
    }
    /**
     * Add a product to the cart
     * @param
     */
    public function addToCart(Request $request){
        // If the user is logged in.
        if (Auth::check()) {
            // Put the item to the kosar session. You should use .items part to make it good.
            Session::push('kosar.items', $request->id);
            return response('You have successfully added a product to your cart!');
        } else { return response('You should log in :)'); }
    }
}
