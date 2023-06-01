<?php
include 'conn.php';

session_start();

// ADD USER DATABEAS CREAT PAGE AND DASBORD

if (isset($_POST['adduser'])) {
    
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $selected = $_POST['selected'];

    $sql = "INSERT INTO users (email,username,password,admin)
    VALUES('$email','$username' ,'$password','$selected')";

    $ruseltuser = mysqli_query($con, $sql);
    if ($ruseltuser) {
        echo '<script>alert("ثم إضافتك للموقع سجل دخولك") </script>';
    } else {
        echo '<script>alert("حدث خلل حاول مرة أخرى") </script>';
    }
}



// SHOW FUNGTION ALL USERS TABLE DASHBORD
function showuser($con)
{
    $sql = "SELECT * FROM users";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<table class = "" id="customers">';
        echo '
        <tr>
        <th>#</th>
        <th>البريد الإلكتروني</th>
        <th>إسم المستخدم</th>
        <th>المسؤولون</th>
        <th>الإجراءات</th>
        </tr>
        ';
        while ($row = mysqli_fetch_array($result)) {
        if($row['admin']==1) {
            $text = "مسؤول";
        }else {
            $text = "مستخدم";
        }
        echo "
        <tr>
        <td>" . $row['id'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['username'] . "</td>
        <td>" . $text . "</td>
        <td>
        <a href='../dashbord/ubdetuser.php? id=$row[id]' class='btn btn-primary w-50'><i class='fa-solid fa-user-pen'></i></a>
        <a href='../incloud/deletuser.php? id=$row[id]' class='btn btn-danger'><i class='fa-solid fa-trash'></i></a>
        </td>
        
        </tr> 
        ";
        }
    }
    echo '</table>';
}

// LOGIN WEBSITE DASHBORD

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email= '$email' && password='$password' AND admin = '1'";
    if (mysqli_num_rows(mysqli_query($con, $query)) > 0) {
        echo '<script>alert("أهلاً بك سيتم تحويلك إلى لوحة التحكم") </script>';
        header('REFRESH:2; URL=../dashbord/index.php');
    } else {
        echo '<script>alert("تأكد من معلومات الحساب لست مسؤولاً أنت") </script>';
        header('REFRESH:2; URL=../index.php');
    }
}
?>

<?php

// ADD SERVISSES WEBSITE AND TABLE DASHBORD
if (isset($_POST['addser'])) {
    $imgser = $_FILES['imgser']['name'];
    $path = 'img/' . $imgser;
    $titleser = $_POST['titleser'];
    $pargser = $_POST['textserv'];
    $sql = "INSERT INTO servises (imgser,titleser,textserv)VALUES('$path','$titleser','$pargser')";
    $resultprodect = mysqli_query($con, $sql);
    if ($resultprodect) {
        move_uploaded_file($_FILES['imgser']['tmp_name'], $path);
        echo '<script>alert("تم إضافة الخدمة بنجاح") </script>';
    } else {
        echo '<script>alert("حدثت مشكلة أثناء رفع المنتج")</script>';
    }
}
// SHOW ALL SERVESSES WEBSITE SECTION
function showservises($con)
{
    $sql = "SELECT * FROM servises ORDER BY id ";
    $result = mysqli_query($con, $sql);

    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            echo '
            <div class="col-lg-4 col-md-6">
            <div class="cardOne">
                <div class="photoCard">
                    <img src="' . $row['imgser'] . '" alt="" class="img-fluid">
                </div>
                <div class="contentCard">
                    <h2>' . $row['titleser'] . '</h2>
                    <p>' . $row['textserv'] . '</p>
                </div>
            </div>
        </div>
            ';
        }
    }
}
// كود عرض المنتجات في جدول للحذف و التعديل عليهم
function showAllservisess($con)
{
    $sql = "SELECT * FROM servises ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<table class = "" id="customers">';
        echo '
        <tr>
        <th>#</th>
        <th>صورة الخدمة </th>
        <th>عنوان الخدمة</th>
        <th>نص الخدمة</th>
        <th>الإجراءات</th>
        </tr>
        ';
        while ($row = mysqli_fetch_array($result)) {
            echo "
        <tr>
        <td>" . $row['id'] . "</td>
        <td><img src=" . $row['imgser'] . "  width=100px height=80px></td>
        <td>" . $row['titleser'] . "</td>
        <td class='w-50'>" . $row['textserv'] . "</td>
        <td>
        <a href='../dashbord/ubdateserv.php? id=$row[id]' class='btn btn-primary w-50'> <i class='fa-solid fa-user-pen'></i></a>
        <a href='../incloud/deletserv.php? id=$row[id]' class='btn btn-danger' ><i class='fa-solid fa-trash'></i></a>
        </td>
        </tr> 
        ";
        }
    }
    echo '</table>';
}
?>
<?php
// ADD SERVISSES WEBSITE AND TABLE DASHBORD
if (isset($_POST['savesucsses'])) {
    $imgser = $_FILES['photosucsus']['name'];
    $pathsu = 'img/' . $imgser;
    $sql = "INSERT INTO sucsuss(photocump)VALUES('$pathsu')";
    $resultprodect = mysqli_query($con, $sql);
    if ($resultprodect) {
        move_uploaded_file($_FILES['photosucsus']['tmp_name'], $pathsu);
        echo '<script>alert("تم إضافة الشريك بنجاح") </script>';
    } else {
        echo '<script>alert("حدثت مشكلة أثناء رفع الشريك")</script>';
    }
}
// SHOW ALL SERVESSES WEBSITE SECTION
function showsucsuss($con)
{
    $sql = "SELECT * FROM sucsuss ORDER BY id ";
    $result = mysqli_query($con, $sql);

    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            echo '
            <div class="col-lg-3 col-md- col-6">
                    <div class="logoCambny text-center p-3">
                        <img src="' . $row['photocump'] . '" alt="" class="img-fluid">
                    </div>
                </div>
            ';
        }
    }
}

