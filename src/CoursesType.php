<?php

namespace App;

class CoursesType
{ 
    public const FREE = 'free';
    public const PAID = 'paid';

    public static function label(string $type): string
    {
        return match($type) {
            self::FREE => 'Curso Gratis',
            self::PAID => 'Curso de pago',
            default => 'Tipo desconocido',
        };
    }
}