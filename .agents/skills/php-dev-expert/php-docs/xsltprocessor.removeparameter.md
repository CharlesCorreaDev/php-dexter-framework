# Remove parâmetro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsltprocessor.removeparameter.php

---

# XSLTProcessor::removeParameter

(PHP 5, PHP 7, PHP 8)

XSLTProcessor::removeParameter — Remove parâmetro

### Descrição

public function **XSLTProcessor::removeParameter**([string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Remove um parâmetro, se definido. Isto irá fazer o processador usar o
valor padrão para o parâmetro como especificado no stylesheet.

### Parâmetros

`namespace`
:   A URI de espaço de nomes do parâmetro XSLT.

`name`
:   O nome local do parâmetro XSLT.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [XSLTProcessor::setParameter()](xsltprocessor.setparameter.md) - Define um valor para um parâmetro
- [XSLTProcessor::getParameter()](xsltprocessor.getparameter.md) - Obtém o valor de um parâmetro

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
