<?php


// echo "السطر الأول<br>";
// echo "السطر الثاني<br>"; 
// echo "السطر الثالث<br>";

// #--------------------------------------------
// // نوع البيانات في php    
// echo gettype(true);
// echo "<br>";
// echo gettype(false);
// echo "<br>";
// echo gettype(5); 
// echo "<br>";
// echo "✅ PHP يعمل بنجاح!";
// echo "<br>";
// echo gettype(20.5);
// echo "<br>";
// echo gettype(70.30);
// echo "<br>";
// echo gettype(array("aaaa","sss","dddd"));
// echo "<br>";
// echo gettype("abdullah");
// echo "<br>";


// #--------------------------------------------
// التحويل التلقائي للبيانات 
// echo 1 + "2";
// echo '<br>';
// echo gettype(1 + "2");
// echo "<br>";
// echo (true);
// echo "<br>";
// echo gettype(true);
// echo "<br>";
// echo gettype(5 + 15.5);
// echo "<br>";
// echo 10 + (int)15.5; // inetger 
// echo "<br>";
// echo gettype(10 + (int) 15.5);
// echo "<br>";
// echo (int) 10.5 + (int) 10.5; // 20 هنا تاخذ الكسور 
// echo "<br>";
// echo (int) (10.5 + 10.5); // 21  هنا تجمع الكسور
// echo "<br>";
// #----------------------------------------------------

// // String Escaping
// echo 'hello "abdo"';
// echo "<br>";
// echo "hello abdo";
// echo "<br>";
// echo 'hello abdo \"';
// echo "<br>";
// echo 'hello abdo "';
// echo "<br>";

// echo nl2br('hello 
// taiz
// wellcome'); // نزول اسطر 
// echo "<br>";
// #------------------------------------------------------

// heredoc
// nordoc
// $name = "abdo";
// echo "<br>";

// echo '<ul>';
//  echo "<li>" . $name . "</li>";
//  echo "<li>" . $name . "</li>";
//  echo "<li>" . $name . "</li>";
// echo '</ul>';

// echo "<br>";

// echo <<<"navlinks"
// <ul>
//   <li>$name</li>
//   <li>$name</li>
//   <li>$name</li>
// </ul>
// navlinks;

#---------------------------------------------------------
// معلومات عن المصفوفة المتقدمه
// echo '<pre>'
// print_r([

//   0 => "ali",
//   "A" => "ahmed",
//   5=> "abdullah",
//   "Names"=>["samer","samy","sleem","1","2","3"]
// ]);

// echo '</pre>';

#---------------------------------------
// echo "<br>";

# المتغيرات   في ماغير واحد   
# التسميه

// $a ="abdu";
// $$a ="hamed";
// $$$a ="ahmed";

// echo  $a;
// echo "<br>";
// echo $$a;
// echo "<br>";
// echo $$$a;

#=-------------------------------------------
# معرفة  مكونات ومواصفات الاصدار لل php
// echo '<br>';
// echo php_uname();
// echo '<br>';
// echo PHP_VERSION;
// echo '<br>';
// echo __DIR__;
#---------------------------------------------------
// echo '<br>';

// # العمليات الحسابيه

// echo 20 + 30;
// echo '<br>';
// echo gettype(20 +30);
// echo '<br>';
// echo 20 * 30;
// echo '<br>';
// echo gettype(20 * 30);
// echo '<br>';
// echo 20 - 30;
// echo '<br>';
// echo gettype(20 - 30);
// echo '<br>';
// echo 20 / 30;
// echo '<br>';
// echo gettype(20 / 30);
// echo '<br>';
// echo 20 % 30;
// echo '<br>';
// echo gettype(20 % 30);
// echo '<br>';

// echo 3 ** 4;// الاس 

// $a = 50;
// $a += 5;
// echo '<br>';
// echo $a ;
// echo '<br>';

// $a = 50;
// $a -= 5;
// echo '<br>';
// echo $a;


// echo '<br>';

// var_dump(100 == 100);
// echo '<br>';
// var_dump(100 == 110);
// echo '<br>';
// var_dump(100 != 110);
// echo '<br>';
// var_dump(100 <> 1100);
// echo '<br>';
// var_dump(100 <> 10);
// echo '<br>';
// var_dump(100 === "110"); // false لان قيمتين   من نوع string  و  int 
// echo '<br>';
// var_dump(100 === 100);
// echo '<br>';
// var_dump(100 <=>100);
// echo '<br>';
// var_dump(100 <= 110);
// echo '<br>';
// var_dump(100 > 110);
// echo '<br>';
// var_dump(100 < 110);
// echo '<br>';

#-----------------------------------------------------------
#-----------------------------------------------------------
#  uses if  else  elseif 

// if (30 > 30){
//     echo "fristcondation";
// }
// elseif(20 > 20){
//     echo " second condation";
// }
// else{
//     echo "no";
// }

// $name = "saana";
// if ($name == "taiz"){
//     echo "this is taiz";
// }elseif($name == "saana"){
//     echo "this is sanna";
// }elseif($name == "aden"){            
//     echo "this is aden";      
// }
// else{            
//     echo "is not sity";     
// }          


        
 ?>

# الثالث
// $students = ["Ali", "Omar", "Zed", "Lena", "Areej"];

// $result = array_filter($students, function($name) {
//     return strlen($name) > 3;
// });

// print_r($result);

#  الثاني
// function userInfo($name, $age) { 
//     return "الاسم : $name - العمر : $age سنه ";
// }
//    echo userInfo ("ahmed", 66);
//    echo userInfo ("hamed", 5);

<!-- 
    التكليف الثاني
$names = ["انيس","عبدالعزيز","علي","محمد","عبدالله"];
    foreach ($names as $name) {

        echo " back end مرحبا[$name],  في عالم  ",'<br>'; 
    } 
  
    echo '<br>';
    
    
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i - عدد زوجي\n";
    } else {
        echo "$i - عدد فردي\n";
    }
} -->
















<!-- // echo $_GET["username"]
// 

// <form action="" method= "get">
// <input type="text" name ="username">
// <input type="submit" value="send">
// </form> -->