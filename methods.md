#Описание API
Каждый метод возвращает следующие данные.

"Data": - Входные данные из GET или POST запросов,

"Errors": "" - сопроводительные ошибки. Если ошибок нет, то пусто,

"Result": - false, если результат не получен. 
(необязательно должна быть ошибка). 
true - если метод выполнился, но возврат каких-либо данных 
не предусмотрен.
json с данными 

##Класс logicalInputs

###loadStream Список потоков
http://localhost:8080/api/logicalInputs/list

Есть поле id - это сквозная id-нумерация потоков.
При создание нового потока значение id увеличивается на единицу.
При удаление потока, поток удаляется безвозвратно и id этого 
потока больше не используется.
Данный id нужно использовать для дальнейшей работы с потоком, но не
выводить его на фронте.

Поле tsNumber должно выводится на фронте. Это порядковый номер потока 
в данном ПО. Он создается автоматически при создании потока. 

Поле 

пост запрос json
{
"get_data": "all"
}

В ответ получаем json список (массив) созданных потоков.
Для каждого потока получаем примерно такой массив
{
"id": 30,
"tsNumber": 1,
"idPhysicalInput": 1,
"tsId": 222,
"bitrate": "123.00",
"namePort": "123",
"description": "123",
"sourceType": "123",
"packetSize": 123,
"idIpInputs": 123,
"mode": 123,
"activeInput": 123,
"countService": 123
},

###createStream Создать поток
http://localhost:8080/api/logicalInputs/create
Вводим данные, создаем поток.

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
"countService":123
}

###editStream редактировать поток
http://localhost:8080/api/logicalInputs/edit
Вводим все данные.
И те которые надо отредактировать и те, которые 
не надо редактировать. Те данные, которые не 
надо редактировать оставляем без изменений. Если ввести 
пустые данные, то либо полим ошибку, либо данные перезапишутся
пустыми значениями.


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
"countService":888888
}



###deleteStream удалит поток
http://localhost:8080/api/logicalInputs/delete
Вводим id потока, который надо удалить.
id должны храниться в стайте на фронте 
(Эти id не отображаются на сайте)

При удаление птока переформатируются Поле tsNumber у всех потоков.
Т.е. все номера у последующих потоко tsNumber уменьшается на 1.
Пример. У нас есть  потоки с tsNumber 1, 2, 3 , 4, 5, 6
Удаляем поток №4.
После этого поток №5 становится №4.
Поток №6 становится №5.
На выходе мы имее потоки с tsNumber 1, 2, 3 , 4, 5, 
где потоки 4 и 5 это бывшие 5 и 6 соответственно.

###Внимание! 
После удаления потока на фронте надо перерисовать
Список потоков. Для этого нужно вызвать метод loadStream.

пост запрос json
{
"id": 32
}

## Класс inform
### Статистика (текущая) входного устройства в Ремуксере (графе)
http://localhost:8080/api/inform/getRemuxerDeviceStatistics
Вводим graphGuid, deviceGuid и type.
type=1 входное устройство (по умолчанию)

пост запрос json
{
"graphGuid": "b0aabbbc-f077-463f-80dd-e39e06d432aa",
"deviceGuid": "21d877a9-3785-4240-bfcc-4a116fc370d1",
"type": 1
}

Ответ json
{
"Data": {
"graphGuid": "b0aabbbc-f077-463f-80dd-e39e06d432aa",
"deviceGuid": "21d877a9-3785-4240-bfcc-4a116fc370d1",
"type": 1
},
"Errors": "",
"Result": {
"list": [
{
"name": "SL Network Source (Raw)",
"params": [
{
"name": "System time",
"value": "028:34:51.658"
},
{
"name": "Data counter [byte]",
"value": "290663405284"
},
{
"name": "Bit rate [bit/sec]",
"value": "22593088"
},
{
"name": "Last error"
}
]
}
]
}
}


### Статистика (текущая) выходного устройства в Ремуксере (графе)
http://localhost:8080/api/inform/getRemuxerDeviceStatistics
Вводим graphGuid, deviceGuid и type.
type=0 выходное устройство

пост запрос json
{
"graphGuid": "b0aabbbc-f077-463f-80dd-e39e06d432aa",
"deviceGuid": "674b862d-3d29-4a87-87c7-aac5331f11c8",
"type": 0
}

Ответ json
{
"Data": {
"graphGuid": "b0aabbbc-f077-463f-80dd-e39e06d432aa",
"deviceGuid": "674b862d-3d29-4a87-87c7-aac5331f11c8",
"type": 0
},
"Errors": "",
"Result": {
"list": [
{
"name": "SL Network Renderer (Raw)",
"params": [
{
"name": "Device time",
"value": "028:38:10.688"
},
{
"name": "Stream time afte pll",
"value": "028:38:48.511"
},
{
"name": "Stream time",
"value": "028:38:48.511"
},
{
"name": "Fullness fifo",
"value": "000:00:01.002"
},
{
"name": "Reset",
"value": "0"
},
{
"name": "Last error"
}
]
}
]
}
}

