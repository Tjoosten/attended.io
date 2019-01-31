<?php

namespace App\Models;

use App\Models\Concerns\Reviewable;
use App\Models\Concerns\Sluggable;
use App\Models\Presenters\PresentsSlot;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Slot extends BaseModel
{
    use Reviewable,
        Sluggable,
        PresentsSlot;

    public $dates = [
        'starts_at',
        'ends_at',
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
