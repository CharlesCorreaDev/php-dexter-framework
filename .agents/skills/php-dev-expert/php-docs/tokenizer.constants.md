# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tokenizer.constants.php

---

# Constantes predefinidas

Quando a extensão for ou compilado no PHP ou carregada dinamicamente em tempo
de execução, os tokens listados em [Lista de Tokens do Analisador](tokens.md) são definidos como
constantes.

| Constantes | Descrição |
| --- | --- |
| **`TOKEN_PARSE`** ([int](language.types.integer.md)) | Reconhece a habilidade de uso de palavras reservadas em contextos específicos. |

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
