# Verifica assinaturas incorporadas ou em texto não criptografado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-op-verify.php

---

# rnp\_op\_verify

(PECL rnp >= 0.1.1)

rnp\_op\_verify — Verifica assinaturas incorporadas ou em texto não criptografado

### Descrição

function **rnp\_op\_verify**([RnpFFI](class.rnpffi.md) `$ffi`, [string](language.types.string.md) `$data`): [array](language.types.array.md)|[false](language.types.singleton.md)

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`data`
:   Dados assinados.

### Valor Retornado

Um array associativo com informações sobre os resultados da verificação ou **`false`** em caso de falha.

| Chave | Tipo de dado | Descrição |
| --- | --- | --- |
| `"verification_status"` | string | Resultado geral da verificação, string "Success" ou mensagem de erro apropriada. O resultado "Success" é definido quando pelo menos uma assinatura for válida e verificada com sucesso. Os resultados da verificação individual para cada assinatura podem ser verificados no array "signatures". |
| `"file_name"` | string | Nome do arquivo |
| `"file_mtime"` | inteiro | Horário de modificação do arquivo |
| `"mode"` | string | Modo de proteção de dados (criptografia) usado na mensagem processada. Os valores atualmente definidos são "none", "cfb", "cfb-mdc", "aead-ocb" e "aead-eax". |
| `"cipher"` | string | Cifra simétrica usada para criptografia de dados |
| `"valid_integrity"` | booleano | **`true`** se a proteção de integridade da mensagem foi usada (ou seja, MDC ou AEAD) e foi validada com sucesso. |
| `"signatures"` | array | Um array associativo que descreve cada assinatura encontrada. Veja a descrição abaixo. |

Sub-array "signatures".

| Chave | Tipo de dado | Descrição |
| --- | --- | --- |
| "verification\_status" | string | Status de verificação de assinatura, string "Success" ou mensagem de erro apropriada. |
| "creation\_time" | inteiro | Horário de criação da assinatura em segundos desde 1º de janeiro de 1970 UTC. |
| "expiration\_time" | inteiro | Tempo de expiração da assinatura em segundos desde o momento da criação ou 0 se a assinatura nunca expirar. |
| "hash" | string | Algoritmo de função hash usado para calcular a assinatura. |
| "signing\_key" | string | Impressão digital da chave usada para assinatura. Poderia ser "Not found" se a chave pública correspondente não estiver carregada no objeto FFI. |
| "signature\_type" | string | Tipo de assinatura. Valores atualmente definidos: 'binary', 'text', 'standalone', 'certification (generic)', 'certification (persona)', 'certification (casual)', 'certification (positive)', 'subkey binding', 'primary key binding', 'direct', 'key revocation', 'subkey revocation', 'certification revocation', 'timestamp', 'uknown: 0..255'. |

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
