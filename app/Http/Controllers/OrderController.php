<?php
// app/Http/Controllers/OrderController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
     // Mostrar todas las órdenes del usuario autenticado
     public function index()
     {
         $orders = Auth::user()->orders; // Obtener las órdenes del usuario autenticado
         return view('orders.index', compact('orders'));
     }
 
     // Crear una nueva orden con productos seleccionados
     public function create(Request $request)
     {
         // Crear una nueva orden
         $order = new Order();
         $order->user_id = Auth::id(); // Asignar la orden al usuario autenticado
         $order->total = 0; // Esto se actualizará más adelante
         $order->status = 'pending';
         $order->save();
 
         // Agregar productos a la orden
         $products = Product::findMany($request->input('product_ids')); // IDs de productos enviados desde el formulario
         foreach ($products as $product) {
             $orderDetail = new OrderDetail();
             $orderDetail->order_id = $order->id;
             $orderDetail->product_id = $product->id;
             $orderDetail->quantity = 1; // Ejemplo simple con 1 unidad
             $orderDetail->price = $product->price;
             $orderDetail->save();
 
             // Sumar el precio del producto al total de la orden
             $order->total += $product->price;
         }
 
         // Guardar el total de la orden
         $order->save();
 
         return redirect()->route('orders.index')->with('success', 'Orden creada correctamente.');
     }
 
     // Mostrar una orden específica
     public function show($id)
     {
         $order = Order::findOrFail($id);
         return view('orders.show', compact('order'));
     }
 
     // Actualizar el estado de la orden (por ejemplo, a "completado")
     public function updateStatus($id, Request $request)
     {
         $order = Order::findOrFail($id);
         $order->status = $request->input('status');
         $order->save();
 
         return redirect()->route('orders.index')->with('success', 'Estado de la orden actualizado.');
     }
}
