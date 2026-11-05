# Escreve tag de elemento com namespace completo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.writeelementns.php

---

# XMLWriter::writeElementNs

# xmlwriter\_write\_element\_ns

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::writeElementNs -- xmlwriter\_write\_element\_ns — Escreve tag de elemento com namespace completo

### Descrição

Estilo orientado a objetos

public function **XMLWriter::writeElementNs**(  
    [?](language.types.null.md)[string](language.types.string.md) `$prefix`,  
    [string](language.types.string.md) `$name`,  
    [?](language.types.null.md)[string](language.types.string.md) `$namespace`,  
    [?](language.types.null.md)[string](language.types.string.md) `$content` = **`null`**  
): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_write\_element\_ns**(  
    [XMLWriter](class.xmlwriter.md) `$writer`,  
    [?](language.types.null.md)[string](language.types.string.md) `$prefix`,  
    [string](language.types.string.md) `$name`,  
    [?](language.types.null.md)[string](language.types.string.md) `$namespace`,  
    [?](language.types.null.md)[string](language.types.string.md) `$content` = **`null`**  
): [bool](language.types.boolean.md)

Escreve uma tag de elemento com namespace completo.

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

`content`
:   O conteúdo do elemento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::startElementNs()](xmlwriter.startelementns.md) - Cria tag de elemento com namespace inicial
- [XMLWriter::endElement()](xmlwriter.endelement.md) - Termina o elemento atual
- [XMLWriter::writeElement()](xmlwriter.writeelement.md) - Escreve uma tag de elemento completa

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
