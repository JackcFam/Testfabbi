<?php
//bài 2
function count($mang)
{
    $sophantu = count($mang);
    for ($i = 0; $i < $sophantu - 1; $i++)
    {
        $min = $i;
        for ($j = $i + 1; $j < $sophantu; $j++){
            if ($mang[$j] < $mang[$min]){
                $min = $j;
            }
        }
  
        $temp = $mang[$i];
        $mang[$i] = $mang[$min];
        $mang[$min] = $temp;
    }
  
    
    return $mang[$sophantu] + $mang[$sophantu -1];
} 

//bài 1
function sort_array($array=array()) {
    $result = array();
    $new_array = array_chunk($array,3);
    $m = 1;
   foreach($new_array as $array){
        foreach($array as $new){
            array_push($new[$m]);
        }
        $m++;
   }

   return $result;

}
//bài 3
function sort_arr() {
}
//bài này em mới nghĩ ra: là sắp xếp các lại mảng xong tìm khoảng cách nhỏ nhất giữa 2 phần tử. e chưa kịp làm
