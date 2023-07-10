<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'year',
        'season',
        'question_text',
        'question_img',

        'optA_img',
        'optA',

        'optB_img',
        'optB',

        'optC_img',
        'optC',
        'optD_img',
        'optD',
        'correct_answer',

    ];
}
