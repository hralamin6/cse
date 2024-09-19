<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Message extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $guarded='';
    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('chatImages')->useDisk('media')->registerMediaConversions(function (Media $media = null) {
            $this->addMediaConversion('thumb')->quality('50')->nonQueued();

        });

    }

}
