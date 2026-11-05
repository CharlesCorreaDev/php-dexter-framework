# Escreve texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.text.php

---

# XMLWriter::text

# xmlwriter\_text

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::text -- xmlwriter\_text — Escreve texto

### Descrição

Estilo orientado a objetos

public function **XMLWriter::text**([string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_text**([XMLWriter](class.xmlwriter.md) `$writer`, [string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

Escreve um texto.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`content`
:   O conteúdo do texto.
    Os caracteres `<`, `>`,
    `&` e `"` são escritos como
    referências de entidade (ou seja, `&lt;`, `&gt;`,
    `&amp;` e `&quot;`, respectivamente).
    Todos os outros caracteres, incluindo `'`, são escritos literalmente.
    Para escrever os caracteres XML especiais literalmente, ou para escrever referências de entidade literais,
    [xmlwriter\_write\_raw()](xmlwriter.writeraw.md) deve ser usado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

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
