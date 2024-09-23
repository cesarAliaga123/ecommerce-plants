<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // Mostrar todos los productos
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Mostrar un formulario para crear un nuevo producto
    public function create()
    {
        $categories = Category::all(); // Corrección aquí
        return view('products.create', compact('categories'));
    }

    // Almacenar un nuevo producto en la base de datos
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id'
        ]);

        Product::create($validatedData); // Corrección aquí

        return redirect()->route('products.index')->with('success', 'Producto creado correctamente.'); // Corrección de 'retrun' a 'return'
    }

    // Mostrar un solo producto
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product')); // Falta coma en compact
    }

    // Mostrar un formulario para editar un producto
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories')); // Corregir 'comnpact' a 'compact'
    }

    // Actualizar un producto en la base de datos
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id'
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData); // Agregar actualización del producto

        return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente.');
    }

    // Eliminar un producto
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente.');
    }
}

