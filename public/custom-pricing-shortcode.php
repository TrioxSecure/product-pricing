<?php

/**
 * Template for the custom pricing shortcode.
 */

// Check if the shortcode attributes are set
$atts = shortcode_atts(
    array(
        // Define shortcode attributes if needed
    ),
    $atts,
    'custom_pricing'
);

// Extract attributes if needed
// $attribute_example = $atts['example_attribute'];

function enqueue_google_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts');


?>

<div class="custom-pricing-form">
   <!-- Display the form for room customization -->
    <div id="rooms-container" class="main-pricing-container">  
        <div class="room">
        <h3 class="tag-line-1">1 - Give your room a name and enter the dimensions of the curtains</h3>
        <div class="parent">
            <div class="child-1">
                <label for="room-name">Room <span class="text-star">*</span></label>
                <input type="text" name="room-name" class="room-name input-style" required>
            </div>
            <div class="child-1">
                <label for="room-width" class="">Width (cm) <span class="text-danger">*</span></label>
                <input type="number" name="room-width" class="room-width input-style" required>
            </div>
            <div class="child-1">
                <label for="room-height">Height (cm) <span class="text-star">*</span></label>
                <input type="number" name="room-height" class="room-height input-style" required>
            </div>
        </div>
        <h3 class="tag-line-1">2 - What should the heading of your curtains look like?</h3>
        <div class="parent">
            <div class="child">
                <div class="radio-main">
                    <div class="radio-main-child">
                        <div class="radio-div">
                            <div class="img-div">
                                <img src="<?php echo CUSTOM_PRICING_PLUGIN_URL . 'public/img/pinch pleat.png' ?>" class="img" alt="" width="40">
                            </div>
                            <div class="radio-label-div">
                                <div class="radio-div">
                                    Pinch Pleat
                                </div>
                            </div>
                            <div class="curtain-type">
                                <input type="radio" class="radio-button curtain-type-radio" name="curtain-type-0" value="pinch-pleat" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="child">
                <div class="radio-main">
                <div class="radio-main-child">
                    <div class="radio-div">
                        <div class="img-div">
                            <img src="<?php echo CUSTOM_PRICING_PLUGIN_URL . 'public/img/eyelet.png' ?>" alt="" class="img" width="40">
                        </div>
                        <div class="radio-label-div">
                            <div class="radio-div">
                                Eyelet
                            </div>
                        </div>
                        <div class="curtain-type">
                            <input type="radio" class="radio-button curtain-type-radio" name="curtain-type-0" value="eyelet" required />
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="child">
                <div class="radio-main">
                <div class="radio-main-child">
                    <div class="radio-div">
                        <div class="img-div">
                            <img src="<?php echo CUSTOM_PRICING_PLUGIN_URL . 'public/img/eyelet.png' ?>" alt="" class="img" width="40">
                        </div>
                        <div class="radio-label-div">
                            <div class="radio-div">
                                Pencil Pleat
                            </div>
                        </div>
                        <div class="curtain-type">
                            <input type="radio" class="radio-button curtain-type-radio" name="curtain-type-0" value="pencil-pleat" required />
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="tag-line-1">3 - How do you want to use your curtains?</h3>
        <div class="parent">
            <div class="child">
                <div class="radio-main">
                <div class="radio-main-child">
                    <div class="radio-div">
                        <div class="img-div">
                            <img src="<?php echo CUSTOM_PRICING_PLUGIN_URL . 'public/img/Chain_c0d593e52c.png' ?>" alt="" class="img" width="40">
                        </div>
                        <div class="radio-label-div">
                            <div class="radio-div">
                                Chain<br>+0.000 KD
                            </div>
                        </div>
                        <div class="control-type">
                            <input type="radio" class="radio-button control-type-radio" name="control-type-0" value="chains" required />
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="child">
                <div class="radio-main">
                <div class="radio-main-child">
                    <div class="radio-div">
                        <div class="img-div">
                            <img src="<?php echo CUSTOM_PRICING_PLUGIN_URL . 'public/img/Remour_France_91177211cc.png' ?>" alt="" class="img" width="40">
                        </div>
                        <div class="radio-label-div">
                            <div class="radio-div">
                                Remote - France<br>+145.000 KD
                            </div>
                        </div>
                        <div class="control-type">
                            <input type="radio" class="radio-button control-type-radio" name="control-type-0" value="remote-france" required />
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="child">
                <div class="radio-main">
                <div class="radio-main-child">
                    <div class="radio-div">
                        <div class="img-div">
                            <img src="<?php echo CUSTOM_PRICING_PLUGIN_URL . 'public/img/Remote_China_67def91d42.png' ?>" alt=""  class="img" width="40">
                        </div>
                        <div class="radio-label-div">
                            <div class="radio-div">
                                Remote - China<br>+90.000 KD
                            </div>
                        </div>
                        <div class="control-type">
                            <input type="radio" class="radio-button control-type-radio" name="control-type-0" value="remote-china" required />
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
       
        <button type="button" class="delete-room d-none">Delete Room</button>
    </div>
     
   </div>
   <button type="button" class="another-room" id="add-room">+ Add another room</button>
