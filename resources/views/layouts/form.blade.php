<link rel="stylesheet" href="css/bookingform.css">
<link rel="stylesheet" href="js/bookingform.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<div class="booking-form-container">
    <form action="">
      <h1>Booking Form</h1>
      <div class="d-flex">
        <div>
          <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20}
            required>
        </div>
        <div>
          <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20}
            required>
        </div>
      </div>
      <div>
        <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
      </div>
      <div>
        <input type="tel" id="phone" name="visitor_phone" placeholder="498-348-3872" required class="intl-tel-input">

      </div>
      <div class="d-flex">
        <div>
          <input type="date" id="checkin-date" name="checkin" required>
          <span id="date-warning" class="warning-message"></span>
        </div>
        <div class="elem-group inlined">
          <select name="session" required>
            <option value="">Select Session Start Time</option>
            <option value="07:00">7:00 AM</option>
            <option value="09:00">9:00 AM</option>
            <option value="11:00">11:00 AM</option>
            <!-- Add more options for each session time -->
          </select>
        </div>
      </div>
      <div>
        <input type="number" name="room_quantity" id="room-quantity" required>
      </div>
      <div class="d-flex">
        <button class="add-to-cart-btn">
            <span>Add To Cart</span>
        </button>
    </div>
    </form>
  </div>
  