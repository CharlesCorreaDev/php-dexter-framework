# Revogar uma chave ou subchave gerando e adicionando assinatura de revogação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-key-revoke.php

---

# rnp\_key\_revoke

(PECL rnp >= 0.1.1)

rnp\_key\_revoke — Revogar uma chave ou subchave gerando e adicionando assinatura de revogação

### Descrição

function **rnp\_key\_revoke**(  
    [RnpFFI](class.rnpffi.md) `$ffi`,  
    [string](language.types.string.md) `$key_fp`,  
    [int](language.types.integer.md) `$flags`,  
    [array](language.types.array.md) `$options` = ?  
): [bool](language.types.boolean.md)

Nota: é necessário chamar [rnp\_save\_keys()](function.rnp-save-keys.md) para gravar o(s) chaveiro(s) atualizado(s).

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`key_fp`
:   Impressão digital da chave.

`flags`
:   Atualmente precisa ser 0.

`options`
:   Um array associativo com opções.

    | Chave | Tipo de dado | Descrição |
    | --- | --- | --- |
    | `"hash"` | string | Define o algoritmo de hash usado durante cálculo da assinatura. |
    | `"code"` | string | Código do motivo da revogação. Valores possíveis são: 'no' (não), 'superseded' (substituída), 'compromised' (comprometida) e 'retired' (aposentada). Se não definida, o valor 'no' será usado por padrão. |
    | `"reason"` | string | Representação textual do motivo da revogação. |

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
