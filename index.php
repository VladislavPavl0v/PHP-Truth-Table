<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./style.css">
</head>
<body>

<h3>Задание 1. Таблица истинности </h3>

  <?php $a1 = (!0) ?>
  <?php $a2 = (0 || 0) ?>
  <?php $a3 = (0 && 0) ?>
  <?php $a4 = (0 xor 0) ?>
  <?php $a5 = (!0) ?>
  <?php $a6 = (0 || 1) ?>
  <?php $a7 = (0 && 1) ?>
  <?php $a8 = (0 xor 1) ?>
  <?php $a9 = (!1) ?>
  <?php $a10 = (1 || 0) ?>
  <?php $a11 = (1 && 0) ?>
  <?php $a12 = (1 xor 0) ?>
  <?php $a13 = (!1) ?>
  <?php $a14 = (1 || 1) ?>
  <?php $a15 = (1 && 1) ?>
  <?php $a16 = (1 xor 1) ?>
  

<table>
  <tr>
    <th>A</th>
    <th>B</th>
    <th>!A</th>
    <th>A || B</th>
    <th>A && B</th>
    <th>A xor B</th>
  </tr>
  <tr>
    <td><?php echo 0; ?></td>
    <td><?php echo 0; ?></td>
    <td><?php echo (int)$a1; ?></td>
    <td><?php echo (int)$a2; ?></td>
    <td><?php echo (int)$a3; ?></td>
    <td><?php echo (int)$a4; ?></td>
  </tr>
  <tr>
    <td><?php echo 0; ?></td>
    <td><?php echo 1; ?></td>
    <td><?php echo (int)$a5; ?></td>
    <td><?php echo (int)$a6; ?></td>
    <td><?php echo (int)$a7; ?></td>
    <td><?php echo (int)$a8; ?></td>
  </tr>
  <tr>
    <td><?php echo 1; ?></td>
    <td><?php echo 0; ?></td>
    <td><?php echo (int)$a9; ?></td>
    <td><?php echo (int)$a10; ?></td>
    <td><?php echo (int)$a11; ?></td>
    <td><?php echo (int)$a12; ?></td>
  </tr>
  <tr>
  <td><?php echo 1; ?></td>
    <td><?php echo 1; ?></td>
    <td><?php echo (int)$a13; ?></td>
    <td><?php echo (int)$a14; ?></td>
    <td><?php echo (int)$a15; ?></td>
    <td><?php echo (int)$a16; ?></td>
  </tr>

</table>

<h3>Задание 2. Таблица гибкого сравнения(1=true, 0=false)</h3>

