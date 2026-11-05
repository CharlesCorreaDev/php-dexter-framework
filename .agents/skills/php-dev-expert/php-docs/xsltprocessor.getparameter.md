# Obtém o valor de um parâmetro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsltprocessor.getparameter.php

---

# XSLTProcessor::getParameter

(PHP 5, PHP 7, PHP 8)

XSLTProcessor::getParameter — Obtém o valor de um parâmetro

### Descrição

public function **XSLTProcessor::getParameter**([string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$name`): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém um parâmetro se anteriormente definido por
[XSLTProcessor::setParameter()](xsltprocessor.setparameter.md).

### Parâmetros

`namespace`
:   O namespace URI do parâmetro XSLT.

`name`
:   O nome local do parâmetro XSLT.

### Valor Retornado

O valor do parâmetro (em string), ou **`false`** se não estiver definido.

### Veja também

- [XSLTProcessor::setParameter()](xsltprocessor.setparameter.md) - Define um valor para um parâmetro
- [XSLTProcessor::removeParameter()](xsltprocessor.removeparameter.md) - Remove parâmetro

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
