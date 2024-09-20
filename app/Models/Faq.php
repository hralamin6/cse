<?php

namespace App\Models;

use App\NotifiesAdminsOnDelete;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Faq extends Model implements HasMedia
{
    use  InteractsWithMedia, NotifiesAdminsOnDelete;
    protected $guarded = ['id'];
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('profile')->singleFile()->registerMediaConversions(function (Media $media = null) {
            $this->addMediaConversion('thumb')->quality('50')->nonQueued();
        });
        $this->addMediaCollection('icon')->singleFile()->registerMediaConversions(function (Media $media = null) {
            $this->addMediaConversion('thumb')->quality('50')->nonQueued();
        });
    }
}
