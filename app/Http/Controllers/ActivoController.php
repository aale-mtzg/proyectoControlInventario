<?php

namespace App\Http\Controllers;

//nombre del modelo que voy usar -> Activo
use App\Models\Activo;
use Illuminate\Http\Request;

class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Vista donde esta el formulario, en este caso en "Inventario"
        $activo = Activo::all(); //traer todos los registros de la tabla activo
        return view('activos.index', compact('activos')); //retornar vista index, imprime informacion de la tabla
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Muestra la vista del formulario para crear un registro de activo
        return view('activos.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Procesar la informacion de registro de activo
        $activo = new Activo();
        //tabla->columna = $request->imput('nombre del input');
        $activo->numero_serial = $request->input('numeroSerial');
        $activo->numero_serial_dispositivo = $request->input('numeroSerialDispositivo');
        $activo->numero_serial_tecNM = $request->input('numeroSerialTecNM');
        $activo->tipo_activo = $request->input('tipoActivo');
        $activo->nombre_activo = $request->input('nombreActivo');
        $activo->fecha_alta = $request->input('fechaAlta');
        $activo->marca = $request->input('marca');
        $activo->modelo = $request->input('modelo');
        $activo->color = $request->input('color');
        $activo->descripcion = $request->input('descripcion');
        $activo->imagen = $request->input('imagen');
        $activo->codigo_qr = $request->input('codigoQR');
        $activo->tipo_ubicacion = $request->input('tipoUbicacion');
        $activo->nombre_ubicacion = $request->input('nombreUbicacion');
        $activo->tipo_estatus = $request->input('tipoEstatus');
        $activo->save();
        return redirect('/activos')->with('notification', 'Se realizo el nuevo registro correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function show(Activo $activo)
    {
        //Trae parametros del id releccionado
        return view('activo.show', compact('activo'));//Model binding
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function edit(Activo $activo)
    {
        //Obtener los atributos para editar
        return view('activo.edit', compact('activo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activo $activo)
    {
        //Actualizar datos, guardar la informacion que se escribe en los i
        $activo = new Activo();
        //tabla->columna = $request->imput('nombre del input');
        $activo->numero_serial = $request->input('numeroSerial');
        $activo->numero_serial_dispositivo = $request->input('numeroSerialDispositivo');
        $activo->numero_serial_tecNM = $request->input('numeroSerialTecNM');
        $activo->tipo_activo = $request->input('tipoActivo');
        $activo->nombre_activo = $request->input('nombreActivo');
        $activo->fecha_alta = $request->input('fechaAlta');
        $activo->marca = $request->input('marca');
        $activo->modelo = $request->input('modelo');
        $activo->color = $request->input('color');
        $activo->descripcion = $request->input('descripcion');
        $activo->imagen = $request->input('imagen');
        $activo->codigo_qr = $request->input('codigoQR');
        $activo->tipo_ubicacion = $request->input('tipoUbicacion');
        $activo->nombre_ubicacion = $request->input('nombreUbicacion');
        $activo->tipo_estatus = $request->input('tipoEstatus');
        $activo->save();
        return redirect('/activos')->with('notification', 'Se actualizo el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activo $activo)
    {
        //Borrar registro con id seleccionado
        $activo->delete();
        return redirect('/activos')->with('destroy', 'Se elimino correctamente')
    }
}
