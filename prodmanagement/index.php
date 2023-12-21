<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-5">

    <h1 class="text-center">Product Management</h1>

    <div id="addProductForm">
        <div class="container mt-5">
        <h2 class="text-center">Add New Product</h2>
    </div>
        <form id="productForm">
            <label for="productName">Product Name:</label>
            <input type="text" id="productName" required>

            <label for="unit">Unit:</label>
            <input type="text" id="unit" required>

            <label for="price">Price:</label>
            <input type="number" id="price" step="0.01" required>

            <label for="expiryDate">Date of Expiry:</label>
            <input type="date" id="expiryDate" required>

            <label for="inventory">Available Inventory:</label>
            <input type="number" id="inventory"  required>

            <label for="productImage">Product Image (URL):</label>
            <input type="text" id="productImage" required>
            <form method="post" action="" class="mt-3">
            <button type="button"  class="btn btn-primary" onclick="addProduct() ">Add Product</button>
        </form>
        </form>
    </div>
    </div>

<div class="container mt-5">
 <div id="productList">
        <h2 class="text-center">Product List</h2>
        <div class="table-responsive">
        <table class="table" id="productTable">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Unit</th>
                    <th>Price</th>
                    <th>Date of Expiry</th>
                    <th>Available Inventory</th>
                    <th>Available Inventory Cost</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="productTableBody"></tbody>
        </table>
    </div> 
</div>
</div>

<div class="container mt-5">
<div id="editProductModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeEditModal()">&times;</span>
        <h2 class="text-center">Edit Product</h2>
        <form id="editProductForm">
            <input type="hidden" id="editProductId">

            <label for="editProductName">Product Name:</label>
            <input type="text" id="editProductName" required>

            <label for="editUnit">Unit:</label>
            <input type="text" id="editUnit" required>

            <label for="editPrice">Price:</label>
            <input type="number" id="editPrice" step="0.01" required>

            <label for="editExpiryDate">Date of Expiry:</label>
            <input type="date" id="editExpiryDate" required>

            <label for="editInventory">Available Inventory:</label>
            <input type="number" id="editInventory" required>


            <label for="editProductImage">Product Image (URL):</label>
            <input type="text" id="editProductImage" required>
   <form method="post" action="" class="mt-3">
            <button type="button" class="btn btn-primary" onclick="saveEditedProduct()">Save Changes</button>
        </form>
    </form>
    </div>


</div>
</div>
        


<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>

</body>
</html>
