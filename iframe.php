<SCRIPT LANGUAGE="javascript">

    /* Скрипт предназначен для того, чтобы получить
    от пользователя информацию и поместить ее на страницу 
	
	Сделано на скорую руку за 30 минут, ради развлечения. 
	Можно провести рефакторинг,	но это не вписалось в лимит 30 минут*/

    var nam = prompt ("Напишите ТЕМУ ДИПЛОМНОЙ РАБОТЫ","Проблематика написания дипломных проектов");
    var name = prompt ("Теперь напишите пожалуйста ту же тему дипломной работы в родительном падеже и с маленькой буквы","проблематики написания дипломных проектов");

</SCRIPT>
    <link rel="stylesheet" type="text/css" href="iframe.css" />
<?php
echo '<p></p><p align="center"><b>Содержание</b></p><p align="left">Введение</p>';
// формируем содержание

 $content1='   <p>
        1 Методологические и нормативные правовые основы <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT>
    </p>';

  $content1_1=' <p>
    1.1 Теоретическая основа <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT>
    </p>';
   $content1_2='   <p>
        1.2 Практика применение <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT> в Российской федерации.
    </p>';
   $content1_3='   <p>
        1.3 Практика реализации <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT> зарубежом
    </p>';
   $content2='   <p>
        2 <SCRIPT LANGUAGE="javascript">document.write(nam);</SCRIPT> в жизни общества.
    </p>';
   $content2_1='   <p>
        2.1 <SCRIPT LANGUAGE="javascript">document.write(nam);</SCRIPT> как фактор развития общества.
    </p>';
    $content2_2='  <p>
        2.2 Социальные и образовательные аспекты <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT>.
    </p>';
   $content3='   <p>
        3 Анализ <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT>.
    </p>';
    $content3_1='  <p>
        3.1 Аналитика тематики <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT>.
    </p>';
    $content3_2='  <p>
        3.2 <SCRIPT LANGUAGE="javascript">document.write(nam);</SCRIPT> в нашем федеральном округе.
    </p>';
    $content3_3='  <p>
        3.3. Совершенствование <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT>.
    </p>';
   $content_z='   <p align="left">
        Заключение
    </p>';
   $content_b='   <p align="left">
        Библиографический список
    </p>';
   $content_p='   <p align="left">
        Приложения
    </p>';
$content0='<p>
        &nbsp;
    </p>';
	// выводим содержание
echo $content1 . $content1_1 . $content1_2 . $content1_3 . $content2 . $content2_1 . $content2_2 . $content3 .$content3_1. $content3_2.$content3_3.$content_z.$content_b.$content_p.$content0.$content0.$content0.$content0.$content0.$content0.$content0.$content0;
$contentArr=[];
// помещаем все это добро в массив для дальнейшего вывода циклом
$contentArr[]= $content1;
$contentArr[] = $content1_1;
$contentArr[] =  $content1_2;
$contentArr[] = $content1_3;
$contentArr[] =$content2;
$contentArr[] =$content2_1;
$contentArr[] =  $content2_2;
$contentArr[] = $content3;
$contentArr[] = $content3_2;
$contentArr[] = $content3_3;
echo '<p>&nbsp;</p><p>&nbsp;</p><br>';
$contentlign= '<center>';
$contentlignAnd= '</center>';
foreach ($contentArr as $a){
    echo '<br><br><br>';
    echo $contentlign;
    echo $a;
    echo $contentlignAnd;

    $d=5;
    $x=0;
    while ($x<$d){
        echo "<iframe src=https://fish-text.ru/get?format=html&number=5 width='770' height='209' align=left></iframe>"."<br><br><br>";
        $x++;
    }
};
?>

