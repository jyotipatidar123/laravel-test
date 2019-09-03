<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Product extends Model
{
    protected $fillable = [
        'name', 'detail','image'
    ];

    
    public function handleUploadedImage($image)
    {
        if (!is_null($image)) {
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
        }

        return  $name;
    }
}