<table>
  <tr>
    <th></th>
    <th>true</th>
    <th>false</th>
    <th>1</th>
    <th>0</th>
    <th>-1</th>
    <th>"1"</th>
    <th>null</th>
    <th>"php"</th>
  </tr>
  <tr>
    <th>true</th>
    <td><?php echo (int)(true == true); ?></td>
    <td><?php echo (int)(true == false); ?></td>
    <td><?php echo (int)(true == 1); ?></td>
    <td><?php echo (int)(true == 0); ?></td>
    <td><?php echo (int)(true == -1); ?></td>
    <td><?php echo (int)(true == "1"); ?></td>
    <td><?php echo (int)(true == null); ?></td>
    <td><?php echo (int)(true == "php"); ?></td>
  </tr>
  <tr>
    <th>false</th>
    <td><?php echo (int)(false == true); ?></td>
    <td><?php echo (int)(false == false); ?></td>
    <td><?php echo (int)(false == 1); ?></td>
    <td><?php echo (int)(false == 0); ?></td>
    <td><?php echo (int)(false == -1); ?></td>
    <td><?php echo (int)(false == "1"); ?></td>
    <td><?php echo (int)(false == null); ?></td>
    <td><?php echo (int)(false == "php"); ?></td>
    
  </tr>
  <tr>
  <th>1</th>
    <td><?php echo (int)(1 == true); ?></td>
    <td><?php echo (int)(1 == false); ?></td>
    <td><?php echo (int)(1 == 1); ?></td>
    <td><?php echo (int)(1 == 0); ?></td>
    <td><?php echo (int)(1 == -1); ?></td>
    <td><?php echo (int)(1 == "1"); ?></td>
    <td><?php echo (int)(1 == null); ?></td>
    <td><?php echo (int)(1 == "php"); ?></td>
  </tr>
  <tr>
  <th>0</th>
    <td><?php echo (int)(0 == true); ?></td>
    <td><?php echo (int)(0 == false); ?></td>
    <td><?php echo (int)(0 == 1); ?></td>
    <td><?php echo (int)(0 == 0); ?></td>
    <td><?php echo (int)(0 == -1); ?></td>
    <td><?php echo (int)(0 == "1"); ?></td>
    <td><?php echo (int)(0 == null); ?></td>
    <td><?php echo (int)(0 == "php"); ?></td>
  </tr>
  <tr>
  <th>-1</th>
    <td><?php echo (int)(-1 == true); ?></td>
    <td><?php echo (int)(-1 == false); ?></td>
    <td><?php echo (int)(-1 == 1); ?></td>
    <td><?php echo (int)(-1 == 0); ?></td>
    <td><?php echo (int)(-1 == -1); ?></td>
    <td><?php echo (int)(-1 == "1"); ?></td>
    <td><?php echo (int)(-1 == null); ?></td>
    <td><?php echo (int)(-1 == "php"); ?></td>
  </tr>
  <tr>
  <th>"1"</th>
    <td><?php echo (int)("1" == true); ?></td>
    <td><?php echo (int)("1" == false); ?></td>
    <td><?php echo (int)("1" == 1); ?></td>
    <td><?php echo (int)("1" == 0); ?></td>
    <td><?php echo (int)("1" == -1); ?></td>
    <td><?php echo (int)("1" == "1"); ?></td>
    <td><?php echo (int)("1" == null); ?></td>
    <td><?php echo (int)("1" == "php"); ?></td>
  </tr>
  <tr>
  <th>null</th>
    <td><?php echo (int)(null == true); ?></td>
    <td><?php echo (int)(null == false); ?></td>
    <td><?php echo (int)(null == 1); ?></td>
    <td><?php echo (int)(null == 0); ?></td>
    <td><?php echo (int)(null == -1); ?></td>
    <td><?php echo (int)(null == "1"); ?></td>
    <td><?php echo (int)(null == null); ?></td>
    <td><?php echo (int)(null == "php"); ?></td>
  </tr>
  <tr>
  <th>"php"</th>
    <td><?php echo (int)("php" == true); ?></td>
    <td><?php echo (int)("php" == false); ?></td>
    <td><?php echo (int)("php" == 1); ?></td>
    <td><?php echo (int)("php" == 0); ?></td>
    <td><?php echo (int)("php" == -1); ?></td>
    <td><?php echo (int)("php" == "1"); ?></td>
    <td><?php echo (int)("php" == null); ?></td>
    <td><?php echo (int)("php" == "php"); ?></td>
  </tr>

</table>

<h3>Задание 2.1 Таблица жёсткого сравнения(1=true, 0=false)</h3>

