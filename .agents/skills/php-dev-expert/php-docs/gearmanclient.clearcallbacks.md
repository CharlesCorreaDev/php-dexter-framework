# Limpa todas as funções de retorno de tarefa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.clearcallbacks.php

---

# GearmanClient::clearCallbacks

(PECL gearman >= 0.5.0)

GearmanClient::clearCallbacks — Limpa todas as funções de retorno de tarefa

### Descrição

public function **GearmanClient::clearCallbacks**(): [bool](language.types.boolean.md)

Limpa todas as funções de retorno de tarefa previamente definidas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Sempre retorna **`true`**.

### Veja também

- [GearmanClient::setDataCallback()](gearmanclient.setdatacallback.md) - Define a função de retorno quando há um pacote de dados para uma tarefa
- [GearmanClient::setCompleteCallback()](gearmanclient.setcompletecallback.md) - Define uma função a ser chamada na conclusão da tarefa
- [GearmanClient::setCreatedCallback()](gearmanclient.setcreatedcallback.md) - Define uma função de retorno para quando uma tarefa é enfileirada
- [GearmanClient::setExceptionCallback()](gearmanclient.setexceptioncallback.md) - Define uma função de retorno para exceções de trabalhador
- [GearmanClient::setFailCallback()](gearmanclient.setfailcallback.md) - Define a função de retorno para falha de tarefa
- [GearmanClient::setStatusCallback()](gearmanclient.setstatuscallback.md) - Define uma função de retorno para coletar o status da tarefa
- [GearmanClient::setWarningCallback()](gearmanclient.setwarningcallback.md) - Define uma função de retorno para alertas de trabalhadores
- [GearmanClient::setWorkloadCallback()](gearmanclient.setworkloadcallback.md) - Define uma função de retorno para aceitar atualizações de dados incrementais

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
