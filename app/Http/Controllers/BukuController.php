<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data_buku = [
            'Pemrograman Web Lanjut dengan Laravel',
            'Belajar Laravel untuk Pemula',
            'Framework Laravel: Panduan Lengkap',
        ];

        return view('perpus_index', compact('data_buku'));
    }
    
    public function create(): void
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): string
    {
        return "Anda sedang melihat detail buku dengan Kode: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): void
    {
        //
    }
}
