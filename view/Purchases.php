<?php
    for($i = 0; $i < sizeof($books) - 1; $i++) {
        ?>
        <div class="singlePurchase">
            <?php echo 'Title: ' . $books[$i]['title'] . '<br />' . 'Purchase Date: ' . $books[$i]['date'] . '<br />'
                    . 'Price: $' . $books[$i]['price'];
            ?>
            <div class="singlePurchaseDelete">
                <form action="index.php?action=deleteItemFromBasket&itemId=<?php echo $books[$i]['id']; ?>" method="post">
                    <input type="submit" value="Delete" />
                </form>
            </div>
        </div>
        <?php
    }
?>
