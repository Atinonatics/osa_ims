<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $primaryKey = 'organization_id'; // Define primary key if not 'id'

    protected $fillable = [
        'name',
        'logo',
        'category',
        'description',
        'adviser',
        'president',
        'vice_president',
        'officers',
        'by_laws',
        'letter_adviser',
        'accomplishment',
        'coa',
        'financial_report',
        'verification',
        'is_national',
        'created_by',
    ];

    // If using timestamps, the following line is optional
    public $timestamps = true;
}
