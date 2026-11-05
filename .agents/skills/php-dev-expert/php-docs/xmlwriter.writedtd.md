# Escreve tag DTD completa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.writedtd.php

---

# XMLWriter::writeDtd

# xmlwriter\_write\_dtd

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::writeDtd -- xmlwriter\_write\_dtd — Escreve tag DTD completa

### Descrição

Estilo orientado a objetos

public function **XMLWriter::writeDtd**(  
    [string](language.types.string.md) `$name`,  
    [?](language.types.null.md)[string](language.types.string.md) `$publicId` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$systemId` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$content` = **`null`**  
): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_write\_dtd**(  
    [XMLWriter](class.xmlwriter.md) `$writer`,  
    [string](language.types.string.md) `$name`,  
    [?](language.types.null.md)[string](language.types.string.md) `$publicId` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$systemId` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$content` = **`null`**  
): [bool](language.types.boolean.md)

Escreve um DTD completo.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`name`
:   O nome do DTD.

`publicId`
:   O identificador público do subconjunto externo.

`systemId`
:   O identificador do sistema de subconjunto externo.

`content`
:   O conteúdo do DTD.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::startDtd()](xmlwriter.startdtd.md) - Cria tag DTD inicial
- [XMLWriter::endDtd()](xmlwriter.enddtd.md) - Termina o DTD atual

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
