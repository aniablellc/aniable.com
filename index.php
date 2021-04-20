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
$url = "https://aniable.com/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="aniable.css">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="og:title" content="<?php echo $title ?>">
    <meta name="og:description" content="<?php echo $description ?>">
    <meta name="og:image" content="<?php echo $image ?>">
    <meta name="og:locale" content="en_US">
    <meta name="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="og:url" content="<?php echo $url ?>">
    <link rel="canonical" href="<?php echo $url ?>">
    <link rel="icon" href="favicon.ico">
    <link rel="icon" href="favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#FFFFFF">
</head>

<body>
    <?php require './templates/header.php'; ?>
    <main></main>
    <?php require './templates/footer.php'; ?>
    <script src="aniable.js"></script>
</body>

</html>