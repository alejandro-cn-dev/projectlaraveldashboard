<?php

namespace App\Http\Controllers;
use App\Models\Inventario;
use Illuminate\Http\Request;

class SalidaController extends Controller
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
        $salidas = Inventario::all();
        return view('salida.index')->with('salidas',$salidas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salida.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salidas = new Inventario();
        $salidas->id_cabecera = $request->get('id_cabecera');
        $salidas->id_producto = $request->get('id_producto');
        $salidas->unidad_compra = $request->get('unidad_compra');
        $salidas->precio_compra = $request->get('precio_compra');
        $salidas->unidad_venta = $request->get('unidad_venta');
        $salidas->precio_venta = $request->get('precio_venta');
        $salidas->margen_utilidad = $request->get('margen_utilidad');
        $salidas->fecha = $request->get('fecha');
        $salidas->cantidad = $request->get('cantidad');
        $salidas->id_usuario = $request->get('id_usuario');

        $salidas->save();
        return redirect('/salidas');
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
        $salida = Salida::find($id);
        return view('salida.edit')->with('salida',$salida);
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
        $salida = Salida::find($id);
        $salida->id_cabecera = $request->get('id_cabecera');
        $salida->id_producto = $request->get('id_producto');
        $salida->unidad_compra = $request->get('unidad_compra');
        $salida->precio_compra = $request->get('precio_compra');
        $salida->unidad_venta = $request->get('unidad_venta');
        $salida->precio_venta = $request->get('precio_venta');
        $salida->margen_utilidad = $request->get('margen_utilidad');
        $salida->fecha = $request->get('fecha');
        $salida->cantidad = $request->get('cantidad');
        $salida->id_usuario = $request->get('id_usuario');

        $salida->save();
        return redirect('/salidas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salida = Salida::find($id);
        $salida->delete();
        return redirect('/salidas');
    }
}
