<?php

namespace App\Models;

use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function tags(){
        return $this->belongsToMany(Tag::class); //Plusieur tag pour plusieur posts
    }
    public function comments(){
        return $this->hasMany(Comment::class); //Un post avec plusieur commentaire
    }
    public function categories(){
        return $this->belongsTo(Category::class, "category_id"); //Un post avec une categorie
    }
    public function users(){
        return $this->belongsTo(User::class, "user_id");//Un post appartien a un utiisateur
    }

}
