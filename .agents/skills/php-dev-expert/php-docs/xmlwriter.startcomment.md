# Cria tag de início de comentário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.startcomment.php

---

# XMLWriter::startComment

# xmlwriter\_start\_comment

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 1.0.0)

XMLWriter::startComment -- xmlwriter\_start\_comment — Cria tag de início de comentário

### Descrição

Estilo orientado a objetos

public function **XMLWriter::startComment**(): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_start\_comment**([XMLWriter](class.xmlwriter.md) `$writer`): [bool](language.types.boolean.md)

Inicia um comentário.

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

- [XMLWriter::endComment()](xmlwriter.endcomment.md) - Termina o comentário
- [XMLWriter::writeComment()](xmlwriter.writecomment.md) - Escreve tag de comentário completa

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
