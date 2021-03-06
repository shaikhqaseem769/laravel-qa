<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title','body'];
    
    public function user(){
        return $this->belongsTo(Question::class);
    }

    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function getUrlAttribute(){
        return route('questions.show', $this->id);
    }

    public function getCreatedDateAttribute(){
        return $this->created_at->diffForHumans();
    }
}
