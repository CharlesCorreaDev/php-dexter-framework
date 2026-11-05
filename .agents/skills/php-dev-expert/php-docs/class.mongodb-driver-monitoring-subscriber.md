# A interface MongoDB\Driver\Monitoring\Subscriber

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-subscriber.php

---

# A interface MongoDB\Driver\Monitoring\Subscriber

(mongodb >=1.3.0)

## Introdução

Interface base para assinantes de eventos. É usada como um tipo de parâmetro nas funções
[MongoDB\Driver\Monitoring\addSubscriber()](function.mongodb.driver.monitoring.addsubscriber.md) e
[MongoDB\Driver\Monitoring\removeSubscriber()](function.mongodb.driver.monitoring.removesubscriber.md) e não deve
ser implementada diretamente.

## Resumo da Interface

class **MongoDB\Driver\Monitoring\Subscriber**
{

}

Esta interface não possui métodos. Seu único propósito é ser a interface base
para todos os assinantes de evento.

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
