
<link rel="stylesheet" href="styles/topbar-style.css">
<link rel="stylesheet" href="styles/global.css">

<div class="topBar">
        <span class="menu">
          <i class="bi bi-list"></i></span>
        <div class="search">
          <label>
            <form action="" method="GET">
            <input id='search-bar'type="text" placeholder="Search" name='search-input'
                    value='<?php if(isset($_GET['search-input'])){echo $_GET['search-input'];}?>'>
            <span id='search' name='search'><i class="bi bi-search"></i></span>
            </form>
            
          </label>
        </div>
        <button class="logout" onclick="location.href='/logout'">Logout</button>
</div>