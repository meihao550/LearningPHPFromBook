<?php
$food = 'cake';
/** 
 *　このプログラムはmatch式の使い方を深めるために作ったプログラム、公式ドキュメントに記載あり。
*/

/*$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
}; 

echo $return_value; */

$val = random_int(1, 5);

$return_luck = match($val) {
    1 => 'どんまい',
    2 => '今日はいいことあるかも',
    3 => '明日はいい日になる',
    4 => '今日も頑張ろう',
    5 => '来週まで幸運です。',
};
echo $return_luck;
?>