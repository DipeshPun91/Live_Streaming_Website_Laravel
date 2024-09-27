<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * Get the game associated with the player.
     */
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    /**
     * Get the team associated with the player.
     */
    public function team()
    {
        return $this->belongsTo(Country::class, 'team_id');
    }

    /**
     * Get the result associated with the player.
     */
    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
