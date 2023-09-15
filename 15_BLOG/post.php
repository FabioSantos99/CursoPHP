<?php

include_once('templates/header.php');

if(isset($_GET['id'])){

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if($post['id'] == $postId) {
            $currentPost = $post;
        }
    }

}

?>


<main id="post-container">
    <div class="content-container">

     <h1 id="main-title"><?=$currentPost['title'] ?></h1>
     <p id="post-description"><?= $currentPost['description'] ?></p>
     <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
     </div>
     <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus repudiandae nulla iste. Excepturi soluta facilis illum distinctio quae alias atque sequi dolore repellat obcaecati. Quisquam facilis facere molestias fugiat consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam sapiente, laboriosam pariatur maxime ex omnis voluptatem rem debitis obcaecati? Illum perspiciatis fugiat vel praesentium sit ipsa officia illo excepturi! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae sunt, consequuntur nobis necessitatibus quisquam totam optio, fugit ratione unde molestiae quos. Explicabo at in eveniet ducimus facilis nam atque et!
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci dolorem minus alias? Magnam, itaque vitae. Pariatur laborum perspiciatis itaque sunt atque quod veniam, illo, beatae, cumque animi qui minima nostrum?
     </p>
     <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus repudiandae nulla iste. Excepturi soluta facilis illum distinctio quae alias atque sequi dolore repellat obcaecati. Quisquam facilis facere molestias fugiat consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam sapiente, laboriosam pariatur maxime ex omnis voluptatem rem debitis obcaecati? Illum perspiciatis fugiat vel praesentium sit ipsa officia illo excepturi! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae sunt, consequuntur nobis necessitatibus quisquam totam optio, fugit ratione unde molestiae quos. Explicabo at in eveniet ducimus facilis nam atque et!
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci dolorem minus alias? Magnam, itaque vitae. Pariatur laborum perspiciatis itaque sunt atque quod veniam, illo, beatae, cumque animi qui minima nostrum?</p>
    </div>
    <aside id="nave-container">

    <h3 id="tags-title">Tags</h3>
    <ul class="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="caterories-list">
    <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
    </ul>

    </aside>
</main>
<?php

include_once('templates/footer.php')

?>