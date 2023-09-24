<head>
    <style>
        /* h3 {
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
        } */

        body {
            background-color: #282c34;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 0;
        }

        h3 {
            font-size: 3rem;
            margin: 2rem 0;
        }

        .editmenu {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
            background-color: #61dafb; /* Light blue background */
            border-radius: 1rem;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .imagePart img {
            width: 350px;
            height: 400px;
            border-radius: 1rem;
            object-fit: cover;
            border: 5px solid #ffffff;
        }

        .imagePart span {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1.5rem;
            border-radius: 0.5rem;
            background-color: #000000;
            font-size: 1.2rem;
            cursor: pointer;
        }

        .NamePart input,
        .NamePart select {
            width: 100%;
            padding: 1rem;
            font-size: 1.2rem;
            border: none;
            margin-bottom: 1rem;
            border-radius: 0.5rem;
        }

        .buttons button {
            color: #ffffff;
            background-color: #030303;
            outline: none;
            border: none;
            font-size: 1.5rem;
            padding: 1rem 2rem;
            margin-right: .7rem;
            border-radius: 0.5rem;
            cursor: pointer;
        }

        .menubuttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }


    </style>
</head>
<body>
    
    <?php 
    // get the arguments from the dynamic page
    // $arg1 = $_GET['arg1'];
    // $arg2 = $_GET['arg2'];
    // $arg3 = $_GET['arg3'];    
    
    echo '<div class="editmenu">';
    echo '<h3>Fried Rice</h3>'; //replace with the arg1
    echo '<div class="others">';
    echo '<div class="imagePart">';
    // add img argument (arg3) to src add name (arg1) to the alt
    echo '<img src="" alt="hello world" />';
    echo '<div class="menubuttons">';
    echo '<span>Edit The Menu</span>';
    echo '<span>Hide The Menu</span>';
    echo '<span>Change Image</span>';
    echo '</div>';
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
    echo '<button>Delete Item</button>';
    echo '<button>Hide Item</button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    ?>
    
</body>
