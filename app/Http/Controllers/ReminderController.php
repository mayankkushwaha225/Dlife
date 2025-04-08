<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ReminderController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'phone_num' => 'required|numeric|min:8',
            'email' => 'required|email',
            'date' => 'required|date',
            'time' => 'required',
            'message' => 'required',
        ]);
        Reminder::create([
            'mobile_no' => $request->phone_num,
            'email' => $request->email,
            'timezoneoffset' => Carbon::parse("{$request->date} {$request->time}"),
            'message' => $request->message,
        ]);
        return redirect()->back()->with('message', 'Reminder created');
    }
}
