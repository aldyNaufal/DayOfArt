<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function index(){
        $events = Event::all();
        return view('welcome', ['events' => $events]);
    }

    public function indexAdmin(){
        $events = Event::all();
        return view('admin.event.index', ['events' => $events]);
    }

    public function createAdmin(){
        return view('admin.event.create');
    }

    public function storeAdmin(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'city' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'startReg' => 'required|date',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'linkLocation' => 'required|url'
        ]);

        $image = $request->file('image');
        $destinationPath = "storage";
        $lastEvent = Event::latest('id')->first();
        $newId = $lastEvent ? $lastEvent->id + 1 : 1;
        $lastEvent = (string)$newId;
        $newId = ($lastEvent."_image.".$image->getClientOriginalExtension());
        ($image->move($destinationPath,$newId));
        
        $data['image'] = '/public/storage/'.$newId;

        $newEvent = Event::create($data);
        return redirect(route('admin.event.index'));
    }

    public function editAdmin(Event $event){
        return view('admin.event.edit', ['event'=>$event]);
    }

    public function updateAdmin(Event $event, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'city' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image is optional
            'startReg' => 'required|date',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'linkLocation' => 'required|url'
        ]);

        // Update the event with the new data
        $data['image'] = $event->image;
        $event->update($data);

        return redirect()->route('admin.event.index');
    }

    public function destroyAdmin(Event $event){
        $event->delete();
        return redirect(route('admin.event.index'));
    }

}
// php artisan storage:link jalankan command ini