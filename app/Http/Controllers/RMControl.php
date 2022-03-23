<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RMControl extends Controller {

    private $RMApiServer;

    public function __construct() {
        $this->RMApiServer = config('app.rm_server_api').'/remote-control';
    }

    public function index(Request $request) {
        return view('index');
    }

    public function playPause(Request $request) {
        $var = $this->RMApiServer.'/media-play-pause';
        error_log($var);
        Http::get($this->RMApiServer.'/media-play-pause');
    }

    public function next(Request $request) {
        Http::get($this->RMApiServer.'/media-next');
        return $this->index($request);
    }

    public function previous(Request $request) {
        Http::get($this->RMApiServer.'/media-previous');
        return $this->index($request);
    }

    public function mute(Request $request) {
        Http::get($this->RMApiServer.'/volume-mute-unmute');
        return $this->index($request);
    }

    public function volumeUp(Request $request) {
        Http::get($this->RMApiServer.'/volume-up');
        return $this->index($request);
    }

    public function volumeDown(Request $request) {
        Http::get($this->RMApiServer.'/volume-down');
        return $this->index($request);
    }


}
