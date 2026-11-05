# Executa operação de assinatura, retorna assinatura(s) separada(s)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-op-sign-detached.php

---

# rnp\_op\_sign\_detached

(PECL rnp >= 0.1.1)

rnp\_op\_sign\_detached — Executa operação de assinatura, retorna assinatura(s) separada(s)

### Descrição

function **rnp\_op\_sign\_detached**(  
    [RnpFFI](class.rnpffi.md) `$ffi`,  
    [string](language.types.string.md) `$data`,  
    [array](language.types.array.md) `$keys_fp`,  
    [array](language.types.array.md) `$options` = ?  
): [string](language.types.string.md)|[false](language.types.singleton.md)

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`data`
:   Dados a serem assinados.

`keys_fp`
:   Array com impressões digitais de chaves. Pelo menos uma chave deve ser fornecida.
    As chaves devem estar presentes no parâmetro `ffi`.

`options`
:   Um array associativo com opções.

    | Chave | Tipo de dado | Descrição |
    | --- | --- | --- |
    | `"armor"` | booleano | Habilita a saída blindada ASCII. Desativado por padrão. |
    | `"hash"` | string | Define o algoritmo hash usado durante o cálculo da assinatura. |
    | `"creation_time"` | inteiro | Define o horário de criação da assinatura em segundos desde 1º de janeiro de 1970 UTC. Por padrão, o horário atual é usado. |
    | `"expiration_time"` | inteiro | Define o tempo de expiração da assinatura em segundos desde o momento da criação. O valor 0 é usado para marcar a assinatura como não expirante (valor padrão). |

### Valor Retornado

Dados de assinatura(s) desanexados em caso de sucesso ou **`false`** em caso de falha.

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
