# Cria uma instância GearmanClient

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.construct.php

---

# GearmanClient::\_\_construct

(PECL gearman >= 0.5.0)

GearmanClient::\_\_construct — Cria uma instância GearmanClient

### Descrição

public function **GearmanClient::\_\_construct**()

Cria uma instância [GearmanClient](class.gearmanclient.md) representando um cliente que se conecta ao
servidor e envia tarefas para serem concluídas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto [GearmanClient](class.gearmanclient.md).

### Veja também

- [GearmanClient::clone()](gearmanclient.clone.md) - Cria uma cópia de um objeto GearmanClient

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
