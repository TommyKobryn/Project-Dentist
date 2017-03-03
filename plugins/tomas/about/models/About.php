<?php namespace Tomas\About\Models;

use Model;

/**
 * about Model
 */
class About extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'tomas_about_abouts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = ['avatar' => ['System\Models\File']];
    public $attachMany = [];
}
