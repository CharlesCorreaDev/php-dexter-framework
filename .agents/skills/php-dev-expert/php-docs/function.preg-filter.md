# Executa pesquisa e substituição usando expressões regulares

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.preg-filter.php

---

# preg\_filter

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

preg\_filter — Executa pesquisa e substituição usando expressões regulares

### Descrição

function **preg\_filter**(  
    [string](language.types.string.md)|[array](language.types.array.md) `$pattern`,  
    [string](language.types.string.md)|[array](language.types.array.md) `$replacement`,  
    [string](language.types.string.md)|[array](language.types.array.md) `$subject`,  
    [int](language.types.integer.md) `$limit` = -1,  
    [int](language.types.integer.md) `&$count` = **`null`**  
): [string](language.types.string.md)|[array](language.types.array.md)|[null](language.types.null.md)

**preg\_filter()** é idêntica à [preg\_replace()](function.preg-replace.md)
exceto que ela somente retorna strings de entrada (possivelmente transformadas) onde ocorreu
uma correspondência. Para detalhes sobre como esta função trabalha, leia a
documentação sobre [preg\_replace()](function.preg-replace.md).

### Parâmetros

Parâmetros estão descritos na documentação sobre [preg\_replace()](function.preg-replace.md).

### Valor Retornado

Retorna um [array](language.types.array.md) se o parâmetro `subject`
for um [array](language.types.array.md), ou uma [string](language.types.string.md) caso contrário.

Se nenhuma correspondência for encontrada ou se ocorrer um erro, um [array](language.types.array.md) vazio
é retornado quando `subject` for um [array](language.types.array.md)
ou **`null`** caso contrário.

### Erros/Exceções

Se o padrão de expressão regular passado não for compilado para uma expressão regular válida, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1
Exemplo comparando **preg\_filter()**
com [preg\_replace()](function.preg-replace.md)**

```
<?php
$subject = array('1', 'a', '2', 'b', '3', 'A', 'B', '4');
$pattern = array('/\d/', '/[a-z]/', '/[1a]/');
$replace = array('A:$0', 'B:$0', 'C:$0');

echo "preg_filter retorna\n";
print_r(preg_filter($pattern, $replace, $subject));

echo "preg_replace retorna\n";
print_r(preg_replace($pattern, $replace, $subject));
?>
```

O exemplo acima produzirá:

```
preg_filter retorna
Array
(
    [0] => A:C:1
    [1] => B:C:a
    [2] => A:2
    [3] => B:b
    [4] => A:3
    [7] => A:4
)
preg_replace retorna
Array
(
    [0] => A:C:1
    [1] => B:C:a
    [2] => A:2
    [3] => B:b
    [4] => A:3
    [5] => A
    [6] => B
    [7] => A:4
)
```

### Veja também

- [Expressões regulares PCRE](pcre.pattern.md)
- [preg\_quote()](function.preg-quote.md) - Escapa caracteres de expressão regular
- [preg\_replace()](function.preg-replace.md) - Realiza uma pesquisa por uma expressão regular e substitui
- [preg\_replace\_callback()](function.preg-replace-callback.md) - Executa uma busca por expressão regular e substitui usando uma chamada de retorno
- [preg\_grep()](function.preg-grep.md) - Retorna entradas de array que correspondem à expressão regular
- [preg\_last\_error()](function.preg-last-error.md) - Retorna o código de erro da última expressão regular PCRE executada

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
