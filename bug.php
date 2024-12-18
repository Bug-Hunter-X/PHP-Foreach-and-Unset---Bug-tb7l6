function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//The Problem

The above code looks correct for removing the 'bar' element from the array using unset(). However, there is a subtle issue.  When we use unset() inside foreach loop iterating over an array, it will cause the array's internal pointer to skip elements. This is why the array is not correctly modified. 

For example, if 'bar' was at index 1 (which it is), after removing it, the element at index 2('baz') would shift down to index 1. The loop pointer would then increment to the next index 2, skipping the element that was shifted.

