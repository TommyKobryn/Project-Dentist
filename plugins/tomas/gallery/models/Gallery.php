<?php namespace Tomas\Gallery\Models;

use Model;

/**
 * gallery Model
 */
class Gallery extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'tomas_gallery_galleries';

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
    public $attachOne = [];
    public $attachMany = ['photos' => ['System\Models\File']];
}
