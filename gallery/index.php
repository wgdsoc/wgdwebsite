<?php
    $title = "Home";
    chdir($_SERVER['DOCUMENT_ROOT']);
    include 'boilerplate-top.php';
?>

<style>
main {
    display:inline-block;
}
.gallery-item { 
    background-color:#eee;
    border:2px solid #ccc;
    box-sizing:border-box;
    margin:10px;
    padding:1em;
    display:inline-flex;
    flex-direction:column;
    width:29%;
}
.gallery-item img {
    width:100%;
    height:200px;
    object-fit:cover;
    border:2px solid #f7941e;
}
.gallery-title {
    font-weight:bold;
    text-align:center;
    font-size:1.1em;
    margin:0;
    text-overflow:ellipsis;
    overflow:hidden;
    white-space: nowrap; 
}
.gallery-author {
    text-align:center;
    margin:0;
    text-overflow:ellipsis;
    overflow:hidden;
    white-space: nowrap; 
    text-transform:uppercase;
    color:gray;
}
.g-desc-wrap {
height:3.5em;
margin:0;
}
.gallery-desc {
    margin:0;
position:relative;
top:50%;
transform:translate(0,-50%);
}
@media screen and (max-width:800px) {
    .gallery-item {
        width:100%;
    }
}
</style>

<h2> Gallery </h2>
<center>
<?php
    $files = array_diff(scandir("gallery/items"), array('.', '..'));
    shuffle($files);
    foreach($files as $file) {
        $lines = explode("\n",file_get_contents("gallery/items/$file"));
    ?>
<div class="gallery-item">
<div>
<img src="/images/gallery/<?=$lines[3]?>">
</div>
<div>
<p class="gallery-title" title="<?=htmlspecialchars($lines[0])?>">&zwj;<?=$lines[0]?></p>
<p class="gallery-author" title="<?=$lines[1]?>">&zwj;<?=$lines[1]?></p>
<div class="g-desc-wrap">
<p class="gallery-desc"  title="<?=$lines[2]?>">&zwj;<?=$lines[2]?></p>
</div>
</div>
</div>
    <?php
    }
?>
</center>
<br><br><br>

<?php
    include 'boilerplate-bottom.php';
?>
