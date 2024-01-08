$(document).ready(function () {
    var cart = [];

    function addToCart(productId, productName, price) {
        var item = {
            id: productId,
            name: productName,
            price: price,
            quantity: 1
        };

        var existingItem = cart.find(item => item.id === productId);

        if (existingItem) {
            existingItem.quantity++;
        } else {
            cart.push(item);
        }

        updateCartDisplay();
    }

    function updateCartDisplay() {
        var cartContent = $('#cart-content');
        cartContent.empty();

        if (cart.length === 0) {
            cartContent.append('<p>Your cart is empty</p>');
        } else {
            var total = 0;
            cart.forEach(item => {
                var subtotal = item.price * item.quantity;
                total += subtotal;

                cartContent.append(`
                  <div class="cart-item">
                      <p>${item.name} x ${item.quantity}</p>
                      <p>Subtotal: $${subtotal.toFixed(2)}</p>
                      <button class="remove-item" data-id="${item.id}">Remove</button>
                  </div>
              `);
            });

            cartContent.append(`
              <hr>
              <p class="total">Total: $${total.toFixed(2)}</p>
          `);

            $('.remove-item').click(function () {
                var itemId = $(this).data('id');
                removeFromCart(itemId);
            });
        }
    }

    function removeFromCart(productId) {
        cart = cart.filter(item => item.id !== productId);
        updateCartDisplay();
    }

    $('.add-to-cart').click(function () {
        var productId = $(this).data('id');
        var productName = $(this).data('name');
        var price = parseFloat($(this).data('price'));
        addToCart(productId, productName, price);
    });
});