<?php namespace Leelam\Boilerplate\Models;


use Illuminate\Database\Eloquent\Model;

class Boilerplate extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'boilerplates';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}