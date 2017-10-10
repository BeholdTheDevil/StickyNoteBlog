<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta lang="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
    include_once 'header.php';
 ?>
 <section class="main-container">
     <div class="main-wrapper">
         <?php
            include_once "data.php";

            $n = 1;
            foreach ($data as $key => $value) {
                //keys = author, title, message
                createStickyNote($value, $n);
                $n += 2;
            }

            function createStickyNote($data, $n) {
                echo "<a class='stickyNoteLink' href='notepage.php?postid=" . $data["postid"] . "'>
                        <div class='stickyNote'>
                            <div class='stickyImgContainer' style='background-image:" . $data["image"] . ";'>

                            </div>
                            <div class='stickyTitleContainer'>"
                                . $data["title"] .
                           "</div>
                            <div class='stickyFooter'>
                                <div class='date'>"
                                    . $data["date"] .
                               "</div>
                               <div class='author'>
                                    Posted by: " . $data["author"] .
                              "</div>
                            </div>
                        </div>
                    </a>";

                echo '<style>.stickyNoteLink:nth-child(' . $n . ') .stickyNote {
                                background-color: ' . $data["color"] . ';
                             }

                             .stickyNoteLink:nth-child(' . $n . ') .stickyNote div {
                                background-color: ' . $data["color"] . ';
                             }

                             .stickyNoteLink:nth-child(' . $n . ') .stickyNote:hover:before {
                                 border-color: ' . $data["color"] . ' #FAFAFA;
                             }
                      </style>';
            }
          ?>
     </div>
 </section>
 </html>
