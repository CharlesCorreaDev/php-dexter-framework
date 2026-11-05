# Limpa todas as chamadas registradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yar-concurrent-client.reset.php

---

# Yar\_Concurrent\_Client::reset

(PECL yar >= 1.2.4)

Yar\_Concurrent\_Client::reset — Limpa todas as chamadas registradas

### Descrição

public static function **Yar\_Concurrent\_Client::reset**(): [bool](language.types.boolean.md)

Limpa todas as chamadas registradas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yar\_Concurrent\_Client::reset()****

O exemplo acima produzirá
algo semelhante a:

### Veja também

- [Yar\_Concurrent\_Client::call()](yar-concurrent-client.call.md) - Registra uma chamada simultânea
- [Yar\_Concurrent\_Client::loop()](yar-concurrent-client.loop.md) - Envia todas as chamadas
- [Yar\_Server::\_\_construct()](yar-server.construct.md) - Registra um servidor
- [Yar\_Server::handle()](yar-server.handle.md) - Inicia o servidor RPC

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
