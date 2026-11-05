# Produz diferença entre dois documentos XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmldiff-base.diff.php

---

# XMLDiff\Base::diff

(PECL xmldiff >= 0.8.0)

XMLDiff\Base::diff — Produz diferença entre dois documentos XML

### Descrição

abstract public function **XMLDiff\Base::diff**([mixed](language.types.mixed.md) `$from`, [mixed](language.types.mixed.md) `$to`): [mixed](language.types.mixed.md)

Método abstrato para ser implementado por classes herdeiras.

O objeto básico deste método é produzir diferença entre dois documentos. A ordem dos parâmetros é importante para que não sejam produzidas saídas diferentes.

### Parâmetros

`from`
:   Documento XML de origem.

`to`
:   Documento XML de destino.

### Valor Retornado

Depende da implementação.

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
