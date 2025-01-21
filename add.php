<?php 

$firstname = $lastname = $email = $phonenumber = '';

$errors = array('firstname'=> '', 
                'lastname' => '', 
                'email' => '',
                'phonenumber' => '');

if(isset($_POST['submit'])){
    // echo htmlspecialchars($_POST['firstname']);
    // echo htmlspecialchars($_POST['lastname']);
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['countryCode']);
    // echo htmlspecialchars($_POST['phonenumber']);

    // firstname
    if(empty($_POST['firstname'])){
        $errors['firstname'] = 'First name is required. <br />';
    } else {
        // echo htmlspecialchars($_POST['firstname']);
        $firstname = $_POST['firstname'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $firstname)){
            $errors['firstname'] = 'First name must be letters and spaces only.' . '<br />';
        }
    }

    // lastname
    if(empty($_POST['lastname'])){
        $errors['lastname'] = 'Last name is required. <br />';
    } else {
        // echo htmlspecialchars($_POST['lastname']);
        $lastname = $_POST['lastname'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $lastname)){
            $errors['lastname'] = 'Last name must be letters and spaces only.' . '<br />';
        }
    }

    // email
    if(empty($_POST['email'])){
        $errors['email'] = 'Email is required. <br />';
    } else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email must be a valid email address' . '<br />';
        }
    }

    // phone number
    if(empty($_POST['phonenumber'])){
        $errors['phonenumber'] = 'Phone number is required. <br />';
    } else {
        $phonenumber = $_POST['phonenumber'];
        if(!preg_match('/^\d{10}$/', $phonenumber)){
            $errors['phonenumber'] = 'Phone number must be a valid 10-digit number.' . '<br />';
        }
    }

    // checking not containing errors
    if(array_filter($errors)){
        echo 'Form containing errors';
    } else {
        header('Location: index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms in PHP</title>
</head>
<body>
    <main>
        <form action="add.php" method="POST">
            <div>
             <label for="firstname">First name</label>
             <input type="text" name="firstname" value="<?php echo htmlspecialchars($firstname)?>">
             <div>
                <?php echo $errors['firstname']; ?>
             </div>
            </div>

            <div>
             <label for="lastname">Last name</label>
             <input type="text" name="lastname" value="<?php echo htmlspecialchars($lastname)?>">
             <div>
                <?php echo $errors['lastname']; ?>
             </div>
            </div>
            
            <div>
             <label for="email">Email</label>
             <input name="email" value="<?php echo htmlspecialchars($email)?>">
             <div>
                <?php echo $errors['email']; ?>
             </div>
            </div>

            <div>
             <select name="countryCode" id="countryCode">
                <option value="+91">+91 India</option>
                <option value="+355">+355 Albania</option>
             </select>
            </div>
            
            <div>
             <label for="phonenumber">Phone number</label>
             <input type="text" name="phonenumber" value="<?php echo htmlspecialchars($phonenumber)?>">
             <div>
                <?php echo $errors['phonenumber']; ?>
             </div>
            </div>
        <button type="submit" name="submit" value="submit">Submit</button>
        </form>
    </main>
</body>
</html> 