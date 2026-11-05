# Adiciona a palavra à lista de palavras na sessão atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-add-to-session.php

---

# pspell\_add\_to\_session

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_add\_to\_session — Adiciona a palavra à lista de palavras na sessão atual

### Descrição

function **pspell\_add\_to\_session**([PSpell\Dictionary](class.pspell-dictionary.md) `$dictionary`, [string](language.types.string.md) `$word`): [bool](language.types.boolean.md)

**pspell\_add\_to\_session()** adiciona uma palavra à lista de palavras
associada à sessão atual. É muito semelhante a
[pspell\_add\_to\_personal()](function.pspell-add-to-personal.md).

### Parâmetros

`dictionary`
:   Uma instância de [PSpell\Dictionary](class.pspell-dictionary.md).

`word`
:   A palavra adicionada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `dictionary` agora espera uma instância de [PSpell\Dictionary](class.pspell-dictionary.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

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
