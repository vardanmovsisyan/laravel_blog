<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $table='posts';

    public $primaryKey='id';

    public $timestamps=true;

    protected $dates=['deleted_at'];
    use SoftDeletes;
    protected $fillable=[
        'title','content','category_id','featured','slug'
    ];
    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
