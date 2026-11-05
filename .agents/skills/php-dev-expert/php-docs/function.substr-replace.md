# Substitui o texto dentro de uma parte de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.substr-replace.php

---

# substr\_replace

(PHP 4, PHP 5, PHP 7, PHP 8)

substr\_replace — Substitui o texto dentro de uma parte de uma string

### Descrição

function **substr\_replace**(  
    [array](language.types.array.md)|[string](language.types.string.md) `$string`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$replace`,  
    [array](language.types.array.md)|[int](language.types.integer.md) `$offset`,  
    [array](language.types.array.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$length` = **`null`**  
): [string](language.types.string.md)|[array](language.types.array.md)

**substr\_replace()** substitui uma cópia de
`string` delimitada pelos parâmetros
`offset` e (opcionalmente)
`length` com a string informada em
`replace`.

### Parâmetros

`string`
:   A string de entrada.

    Um [array](language.types.array.md) de [string](language.types.string.md)s pode ser fornecido, e neste caso
    as substituições irão ocorrer em um string de cada vez. Neste caso,
    os parâmetros `replace`, `offset`
    e `length` podem ser fornecidos tanto como
    valores escalares a ser aplicados a um string de entrada de cada vez, quanto como
    [array](language.types.array.md)s, neste caso o elemento correspondente do array será
    usado por cada string de entrada.

`replace`
:   A string substituta.

`offset`
:   Se `offset` for não-negativo, a substituição começará
    na posição `offset` da
    `string`.

    Se `offset` for negativo, a substituição começará
    a partir da posição `offset` contada a partir do final da
    `string`.

`length`
:   Se fornecido e positivo, ele representa o comprimento da porção de
    `string` que deve ser substituída. Se
    negativo, ele representa o número de caracteres do final de
    `string` onde parar a substituição. Se ele
    não for fornecido, o padrão será até strlen(
    `string`); isto é, parar a substituição
    no final de `string`. Obviamente, se
    `length` for zero então esta função irá ter
    efeito de inserir `replace` em
    `string` na posição fornecida em
    `offset`.

### Valor Retornado

A string de resultado é retornada. Se `string` for um
array, então um array será retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `length` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **substr\_replace()****

```
<?php
$var = 'ABCDEFGH:/MNRPQR/';
echo "Original: $var<hr />\n";

/* Estes dois exemplos substituem tudo de $var com 'bob'. */
echo substr_replace($var, 'bob', 0) . "<br />\n";
echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

/* Insere 'bob' direto no começo de $var. */
echo substr_replace($var, 'bob', 0, 0) . "<br />\n";

/* Estes dois exemplos substituem 'MNRPQR' em $var com 'bob'. */
echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
echo substr_replace($var, 'bob', -7, -1) . "<br />\n";

/* Deleta 'MNRPQR' de $var. */
echo substr_replace($var, '', 10, -1) . "<br />\n";
?>
```

**Exemplo #2
Usando **substr\_replace()** para substituir múltiplas strings
de uma só vez**

```
<?php
$input = array('A: XXX', 'B: XXX', 'C: XXX');

// Um caso simples: substituir XXX em cada string com YYY.
echo implode('; ', substr_replace($input, 'YYY', 3, 3))."\n";

// Um caso mais complicado onde cada substituição é diferente.
$replace = array('AAA', 'BBB', 'CCC');
echo implode('; ', substr_replace($input, $replace, 3, 3))."\n";

// Substituir um número diferente de caracteres a cada vez.
$length = array(1, 2, 3);
echo implode('; ', substr_replace($input, $replace, 3, $length))."\n";
?>
```

O exemplo acima produzirá:

```
A: YYY; B: YYY; C: YYY
A: AAA; B: BBB; C: CCC
A: AAAXX; B: BBBX; C: CCC
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [str\_replace()](function.str-replace.md) - Substitui todas as ocorrências da string de pesquisa com a string de substituição
- [substr()](function.substr.md) - Retorna parte de uma string
- [Acesso e modificação de strings por caractere](language.types.string.md#language.types.string.substr)

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
