# Define uma ou mais opções de conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-set-option.php

---

# yaz\_set\_option

(PECL yaz >= 0.9.0)

yaz\_set\_option — Define uma ou mais opções de conexão

### Descrição

function **yaz\_set\_option**([resource](language.types.resource.md) `$id`, [string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

function **yaz\_set\_option**([resource](language.types.resource.md) `$id`, [array](language.types.array.md) `$options`): [void](language.types.void.md)

Define uma ou mais opções de conexão.

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`name` ou `options`
:   Pode ser uma string ou um array.

    Se fornecido como uma string, este será o nome da opção a ser definida. Será
    necessário informar o valor em `value`.

    Se fornecido como um array, será um array associativo (nome da opção
    => valor da opção).

    **Opções de conexão PHP/YAZ**

    | Nome | Descrição |
    | --- | --- |
    | implementationName | Nome de implementação do servidor. |
    | implementationVersion | Versão de implementação do servidor. |
    | implementationId | ID de implementação do servidor. |
    | schema | Esquema para recuperação. Por padrão, nenhum esquema é usado. Definir esta opção é equivalente a usar a função [yaz\_schema()](function.yaz-schema.md). |
    | preferredRecordSyntax | Sintaxe de registro para recuperação. Por padrão, nenhuma sintaxe é usada. Definir esta opção é equivalente a usar a função [yaz\_syntax()](function.yaz-syntax.md). |
    | start | Deslocamento para o primeiro registro a ser recuperado via [yaz\_search()](function.yaz-search.md) ou [yaz\_present()](function.yaz-present.md). O primeiro registro é numerado com valor inicial 0. O segundo registro tem valor inicial 1. Definir esta opção em combinação com a opção `count` tem o mesmo efeito que chamar [yaz\_range()](function.yaz-range.md), exceto que os registros são numerados a partir de 1 em [yaz\_range()](function.yaz-range.md). |
    | count | Número máximo de registros a serem recuperados via [yaz\_search()](function.yaz-search.md) ou [yaz\_present()](function.yaz-present.md). |
    | elementSetName | Nome do conjunto de elementos para recuperação. Definir esta opção é equivalente a chamar [yaz\_element()](function.yaz-element.md). |

`value`
:   O novo valor da opção. Use este somente se o argumento anterior for
    uma string.

### Valor Retornado

Nenhum valor é retornado.

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
