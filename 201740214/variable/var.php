<?php


$name = "대림대학교";
echo $name. "\n"; // $name 변수를 출력

echo ${"name"}; // 중괄호 사이에, 문자열 
// 안에 있는 문자열과 같은 이름을 가지는 변수를 선택해 주세요. 그리고 출력해주세요.

$daelim = "name";
echo ${$daelim};