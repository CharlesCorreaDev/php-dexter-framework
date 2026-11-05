# Cliente Stomp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.stomp.php

---

# Cliente Stomp

# Introdução

Esta extensão permite que aplicativos PHP se comuniquem com qualquer Message Broker compatível com Stomp por meio de interfaces procedurais e orientadas a objetos fáceis. [» Site oficial do Stomp](https://stomp.github.io/)

- [Instalação/Configuração](stomp.setup.md)
  - [Dependências](stomp.requirements.md)
  - [Instalação](stomp.installation.md)
  - [Configurações de Execução](stomp.configuration.md)
  - [Tipos de Recurso](stomp.resources.md)
- [Examples](stomp.examples.md)
- [Funções de Stomp](ref.stomp.md)
  - [stomp\_connect\_error](function.stomp-connect-error.md) — Retorna uma descrição de string do último erro de conexão
  - [stomp\_version](function.stomp-version.md) — Obtém a versão atual da extensão stomp
- [Stomp](class.stomp.md) — A classe Stomp
  - [Stomp::abort](stomp.abort.md) — Reverte uma transação em andamento
  - [Stomp::ack](stomp.ack.md) — Reconhece o consumo de uma mensagem
  - [Stomp::begin](stomp.begin.md) — Inicia uma transação
  - [Stomp::commit](stomp.commit.md) — Confirma uma transação em andamento
  - [Stomp::\_\_construct](stomp.construct.md) — Abre uma conexão
  - [Stomp::\_\_destruct](stomp.destruct.md) — Fecha a conexão stomp
  - [Stomp::error](stomp.error.md) — Obtém o último erro stomp
  - [Stomp::getReadTimeout](stomp.getreadtimeout.md) — Obtém tempo limite de leitura
  - [Stomp::getSessionId](stomp.getsessionid.md) — Obtém o ID da sessão stomp atual
  - [Stomp::hasFrame](stomp.hasframe.md) — Indica se há ou não um quadro pronto para leitura
  - [Stomp::readFrame](stomp.readframe.md) — Lê o próximo quadro
  - [Stomp::send](stomp.send.md) — Envia uma mensagem
  - [Stomp::setReadTimeout](stomp.setreadtimeout.md) — Define o tempo limite de leitura
  - [Stomp::subscribe](stomp.subscribe.md) — Registre-se para ouvir um determinado destino
  - [Stomp::unsubscribe](stomp.unsubscribe.md) — Remove uma inscrição existente
- [StompFrame](class.stompframe.md) — A classe StompFrame
  - [StompFrame::\_\_construct](stompframe.construct.md) — Construtor
- [StompException](class.stompexception.md) — A classe StompException
  - [StompException::getDetails](stomp.getdetails.md) — Obtém detalhes da exceção

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
