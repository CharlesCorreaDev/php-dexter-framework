# Termina o DTD atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.enddtd.php

---

# XMLWriter::endDtd

# xmlwriter\_end\_dtd

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::endDtd -- xmlwriter\_end\_dtd — Termina o DTD atual

### Descrição

Estilo orientado a objetos

public function **XMLWriter::endDtd**(): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_end\_dtd**([XMLWriter](class.xmlwriter.md) `$writer`): [bool](language.types.boolean.md)

Encerra o DTD do documento.

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

- [XMLWriter::startDtd()](xmlwriter.startdtd.md) - Cria tag DTD inicial
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
