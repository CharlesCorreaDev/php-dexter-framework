# Escreve atributo com namespace completo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.writeattributens.php

---

# XMLWriter::writeAttributeNs

# xmlwriter\_write\_attribute\_ns

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::writeAttributeNs -- xmlwriter\_write\_attribute\_ns — Escreve atributo com namespace completo

### Descrição

Estilo orientado a objetos

public function **XMLWriter::writeAttributeNs**(  
    [?](language.types.null.md)[string](language.types.string.md) `$prefix`,  
    [string](language.types.string.md) `$name`,  
    [?](language.types.null.md)[string](language.types.string.md) `$namespace`,  
    [string](language.types.string.md) `$value`  
): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_write\_attribute\_ns**(  
    [XMLWriter](class.xmlwriter.md) `$writer`,  
    [?](language.types.null.md)[string](language.types.string.md) `$prefix`,  
    [string](language.types.string.md) `$name`,  
    [?](language.types.null.md)[string](language.types.string.md) `$namespace`,  
    [string](language.types.string.md) `$value`  
): [bool](language.types.boolean.md)

Escreve um atributo com namespace completo.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`prefix`
:   O prefixo do namespace.
    Se `prefix` for **`null`**, o namespace será omitido.

`name`
:   O nome do atributo.

`namespace`
:   O URI do namespace.
    Se `namespace` for **`null`**, a declaração do namespace será
    omitida.

`value`
:   O valor do atributo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::writeAttribute()](xmlwriter.writeattribute.md) - Escreve atributo completo
- [XMLWriter::startAttribute()](xmlwriter.startattribute.md) - Inicia um atributo
- [XMLWriter::startAttributeNs()](xmlwriter.startattributens.md) - Inicia um atributo com namespace
- [XMLWriter::endAttribute()](xmlwriter.endattribute.md) - Termina o atributo

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
