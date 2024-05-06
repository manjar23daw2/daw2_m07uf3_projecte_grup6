<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\TelegramService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Telegram\Bot\Api;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        try {
            $request->authenticate();

            $request->session()->regenerate();
        } catch (\Illuminate\Database\QueryException $qe) {
            view("dbconnectionerror");
        }

        $userType = $request->user()->type;

        if($userType === 'treballador'){
            $messageBot = new TelegramService(new Api("7154088022:AAGK3714vprTK0QzgBEq2eZVPJrMfPXIKZQ"));
            $messageBot->MessageConfirmation($request->user()->name, date("H:i:s:a"), true);
            Mail::to('phpappad@gmail.com')->send(new Email($request->user()->name, true, date("H:i:s:a")));
            return redirect()->intended(route('gestioProducte', absolute: false)); 
        }else if($userType === 'cap de departament'){
            return redirect()->intended(route('gestioEmpresa', absolute: false));
        }else{
            return redirect()->intended(route('dashboard', absolute: false));
        }  
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $userType = $request->user()->type;
        
        if($userType === 'treballador'){
            $messageBot = new TelegramService(new Api("7154088022:AAGK3714vprTK0QzgBEq2eZVPJrMfPXIKZQ"));
            $messageBot->MessageConfirmation($request->user()->name, date("H:i:s:a"), false);
            Mail::to('phpappad@gmail.com')->send(new Email($request->user()->name, false, date("H:i:s:a")));
        }
        
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        
        return redirect('/');
    }
}
