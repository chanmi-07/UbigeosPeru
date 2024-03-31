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

### Filtrar por tipo

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

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Distritos

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
