# A interface MongoDB\Driver\Monitoring\CommandSubscriber

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-commandsubscriber.php

---

# A interface MongoDB\Driver\Monitoring\CommandSubscriber

(mongodb >=1.3.0)

## Introdução

Classes podem implementar este interface para registrar um assinante de evento que será
notificado em cada evento de comando iniciado, bem-sucedido ou falhado.
[Monitoramento de Desempenho de Aplicação (APM)](mongodb.tutorial.apm.md) para informações adicionais.

## Resumo da Interface

class **MongoDB\Driver\Monitoring\CommandSubscriber**
implements
[MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md) {

/\* Métodos \*/

abstract public function [commandFailed](mongodb-driver-monitoring-commandsubscriber.commandfailed.md)([MongoDB\Driver\Monitoring\CommandFailedEvent](class.mongodb-driver-monitoring-commandfailedevent.md) `$event`): [void](language.types.void.md)

abstract public function [commandStarted](mongodb-driver-monitoring-commandsubscriber.commandstarted.md)([MongoDB\Driver\Monitoring\CommandStartedEvent](class.mongodb-driver-monitoring-commandstartedevent.md) `$event`): [void](language.types.void.md)

abstract public function [commandSucceeded](mongodb-driver-monitoring-commandsubscriber.commandsucceeded.md)([MongoDB\Driver\Monitoring\CommandSucceededEvent](class.mongodb-driver-monitoring-commandsucceededevent.md) `$event`): [void](language.types.void.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Os tipos de retorno anteriormente declarados como temporários agora devem ser cumpridos. |
| mongodb 1.15.0 no PECL | Os tipos de retorno para métodos são declarados como provisórios no PHP 8.0 e mais recentes, disparando avisos de descontinuação no código que implementa essa interface sem declarar os tipos de retorno apropriados. O atributo `#[ReturnTypeWillChange]` pode ser adicionado para silenciar o aviso de descontinuação. |

## Índice

- [MongoDB\Driver\Monitoring\CommandSubscriber::commandFailed](mongodb-driver-monitoring-commandsubscriber.commandfailed.md) — Método de notificação para um comando falhado
- [MongoDB\Driver\Monitoring\CommandSubscriber::commandStarted](mongodb-driver-monitoring-commandsubscriber.commandstarted.md) — Método de notificação para um comando iniciado
- [MongoDB\Driver\Monitoring\CommandSubscriber::commandSucceeded](mongodb-driver-monitoring-commandsubscriber.commandsucceeded.md) — Método de notificação para um comando bem-sucedido

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
