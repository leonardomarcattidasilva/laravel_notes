<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class NotesModel extends Model
{
    use SoftDeletes;
    protected $table = 'notes';
    protected $fillable = ['user_id', 'title', 'text'];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
