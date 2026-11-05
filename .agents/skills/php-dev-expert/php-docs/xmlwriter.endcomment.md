# Termina o comentário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.endcomment.php

---

# XMLWriter::endComment

# xmlwriter\_end\_comment

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 1.0.0)

XMLWriter::endComment -- xmlwriter\_end\_comment — Termina o comentário

### Descrição

Estilo orientado a objetos

public function **XMLWriter::endComment**(): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_end\_comment**([XMLWriter](class.xmlwriter.md) `$writer`): [bool](language.types.boolean.md)

Encerra o comentário atual.

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

- [XMLWriter::startComment()](xmlwriter.startcomment.md) - Cria tag de início de comentário
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
