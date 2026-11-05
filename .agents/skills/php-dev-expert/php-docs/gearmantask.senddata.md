# Envia dados para uma tarefa (descontinuado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmantask.senddata.php

---

# GearmanTask::sendData

(PECL gearman <= 0.5.0)

GearmanTask::sendData — Envia dados para uma tarefa (descontinuado)

### Descrição

public function **GearmanTask::sendData**([string](language.types.string.md) `$data`): [int](language.types.integer.md)

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Parâmetros

`data`
:   Dados a enviar ao trabalhador.

### Valor Retornado

O comprimento dos dados enviados, ou **`false`** se o envio falhar

### Veja também

- [GearmanTask::recvData()](gearmantask.recvdata.md) - Lê dados de trabalho ou resultado em um buffer para uma tarefa

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
