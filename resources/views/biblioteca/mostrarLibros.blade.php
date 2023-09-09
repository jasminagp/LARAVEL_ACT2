@extends('app')

@section('title' , 'Mostrar Libros')

@section('content')
    <h1 class="text-3xl font-bold text-center w-full py-3.5 text-lila-fosc">
        Listado de libros
    </h1>
    @if ($libros->isEmpty())
        <p class="alert">&#129335; No hay libros, añade libros <a href="/formAddLibro" class="decoration-1">aquí</a></p>
    @else
        <table class="table-fixed text-sm border-collapse">
            <thead>
                <tr>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Título </th>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Autor </th>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Género</th>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Año publicación</th>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Disponible</th>
                    <th class="border-b border-lila-fosc font-bold p-4 pl-8 pt-0 pb-3 text-lila-fosc"> Acciones</th>
                </tr>
            </thead>
            <tbody>
                @each('components.table', $libros , 'libro')
            </tbody>
        </table>
    @endif
@endsection