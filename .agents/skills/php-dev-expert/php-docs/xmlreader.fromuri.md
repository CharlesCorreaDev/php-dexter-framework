# Cria um XMLReader a partir de um URI para leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.fromuri.php

---

# XMLReader::fromUri

(PHP 8 >= 8.4.0)

XMLReader::fromUri — Cria um [XMLReader](class.xmlreader.md) a partir de um URI para leitura

### Descrição

public static function **XMLReader::fromUri**([string](language.types.string.md) `$uri`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**, [int](language.types.integer.md) `$flags` = 0): static

Cria um [XMLReader](class.xmlreader.md) a partir de um URI para leitura.

### Parâmetros

`uri`
:   URI apontando para o documento.

`encoding`
:   A codificação do documento ou **`null`**.

`flags`
:   Uma máscara de bits das constantes
    [LIBXML\_\*](libxml.constants.md).

### Valor Retornado

Retorna um [XMLReader](class.xmlreader.md).

### Erros/Exceções

- Passar um `encoding` inválido, lançará um
  [ValueError](class.valueerror.md).

### Veja também

- [XMLReader::fromStream()](xmlreader.fromstream.md) - Cria um XMLReader a partir de um fluxo para leitura
- [XMLReader::fromString()](xmlreader.fromstring.md) - Cria um XMLReader a partir de uma string XML

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
