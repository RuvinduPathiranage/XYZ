<?php

namespace App\Http\Controllers;

use App\Models\Sim;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class SimController extends Controller
{
    public function index()
    {

        $data = Sim::all();

        $sim = [
            'status' => "success",
            'sim' => $data,
        ];

        return response()->json($sim, 200);
    }

    public function upload(Request $request)
    {
        // return response("halo");
        $sim = new Sim;
        $sim->user_id = $request->uid;
        $sim->plan_id = $request->pid;
        $sim->sim_number = $request->sim_number;
        $sim->activition_status = $request->status;
        $sim->save();

        return response()->json($sim);
    }
    public function edit(Request $request, $id)
    {
        $sim = Sim::find($id);
        $sim->user_id = $request->uid;
        $sim->plan_id = $request->pid;
        $sim->sim_number = $request->sim_number;
        $sim->activition_status = $request->status;
        $sim->update();

        return response()->json($sim);
    }
    public function delete($id)
    {
        $sim = Sim::find($id);
        $sim->delete();

        return response("delete done");
    }
    
}
