# Desfaz os escapes de uma string escapada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stripslashes.php

---

# stripslashes

(PHP 4, PHP 5, PHP 7, PHP 8)

stripslashes — Desfaz os escapes de uma string escapada

### Descrição

function **stripslashes**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Remove barras invertidas de uma string.

**stripslashes()** pode ser utilizada quando você não está inserindo estes
dados em um lugar (como um banco de dados) que precise de escapar.
Por exemplo, se você esta usando estes dados para gerar um formulário HTML.

### Parâmetros

`string`
:   A string de entrada.

### Valor Retornado

Retorna uma string com as barras invertidas retiradas.
(`\'` se torna `'` e assim por diante.)
Duas barras invertidas (`\\`) se tornam uma
(`\`).

### Examples

**Exemplo #1 Exemplo **stripslashes()****

```
<?php
$str = "Seu nome é O\'reilly?";

// Mostra: Seu nome é O'reilly?
echo stripslashes($str);
?>
```

> **Nota**:
>
> **stripslashes()** não é recursiva. Se você quer aplicar
> esta função a um array multi-dimensional, você precisa usar uma função
> recursiva.

**Exemplo #2 Usando **stripslashes()** em um array**

```
<?php
function stripslashes_deep($value)
{
    $value = is_array($value) ?
                array_map('stripslashes_deep', $value) :
                stripslashes($value);

    return $value;
}

// Example
$array = array("f\\'oo", "b\\'ar", array("fo\\'o", "b\\'ar"));
$array = stripslashes_deep($array);

// Output
print_r($array);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => f'oo
    [1] => b'ar
    [2] => Array
        (
            [0] => fo'o
            [1] => b'ar
        )

)
```

### Veja também

- [addslashes()](function.addslashes.md) - Adiciona barras invertidas a uma string
- [get\_magic\_quotes\_gpc()](function.get-magic-quotes-gpc.md) - Obtém a configuração atual de magic\_quotes\_gpc

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
