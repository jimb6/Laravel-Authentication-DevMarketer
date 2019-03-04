<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Section extends Model
{
    //

    protected $fillable = ['name', 'grade', 'adivse'];

    public function store(Request $request)
    {
        // Validate the request...
        $flight = new Section;
        $flight->name = $request->name;
        $flight->save();
    }

    public function update(Request $request){
        $flight = Section::find(1);
        $flight->name = 'New Flight Name';
        $flight->save();


        //Mass Update
        Section::where('active', 1)
            ->where('destination', 'San Diego')
            ->update(['delayed' => 1]);
    }


    //Relationship
    public function teachers()
    {
        return $this->hasOne('App\Teacher');
    }
}
