# Corta parte de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iconv-substr.php

---

# iconv\_substr

(PHP 5, PHP 7, PHP 8)

iconv\_substr — Corta parte de uma string

### Descrição

function **iconv\_substr**(  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$offset`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Corta uma parte da `string` especificada pelos parâmetros
`offset` e `length`.

### Parâmetros

`string`
:   A string original.

`offset`
:   Se `offset` não for negativo,
    **iconv\_substr()** corta a parte da
    `string` começando no `offset`'th
    caractere, contando a partir de zero.

    Se `offset` for negativo,
    **iconv\_substr()** corta a parte que
    começa na posição, desloca `offset` caracteres
    para longe do final da `string`.

`length`
:   Se `length` for fornecido e for positivo, o valor de
    retorno conterá no máximo caracteres de `length`
    da parte que começa no `offset`
    (dependendo do comprimento da `string`).

    Se `length` for negativo,
    **iconv\_substr()** cortará a parte da
    `string` desde o caractere `offset`'th
    até o caractere do `length`
    final da string.
    Caso `offset` também seja negativo, a posição inicial
    é calculada antecipadamente de acordo com a regra explicada acima.

`encoding`
:   Se o parâmetro `encoding` for omitido ou **`null`**,
    presume-se que a `string` esteja codificada em
    [iconv.internal\_encoding](iconv.configuration.md).

    Observe que os parâmetros `offset` e `length`
    são sempre considerados como representando deslocamentos que são
    calculados com base no conjunto de caracteres determinado por
    `encoding`, enquanto a contraparte
    [substr()](function.substr.md) sempre os considera deslocamentos de byte.

### Valor Retornado

Retorna a parte da `string` especificada pelos
parâmetros `offset` e `length`.

Se `string` for menor que os caracteres de `offset`,
**`false`** será retornado.
Se `string` tiver exatamente o comprimento de caracteres de `offset`,
uma string vazia será retornada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `length` e `encoding` são anuláveis agora. |
| 7.0.11 | Se `string` for igual ao comprimento dos caracteres de `offset`, uma string vazia será retornada. Antes desta versão, **`false`** era retornado neste caso. |

### Veja também

- [substr()](function.substr.md) - Retorna parte de uma string
- [mb\_substr()](function.mb-substr.md) - Obtém parte da string
- [mb\_strcut()](function.mb-strcut.md) - Obtém parte da string

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
