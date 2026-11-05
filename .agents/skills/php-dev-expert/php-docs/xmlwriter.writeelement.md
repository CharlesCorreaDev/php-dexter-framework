# Escreve uma tag de elemento completa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.writeelement.php

---

# XMLWriter::writeElement

# xmlwriter\_write\_element

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::writeElement -- xmlwriter\_write\_element — Escreve uma tag de elemento completa

### Descrição

Estilo orientado a objetos

public function **XMLWriter::writeElement**([string](language.types.string.md) `$name`, [?](language.types.null.md)[string](language.types.string.md) `$content` = **`null`**): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_write\_element**([XMLWriter](class.xmlwriter.md) `$writer`, [string](language.types.string.md) `$name`, [?](language.types.null.md)[string](language.types.string.md) `$content` = **`null`**): [bool](language.types.boolean.md)

Escreve uma tag de elemento completa.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`name`
:   O nome do elemento.

`content`
:   O conteúdo do elemento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::startElement()](xmlwriter.startelement.md) - Cria a tag de início de elemento
- [XMLWriter::endElement()](xmlwriter.endelement.md) - Termina o elemento atual
- [XMLWriter::writeElementNs()](xmlwriter.writeelementns.md) - Escreve tag de elemento com namespace completo

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
