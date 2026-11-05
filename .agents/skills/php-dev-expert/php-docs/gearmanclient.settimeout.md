# Define o tempo limite da atividade de E/S do soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.settimeout.php

---

# GearmanClient::setTimeout

(PECL gearman >= 0.6.0)

GearmanClient::setTimeout — Define o tempo limite da atividade de E/S do soquete

### Descrição

public function **GearmanClient::setTimeout**([int](language.types.integer.md) `$timeout`): [bool](language.types.boolean.md)

Define o tempo limite da atividade de E/S do soquete.

### Parâmetros

`timeout`
:   Um intervalo de tempo em milissegundos

### Valor Retornado

Sempre retorna **`true`**.

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
