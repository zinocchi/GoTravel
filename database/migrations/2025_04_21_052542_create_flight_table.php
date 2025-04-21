<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::create('flights', function (Blueprint $table) {
    $table->id();
    $table->string('airline');
    $table->string('from');
    $table->string('to');
    $table->timestamp('departure_time')->nullable();
    $table->timestamp('arrival_time')->nullable();
    $table->decimal('price', 10, 2)->nullable();
    $table->string('image')->nullable();
    $table->timestamps();
});

