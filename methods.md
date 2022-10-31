#loadStream Список потоков
http://localhost:8080/api/logicalInputs/list

пост запрос json
{
"get_data": "all"
}

#createStream Создать поток
http://localhost:8080/api/logicalInputs/create

пост запрос json
{
"idPhysicalInput": 1,
"tsId":123,
"bitrate":123,
"namePort":123,
"description":123,
"sourceType":123,
"packetSize":123,
"idIpInputs":123,
"mode":123,
"activeInput":123,
"countservise":123
}

#editStream редактировать поток
http://localhost:8080/api/logicalInputs/edit

пост запрос json
{
"id": 31,
"idPhysicalInput": 3,
"tsId":555,
"bitrate":555,
"namePort":88888,
"description":555555,
"sourceType":888,
"packetSize":8888888,
"idIpInputs":8888,
"mode":8888,
"activeInput":888,
"countservise":888888
}



#deleteStream редактировать поток
http://localhost:8080/api/logicalInputs/delete

пост запрос json
{
"id": 32
}


