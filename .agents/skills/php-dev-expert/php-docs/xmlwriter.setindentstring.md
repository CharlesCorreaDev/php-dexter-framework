# Define a string usada para recuo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.setindentstring.php

---

# XMLWriter::setIndentString

# xmlwriter\_set\_indent\_string

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::setIndentString -- xmlwriter\_set\_indent\_string — Define a string usada para recuo

### Descrição

Estilo orientado a objetos

public function **XMLWriter::setIndentString**([string](language.types.string.md) `$indentation`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_set\_indent\_string**([XMLWriter](class.xmlwriter.md) `$writer`, [string](language.types.string.md) `$indentation`): [bool](language.types.boolean.md)

Define a string que será usada para recuar cada elemento/atributo do
XML resultante.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`indentation`
:   A string do recuo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Notas

> **Nota**:
>
> O recuo é redefinido quando um xmlwriter é aberto.

### Veja também

- [XMLWriter::setIndent()](xmlwriter.setindent.md) - Ativa/desativa o recuo

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
