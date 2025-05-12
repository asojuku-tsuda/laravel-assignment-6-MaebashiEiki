<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;
    protected $table = 'clothes';
    protected $fillable = [
        'name',
        'category',
        'color',
        'price',
        'size',
        'description',
    ];
}
use Illuminate\Support\Facades\Route;
use App\Models\Clothes;
Route::get('/', function () {
    $allclothes = Clothes::all();
    $firstClothes=[];
    $clothesById=null;
    $searchById=null;
    return view('clothes', compact('allClothes'));
});