</div>
<button type="submit" class="product-buy-optionsstyle__AddToCartButton-sc-g9crhl-6 jbmSej">
        <div class="product-buy-optionsstyle__TextWrapper-sc-g9crhl-9 UxwvS" bis_skin_checked="1">
            <div class="product-buy-optionsstyle__Item-sc-g9crhl-10 iSIoed" bis_skin_checked="1">
                <div class="product-buy-optionsstyle__SubItem-sc-g9crhl-11 jfGMXc" bis_skin_checked="1">
                    Total Price
                </div>
                <div class="product-buy-optionsstyle__SubItem-sc-g9crhl-11 jfGMXc" bis_skin_checked="1" id="total-price">
                    0.000 KD
                </div>
            </div>
            <div class="product-buy-optionsstyle__Item-sc-g9crhl-10 iSIoed d-none d-sm-none d-md-block"
                bis_skin_checked="1">
                <div class="product-buy-optionsstyle__SubText-sc-g9crhl-5 ldzrCR" bis_skin_checked="1">
                    Including everything
                </div>
            </div>
        </div>
        <div class="product-buy-optionsstyle__TextWrapper-sc-g9crhl-9 UxwvS" bis_skin_checked="1">
            <div class="product-buy-optionsstyle__Item-sc-g9crhl-10 iSIoed" bis_skin_checked="1">
                <div class="product-buy-optionsstyle__SubItem-sc-g9crhl-11 jfGMXc" bis_skin_checked="1">
                    Delivery Time
                </div>
                <div class="product-buy-optionsstyle__SubItem-sc-g9crhl-11 jfGMXc" bis_skin_checked="1">
                    14-21 Days
                </div>
            </div>
            <div class="product-buy-optionsstyle__Item-sc-g9crhl-10 iSIoed d-none d-sm-none d-md-block"
                bis_skin_checked="1">
                <div class="product-buy-optionsstyle__SubText-sc-g9crhl-5 ldzrCR" bis_skin_checked="1">
                    Including installation
                </div>
            </div>
        </div>
        <div class="product-buy-optionsstyle__TextWrapper-sc-g9crhl-9 UxwvS" bis_skin_checked="1">
            <h3 class="product-buy-optionsstyle__AddToCartText-sc-g9crhl-7 llFwhN">
                Add to Cart<span class="product-buy-optionsstyle__AddToCartIcon-sc-g9crhl-8 EhiTg"><svg
                        id="Icon_feather-shopping-cart" data-name="Icon feather-shopping-cart"
                        xmlns="http://www.w3.org/2000/svg" width="23.237" height="22.317" viewBox="0 0 23.237 22.317">
                        <path id="Path_1" data-name="Path 1"
                            d="M13.748,30.874A.874.874,0,1,1,12.874,30,.874.874,0,0,1,13.748,30.874Z"
                            transform="translate(-4.029 -10.931)" fill="none" stroke="white" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="3"></path>
                        <path id="Path_2" data-name="Path 2"
                            d="M30.248,30.874A.874.874,0,1,1,29.374,30,.874.874,0,0,1,30.248,30.874Z"
                            transform="translate(-10.259 -10.931)" fill="none" stroke="white" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="3"></path>
                        <path id="Path_3" data-name="Path 3"
                            d="M1.5,1.5H5.179L7.645,14.063a1.848,1.848,0,0,0,1.84,1.511h8.941a1.848,1.848,0,0,0,1.84-1.511l1.472-7.872H6.1"
                            transform="translate(0 0)" fill="none" stroke="white" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="3"></path>
                    </svg>
                </span>
            </h3>
        </div>
    </button>
