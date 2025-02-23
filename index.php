<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en Línea</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Lista de Productos</h1>
    <div class="product-list">
        <?php include 'products.php'; ?>
        <?php foreach ($products as $product): ?>
            <div class="product">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <h2><?php echo $product['name']; ?></h2>
                <p><?php echo $product['description']; ?></p>
                <p>Precio: $<?php echo number_format($product['price'], 2); ?></p>
                <button onclick="addToCart(<?php echo $product['id']; ?>)">Agregar al Carrito</button>
            </div>
        <?php endforeach; ?>
    </div>

    <h2>Carrito de Compras</h2>
    <div id="cart">
        <p>El carrito está vacío.</p>
    </div>

    <script>
        const products = <?php echo json_encode($products); ?>;
    </script>
    <script src="scripts.js"></script>
</body>
</html>