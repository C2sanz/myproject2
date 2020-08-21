<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
     //ชื่อตารางในฐานข้อมูล
     protected $table = "staffs";
     //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
     protected $fillable = ["#","name","age","salary","phone"];    
     //Primary Key
      protected $primaryKey = "id";
}
