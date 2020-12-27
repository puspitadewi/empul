<?php
$conn = mysqli_connect("localhost", "root", "", "empul2");

function registrasi($data)
{

    global $conn;
    
    $firstname = stripslashes($data["first_name"]);
    $lastname = stripslashes($data["last_name"]);
    $email = strtolower(stripslashes($data["email"]));
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT email FROM user WHERE  email = '$email'");

    if (mysqli_fetch_assoc($result)) {

        echo "<script>
        alert('username telah ada')
     </script>";
        return false;
    }



    if ($password1 !== $password2) {

        echo "<script>
        alert('password tidak sesuai');
        </script>";
        return false;
    }

    $password1 = password_hash($password1, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO sri VALUES('', '$firstname', '$lastname', '$email', '$username', '$password1')");
    return mysqli_affected_rows($conn);


 /*
function jenisbarang ()
{
    removeAllOptions(document.form1.SubCat);
    addOption(document.form1.SubCat, "", "Pilih Merk", "");
    if(document.form1.Category.value == 'Desktop')
    {   addOption(document.form1.SubCat,"Acer", "Acer");
        addOption(document.form1.SubCat,"Dell", "Dell");
        addOption(document.form1.SubCat,"Lenovo", "Lenovo");
    }
    if(document.form1.Category.value == 'Laptop')
    {   addOption(document.form1.SubCat,"Asus", "Asus");
        addOption(document.form1.SubCat,"Acer", "Acer");
        addOption(document.form1.SubCat,"Sony Vaio", "Sony Vaio");
    }
    if(document.form1.Category.value == 'Smartphone')
    {   addOption(document.form1.SubCat,"Samsung", "Samsung");
        addOption(document.form1.SubCat,"LG", "LG");
        addOption(document.form1.SubCat,"Sony Xperia", "Sony Xperia");
    }
} */
