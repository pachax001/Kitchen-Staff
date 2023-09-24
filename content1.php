<head>
    <link href="public/css/dashboard.css" />
    <style>
        .title {
          font-size: 35px;
          text-align: center;
          width: 85vw;
          margin-bottom: 20px;
        }

        .cooking, .takeaway, .queue, .ready{
            color: white;
            padding: 10px 100px;
            border-radius: 30px;
            margin: auto;
            height: auto;
            width: fit-content;
          }
          
          .show {
          position: relative;
          top: 30px;
          left: 225px;
          margin-right: 20px;

        }

        .cooking {
            background: #2AB1DD;
        }
        .takeaway {
           background: #F1984A;
        }
        .queue {
            background: #BA6BD8;

        }
        .ready {
            background: #219553;
        }

        .items {
          position: relative;
          top: 100px;
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          width: 85vw;
          gap: 30px;
        }

        .item {
          padding: 20px 30px;
          border-radius: 20px;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          background-color: #f0f0f9;
        }

        .ID {
          text-align: center;
          margin-bottom: 3rem;
        }

        .item span {
          position: relative;
          top: 30px;
        }
    </style>
</head>

<body>

    <h2 class="title">
        Order Status
    </h2>
    <div class="content_order">
        <span class="cooking show">
            Cooking
        </span>
        <span class="queue show">
            In Queue
        </span>
        <span class="takeaway show">
            Take Away
        </span>
        <span class="ready show">
            Ready To Serve
        </span>
    </div>

    <div class="items">
    <?php 
    $jsondata = '[
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
]';
 $data = json_decode($jsondata, true);
 foreach ($data as $item) {
    echo '<div class="item">';
    echo '<div class="ID">';
    echo '<p>'. $item['order_id'] .'</p>';
    $class=$item['status'];
    echo "<span class='$class'>". $item['status'] .'</span>';
    echo '</div>';
    echo '</div>';
 }
?>
    </div>

    <script>

    </script>
</body>