# Retorna informação sobre palavras usadas em uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.str-word-count.php

---

# str\_word\_count

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

str\_word\_count — 
Retorna informação sobre palavras usadas em uma string

### Descrição

function **str\_word\_count**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$format` = 0, [?](language.types.null.md)[string](language.types.string.md) `$characters` = **`null`**): [array](language.types.array.md)|[int](language.types.integer.md)

Conta o número de palavras dentro de `string`.
Se o parâmetro opcional `format` não for especificado, então
o valor de retorno será um inteiro representando o número de palavras
encontradas. Caso `format` seja especificado, o valor de
retorno será um array, cujo conteúdo é dependente de
`format`. Os valores possíveis para
`format` e as saídas resultantes estão listadas abaixo.

Para o propósito desta função, 'palavra' é definida como uma string dependente
da localidade contendo caracteres alfabéticos, que também podem conter, mas não iniciar
com os caracteres "'" e "-".
Note que localidades que utilizam caracteres multibyte não são suportadas.

### Parâmetros

`string`
:   A string

`format`
:   Especifica o valor de retorno desta função. Os valores atualmente suportados
    são:

    - 0 - retorna o número de palavras encontradas
    - 1 - retorna um array contendo todas as palavras encontradas dentro da
      `string`
    - 2 - retorna um array associativo, onde a chave é a posição
      numérica da palavra dentro da `string` e
      o valor é a própria palavra

`characters`
:   Uma lista de caracteres adicionais que serão considerados como 'palavra'.

### Valor Retornado

Retorna um array ou um inteiro, dependendo do
parâmetro `format`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `characters` agora pode ser nulo. |

### Examples

**Exemplo #1 Um exemplo de **str\_word\_count()****

```
<?php

$str = "Hello fri3nd, you're
       looking          good today!";

print_r(str_word_count($str, 1));
print_r(str_word_count($str, 2));
print_r(str_word_count($str, 1, 'àáãç3'));

echo str_word_count($str);

?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => Hello
    [1] => fri
    [2] => nd
    [3] => you're
    [4] => looking
    [5] => good
    [6] => today
)
Array
(
    [0] => Hello
    [6] => fri
    [10] => nd
    [14] => you're
    [28] => looking
    [45] => good
    [50] => today
)
Array
(
    [0] => Hello
    [1] => fri3nd
    [2] => you're
    [3] => looking
    [4] => good
    [5] => today
)
7
```

### Veja também

- [explode()](function.explode.md) - Divide uma string com base em outra string
- [preg\_split()](function.preg-split.md) - Divide uma string com base em expressão regular
- [count\_chars()](function.count-chars.md) - Retorna informação sobre caracteres usados em uma string
- [substr\_count()](function.substr-count.md) - Conta o número de ocorrências de uma substring

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
