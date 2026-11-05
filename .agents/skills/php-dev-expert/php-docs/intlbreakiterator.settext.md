# Define o texto a ser percorrido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlbreakiterator.settext.php

---

# IntlBreakIterator::setText

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

IntlBreakIterator::setText — Define o texto a ser percorrido

### Descrição

public function **IntlBreakIterator::setText**([string](language.types.string.md) `$text`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`text`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Este método agora retorna **`false`** em caso de falha; anteriormente retornava **`null`**. |

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
