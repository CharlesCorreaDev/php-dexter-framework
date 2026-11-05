# Escreve a tag de entidade DTD completa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.writedtdentity.php

---

# XMLWriter::writeDtdEntity

# xmlwriter\_write\_dtd\_entity

(PHP 5 >= 5.2.1, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::writeDtdEntity -- xmlwriter\_write\_dtd\_entity — Escreve a tag de entidade DTD completa

### Descrição

Estilo orientado a objetos

public function **XMLWriter::writeDtdEntity**(  
    [string](language.types.string.md) `$name`,  
    [string](language.types.string.md) `$content`,  
    [bool](language.types.boolean.md) `$isParam` = **`false`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$publicId` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$systemId` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$notationData` = **`null`**  
): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_write\_dtd\_entity**(  
    [XMLWriter](class.xmlwriter.md) `$writer`,  
    [string](language.types.string.md) `$name`,  
    [string](language.types.string.md) `$content`,  
    [bool](language.types.boolean.md) `$isParam` = **`false`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$publicId` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$systemId` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$notationData` = **`null`**  
): [bool](language.types.boolean.md)

Escreve uma entidade DTD completa.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`name`
:   O nome da entidade.

`content`
:   O conteúdo da entidade.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `publicId`, `systemId` e `notationData` agora são anuláveis. |

### Veja também

- [XMLWriter::startDtdEntity()](xmlwriter.startdtdentity.md) - Cria entidade DTD inicial
- [XMLWriter::endDtdEntity()](xmlwriter.enddtdentity.md) - Encerra a entidade DTD atual

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
