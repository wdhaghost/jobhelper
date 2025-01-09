<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::all();

        return view('profile.index',['profiles'=>$profiles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.create'); // Formulaire de création
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'skills' => 'required|string',
            'experiences' => 'required|string',
        ]);
        $profile = new Profile;
        $profile->lastname = $request->lastname;
        $profile->firstname = $request->firstname;
        $profile->job = $request->job;
        $profile->skills = $request->skills;
        $profile->experiences = $request->experiences;
        $profile->save();
        return redirect()->route('profiles.index')->with('success', 'Profil créé avec succès !');
    }

    public function show(Profile $profile)
    {
        return view('profile.show', compact('profile'));
    }

    public function edit(Profile $profile)
    {
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'skills' => 'required|string',
            'experiences' => 'required|string',
        ]);

        $profile->lastname = $request->lastname;
        $profile->firstname = $request->firstname;
        $profile->job = $request->job;
        $profile->skills = $request->skills;
        $profile->experiences = $request->experiences;
        $profile->save();
        return redirect()->route('profiles.index')->with('success', 'Profil mis à jour avec succès !');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index')->with('success', 'Profil supprimé avec succès !');
    }

}
