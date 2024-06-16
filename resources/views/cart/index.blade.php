<x-guestUser title="Cart" :user="$user">
    <x-card>
        <x-slot name="title">Cart</x-slot>
        <x-slot name="subtitle">
            YOUR SHOPPING CART
            <br>
            TOTAL ITEMS: <span id="total-items">0</span>
            <br>
            TOTAL PRICE: $<span id="total-price">0.00</span>
        </x-slot>
        <div class="container mt-3">
            <h2>Items in Cart</h2>
            <ul id="cart-items">
                @foreach ($cart->content as $content)
                    <li id="cart-item-{{ $content->item_id }}">
                        {{ $content->item->name }} - Price: ${{ number_format($content->item->price, 2) }} 
                        <!-- Decrease button -->
                        <button class="decrease" data-id="{{ $content->item_id }}" data-price="{{ $content->item->price }}">
                            Decrease
                        </button>
                        <span id="item-quantity-{{ $content->item_id }}" class="quantity">Quantity: {{ $content->item_count }}</span>
                        <!-- Increase button -->
                        <button class="increase" data-id="{{ $content->item_id }}" data-price="{{ $content->item->price }}">
                            Increase
                        </button>
                    </li>
                @endforeach
            </ul>
            <h2>All Available Items</h2>
            <ul>
                @foreach ($items as $item)
                    <li>
                        {{ $item->name }} - Price: ${{ number_format($item->price, 2) }}
                        <button class="add-to-cart" data-id="{{ $item->id }}" data-name="{{ $item->name }}" data-price="{{ $item->price }}">
                            Add to Cart
                        </button>
                    </li>
                @endforeach
            </ul>

            <!-- Submit button to save changes -->
            <form id="cart-form" method="POST" action="{{ route('cart.save') }}">
                @csrf
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </x-card>
</x-guestUser>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var totalItemsElement = document.getElementById('total-items');
        var totalPriceElement = document.getElementById('total-price');
        function updateTotals() {
            var totalItems = 0;
            var totalPrice = 0;
            // Calculate total items and total price from cart items
            document.querySelectorAll('#cart-items li').forEach(function(item) {
                var quantity = parseInt(item.querySelector('.quantity').textContent.split(' ')[1]);
                var price = parseFloat(item.textContent.match(/\$\d+\.\d+/)[0].replace('$', ''));
                totalItems += quantity;
                totalPrice += quantity * price;
            });
            totalItemsElement.textContent = totalItems;
            totalPriceElement.textContent = totalPrice.toFixed(2);
        }
        function decreaseItemQuantity(itemId, itemPrice) {
            var quantityElement = document.getElementById('item-quantity-' + itemId);
            var currentQuantity = parseInt(quantityElement.textContent.split(' ')[1]);
            if (currentQuantity > 1) {
                quantityElement.textContent = 'Quantity: ' + (currentQuantity - 1);
                updateTotals();
            } else {
                // Ask for confirmation before removing the item
                if (confirm('Are you sure you want to remove this item from your cart?')) {
                    var listItem = document.getElementById('cart-item-' + itemId);
                    listItem.parentNode.removeChild(listItem);
                    updateTotals();
                }
            }
        }
        function increaseItemQuantity(itemId, itemPrice) {
            var quantityElement = document.getElementById('item-quantity-' + itemId);
            quantityElement.textContent = 'Quantity: ' + (parseInt(quantityElement.textContent.split(' ')[1]) + 1);
            updateTotals();
        }
        document.querySelectorAll('.decrease').forEach(function(button) {
            button.addEventListener('click', function() {
                var itemId = this.dataset.id;
                var itemPrice = parseFloat(this.dataset.price);
                decreaseItemQuantity(itemId, itemPrice);
            });
        });
        document.querySelectorAll('.add-to-cart').forEach(function(button) {
            button.addEventListener('click', function() {
                var itemId = this.dataset.id;
                var itemName = this.dataset.name;
                var itemPrice = parseFloat(this.dataset.price);
                // Check if item already exists in cart
                var existingCartItem = document.getElementById('cart-item-' + itemId);
                if (existingCartItem) {
                    var quantityElement = existingCartItem.querySelector('.quantity');
                    var currentQuantity = parseInt(quantityElement.textContent.split(' ')[1]);
                    quantityElement.textContent = 'Quantity: ' + (currentQuantity + 1);
                } else {
                    // Add event listeners for decrease button
                    listItem.querySelector('.decrease').addEventListener('click', function() {
                        decreaseItemQuantity(itemId, itemPrice);
                    });
                    // Simulate adding item to cart (for demonstration purposes)
                    var listItem = document.createElement('li');
                    listItem.id = 'cart-item-' + itemId;
                    listItem.innerHTML = `
                        <button class="decrease" data-id="${itemId}" data-price="${itemPrice}">
                            Decrease
                        </button>
                        ${itemName} - Price: $${itemPrice.toFixed(2)} 
                        <span id="item-quantity-${itemId}" class="quantity">Quantity: 1</span>
                        <button class="increase" data-id="${itemId}" data-price="${itemPrice}">
                            Increase
                        </button>
                    `;
                    // Add event listeners for increase button
                    listItem.querySelector('.increase').addEventListener('click', function() {
                        increaseItemQuantity(itemId, itemPrice);
                    });
                    // Append the new item to the cart
                    document.getElementById('cart-items').appendChild(listItem);
                }
                // Update total items and total price
                updateTotals();
            });
        });
        document.querySelectorAll('.increase').forEach(function(button) {
            button.addEventListener('click', function() {
                var itemId = this.dataset.id;
                var itemPrice = parseFloat(this.dataset.price);
                increaseItemQuantity(itemId, itemPrice);
            });
        });
        // Initial update of totals based on current cart items
        updateTotals();
    });
</script>