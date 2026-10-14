<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class daftarpeserta extends Model
{
    protected $fillable = [
        'certification_list_id',
        'user_id',
        'nama_peserta',
        'nik',
        'gender',
        'alamat',
        'surat_image',
    ];

    public function CertificationList(){
        return $this->belongsTo(CertificationList::class);
    }
    
    public function CertificationCode(){
        return $this->hasOne(CertificationCode::class);
    }

    public function user(){
        return $this->BelongsTo(User::class);
    }
}
