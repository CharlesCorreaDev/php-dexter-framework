# Inicia um atributo com namespace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.startattributens.php

---

# XMLWriter::startAttributeNs

# xmlwriter\_start\_attribute\_ns

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::startAttributeNs -- xmlwriter\_start\_attribute\_ns — Inicia um atributo com namespace

### Descrição

Estilo orientado a objetos

public function **XMLWriter::startAttributeNs**([?](language.types.null.md)[string](language.types.string.md) `$prefix`, [string](language.types.string.md) `$name`, [?](language.types.null.md)[string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_start\_attribute\_ns**(  
    [XMLWriter](class.xmlwriter.md) `$writer`,  
    [?](language.types.null.md)[string](language.types.string.md) `$prefix`,  
    [string](language.types.string.md) `$name`,  
    [?](language.types.null.md)[string](language.types.string.md) `$namespace`  
): [bool](language.types.boolean.md)

Inicia um atributo com namespace.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`prefix`
:   O prefixo do namespace.

`name`
:   O nome do atributo.

`namespace`
:   O URI do namespace.
    Se `namespace` for **`null`**, a declaração do namespace será
    omitida.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `prefix` é anulável agora. |

### Veja também

- [XMLWriter::startAttribute()](xmlwriter.startattribute.md) - Inicia um atributo
- [XMLWriter::endAttribute()](xmlwriter.endattribute.md) - Termina o atributo
- [XMLWriter::writeAttribute()](xmlwriter.writeattribute.md) - Escreve atributo completo
- [XMLWriter::writeAttributeNs()](xmlwriter.writeattributens.md) - Escreve atributo com namespace completo

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
