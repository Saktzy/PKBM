<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\ModelAuthenticate;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Guru extends ModelAuthenticate
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'guru';
}
