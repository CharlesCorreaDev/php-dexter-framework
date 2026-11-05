# Cria um novo XMLWriter usando um fluxo para saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.tostream.php

---

# XMLWriter::toStream

(PHP 8 >= 8.4.0)

XMLWriter::toStream — Cria um novo [XMLWriter](class.xmlwriter.md) usando um fluxo para saída

### Descrição

public static function **XMLWriter::toStream**([resource](language.types.resource.md) `$stream`): static

Cria um novo [XMLWriter](class.xmlwriter.md) usando um fluxo para saída.

### Parâmetros

`stream`
:   O fluxo a ser usado para saída.

### Valor Retornado

Retorna um [XMLWriter](class.xmlwriter.md).

### Erros/Exceções

- Passar um recurso que não é um fluxo para `stream`
  gerará um [TypeError](class.typeerror.md).

### Veja também

- [XMLWriter::toMemory()](xmlwriter.tomemory.md) - Cria um novo XMLWriter usando memória para saída de string
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
