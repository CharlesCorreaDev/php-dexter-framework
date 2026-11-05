# Termina o elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.fullendelement.php

---

# XMLWriter::fullEndElement

# xmlwriter\_full\_end\_element

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL xmlwriter >= 2.0.4)

XMLWriter::fullEndElement -- xmlwriter\_full\_end\_element — Termina o elemento atual

### Descrição

Estilo orientado a objetos

public function **XMLWriter::fullEndElement**(): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_full\_end\_element**([XMLWriter](class.xmlwriter.md) `$writer`): [bool](language.types.boolean.md)

Encerra o elemento XML atual. Escreve uma tag de encerramento mesmo se o elemento estiver vazio.

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

- [XMLWriter::endElement()](xmlwriter.endelement.md) - Termina o elemento atual

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
