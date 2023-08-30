<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    
    public function category(): BelongsTo
    {
      return $this->belongsTo(Category::class);
    }
    
    public function excerpt($length = 100, $ending = ' ...')
    {
        return Str::limit($this->content, $length, $ending);
    }
}
