# Define opções do cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.setoptions.php

---

# GearmanClient::setOptions

(PECL gearman >= 0.5.0)

GearmanClient::setOptions — Define opções do cliente

### Descrição

public function **GearmanClient::setOptions**([int](language.types.integer.md) `$option`): [bool](language.types.boolean.md)

Define uma ou mais opções do cliente.

### Parâmetros

`option`
:   As opções a serem definidas

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