<table>
  <tr>
    <th></th>
    <th>true</th>
    <th>false</th>
    <th>1</th>
    <th>0</th>
    <th>-1</th>
    <th>"1"</th>
    <th>null</th>
    <th>"php"</th>
  </tr>
  <tr>
    <th>true</th>
    <td><?php echo (int)(true === true); ?></td>
    <td><?php echo (int)(true === false); ?></td>
    <td><?php echo (int)(true === 1); ?></td>
    <td><?php echo (int)(true === 0); ?></td>
    <td><?php echo (int)(true === -1); ?></td>
    <td><?php echo (int)(true === "1"); ?></td>
    <td><?php echo (int)(true === null); ?></td>
    <td><?php echo (int)(true === "php"); ?></td>
  </tr>
  <tr>
    <th>false</th>
    <td><?php echo (int)(false === true); ?></td>
    <td><?php echo (int)(false === false); ?></td>
    <td><?php echo (int)(false === 1); ?></td>
    <td><?php echo (int)(false === 0); ?></td>
    <td><?php echo (int)(false === -1); ?></td>
    <td><?php echo (int)(false === "1"); ?></td>
    <td><?php echo (int)(false === null); ?></td>
    <td><?php echo (int)(false === "php"); ?></td>
    
  </tr>
  <tr>
  <th>1</th>
    <td><?php echo (int)(1 === true); ?></td>
    <td><?php echo (int)(1 === false); ?></td>
    <td><?php echo (int)(1 === 1); ?></td>
    <td><?php echo (int)(1 === 0); ?></td>
    <td><?php echo (int)(1 === -1); ?></td>
    <td><?php echo (int)(1 === "1"); ?></td>
    <td><?php echo (int)(1 === null); ?></td>
    <td><?php echo (int)(1 === "php"); ?></td>
  </tr>
  <tr>
  <th>0</th>
    <td><?php echo (int)(0 === true); ?></td>
    <td><?php echo (int)(0 === false); ?></td>
    <td><?php echo (int)(0 === 1); ?></td>
    <td><?php echo (int)(0 === 0); ?></td>
    <td><?php echo (int)(0 === -1); ?></td>
    <td><?php echo (int)(0 === "1"); ?></td>
    <td><?php echo (int)(0 === null); ?></td>
    <td><?php echo (int)(0 === "php"); ?></td>
  </tr>
  <tr>
  <th>-1</th>
    <td><?php echo (int)(-1 === true); ?></td>
    <td><?php echo (int)(-1 === false); ?></td>
    <td><?php echo (int)(-1 === 1); ?></td>
    <td><?php echo (int)(-1 === 0); ?></td>
    <td><?php echo (int)(-1 === -1); ?></td>
    <td><?php echo (int)(-1 === "1"); ?></td>
    <td><?php echo (int)(-1 === null); ?></td>
    <td><?php echo (int)(-1 === "php"); ?></td>
  </tr>
  <tr>
  <th>"1"</th>
    <td><?php echo (int)("1" === true); ?></td>
    <td><?php echo (int)("1" === false); ?></td>
    <td><?php echo (int)("1" === 1); ?></td>
    <td><?php echo (int)("1" === 0); ?></td>
    <td><?php echo (int)("1" === -1); ?></td>
    <td><?php echo (int)("1" === "1"); ?></td>
    <td><?php echo (int)("1" === null); ?></td>
    <td><?php echo (int)("1" === "php"); ?></td>
  </tr>
  <tr>
  <th>null</th>
    <td><?php echo (int)(null === true); ?></td>
    <td><?php echo (int)(null === false); ?></td>
    <td><?php echo (int)(null === 1); ?></td>
    <td><?php echo (int)(null === 0); ?></td>
    <td><?php echo (int)(null === -1); ?></td>
    <td><?php echo (int)(null === "1"); ?></td>
    <td><?php echo (int)(null === null); ?></td>
    <td><?php echo (int)(null === "php"); ?></td>
  </tr>
  <tr>
  <th>"php"</th>
    <td><?php echo (int)("php" === true); ?></td>
    <td><?php echo (int)("php" === false); ?></td>
    <td><?php echo (int)("php" === 1); ?></td>
    <td><?php echo (int)("php" === 0); ?></td>
    <td><?php echo (int)("php" === -1); ?></td>
    <td><?php echo (int)("php" === "1"); ?></td>
    <td><?php echo (int)("php" === null); ?></td>
    <td><?php echo (int)("php" === "php"); ?></td>
  </tr>

</table>
</body>
</html>
