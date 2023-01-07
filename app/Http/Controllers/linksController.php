<?php

namespace App\Http\Controllers;

use App\Models\links;
use Illuminate\Http\Request;

class linksController extends Controller
{
    public function index( ){
        $links = links::all();
        return response( )->json($links);
    }

    public function show($id){
        $links = links::find($id);
        return response( )->json($links);
    }
    public function store(Request $request)
    {
        $links = Links::create($request->all());

        return response()->json([
            'message' => 'Link Criado Com Sucesso',
            'links' => $links
        ],200);
    }

    public function update(Request $request, links $links)
    {
        $links->update($request->all());
        return response()->json([
            'message' => 'Link Atualizado Com Sucesso!',
            'links' => $links
        ], 200);
    }

    public function destroy(links $links)
    {
        $links->delete();

        return response()->json([
            'message' => 'Link Deletado Com Sucesso!',

        ], 200);
    }
    
}