### Статистика (текущая) Графа (Ремуксере)
http://localhost:8080/api/inform/getRemuxerStatistics
Вводим graphGuid

пост запрос json
{
"graphGuid": "43f44e96-f0fd-4146-94ac-992bd7223403"
}

Ответ json
{
"Data": {
"graphGuid": "b0aabbbc-f077-463f-80dd-e39e06d432aa"
},
"Errors": "",
"Result": {
"list": [
{
"name": "Service #1080",
"params": [
{
"id": "status",
"name": "Status",
"value": "Main"
},
{
"id": "Main time",
"name": "Main time",
"value": "028:41:52.177"
},
{
"id": "Main fullness fifo",
"name": "Main fullness fifo",
"value": "000:00:01.078"
},
{
"id": "Main pcr error",
"name": "Main pcr error",
"value": "-00:00.000/-00:00.000/00:00.000"
},
{
"id": "Main pll regulator/a",
"name": "Main pll regulator/a",
"value": "0.000000/0.000000"
},
{
"id": "Main bitrate",
"name": "Main bitrate",
"value": "9999908"
},
{
"id": "Main overload pcr",
"name": "Main overload pcr",
"value": "0"
},
{
"id": "Main velocity",
"name": "Main velocity",
"value": "0.000000"
},
{
"id": "Reserve time",
"name": "Reserve time",
"value": "000:00:00.000"
},
{
"id": "Reserve fullness fifo",
"name": "Reserve fullness fifo",
"value": "000:00:00.000"
},
{
"id": "Reserve pcr error",
"name": "Reserve pcr error",
"value": "-07:45.119/00:00.000/--07:45.119"
},
{
"id": "Reserve pll regulator/a",
"name": "Reserve pll regulator/a",
"value": "0.000000/0.000000"
},
{
"id": "Reserve bitrate",
"name": "Reserve bitrate",
"value": "0"
},
{
"id": "Reserve overload pcr",
"name": "Reserve overload pcr",
"value": "0"
},
{
"id": "Reserve velocity",
"name": "Reserve velocity",
"value": "0.000000"
},
{
"id": "Gochs time",
"name": "Gochs time",
"value": "000:00:00.000"
},
{
"id": "Gochs fullness fifo",
"name": "Gochs fullness fifo",
"value": "000:00:00.000"
},
{
"id": "Gochs pcr error",
"name": "Gochs pcr error",
"value": "-07:45.119/00:00.000/--07:45.119"
},
{
"id": "Gochs pll regulator/a",
"name": "Gochs pll regulator/a",
"value": "0.000000/0.000000"
},
{
"id": "Gochs bitrate",
"name": "Gochs bitrate",
"value": "0"
},
{
"id": "Gochs overload pcr",
"name": "Gochs overload pcr",
"value": "0"
},
{
"id": "Gochs velocity",
"name": "Gochs velocity",
"value": "0.000000"
}
]
},
{
"name": "Service #1060",
"params": [
{
"id": "status",
"name": "Status",
"value": "Main"
},
{
"id": "Main time",
"name": "Main time",
"value": "028:41:52.402"
},
{
"id": "Main fullness fifo",
"name": "Main fullness fifo",
"value": "000:00:01.302"
},
{
"id": "Main pcr error",
"name": "Main pcr error",
"value": "-00:00.000/00:00.000/00:00.000"
},
{
"id": "Main pll regulator/a",
"name": "Main pll regulator/a",
"value": "0.000000/0.000000"
},
{
"id": "Main bitrate",
"name": "Main bitrate",
"value": "9999908"
},
{
"id": "Main overload pcr",
"name": "Main overload pcr",
"value": "0"
},
{
"id": "Main velocity",
"name": "Main velocity",
"value": "0.000000"
},
{
"id": "Reserve time",
"name": "Reserve time",
"value": "000:00:00.000"
},
{
"id": "Reserve fullness fifo",
"name": "Reserve fullness fifo",
"value": "000:00:00.000"
},
{
"id": "Reserve pcr error",
"name": "Reserve pcr error",
"value": "-07:45.119/00:00.000/--07:45.119"
},
{
"id": "Reserve pll regulator/a",
"name": "Reserve pll regulator/a",
"value": "0.000000/0.000000"
},
{
"id": "Reserve bitrate",
"name": "Reserve bitrate",
"value": "0"
},
{
"id": "Reserve overload pcr",
"name": "Reserve overload pcr",
"value": "0"
},
{
"id": "Reserve velocity",
"name": "Reserve velocity",
"value": "0.000000"
},
{
"id": "Gochs time",
"name": "Gochs time",
"value": "000:00:00.000"
},
{
"id": "Gochs fullness fifo",
"name": "Gochs fullness fifo",
"value": "000:00:00.000"
},
{
"id": "Gochs pcr error",
"name": "Gochs pcr error",
"value": "-07:45.119/00:00.000/--07:45.119"
},
{
"id": "Gochs pll regulator/a",
"name": "Gochs pll regulator/a",
"value": "0.000000/0.000000"
},
{
"id": "Gochs bitrate",
"name": "Gochs bitrate",
"value": "0"
},
{
"id": "Gochs overload pcr",
"name": "Gochs overload pcr",
"value": "0"
},
{
"id": "Gochs velocity",
"name": "Gochs velocity",
"value": "0.000000"
}
]
}
]
}
}

