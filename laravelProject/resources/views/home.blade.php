@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h1>Welcome to the Home Page</h1>
        
        <!-- Search Bar -->
        <form action="#" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="query">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>
        
        <!-- Input Fields -->
        <h3>Input Fields</h3>
        <div class="row">
            @for ($i = 1; $i <= 5; $i++)
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" placeholder="Input {{ $i }}">
                </div>
            @endfor
        </div>
        <div class="form-check">
            <div class="row justify-content-end">
                <div class="col-auto">
                    <button class="btn btn-primary mt-md-2 p-md-2 mr-2" type="button" id="selectAll">Select All</button>
                    <button class="btn btn-danger mt-md-2 p-md-2" onclick="clearAllCheckboxes()">Clear All</button>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap Cards Example -->
        <h3>Products</h3>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ $product['image'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text">Price: &#8377;{{ $product['price'] }}</p> <!-- Indian Rupee sign -->
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input mt-2 p-2 card-checkbox" type="checkbox" value="{{ $product['price'] }}" id="defaultCheck{{ $loop->index }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div id="selectedCount">0 Your Selected Products</div>
        <div id="totalPrice">Total Price: ₹0.00</div> <!-- Indian Rupee sign -->
        
     

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
            document.getElementById('totalPrice').innerText = "Total Price: ₹" + totalPrice.toFixed(2); <!-- Indian Rupee sign -->
        }

        function clearAllCheckboxes() {
            const checkboxes = document.querySelectorAll('.card-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
            updateSelectedCount();
            updateTotalPrice();
        }
    </script>
@endsection
