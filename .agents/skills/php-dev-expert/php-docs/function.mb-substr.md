# Obtém parte da string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-substr.php

---

# mb\_substr

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_substr — Obtém parte da string

### Descrição

function **mb\_substr**(  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$start`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**  
): [string](language.types.string.md)

Realiza uma operação de
[substr()](function.substr.md) segura para múltiplos bytes baseada no
número de caracteres. A posição é
contada a partir do início de
`string`. A posição do primeiro caractere é
0. A posição do segundo caractere é 1, e assim por diante.

### Parâmetros

`string`
:   A [string](language.types.string.md) da qual extrair a substring.

`start`
:   Se `start` for não negativo, a string retornada
    começará na posição `start`-ésima em
    `string`, contando a partir de zero. Por exemplo,
    na string '`abcdef`', o caractere na
    posição `0` é '`a`', o
    caractere na posição `2` é
    '`c`', e assim por diante.

    Se `start` for negativo, a string retornada
    começará no caractere `start`-ésimo
    a partir do final de `string`.

`length`
:   Número máximo de caracteres a serem usados de `string`. Se
    omitido ou **`null`** for passado, extrai todos os caracteres até
    o final da string.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

**mb\_substr()** retorna a porção de
`string` especificada pelos
parâmetros `start` e
`length`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Em strings inválidas (aquelas com erros de codificação), os índices de caractere agora são interpretados da mesma maneira que a maioria das outras funções mbstring. Isso significa que os índices de caractere retornados por [mb\_strpos()](function.mb-strpos.md) podem ser passados diretamente. |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Veja também

- [mb\_strcut()](function.mb-strcut.md) - Obtém parte da string
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
