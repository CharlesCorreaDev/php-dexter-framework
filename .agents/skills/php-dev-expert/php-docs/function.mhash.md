# Computa a hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mhash.php

---

# mhash

(PHP 4, PHP 5, PHP 7, PHP 8)

mhash — Computa a hash

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.1.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **mhash**([int](language.types.integer.md) `$algo`, [string](language.types.string.md) `$data`, [?](language.types.null.md)[string](language.types.string.md) `$key` = [null](reserved.constants.md#constant.null)): [string](language.types.string.md)|[false](language.types.singleton.md)

**mhash()** aplica a função hash especificada por
`algo` ao parâmetro `data`.

### Parâmetros

`algo`
:   O ID da hash. Uma das constantes **`MHASH_hashname`**.

`data`
:   A entrada do usuário, como uma string.

`key`
:   Se especificado, a função irá retornar o HMAC resultante.
    HMAC é o hashing com chave para autenticações de mensagens, ou simplesmente um resumo
    de mensagem que depende da chave especificada. Nem todos os algoritmos
    suportados em mhash podem ser usados em modo HMAC.

### Valor Retornado

Retorna o hash resultante (também chamado resumo ou digest) ou HMAC como uma string, ou
**`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Esta função foi descontinuada. Use as [funções `hash_*()`](ref.hash.md) em seu lugar. |
| 8.0.0 | `key` agora pode ser nulo. |

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
