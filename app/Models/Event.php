<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Event extends Model
{
     protected $fillable = [
        'title', 'description', 'category_id', 'host_id', 
        'location', 'city', 'latitude', 'longitude',
        'start_date', 'end_date', 'fee', 'capacity', 'is_featured'
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'is_featured' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function host(): BelongsTo
    {
        return $this->belongsTo(User::class, 'host_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(EventImage::class);
    }

    public function primaryImage(): HasOne
    {
        return $this->hasOne(EventImage::class)->where('is_primary', true);
    }

    public function rsvps(): HasMany
    {
        return $this->hasMany(Rsvp::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function getRsvpCountAttribute(): int
    {
        return $this->rsvps()->sum('guests');
    }


      public function scopeUpcoming(Builder $query): Builder
    {
        return $query->where('start_date', '>=', now());
    }
}
