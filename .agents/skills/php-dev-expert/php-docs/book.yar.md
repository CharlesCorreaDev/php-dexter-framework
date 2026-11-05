# Yet Another RPC Framework

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.yar.php

---

# Yet Another RPC Framework

# Introdução

Yar é um framework RPC que visa fornecer uma maneira simples e fácil de realizar
comunicação entre aplicações PHP. Ele tem a capacidade de chamar
simultaneamente vários serviços remotos.

- [Instalação/Configuração](yar.setup.md)
  - [Dependências](yar.requirements.md)
  - [Instalação](yar.installation.md)
  - [Configurações de Execução](yar.configuration.md)
  - [Tipos de Recurso](yar.resources.md)
- [Constantes predefinidas](yar.constants.md)
- [Examples](yar.examples.md)
- [Yar\_Server](class.yar-server.md) — A classe Yar\_Server
  - [Yar\_Server::\_\_construct](yar-server.construct.md) — Registra um servidor
  - [Yar\_Server::handle](yar-server.handle.md) — Inicia o servidor RPC
- [Yar\_Client](class.yar-client.md) — A classe Yar\_Client
  - [Yar\_Client::\_\_call](yar-client.call.md) — Chama o serviço
  - [Yar\_Client::\_\_construct](yar-client.construct.md) — Cria um cliente
  - [Yar\_Client::getOpt](yar-client.getopt.md) — Read a client option
  - [Yar\_Client::setOpt](yar-client.setopt.md) — Define contextos de chamada
- [Yar\_Concurrent\_Client](class.yar-concurrent-client.md) — A classe Yar\_Concurrent\_Client
  - [Yar\_Concurrent\_Client::call](yar-concurrent-client.call.md) — Registra uma chamada simultânea
  - [Yar\_Concurrent\_Client::loop](yar-concurrent-client.loop.md) — Envia todas as chamadas
  - [Yar\_Concurrent\_Client::reset](yar-concurrent-client.reset.md) — Limpa todas as chamadas registradas
- [Yar\_Server\_Exception](class.yar-server-exception.md) — A classe Yar\_Server\_Exception
  - [Yar\_Server\_Exception::getType](yar-server-exception.gettype.md) — Recupera o tipo da exceção
- [Yar\_Client\_Exception](class.yar-client-exception.md) — A classe Yar\_Client\_Exception
  - [Yar\_Client\_Exception::getType](yar-client-exception.gettype.md) — Recupera o tipo da exceção

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
