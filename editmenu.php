<head>
    <style>
        h3 {
            font-size: 2.5rem;
            font-family: arial;
            text-align: center;
            margin: 3rem;
        }

        .editmenu {
            display: flex;
            flex-direction: column;

        }

        .imagePart {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .imagePart span {
            color: white;
            background-color: black;
            width: fit-content;
            padding: 0.5rem 1.5rem;
            border-radius: 0.5rem;
        }

        .imagePart img{
            width: 350px;
            height: 400px;
        }

        .others {
            display: flex;
            gap: 5rem;
            justify-content: center;
        }

        .NamePart {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
            justify-content: center;
        }

        .NamePart input {
            width: 400px;
            height: 40px;
        }

        .NamePart input::placeholder {
            padding: 0.5rem;
        }

        .NamePart select {
            width: 400px;
            height: 40px;
            padding: 0.5rem;
        }

        .buttons {
            position: absolute;
            top: 570px;
            right: 550px;
        }

        .buttons button {
            color: white;
            background-color: black;
            outline: none;
            border: none;
            font-size: 15px;
            padding: 0.5rem 1rem;            
            margin-right: .7rem;
            border-radius: 0.5rem;
        }


    </style>
</head>
<body>
    <div class="editmenu">
        <h3>Edit Menu</h3>
        <div class="others">

            <?php 
    // get the arguments from the dynamic page
    // $arg1 = $_GET['arg1'];
    // $arg2 = $_GET['arg2'];
    // $arg3 = $_GET['arg3'];    
    
    echo '<div class="imagePart">';
    // add img argument (arg3) to src add name (arg1) to the alt
    echo '<img src="" alt="hello world" />';
    echo '<span>Change Image</span>';
    echo '</div>';
    echo '<div class="NamePart">';
    echo '<input type="text" placeholder="name" />';
    echo '<input type="text" placeholder="price" />';
    echo '<select>';
    echo '<option>Chicken</option>';
    echo '<option>Change</option>';
    echo '<option>Change</option>';
    echo '</select>';
    echo '<select>';
    echo '<option>Featured</option>';
    echo '<option>Change</option>';
    echo '<option>Change</option>';
    echo '</select>';
    echo '</div>';
    echo '<div class="buttons">';
    echo '<button>Save</button>';
    echo '<button>Cancel</button>';
    echo '</div>';
    ?>
</div>
    </div>
    
</body>
