# Define/Obtém codificação de caracteres para regex multibyte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-regex-encoding.php

---

# mb\_regex\_encoding

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

mb\_regex\_encoding — Define/Obtém codificação de caracteres para regex multibyte

### Descrição

function **mb\_regex\_encoding**([?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)|[bool](language.types.boolean.md)

Define/obtém a codificação de caracteres para uma regex multibyte.

### Parâmetros

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

Se `encoding` for definido, então
Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Neste caso, a codificação de caracteres interna NÃO é alterada.
Se `encoding` for omitido, então
o nome da codificação de caracteres atual para uma regex multibyte é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Veja também

- [mb\_internal\_encoding()](function.mb-internal-encoding.md) - Define/Obtém a codificação de caracteres interna
- [mb\_ereg()](function.mb-ereg.md) - Correspondência de expressão regular com suporte multibyte

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
