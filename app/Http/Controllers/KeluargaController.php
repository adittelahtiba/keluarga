<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeluargaController extends Controller
{
    public function index()
    {
        $resp = DB::table('keluargas')->get();

        return response()->json($resp, 200);
    }

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'id_orangtua' => $request->id_orangtua,
            'created_at' => date('Y-m-d H:i:s')
        ];
        $resp['result'] = DB::table('keluargas')->insert($data);

        return response()->json($resp, 201);
    }
    public function update(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'id_orangtua' => $request->id_orangtua,
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $resp['result'] = DB::table('keluargas')->where('id', $request->id)->update($data);

        return response()->json($resp, 201);
    }

    public function destroy($id)
    {
        $resp['result'] = DB::delete("delete from keluargas where id=$id");

        return response()->json($resp, 201);
    }
}