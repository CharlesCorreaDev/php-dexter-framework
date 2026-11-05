# Remove uma inscrição existente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.unsubscribe.php

---

# Stomp::unsubscribe

# stomp\_unsubscribe

(PECL stomp >= 0.1.0)

Stomp::unsubscribe -- stomp\_unsubscribe — Remove uma inscrição existente

### Descrição

Estilo orientado a objetos (method):

public function **Stomp::unsubscribe**([string](language.types.string.md) `$destination`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

Estilo procedural:

function **stomp\_unsubscribe**([resource](language.types.resource.md) `$link`, [string](language.types.string.md) `$destination`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

Remove uma inscrição existente.

### Parâmetros

`link`
:   Somente no estilo procedural: O identificador do link stomp retornado por [stomp\_connect()](stomp.construct.md).

`destination`
:   Inscrição para remover.

`headers`
:   Um array associativo contendo os cabeçalhos adicionais (exemplo: receipt).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

Veja [stomp\_ack()](stomp.ack.md).

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
