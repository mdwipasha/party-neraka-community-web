<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\member;
use App\Models\Merch;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $members = Member::orderBy('id')->get();
        $channelIds = Member::pluck('channel_id')->toArray(); // asumsi kamu simpan channel_id di DB
        $liveChannels = getLiveChannels($channelIds);
        $galleries = Gallery::orderBy('updated_at')->get();
        $merches = Merch::orderBy('id')->get();
        return view('index', compact('members','liveChannels','galleries','merches'));
    }

    public function event() {
        $events = Event::orderBy('updated_at')->paginate(3);
        return view('event', compact('events'));
    }


}
