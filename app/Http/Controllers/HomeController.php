<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\ObatModel;
use Illuminate\View\View;
use Yajra\DataTables\Facades\Datatables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public functio index(Request $request)
    {
        if ($request->ajax()) {
            $data = ObatModel::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }}

    public function create(Request $request)
    {
        $this->validate($request, [
            'description'     => 'required',
            'uom'     => 'required',
            'item_code'   => 'required|min:14',
            'stock' => 'required|numeric|min:1',
        ]);

          ObatModel::create([
            'description'  => $request->description,
            'uom' => $request->uom,
            'item_code' => $request->item_code,
            'stock' => $request->stock,
        ]);

        return redirect()->route('obat.home');
    }
        /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */

     public function destroy($id)
     {
        $obatmodel = ObatModel::findOrFail($id);
        $obatmodel->delete();

        return redirect()->route('obat.home');
     }

     public function show(string $id): View
     {
         //get post by ID
         $obatmodel = ObatModel::findOrFail($id);

         //render view with post
         return view('show', compact('obatmodel'));
     }

     public function edit($id)
     {
        $obatmodel = ObatModel::findOrFail($id);
        
        //render view with post
        return view('edit', compact('obatmodel'));
     }

     public function update(Request $request, $id): RedirectResponse
     {
        $this->validate($request, [
            'description'     => 'required',
            'uom'     => 'required',
            'item_code'   => 'required|min:14',
            'stock' => 'required|numeric|min:1',
        ]);
        $obatmodel = ObatModel::findOrFail($id);

        $obatmodel->update([
            'description'  => $request->description,
            'uom' => $request->uom,
            'item_code' => $request->item_code,
            'stock' => $request->stock,
        ]);
        return redirect()->route('obat.home');
     }
}
