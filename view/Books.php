<?php
    $numBooks = sizeof($books);
    $perPage = 4;
    $pages = ceil($numBooks / $perPage);
    $currentPage = isset($_GET['p']) ? (int) $_GET['p'] : 1;
    $offset = ($currentPage - 1) * $perPage + 1;
    $books = array_slice($books, $offset, $perPage);
    
    $nextPage = $currentPage < $pages ? $currentPage + 1 : null;
    $prevPage = $currentPage > 1 ? $currentPage - 1 : null;
    
    foreach ($books as $book) {
        ?>
            <div class="singleBook">
                <div class="singleBookImage">
                    <img src="<?php echo $book['image']; ?>" width="160px" height="160px" />
                </div>
                <div id="singleBookTitle">
                    <b><?php echo $book['title'] . ' ( ' . $book['author'] . ' )'; ?></b> 
                </div>
                <br />
                <div class="singleBookDescription">
                    <?php echo $book['description']; ?>
                </div>
                <div class="singleBookPrice">
                    Price: $<?php echo $book['price']; ?>
                </div>
                <br />
                
                <?php
                    if($_SESSION == true) {
                        ?>
                        <div class="singleBookBuy">
                            <form action="index.php?action=purchase&bookId=<?php echo $book['id']; ?>&user=<?php echo $_SESSION['user']; ?>" method="post">
                                <input type="submit" value="Purchase" name="purchase" />
                            </form>
                        </div>
                    <?php
                    }
                    ?>
                     <?php
                        if($_SESSION && $_SESSION['group'] == 1) {
                            ?>
                            <div class="singleBookBuy">
                                <form action="index.php?action=deleteABook&bookId=<?php echo $book['id']; ?>" method="post">
                                    <input type="submit" value="Delete" name="delete" />
                                </form>
                            </div>
                        <?php
                        }
                        ?>
                </div>
        <?php
    }
    
    echo '<br />';
    
    echo '<div class="pagingBar">';
    
    if($prevPage) {
        echo '<a href="index.php?page=&p=' . $prevPage . '"> << </a>';
    }
    
    for($i = 1; $i <= $pages; $i++) {
        echo '<a href="index.php?page=&p=' . $i . '">' . $i . ' ' . '</a>'; 
    }
    
    if($nextPage) {
        echo '<a href="index.php?page=&p=' . $nextPage . '"> >> </a>';
    }
    
    echo '</div>';
?> 