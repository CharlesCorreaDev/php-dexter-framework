# Divide uma string com base em expressão regular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.preg-split.php

---

# preg\_split

(PHP 4, PHP 5, PHP 7, PHP 8)

preg\_split — Divide uma string com base em expressão regular

### Descrição

function **preg\_split**(  
    [string](language.types.string.md) `$pattern`,  
    [string](language.types.string.md) `$subject`,  
    [int](language.types.integer.md) `$limit` = -1,  
    [int](language.types.integer.md) `$flags` = 0  
): [array](language.types.array.md)|[false](language.types.singleton.md)

Divide a string informada com base em uma expressão regular.

### Parâmetros

`pattern`
:   A expressão a ser pesquisada, como uma string.

`subject`
:   A string de entrada.

`limit`
:   Se especificado, somente substrings de até `limit`
    bytes são retornadas com o resto da string sendo colocado na última
    substring. Um valor de -1 ou 0 em `limit` significa "sem limite".

`flags`
:   `flags` pode ser qualquer combinação das seguintes
    opções (combinadas com o operador binário `|`):

    **`PREG_SPLIT_NO_EMPTY`**
    :   Se esta opção for definida, somente partes não vazias serão retornadas por
        **preg\_split()**.

    **`PREG_SPLIT_DELIM_CAPTURE`**
    :   Se esta opção for definida, expressões entre parênteses na expressão
        serão capturadas e também retornadas.

    **`PREG_SPLIT_OFFSET_CAPTURE`**
    :   Se esta opção for definida, para cada correspondência que ocorrer, a sua posição na
        string de entrada também será retornada. Observe que isto altera o valor de
        retorno para um array onde cada elemento é um array consistindo da
        string correspondida no índice `0` e seu deslocamento na string de entrada
        (`subject`) no índice `1`.

### Valor Retornado

Retorna um array contendo substrings de `subject`
divididas ao longo de limites correspondidos por `pattern`, ou **`false`** em caso de falha.

### Erros/Exceções

Se o padrão de expressão regular passado não for compilado para uma expressão regular válida, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Exemplo de **preg\_split()**: Obter partes de uma string de pesquisa**

```
<?php
// divide a frase por qualquer número de vírgulas ou caracteres representativos de espaço,
// que incluem " ", \r, \t, \n e \f
$keywords = preg_split("/[\s,]+/", "hypertext language, programming");
print_r($keywords);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => hypertext
    [1] => language
    [2] => programming
)
```

**Exemplo #2 Dividindo uma string em seus caracteres componentes**

```
<?php
$str = 'string';
$chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
print_r($chars);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => s
    [1] => t
    [2] => r
    [3] => i
    [4] => n
    [5] => g
)
```

**Exemplo #3 Dividindo uma string em correspondências e suas posições**

```
<?php
$str = 'hypertext language programming';
$chars = preg_split('/ /', $str, -1, PREG_SPLIT_OFFSET_CAPTURE);
print_r($chars);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => Array
        (
            [0] => hypertext
            [1] => 0
        )

    [1] => Array
        (
            [0] => language
            [1] => 10
        )

    [2] => Array
        (
            [0] => programming
            [1] => 19
        )

)
```

### Notas

**Dica**

Se o poder das expressões regulares não for necessário, pode-se optar
por alternativas mais rápidas (e simples) como [explode()](function.explode.md)
ou [str\_split()](function.str-split.md).

**Dica**

Se a correspondência falhar, um array com um único elemento contendo a string de entrada será retornado.

### Veja também

- [Expressões Regulares PCRE](pcre.pattern.md)
- [preg\_quote()](function.preg-quote.md) - Escapa caracteres de expressão regular
- [explode()](function.explode.md) - Divide uma string com base em outra string
- [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular
- [preg\_match\_all()](function.preg-match-all.md) - Realiza uma correspondência global de expressão regular
- [preg\_replace()](function.preg-replace.md) - Realiza uma pesquisa por uma expressão regular e substitui
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
