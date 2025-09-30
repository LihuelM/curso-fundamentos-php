<?php

namespace App;

enum CoursesType: string
{ 
    case FREE = 'FREE';
    case PAID = 'PAID';

    public function label(): string
    {
        return match($this) {
            self::FREE => 'Curso Gratis',
            self::PAID => 'Curso de pago',
            default => 'Tipo desconocido',
        };
    }
}