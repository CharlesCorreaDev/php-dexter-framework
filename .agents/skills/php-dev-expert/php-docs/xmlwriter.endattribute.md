# Termina o atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.endattribute.php

---

# XMLWriter::endAttribute

# xmlwriter\_end\_attribute

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::endAttribute -- xmlwriter\_end\_attribute — Termina o atributo

### Descrição

Estilo orientado a objetos

public function **XMLWriter::endAttribute**(): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_end\_attribute**([XMLWriter](class.xmlwriter.md) `$writer`): [bool](language.types.boolean.md)

Encerra o atributo atual.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::startAttribute()](xmlwriter.startattribute.md) - Inicia um atributo
- [XMLWriter::startAttributeNs()](xmlwriter.startattributens.md) - Inicia um atributo com namespace
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