// كود عرض المنتجات في جدول للحذف و التعديل عليهم
function showAllsucsses($con)
{
    $sql = "SELECT * FROM sucsuss";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<table class = "" id="customers">';
        echo '
        <tr>
        <th>#</th>
        <th>صورة الشركة </th>
        <th>الإجراءات</th>
        </tr>
        ';
        while ($row = mysqli_fetch_array($result)) {
            echo "
        <tr>
        <td>" . $row['id'] . "</td>
        <td><img src=" . $row['photocump'] . " ></td>
        <td>
        <a href='../dashbord/ubdatcomp.php? id=$row[id]' class='btn btn-primary w-50'> <i class='fa-solid fa-user-pen'></i></a>
        <a href='../incloud/deletcomp.php? id=$row[id]' class='btn btn-danger' ><i class='fa-solid fa-trash'></i></a>
        </td>
        </tr> 
        ";
        }
    }
    echo '</table>';
}
?>


<?php
if (isset($_POST['addnews'])) {
    $imgser = $_FILES['photonews']['name'];
    $path = 'img/' . $imgser;
    $datenews = $_POST['datenews'];
    $titlenews = $_POST['titlenews'];
    $textnews = $_POST['textnews'];
    $sql = "INSERT INTO endnews (photonews,date,titleNews,textNews)VALUES('$path','$datenews','$titlenews' , '$textnews')";
    $resultprodect = mysqli_query($con, $sql);
    if ($resultprodect) {
        move_uploaded_file($_FILES['photonews']['tmp_name'], $path);
        echo '<script>alert("تم إضافة الخبر بنجاح") </script>';
    } else {
        echo '<script>alert("حدثت مشكلة أثناء رفع المنتج")</script>';
    }
}

function showallnews($con)
{
    $sql = "SELECT * FROM endnews ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<table class = "" id="customers">';
        echo '
        <tr>
        <th>#</th>
        <th>صورة الخبر </th>
        <th>تاريخ الخبر</th>
        <th>عنوان الخبر</th>
        <th>نص الخبر</th>
        <th>الإجراءات</th>
        </tr>
        ';
        while ($row = mysqli_fetch_array($result)) {
            echo "
        <tr>
        <td>" . $row['id'] . "</td>
        <td><img src=" . $row['photonews'] . "  width=100px height=60px></td>
        <td>" . $row['date'] . "</td>
        <td>" . $row['titleNews'] . "</td>
        <td class='w-50'>" . $row['textNews'] . "</td>
        <td>
        <a href='../dashbord/ubdatnews.php? id=$row[id]' class='btn btn-primary w-50'> <i class='fa-solid fa-user-pen'></i></a>
        <a href='../incloud/deletnews.php? id=$row[id]' class='btn btn-danger' ><i class='fa-solid fa-trash'></i></a>
        </td>
        </tr> 
        ";
        }
    }
    echo '</table>';
}


