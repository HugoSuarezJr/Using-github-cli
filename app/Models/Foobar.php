<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foobar extends Model
{
    use HasFactory;

    public function name()
    {
        $names = ['one', 'two'];
        return 'Laracasts';
    }
}
