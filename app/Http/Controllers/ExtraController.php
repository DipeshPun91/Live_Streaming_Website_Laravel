<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Game;

class ExtraController extends Controller
{
    //All Team

    public function AllCountry()
    {
        $countries = Country::latest()->get();
        return view('admin.country.all_country', compact('countries'));
    }

    public function AddCountry()
    {
        return view('admin.country.add_country');
    }

    public function CreateCountry(Request $request)
    {
        $request->validate([
            'country_name' => 'required|unique:countries',
            'country_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [];

        if ($request->file('country_icon')) {
            $file = $request->file('country_icon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['country_icon'] = $filename;
        }

        Country::insert([
            'country_name' => $request->country_name,
            'country_icon' => $data['country_icon'] ?? null,
        ]);

        $notification = array(
            'message' => 'Country Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.country')->with($notification);
    }

    public function EditCountry($id)
    {
        $countries = Country::findOrFail($id);

        return view('admin.country.edit_country', compact('countries'));
    }

    public function UpdateCountry(Request $request)
    {
        $pid = $request->id;

        $data = [];

        if ($request->file('country_icon')) {
            $file = $request->file('country_icon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['country_icon'] = $filename;
        }

        Country::findOrFail($pid)->update([
            'country_name' => $request->country_name,
            'country_icon' => $data['country_icon'] ?? null,
        ]);

        $notification = array(
            'message' => 'Country Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.country')->with($notification);
    }

    public function DeleteCountry($id)
    {
        Country::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Country Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    //Game Category

    public function AllGame()
    {
        $games = Game::latest()->get();
        return view('admin.game.all_game', compact('games'));
    }

    public function AddGame()
    {
        return view('admin.game.add_game');
    }

    public function CreateGame(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:games',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [];

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['image'] = $filename;
        }

        Game::insert([
            'name' => $request->name,
            'image' => $data['image'] ?? null,
        ]);

        $notification = array(
            'message' => 'Game Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.game')->with($notification);
    }

    public function EditGame($id)
    {
        $game = Game::findOrFail($id);

        return view('admin.game.edit_game', compact('game'));
    }

    public function UpdateGame(Request $request)
    {
        $pid = $request->id;

        $data = [];

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['image'] = $filename;
        }

        Game::findOrFail($pid)->update([
            'name' => $request->name,
            'image' => $data['image'] ?? null,
        ]);

        $notification = array(
            'message' => 'Game Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.game')->with($notification);
    }

    public function DeleteGame($id)
    {
        Game::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Game Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
