<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Attendance_slots;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AttendanceController extends Controller
{
    public function times() {
        $attSlot = DB::table('attendance_slots')
            ->join('time_slots', 'attendance_slots.time_slot_id', '=', 'time_slots.id')
            ->get();
//return $attSlot;
       return \view('today-timeslots')->with("times", $attSlot);
    }
}
