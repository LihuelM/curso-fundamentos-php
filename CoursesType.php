<?php

enum CoursesType: string {
    case Free = 'free';
    case Paid = 'paid';

    public function label() : string 
    {
        return match($this) {
            CoursesType::Free => 'Curso Gratis',
            CoursesType::Paid => 'Curso de pago',
        };
}   
}