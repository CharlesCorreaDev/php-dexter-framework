# Conta o número de ocorrências de uma substring

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.substr-count.php

---

# substr\_count

(PHP 4, PHP 5, PHP 7, PHP 8)

substr\_count — Conta o número de ocorrências de uma substring

### Descrição

function **substr\_count**(  
    [string](language.types.string.md) `$haystack`,  
    [string](language.types.string.md) `$needle`,  
    [int](language.types.integer.md) `$offset` = 0,  
    [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**  
): [int](language.types.integer.md)

**substr\_count()** retorna o número de vezes que a substring
`needle` ocorre na
string `haystack`. Note que
`needle` faz distinção de maiúscula e minúscula.

> **Nota**:
>
> Esta função não conta substrings sobrepostas. Veja o exemplo abaixo!

### Parâmetros

`haystack`
:   A string onde será feita a busca

`needle`
:   A substring a ser procurada

`offset`
:   A posição onde deve-se iniciar a contagem. Se a posição for negativa, a contagem
    começa do final da string.

`length`
:   O comprimento máximo depois da posição especificada para buscar pela
    substring. Mostra um alerta se a posição mais o comprimento for
    maior que o comprimento de `haystack`.
    Um comprimento negativo conta a partir do final de `haystack`.

### Valor Retornado

Esta função retorna um [int](language.types.integer.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `length` agora pode ser nulo. |
| 7.1.0 | Suporte a valores negativos para `offset` e `length` foi adicionado. `length` agora também pode ser `0`. |

### Examples

**Exemplo #1 Exemplo de **substr\_count()****

```
<?php
$text = 'This is a test';
echo strlen($text), PHP_EOL; // 14

echo substr_count($text, 'is'), PHP_EOL; // 2

// a string é reduzida a 's is a test', então mostra 1
echo substr_count($text, 'is', 3), PHP_EOL;

// o texto é reduzido a 's i', então mostra 0
echo substr_count($text, 'is', 3, 3), PHP_EOL;

// mostra apenas 1, porque não conta substrings sobrepostos
$text2 = 'gcdgcdgcd';
echo substr_count($text2, 'gcdgcd'), PHP_EOL;

// lança uma exceção porque 5+10 > 14
echo substr_count($text, 'is', 5, 10), PHP_EOL;
?>
```

### Veja também

- [count\_chars()](function.count-chars.md) - Retorna informação sobre caracteres usados em uma string
- [strpos()](function.strpos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string
- [substr()](function.substr.md) - Retorna parte de uma string
- [strstr()](function.strstr.md) - Encontra a primeira ocorrência de uma string

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
