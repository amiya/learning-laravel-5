<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

     protected $fillable = [
       'title', 'body', 'published_at', 'user_id'
     ];
     
     protected $dates = ['published_at'];


     public function setPublishedAtAttribute($date)
     {
         //$this->attributes['published_at'] = \Carbon\Carbon::createFromFormat('Y-m-d', $date);
         $this->attributes['published_at'] = \Carbon\Carbon::parse($date);
     }
     
     public function scopePublished($query)
     {
         $query->where('published_at', '<=', \Carbon\Carbon::now());
     }

     public function scopeUnpublished($query)
     {
         $query->where('published_at', '>=', \Carbon\Carbon::now());
     }
     
     /**
      * An article is owned by a user
      */
     
     public function user()
     {
         return $this->belongsTo('App\User');
     }
}
