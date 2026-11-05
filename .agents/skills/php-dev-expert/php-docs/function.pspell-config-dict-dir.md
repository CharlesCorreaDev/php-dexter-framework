# Localização da lista principal de palavras

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-config-dict-dir.php

---

# pspell\_config\_dict\_dir

(PHP 5, PHP 7, PHP 8)

pspell\_config\_dict\_dir — Localização da lista principal de palavras

### Descrição

function **pspell\_config\_dict\_dir**([PSpell\Config](class.pspell-config.md) `$config`, [string](language.types.string.md) `$directory`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `config` agora espera uma instância de [PSpell\Config](class.pspell-config.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

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
