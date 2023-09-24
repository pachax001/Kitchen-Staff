<head>
    <style>
        .menus {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 70%;
            margin: auto;
            gap: 3rem;
            position: relative;
            top: 30px;
        }

        .item {
            width: 200px;
            height: auto;
            background-color: #f0f0f9;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .item .price {
            font-size: 25px;
            font-weight: bold;
        }

        .item .title {
            font-size: 20px;

        }

        .item span {
            padding: 5px 30px;
            background-color: #335499;
            border-radius: 20px;
        }

        .item .buttons {
            display: flex;
            flex-direction: column;
            gap: 0.3rem;
            margin-top: 0.5rem;
        }
          .search input {
          height: 40px;
          width: 400px;
          border-radius: 10px;
        }
        .search input::placeholder {
          font-style: italic;
          font-size: 25px;
          position: relative;
          top: 2px;
          left: 10px;
        }
          .search {
          position: relative;
          left: 500px;
        }

    </style>
</head>
<body>
 <div class="search">
        <input type="text" placeholder="Search" />
    </div>
    <div class="editingPlace">
        <!-- the app and edit panel opens here -->
    </div>
    <div class="menus" id="parentDiv">
        <?php
            $jsonData = '
            [
    {
        "name": "Cake",
        "image": "../images/cake.jpg",
        "price": 10
    },
    {
        "name": "BBQ",
        "image": "../images/BBQ.jpg",
        "price": 12
    }, 
    {
        "name": "Burger",
        "image": "../images/burger.jpg",
        "price": 14
    }, 
    {
        "name": "Ice-Cream",
        "image": "../images/icecream.jpg",
        "price": 8
    },
    {
        "name": "Meet Balls",
        "image": "../images/meetballs.jpg",
        "price": 20
    },
    {
        "name": "Noodles",
        "images": "../images/noodles.jpg",
        "price": 25
    },
    {
        "name": "Pancake",
        "images": "../images/pancake.jpg",
        "price": 17
    },
    {
        "name": "Pizza",
        "images": "../images/pizza.jpg",
        "price": 19
    }
]';

     $data = json_decode($jsonData, true);
     foreach ($data as $key) {         
                     echo '<div class="item">';
                     $img_alt = $key['name'];
                     $img_src = $key['images'];
                     echo '<img src="$img_src" alt="$img_alt" />';
                     echo '<div class="bottom">';
                     echo '<p class="title">'. $key['name'] . '</p>';
                     echo '<p class="price">' . $key['price'] . '</p>';
                     echo '<div class="buttons">';
                     echo '<span class="button"> Hide </span>';
                     echo '<span class="replaceContentBtn"onclick="loadFile(' . $key['name'], $key['price'], $key['images'] . ')"> Edit Item </span>';
                     echo '</div>';
                     echo '</div>';
                     echo '</div>';
     };



        
        ?>
    </div>
</body>
