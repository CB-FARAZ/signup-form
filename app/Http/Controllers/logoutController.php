<?php


use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class LogoutController


{


    /**
     * @param Request $request
     * @return Application|\Illuminate\Foundation\Application|RedirectResponse|Redirector
     */
    public function logout(Request $request)
    {

        $user = User::where('email' , $request->email)->first()->where('password' , $request->password);


        Auth::logout($user);


        return redirect('/login');
    }


}
