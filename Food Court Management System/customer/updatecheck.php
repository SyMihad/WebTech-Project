<?php
    function removeLine($filePath){
        $fileRead = fopen($filePath, 'r');
        $readData[] = array();
        $rowNum=0;
        $i =0;
        $willDelete = false;
        while(!feof($fileRead)){
            $data = fgets($fileRead);
            $user = explode("|", $data);
            $readData[$i]=$data;
            if(trim($user[2])==''){
                $willDelete = true;
                $rowNum = $i;
            }
            $i++;
        }
        fclose($fileRead);
        if($willDelete){
            $file_out = file($filePath);
            unset($file_out[$rowNum]);
            file_put_contents($filePath, implode("", $file_out));
        }
    }
?>

<?php
    removeLine('data/data.txt');
?>