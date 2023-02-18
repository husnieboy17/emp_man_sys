<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

     public function department()
    {
        return $this->hasOne(department::class);
    } 
    public function division()
    {
        return $this->hasOne(division::class);
    } 
    public function address()
    {
        return $this->hasOne(address::class);
    } 
    public function JobTitles()
    {
        return $this->hasOne(JobTitles::class);
    }
}
