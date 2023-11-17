<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/25ff1b0eed.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <section class="navbar">
        <i class="fa-brands fa-searchengin fa-lg " style="color: #ffffff;"></i>
        <div class="btnparent">

            <a href="#" class="addbtn"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i> Add Product</a>
        </div>
    </section>
    <section class="header">
        <img src="images/Ecommerce-au-Maroc.jpg" style="width: 100%;" alt="">
    </section>

    <div class="container">

        <form class="forma" action="" method="post" enctype="multipart/form-data">
            <hr>
            <center>
                <h2>Dynamically add remove image filed and insert to data base </h2>
            </center>
                <hr>
            <div class="input_field">
                <table id="table_field" class="table">
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    <tr>
                        <td><input type="text" name="name[]"></td>
                        <td><input type="file" name="image[]" multiple=""></td>
                        <td><input type="button" name="add" id="add" value="Add"></td>
                    </tr>

                </table>
            </div>
        </form>
    </div>


</body>

</html>