# Lê dados de trabalho ou resultado em um buffer para uma tarefa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmantask.recvdata.php

---

# GearmanTask::recvData

(PECL gearman >= 0.5.0)

GearmanTask::recvData — Lê dados de trabalho ou resultado em um buffer para uma tarefa

### Descrição

public function **GearmanTask::recvData**([int](language.types.integer.md) `$data_len`): [false](language.types.singleton.md)|[array](language.types.array.md)

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Parâmetros

`data_len`
:   Comprimento dos dados a serem lidos.

### Valor Retornado

Um array cujo primeiro elemento é o comprimento dos dados lidos e o segundo é o buffer de dados.
Retorna **`false`** se a leitura falhar.

### Veja também

- [GearmanTask::sendData()](gearmantask.senddata.md) - Envia dados para uma tarefa (descontinuado)

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
