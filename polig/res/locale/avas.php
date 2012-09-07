<?
$ex_ava_dir = '../images/avatars/ex/';

$d = dir($ex_ava_dir);

$avas_out ='';

$id_c = 2000;
//[{1001, "123.jpg"}, {1002, "321.jpg"}]
while (false !== ($entry = $d->read())) {
    if (($entry!='.') and ($entry!='..')) {
        $avas_out .= '{'.$id_c.',"res/images/avatars/ex/'.$entry.'"},';
        $id_c++;
    }
}
$d->close();

$avas_out = '['.substr($avas_out, 0, -1).']';

echo $avas_out;
?>
