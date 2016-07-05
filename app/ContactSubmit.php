<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSubmit extends Model
{
    public $table = "contact_submits";

    protected $fillable = ['firstName', 'lastName', 'city', 'state', 'email', 'number', 'aboutYourProject'];

    public function contactSubmit(){
        return $this->belongTo(ContactSubmit::Class);
    }
}
