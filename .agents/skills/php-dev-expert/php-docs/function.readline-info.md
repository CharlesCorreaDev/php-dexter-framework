# Obtém/Define várias variáveis internas de readline

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readline-info.php

---

# readline\_info

(PHP 4, PHP 5, PHP 7, PHP 8)

readline\_info — Obtém/Define várias variáveis internas de readline

### Descrição

function **readline\_info**([?](language.types.null.md)[string](language.types.string.md) `$var_name` = **`null`**, [int](language.types.integer.md)|[string](language.types.string.md)|[bool](language.types.boolean.md)|[null](language.types.null.md) `$value` = **`null`**): [mixed](language.types.mixed.md)

Obtém ou define várias variáveis internas da readline.

### Parâmetros

`var_name`
:   Um nome de variável.

`value`
:   Se fornecido, este será o novo valor.

### Valor Retornado

Se for utilizada sem parâmetros, esta função retorna um array de
valores para as configurações que a readline usa. Os elementos
serão indexados pelos seguintes valores: `done`, `end`, `erase_empty_line`,
`library_version`, `line_buffer`, `mark`, `pending_input`, `point`, `prompt`,
`readline_name`, e `terminal_name`.
O [array](language.types.array.md) conterá apenas os elementos suportados pela biblioteca
usada para construir a extensão readline.

Se for utilizada com um ou dois parâmetros, o antigo valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `var_name` e `value` agora são anuláveis. |

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
