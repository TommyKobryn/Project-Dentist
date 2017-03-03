<?php namespace Atomiccode\Contact\Models;

use Model;

/**
 * openhours Model
 */
class Openhours extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'atomiccode_contact_openhours';

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
    public $attachMany = [];

    public $jsonable = ['hours'];
}