<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<h2>Please fill in your details:</h2>

<form method="GET">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type="number" name="age"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><input type="tel" name="phone"></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
            </td>
        </tr>
        <tr>
            <td>Department:</td>
            <td>
                <select name="department">
                    <option value="">-- Select Department --</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Mechanical">Mechanical</option>
                    <option value="Civil">Civil</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </td>
        </tr>
    </table>
</form>

<?php
// Display submitted data using GET
$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';
$email = $_GET['email'] ?? '';
$phone = $_GET['phone'] ?? '';
$gender = $_GET['gender'] ?? '';
$department = $_GET['department'] ?? '';


    echo "<h3>Hello $name</h3>";
    echo "<p>Age: $age</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Phone: $phone</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Department: $department</p>";

?>

</body>
</html>

