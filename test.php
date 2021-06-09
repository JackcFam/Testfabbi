<?php
//bài 2
function count($mang)
{
    
    $sophantu = count($mang);
   
    for ($i = 0; $i < $sophantu - 1; $i++)
    {
       
        $max = $i;
        for ($j = $i + 1; $j < $sophantu; $j++){
            if ($mang[$j] > $mang[$max]){
                $max = $j;
            }
        }
        
        $temp = $mang[$i];
        $mang[$i] = $mang[$max];
        $mang[$max] = $temp;
    }
  
    return $mang[0] + $mang[1];
}

//bài 1
function sort_array($array=array()) {
    $newArr = array_chunk($array, 3);
    $result = array();
    $d = 0;
    foreach ($newArr as $array) {
        for ($j = 0; $j < count($array); $j++) {
        	if($d == $j){
            	array_push($result,$array[$j]);
            }
        }
        $d++;
    }
	return $result;
}
//bài 3
function sort_arr() {
}
//bài này em mới nghĩ ra: là sắp xếp các lại mảng xong tìm khoảng cách nhỏ nhất giữa 2 phần tử. e chưa kịp làm
