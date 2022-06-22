<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProposalText extends Model
{
    use HasFactory;

    protected $table = 'user_proposal_standard_texts';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'title',
        'text',
    ];
}
