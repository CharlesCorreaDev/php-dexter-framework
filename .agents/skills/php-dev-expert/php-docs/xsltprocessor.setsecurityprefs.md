# Define preferências de segurança

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsltprocessor.setsecurityprefs.php

---

# XSLTProcessor::setSecurityPrefs

(PHP >= 5.4.0, PHP 7, PHP 8)

XSLTProcessor::setSecurityPrefs — Define preferências de segurança

### Descrição

public function **XSLTProcessor::setSecurityPrefs**([int](language.types.integer.md) `$preferences`): [int](language.types.integer.md)

Define as preferências de segurança.

### Parâmetros

`preferences`
:   As novas preferências de segurança. As constantes seguidas podem ser unidas pela operação binária OR:
    **`XSL_SECPREF_READ_FILE`**,
    **`XSL_SECPREF_WRITE_FILE`**,
    **`XSL_SECPREF_CREATE_DIRECTORY`**,
    **`XSL_SECPREF_READ_NETWORK`** e
    **`XSL_SECPREF_WRITE_NETWORK`**. Alternativamente,
    **`XSL_SECPREF_NONE`** ou
    **`XSL_SECPREF_DEFAULT`** podem ser passadas.

### Valor Retornado

Retorna as preferências de segurança antigas..

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
