# Define certos valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-set-value.php

---

# ps\_set\_value

(PECL ps >= 1.1.0)

ps\_set\_value — Define certos valores

### Descrição

function **ps\_set\_value**([resource](language.types.resource.md) `$psdoc`, [string](language.types.string.md) `$name`, [float](language.types.float.md) `$value`): [bool](language.types.boolean.md)

Define vários valores que são usados ​​por muitas funções. Os parâmetros são,
por definição, valores float.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`name`
:   O parâmetro `name` pode ter um dos seguintes valores:

    textrendering
    :   A maneira como o texto é exibido.

    textx
    :   A coordenada x para saída de texto.

    texty
    :   A coordenada y para saída de texto.

    wordspacing
    :   A distância entre palavras em relação à largura de um espaço.

    leading
    :   A distância entre linhas em pixels.

`value`
:   O valor do parâmetro.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_get\_value()](function.ps-get-value.md) - Obtém determinados valores
- [ps\_set\_parameter()](function.ps-set-parameter.md) - Define certos parâmetros

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
