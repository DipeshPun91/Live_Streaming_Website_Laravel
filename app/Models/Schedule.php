<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
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
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    /**
     * Get the team associated with the game.
     */
    public function teamA()
    {
        return $this->belongsTo(Country::class, 'team_a');
    }

    public function teamB()
    {
        return $this->belongsTo(Country::class, 'team_b');
    }
}
