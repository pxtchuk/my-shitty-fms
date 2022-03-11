<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RankModel extends Model
{
    use HasFactory;

    protected $table = 'ranks';
    protected $primaryKey = 'id';

    public function users()
    {
        return $this->hasMany(User::class);
    }

    protected $fillable = [
        'name',
        'abbreviation',
        'rank_level',
        'discord_id',
        'public_id',
        'teamspeak_id',
    ];

}
