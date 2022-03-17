<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StoreController extends BaseController
{
    public function store() {
        $data = request()->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'message' => 'required|string',
        ]);
        Message::create($data);
        return redirect()->route('index');
    }
}