### Список Шаблонов входных устройств в Графе
http://localhost:8080/api/inform/inputDevices

Делаем пустой GET запрос.
В ответ получаем json

{
"Data": null,
"Errors": "",
"Result": [
{
"name": "Video/Audio test",
"settings": null
},
{
"name": "FD SDI Capture",
"settings": [
{
"name": "FD Capture",
"params": [
{
"desc": "SDI capture",
"enum": [
{
"FD722 Board 1 Capture 1": "FD722 Board 1 Capture 1"
},
{
"FD722 Board 1 Capture 2": "FD722 Board 1 Capture 2"
},
{
"FD722 Board 2 Capture 1": "FD722 Board 2 Capture 1"
},
{
"FD722 Board 2 Capture 2": "FD722 Board 2 Capture 2"
},
{
"FD788 Board 1 Capture 1": "FD788 Board 1 Capture 1"
},
{
"FD788 Board 1 Capture 2": "FD788 Board 1 Capture 2"
},
{
"FD788 Board 1 Capture 3": "FD788 Board 1 Capture 3"
},
{
"FD788 Board 1 Capture 4": "FD788 Board 1 Capture 4"
}
],
"name": "capture",
"type": "int",
"value": "FD722 Board 1 Capture 1"
},
{
"desc": "SDI video mode",
"enum": [
{
"720x576_25i": "0"
},
{
"720x576_30i": "1"
},
{
"1920x1080_25i": "2"
},
{
"1920x1080_30i": "3"
},
{
"1920x1080_50p": "4"
},
{
"1920x1080_60p": "5"
}
],
"name": "mode",
"type": "int",
"value": "0"
},
{
"desc": "Number of audio lines",
"enum": [
{
"1": "1"
},
{
"2": "2"
},
{
"3": "3"
},
{
"4": "4"
},
{
"5": "5"
},
{
"6": "6"
},
{
"7": "7"
},
{
"8": "8"
}
],
"name": "number of audio lines",
"type": "int",
"value": "3"
},
{
"desc": "Generate frames with no input signal",
"enum": [
{
"No": "0"
},
{
"Yes": "1"
}
],
"name": "generate frames",
"type": "int",
"value": "0"
}
]
}
]
},
{
"name": "Gst UDP Source",
"settings": [
{
"name": "Gst UDP Source",
"params": [
{
"desc": "Host",
"name": "Host",
"type": "string",
"value": "234.5.5.5"
},
{
"desc": "Port",
"name": "Port",
"type": "int",
"value": "20000"
},
{
"desc": "IP address of the streaming computer (netcard via which the streaming is performed).",
"enum": [
{
", []": ""
},
{
"127.0.0.1, [lo]": "lo"
},
{
"172.30.1.211, [ens9f0]": "ens9f0"
},
{
"10.10.1.211, [ens9f2]": "ens9f2"
},
{
"172.17.0.1, [docker0]": "docker0"
},
{
"192.168.48.1, [br-e99bce8e9802]": "br-e99bce8e9802"
},
{
"192.168.64.1, [br-d1cfab258c7d]": "br-d1cfab258c7d"
}
],
"name": "Interface",
"type": "string",
"value": ""
}
]
},
{
"name": "Demultiplexer",
"params": [
{
"desc": "Output transport stream type.",
"name": "Latency",
"type": "int",
"value": "50"
}
]
}
]
},
{
"name": "FD ASI Capture",
"settings": [
{
"name": "FD ASI Capture",
"params": [
{
"desc": "ASI capture",
"enum": [
{
"FD722 Board 1 Capture 1": "FD722 Board 1 Capture 1"
},
{
"FD722 Board 1 Capture 2": "FD722 Board 1 Capture 2"
},
{
"FD722 Board 2 Capture 1": "FD722 Board 2 Capture 1"
},
{
"FD722 Board 2 Capture 2": "FD722 Board 2 Capture 2"
},
{
"FD788 Board 1 Capture 1": "FD788 Board 1 Capture 1"
},
{
"FD788 Board 1 Capture 2": "FD788 Board 1 Capture 2"
},
{
"FD788 Board 1 Capture 3": "FD788 Board 1 Capture 3"
},
{
"FD788 Board 1 Capture 4": "FD788 Board 1 Capture 4"
}
],
"name": "capture",
"type": "int",
"value": "FD722 Board 1 Capture 1"
},
{
"desc": "Input type TS(default) or T2MI",
"enum": [
{
"TS": "0"
},
{
"T2MI": "1"
}
],
"name": "Input type",
"type": "int",
"value": "0"
},
{
"desc": "Index PLP",
"name": "PLP",
"type": "int",
"value": "0"
}
]
}
]
},
{
"name": "FD ASI Capture (Raw)",
"settings": [
{
"name": "FD ASI Capture",
"params": [
{
"desc": "ASI capture",
"enum": [
{
"FD722 Board 1 Capture 1": "FD722 Board 1 Capture 1"
},
{
"FD722 Board 1 Capture 2": "FD722 Board 1 Capture 2"
},
{
"FD722 Board 2 Capture 1": "FD722 Board 2 Capture 1"
},
{
"FD722 Board 2 Capture 2": "FD722 Board 2 Capture 2"
},
{
"FD788 Board 1 Capture 1": "FD788 Board 1 Capture 1"
},
{
"FD788 Board 1 Capture 2": "FD788 Board 1 Capture 2"
},
{
"FD788 Board 1 Capture 3": "FD788 Board 1 Capture 3"
},
{
"FD788 Board 1 Capture 4": "FD788 Board 1 Capture 4"
}
],
"name": "capture",
"type": "int",
"value": "FD722 Board 1 Capture 1"
},
{
"desc": "Input type TS(default) or T2MI",
"enum": [
{
"TS": "0"
},
{
"T2MI": "1"
}
],
"name": "Input type",
"type": "int",
"value": "0"
},
{
"desc": "Index PLP",
"name": "PLP",
"type": "int",
"value": "0"
}
]
}
]
},
{
"name": "SL Network Source",
"settings": [
{
"name": "Gst UDP Source",
"params": [
{
"desc": "Host",
"name": "Host",
"type": "string",
"value": "234.5.5.5"
},
{
"desc": "Port",
"name": "Port",
"type": "int",
"value": "20000"
},
{
"desc": "IP address of the streaming computer (netcard via which the streaming is performed).",
"enum": [
{
"": ""
},
{
"127.0.0.1": "127.0.0.1"
},
{
"172.30.1.211": "172.30.1.211"
},
{
"10.10.1.211": "10.10.1.211"
},
{
"172.17.0.1": "172.17.0.1"
},
{
"192.168.48.1": "192.168.48.1"
},
{
"192.168.64.1": "192.168.64.1"
}
],
"name": "Interface",
"type": "string",
"value": ""
},
{
"desc": "Input type TS(default) or T2MI",
"enum": [
{
"TS": "0"
},
{
"T2MI": "1"
}
],
"name": "Input type",
"type": "int",
"value": "0"
},
{
"desc": "Index PLP",
"name": "PLP",
"type": "int",
"value": "0"
}
]
},
{
"name": "Demultiplexer",
"params": [
{
"desc": "Output transport stream type.",
"name": "Latency",
"type": "int",
"value": "50"
}
]
}
]
},
{
"name": "SL Network Source (Raw)",
"settings": [
{
"name": "Gst UDP Source",
"params": [
{
"desc": "Host",
"name": "Host",
"type": "string",
"value": "234.5.5.5"
},
{
"desc": "Port",
"name": "Port",
"type": "int",
"value": "20000"
},
{
"desc": "IP address of the streaming computer (netcard via which the streaming is performed).",
"enum": [
{
"": ""
},
{
"127.0.0.1": "127.0.0.1"
},
{
"172.30.1.211": "172.30.1.211"
},
{
"10.10.1.211": "10.10.1.211"
},
{
"172.17.0.1": "172.17.0.1"
},
{
"192.168.48.1": "192.168.48.1"
},
{
"192.168.64.1": "192.168.64.1"
}
],
"name": "Interface",
"type": "string",
"value": ""
},
{
"desc": "Input type TS(default) or T2MI",
"enum": [
{
"TS": "0"
},
{
"T2MI": "1"
}
],
"name": "Input type",
"type": "int",
"value": "0"
},
{
"desc": "Index PLP",
"name": "PLP",
"type": "int",
"value": "0"
}
]
}
]
}
]
}

