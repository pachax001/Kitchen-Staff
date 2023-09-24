<head>
<style>
 body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #f3f3f3;
    }

    .mainframe {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .itembox {
        display: flex;
        flex-direction: column;
        gap: 20px;
        background-color: #ffffff;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .itembox p {
        font-size: 24px;
        font-weight: bold;
        margin: 0;
    }

    .itembox input[type='checkbox'] {
        width: 20px;
        height: 20px;
    }

    .itembox a {
        text-decoration: none;
        color: #333333;
        font-size: 16px;
    }
</style>
</head>
<body>
    <a href="index.php">Home</a>
    <div class="mainframe">

        <div class="itembox">
            <?php
    // Check if arguments are set
    if(isset($_GET['arg1']) && isset($_GET['arg2'])){
        $arg1 = $_GET['arg1'];
        $arg2 = $_GET['arg2'];
        
        // Use the arguments here
        echo "<p class='name'>$arg1</p>";
        echo "<p class='price'>$arg2</p>";
        echo "<input type='checkbox'>";
    } else {
        echo "<p>Arguments not provided.</p>";
    }
    ?> 
    </div>
</div>
</body>