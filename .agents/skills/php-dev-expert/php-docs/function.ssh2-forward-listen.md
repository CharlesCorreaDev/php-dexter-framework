# Vincula uma porta no servidor remoto e escuta as conexões

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-forward-listen.php

---

# ssh2\_forward\_listen

(PECL ssh2 >= 0.9.0)

ssh2\_forward\_listen — Vincula uma porta no servidor remoto e escuta as conexões

### Descrição

function **ssh2\_forward\_listen**(  
    [resource](language.types.resource.md) `$session`,  
    [int](language.types.integer.md) `$port`,  
    [string](language.types.string.md) `$host` = ?,  
    [int](language.types.integer.md) `$max_connections` = 16  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Vincula uma porta no servidor remoto e escuta as conexões.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`session`
:   Um recurso de sessão SSH, obtido de uma chamada para [ssh2\_connect()](function.ssh2-connect.md).

`port`
:   A porta do servidor remoto.

`host`

`max_connections`

### Valor Retornado

Retorna um ouvinte SSH2, ou **`false`** em caso de falha.

### Veja também

- [ssh2\_forward\_accept()](function.ssh2-forward-accept.md) - Aceita uma conexão criada por um ouvinte

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
