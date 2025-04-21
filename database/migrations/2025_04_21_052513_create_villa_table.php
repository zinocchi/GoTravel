<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::create('villa', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description')->nullable();
    $table->string('location')->nullable();
    $table->decimal('price_per_night', 10, 2)->nullable();
    $table->integer('bedrooms')->nullable();
    $table->string('image')->nullable();
    $table->timestamps();
});
