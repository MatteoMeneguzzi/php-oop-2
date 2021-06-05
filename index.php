<?php 

require_once __DIR__ . '/classes/Customer.php';
require_once __DIR__ . '/classes/Premium-customer.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Newest-product.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>SPECIAL SHOP</h1>
    </header>

    <main>
        <div class="customers-list">
            <h2>Customers List</h2>
            <section>
                <?php //Istanza customer
                    $customer_one = new Customer('Matteo', 'Meneguzzi');
                ?>
                <h4><?php echo $customer_one->getFullName(); ?></h4>
                <p><?php echo $customer_one->setAge(26); ?></p>
                <p>Età: <?php echo $customer_one->getAge(); ?></p>
                <p>Site discount: <?php echo $customer_one->getSale(); ?> %</p>
            </section>
            <section>
                <?php //Istanza premium customer
                    $premium_one = new Premium('Albert', 'Einstein', 3);
                    ?>
                    <h4><?php echo $premium_one->getFullName(); ?></h4>
                    <p>Età: <?php  
                        try { 
                            $customer_one->setAge('Ciao');

                            echo $customer_one->getAge();
                        } catch (Exception $e) {
                            echo "Error: " . $e->getMessage();
                        }
                    ?></p>
                    <p> <?php echo $premium_one->getAge(); ?></p>
                    <p>Site discount: <?php echo $premium_one->getSale(); ?> %</p>
            </section>
            <section>
                <?php //Istanza premium customer
                    $premium_two = new Premium('Bugs', 'Bunny', 2);
                    ?>
                    <h4><?php echo $premium_two->getFullName(); ?></h4>
                    <p><?php echo $premium_two->setAge(52); ?></p>
                    <p>Età: <?php echo $premium_two->getAge(); ?></p>
                    <p>Site discount: <?php echo $premium_two->getSale(); ?> %</p>
            
            </section>
            <section>
                <?php //Istanza premium customer
                    $premium_three = new Premium('Michael', 'Jordan', 3);
                    ?>
                    <h4><?php echo $premium_three->getFullName(); ?></h4>
                    <p><?php echo $premium_three->setAge(32); ?></p>
                    <p>Età: <?php echo $premium_three->getAge(); ?></p>
                    <p>Site discount: <?php echo $premium_three->getSale(); ?> %</p>
            
            </section>
            <section>
                <?php //Istanza premium customer
                    $premium_four = new Customer('Kevin', 'McCallister', 1);
                    ?>
                    <h4><?php echo $premium_four->getFullName(); ?></h4>
                    <p><?php echo $premium_four->setAge(11); ?></p>
                    <p>Età: <?php echo $premium_four->getAge(); ?></p>
                    <p>Site discount: <?php echo $premium_four->getSale(); ?> %</p>
            
            </section>
        </div>

        <div class="products-list">
            <h2>Products List</h2>
            <section>
                <?php //Istanza newest product
                    $newest_one = new Newest('T-Shirt', 47, 2021);
                ?>
                <p><?php echo $newest_one->type; ?> <strong><?php echo $newest_one->getCollection(); ?></strong></p>
                <p>Product discount: <?php echo $newest_one->getSale(); ?> %</p>
            </section>
            <section>
                <?php //Istanza  product
                    $product_one = new Product('Trousers', 71);
                    ?>
                    <p><?php echo $product_one->type; ?></p>
                    <p>Product discount: <?php echo $product_one->getSale(); ?> %</p>
            
            </section>
            <section>
                <?php //Istanza newest product
                    $newest_one = new Newest('Sunglasses', 110, 2020);
                ?>
                <p><?php echo $newest_one->type; ?> <strong><?php echo $newest_one->getCollection(); ?></strong></p>
                <p>Product discount: <?php echo $newest_one->getSale(); ?> %</p>
            </section>
            <section>
                  <?php //Istanza product
                    $product_one = new Product('Hoodies', 27);
                    ?>
                    <p><?php echo $product_one->type; ?></p>
                    <p>Product discount: <?php echo $product_one->getSale(); ?> %</p>
            
            </section>
        </div>
    </main>
</body>
</html>