<head>
    <style>
        table {
            width: 110%;
            margin-top: 20px;
            text-align: center;
            border-spacing: 4px 20px;
        }

        table th {
            padding: 20px 0;
            background-color: #f0f0f0;
            font-size: 20px;
        }

        .status {
          width: fit-content;
          height: auto;
          margin: auto;
          padding: 10px 100px;
          border-radius: 30px;
          color: white;
        }
        
        .cooking {
          background-color: blue;
        }
        .search {
          position: relative;
          left: 500px;
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
    </style>
</head>

<body>
    <div class="search">
        <input type="text" placeholder="Search" />
    </div>
    <div id="popup" style="display: none;">
        <h2>Order Details</h2>
        <div id="orderDetails"></div>
    </div>
    <div class="content">
        <?php
            $jsonData = '[
  {
    "order_id": 1,
    "name": "rice",
    "status": "cooking",
    "price": 100,
    "table": 3
  },
  {
    "order_id": 2,
    "name": "rice",
    "status": "cooking",
    "price": 100,
    "table": 3
  },
  {
    "order_id": 1,
    "name": "rice",
    "status": "cooking",
    "price": 100,
    "table": 3
  },
  {
    "order_id": 1,
    "name": "rice",
    "status": "cooking",
    "price": 100,
    "table": 3
  },
  {
    "order_id": 1,
    "name": "rice",
    "status": "cooking",
    "price": 100,
    "table": 3
  },
  {
    "order_id": 1,
    "name": "rice",
    "status": "cooking",
    "price": 100,
    "table": 3
  },
  {
    "order_id": 1,
    "name": "rice",
    "status": "cooking",
    "price": 100,
    "table": 3
  },
  {
    "order_id": 1,
    "name": "rice",
    "status": "cooking",
    "price": 100,
    "table": 3
  },
  {
    "order_id": 1,
    "name": "rice",
    "status": "cooking",
    "price": 100,
    "table": 3
  }
]
';

            $data = json_decode($jsonData, true);

            echo '<table id="orderTable">';
            echo '<tr><th>Order ID</th><th>Table</th><th>Starting Time</th><th>Status</th></tr>';

            foreach ($data as $item) {
                echo '<tr>';
                $value1=$item['name'];
                $value2=$item['price'];
                echo '<td>';
                echo "<a href='#'>";
                // the order page is removed since every order only have one item
                echo $item['order_id'];
                echo '</a>'; 
                echo '</td>';
                echo '<td>' . $item['table'] . '</td>';
                echo '<td>' . "2/20" . '</td>';
                $class = $item['status'];
                echo '<td>' . "<div class='$class status'>" . $item['status'] . '</div>' . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        ?>
    </div>
</body>