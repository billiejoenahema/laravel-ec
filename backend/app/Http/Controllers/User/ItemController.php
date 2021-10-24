<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PrimaryCategory;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:users');

        $this->middleware(function ($request, $next) {

            $id = $request->route()->parameter('item');
            if (!is_null($id)) {
                $itemId = Product::availableItems()->where('products.id', $id)->exists();
                if (!$itemId) {
                    abort(404);
                }
            }
            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = PrimaryCategory::with('secondary')
            ->get();

        $products = Product::availableItems()
            ->selectCategory($request->category ?? '0')
            ->searchKeyword($request->keyword)
            ->sortOrder($request->sort)
            ->paginate($request->pagination ?? '20');

        return view(
            'user.index',
            compact('products', 'categories')
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $quantity = Stock::where('product_id', $product->id)
            ->sum('quantity');

        if ($quantity > 9) {
            $quantity = 9;
        }

        return view(
            'user.show',
            compact('product', 'quantity')
        );
    }
}
