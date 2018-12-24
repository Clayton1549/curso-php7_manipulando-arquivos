<?php 

$images = scandir("images");


$data = array();


foreach ($images as $img) {
	if(!in_array($img, array(".",".."))){
		$filename = "images". DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);
		$info["size"]  = filesize($filename);
        $info["modifield"] = date("d/m/Y H:i:s" , fileatime($filename));
        $info["Url"] = "http://localhost/DIR".str_replace("\\","/",$filename);
		array_push($data, $info);

		//var_dump($info);

	}
}

echo json_encode($data);




?>