<x-guestUser title="Shop" :user="$user">
    <div class="card border-0 overflow-hidden shadow rounded-20 mb-5 mx-5">
        <div class="card-header"></div>
        <div class="card-body my-3">
            <h6 class="card-title-sm">
                YOUR SHOPPING CART
                <br>
                TOTAL ITEMS: <span id="total-items">0</span>
                <br>
                TOTAL PRICE: $<span id="total-price">0.00</span>
            </h6>
            <div class="divider"></div>
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

                <h1 class="text-center title-gradient">Items in Cart</h1>
                <div class="table-responsive py-2">
                    <table class="table table-sm table-striped no-footer" >
                        <tbody id=cart-items>
                            @foreach ($cart->content as $content)
                                {{-- <tr id="cart-item-{{ $content->item_id }}">
                                    <td class='align-middle text-center button-text'>{{ $content->item->name }}</td>
                                    <td class='align-middle text-center button-text'>{{ $content->item->price, 2 }}</td>
                                    <td class='align-middle text-center button-text quantity' id="item-quantity-{{ $content->item_id }}">Quantity: {{ $content->item_count }}</td>
                                    <td class='d-flex justify-content-evenly p-2'>
                                        <button type="button" class="btn btn-warning button-text decrease" data-id="{{ $content->item_id }}" data-price="{{ $content->item->price }}">
                                            Decrease
                                        </button>
                                        <!-- Increase button -->
                                        <button type="button" class="btn btn-info button-text increase" data-id="{{ $content->item_id }}" data-price="{{ $content->item->price }}">
                                            Increase
                                        </button>
                                    </td>
                                </tr> --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <hr>
                <!-- Submit button to save changes -->
                <div class="container text-center">
                    <button id="save-changes-btn" type="button" class="btn btn-success custom-button w-25">Save Changes</button>
                    <form id="cart-form" method="POST" action="{{ route('items.save') }}" style="display: none;">
                        @csrf
                        <input type="hidden" id="cart-items-input" name="items">
                        <input type="hidden" id="total-items-input" name="total_items">
                        <input type="hidden" id="total-price-input" name="total_price">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 overflow-hidden shadow rounded-20 mb-5 mx-5">
        <div class="card-header bg-dark-green-blue"></div>
        <div class="card-body mb-3">
            <div class="container mt-3">
                <h1 class="text-center title-gradient mb-5">SHOP</h1>
                @if ($items)
                    @foreach ($items->chunk(4) as $chunk)
                        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4 d-flex justify-content-center align-items-center">
                            @foreach ($chunk as $item)
                            <div class="col mb-4 d-flex justify-content-center align-items-center">
                                <div class="card w-100 text-center">
                                    <div class="card-body text-center">
                                        <div class="card-title"><h2 class="text-gradient">{{ $item->name }}</h2></div>
                                        <div class="card-text data-text">{{ $item->price }}</div>
                                        <div class="card-text data-text">{{ $item->itemCategory->name}}</div>
                                        <hr>
                                        <button type="button" class="btn btn-primary add-to-cart" data-id="{{ $item->id }}" data-name="{{ $item->name }}" data-price="{{ $item->price }}">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endforeach
                @else
                    <p class="text-center"> We are very sorry for the inconvenience, but we currently do not have any data</p>
                @endif
        </div>
    </div>

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

                    var listItem = document.createElement('tr');
                    listItem.id = 'cart-item-' + itemId;
                    listItem.innerHTML = `
                        <td class='align-middle text-center button-text'>${itemName}</td>
                        <td class='align-middle text-center button-text'>${itemPrice.toFixed(2)}</td>
                        <td class='align-middle text-center button-text quantity' id="item-quantity-${itemId}">Quantity: 1</td>
                        <td class='d-flex justify-content-evenly p-2'>
                            <button type="button" class="btn btn-warning button-text decrease" data-id="${itemId}" data-price="${itemPrice}">
                                Decrease
                            </button>
                            <!-- Increase button -->
                            <button type="button" class="btn btn-info button-text increase" data-id="${itemId}" data-price="${itemPrice}">
                                Increase
                            </button>
                        </td>
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
