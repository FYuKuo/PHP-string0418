<h1>PHP字串課程</h1>

<h3>常用字串</h3>
<h2>substr() / mb_substr()</h2>
<ul>
    <li>substr - 用於英文系統單字字集</li>
    <li>mb_substr - 用多語系統雙字元字集</li>
</ul>

<h4>字串 - 今天是星期一,是個blue monday</h4>

<?php
$str="今天是星期一,是個blue monday";

$sub=mb_substr($str,3,3);

echo "子字串使用sub ==> " . $sub;


?>

<h2>trim 去頭尾空白</h2>
<h4>字串=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>

<?php
$str="        空白         ";
echo $str;
echo "<br>";
$trim=trim($str);
echo $trim;



?>