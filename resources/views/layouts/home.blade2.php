@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <h1>Welcome to the Home Page</h1>

    <!-- Search Bar-->
    <form action="{{ route('students.search') }}" method="GET" id="search-form">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="query" placeholder="Search by ID or Name..." name="query" required>
            <input type="text" class="form-control" id="std" placeholder="Std" name="std" required>
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
    </form>

    <!-- Display Student Data -->
    <h3>Student Data</h3>
    <div id="student-data" style="display: none;">
        <div class="mb-3">
            <label for="std" class="form-label">Standard</label>
            <input type="text" class="form-control" id="Std" readonly>
        </div>
        <div class="mb-3">
            <label for="srno" class="form-label">SR No</label>
            <input type="text" class="form-control" id="srno" readonly>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" readonly>
        </div>
        <div class="mb-3">
            <label for="father" class="form-label">Father's Name</label>
            <input type="text" class="form-control" id="father" readonly>
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="mobile" readonly>
        </div>
    </div>
    <div id="no-student-message" style="display: none;">
        <p>No student found with that query.</p>
    </div>

    <div class="form-check">
        <div class="row justify-content-end">
            <div class="col-auto">
                <button class="btn btn-primary mt-md-2 p-md-2 mr-2" type="button" id="selectAll">Select All</button>
                <button class="btn btn-danger mt-md-2 p-md-2" onclick="clearAllCheckboxes()">Clear All</button>
            </div>
        </div>
    </div>

   
    </div>
    <div class="mb-3">
    <div id="selectedCount" class="form-control">0 Your Selected Products</div>
        </div>
    <!-- <div id="selectedCount">0 Your Selected Products</div> -->
    <!-- <div id="totalPrice">Total Price: ₹0.00</div> Indian Rupee sign -->
    <div class="mb-3">
    <div id="totalPrice" class="form-control">Total Price: ₹0.00</div>
        </div>

</div>

