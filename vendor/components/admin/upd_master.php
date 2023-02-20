<?
session_start();
include '../connect.php';
$id = $_GET['id'];
$sql = $link->query("SELECT * FROM `masters` WHERE `id` = '$id'");
$sql->execute();
$arr = $sql->fetch(PDO::FETCH_ASSOC);
?>
<style>
    .a_btn{
        display: block;
        background-color: #BB8C5F;
        padding: 10px 20px;
         width: fit-content;
        border-radius: 5px;
        color: white;
        margin-bottom: 20px;
        text-decoration: none;
    }
</style>
<a style="margin-bottom:20px;" class="a_btn" href="../../../admin.php?masters">Вернуться назад</a>
<h1>Изменить данные мастера</h1>
<form style="display: flex; flex-direction:column;width:300px;gap:20px;" action="../../action/addMast.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$arr['id']?>">
    <input type="hidden" name="filename" value="<?=$arr['foto']?>">
    <input type="text" name="name" value="<?=$arr['name']?>" placeholder="Имя мастера">
    <input type="text" name="stage" value="<?=$arr['stage']?>" placeholder="стаж мастера">
    <textarea name="desc" id="" cols="30" rows="10" placeholder="Про мастера"><?=$arr['desc']?></textarea>
    Фото:<input type="file" name="foto">
    <input type="submit" name="upd" value="Изменить">
    <input type="submit" name="del" value="Удалить">
</form>
<h1>Изменить стили</h1>
<div style="display: flex; flex-direction:column;width:300px;gap:20px;">
    <? 
    $styles = $link->query("SELECT * FROM `styles` WHERE `id_master` = '{$arr['id']}'");
    $styles->execute();
    $style = $styles->fetchAll(PDO::FETCH_ASSOC);
    foreach($style as $val){
    ?>
    <form style="display: flex; flex-direction:column;width:300px;gap:20px;" action="../../action/addMast.php" method="post">
        <input type="hidden" name="id" value="<?=$val['id']?>">
        <input type="text" name="style" value="<?=$val['title']?>">
        <div style="display: flex; gap:20px;">
            <input type="submit" name="st_upd" value="Изменить">
            <input type="submit" name="st_del" value="Удалить">
        </div>
    </form>
    <? } ?>
</div>