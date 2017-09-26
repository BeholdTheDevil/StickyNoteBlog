<?php
    include_once 'header.php';
 ?>
 <section class="main-container">
     <div class="main-wrapper">
         <?php
            include_once "data.php";

            foreach ($data as $key => $value) {
                //keys = author, title, message
                createStickyNote($value);
            }

            function createStickyNote($data) {
                echo    "<div class='stickyNote'>
                            <div class='stickyImgContainer'>

                            </div>
                            <div class='stickyTitleContainer'>"
                                . $data["title"] .
                           "</div>
                            <div class='stickyFooter'>
                                <div class='date'>"
                                . $data["date"] .
                               "</div>
                               <div class='author'>"
                                . $data["author"] .
                              "</div>
                            </div>
                        </div>";
            }
          ?>
     </div>
 </section>
 </html>
