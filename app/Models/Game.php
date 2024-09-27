<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * Get the videos associated with the game.
     */
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    /**
     * Get the player associated with the game.
     */
    public function players()
    {
        return $this->hasMany(Player::class);
    }

    /**
     * Get the schedule associated with the game.
     */
    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }

    /**
     * Get the result associated with the game.
     */
    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
