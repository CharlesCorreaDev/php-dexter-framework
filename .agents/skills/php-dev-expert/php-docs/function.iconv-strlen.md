# Retorna a contagem de caracteres da string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iconv-strlen.php

---

# iconv\_strlen

(PHP 5, PHP 7, PHP 8)

iconv\_strlen — Retorna a contagem de caracteres da string

### Descrição

function **iconv\_strlen**([string](language.types.string.md) `$string`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

Ao contrário de [strlen()](function.strlen.md),
**iconv\_strlen()** conta as ocorrências de caracteres
na `string` de sequência de bytes fornecida com
base no conjunto de caracteres especificado, cujo resultado não é necessariamente
idêntico ao comprimento da string em bytes.

### Parâmetros

`string`
:   A string.

`encoding`
:   Se o parâmetro `encoding` for omitido ou **`null`**,
    presume-se que a `string` esteja codificada em
    [iconv.internal\_encoding](iconv.configuration.md).

### Valor Retornado

Retorna a contagem de caracteres da `string`, como um número inteiro,
ou **`false`** se ocorrer um erro durante a codificação.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `encoding` é anulável agora. |

### Veja também

- [grapheme\_strlen()](function.grapheme-strlen.md) - Obtém o comprimento de uma string em unidade de grafema
- [mb\_strlen()](function.mb-strlen.md) - Obtém o comprimento da string
- [strlen()](function.strlen.md) - Retorna o tamanho de uma string

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
