<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta lang="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/notepage.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">

    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</head>
<?php
    include_once 'header.php';
?>
<section class="main-container">
    <div class="main-wrapper">
        <?php
            include_once 'data.php';

            foreach ($data as $key => $value) {
                if($value["postid"] === filter_input(INPUT_GET, "postid", FILTER_SANITIZE_NUMBER_INT)) {
                  echo "<div class='blogPostContainer'>
                            <div class='blogImageContainer' style='background-image:" . $value["image"] . ";'>

                            </div>
                            <div class='blogTitleContainer'>
                                <h1 class=blogTitle>"
                                . $value["title"] .
                                "</h1>
                            </div>
                            <div class='blogMainContent'>"
                                . $value["message"] .
                            "</div>
                            <div class='blogFooter'>
                                <div class='blogDate'>"
                                    . $value["date"] .
                                "</div>
                                <div class='blogAuthor'>
                                    Posted by: " . $value["author"] .
                                "</div>
                            </div>
                        </div>";
                }
            }
         ?>
    </div>
</section>
</html>
