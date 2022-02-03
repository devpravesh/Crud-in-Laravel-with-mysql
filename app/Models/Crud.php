<?php  
namespace App;  
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
class Crud extends Model  
{  
    use HasFactory;
protected $table='user';  
protected $fillable=['first_name','last_name','gender','qualifications'];  
} 