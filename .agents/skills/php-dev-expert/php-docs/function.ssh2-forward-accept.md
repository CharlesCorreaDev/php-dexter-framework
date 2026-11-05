# Aceita uma conexão criada por um ouvinte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-forward-accept.php

---

# ssh2\_forward\_accept

(PECL ssh2 >= 0.9.0)

ssh2\_forward\_accept — Aceita uma conexão criada por um ouvinte

### Descrição

function **ssh2\_forward\_accept**([resource](language.types.resource.md) `$listener`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Aceita uma conexão criada por um ouvinte.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`desc`
:   Um recurso de ouvinte SSH2, obtido de uma chamada para [ssh2\_forward\_listen()](function.ssh2-forward-listen.md).

### Valor Retornado

Retorna um recurso de fluxo, ou **`false`** em caso de falha.

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
