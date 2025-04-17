<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumDiskusi extends Model
{
    use HasFactory;
    protected $table = 'forum_diskusi';
    protected $fillable = ['jasa_id', 'user_id', 'parent_id', 'isi'];

    public function jasa()
    {
        return $this->belongsTo(Jasa::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(ForumDiskusi::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(ForumDiskusi::class, 'parent_id');
    }
}
