<?php

/**
 * Main code file for Aniable.com
 *
 * PHP Version: 8.0.1
 *
 * @category  Aniable
 * @package   Default
 * @author    Sean O'Connor <seano@aniable.com>
 * @copyright 2021 Aniable, LLC
 * @license   MIT https://mit-license.org/
 * @link      https://github.com/aniablellc/aniable.com
 */

$title = "Aniable, LLC";
$description = "Infinite Possibilities";
$image = "https://placekitten.com/1200/630"; // Placeholder
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $description ?>">
    <meta name="robots" content="index, follow">
    <meta name="og:title" content="<?php echo $title ?>">
    <meta name="og:description" content="<?php echo $description ?>">
    <meta name="og:image" content="<?php echo $image ?>">
    <link rel="stylesheet" href="aniable.css">
    <script src="aniable.js" defer></script>
</head>

<body>
    <div id="wrapper">
        <?php require './templates/header.php'; ?>
        <main></main>
        <?php require './templates/footer.php'; ?>
    </div>
</body>

</html>