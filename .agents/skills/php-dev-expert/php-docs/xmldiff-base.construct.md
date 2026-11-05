# Construtor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmldiff-base.construct.php

---

# XMLDiff\Base::\_\_construct

(PECL xmldiff >= 0.8.0)

XMLDiff\Base::\_\_construct — Construtor

### Descrição

public function **XMLDiff\Base::\_\_construct**([string](language.types.string.md) `$nsname`)

Construtor base para todas as classes na extensão xmldiff.

### Parâmetros

`nsname`
:   Nome do namespace personalizado para o documento de diferenças. O namespace padrão é http://www.locus.cz/diffmark e isso é suficiente para evitar conflitos de namespace. Use este parâmetro se desejar alterá-lo por algum motivo.

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
