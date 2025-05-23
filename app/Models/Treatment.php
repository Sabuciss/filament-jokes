<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Treatment extends Model
{
   Schema::create('treatments', function (Blueprint $table) {
        $table->id();
        $table->string('description');
        $table->text('notes')->nullable();
        $table->foreignId('patient_id')->constrained('patients')->cascadeOnDelete();
        $table->unsignedInteger('price')->nullable();
        $table->timestamps();
    });

     public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
