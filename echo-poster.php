<?php
echo'
                    <li class="poster">
                        <a href="poster.php?id_poster='.$row['id_poster'].'&site-title=Ogłoszenie">
                            <h2 class="price">'.$row['price'].' zł</h2>
                            <p class="title">'.$row['title'].'</p>

                            <div class="picture">
                                <img src="img/'.$row['pic1'].'">
                            </div>
                        </a>
                    </li>
                ';