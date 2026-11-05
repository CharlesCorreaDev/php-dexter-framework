# Obtém o valor de tempo limite da atividade de E/S do soquete atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.timeout.php

---

# GearmanClient::timeout

(PECL gearman >= 0.6.0)

GearmanClient::timeout — Obtém o valor de tempo limite da atividade de E/S do soquete atual

### Descrição

public function **GearmanClient::timeout**(): [int](language.types.integer.md)

Retorna o tempo limite em milissegundos para aguardar atividade de E/S.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Tempo limite em milissegundos para esperar por atividade de E/S. Um valor negativo significa um tempo limite infinito.

### Veja também

- [GearmanClient::setTimeout()](gearmanclient.settimeout.md) - Define o tempo limite da atividade de E/S do soquete

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
