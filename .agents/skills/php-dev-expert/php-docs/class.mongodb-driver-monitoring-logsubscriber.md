# A interface MongoDB\Driver\Monitoring\LogSubscriber

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-logsubscriber.php

---

# A interface MongoDB\Driver\Monitoring\LogSubscriber

(mongodb >=1.17.0)

## Introdução

As classes que implementam esta interface podem ser registradas como assinantes e
receber mensagens de registro da extensão. Isso é semelhante ao registro de depuração
baseado em fluxo (ou seja, [mongodb.debug](mongodb.configuration.md#ini.mongodb.debug)),
exceto que as mensagens de registro em nível de rastreio *não* são recebidas.

Assim como acontece com o registro baseado em fluxo, só é possível inscrever um criador de regsitros
globalmente usando [MongoDB\Driver\Monitoring\addSubscriber()](function.mongodb.driver.monitoring.addsubscriber.md).
A extensão não é capaz de distinguir mensagens de regsitros para objetos
[MongoDB\Driver\Manager](class.mongodb-driver-manager.md) individuais.

## Resumo da Interface

class **MongoDB\Driver\Monitoring\LogSubscriber**
implements
[MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md) {

/\* Constantes \*/

const
[int](language.types.integer.md)
[LEVEL\_ERROR](class.mongodb-driver-monitoring-logsubscriber.md#mongodb-driver-monitoring-logsubscriber.constants.level-error) = 0;

const
[int](language.types.integer.md)
[LEVEL\_CRITICAL](class.mongodb-driver-monitoring-logsubscriber.md#mongodb-driver-monitoring-logsubscriber.constants.level-critical) = 1;

const
[int](language.types.integer.md)
[LEVEL\_WARNING](class.mongodb-driver-monitoring-logsubscriber.md#mongodb-driver-monitoring-logsubscriber.constants.level-warning) = 2;

const
[int](language.types.integer.md)
[LEVEL\_MESSAGE](class.mongodb-driver-monitoring-logsubscriber.md#mongodb-driver-monitoring-logsubscriber.constants.level-message) = 3;

const
[int](language.types.integer.md)
[LEVEL\_INFO](class.mongodb-driver-monitoring-logsubscriber.md#mongodb-driver-monitoring-logsubscriber.constants.level-info) = 4;

const
[int](language.types.integer.md)
[LEVEL\_DEBUG](class.mongodb-driver-monitoring-logsubscriber.md#mongodb-driver-monitoring-logsubscriber.constants.level-debug) = 5;

/\* Métodos \*/

abstract public function [log](mongodb-driver-monitoring-logsubscriber.log.md)([int](language.types.integer.md) `$level`, [string](language.types.string.md) `$domain`, [string](language.types.string.md) `$message`): [void](language.types.void.md)

}

## Constantes predefinidas

**`MongoDB\Driver\Monitoring\LogSubscriber::LEVEL_ERROR`**
:   Nível de registro de erros. Uma condição de erro que a extensão não consegue relatar
    por meio de sua API. Este é o nível de registro mais severo na extensão.

**`MongoDB\Driver\Monitoring\LogSubscriber::LEVEL_CRITICAL`**
:   Nível de registro crítico. Uma condição de erro com gravidade um pouco menor. Esta
    constante existe para consistência com libmongoc; no entanto, é improvável que
    a extensão o utilize na prática.

**`MongoDB\Driver\Monitoring\LogSubscriber::LEVEL_WARNING`**
:   Nível de registro de alerta. Indica uma situação em que pode ocorrer comportamento
    indesejável da aplicação.

**`MongoDB\Driver\Monitoring\LogSubscriber::LEVEL_MESSAGE`**
:   Nível de registro de mensagens ou avisos. Indica um evento incomum, mas não
    problemático.

**`MongoDB\Driver\Monitoring\LogSubscriber::LEVEL_INFO`**
:   Nível de registro de informações. Informações de alto nível sobre o comportamento normal do driver.

**`MongoDB\Driver\Monitoring\LogSubscriber::LEVEL_DEBUG`**
:   Nível de registro de depuração. Informações detalhadas que podem ser úteis ao depurar
    uma aplicação.

## Índice

- [MongoDB\Driver\Monitoring\LogSubscriber::log](mongodb-driver-monitoring-logsubscriber.log.md) — Método de notificação para uma mensagem de registro

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
