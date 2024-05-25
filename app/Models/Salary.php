<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Salary extends Model
{
    use HasFactory;
    protected $casts = [
        'effective_date' => 'date',
    ];

    public function employeeAt(): BelongsTo
    {
        return $this->belongsTo(EmployeeAt::class);
    }
}
