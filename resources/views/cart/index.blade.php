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
            @if(session()->has('success'))
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <h2>Items in Cart</h2>
            <ul id="cart-items">
                @foreach ($cart->content as $content)
                    <li id="cart-item-{{ $content->item_id }}">
                        {{ $content->item->name }} - Price: ${{ number_format($content->item->price, 2) }}
                        <!-- Decrease button -->
                        <button type="button" class="decrease" data-id="{{ $content->item_id }}" data-price="{{ $content->item->price }}">
                            Decrease
                        </button>
                        <span id="item-quantity-{{ $content->item_id }}" class="quantity">Quantity: {{ $content->item_count }}</span>
                        <!-- Increase button -->
                        <button type="button" class="increase" data-id="{{ $content->item_id }}" data-price="{{ $content->item->price }}">
                            Increase
                        </button>
                    </li>
                @endforeach
            </ul>
            <hr>
            <h2>All Available Items</h2>
            <ul>
                @foreach ($items as $item)
                    <li>
                        {{ $item->name }} - Price: ${{ number_format($item->price, 2) }}
                        <button type="button" class="add-to-cart" data-id="{{ $item->id }}" data-name="{{ $item->name }}" data-price="{{ $item->price }}">
                            Add to Cart
                        </button>
                    </li>
                @endforeach
            </ul>

            <!-- Submit button to save changes -->
            <button id="save-changes-btn" type="button" class="btn btn-primary">Save Changes</button>
            <form id="cart-form" method="POST" action="{{ route('cart.save') }}" style="display: none;">
                @csrf
                <input type="hidden" id="cart-items-input" name="items">
                <input type="hidden" id="total-items-input" name="total_items">
                <input type="hidden" id="total-price-input" name="total_price">
            </form>
        </div>
    </x-card>
</x-guestUser>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var totalItemsElement = document.getElementById('total-items');
        var totalPriceElement = document.getElementById('total-price');
        var cartItems = {}; // Object to keep track of cart items
        var totalItems = 0;
        var totalPrice = 0.00;

        // Initialize cartItems from existing cart
        @foreach ($cart->content as $content)
            cartItems[{{ $content->item_id }}] = {
                id: {{ $content->item_id }},
                name: '{{ $content->item->name }}',
                price: {{ $content->item->price }},
                quantity: {{ $content->item_count }}
            };
        @endforeach

        function updateTotals() {
            totalItems = 0;
            totalPrice = 0.00;

            for (var itemId in cartItems) {
                totalItems += cartItems[itemId].quantity;
                totalPrice += cartItems[itemId].quantity * cartItems[itemId].price;
            }

            totalItemsElement.textContent = totalItems;
            totalPriceElement.textContent = totalPrice.toFixed(2);
        }

        function decreaseItemQuantity(itemId) {
            if (cartItems[itemId].quantity > 1) {
                cartItems[itemId].quantity--;
                document.getElementById('item-quantity-' + itemId).textContent = 'Quantity: ' + cartItems[itemId].quantity;
                updateTotals();
            } else {
                if (confirm('Are you sure you want to remove this item from your cart?')) {
                    delete cartItems[itemId];
                    var listItem = document.getElementById('cart-item-' + itemId);
                    listItem.parentNode.removeChild(listItem);
                    updateTotals();
                }
            }
        }

        function increaseItemQuantity(itemId) {
            cartItems[itemId].quantity++;
            document.getElementById('item-quantity-' + itemId).textContent = 'Quantity: ' + cartItems[itemId].quantity;
            updateTotals();
        }

        document.querySelectorAll('.decrease').forEach(function(button) {
            button.addEventListener('click', function() {
                var itemId = this.dataset.id;
                decreaseItemQuantity(itemId);
            });
        });

        document.querySelectorAll('.add-to-cart').forEach(function(button) {
            button.addEventListener('click', function() {
                var itemId = this.dataset.id;
                var itemName = this.dataset.name;
                var itemPrice = parseFloat(this.dataset.price);

                if (cartItems[itemId]) {
                    increaseItemQuantity(itemId);
                } else {
                    cartItems[itemId] = {
                        id: itemId,
                        name: itemName,
                        price: itemPrice,
                        quantity: 1
                    };

                    var listItem = document.createElement('li');
                    listItem.id = 'cart-item-' + itemId;
                    listItem.innerHTML = `
                        ${itemName} - Price: $${itemPrice.toFixed(2)}
                        <button type="button" class="decrease" data-id="${itemId}" data-price="${itemPrice}">
                            Decrease
                        </button>
                        <span id="item-quantity-${itemId}" class="quantity">Quantity: 1</span>
                        <button type="button" class="increase" data-id="${itemId}" data-price="${itemPrice}">
                            Increase
                        </button>
                    `;

                    // Add event listeners for decrease and increase buttons
                    listItem.querySelector('.decrease').addEventListener('click', function() {
                        decreaseItemQuantity(itemId);
                    });

                    listItem.querySelector('.increase').addEventListener('click', function() {
                        increaseItemQuantity(itemId);
                    });

                    document.getElementById('cart-items').appendChild(listItem);
                }

                updateTotals();
            });
        });

        document.querySelectorAll('.increase').forEach(function(button) {
            button.addEventListener('click', function() {
                var itemId = this.dataset.id;
                increaseItemQuantity(itemId);
            });
        });

        // Save changes button click handler
        document.getElementById('save-changes-btn').addEventListener('click', function() {
            // Prepare data for submission
            var itemsArray = [];
            for (var itemId in cartItems) {
                itemsArray.push({
                    id: cartItems[itemId].id,
                    quantity: cartItems[itemId].quantity
                });
            }

            // Set form input values
            document.getElementById('cart-items-input').value = JSON.stringify(itemsArray);
            document.getElementById('total-items-input').value = totalItems;
            document.getElementById('total-price-input').value = totalPrice.toFixed(2);

            // Submit the form
            document.getElementById('cart-form').submit();
        });

        // Initial update of totals based on current cart items
        updateTotals();
    });
</script>
