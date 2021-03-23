<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/booking.css')}}">
    <title>Booking Process</title>
</head>
<body>
    <div class="boooking-container">
        <div class="room-container">
            <select name="choice">
                <option value="first" selected>Rooms</option>
                <option value="second">room no 1</option>
                <option value="third">room no 3</option>
                <option value="fourth">room no 4</option>
                <option value="fifth">room no 5</option>
                <option value="sixth">room no 6</option>
            </select>
        </div>
        <div class="checkinn-container">
            <h5>Check-In</h5>
            <input id="cal" type="date">
        </div>
        <div class="checkoutt-container">
            <h5>Check-Out</h5>
            <input id="cal" type="date">
        </div>
        <button class="bookbtn">Reserve</button>
    </div>
</body>
</html>