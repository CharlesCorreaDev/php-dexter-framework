# Obtém parte da string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-strcut.php

---

# mb\_strcut

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_strcut — Obtém parte da string

### Descrição

function **mb\_strcut**(  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$start`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**  
): [string](language.types.string.md)

**mb\_strcut()** extrai uma substring de uma string de forma semelhante a
[mb\_substr()](function.mb-substr.md), mas opera em bytes em vez de caracteres. Se a
posição de corte estiver entre dois bytes de um caractere multibyte, o corte é
realizado a partir do primeiro byte desse caractere. Essa também é a diferença
para a função [substr()](function.substr.md), que simplesmente cortaria a string entre
os bytes e resultaria em uma sequência de bytes malformada.

### Parâmetros

`string`
:   A [string](language.types.string.md) a ser cortada.

`start`
:   Se `start` for não negativo, a string retornada
    começará na posição de *byte* `start`
    em `string`, contando a partir do zero. Por exemplo,
    na string '`abcdef`', o byte na
    posição `0` é '`a`', o
    byte na posição `2` é
    '`c`', e assim por diante.

    Se `start` for negativo, a string retornada
    começará no byte `start`
    contando a partir do final de `string`. No entanto, se o
    valor absoluto de um `start` negativo for maior que o
    comprimento da string, a parte retornada começará do início de
    `string`.

`length`
:   Comprimento em *bytes*. Se omitido ou **`null`**
    for passado, extrai todos os bytes até o final da string.

    Se `length` for negativo, a string retornada
    terminará no byte de número `length`
    contando a partir do final de `string`. No entanto, se o
    valor absoluto de um `length` negativo for maior que o
    número de caracteres após a posição de `start`, uma string vazia será
    retornada.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

**mb\_strcut()** retorna a parte de
`string` especificada pelos
parâmetros `start` e
`length`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O comportamento agora é mais consistente em strings `UTF-8` e `UTF-16` inválidas. |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Veja também

- [mb\_substr()](function.mb-substr.md) - Obtém parte da string
- [mb\_internal\_encoding()](function.mb-internal-encoding.md) - Define/Obtém a codificação de caracteres interna

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
