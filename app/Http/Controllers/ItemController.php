<?php

// app/Http/Controllers/ItemController.php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        
        if ($query) {
            $items = Item::where('name', 'like', "%$query%")->get();
        } else {
            $items = [];
        }

        return view('welcome', compact('items'));
    }
}
