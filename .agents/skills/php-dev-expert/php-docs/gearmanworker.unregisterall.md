# Cancela o registro de todos os nomes de funções com os servidores de trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.unregisterall.php

---

# GearmanWorker::unregisterAll

(PECL gearman >= 0.6.0)

GearmanWorker::unregisterAll — Cancela o registro de todos os nomes de funções com os servidores de trabalho

### Descrição

public function **GearmanWorker::unregisterAll**(): [bool](language.types.boolean.md)

Cancela o registro de todas as funções registradas anteriormente, garantindo que nenhum outro trabalho seja
enviado a este trabalhador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um valor de retorno padrão do Gearman.

### Veja também

- [GearmanWorker::register()](gearmanworker.register.md) - Registra uma função com o servidor de trabalho
- [GearmanWorker::unregister()](gearmanworker.unregister.md) - Cancela o registro de um nome de função com os servidores de trabalho

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
