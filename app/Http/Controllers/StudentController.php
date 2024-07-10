<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Student;

// class StudentController extends Controller
// {
//     public function search(Request $request)
//     {
//         $query = $request->input('query');
//         $student = Student::where('id', $query)->orWhere('name', 'LIKE', '%' . $query . '%')->first();
        
//         if ($student) {
//             return response()->json(['student' => $student]);
//         } else {
//             return response()->json(['student' => null]);
//         }
//     }
// }

/**<?php
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Book;
class StudentController extends Controller
{
    // public function search(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'query' => 'required',
    //         'std' => 'required',
    //     ]);

    //     $query = $request->input('query');
    //     $std = $request->input('std');

    //     // Create a base query
    //     $queryBuilder = Student::query();

    //     // Add search criteria
    //     $queryBuilder->where(function ($q) use ($query) {
    //         $q->where('id', $query)
    //           ->orWhere('name', 'LIKE', '%' . $query . '%')
    //           ->orWhere('srno', $query);
    //     });

    //     // Fetch the student details for the provided standard
    //     $students = $queryBuilder->where('Std', $std)->get();

    //     // Return response
    //     if ($students->isNotEmpty()) {
    //         return response()->json(['student' => $students]);
    //     } else {
    //         return response()->json(['student' => []]);
    //     }
    // }
   
// app/Http/Controllers/StudentController.php


 
public function search(Request $request)
{
    // Validate the request
    $request->validate([
        'query' => 'required',
        'std' => 'required',
    ]);

    $query = $request->input('query');
    $std = $request->input('std');

    // Fetch the student details for the provided standard
    $students = Student::where(function ($q) use ($query) {
        $q->where('id', $query)
          ->orWhere('name', 'LIKE', '%' . $query . '%')
          ->orWhere('srno', $query);
    })
    ->where('Std', $std)
    ->get();

    // Define static products
    $products = [];

    // Check if any students were found
    if ($students->isNotEmpty()) {
        $products = [];
    
        // Fetch books for std-1
        if ($students->first()->Std == 'std-1') {
            $books = Book::where('Std', 'std 1')->get();
            foreach ($books as $book) {
                $products[] = [
                    'id' => $book->id,
                    'name' => $book->name,
                    'price' => $book->price,
                    'image' => 'data:image/jpeg;base64,' . base64_encode($book->image),
                ];
            }
        }
    
        // Fetch books for std-2
        if ($students->first()->Std == 'std-2') {
            $books = Book::where('Std', 'std 2')->get();
            foreach ($books as $book) {
                $products[] = [
                    'id' => $book->id,
                    'name' => $book->name,
                    'price' => $book->price,
                    'image' => 'data:image/jpeg;base64,' . base64_encode($book->image),
                ];
            }
        }
    
        // Add conditions for std-3 to std-12
        // Fetch books for std-3
        if ($students->first()->Std == 'std-3') {
            $books = Book::where('Std', 'std 3')->get();
            foreach ($books as $book) {
                $products[] = [
                    'id' => $book->id,
                    'name' => $book->name,
                    'price' => $book->price,
                    'image' => 'data:image/jpeg;base64,' . base64_encode($book->image),
                ];
            }
        }
         // Add conditions for std-3 to std-12
        // Fetch books for std-3
        if ($students->first()->Std == 'std-4') {
            $books = Book::where('Std', 'std 3')->get();
            foreach ($books as $book) {
                $products[] = [
                    'id' => $book->id,
                    'name' => $book->name,
                    'price' => $book->price,
                    'image' => 'data:image/jpeg;base64,' . base64_encode($book->image),
                ];
            }
        }
         // Add conditions for std-3 to std-12
        // Fetch books for std-3
        if ($students->first()->Std == 'std-5') {
            $books = Book::where('Std', 'std 3')->get();
            foreach ($books as $book) {
                $products[] = [
                    'id' => $book->id,
                    'name' => $book->name,
                    'price' => $book->price,
                    'image' => 'data:image/jpeg;base64,' . base64_encode($book->image),
                ];
            }
        }
         // Add conditions for std-3 to std-12
        // Fetch books for std-3
        if ($students->first()->Std == 'std-6') {
            $books = Book::where('Std', 'std 3')->get();
            foreach ($books as $book) {
                $products[] = [
                    'id' => $book->id,
                    'name' => $book->name,
                    'price' => $book->price,
                    'image' => 'data:image/jpeg;base64,' . base64_encode($book->image),
                ];
            }
        }
         // Add conditions for std-3 to std-12
        // Fetch books for std-3
        if ($students->first()->Std == 'std-7') {
            $books = Book::where('Std', 'std 3')->get();
            foreach ($books as $book) {
                $products[] = [
                    'id' => $book->id,
                    'name' => $book->name,
                    'price' => $book->price,
                    'image' => 'data:image/jpeg;base64,' . base64_encode($book->image),
                ];
            }
        }
         // Add conditions for std-3 to std-12
        // Fetch books for std-3
        if ($students->first()->Std == 'std-8') {
            $books = Book::where('Std', 'std 3')->get();
            foreach ($books as $book) {
                $products[] = [
                    'id' => $book->id,
                    'name' => $book->name,
                    'price' => $book->price,
                    'image' => 'data:image/jpeg;base64,' . base64_encode($book->image),
                ];
            }
        }
         // Add conditions for std-3 to std-12
        // Fetch books for std-3
        if ($students->first()->Std == 'std-9') {
            $books = Book::where('Std', 'std 3')->get();
            foreach ($books as $book) {
                $products[] = [
                    'id' => $book->id,
                    'name' => $book->name,
                    'price' => $book->price,
                    'image' => 'data:image/jpeg;base64,' . base64_encode($book->image),
                ];
            }
        }
         // Add conditions for std-3 to std-12
        // Fetch books for std-3
        if ($students->first()->Std == 'std-10') {
            $books = Book::where('Std', 'std 3')->get();
            foreach ($books as $book) {
                $products[] = [
                    'id' => $book->id,
                    'name' => $book->name,
                    'price' => $book->price,
                    'image' => 'data:image/jpeg;base64,' . base64_encode($book->image),
                ];
            }
        }
         // Add conditions for std-3 to std-12
        // Fetch books for std-3
        if ($students->first()->Std == 'std-12') {
            $books = Book::where('Std', 'std 3')->get();
            foreach ($books as $book) {
                $products[] = [
                    'id' => $book->id,
                    'name' => $book->name,
                    'price' => $book->price,
                    'image' => 'data:image/jpeg;base64,' . base64_encode($book->image),
                ];
            }
        }
         // Add conditions for std-3 to std-12
        // Fetch books for std-3
        if ($students->first()->Std == 'std-12') {
            $books = Book::where('Std', 'std 3')->get();
            foreach ($books as $book) {
                $products[] = [
                    'id' => $book->id,
                    'name' => $book->name,
                    'price' => $book->price,
                    'image' => 'data:image/jpeg;base64,' . base64_encode($book->image),
                ];
            }
        }
       
    
        return response()->json([
            'student' => $students->first(), // Assuming only one student is returned
            'products' => $products
        ]);
    }
}
}


//         if ($students->first()->Std == 'std-2') {
//             // Populate products array
//             $products = [
//                 ['id' => 1, 'name' => 'Product 2', 'price' => 250, 'image' => 'pexels.jpg'],
//                 ['id' => 2, 'name' => 'Product 2', 'price' => 200, 'image' => 'pexels.jpg'],
//                 ['id' => 3, 'name' => 'Product 2', 'price' => 230, 'image' => 'pexels.jpg'],
//                 ['id' => 4, 'name' => 'Product 2', 'price' => 520, 'image' => 'pexels.jpg'],
//                 ['id' => 5, 'name' => 'Product 2', 'price' => 147, 'image' => 'pexels.jpg'],
//                 ['id' => 6, 'name' => 'Product 2', 'price' => 563, 'image' => 'pexels.jpg'],
//                 ['id' => 7, 'name' => 'Product 2', 'price' => 125, 'image' => 'pexels.jpg'],
//                 ['id' => 8, 'name' => 'Product 2', 'price' => 145, 'image' => 'pexels.jpg'],
//             ];
//         }
//     }

//     // Return response
//     // return view('home', compact('products'));
//     return response()->json([
//         'student' => $students->first(), // Assuming only one student is returned
//         'products' => $products
//     ]);
// }