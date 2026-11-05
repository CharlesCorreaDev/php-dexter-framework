# Inicia uma transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.begin.php

---

# Stomp::begin

# stomp\_begin

(PECL stomp >= 0.1.0)

Stomp::begin -- stomp\_begin — Inicia uma transação

### Descrição

Estilo orientado a objetos (method):

public function **Stomp::begin**([string](language.types.string.md) `$transaction_id`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

Estilo procedural:

function **stomp\_begin**([resource](language.types.resource.md) `$link`, [string](language.types.string.md) `$transaction_id`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

Inicia uma transação.

### Parâmetros

`link`
:   Somente no estilo procedural: O identificador do link stomp retornado por [stomp\_connect()](stomp.construct.md).

`transaction_id`
:   O ID da transação.

`headers`
:   Um array associativo contendo os cabeçalhos adicionais (exemplo: receipt).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

Veja [stomp\_commit()](stomp.commit.md) ou [stomp\_abort()](stomp.abort.md).

### Notas

**Dica**

O Stomp é naturalmente assíncrono. Comunicação síncrona pode ser implementada adicionando um cabeçalho receipt. Isso fará com que os métodos não retornem nada até que o servidor confirme o recebimento da mensagem ou até que o tempo limite de leitura seja atingido.

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
