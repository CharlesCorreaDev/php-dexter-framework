# Cria um XMLReader a partir de um fluxo para leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.fromstream.php

---

# XMLReader::fromStream

(PHP 8 >= 8.4.0)

XMLReader::fromStream — Cria um [XMLReader](class.xmlreader.md) a partir de um fluxo para leitura

### Descrição

public static function **XMLReader::fromStream**(  
    [resource](language.types.resource.md) `$stream`,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**,  
    [int](language.types.integer.md) `$flags` = 0,  
    [?](language.types.null.md)[string](language.types.string.md) `$documentUri` = **`null`**  
): static

Cria um [XMLReader](class.xmlreader.md) a partir de um fluxo para leitura.

### Parâmetros

`stream`
:   O fluxo do qual o XML será lido.

`encoding`
:   A codificação do documento ou **`null`**.

`flags`
:   Uma máscara de bits das constantes
    **`LIBXML_*`**.

`documentUri`
:   URI base do documento, opcional.

### Valor Retornado

Retorna um [XMLReader](class.xmlreader.md).

### Erros/Exceções

- Passar um `encoding` inválido lançará um
  [ValueError](class.valueerror.md).
- Passar um recurso que não seja um fluxo para `stream`
  lançará um [TypeError](class.typeerror.md).

### Veja também

- [XMLReader::fromString()](xmlreader.fromstring.md) - Cria um XMLReader a partir de uma string XML
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
