# Registre-se para ouvir um determinado destino

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.subscribe.php

---

# Stomp::subscribe

# stomp\_subscribe

(PECL stomp >= 0.1.0)

Stomp::subscribe -- stomp\_subscribe — Registre-se para ouvir um determinado destino

### Descrição

Estilo orientado a objetos (method):

public function **Stomp::subscribe**([string](language.types.string.md) `$destination`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

Estilo procedural:

function **stomp\_subscribe**([resource](language.types.resource.md) `$link`, [string](language.types.string.md) `$destination`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

Registre-se para ouvir um determinado destino.

### Parâmetros

`link`
:   Somente no estilo procedural: O identificador do link stomp retornado por [stomp\_connect()](stomp.construct.md).

`destination`
:   Destino para se registrar.

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
