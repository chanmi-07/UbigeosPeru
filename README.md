# Ubigeos Perú

API que puedes usar para obtener información de los departamentos, provincias y distritos del Perú.

## Departamentos
### Obtener todo
Se puede obtener todos los datos usando `/departments`: [https://ubigeosperu.nijui.com/api/departments](https://ubigeosperu.nijui.com/api/departments)
```js
[
    {
        "code": "D-1",
        "name": "Amazonas",
        "tag": {
            "short": "Amazonas",
            "long": "Amazonas, Perú"
        }
    },
    {
        "code": "D-2",
        "name": "Ancash",
        "tag": {
            "short": "Ancash",
            "long": "Ancash, Perú"
        }
    },
    ...
]
```

### Filtros

Parámetros opcionales
- `order_by` : is_capital (Para ordenar primero por la capital) [https://ubigeosperu.nijui.com/api/departments?order_by=is_capital](https://ubigeosperu.nijui.com/api/departments?order_by=is_capital)
```js
[
    {
        "code": "D-14",
        "name": "Lima",
        "tag": {
            "short": "Lima",
            "long": "Lima, Perú"
        }
    },
    {
        "code": "D-1",
        "name": "Amazonas",
        "tag": {
            "short": "Amazonas",
            "long": "Amazonas, Perú"
        }
    },
    ...
]
```
- `order`: desc (asc por defecto) [https://ubigeosperu.nijui.com/api/departments?order=desc](https://ubigeosperu.nijui.com/api/departments?order=desc)

```js
[
    {
        "code": "D-24",
        "name": "Ucayali",
        "tag": {
            "short": "Ucayali",
            "long": "Ucayali, Perú"
        }
    },
    {
        "code": "D-23",
        "name": "Tumbes",
        "tag": {
            "short": "Tumbes",
            "long": "Tumbes, Perú"
        }
    },
    ...
]
```

## Obtener por ID
Se puede obtener por uno o más IDs usando `/departments/{ids}`: [https://ubigeosperu.nijui.com/api/departments/D-12,D-14](https://ubigeosperu.nijui.com/departments/D-12,D-14)
```js
[
    {
        "code": "D-12",
        "name": "La Libertad",
        "tag": {
            "short": "La Libertad",
            "long": "La Libertad, Perú"
        }
    },
    {
        "code": "D-14",
        "name": "Lima",
        "tag": {
            "short": "Lima",
            "long": "Lima, Perú"
        }
    }
]
```

## Provincias

### Obtener todo
Se puede obtener todos los datos usando `/provinces`: [https://ubigeosperu.nijui.com/api/provinces](https://ubigeosperu.nijui.com/api/provinces)
```js
[
    {
        "code": "P-28",
        "name": "Abancay",
        "department_code": "D-3",
        "tag": {
            "short": "Abancay, Apurimac",
            "long": "Abancay, Apurimac, Perú"
        }
    },
    {
        "code": "P-80",
        "name": "Acobamba",
        "department_code": "D-8",
        "tag": {
            "short": "Acobamba, Huancavelica",
            "long": "Acobamba, Huancavelica, Perú"
        }
    },
    ...
]
```

### Filtros
Parámetros opcionales
- `department` : Buscar por el ID del departamento [https://ubigeosperu.nijui.com/api/provinces?department=D-14](https://ubigeosperu.nijui.com/api/provinces?department=D-14)
```js
[
    {
        "code": "P-127",
        "name": "Barranca",
        "department_code": "D-14",
        "tag": {
            "short": "Barranca, Lima",
            "long": "Barranca, Lima, Perú"
        }
    },
    {
        "code": "P-128",
        "name": "Cajatambo",
        "department_code": "D-14",
        "tag": {
            "short": "Cajatambo, Lima",
            "long": "Cajatambo, Lima, Perú"
        }
    },
    ...
]
```
- `order_by` : is_capital (Para ordenar primero por la capital, recomendado usar con el filtro de departamento) [https://ubigeosperu.nijui.com/api/provinces?department=D-14&order_by=is_capital](https://ubigeosperu.nijui.com/api/provinces?department=D-14&order_by=is_capital)
```js
[
    {
        "code": "P-135",
        "name": "Lima",
        "department_code": "D-14",
        "tag": {
            "short": "Lima, Lima",
            "long": "Lima, Lima, Perú"
        }
    },
    {
        "code": "P-127",
        "name": "Barranca",
        "department_code": "D-14",
        "tag": {
            "short": "Barranca, Lima",
            "long": "Barranca, Lima, Perú"
        }
    },
    ...
]
```
- `order`: desc (asc por defecto) [https://ubigeosperu.nijui.com/api/provinces?order=desc](https://ubigeosperu.nijui.com/api/provinces?order=desc)

```js
[
    {
        "code": "P-191",
        "name": "Zarumilla",
        "department_code": "D-23",
        "tag": {
            "short": "Zarumilla, Tumbes",
            "long": "Zarumilla, Tumbes, Perú"
        }
    },
    {
        "code": "P-174",
        "name": "Yunguyo",
        "department_code": "D-20",
        "tag": {
            "short": "Yunguyo, Puno",
            "long": "Yunguyo, Puno, Perú"
        }
    },
    ...
]
```

## Obtener por ID
Se puede obtener por uno o más IDs usando `/provinces/{ids}`: [https://ubigeosperu.nijui.com/api/provinces/P-1,P-54](https://ubigeosperu.nijui.com/provinces/P-1,P-54)
```js
[
    {
        "code": "P-1",
        "name": "Bagua",
        "department_code": "D-1",
        "tag": {
            "short": "Bagua, Amazonas",
            "long": "Bagua, Amazonas, Perú"
        }
    },
    {
        "code": "P-54",
        "name": "Cajabamba",
        "department_code": "D-6",
        "tag": {
            "short": "Cajabamba, Cajamarca",
            "long": "Cajabamba, Cajamarca, Perú"
        }
    }
]
```

## Distritos

### Obtener todo
Se puede obtener todos los datos usando `/districts`: [https://ubigeosperu.nijui.com/api/districts](https://ubigeosperu.nijui.com/api/districts)
```js
[
    {
        "code": "D-253",
        "name": "Abancay",
        "province_code": "P-28",
        "tag": {
            "short": "Abancay, Abancay",
            "long": "Abancay, Abancay, Apurimac"
        }
    },
    {
        "code": "D-98",
        "name": "Abelardo Pardo Lezameta",
        "province_code": "P-11",
        "tag": {
            "short": "Abelardo Pardo Lezameta, Bolognesi",
            "long": "Abelardo Pardo Lezameta, Bolognesi, Ancash"
        }
    },
    ...
]
```
### Filtros
Parámetros opcionales
- `department` : Buscar por el ID del departamento [https://ubigeosperu.nijui.com/api/districts?department=D-14](https://ubigeosperu.nijui.com/api/districts?department=D-14)
```js
[
    {
        "code": "D-1410",
        "name": "Alis",
        "province_code": "P-137",
        "tag": {
            "short": "Alis, Yauyos",
            "long": "Alis, Yauyos, Lima"
        }
    },
    {
        "code": "D-1411",
        "name": "Allauca",
        "province_code": "P-137",
        "tag": {
            "short": "Allauca, Yauyos",
            "long": "Allauca, Yauyos, Lima"
        }
    },
    ...
]
```
- `province` : Buscar por el ID de la provincia [https://ubigeosperu.nijui.com/api/districts?province=P-135](https://ubigeosperu.nijui.com/api/districts?province=P-135)
```js
[
    {
        "code": "D-1360",
        "name": "Ancón",
        "province_code": "P-135",
        "tag": {
            "short": "Ancón, Lima",
            "long": "Ancón, Lima, Lima"
        }
    },
    {
        "code": "D-1361",
        "name": "Ate",
        "province_code": "P-135",
        "tag": {
            "short": "Ate, Lima",
            "long": "Ate, Lima, Lima"
        }
    },
    ...
]
```
- `order`: desc (asc por defecto) [https://ubigeosperu.nijui.com/api/districts?province=P-135&order=desc](https://ubigeosperu.nijui.com/api/districts?province=P-135&order=desc)

```js
[
    {
        "code": "D-1403",
        "name": "Villa María del Triunfo",
        "province_code": "P-135",
        "tag": {
            "short": "Villa María del Triunfo, Lima",
            "long": "Villa María del Triunfo, Lima, Lima"
        }
    },
    {
        "code": "D-1402",
        "name": "Villa El Salvador",
        "province_code": "P-135",
        "tag": {
            "short": "Villa El Salvador, Lima",
            "long": "Villa El Salvador, Lima, Lima"
        }
    },
    ...
]
```
## Obtener por ID
Se puede obtener por uno o más IDs usando `/districts/{ids}`: [https://ubigeosperu.nijui.com/api/districts/D-3,D-5](https://ubigeosperu.nijui.com/districts/D-3,D-5)
```js
[
    {
        "code": "D-3",
        "name": "Copallin",
        "province_code": "P-1",
        "tag": {
            "short": "Copallin, Bagua",
            "long": "Copallin, Bagua, Amazonas"
        }
    },
    {
        "code": "D-5",
        "name": "Imaza",
        "province_code": "P-1",
        "tag": {
            "short": "Imaza, Bagua",
            "long": "Imaza, Bagua, Amazonas"
        }
    }
]
```
