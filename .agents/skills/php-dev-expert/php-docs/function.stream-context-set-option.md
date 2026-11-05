# Define uma opção para um fluxo/empacotador/contexto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-context-set-option.php

---

# stream\_context\_set\_option

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

stream\_context\_set\_option — Define uma opção para um fluxo/empacotador/contexto

### Descrição

function **stream\_context\_set\_option**(  
    [resource](language.types.resource.md) `$stream_or_context`,  
    [string](language.types.string.md) `$wrapper`,  
    [string](language.types.string.md) `$option_name`,  
    [mixed](language.types.mixed.md) `$value`  
): [bool](language.types.boolean.md)

A assinatura alternativa a seguir foi descontinuada a partir do PHP 8.4.0,
use [stream\_context\_set\_options()](function.stream-context-set-options.md) em seu lugar.

function **stream\_context\_set\_option**([resource](language.types.resource.md) `$stream_or_context`, [array](language.types.array.md) `$options`): [bool](language.types.boolean.md)

Define uma opção para o contexto especificado. `value`
é definido para `option` para o parâmetro `wrapper` (empacotador).

### Parâmetros

`stream_or_context`
:   O recurso fluxo ou contexto ao qual deve-se aplicar as opções.

`wrapper`
:   O nome do empacotador (que pode ser diferente do protocolo).
    Consulte [opções de contexto e parâmetros](context.md)
    para uma lista de opções de fluxo.

`option_name`
:   O nome da opção.

`value`
:   O valor da opção.

`options`
:   As opções a serem definidas para `stream_or_context`.

    > **Nota**:
    >
    > `options` deve ser um array associativo
    > de arrays associativos no formato
    > `$arr['empacotador']['opcao'] = $valor`.
    >
    > Consulte [opções de contexto e parâmetros](context.md)
    > para uma lista de opções de fluxo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | A assinatura alternativa de 2 parâmetros agora foi descontinuada. Use [stream\_context\_set\_options()](function.stream-context-set-options.md) em seu lugar. |

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
