<?php namespace Al3xTig3r\BlogUtils\Models;

use Model;

/**
 * Proposal Model
 */
class Proposal extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'al3xtig3r_blogutils_proposals';

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
