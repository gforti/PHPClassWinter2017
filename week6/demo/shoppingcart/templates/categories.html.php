<?php if ( isset($allCategories) ) : ?>
<ul> 
    <li><a href="?">All</a> </li>    
    <?php foreach ($allCategories as $category): ?>
        <li>
            <a href="?cat=<?php echo $category['id']; ?>">
                <?php echo $category['category']; ?>
            </a>
        </li>    
    <?php endforeach; ?> 
</ul>
<?php endif; ?>