# Retorna os valores de uma coluna do array informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-column.php

---

# array\_column

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

array\_column — Retorna os valores de uma coluna do array informado

### Descrição

function **array\_column**([array](language.types.array.md) `$array`, [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md) `$column_key`, [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md) `$index_key` = **`null`**): [array](language.types.array.md)

A função **array\_column()** retorna os valores de uma coluna do
`array` informado, indentificada pelo
`column_key`. Opcionalmente, uma
`index_key` pode ser informada para indexar os valores do
array retornado pelos valores da coluna `index_key`
do array.

### Parâmetros

`array`
:   Um array multidimensional ou um array de objetos que se deseja extrair os
    valores da coluna. Se um array de objetos for fornecido, propriedades
    públicas podem ser extraídas diretamente. Para extrair propriedades
    protegidas e privadas, a classe deve implementar ambos os métodos mágicos
    **\_\_get()** e
    **\_\_isset()**.

`column_key`
:   A coluna de valores a ser retornada. Este valor pode ser uma chave inteira da
    coluna que se deseja recuperar, ou uma uma string com o nome da chave de um
    array associativo ou nome de propriedade. Também pode ser **`null`** para retornar
    arrays completos ou objetos (isso é útil com o parâmetro
    `index_key`, para reindexar o array).

`index_key`
:   A coluna a ser utilizada como índices/chaves do array retornado. Este valor
    pode ser uma chave inteira da coluna, ou uma uma string com o nome da chave.
    O valor é [convertido](language.types.array.md#language.types.array.key-casts)
    como de costume para chaves de array (no entanto, antes do PHP 8.0.0, objetos que suportam
    conversão para string também eram permitidos).

### Valor Retornado

Retorna um array com os valores que representam uma coluna do array informado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Objetos em colunas indicadas pelo parâmetro `index_key` não serão mais convertidos em string e agora irão lançar um [TypeError](class.typeerror.md) em vez disso. |

### Examples

**Exemplo #1 Obtém a coluna first\_name dos registros**

```
<?php

// Array representando um possível resultado retornado de um banco de dados
$records = [
    [
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ],
    [
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ],
    [
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ],
    [
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    ]
];

$first_names = array_column($records, 'first_name');
print_r($first_names);

?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => John
    [1] => Sally
    [2] => Jane
    [3] => Peter
)
```

**Exemplo #2
Obtém a coluna last\_name dos registros, indexados pela coluna "id"**

```
<?php

// Usando o array $records do Exemplo #1
$records = [
    [
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ],
    [
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ],
    [
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ],
    [
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    ]
];

$last_names = array_column($records, 'last_name', 'id');
print_r($last_names);

?>
```

O exemplo acima produzirá:

```
Array
(
    [2135] => Doe
    [3245] => Smith
    [5342] => Jones
    [5623] => Doe
)
```

**Exemplo #3
Obtém a coluna de nomes de usuários da propriedade pública "username" de um
objeto**

```
<?php

class User
{
    public $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }
}

$users = [
    new User('user 1'),
    new User('user 2'),
    new User('user 3'),
];

print_r(array_column($users, 'username'));

?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => user 1
    [1] => user 2
    [2] => user 3
)
```

**Exemplo #4
Obtém a coluna de nomes da propriedade privada "name" de um objeto
utilizando os métodos mágicos **\_\_isset()** e **\_\_get()****

```
<?php

class Person
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __isset($prop) : bool
    {
        return isset($this->$prop);
    }
}

$people = [
    new Person('Fred'),
    new Person('Jane'),
    new Person('John'),
];

print_r(array_column($people, 'name'));
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => Fred
    [1] => Jane
    [2] => John
)
```

Se o método **\_\_isset()** não for fornecido, um array vazio será
retornado.

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
