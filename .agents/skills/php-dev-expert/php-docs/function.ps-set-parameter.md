# Define certos parâmetros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-set-parameter.php

---

# ps\_set\_parameter

(PECL ps >= 1.1.0)

ps\_set\_parameter — Define certos parâmetros

### Descrição

function **ps\_set\_parameter**([resource](language.types.resource.md) `$psdoc`, [string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Define diversos parâmetros que são usados ​​por muitas funções. Parâmetros são, por
definição, valores de string.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`name`
:   Para uma lista de nomes possíveis, veja [ps\_get\_parameter()](function.ps-get-parameter.md).

`value`
:   O valor do parâmetro.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- **ps\_get\_parameters()**
- [ps\_set\_value()](function.ps-set-value.md) - Define certos valores

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
