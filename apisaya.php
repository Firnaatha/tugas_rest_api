<?php
    //koneksi ke database mysql
include "conn.php";
    //membuat query/sql untuk mengambil seluruh data
    $sql= "SELECT * FROM mahasiswa";
    $query= mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        //echo $data["nama_mahasiswa"]." ";
        $item[]= array(
            'nama_mahasiswa' =>$data["nama_masiswa"],
            'email' =>$data["email"],
            'password' =>$data["password"],
            'id'=>$data["id_mahasiswa"]
        );
    }
    $response = array(
        'status'=>'ok',
        'data'=>$item
    );
    echo json_encode($response)

?>