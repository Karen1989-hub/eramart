<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marzik extends Model
{
    use HasFactory;
    protected $fillable=['performer', 'name','lastName','imgName', 'coacհName','weight','weightClass','v1_1m','v1_2m','v1_3m','v1_summ','v1_record','v2_1m','v2_2m','v2_3m','v2_summ','v2_record','v3_1m','v3_2m','v3_3m','v3_summ','v3_record','v4_1m','v4_2m','v4_3m','v4_summ','v4_record','v5_1m','v5_2m','v5_3m','v5_summ','v5_record','summ',];
}
