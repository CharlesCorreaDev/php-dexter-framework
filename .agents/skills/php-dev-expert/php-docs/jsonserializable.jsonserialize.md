# Especifica os dados que devem ser serializados para JSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/jsonserializable.jsonserialize.php

---

# JsonSerializable::jsonSerialize

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

JsonSerializable::jsonSerialize — Especifica os dados que devem ser serializados para JSON

### Descrição

public function **JsonSerializable::jsonSerialize**(): [mixed](language.types.mixed.md)

Serializa o objeto para um valor que pode ser serializado nativamente por
[json\_encode()](function.json-encode.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna dados que podem ser serializados por [json\_encode()](function.json-encode.md),
que é um valor de qualquer tipo que não seja um [resource](language.types.resource.md).

### Examples

**Exemplo #1
Exemplo de **JsonSerializable::jsonSerialize()**
retornando um [array](language.types.array.md)**

```
<?php
class ArrayValue implements JsonSerializable {
    private $array;
    public function __construct(array $array) {
        $this->array = $array;
    }

    public function jsonSerialize(): mixed {
        return $this->array;
    }
}

$array = [1, 2, 3];
echo json_encode(new ArrayValue($array), JSON_PRETTY_PRINT);
?>
```

O exemplo acima produzirá:

```
[
    1,
    2,
    3
]
```

**Exemplo #2
Exemplo de **JsonSerializable::jsonSerialize()**
retornando um [array](language.types.array.md) associativo**

```
<?php
class ArrayValue implements JsonSerializable {
    private $array;
    public function __construct(array $array) {
        $this->array = $array;
    }

    public function jsonSerialize(): mixed {
        return $this->array;
    }
}

$array = ['foo' => 'bar', 'quux' => 'baz'];
echo json_encode(new ArrayValue($array), JSON_PRETTY_PRINT);
?>
```

O exemplo acima produzirá:

```
{
    "foo": "bar",
    "quux": "baz"
}
```

**Exemplo #3
Exemplo de **JsonSerializable::jsonSerialize()**
retornando um [int](language.types.integer.md)**

```
<?php
class IntegerValue implements JsonSerializable {
    private $number;
    public function __construct($number) {
        $this->number = (int) $number;
    }

    public function jsonSerialize(): mixed {
        return $this->number;
    }
}

echo json_encode(new IntegerValue(1), JSON_PRETTY_PRINT);
?>
```

O exemplo acima produzirá:

```
1
```

**Exemplo #4
Exemplo de **JsonSerializable::jsonSerialize()**
retornando uma [string](language.types.string.md)**

```
<?php
class StringValue implements JsonSerializable {
    private $string;
    public function __construct($string) {
        $this->string = (string) $string;
    }

    public function jsonSerialize(): mixed {
        return $this->string;
    }
}

echo json_encode(new StringValue('Hello!'), JSON_PRETTY_PRINT);
?>
```

O exemplo acima produzirá:

```
"Hello!"
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
