<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * Get the player associated with the team.
     */
    public function players()
    {
        return $this->hasMany(Player::class, 'team_id');
    }

    /**
     * Get the schedule associated with the team.
     */
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    /**
     * Get the result associated with the team.
     */
    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
