# Produz novo documento XML com base em diferenças

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmldiff-base.merge.php

---

# XMLDiff\Base::merge

(PECL xmldiff >= 0.8.0)

XMLDiff\Base::merge — Produz novo documento XML com base em diferenças

### Descrição

abstract public function **XMLDiff\Base::merge**([mixed](language.types.mixed.md) `$src`, [mixed](language.types.mixed.md) `$diff`): [mixed](language.types.mixed.md)

Método de mesclagem abstrato a ser implementado pelas classes herdadas.

Basicamente, o objetivo do método é produzir um novo documento XML com base nas informações de diferenças.

### Parâmetros

`src`
:   Documento XML de origem.

`diff`
:   Documento produzido pelo método diff.

### Valor Retornado

Dependente da implementação.

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
