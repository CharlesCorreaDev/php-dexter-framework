# Aguarda atividade de E/S em todas as conexões em um cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.wait.php

---

# GearmanClient::wait

(PECL gearman >= 0.6.0)

GearmanClient::wait — Aguarda atividade de E/S em todas as conexões em um cliente

### Descrição

public function **GearmanClient::wait**(): [bool](language.types.boolean.md)

Isso aguarda atividade de qualquer um dos servidores conectados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** em caso de sucesso, **`false`** em caso de erro.

### Veja também

- [GearmanWorker::wait()](gearmanworker.wait.md) - Aguarda atividade de um dos servidores de trabalho

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
