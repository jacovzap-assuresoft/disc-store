<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DISC STORE</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <section class="title-section">
        <h1 class='title-section-text'>THE PROGRAMMERS </h1>
        <h2 class="title-section-secondary-text">NEW DISC!!! AVAILABLE NOW!!!</h2>
    </section>

    <section class="products-section">
        <h3>Normal edition</h3>
        <?php
        require_once 'classes/discs/digital_disc.php';
        require_once 'classes/discs/physical_disc.php';

        require_once 'classes/editions/edition.php';
        require_once 'classes/editions/normal_edition.php';
        require_once 'classes/editions/deluxe_edition.php';

        require_once 'classes/sales_history.php';

        $sales_history = new SalesHistory();

        $normal_edition = new NormalEdition();
        $deluxe_edition = new DeluxeEdition();

        $digital_normal_disc = new DigitalDisc($normal_edition);
        $physical_normal_disc = new PhysicalDisc($normal_edition);

        $digital_normal_disc->calculateCost();
        $physical_normal_disc->calculateCost();


        $digital_deluxe_disc = new DigitalDisc($deluxe_edition);
        $physical_deluxe_disc = new PhysicalDisc($deluxe_edition);

        $digital_deluxe_disc->calculateCost();
        $physical_deluxe_disc->calculateCost();
        ?>

        <div>
            <div class="item-card">
                <p> Buy digital copy</p>
                <button class="normal-button"><?php echo $physical_deluxe_price;
                                                $sales_history->addSale($digital_normal_disc) ?> $
                </button>
            </div>
            <div class="item-card">
                <p>
                    Buy physical copy
                </p>
                <button class="normal-button"><?php echo $physical_deluxe_price;
                                                $sales_history->addSale($physical_normal_disc) ?> $
                </button>
            </div>
        </div>

        <hr>

        <h3>Deluxe edition</h3>
        <div>
            <div class="item-card">
                <p> Buy deluxe digital copy</p>
                <button class="deluxe-button"><?php echo $physical_deluxe_price;
                                                $sales_history->addSale($digital_deluxe_disc) ?> $
                </button>
            </div>
            <div class="item-card">
                <p> Buy deluxe physical copy</p>
                <button class="deluxe-button"><?php echo $physical_deluxe_price;
                                                $sales_history->addSale($physical_deluxe_disc) ?> $
                </button>
            </div>
        </div>
    </section>
</body>

</html>