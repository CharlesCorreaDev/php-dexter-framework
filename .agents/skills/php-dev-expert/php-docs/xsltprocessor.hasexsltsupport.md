# Verifica se o PHP tem suporte a EXSLT

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsltprocessor.hasexsltsupport.php

---

# XSLTProcessor::hasExsltSupport

(PHP 5 >= 5.0.4, PHP 7, PHP 8)

XSLTProcessor::hasExsltSupport — Verifica se o PHP tem suporte a EXSLT

### Descrição

public function **XSLTProcessor::hasExsltSupport**(): [bool](language.types.boolean.md)

Este método verifica se o PHP foi construído com a
[» biblioteca EXSLT](https://gitlab.gnome.org/GNOME/libxslt/-/wikis/home).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Testando o suporte a EXSLT**

```
<?php

$proc = new XSLTProcessor;
if (!$proc->hasExsltSupport()) {
    die('EXSLT support not available');
}

// trabalhar com EXSLT a partir daqui ..

?>
```

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
