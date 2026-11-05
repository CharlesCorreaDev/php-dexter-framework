# Determina se uma variável está vazia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.empty.php

---

# empty

(PHP 4, PHP 5, PHP 7, PHP 8)

empty — Determina se uma variável está vazia

### Descrição

function **empty**([mixed](language.types.mixed.md) `$var`): [bool](language.types.boolean.md)

Determina se uma variável é considerada vazia. Uma variável é considerada vazia se não existir ou seu valor for igual a **`false`**. A função **empty()** não gera um aviso se a variável não existir.

### Parâmetros

`var`
:   Variável a ser verificada

    Nenhum aviso é gerado se a variável não existir.
    Isso significa que a função **empty()** é essencialmente
    o equivalente sucinto de **!isset($var) || $var == false**.
    Isto também se aplica a estruturas aninhadas, tais como um array multidimensional ou propriedades em encadeadas.

### Valor Retornado

Retorna **`true`** se `var` não existir ou se tiver um valor que é vazio ou igual a zero.
Consulte [conversão para booleano](language.types.boolean.md#language.types.boolean.casting).
Caso contrário, retorna **`false`**.

### Examples

**Exemplo #1
Uma simples comparação entre as funções **empty()** /
[isset()](function.isset.md).**

```
<?php
$var = 0;

// Avaliado como verdadeiro porque $var está vazia
if (empty($var)) {
    echo '$var é 0, vazia ou não definida';
}

// Avaliado como verdadeiro porque $var está definida
if (isset($var)) {
    echo '$var está definida embora esteja vazia';
}
?>
```

**Exemplo #2 Função **empty()** em posições de string**

```
<?php
$expected_array_got_string = 'somestring';
var_dump(empty($expected_array_got_string['some_key']));
var_dump(empty($expected_array_got_string[0]));
var_dump(empty($expected_array_got_string['0']));
var_dump(empty($expected_array_got_string['0.5']));
var_dump(empty($expected_array_got_string['0 Mostel']));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(false)
bool(true)
bool(true)
```

**Exemplo #3 **empty()** on array multidimensional**

```
<?php
$multidimensional = [
    'some' => [
        'deep' => [
            'nested' => 'value'
        ]
    ]
];

if (!empty($multidimensional['some']['some']['nested'])) {
    $someVariable = $multidimensional['some']['deep']['nested'];
}

var_dump(empty($multidimensional['some-undefined-key']));
var_dump(empty($multidimensional['some']['deep']['unknown']));
var_dump(empty($multidimensional['some']['deep']['nested']));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(false)
```

### Notas

> **Nota**:
>
> Como esta é uma
> construção da linguagem e não uma função, ela não pode ser chamada usando
> [funções variáveis](functions.variable-functions.md)
> ou [argumentos nomeados](functions.arguments.md#functions.named-arguments).

> **Nota**:
>
> Ao utilizar a função **empty()** em propriedades de objetos inacessíveis,
> o método de sobrecarga [\_\_isset()](language.oop5.overloading.md#object.isset)
> será chamado, se declarado.

### Veja também

- [isset()](function.isset.md) - Determina se uma variável está declarada e é diferente de null
- [\_\_isset()](language.oop5.overloading.md#object.isset)
- [unset()](function.unset.md) - unset remove a definição de uma variável informada
- [array\_key\_exists()](function.array-key-exists.md) - Verifica se uma chave ou índice existe em um array
- [count()](function.count.md) - Conta todos os elementos de um array ou de um objeto Countable
- [strlen()](function.strlen.md) - Retorna o tamanho de uma string
- [A tabela de comparação de tipos](types.comparisons.md)

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
