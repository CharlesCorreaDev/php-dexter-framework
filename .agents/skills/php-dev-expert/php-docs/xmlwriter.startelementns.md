# Cria tag de elemento com namespace inicial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.startelementns.php

---

# XMLWriter::startElementNs

# xmlwriter\_start\_element\_ns

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::startElementNs -- xmlwriter\_start\_element\_ns — Cria tag de elemento com namespace inicial

### Descrição

Estilo orientado a objetos

public function **XMLWriter::startElementNs**([?](language.types.null.md)[string](language.types.string.md) `$prefix`, [string](language.types.string.md) `$name`, [?](language.types.null.md)[string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_start\_element\_ns**(  
    [XMLWriter](class.xmlwriter.md) `$writer`,  
    [?](language.types.null.md)[string](language.types.string.md) `$prefix`,  
    [string](language.types.string.md) `$name`,  
    [?](language.types.null.md)[string](language.types.string.md) `$namespace`  
): [bool](language.types.boolean.md)

Inicia um elemento com namespace.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`prefix`
:   O prefixo do namespace.
    Se `prefix` for **`null`**, o namespace será omitido.

`name`
:   O nome do elemento.

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

### Veja também

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
