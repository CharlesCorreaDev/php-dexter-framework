# Cria tag DTD inicial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.startdtd.php

---

# XMLWriter::startDtd

# xmlwriter\_start\_dtd

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::startDtd -- xmlwriter\_start\_dtd — Cria tag DTD inicial

### Descrição

Estilo orientado a objetos

public function **XMLWriter::startDtd**([string](language.types.string.md) `$qualifiedName`, [?](language.types.null.md)[string](language.types.string.md) `$publicId` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$systemId` = **`null`**): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_start\_dtd**(  
    [XMLWriter](class.xmlwriter.md) `$writer`,  
    [string](language.types.string.md) `$qualifiedName`,  
    [?](language.types.null.md)[string](language.types.string.md) `$publicId` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$systemId` = **`null`**  
): [bool](language.types.boolean.md)

Inicia um DTD.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`qualifiedName`
:   O nome qualificado do tipo de documento a ser criado.

`publicId`
:   O identificador público do subconjunto externo.

`systemId`
:   O identificador do sistema de subconjunto externo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::endDtd()](xmlwriter.enddtd.md) - Termina o DTD atual
- [XMLWriter::writeDtd()](xmlwriter.writedtd.md) - Escreve tag DTD completa

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
