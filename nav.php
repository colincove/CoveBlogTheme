            <nav class="blog-nav">
                <ul>
                    <li <?php if(!$_GET["category"]):?>class="selected"<?php endif; ?>><a href="index.php">all</a></li>
                    <li <?php if($_GET["category"] == "art"):?> class="selected"<?php endif; ?>><a href="index.php?category=art">sketchbook</a></li>
                    <li <?php if($_GET["category"] == "technical"):?>class="selected"<?php endif; ?>><a href="index.php?category=technical">technical</a></li>
                    <li  <?php if($_GET["category"] == "opinion"):?>class="selected"<?php endif; ?>><a href="index.php?category=opinion">opinion</a></li>
                    <li><?php get_search_form(true); ?></li>
                </ul>
            </nav>