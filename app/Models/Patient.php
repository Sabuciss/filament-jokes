<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    Schema::create('patients', function (Blueprint $table) {
        $table->id();
        $table->date('date_of_birth');
        $table->string('name');
        $table->foreignId('owner_id')->constrained('owners')->cascadeOnDelete();
        $table->string('type');
        $table->timestamps();
    });

     public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }

    public function treatments(): HasMany
    {
        return $this->hasMany(Treatment::class);
    }
}
