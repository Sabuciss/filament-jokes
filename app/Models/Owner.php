<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Owner extends Model
{
    Schema::create('owners', function (Blueprint $table) {
        $table->id();
        $table->string('email');
        $table->string('name');
        $table->string('phone');
        $table->timestamps();
    });

        public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }

}
