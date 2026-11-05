# Obtém o comprimento da string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-strlen.php

---

# mb\_strlen

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_strlen — Obtém o comprimento da string

### Descrição

function **mb\_strlen**([string](language.types.string.md) `$string`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [int](language.types.integer.md)

Obtém o comprimento de uma [string](language.types.string.md).

### Parâmetros

`string`
:   A [string](language.types.string.md) sendo verificada quanto ao comprimento.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

Retorna o número de caracteres em
[string](language.types.string.md) `string` tendo codificação de caracteres
`encoding`. Um caractere multibyte é
contado como 1.

### Erros/Exceções

Se a codificação for desconhecida, um erro do nível
**`E_WARNING`** é gerado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Veja também

- [mb\_internal\_encoding()](function.mb-internal-encoding.md) - Define/Obtém a codificação de caracteres interna
- [grapheme\_strlen()](function.grapheme-strlen.md) - Obtém o comprimento de uma string em unidade de grafema
- [iconv\_strlen()](function.iconv-strlen.md) - Retorna a contagem de caracteres da string
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
