<?php

namespace App\Http\Controllers;

use App\Models\Schedules;

class ESchoolController extends Controller
{
    public function getTimetable()
    {
        $items = Schedules::orderby('date', 'asc')
            ->get();

        return [
            'success' => true,
            'timetable' => $items,
        ];
    }
}