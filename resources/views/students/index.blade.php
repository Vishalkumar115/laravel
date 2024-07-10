@extends('layouts.app')

@section('title', 'Update Student')

@section('content')

<div class="container mt-5">
    <h2>Student List</h2>

    <!-- Search Form -->
    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" id="searchInput" placeholder="Search by Sr No or Name">
            </div>
            <div class="col-md-6">
                <select class="form-select" id="searchStd">
                    <option value="" selected>Search by Standard</option>
                    @for ($i = 1; $i <= 12; $i++)
                        <option value="std-{{ $i }}">Std - {{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($students->isEmpty())
        <p>No students found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Name</th>
                    <th>Father's Name</th>
                    <th>Mobile</th>
                    <th>Standard</th>
                    <th>Actions</th> <!-- New column for actions -->
                </tr>
            </thead>
            <tbody id="studentTableBody">
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->srno }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->father }}</td>
                        <td>{{ $student->mobile }}</td>
                        <td>{{ $student->Std }}</td>
                        <td>
                            <div class="d-flex">
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="mr-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Update</a>
                                <button class="btn btn-info view-details-btn" data-student="{{ json_encode($student) }}">View Details</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

<!-- Modal for displaying student details -->
<div class="modal fade" id="studentDetailsModal" tabindex="-1" aria-labelledby="studentDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentDetailsModalLabel">Student Details</h5>
                <button type="button" class="btn btn-info view-details-btn" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body" id="studentDetailsBody">
                <p><strong>Sr No:</strong> <span id="studentsrno"></span></p>
                <p><strong>Name:</strong> <span id="studentName"></span></p>
                <p><strong>Father's Name:</strong> <span id="studentFather"></span></p>
                <p><strong>Mobile:</strong> <span id="studentMobile"></span></p>
                <p><strong>Standard:</strong> <span id="studentStd"></span></p>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const searchStd = document.getElementById('searchStd');
        const studentTableBody = document.getElementById('studentTableBody');
        const rows = studentTableBody.getElementsByTagName('tr');

        searchInput.addEventListener('input', filterRows);
        searchStd.addEventListener('change', filterRows);

        function filterRows() {
    const searchTerm = searchInput.value.trim().toLowerCase();
    const searchStdValue = searchStd.value.trim().toLowerCase();

    // Check if the selected value exists in the options
    const stdOptions = Array.from(searchStd.options).map(option => option.value);
    if (!stdOptions.includes(searchStdValue)) {
        console.error('Selected standard does not exist.');
        return;
    }

    Array.from(rows).forEach(row => {
        const columns = row.getElementsByTagName('td');
        let found = false;

        Array.from(columns).forEach(column => {
            if (searchStdValue === 'std-1') {
                if (column.textContent.trim().toLowerCase() === 'std-1') {
                    found = true;
                }
            } else if (searchTerm.startsWith('std-')) {
                if (column.textContent.toLowerCase().includes(searchTerm)) {
                    found = true;
                }
            } else {
                // Filter by standard only if a standard is selected
                if ((searchStdValue === '' || column.textContent.trim().toLowerCase() === searchStdValue) &&
                    (searchTerm === '' || column.textContent.toLowerCase().includes(searchTerm))) {
                    found = true;
                }
            }
        });

        if (found) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}


        // Event listener for "View Details" button
        const viewDetailsButtons = document.querySelectorAll('.view-details-btn');
        viewDetailsButtons.forEach(button => {
            button.addEventListener('click', function() {
                const student = JSON.parse(this.getAttribute('data-student'));
                displayStudentDetails(student);
            });
        });

        // Function to display student details in modal
        function displayStudentDetails(student) {
            const modalBody = document.getElementById('studentDetailsBody');
            modalBody.innerHTML = `
                <p><strong>Sr No:</strong> ${student.srno}</p>
                <p><strong>Name:</strong> ${student.name}</p>
                <p><strong>Father's Name:</strong> ${student.father}</p>
                <p><strong>Mobile:</strong> ${student.mobile}</p>
                <p><strong>Standard:</strong> ${student.Std}</p>
            `;
            // Show the modal
            $('#studentDetailsModal').modal('show');
        }
    });
</script>


@endsection