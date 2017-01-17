<?php
//获取表单内数据
$z01 = $_POST["wenti01"];
$z02 = $_POST["wenti02"];
$z03 = $_POST["wenti03"];
$z04 = $_POST["wenti04"];
$f05 = $_POST["wenti05"];
$z06 = $_POST["wenti06"];
$z07 = $_POST["wenti07"];
$z08 = $_POST["wenti08"];
$f09 = $_POST["wenti09"];
$z10 = $_POST["wenti10"];
$z11 = $_POST["wenti11"];
$z12 = $_POST["wenti12"];
$f13 = $_POST["wenti13"];
$z14 = $_POST["wenti14"];
$z15 = $_POST["wenti15"];
$z16 = $_POST["wenti16"];
$f17 = $_POST["wenti17"];
$z18 = $_POST["wenti18"]; 
$f19 = $_POST["wenti19"];
$z20 = $_POST["wenti20"];
//逆转反向数据
if ($f05 = "1")
    {
        $z05 = 4;
    }
    else if ($f05 = "2")
    {
        $z05 = 3;
    }
    else if ($f05 = "3")
    {
        $z05 = 2;
    }
    else 
    {
        $z05 = 1;
    }
if ($f09 = "1")
    {
        $z09 = 4;
    }
    else if ($f09 = "2")
    {
        $z09 = 3;
    }
    else if ($f09 = "3")
    {
        $z09 = 2;
    }
    else 
    {
        $z09 = 1;
    }
if ($f13 = "1")
    {
        $z13 = 4;
    }
    else if ($f13 = "2")
    {
        $z13 = 3;
    }
    else if ($f13 = "3")
    {
        $z13 = 2;
    }
    else 
    {
        $z13 = 1;
    }
if ($f17 = "1")
    {
        $z17 = 4;
    }
    else if ($f17 = "2")
    {
        $z17 = 3;
    }
    else if ($f17 = "3")
    {
        $z17 = 2;
    }
    else 
    {
        $z17 = 1;
    }
if ($f19 = "1")
    {
        $z19 = 4;
    }
    else if ($f19 = "2")
    {
        $z19 = 3;
    }
    else if ($f19 = "3")
    {
        $z19 = 2;
    }
    else 
    {
        $z19 = 1;
    }
//计算粗分
$cufen = $z01 + $z02 +$z03 + $z04 + $z05 + $z06 + $z07 + $z08 + $z09 + $z10 + $z11 + $z12 + $z13 + $z14 + $z15 + $z16 + $z17 + $z18 + $z19 + $z20;
//计算标准分
$bzf = $cufen * 1.25;
//判断
if ($bzf < "50")
    {
        echo "恭喜，你完全没有焦虑症！";
    }
    else if ($bzf >= "50" and $bzf < "60")
    {
        echo "轻度";
    }
    else if ($bzf >= "60" and $bzf < "70")
    {
        echo "中度";
    }
    else
    {
        echo "重度";
    }
echo "$bzf";
?>