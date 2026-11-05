# Cria um novo XMLWriter usando memória para saída de string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.tomemory.php

---

# XMLWriter::toMemory

(PHP 8 >= 8.4.0)

XMLWriter::toMemory — Cria um novo [XMLWriter](class.xmlwriter.md) usando memória para saída de string

### Descrição

public static function **XMLWriter::toMemory**(): static

Cria um novo [XMLWriter](class.xmlwriter.md) usando memória para saída de string.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [XMLWriter](class.xmlwriter.md).

### Veja também

- [XMLWriter::toStream()](xmlwriter.tostream.md) - Cria um novo XMLWriter usando um fluxo para saída
- [XMLWriter::toUri()](xmlwriter.touri.md) - Cria um novo XMLWriter usando um URI para saída

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