</div>

<script>
     document.addEventListener('DOMContentLoaded', function() {
    
        // ... (your existing JavaScript code)

        function calculateBasePrice(width, height) {
            // Constants
            var pleatValue = <?php echo (get_option('pleat_value', 2)); ?>;
            var rollWidthSize = <?php echo (get_option('roll_width_size', 280)); ?>;
            var increaseInRawMaterial = <?php echo (get_option('increase_in_raw_material', 30)); ?>;
            var priceOfOneMeter = <?php echo (get_option('price_of_one_meter', 20)); ?>;

            // Calculate the quantity of fabric used
            var fabricQuantity = width * pleatValue / rollWidthSize * height + increaseInRawMaterial;

            // Calculate the final total for the customer
            var finalTotal = fabricQuantity * priceOfOneMeter / 100;

            return finalTotal;
        }

     function calculatePrice() {
    var rooms = document.querySelectorAll('.room');
    var totalPrice = 0;
    var roomItreate = 0;

    rooms.forEach(function(room) {
        var roomWidth = parseFloat(room.querySelector('.room-width').value) || 0;
        
        // Ensure the minimum height considered is 200 cm
        var roomHeight = Math.max(parseFloat(room.querySelector('.room-height').value) || 200, 200);

        var curtainType = room.querySelector('.curtain-type-radio:checked') ? room.querySelector('.curtain-type-radio:checked').value : 'pinch-pleat';
        var controlType = room.querySelector('.control-type-radio:checked') ? room.querySelector('.control-type-radio:checked').value : 'chains';

        // Calculate the price for each room
        var basePrice = calculateBasePrice(roomWidth, roomHeight);
        var additionalPrice = calculateAdditionalPrice(controlType);
        var roomPrice = basePrice + additionalPrice;

        totalPrice += roomPrice;

        room.querySelector('.room-width').addEventListener('input', calculatePrice);
        room.querySelector('.room-height').addEventListener('input', calculatePrice);
        room.querySelector('input[name="control-type-' + roomItreate + '"]').addEventListener('change', calculatePrice);

        roomItreate++;
    });

    document.getElementById('total-price').textContent = totalPrice.toFixed(2);
}


     

        function calculateAdditionalPrice(controlType) {
            // Implement your additional price calculation logic here
            if (controlType === 'remote-france') {
                return 145;
            } else if (controlType === 'remote-china') {
                return 90;
            } else {
                return 0;
            }
        }

        function addRoom() {
            // Clone the template room
            var templateRoom = document.querySelector('.room');

            let roomCount = document.querySelectorAll(".room").length;
            console.log(roomCount)
            var newRoom = templateRoom.cloneNode(true);

            newRoom.querySelector(".delete-room").classList.remove("d-none")
            // Clear input values in the new room
            newRoom.querySelectorAll('input[type="text"], input[type="number"]').forEach(function(input) {
                input.value = '';
            });

            newRoom.querySelectorAll('.curtain-type input[type="radio"]').forEach((box) => {
                box.name = 'curtain-type-' + roomCount;
                box.checked = false;
            })

            newRoom.querySelectorAll('.control-type input[type="radio"]').forEach((box) => {
                box.name = 'control-type-' + roomCount;
                box.checked = false;
            })



            // Add the new room to the container
            document.getElementById('rooms-container').appendChild(newRoom);

            // Attach event listener for the delete room button
            newRoom.querySelector('.delete-room').addEventListener('click', deleteRoom);

            


           

             newRoom.querySelectorAll('input[type="radio"]').forEach(element => {
            element.addEventListener('change', calculatePrice);
        });

        newRoom.querySelectorAll('.room-width').forEach(element => {
            element.addEventListener('input', calculatePrice);
        });

        
        newRoom.querySelectorAll('.room-height').forEach(element => {
            element.addEventListener('input', calculatePrice);
        });

            // Recalculate the price when a new room is added
            calculatePrice();
        }

        function deleteRoom(event) {
            // Remove the parent room when the delete button is clicked
            var roomToDelete = event.target.closest('.room');
            roomToDelete.remove();

            // Recalculate the price when a room is deleted
            calculatePrice();
        }

        document.getElementById('add-room').addEventListener('click', addRoom);
        document.querySelectorAll('input[type="radio"]').forEach(element => {
            element.addEventListener('change', calculatePrice);
        });

        document.querySelectorAll('.room-width').forEach(element => {
            element.addEventListener('input', calculatePrice);
        });

        
        document.querySelectorAll('.room-height').forEach(element => {
            element.addEventListener('input', calculatePrice);
        });


        document.querySelectorAll('.delete-room').forEach(function(deleteButton) {
            deleteButton.addEventListener('click', deleteRoom);
        });

   

    function addToCart(roomDetails, totalPrice) {
        // Create an array of items to add to the cart
        var itemsToAdd = [];

        roomDetails.forEach(function (room) {
            var itemName = 'Room ' + room.roomIndex; // Customize the item name as needed
            var item = {
                id: room.roomIndex, // Use a unique identifier for each item
                name: itemName,
                price: room.roomPrice,
                quantity: 1, // You can adjust the quantity as needed
                data: {
                    roomWidth: room.roomWidth,
                    roomHeight: room.roomHeight,
                    curtainType: room.curtainType,
                    controlType: room.controlType,
                }
            };
            itemsToAdd.push(item);
        });

        // Add items to the cart using the WooCommerce function
        itemsToAdd.forEach(function (item) {
            jQuery.ajax({
                type: 'POST',
                url: wc_add_to_cart_params.ajax_url,
                data: {
                    action: 'add_cart_item_data',
                    item_data: item,
                },
                success: function (response) {
                    // Handle success if needed
                },
            });
        });

        // Add the total price to the order notes
        var orderNotes = 'Room Details:\n';
        roomDetails.forEach(function (room) {
            orderNotes += `
                Room ${room.roomIndex}:
                - Width: ${room.roomWidth} cm
                - Height: ${room.roomHeight} cm
                - Curtain Type: ${room.curtainType}
                - Control Type: ${room.controlType}
                - Price: ${room.roomPrice} KD\n\n`;
        });
        orderNotes += `Total Price: ${totalPrice.toFixed(2)} KD`;

        // Update the order notes in the WooCommerce cart
        jQuery.ajax({
            type: 'POST',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'update_order_notes',
                order_notes: orderNotes,
            },
            success: function (response) {
                // Handle success if needed
            },
        });
    }

    // Attach the addToCart function to the "Add to Cart" button click event
    document.querySelector('.product-buy-optionsstyle__AddToCartButton-sc-g9crhl-6').addEventListener('click', function () {
        var totalPrice = parseFloat(document.getElementById('total-price').textContent) || 0;
        var roomDetails = captureRoomDetails();

        // Call the addToCart function with the captured details and total price
        addToCart(roomDetails, totalPrice);
    });

    // ... (your existing JavaScript code)
});



</script>