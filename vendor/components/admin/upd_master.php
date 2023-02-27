<? 
$id = $_GET['id'];
$sql = $link->query("SELECT * FROM `masters` WHERE `id` = '$id'");
$sql->execute();
$arr = $sql->fetch(PDO::FETCH_ASSOC);
?>
<h1 style="text-align: center;color:white;margin:20px 0;">Изменить данные мастера</h1>
<form class="addMast" action="vendor/action/addMast.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$arr['id']?>">
    <input type="hidden" name="filename" value="<?=$arr['foto']?>">
    <input type="text" name="name" value="<?=$arr['name']?>" placeholder="Имя мастера">
    <input type="text" name="stage" value="<?=$arr['stage']?>" placeholder="стаж мастера">
    <textarea style="white-space: normal;" name="desc" id="" cols="50" rows="15" placeholder="Про мастера"><?=$arr['desc']?></textarea>
    Фото:<input type="file" name="foto">
    <input type="submit" name="upd" value="Изменить">
    <input type="submit" name="del" value="Удалить">
</form>
<h1 style="text-align: center;color:white;margin:20px 0;">Изменить стили</h1>
<div>
    <? 
    $styles = $link->query("SELECT * FROM `styles` WHERE `id_master` = '{$arr['id']}'");
    $styles->execute();
    $style = $styles->fetchAll(PDO::FETCH_ASSOC);
    foreach($style as $val){
    ?>
    <form style="margin-top: 30px;" class="addMast" action="vendor/action/addMast.php" method="post">
        <input type="hidden" name="id" value="<?=$val['id']?>">
        <input type="text" name="style" value="<?=$val['title']?>">
        <div style="display: flex; gap:20px;">
            <input type="submit" name="st_upd" value="Изменить">
            <input type="submit" name="st_del" value="Удалить">
        </div>
    </form>
    <? } ?>
</div>