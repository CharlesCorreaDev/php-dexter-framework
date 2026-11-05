# Adiciona opções do cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.addoptions.php

---

# GearmanClient::addOptions

(PECL gearman >= 0.6.0)

GearmanClient::addOptions — Adiciona opções do cliente

### Descrição

public function **GearmanClient::addOptions**([int](language.types.integer.md) `$option`): [bool](language.types.boolean.md)

Adiciona uma ou mais opções àquelas já definidas.

### Parâmetros

`option`
:   As opções para adicionar.
    Uma das seguintes constantes, ou uma combinação delas
    usando o operador OR bit a bit ("|"):
    **`GEARMAN_CLIENT_GENERATE_UNIQUE`**,
    **`GEARMAN_CLIENT_NON_BLOCKING`**,
    **`GEARMAN_CLIENT_UNBUFFERED_RESULT`** ou
    **`GEARMAN_CLIENT_FREE_TASKS`**.

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
