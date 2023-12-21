
$(document).ready(function() {
    // Initial load of product list
    loadProductList();

    // Function to add a new product
    window.addProduct = function() {
        var productName = $('#productName').val();
        var unit = $('#unit').val();
        var price = $('#price').val();
        var expiryDate = $('#expiryDate').val();
        var inventory = $('#inventory').val();
        var productImage = $('#productImage').val();

        $.ajax({
            type: 'POST',
            url: 'add_product.php',
            data: {
                productName: productName,
                unit: unit,
                price: price,
                expiryDate: expiryDate,
                inventory: inventory,
                productImage: productImage
            },
            success: function(response) {
                alert(response); 
                loadProductList(); 
                resetForm();
            }
        });
    };

    // Function to load product list
    function loadProductList() {
        $.ajax({
            type: 'GET',
            url: 'get_products.php',
            success: function(response) {
                $('#productTableBody').html(response);
            }
        });
    }

    // Function to reset the form
    function resetForm() {
        $('#productForm')[0].reset();
    }

    // Function to delete a product
    window.deleteProduct = function(productId) {
        var confirmDelete = confirm("Are you sure you want to delete this product?");
        
        if (confirmDelete) {
            $.ajax({
                type: 'POST',
                url: 'delete_product.php',
                data: { id: productId },
                success: function(response) {
                    alert(response); // Show success or error message
                    loadProductList(); // Reload the product list
                }
            });
        }
    };



   

// Function to open the edit modal
window.openEditModal = function(productId, productName, unit, price, expiryDate, inventory, productImage) {
    $('#editProductId').val(productId);
    $('#editProductName').val(productName);
    $('#editUnit').val(unit);
    $('#editPrice').val(price);
    $('#editExpiryDate').val(expiryDate);
    $('#editInventory').val(inventory);
    $('#editProductImage').val(productImage);

    // Display the edit modal
    $('#editProductModal').css('display', 'block');
};

// Function to close the edit modal
window.closeEditModal = function() {
    $('#editProductModal').css('display', 'none');
};

// Function to save edited product details
window.saveEditedProduct = function() {
    var productId = $('#editProductId').val();
    var productName = $('#editProductName').val();
    var unit = $('#editUnit').val();
    var price = $('#editPrice').val();
    var expiryDate = $('#editExpiryDate').val();
    var inventory = $('#editInventory').val();
    var productImage = $('#editProductImage').val();

    $.ajax({
        type: 'POST',
        url: 'update_product.php',
        data: {
            id: productId,
            productName: productName,
            unit: unit,
            price: price,
            expiryDate: expiryDate,
            inventory: inventory,
            productImage: productImage
        },
        success: function(response) {
            alert(response); 
            closeEditModal(); 
            loadProductList(); 
        }
    });
};




});
