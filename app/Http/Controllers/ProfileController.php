<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\News;
use App\Models\Game;
use App\Models\Country;
use App\Models\Schedule;
use App\Models\Player;
use App\Models\Result;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
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

    public function SportCategory(){
        $games = Game::all();
        return view('guest.sports_category', compact('games'));
    }

    public function SportSchedule($id){
        $schedules = Schedule::where('game_id', $id)->get();
        return view('guest.sports_schedule', compact('schedules'));
    }    

    public function Team(){
        $teams = Country::all();
        return view('guest.teams', compact('teams'));
    }

    public function TeamPlayer($id){
        $players = Player::all();
        $teams = Country::where('id', $id)->get();
        return view('guest.teams_players', compact('players', 'teams'));
    }

    public function TeamPlayerInfo($id){
        $players = Player::where('id', $id)->get();
        return view('guest.teams_players_info', compact('players'));
    }

    public function Result(){
        $games = Game::all();
        return view('guest.results_category', compact('games'));
    }

    public function ResultInfo($id){
        $results = Result::where('game_id', $id)->get();
        return view('guest.results_info', compact('results'));
    }

    public function NewsDetail($id){
        $news = News::findOrFail($id);
        return view('guest.news_detail', compact('news'));
    }
}
