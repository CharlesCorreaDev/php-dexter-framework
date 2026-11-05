# Cria um XMLReader a partir de uma string XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.fromstring.php

---

# XMLReader::fromString

(PHP 8 >= 8.4.0)

XMLReader::fromString — Cria um [XMLReader](class.xmlreader.md) a partir de uma string XML

### Descrição

public static function **XMLReader::fromString**([string](language.types.string.md) `$source`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**, [int](language.types.integer.md) `$flags` = 0): static

Cria um [XMLReader](class.xmlreader.md) a partir de uma string XML.

### Parâmetros

`source`
:   String contendo o XML a ser analisado.

`encoding`
:   A codificação do documento ou **`null`**.

`flags`
:   Máscara de bits das constantes
    [LIBXML\_\*](libxml.constants.md).

### Valor Retornado

Retorna um [XMLReader](class.xmlreader.md).

### Erros/Exceções

- Passar um `encoding` inválido lançará um
  [ValueError](class.valueerror.md).

### Veja também

- [XMLReader::fromStream()](xmlreader.fromstream.md) - Cria um XMLReader a partir de um fluxo para leitura
- [XMLReader::fromUri()](xmlreader.fromuri.md) - Cria um XMLReader a partir de um URI para leitura

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
