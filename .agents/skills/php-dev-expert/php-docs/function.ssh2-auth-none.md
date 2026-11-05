# Autentica como "nenhum"

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-auth-none.php

---

# ssh2\_auth\_none

(PECL ssh2 >= 0.9.0)

ssh2\_auth\_none — Autentica como "nenhum"

### Descrição

function **ssh2\_auth\_none**([resource](language.types.resource.md) `$session`, [string](language.types.string.md) `$username`): [mixed](language.types.mixed.md)

Tenta o método de autenticação "nenhum", que normalmente falhará (e deverá falhar).
Como parte da falha, esta função retornará um array de métodos de autenticação
aceitos.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

`username`
:   Nome de usuário remoto.

### Valor Retornado

Retorna **`true`** se o servidor aceitar "nenhum" como método de autenticação
ou um array de métodos de autenticação aceitos em caso de falha.

### Examples

**Exemplo #1 Recuperando uma lista de métodos de autenticação**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);

$auth_methods = ssh2_auth_none($connection, 'user');

if (in_array('password', $auth_methods)) {
  echo "O servidor suporta autenticação baseada em senha\n";
}
?>
```

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
