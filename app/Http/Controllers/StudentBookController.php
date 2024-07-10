<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StudentBookController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'srno' => 'required|unique:students',
            'name' => 'required',
            'father' => 'required',
            'mobile' => 'required',
            'Std' => 'required'
        ]);

        try {
            DB::table('students')->insert([
                'srno' => $request->srno,
                'name' => $request->name,
                'father' => $request->father,
                'mobile' => $request->mobile,
                'Std' => $request->Std,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('form.create')->with('success', 'Student information saved successfully.');
        } catch (\Exception $e) {
            Log::error('Database error: ' . $e->getMessage());

            return back()->withInput()->withErrors('Database error: ' . $e->getMessage());
        }
    }

    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'srno' => 'required|unique:students,srno,' . $id,
            'name' => 'required',
            'father' => 'required',
            'mobile' => 'required',
            'Std' => 'required',
        ]);

        try {
            $student = Student::findOrFail($id);
            $student->update($request->all());

            return redirect()->route('students.index')->with('success', 'Student information updated successfully.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors('Error updating student information: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $student = Student::findOrFail($id);
            $student->delete();

            return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
        } catch (\Exception $e) {
            return back()->withErrors('Error deleting student: ' . $e->getMessage());
        }
    }
}
