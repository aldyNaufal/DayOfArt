<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

    public function index(){
        return view('profile');
    }
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function profileData(){
        $userId = Auth::user()->id;
        $query = User::query();
        $query->where('id',$userId);

        $user = $query->get();
        $user = $user[0];

        return view('profile',['user' => $user]);
    }

    public function profileEdit(){
        $user = Auth::user();
        return view('editProfile', ['user'=>$user]);
    }

    public function profileUpdate(User $user, Request $request){
        $data = [
            'fullname' => $request->fullname,
            'email' => $user->email,
            'password' => $user->password,
            'surname' => $request->surname,
            'birthdate' => $request->birthdate,
            'phoneNumber' => $request->phoneNumber
        ];      
        
        $user->update($data);
        return redirect('profile');
    }

    public function profilePersonalData(){
        $userId = Auth::user()->id;
        $query = User::query();
        $query->where('id',$userId);

        $user = $query->get();
        $user = $user[0];

        return view('profilePersonalData',['user' => $user]);
    }
}
