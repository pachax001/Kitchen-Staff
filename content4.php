<head>
    <style>
        table {
            width: 110%;
            margin: auto;
            margin-top: 20px;
            text-align: center;
            border-spacing: 4px 20px;
        }

        table th {
            padding: 20px 0;
            background-color: #f0f0f0;
            font-size: 20px;
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
    <div class="content">
        <?php
            $jsonData = '[
                {
                    "item": "lorem ipsum",
                    "stock": 10,
                    "expdate": "2/20"
                },
                {
                    "item": "lorem ipsum",
                    "stock": 10,
                    "expdate": "2/20"
                },
                {
                    "item": "lorem ipsum",
                    "stock": 10,
                    "expdate": "2/20"
                },
                {
                    "item": "lorem ipsum",
                    "stock": 10,
                    "expdate": "2/20"
                },
                {
                    "item": "lorem ipsum",
                    "stock": 10,
                    "expdate": "2/20"
                },
                {
                    "item": "lorem ipsum",
                    "stock": 10,
                    "expdate": "2/20"
                },
                {
                    "item": "lorem ipsum",
                    "stock": 10,
                    "expdate": "2/20"
                }
            ]';

            $data = json_decode($jsonData, true);

            echo '<table>';
            echo '<tr><th>Item</th><th>Stock</th><th>Expiry Date</th></tr>';

            foreach ($data as $item) {
                echo '<tr>';
                echo '<td>' . $item['item'] . '</td>';
                echo '<td>' . $item['stock'] . '</td>';
                echo '<td>' . $item['expdate'] . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        ?>
    </div>
</body>