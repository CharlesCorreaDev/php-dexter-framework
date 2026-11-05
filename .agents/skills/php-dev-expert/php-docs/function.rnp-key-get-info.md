# Obtém informação sobre a chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-key-get-info.php

---

# rnp\_key\_get\_info

(PECL rnp >= 0.1.1)

rnp\_key\_get\_info — Obtém informação sobre a chave

### Descrição

function **rnp\_key\_get\_info**([RnpFFI](class.rnpffi.md) `$ffi`, [string](language.types.string.md) `$key_fp`): [array](language.types.array.md)|[false](language.types.singleton.md)

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`key_fp`
:   Impressão digital da chave.

### Valor Retornado

Um array associativo com informação sobre a chave ou **`false`** em caso de falha.

| Chave | Tipo de dado | Descrição |
| --- | --- | --- |
| `"is_primary"` | booleano | **`true`** se esta chave for a primária. |
| `"is_sub"` | booleano | **`true`** se esta chave for uma subchave. |
| `"is_valid"` | booleano | **`true`** se a chave pública for válida. Isto inclui verificações de auto-assinatura, tempo de expiração, revogação e assim por diante. |
| `"is_revoked"` | booleano | **`true`** se esta chave estiver revogada. |
| `"is_superseded"` | booleano | **`true`** se esta chave tiver sido substituída. Presente somente se a chave estiver revogada. |
| `"is_compromised"` | booleano | **`true`** se esta chave estiver comprometida. Presente somente se a chave estiver revogada. |
| `"is_retired"` | booleano | **`true`** se esta chave estiver aposentada. Presente somente se a chave estiver revogada. |
| `"is_expired"` | booleano | **`true`** se esta chave estiver expirada. |
| `"have_secret"` | booleano | **`true`** se esta chave tiver parte secreta. |
| `"is_locked"` | booleano | **`true`** se esta chave estiver atualmente bloqueada. Presente apenas para chaves secretas. |
| `"is_protected"` | booleano | **`true`** se esta chave estiver protegida. Presente apenas para chaves secretas. Uma chave protegida é aquela criptografada e que pode ser mantida com segurança na memória e bloquada/desbloqueada quando necessário. |
| `"have_public"` | booleano | **`true`** se esta chave tiver parte pública. Geralmente todas as chaves teriam uma parte pública. |
| `"valid_till"` | inteiro | O timestamp até o qual a chave pode ser considerada válida. Nota: isso levará em consideração não apenas a expiração da chave, mas também as revogações. Para a subchave, o tempo de validade da chave primária também será verificado. |
| `"bits"` | inteiro | Número de bits na chave. Para chaves baseadas em EC, conterá o tamanho da curva. |
| `"alg"` | string | Nome do algoritmo da chave. |
| `"subkeys"` | array | Um array indexado contendo sequências de impressões digitais de subchaves. Presente apenas para chaves primárias. Pode estar vazio se a chave primária não tiver subchaves. |
| `"uids"` | array | Um array indexado contendo strings de ID do usuário. Presente apenas para chaves primárias. Pode estar vazio se a chave primária não tiver IDs de usuário. |

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
