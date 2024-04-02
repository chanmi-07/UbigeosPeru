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

## Distritos

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
