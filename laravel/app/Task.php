<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [     //campi che vado a chiedere nel form
    'title',
    'description',
    'priority'
  ];

  public function employee(){       //relazione many to one
    return $this->belongsTo(Employee::class);
  }

}
