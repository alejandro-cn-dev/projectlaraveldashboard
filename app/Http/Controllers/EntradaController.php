<?php

namespace App\Http\Controllers;
use App\Models\Inventario;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $entradas = Inventario::all();
        return view('entrada.index')->with('entradas',$entradas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entrada.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entradas = new Inventario();
        $entradas->id_cabecera = $request->get('id_cabecera');
        $entradas->id_producto = $request->get('id_producto');
        $entradas->unidad_compra = $request->get('unidad_compra');
        $entradas->precio_compra = $request->get('precio_compra');
        $entradas->unidad_venta = $request->get('unidad_venta');
        $entradas->precio_venta = $request->get('precio_venta');
        $entradas->margen_utilidad = $request->get('margen_utilidad');
        $entradas->fecha = $request->get('fecha');
        $entradas->cantidad = $request->get('cantidad');
        $entradas->id_usuario = $request->get('id_usuario');

        $entradas->save();
        return redirect('/entradas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entrada = Entrada::find($id);
        return view('entrada.edit')->with('entrada',$entrada);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $entrada = Entrada::find();
        $entrada->id_cabecera = $request->get('id_cabecera');
        $entrada->id_producto = $request->get('id_producto');
        $entrada->unidad_compra = $request->get('unidad_compra');
        $entrada->precio_compra = $request->get('precio_compra');
        $entrada->unidad_venta = $request->get('unidad_venta');
        $entrada->precio_venta = $request->get('precio_venta');
        $entrada->margen_utilidad = $request->get('margen_utilidad');
        $entrada->fecha = $request->get('fecha');
        $entrada->cantidad = $request->get('cantidad');
        $entrada->id_usuario = $request->get('id_usuario');

        $entrada->save();
        return redirect('/entradas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entrada = Entrada::find($id);
        $entrada->delete();
        return redirect('/entradas');
    }
}
