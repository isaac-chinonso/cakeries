<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Category extends Model
{
=======
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202

    public function product()
    {
    	return $this->hasMany('App\Product', 'category_id');
    }
}
