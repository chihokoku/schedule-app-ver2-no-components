<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index(Request $request){
        $schedules = Schedule::all();
        return response()->json($schedules);
    }

    public function create(Request $request){
        $schedules = new Schedule;
        $schedules->sch_date = $request->sch_date;
        $schedules->sch_time = $request->sch_time;
        $schedules->sch_category = $request->sch_category;
        $schedules->sch_contents = $request->sch_contents;
        $schedules->save();
        return response()->json($schedules);
    }

    public function edit(Request $request){
        $schedules = Schedule::find($request->id);
        return $schedules;
    }

    public function update(Request $request){
        $schedules = Schedule::find($request->id);
        $schedules->sch_date = $request->sch_date;
        $schedules->sch_time = $request->sch_time;
        $schedules->sch_category = $request->sch_category;
        $schedules->sch_contents = $request->sch_contents;
        $schedules->save();
        return $schedules;
    }

    public function delete(Request $request){
        $schedule = Schedule::find($request->id);
        $schedule->delete();
        $schedules = Schedule::all();
        return $schedules;
      }

}
