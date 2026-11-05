# Cria um novo XMLWriter usando um URI para saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.touri.php

---

# XMLWriter::toUri

(PHP 8 >= 8.4.0)

XMLWriter::toUri — Cria um novo [XMLWriter](class.xmlwriter.md) usando um URI para saída

### Descrição

public static function **XMLWriter::toUri**([string](language.types.string.md) `$uri`): static

Cria um novo [XMLWriter](class.xmlwriter.md) usando um URI para saída.

### Parâmetros

`uri`
:   O URI do recurso para a saída.

### Valor Retornado

Retorna um [XMLWriter](class.xmlwriter.md).

### Veja também

- [XMLWriter::toMemory()](xmlwriter.tomemory.md) - Cria um novo XMLWriter usando memória para saída de string
- [XMLWriter::toStream()](xmlwriter.tostream.md) - Cria um novo XMLWriter usando um fluxo para saída

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
