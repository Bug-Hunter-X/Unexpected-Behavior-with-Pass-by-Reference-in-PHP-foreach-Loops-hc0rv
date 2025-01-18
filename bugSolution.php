function foo(array $arr) {
  $arr2 = [];
  foreach ($arr as $value) {
    $arr2[] = $value + 1;
  }
  return $arr2;
} 