<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use App\Models\News;
use App\Models\Game;
use App\Models\Video;
use App\Models\Image;
use App\Models\Player;
use App\Models\Schedule;
use App\Models\Result;

class ContentController extends Controller
{
    public function AllNews()
    {
        $news = News::latest()->get();
        return view('admin.news.all_news', compact('news'));
    }

    public function AddNews()
    {
        return view('admin.news.add_news');
    }

    public function CreateNews(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:news',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [];

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['image'] = $filename;
        }

        News::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $data['image'] ?? null,
        ]);

        $notification = array(
            'message' => 'News Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.news')->with($notification);
    }

    public function EditNews($id)
    {
        $news = News::findOrFail($id);

        return view('admin.news.edit_news', compact('news'));
    }

    public function UpdateNews(Request $request)
    {
        $pid = $request->id;

        $data = [];

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['image'] = $filename;
        }

        News::findOrFail($pid)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $data['image'] ?? null,
        ]);

        $notification = array(
            'message' => 'News Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.news')->with($notification);
    }

    public function DeleteNews($id)
    {
        News::findOrFail($id)->delete();

        $notification = array(
            'message' => 'News Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function AllVideo()
    {
        $videos = Video::latest()->get();
        return view('admin.highlight.all_video', compact('videos'));
    }

    public function AddVideo()
    {
        $games = Game::all();
        return view('admin.highlight.add_video', compact('games'));
    }

    public function CreateVideo(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video' => 'required|mimes:mp4,mov,avi',
            'game_id' => 'required|exists:games,id',
            'description' => 'nullable',
        ]);

        $data = [];

        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_videos'), $filename);
            $data['video'] = $filename;
        }

        Video::create([
            'title' => $request->title,
            'video' => $data['video'],
            'game_id' => $request->game_id,
            'description' => $request->description,
        ]);

        $notification = array(
            'message' => 'Video Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.video')->with($notification);
    }

    public function EditVideo($id)
    {
        $video = Video::findOrFail($id);
        return view('admin.highlight.edit_video', compact('video'));
    }

    public function UpdateVideo(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video' => 'nullable|mimes:mp4,mov,avi',
            'game_id' => 'required|exists:games,id',
            'description' => 'nullable',
        ]);

        $video = Video::findOrFail($request->id);

        $data = [];

        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_videos'), $filename);
            $data['video'] = $filename;
        }

        $video->update([
            'title' => $request->title,
            'video' => $data['video'] ?? $video->video,
            'game_id' => $request->game_id,
            'description' => $request->description,
        ]);

        $notification = array(
            'message' => 'Video Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.video')->with($notification);
    }

    public function DeleteVideo($id)
    {
        $video = Video::findOrFail($id);
        if ($video->delete()) {
            $notification = array(
                'message' => 'Video Deleted Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Failed to delete video',
                'alert-type' => 'error'
            );
        }

        return redirect()->back()->with($notification);
    }

    public function AllImage()
    {
        $images = Image::latest()->get();
        return view('admin.photo.all_image', compact('images'));
    }

    public function AddImage()
    {
        return view('admin.photo.add_image');
    }

    public function CreateImage(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:images',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [];

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['image'] = $filename;
        }

        Image::insert([
            'title' => $request->title,
            'image' => $data['image'] ?? null,
        ]);

        $notification = array(
            'message' => 'Image Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.image')->with($notification);
    }

    public function EditImage($id)
    {
        $images = Image::findOrFail($id);

        return view('admin.photo.edit_image', compact('images'));
    }

    public function UpdateImage(Request $request)
    {
        $pid = $request->id;

        $data = [];

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['image'] = $filename;
        }

        Image::findOrFail($pid)->update([
            'title' => $request->title,
            'image' => $data['image'] ?? null,
        ]);

        $notification = array(
            'message' => 'Image Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.image')->with($notification);
    }

    public function DeleteImage($id)
    {
        Image::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function AllPlayer()
    {
        $players = Player::latest()->get();
        return view('admin.player.all_player', compact('players'));
    }

    public function AddPlayer()
    {
        $games = Game::all();
        $teams = Country::all();
        return view('admin.player.add_player', compact('games', 'teams'));
    }

    public function CreatePlayer(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:players',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required|date',
            'age' => 'required|integer|min:1',
            'weight' => 'required|integer|min:1',
            'height' => 'required|integer|min:1',
            'game_id' => 'required|exists:games,id',
            'team_id' => 'required|exists:countries,id',
        ]);

        $data = [];

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['image'] = $filename;
        }

        Player::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'image' => $data['image'] ?? null,
            'date_of_birth' => $request->date_of_birth,
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'game_id' => $request->game_id,
            'team_id' => $request->team_id,
        ]);

        $notification = array(
            'message' => 'Player Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.player')->with($notification);
    }

    public function EditPlayer($id)
    {
        $player = Player::findOrFail($id);
        $games = Game::all();
        $teams = Country::all();
        return view('admin.player.edit_player', compact('player', 'games', 'teams'));
    }

    public function UpdatePlayer(Request $request)
    {
        $pid = $request->id;

        $data = [];

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/admin_images/'.$data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['image'] = $filename;
        }

        Player::findOrFail($pid)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'image' => $data['image'] ?? null,
            'date_of_birth' => $request->date_of_birth,
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'game_id' => $request->game_id,
            'team_id' => $request->team_id,
        ]);

        $notification = array(
            'message' => 'Player Information Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.player')->with($notification);
    }

    public function DeletePlayer($id)
    {
        Player::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Player Information Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function AllSchedule()
    {
        $schedules = Schedule::latest()->get();
        return view('admin.schedule.all_schedule', compact('schedules'));
    }

    public function AddSchedule()
    {
        $games = Game::all();
        $teams = Country::all();
        return view('admin.schedule.add_schedule', compact('games', 'teams'));
    }

    public function CreateSchedule(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'game_id' => 'required|exists:games,id',
            'team_a' => 'required|exists:countries,id',
            'team_b' => 'required|exists:countries,id',
        ]);

        Schedule::create([
            'date' => $request->date,
            'time' => $request->time,
            'game_id' => $request->game_id,
            'team_a' => $request->team_a,
            'team_b' => $request->team_b,
        ]);

        $notification = array(
            'message' => 'Schedule Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.schedule')->with($notification);
    }

    public function EditSchedule($id)
    {
        $schedule = Schedule::findOrFail($id);
        $games = Game::all();
        $teams = Country::all();
        return view('admin.schedule.edit_schedule', compact('schedule', 'games', 'teams'));
    }

    public function UpdateSchedule(Request $request)
    {
        $pid = $request->id;

        Schedule::findOrFail($pid)->update([
            'date' => $request->date,
            'time' => $request->time,
            'game_id' => $request->game_id,
            'team_a' => $request->team_a,
            'team_b' => $request->team_b,
        ]);

        $notification = array(
            'message' => 'Schedule Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.schedule')->with($notification);
    }

    public function DeleteSchedule($id)
    {
        Schedule::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Schedule Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function AllResult()
    {
        $results = Result::latest()->get();
        return view('admin.result.all_result', compact('results'));
    }

    public function AddResult()
    {
        $games = Game::all();
        $teams = Country::all();
        $players = Player::all();
        return view('admin.result.add_result', compact('games', 'teams', 'players'));
    }

    public function CreateResult(Request $request)
    {
        $request->validate([
            'result' => 'required|string',
            'game_id' => 'required|exists:games,id',
            'team_id' => 'required|exists:countries,id',
            'player_id' => 'required|exists:players,id',
        ]);
    
        Result::create([
            'result' => $request->result,
            'game_id' => $request->game_id,
            'team_id' => $request->team_id,
            'player_id' => $request->player_id,
        ]);
    
        $notification = [
            'message' => 'Achievement Added Successfully',
            'alert-type' => 'success'
        ];
    
        return redirect()->route('all.result')->with($notification);
    }

    public function EditResult($id)
    {
        $result = Result::findOrFail($id);
        $games = Game::all();
        $teams = Country::all();
        $players = Player::all();
        return view('admin.result.edit_result', compact('result', 'games', 'teams', 'players'));
    }

    public function UpdateResult(Request $request)
    {
        $pid = $request->id;

        Result::findOrFail($pid)->update([
            'result' => $request->result,
            'game_id' => $request->game_id,
            'team_id' => $request->team_id,
            'player_id' => $request->player_id,
        ]);

        $notification = array(
            'message' => 'Result Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.result')->with($notification);
    }

    public function DeleteResult($id)
    {
        Result::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Result Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
