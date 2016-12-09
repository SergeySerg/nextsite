<?php namespace App\Models;
use App;
use Illuminate\Database\Eloquent\Model;

class Translate extends Model {

    public function getTranslate($field, $lang = null){
        $pieces = explode("@|;", $this->$field);
        if(count($pieces)<3)
            return $this->$field;
        if(!$lang){
            $lang = App::getLocale();
        }
        if ($lang == 'ua')
            $field = $pieces[0];
        if ($lang == 'pl')
            $field = $pieces[1];
        if ($lang == 'en')
            $field = $pieces[2];
        return $field;
    }

}