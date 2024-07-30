<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event</title>
</head>
<body>
    <form id="myForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br>
        <button type="submit" id="submit-btn">Submit</button>
    </form>
    <table>
        <thead>
            <th>Name</th>
            <th>Email</th>
        </thead>
        <tbody id="user-data">
          
        </tbody>
    </table>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  
    $('#submit-btn').click(function(event) {
        event.preventDefault(); 
        let name = $('#name').val();
        let email = $('#email').val();
        var users = JSON.parse(localStorage.getItem('users')) || [];
        var emailExists = users.some(function(user) {
            return user.email === email;
        });

        if (emailExists) {
            alert('Email already exists! Please use a different email.');
            return; 
        }
        var newUser ={
            name: name,
            email: email
        };
        users.push(newUser);

    localStorage.setItem('users', JSON.stringify(users));

    $('#name').val('');
    $('#email').val('');

    displayUserData(users);
    });
    function displayUserData(users) {

        $('#user-data').empty();

        users.forEach(function(user,index) {
            var newRow = `<tr id="user-${index}"><td>${user.name}</td><td>${user.email}</td><td>
                <button onclick="deleteUser(${index})">Delete</button></td></tr>`;
            $('#user-data').append(newRow);
        });
    }
    var users = JSON.parse(localStorage.getItem('users')) || [];

    displayUserData(users);
    
    window.deleteUser = function(index) {
        var users = JSON.parse(localStorage.getItem('users')) || [];
        if (index > -1 && index < users.length) {
            users.splice(index, 1);
            localStorage.setItem('users', JSON.stringify(users));
            displayUserData(users); // Update the displayed users after deletion
        }
    };

});
</script>
</html>