<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            
            $('#registrationForm').submit(function(e) {
                e.preventDefault(); // Prevent form submission

        
                var name = $('#name').val().trim();
                if (!/^[A-Za-z\s]+$/.test(name)) {
                    alert('Please enter alphabetic characters only for Name.');
                    return;
                }


                var email = $('#email').val().trim();
                if (!/\S+@\S+\.\S+/.test(email)) {
                    alert('Please enter a valid email address.');
                    return;
                }


                var phone = $('#phone').val().trim();
                if (!/^\d{7,12}$/.test(phone)) {
                    alert('Phone number must be between 7 to 12 digits.');
                    return;
                }

        
                var captcha = $('#captcha').val().trim();
                

                
                this.submit();
            });
        });
    </script>
</head>
<body>
    <h2>User Registration Form</h2>
    <form id="registrationForm" action="{{ route('user.store') }}" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{7,12}" required>
            <small></small>
        </div>
        <div>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
        </div>
        <div>
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>
        </div>
        <div>
            <label for="captcha">Captcha:</label>
            <input type="text" id="captcha" name="captcha" required>

        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
