<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            'services' =>  ['service 1', 'service 2', 'service 3', 'service 4',]
        ];
        $hello = [
            'hello' => ['hello from... services']
        ];
        $data = array_merge($services, $hello);
        $services =  ['service 1', 'service 2', 'service 3', 'service 4',];
        $services = [];

        $services = Service::all();
        // dd($services);
        // dd($data);
        return view('service.index', compact('services'));
    }

    public function create()
    {
        return view('service.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:4|max:10'
        ]);
        // Service::created($data);
        $service = new Service();
        $service->name = $request->post('name');
        $service->save();
        return redirect()->back();
    }
}
