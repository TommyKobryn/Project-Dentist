<?php namespace Tomas\Price\Models;

use Model;

/**
 * prices Model
 */
class Prices extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'tomas_price_prices';

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
}