<script>
    document.getElementById('selectAll').addEventListener('click', function() {
        const checkboxes = document.querySelectorAll('.card-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = true;
        });
        updateSelectedCount();
        updateTotalPrice();
    });

    document.querySelectorAll('.card-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            updateSelectedCount();
            updateTotalPrice();
        });
    });

    function updateSelectedCount() {
        const selectedCheckboxes = document.querySelectorAll('.card-checkbox:checked');
        document.getElementById('selectedCount').innerText = selectedCheckboxes.length + " Your Selected Products";
    }

    function updateTotalPrice() {
        const selectedCheckboxes = document.querySelectorAll('.card-checkbox:checked');
        let totalPrice = 0;
        selectedCheckboxes.forEach(checkbox => {
            totalPrice += parseFloat(checkbox.value);
        });
        document.getElementById('totalPrice').innerText = "Total Price: ₹" + totalPrice.toFixed(2);
    }

    function clearAllCheckboxes() {
        const checkboxes = document.querySelectorAll('.card-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
        updateSelectedCount();
        updateTotalPrice();
    }

    document.getElementById('search-form').addEventListener('submit', function(event) {
        event.preventDefault();

        // Get search query and standard
        const query = document.getElementById('query').value;
        const std = document.getElementById('std').value;

        // Fetch student data based on query and standard
        fetch(`{{ route('students.search') }}?query=${query}&std=${std}`)
            .then(response => response.json())
            .then(data => {
                if (data.students.length > 0) {
                    const student = data.students[0]; // Assuming only one student is returned
                    displayStudentData(student);
                } else {
                    displayNoStudentMessage();
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });

    // Display student data
    function displayStudentData(student) {
        document.getElementById('srno').value = student.srno;
        document.getElementById('name').value = student.name;
        document.getElementById('father').value = student.father; // Assuming the column name is father_name
        document.getElementById('mobile').value = student.mobile; 
        document.getElementById('Std').value = student.Std; // Assuming the column name is Std
        document.getElementById('Std').readOnly = true; // Make the std input field read-only
        document.getElementById('student-data').style.display = 'block';
        document.getElementById('no-student-message').style.display = 'none';
    }

    // Display message when no student found
    function displayNoStudentMessage() {
        document.getElementById('student-data').style.display = 'none';
        document.getElementById('no-student-message').style.display = 'block';
    }
</script>
@endsection



 <!-- Bootstrap Cards Example -->
    <!-- <h3>Products</h3>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ $product['image'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text">Price: &#8377;{{ $product['price'] }}</p> Indian Rupee sign 
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input mt-2 p-2 card-checkbox" type="checkbox" value="{{ $product['price'] }}" id="defaultCheck{{ $loop->index }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach -->
        @extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <h1>Welcome to the Home Page</h1>

    <!-- Search Bar-->
    <form id="search-form">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="query" placeholder="Search by ID or Name..." name="query" required>
            <input type="text" class="form-control" id="std" placeholder="Std" name="std" required>
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
    </form>

    <!-- Display Student Data -->
    <h3>Student Data</h3>
    <div id="student-data" style="display: none;">
        <!-- Student details will be displayed here -->
    </div>
    <div id="no-student-message" stycle="display: none;">
        <p>No student found with that query.</p>
    </div>

    <!-- Bootstrap Cards Example -->
    <h3>Products</h3>
    <div class="row" id="product-container">
        <!-- Product cards will be dynamically added here -->
    </div>
    <div class="mb-3">
        <div id="selectedCount" class="form-control">0 Your Selected Products</div>
    </div>
    <div class="mb-3">
        <div id="totalPrice" class="form-control">Total Price: ₹0.00</div>
    </div>
</div>

<script>
    document.getElementById('search-form').addEventListener('submit', function(event) {
        event.preventDefault();

        // Get search query and standard
        const query = document.getElementById('query').value;
        const std = document.getElementById('std').value;

        // Send AJAX request to search endpoint
        fetch('{{ route("students.search") }}?query=' + query + '&std=' + std)
            .then(response => response.json())
            .then(data => {
                if (data.student) {
                    // Display student data
                    displayStudentData(data.student);
                    // Update product section
                    updateProductSection(data.products);
                } else {
                    // Display no student message
                    displayNoStudentMessage();
                    // Clear product section
                    clearProductSection();
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });

    // Display student data
    function displayStudentData(student) {
        // Update student data in the UI
        document.getElementById('student-data').innerHTML = `
            <div class="mb-3">
                <label for="std" class="form-label">Standard</label>
                <input type="text" class="form-control" value="${student.Std}" readonly>
            </div>
            <div class="mb-3">
                <label for="srno" class="form-label">SR No</label>
                <input type="text" class="form-control" value="${student.srno}" readonly>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" value="${student.name}" readonly>
            </div>
            <div class="mb-3">
                <label for="father" class="form-label">Father's Name</label>
                <input type="text" class="form-control" value="${student.father}" readonly>
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" class="form-control" value="${student.mobile}" readonly>
            </div>
        `;
        // Show student data
        document.getElementById('student-data').style.display = 'block';
        // Hide no student message
        document.getElementById('no-student-message').style.display = 'none';
    }

    // Update product section with fetched products
    function updateProductSection(products) {
        const productContainer = document.getElementById('product-container');
        // Clear existing products
        productContainer.innerHTML = '';
        // Populate product cards
        products.forEach(product => {
            const card = `
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="${product.image}" class="card-img-top" alt="${product.name}">
                        <div class="card-body">
                            <h5 class="card-title">${product.name}</h5>
                            <p class="card-text">Price: ₹${product.price}</p>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input mt-2 p-2 card-checkbox" type="checkbox" value="${product.price}" id="defaultCheck-${product.id}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            productContainer.insertAdjacentHTML('beforeend', card);
        });

        // Add event listeners to checkboxes
        const checkboxes = document.querySelectorAll('.card-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                updateSelectedCount();
                updateTotalPrice();
            });
        });

        // Update count and total price
        updateSelectedCount();
        updateTotalPrice();
    }

    // Display message when no student found
    function displayNoStudentMessage() {
        // Hide student data
        document.getElementById('student-data').style.display = 'none';
        // Show no student message
        document.getElementById('no-student-message').style.display = 'block';
    }

    // Clear product section
    function clearProductSection() {
        // Clear product container
        document.getElementById('product-container').innerHTML = '';
        // Update count and total price
        updateSelectedCount();
        updateTotalPrice();
    }

    // Update selected products count
    function updateSelectedCount() {
        const selectedCheckboxes = document.querySelectorAll('.card-checkbox:checked');
        document.getElementById('selectedCount').innerText = selectedCheckboxes.length + " Your Selected Products";
    }

    // Update total price
    function updateTotalPrice() {
        const selectedCheckboxes = document.querySelectorAll('.card-checkbox:checked');
        let totalPrice = 0;
        selectedCheckboxes.forEach(checkbox => {
            totalPrice += parseFloat(checkbox.value);
        });
        document.getElementById('totalPrice').innerText = "Total Price: ₹" + totalPrice.toFixed(2);
    }
</script>
@endsection

