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
    $newArr = array_chunk($array);
    $result = array();
    for ($i = 0; $i < count($newArr); $i++) {
        for ($j = 0; $j < count($newArr); $j++) {
            array_push($result,$newArr[j][i]);
        }
    }
	return $result;
}
//bài 3
function sort_arr() {
}
//bài này em mới nghĩ ra: là sắp xếp các lại mảng xong tìm khoảng cách nhỏ nhất giữa 2 phần tử. e chưa kịp làm
