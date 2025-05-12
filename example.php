<?php

    //declare(strict_types=1);
    use Grpc\ChannelCredentials;
    use Yandex;
    require 'vendor/autoload.php';
	//тут ожидаются ваши данные 
	$iam = "t1.9...........";
	$folderid = "b1............";
	//конец ваших данных
    $options = [
		//'credentials' => ChannelCredentials::createDefault(),
		'credentials' => ChannelCredentials::createSsl(),
		'update_metadata' => function($metaData){
			$metaData['authorization'] = ['Bearer '.$iam];
			return $metaData;
		}
	];


	//["authorization" => ["Bearer $iam"]]
	$client = new \Yandex\Cloud\Ai\Dataset\V1\DatasetServiceClient('llm.api.cloud.yandex.net:443', $options);
	$clienddatasetrequest = new \Yandex\Cloud\Ai\Dataset\V1\CreateDatasetRequest();
	$clienddatasetrequest->setFolderId($folderid);
	//$clienddatasetrequest->setMetadata("Authorization: Bearer ".$yc->yamtoken);
	$clienddatasetrequest->setMetadata("Authorization: Bearer ".$iam);
	$clienddatasetrequest->setName("grpc dataset v2");
	$clienddatasetrequest->setDescription("test php grps creation");
	$clienddatasetrequest->setTaskType("TextToTextGeneration");
	$clienddatasetrequest->setUploadFormat("jsonlines");
	list($reply, $status) = $client->Create($clienddatasetrequest)->wait();
    /* ожидается что статус будет содержать следующую структуру
	"status": {
        "metadata": [],
        "code": 0,
        "details": ""
    }         
	*/
    echo json_encode($status);
	// для возвращения id датасета используется $reply->getDatasetId(); //возвращает обьект CreateDatasetResponce
	
?>
