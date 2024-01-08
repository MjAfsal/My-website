<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addtocart.css">
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>Document</title>
    
</head>
<body>
    <div class="header">
        <p class="logo">
            <div class="col-lg-1 col-md-1 col-1">
                <img src="our_logo.PNG" alt="Our Logo" style="width: 100%; max-width: 100px; align-items: flex-start;">
            </div>
        </p>
        <div class="cart">
            <i class="fa-solid fa-cart-shopping"></i>
            <p id="count">0</p>
        </div>
    </div>

    <div class="container">
        <div id="root"></div>
        <div class="slidebar">
            <div class="head"><p>My Cart</p></div>
            <div id="cartItem" class="cartItem">Your Cart is Empty</div>
            <div class="foot">
                <h3>Total</h3>
                <h2 id="total">LKR 0.00</h2>
            </div>
        </div>
    </div>

    <script src="jquery.js"></script>

    <script>
//         const product = [
//     {
//         id: 0,
//         image: '15_pro_max.png',
//         title: '15 PRO MAX',
//         price: 463900,
//     },
//     {
//         id: 1,
//         image: 'Galaxy-S23-Ultra-new.jpg',
//         title: 'S23 ULTRA',
//         price: 289990,
//     },
//     {
//         id: 2,
//         image: 'w95_watch.jpg',
//         title: 'W95 MAX',
//         price: 5500,
//     },
//     // Add extra products here
//     {
//         id: 3,
//         image: '14_PRO_MAX.png',
//         title: '14 PRO MAX',
//         price: 150000,
//     },
//     {
//         id: 4,
//         image: 'AirPods-Pro.png',
//         title: 'AIR PODS PRO',
//         price: 180000,
//     },
//     {
//         id: 5,
//         image: 'one_plus_buds.png',
//         title: 'ONE PLUS BUDS PRO',
//         price: 463900,
//     },
//     {
//         id: 6,
//         image: 'pixel_8_pro.png',
//         title: 'pixel_8_pro.png',
//         price: 329900,
//     },
//     {
//         id: 7,
//         image: 'Pro-Max-1.jpg',
//         title: 'W26 PRO MAX SPECIAL',
//         price: 5800,
//     },
//     {
//         id: 8,
//         image: '11T_5g.jpeg',
//         title: 'XIAOMI 11T 5G',
//         price: 149900,
//     },
//     {
//         id: 9,
//         image: 'i12-tws-.jpeg',
//         title: 'I12 TWS',
//         price: 1965,
//     },
//     {
//         id: 10,
//         image: 'Apple-20W-.jpg',
//         title: 'APPLE 20W CHARGER',
//         price: 4500,
//     },
//     {
//         id: 11,
//         image: 'Sony Xpersia 5v.png',
//         title: 'SONY XPERSIA 5V',
//         price: 238900,
//     },
//     {
//         id: 12,
//         image: 'jbl-partybox.jpg',
//         title: 'JBL PARTYBOX ENCORE',
//         price: 104900,
//     },
//     {
//         id: 13,
//         image: 'phone_holder.jpg',
//         title: 'PHONE HOLDER',
//         price: 990,
//     },
//     {
//         id: 14,
//         image: 'pixel_6.png',
//         title: 'PIXEL 6',
//         price: 123000,
//     },
//     {
//         id: 15,
//         image: 'pngtree-home-theatre-.png',
//         title: 'HOME THEATER',
//         price: 35000,
//     },
    
// ];

    
        const categories = [...new Set(product.map((item) => item.title))];
    
        let i = 0;
    
        document.getElementById('root').innerHTML = categories.map((title) => {
            const item = product.find((productItem) => productItem.title === title);
            return `
                <div class='box'>
                    <div class='img-box'>
                        <img class='images' src='${item.image}'></img>
                    </div>
                    <div class='bottom'>
                        <p>${item.title}</p>
                        <h2>LKR ${item.price}.00</h2>
                        <button onclick='addToCart(${i++})'>Add To Cart</button>
                        <button class="Buy_Now">BUY</button>
                    </div>
                </div>`;
        }).join('');

        var cart = [];

        function addToCart(index) {
            cart.push({...product[index]});
            displaycart();
        }

        function delElement(index) {
            cart.splice(index, 1);
            displaycart();
        }

        function displaycart() {
            let j = 0;
            document.getElementById("count").innerHTML=cart.length;

            let total = 0;

             if (cart.length === 0) {
                document.getElementById('cartItem').innerHTML = "Your Cart is Empty";
            } else {
            document.getElementById("cartItem").innerHTML = cart.map((items) => {
            var { image, title, price } = items;
            total += price; 
            return (
                `<div class='cart-item'>
                    <div class='row-img'>
                        <img class='rowimg' src='${image}'>
                    </div>
                    <p style='font-size:12px;'>${title}</p>
                    <h2 style='font-size: 15px;'>LKR ${price}.00` +
                `<i class='fa-solid fa-trash' onclick='delElement(${(j++)})'></i></div>`
            );
        }).join('');

        document.getElementById('total').innerText = `LKR ${total}.00`;
    }
}
    </script>


<?php
      $host = "localhost";
      $dbusername = "root";
      $dbpassword = "";
      $dbname = "finalproject1";

      $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
      if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
      }

      $sql = "SELECT Pro_Id, Pro_Name, Quantity, Price, Image FROM accessorie_details";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="box">';
            if (!empty($row['Image'])) {
                echo `<div class='img-box'>`;
                echo '<img src="' . $row['Image'] . '" alt="' . $row['Pro_Name'] . '">';
                echo `</div>`;
              }
          
          echo '<h2 class="abc">' . $row['Pro_Name'] . '</h2>';
          echo '<p><strong>Product ID:</strong> ' . $row['Pro_Id'] . '</p>';
          echo '<p><strong>Available stock:</strong> ' . $row['Quantity'] . '</p>';
          echo '<p><strong>Price:</strong> ' . $row['Price'] . '</p>';
         
          if ($row['Quantity'] <= 0) {
            echo '<p style="color: red;">This product is out of stock</p>';
          } else {
            ?>
            <button type="button"><a href="Buy_Now_Form-accessories.php?productId=<?php echo $row['Pro_Id']; ?>">BuyNow</a></button>
            <?php
          }
  
          
          
          
          echo '</div>';
        }
      } else {
        echo '<p>No products found</p>';
      }

      $conn->close();
    ?>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
