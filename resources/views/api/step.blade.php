<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Forgot Password</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        /* Step Indicator Styles */
        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .step {
            width: 100px;
            height: 30px;
            background-color: lightgray;
            text-align: center;
            line-height: 30px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .step.active {
            background-color: dodgerblue;
            color: white;
        }

        /* Form Steps Container */
        .form-steps {
            position: relative;
        }

        /* Previous and Next Button Styles */
        .form-steps .prev-step,
        .form-steps .next-step {
            position: absolute;
            bottom: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-steps .prev-step {
            left: 20px;
            background-color: #ccc;
        }

        .form-steps .next-step {
            right: 20px;
            background-color: dodgerblue;
            color: white;
        }

        .form-steps .prev-step:hover,
        .form-steps .next-step:hover {
            opacity: 0.8;
        }

        /* Form Step Content */
        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        .form-step p {
            margin-bottom: 20px;
            font-size: 18px;
        }

        .form-step form {
            max-width: 300px;
            margin: 0 auto;
        }

        .form-step input[type="email"],
        .form-step input[type="number"],
        .form-step input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-step button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .form-step button:hover {
            background-color: #45a049; /* Darken the background color on hover */
        }
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            .form-steps .prev-step,
            .form-steps .next-step {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="step-indicator">
            <div id="step-1" class="step active">Step 1</div>
            <div id="step-2" class="step">Step 2</div>
            <div id="step-3" class="step">Step 3</div>
        </div>

        <div id="form-step-1" class="form-step active ">
            <p>Step 1: Enter your email and submit to receive OTP.</p>
                <input type="email" name="email" id="email" placeholder="Enter Your Email" >
                <button type="submit" class=" email-btn" id="next-step-1">Next Step</button>
                <span class="text text-danger" id="email-err"></span>
        </div>

        <div id="form-step-2" class="form-step">
            <p>Step 2: Enter the OTP received on your email.</p>
                <input type="number" name="otp" placeholder="Enter Your OTP" required>
                <button type="button" id="prev-step">Previous Step</button>
                <button type="submit" id="next-step">Next Step</button>
        </div>

        <div id="form-step-3" class="form-step">
            <p>Step 3: Create a new password for your account.</p>
                <input type="password" name="password" placeholder="Enter Your New Password" required>
                <input type="password" name="confirmation_password" placeholder="Confirm Your Password" required>
                <button type="button" id="prev-step">Previous Step</button>
                <button type="submit">Reset Password</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var currentStep = 1;

            // Next step button click
            $('#next-step-1').on('click', function(e) {
                    e.preventDefault();
                    var email = $('#email').val();
                    console.log(email);
                    if(email == null || email == undefined || email == ''){
                        $('#email-err').text('email must be required')
                        return
                    }
                    $.ajax({
                        type: "post",
                        url: "{{route('email_verify')}}",
                        data: {email:email, _token: '{{ csrf_token() }}'},
                        success: function (response) {
                            console.log(response.success)
                            if (response.success) {
                                currentStep++;
                                updateStep(currentStep); // Update step after successful verification
                            } else {
                                // Handle case where verification fails
                                $('#email-err').text('Email verification failed');
                            }
                        },
                        error: function (xhr, status, error) {
                         console.error(xhr.responseText);
                         $('#email-err').text(JSON.parse(xhr.responseText).error);
                         $('#email').val('');
                        }
                    });
                  
                 });
            $('#form-step-2 #next-step').click(function() {
                currentStep++;
                updateStep(currentStep);
            });

            // Previous step button click
            $('#form-step-2 #prev-step').click(function() {
                currentStep--;
                updateStep(currentStep);
            });

            $('#form-step-3 #prev-step').click(function() {
                currentStep--;
                updateStep(currentStep);
            });

            // Update step and step indicator
            function updateStep(step) {
                $('.step').removeClass('active');
                $('.step').eq(step - 1).addClass('active');

                $('.form-step').removeClass('active');
                $('#form-step-' + step).addClass('active');
            }
          
        });


//     $(document).ready(function() {
//     var currentStep = 1;

//     // Next step button click
//     $('#next-step-1').on('click', function(e) {
//         e.preventDefault();
//         var email = $('#email').val();
//         console.log(email);
//         if (email == null || email == undefined || email == '') {
//             $('#email-err').text('Email must be required');
//             return;
//         }
        
//         // Perform AJAX request for email verification
//         $.ajax({
//             type: "post",
//             url: "{{ route('email_verify') }}",
//             data: {email: email, _token: '{{ csrf_token() }}'},
//             dataType: "json", // Ensure correct dataType
//             success: function (response) {
//                 console.log(response.success);
//                 if (response.success) {
//                     currentStep++;
//                     updateStep(currentStep); // Update step after successful verification
//                 } else {
//                     // Handle case where verification fails
//                     $('#email-err').text('Email verification failed');
//                 }
//             },
//             error: function (xhr, status, error) {
//                 console.error(xhr.responseText);
//                 $('#email-err').text(JSON.parse(xhr.responseText).error);
//             }
//         });
//     });

//     // Other form navigation buttons
//     $('#form-step-2 #next-step').click(function() {
//         currentStep++;
//         updateStep(currentStep);
//     });

//     $('#form-step-2 #prev-step').click(function() {
//         currentStep--;
//         updateStep(currentStep);
//     });

//     $('#form-step-3 #prev-step').click(function() {
//         currentStep--;
//         updateStep(currentStep);
//     });

//     // Update step and step indicator
//     function updateStep(step) {
//         $('.step').removeClass('active');
//         $('.step').eq(step - 1).addClass('active');

//         $('.form-step').removeClass('active');
//         $('#form-step-' + step).addClass('active');
//     }
// });

    </script>
</body>
</html>
