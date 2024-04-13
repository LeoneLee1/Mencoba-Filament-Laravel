<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'thumbnail',
        'content',
        'post_as',
    ];



    // FUNGSI INI MENGEDIT ISI DATA , MENGUBAH THUMBNAIL (GAMBAR) , 
    // AGAR GAMBAR LAMA YG ADA DI FOLDER STORAGE AKAN TERGANTIKAN , JADI GAK KETAMBAH

    protected static function boot(){
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('thumbnail') && ($model->getOriginal('thumbnail') !== null)){
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
    }

}
