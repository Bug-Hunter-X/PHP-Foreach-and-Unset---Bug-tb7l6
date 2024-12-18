function foo(array $arr) {
  //Solution 1: Iterate in reverse
  for ($i = count($arr) - 1; $i >= 0; $i--) {
    if ($arr[$i] === 'bar') {
      unset($arr[$i]);
    }
  }
  return $arr;
}

//Solution 2: Using array_filter
function foo2(array $arr) {
  return array_filter($arr, function ($value) {
    return $value !== 'bar';
  });
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

$result2 = foo2($arr);
print_r($result2); // Output: Array ( [0] => foo [2] => baz )
