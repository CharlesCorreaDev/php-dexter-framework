# Método de notificação para uma mensagem de registro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-logsubscriber.log.php

---

# MongoDB\Driver\Monitoring\LogSubscriber::log

(mongodb >=1.17.0)

MongoDB\Driver\Monitoring\LogSubscriber::log — Método de notificação para uma mensagem de registro

### Descrição

abstract public function **MongoDB\Driver\Monitoring\LogSubscriber::log**([int](language.types.integer.md) `$level`, [string](language.types.string.md) `$domain`, [string](language.types.string.md) `$message`): [void](language.types.void.md)

Se o assinante estiver registrado, esse método será chamado para cada mensagem
registrada.

### Parâmetros

`level`
:   O nível de severidade. Este será uma das
    [constantes de interface](class.mongodb-driver-monitoring-logsubscriber.md#mongodb-driver-monitoring-logsubscriber.constants).

`domain`
:   O nome do componente do driver que emitiu a mensagem de registro.

`message`
:   A mensagem de registro.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Monitoring\addSubscriber()](function.mongodb.driver.monitoring.addsubscriber.md) - Registra um assinante de evento de monitoramento globalmente

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
