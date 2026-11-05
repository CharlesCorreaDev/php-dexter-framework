# Envia dados para uma tarefa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmantask.sendworkload.php

---

# GearmanTask::sendWorkload

(PECL gearman >= 0.6.0)

GearmanTask::sendWorkload — Envia dados para uma tarefa

### Descrição

public function **GearmanTask::sendWorkload**([string](language.types.string.md) `$data`): [int](language.types.integer.md)|[false](language.types.singleton.md)

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Parâmetros

`data`
:   Dados a enviar ao trabalhador.

### Valor Retornado

O comprimento dos dados enviados, ou **`false`** se o envio falhar.

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
