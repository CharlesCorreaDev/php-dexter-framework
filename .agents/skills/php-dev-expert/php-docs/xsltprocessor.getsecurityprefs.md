# Obtém as preferências de segurança

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsltprocessor.getsecurityprefs.php

---

# XSLTProcessor::getSecurityPrefs

(PHP >= 5.4.0, PHP 7, PHP 8)

XSLTProcessor::getSecurityPrefs — Obtém as preferências de segurança

### Descrição

public function **XSLTProcessor::getSecurityPrefs**(): [int](language.types.integer.md)

Obtém as preferências de segurança.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma máscara de bits consistindo da combinação de **`XSL_SECPREF_READ_FILE`**,
**`XSL_SECPREF_WRITE_FILE`**,
**`XSL_SECPREF_CREATE_DIRECTORY`**,
**`XSL_SECPREF_READ_NETWORK`** e
**`XSL_SECPREF_WRITE_NETWORK`**.

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
