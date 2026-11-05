# Gera e exporta assinatura de revogação de chave primária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-key-export-revocation.php

---

# rnp\_key\_export\_revocation

(PECL rnp >= 0.1.1)

rnp\_key\_export\_revocation — Gera e exporta assinatura de revogação de chave primária

### Descrição

function **rnp\_key\_export\_revocation**(  
    [RnpFFI](class.rnpffi.md) `$ffi`,  
    [string](language.types.string.md) `$key_fp`,  
    [int](language.types.integer.md) `$flags`,  
    [array](language.types.array.md) `$options` = ?  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Nota: para revogar uma chave é preciso importar esta assinatura para o armazenamento de chaves ou usar
a função [rnp\_key\_revoke()](function.rnp-key-revoke.md).

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`key_fp`
:   Impressão digital da chave primária a ser revogada.

`flags`
:   **`RNP_KEY_EXPORT_ARMORED`** ou 0.

`options`
:   Um array associativo com opções.

    | Chave | Tipo de dado | Descrição |
    | --- | --- | --- |
    | `"hash"` | string | Define o algoritmo de hash usado durante cálculo da assinatura. |
    | `"code"` | string | Código do motivo da revogação. Valores possíveis são: 'no' (não), 'superseded' (substituída), 'compromised' (comprometida) e 'retired' (aposentada). Se não definida, o valor 'no' será usado por padrão. |
    | `"reason"` | string | Representação textual do motivo da revogação. |

### Valor Retornado

Assinatura de revogação exportada em caso de sucesso ou **`false`** em caso de falha.

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