// SHOW ALL SERVESSES WEBSITE SECTION
function shownews($con)
{
    $sql = "SELECT * FROM endnews ORDER BY id ";
    $result = mysqli_query($con, $sql);

    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            echo '
            <div class="col-lg-4 col-md-6 mb-3 ">
                    <div class="AllCard">
                        <div class="photocard bg-white">
                            <img src="'.$row['photonews'].'" alt="" class="img-fluid w-100">
                            <div class="contentDate">
                                <p class="m-0">'.$row['date'].'</p>
                            </div>
                        </div>
                        <div class="contentCardText mt-3 p-3">
                            <h5 class="mb-3">'.$row['titleNews'].'</h5>
                            <p>'.$row['textNews'].'</p>
                            <a href="" class="btn  text-white">عرض المزيد</a>
                        </div>
                    </div>
                </div>
            ';
        }
    }
}

?>

<?php

if (isset($_POST['save_logo'])) {
    $imglogo = $_FILES['logo']['name'];
    $path = 'img/' . $imglogo;
    $sql = "INSERT INTO logowebsite (photoLogo)VALUES('$path')";
    $resultprodect = mysqli_query($con, $sql);
    if ($resultprodect) {
        move_uploaded_file($_FILES['logo']['tmp_name'], $path);
        echo '<script>alert("تم إضافة الصورة بنجاح") </script>';
    } else {
        echo '<script>alert("حدثت مشكلة أثناء رفع المنتج")</script>';
    }
}

function showlogo($con)
{
    $sql = "SELECT * FROM logowebsite ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<table class = "" id="customers">';
        echo '
        <tr>
        <th>#</th>
        <th>صورة الشعار </th>
        <th>الإجراءات</th>
        </tr>
        ';
        while ($row = mysqli_fetch_array($result)) {
            echo "
        <tr>
        <td>" . $row['id'] . "</td>
        <td><img src=" . $row['photoLogo'] . "  width=100px height=60px></td>
        <td>
        <a href='../dashbord/ubdatlogo.php? id=$row[id]' class='btn btn-primary w-50'> <i class='fa-solid fa-user-pen'></i></a>
        <a href='../incloud/deletlogo.php? id=$row[id]' class='btn btn-danger' ><i class='fa-solid fa-trash'></i></a>
        </td>
        </tr> 
        ";
        }
    }
    echo '</table>';
}

function showlogoweb($con)
{
    $sql = "SELECT * FROM logowebsite ORDER BY id ";
    $result = mysqli_query($con, $sql);

    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            echo '
                <div>
                <img src="'.$row['photoLogo'].'" width="75px" class="img-fluid" alt="">
                </div>
            ';
        }
    }
}

?>


<?php

if (isset($_POST['sendmesage'])) {
    $namepersonal = $_POST['namepersonal'];
    $phoneNumber = $_POST['phoneNumber'];
    $subjectname = $_POST['subjectname'];
    $subjectText = $_POST['subjectText'];
    $emailpersonal = $_POST['emailpersonal'];
    $sql = "INSERT INTO message (namepersonal,phoneNumber,subjectname,subjectText , emailpersonal) VALUES
    ('$namepersonal','$phoneNumber','$subjectname' , '$subjectText' , '$emailpersonal')";
    $resultprodect = mysqli_query($con, $sql);
    if ($resultprodect) {
        echo '<script>alert("تم إرسال الرسالة الخبر بنجاح") </script>';
    } else {
        echo '<script>alert("حدثت مشكلة أثناء إرسال الرسالة ")</script>';
    }
}

function showmessage($con)
{
    $sql = "SELECT * FROM message ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<table class = "" id="customers">';
        echo '
        <tr>
        <th>#</th>
        <th> البريد الإلكتروني </th>
        <th>الموضوع</th>
        <th>الهاتف</th>
        <th>الإجراءات</th>
        </tr>
        ';
        while ($row = mysqli_fetch_array($result)) {
            echo "
        <tr>
        <td>" . $row['id'] . "</td>
        <td>" . $row['emailpersonal'] . "</td>
        <td>" . $row['subjectname'] . "</td>
        <td>" . $row['phoneNumber'] . "</td>
        <td>
        <a href='../incloud/deletmessage.php? id=$row[id]' class='btn btn-danger' ><i class='fa-solid fa-trash'></i></a>
        </td>
        </tr> 
        ";
        }
    }
    echo '</table>';
}

?>