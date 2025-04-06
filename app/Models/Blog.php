<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[ // สามารถเพิ่มข้อมูลได้ โดยไม่ต้องระบุทีละฟิลด์ใน query หรือการสร้าง object ใหม่
        'title',
        'content',
        'status'
        
    ];
}

