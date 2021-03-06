<?php namespace Tomas\Reference\Models;

use Model;

/**
 * reference Model
 */
class Reference extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'tomas_reference_references';

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
