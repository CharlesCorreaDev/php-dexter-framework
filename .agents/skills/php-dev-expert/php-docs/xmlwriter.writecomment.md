# Escreve tag de comentário completa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.writecomment.php

---

# XMLWriter::writeComment

# xmlwriter\_write\_comment

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::writeComment -- xmlwriter\_write\_comment — Escreve tag de comentário completa

### Descrição

Estilo orientado a objetos

public function **XMLWriter::writeComment**([string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_write\_comment**([XMLWriter](class.xmlwriter.md) `$writer`, [string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

Escreve um comentário completo.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`content`
:   O conteúdo do comentário.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::startComment()](xmlwriter.startcomment.md) - Cria tag de início de comentário
- [XMLWriter::endComment()](xmlwriter.endcomment.md) - Termina o comentário

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
