<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen Stuff Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="public/css/template.css" rel="stylesheet"/>
    <link href="public/css/nav.css" rel="stylesheet"/>
	
</head>
<body>
    <script>
        // changeing the selected button
         document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll(".sidebar button");

            buttons.forEach(button => {
                button.addEventListener("click", function() {
                    buttons.forEach(b => b.classList.remove("active"));
                    this.classList.add("active");
                });
            });

            <?php
                $selectedButton = isset($_SESSION['selectedButton']) ? $_SESSION['selectedButton'] : 0;
                if ($selectedButton > 0) {
                    echo "buttons[$selectedButton - 1].classList.add('active');";
                }
            ?>
            });




        function loadContent(contentNumber) {
            // 1 - dashboard
            // 2 - orders
            // 3 - menus
            // 4 - inventory
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("dynamicContent").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "content" + contentNumber + ".php", true);
            xhttp.send();
        }

        window.onload = function() {
            loadContent(1);
        }

function loadFile(argument1, argument2, argument3) {
  // Send the AJAX request
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'editmenu.php?arg1=' + argument1 + '&arg2=' + argument2 + '&arg3=' + argument3, true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById('targetElement').innerHTML = xhr.responseText;
    }
  };
  xhr.send();
}

            
    </script>

    <!-- the top bar -->
    <div class="topbar">
        <div class="name">
            <img src="" alt="Company logo">
            <h1><span class="yellow">Dine</span><span>Ease</span> Restaurant Management System</h1>
        </div>
        <div class="profile">
            <span class="material-symbols-outlined">
                notifications
            </span>
            <p>Hello, Cheff</p>
            <img src="" alt="Profile picture">
        </div>
    </div>
    <!-- the nav bar -->
    <div class="sidebar">
        <button onClick="loadContent(1)" class="active">
            <span class="material-symbols-outlined">
                grid_view
            </span> 
            Dashboard
        </button>
        <button onClick="loadContent(2)">
            <span class="material-symbols-outlined">
                list_alt
            </span>
            Orders
        </button>
        <button onClick="loadContent(3)">
            <span class="material-symbols-outlined">
                menu_book
            </span>    
            Menus
        </button>
        <button onClick="loadContent(4)">
            <span class="material-symbols-outlined">
                kitchen
            </span>    
            Inventory
        </button>
        <button onClick="loadContent(1)">
            <span class="material-symbols-outlined">
                settings
            </span>
            My profile
        </button>
        <button onClick="loadContent(1)">
            <span class="material-symbols-outlined">
                logout
            </span>
            Log Out
        </button>
    </div>
    <!-- the dynamic content loading page -->
    <div id="dynamicContent">
        <!-- Content will be loaded here -->
    </div>
</body>
<?php
    
?>
<script type="text/javascript">
    function ReplaceContentInContainer(id, content) {
        var container = document.getElementById(id);
        container.innerHTML = contnet;
    }

        function handleClick() {
            ReplaceContentInContainer('parentDiv', '<?php echo $replacementContent; ?>');
        }
</script>
</html>