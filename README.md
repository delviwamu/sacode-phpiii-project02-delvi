# sacode-phpiii-project02-delvi
### Belajar tipe data PHP
	✅ String
	✅ Integer
	✅ Float
	✅ Array
	✅ Boolean
	✅ Null
	✅ Object

### string
``` php

<?php

$a = "Hello Word";
$b = 'Hello Word';

echo $a.'<br>'.$b;
echo "<br>";
echo $a;
// echo "<br>";

 ?>

```
### integer
```php

<?php

$x = 23;
echo "$x";
echo "<br>";
var_dump($x);

?>

```

### float
```php
<?php 

$x = 10.134;
var_dump ($x);


?>

```

### boolean
```php

<?php

$x = true;
$y = false;

var_dump($x);

?>

```

### array
```php

<?php

$student = array('Samuel','Nick','Arhy','Delvi');
foreach ($student as $s) 
	{
		echo 'Nama '. $s. "<br>";
	};

	$kelas = ['php I','php II','php III'];
	var_dump($kelas);

?>


```
### object
```php
<?php

class car {

	public $color;
	public $model;
	public function _construct($color, $model){
		$this->color = $color;
		$this->model = $model;
	}
	public function message(){
		return "my car is a " . $this->color . " " . $this->model . "!";
	}
}

$myCar = new car("black", "volvo");
echo $myCar->message();
echo "<br>";
$myCar = new car('Red', "Toyota");
echo $myCar->message();

?>

```
### null
```php
<?php 

$x = "Hello Word";
$x = null;
$y = null;

var_dump($y);
?>

```