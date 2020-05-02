<SCRIPT LANGUAGE="javascript">

    /* Скрипт предназначен для того, чтобы получить
    от пользователя информацию и поместить ее на страницу 
	
	Сделано на скорую руку за 30 минут, ради развлечения*/

    var nam = prompt ("Напишите ТЕМУ ДИПЛОМНОЙ РАБОТЫ","");
    var name = prompt ("Теперь напишите пожалуйста ту же тему дипломной работы в родительном падеже и с маленькой буквы","тут напитите");

</SCRIPT>
    <p>
    </p>
    <p align="center">
        <b>Содержание</b>
    </p>
    <p align="left">
        Введение
    </p>
<?php
$align= '<center>';
$align2= '</center>';

 $a1='   <p>
        1 Методологические и нормативные правовые основы <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT>
    </p>';

  $a1_1=' <p>
    1.1 Теоретическая основа <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT>
    </p>';
   $a1_2='   <p>
        1.2 Практика применение <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT> в Российской федерации.
    </p>';
   $a1_3='   <p>
        1.3 Практика реализации <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT> зарубежом
    </p>';
   $a2='   <p>
        2 <SCRIPT LANGUAGE="javascript">document.write(nam);</SCRIPT> в жизни общества.
    </p>';
   $a2_1='   <p>
        2.1 <SCRIPT LANGUAGE="javascript">document.write(nam);</SCRIPT> как фактор развития общества.
    </p>';
    $a2_2='  <p>
        2.2 Социальные и образовательные аспекты <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT>.
    </p>';
   $a3='   <p>
        3 Анализ <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT>.
    </p>';
    $a3_1='  <p>
        3.1 Аналитика тематики <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT>.
    </p>';
    $a3_2='  <p>
        3.2 <SCRIPT LANGUAGE="javascript">document.write(nam);</SCRIPT> в нашем федеральном округе.
    </p>';
    $a3_3='  <p>
        3.3. Совершенствование <SCRIPT LANGUAGE="javascript">document.write(name);</SCRIPT>.
    </p>';
   $a_z='   <p align="left">
        Заключение
    </p>';
   $a_b='   <p align="left">
        Библиографический список
    </p>';
   $a_p='   <p align="left">
        Приложения
    </p>';
$a0='<p>
        &nbsp;
    </p>';
echo $a1 . $a1_1 . $a1_2 . $a1_3 . $a2 . $a2_1 . $a2_2 . $a3 .$a3_1. $a3_2.$a3_3.$a_z.$a_b.$a_p.$a0.$a0.$a0.$a0.$a0.$a0.$a0.$a0;
$ar=[];
$ar[]= $a1;
  $ar[] = $a1_1;
  $ar[] =  $a1_2;
  $ar[] = $a1_3;
  $ar[] =$a2;
  $ar[] =$a2_1;
  $ar[] =  $a2_2;
  $ar[] = $a3;
  $ar[] = $a3_2;
  $ar[] = $a3_3;
?>

    <p>
        &nbsp;
    </p>
    <p>
        &nbsp;
    </p>
    <p>
        &nbsp;
    </p>
    <p>
        &nbsp;

    </p>
    <p>
        &nbsp;
    </p>
    <p>
        &nbsp;
    </p>
    <p>
        &nbsp;
    </p>
    <p>
        &nbsp;
    </p>
    <br>
<style type="text/css">

    iframe {

        border : 0px;

    }

</style>
<?php
foreach ($ar as $a){
    echo '<br><br><br>';
    echo $align;
    echo $a;
    echo $align2;

    $d=5;
    $x=0;
    while ($x<$d){
        echo "<iframe src=https://fish-text.ru/get?format=html&number=5 width='770' height='209' align=left></iframe>"."<br><br><br>";
        $x++;
    }
};


?>
