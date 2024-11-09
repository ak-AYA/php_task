<?php
include('./structure/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<div  class="container"  style="margin-bottom:10px;" >
<h1 style="margin:7%">Categories</h1>
<div  class="container row"  style="gap:2%" >
<div class="card col" style="width: 18rem;">
  <img src="images\flat black shoes.jpg" class="card-img-top rounded" style="height: 70%;" alt="">
  <div class="card-body">
    <h5 class="card-title">Flats</h5>
    <button type="button" class="btn btn-outline-dark text-uppercase ">Shop Now</button>
  </div>
</div>
<div class="card col" style="width: 18rem;">
  <img src="images\shoes adidas.jpg" class="card-img-top rounded" style="height: 70%;" alt="">
  <div class="card-body">
    <h5 class="card-title">Shoes</h5>
    <button type="button" class="btn btn-outline-dark text-uppercase">Shop Now</button>
  </div>
</div>
<div class="card col" style="width: 18rem;">
  <img src="images\heels green pointy.jpg" class="card-img-top rounded" style="height: 70%;" alt="">
  <div class="card-body">
    <h5 class="card-title">Heels</h5>
    <button type="button" class="btn btn-outline-dark text-uppercase">Shop Now</button>
  </div>
</div>
<div class="card col" style="width: 18rem;">
  <img src="images\boots brown short.jpg" class="card-img-top rounded" style="height: 70%;" alt="">
  <div class="card-body">
    <h5 class="card-title">Boots</h5>
    <button type="button" class="btn btn-outline-dark text-uppercase">Shop Now</button>
  </div>
</div>
</div>
<?php
$stmt = $dbconnection->prepare("SELECT category_id, category_name FROM category");
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Display Categories -->
<div class="container" style="margin-bottom:10px;">
    <h1 style="margin:7%">Categories</h1>
    <div class="container row" style="gap:2%">
        <?php foreach ($categories as $category): ?>
            <div class="card col" style="width: 18rem;">
                <img src="path_to_category_image.jpg" class="card-img-top rounded" style="height: 70%;" alt="<?= $category['category_name']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $category['category_name']; ?></h5>
                    <a href="?category_id=<?= $category['category_id']; ?>" class="btn btn-outline-dark text-uppercase">Shop Now</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
// Check if category_id is in the URL
if (isset($_GET['category_id'])) {
    $category_id = intval($_GET['category_id']);

    // Fetch items for the selected category
    $stmt = $dbconnection->prepare("SELECT item_id, item_description, item_image, item_total_number 
                            FROM items 
                            WHERE category_id = :category_id AND is_deleted = 0");
    $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
    $stmt->execute();
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Display Items -->
<div class="container item-container row" style="gap:2%; margin-top:20px;">
    <?php if (!empty($items)): ?>
        <?php foreach ($items as $item): ?>
            <div class="card col" style="width: 18rem;">
                <img src="<?= $item['item_image']; ?>" class="card-img-top rounded" style="height: 70%;" alt="<?= $item['item_description']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $item['item_description']; ?></h5>
                    <p>Total: <?= $item['item_total_number']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No items found for this category.</p>
    <?php endif; ?>
</div>

<?php
}
?>

</div>
</body>
</html>

<?php
include('./structure/footer.php');
?>