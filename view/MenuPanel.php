<div class="menuPanel">
    <div class="menuItems">
        <a href="index.php">Home</a> 
        <?php if($_SESSION == true) { ?> | <a href="index.php?action=basket">Basket</a> <? } ?>  
        <?php if($_SESSION && $_SESSION['group'] == 1) { ?> | <a href="index.php?action=cp">CP</a><? } ?>
    </div>
    
    <div class="searchBox">
        <form action="index.php?action=search" method="post">
            <input type="text" name="query" style="width: 250px" />
            <select name="type">
                <option value="title">Title</option>
                <option value="author">Author</option>
                <option value="price">Price</option>
            </select>
            <button type="submit">Search</button>
        </form>
    </div>
    
    <?php if($_SESSION == false) { ?>
    <div class="loginBox">
        <form method="post" action="index.php?action=login" >
            Username: <input type="text" name="username" style="width: 70px; height: 15px;" />
            Password: <input type="password" name="password" style="width: 70px; height: 15px;" />
                      <input type="submit" name="login" value="Login"/>
        </form>
    </div>
    <?php } else { ?>
        <div class="logoutBox">
            <a href="index.php?action=logout"> Exit </a>
        </div>
    <?php } ?>
</div>