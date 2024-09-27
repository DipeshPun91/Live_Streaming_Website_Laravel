<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * Get the team associated with the result.
     */
    public function team()
    {
        return $this->belongsTo(Country::class, 'team_id');
    }

    /**
     * Get the player associated with the result.
     */
    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }

    /**
     * Get the game associated with the result.
     */
    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }
}
