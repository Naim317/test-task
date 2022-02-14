<?php

if (!empty($_FILES['csv_file']['size'] < 1048576)) //1 MB is equal to 1048576 byte.
{

    $file_data = fopen($_FILES['csv_file']['tmp_name'], 'r');
    fgetcsv($file_data);
    while ($row = fgetcsv($file_data)) {
        $data[] = array(
            'Name' => $row[0],
            'Position' => $row[1],
            'Office' => $row[2],
            'Age' => $row[3],
            'Start_date' => $row[4]

        );
    }
    echo json_encode($data);
} 


?>