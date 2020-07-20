<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->paginate(50),
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('edit', $user);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', Rule::unique('users')->ignore($user), 'alpha_dash'], 
            'name' => ['string', 'required', 'max:255'], 
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)], 
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed'], 
            'avatar' => ['file'],
        ]);
        
        // Saves the image and returns a path to where the image was stored. 
        // We store the path to where the image is stored in the database table. 
        // Not the actual image itself. 

        if(request('avatar')){
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes);
        return redirect($user->path());

    }


}
