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

?>

<div class="custom-pricing-form">
    <!-- Display the form for room customization -->
    <div id="rooms-container">
        <div class="room">
            <label for="room-name">Room Name:</label>
            <input type="text" name="room-name" class="room-name" required>

            <label for="room-width">Room Width (cm):</label>
            <input type="number" name="room-width" class="room-width" required>

            <label for="room-height">Room Height (cm):</label>
            <input type="number" name="room-height" class="room-height" required>

       <label>Curtain Type:</label>
<div class="curtain-type">
    <input type="radio" name="curtain-type-0" class="curtain-type-radio" value="pinch-pleat" required>
    <label>Pinch Pleat</label>

    <input type="radio" name="curtain-type-0" class="curtain-type-radio" value="eyelet" required>
    <label>Eyelet</label>

    <input type="radio" name="curtain-type-0" class="curtain-type-radio" value="pencil-pleat" required>
    <label>Pencil Pleat</label>
</div>

          <label>Control Type:</label>
<div class="control-type">
    <input type="radio" name="control-type-0" class="control-type-radio" value="chains" required>
    <label>Chains</label>

    <input type="radio" name="control-type-0" class="control-type-radio" value="remote-france" required>
    <label>Remote - France (Adds +145 to the total price)</label>

    <input type="radio" name="control-type-0" class="control-type-radio" value="remote-china" required>
    <label>Remote - China (Adds +90 to the total price)</label>
</div>
            <button type="button" class="delete-room">Delete Room</button>
        </div>
    </div>

    <button type="button" id="add-room">Add Room</button>
    <button type="button" id="calculate-price">Calculate Price</button>

    <div id="price-display">
        <p>Total Price: <span id="total-price">0</span></p>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        
        function calculatePrice() {
            // Get values from all rooms
            var rooms = document.querySelectorAll('.room');
            var totalPrice = 0;
            var roomItreate = 0;
            rooms.forEach(function (room) {
        var roomWidth = parseFloat(room.querySelector('.room-width').value);
            var roomHeight = parseFloat(room.querySelector('.room-height').value);
            var curtainType = room.querySelector('.curtain-type-radio:checked').value;
            var controlType = room.querySelector('.control-type-radio:checked').value;


               // Calculate the price for each room
            var basePrice = calculateBasePrice(roomWidth, roomHeight);
            var additionalPrice = calculateAdditionalPrice(controlType);
            var roomPrice = basePrice + additionalPrice;


                // Add the room price to the total
                totalPrice += roomPrice;

                room.querySelector('.room-width').addEventListener('input', calculatePrice);
                room.querySelector('.room-height').addEventListener('input', calculatePrice);
                room.querySelector('input[name="control-type-'+roomItreate+'"]').addEventListener('change', calculatePrice);

                roomItreate++;

            });

            // Update the displayed total price
            document.getElementById('total-price').textContent = totalPrice.toFixed(2);
        }

        function calculateBasePrice(width, height) {
            // Implement your base price calculation logic here
            var basePricePerCm = 0.10;
            return width * height * basePricePerCm;
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
            var newRoom = templateRoom.cloneNode(true);

            // Clear input values in the new room
            newRoom.querySelectorAll('input[type="text"], input[type="number"]').forEach(function (input) {
                input.value = '';
            });

            newRoom.querySelectorAll('.curtain-type input[type="radio"]').forEach((box)=>{
                box.name = 'curtain-type-'+roomCount;
                 box.checked = false;
            })

            newRoom.querySelectorAll('.control-type input[type="radio"]').forEach((box)=>{
                box.name = 'control-type-'+roomCount;
                box.checked = false;
            })



            // Add the new room to the container
            document.getElementById('rooms-container').appendChild(newRoom);

            // Attach event listener for the delete room button
            newRoom.querySelector('.delete-room').addEventListener('click', deleteRoom);


            newRoom.querySelector('.room-width').addEventListener('input', calculatePrice);
            newRoom.querySelector('.room-height').addEventListener('input', calculatePrice);
            newRoom.querySelector('input[name="control-type"]').addEventListener('change', calculatePrice);

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
        document.getElementById('calculate-price').addEventListener('click', calculatePrice);

        document.querySelectorAll('.delete-room').forEach(function (deleteButton) {
        deleteButton.addEventListener('click', deleteRoom);
    });

        
    });
    
</script>
