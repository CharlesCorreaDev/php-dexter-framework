# Autentica via SSH usando uma senha simples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-auth-password.php

---

# ssh2\_auth\_password

(PECL ssh2 >= 0.9.0)

ssh2\_auth\_password — Autentica via SSH usando uma senha simples

### Descrição

function **ssh2\_auth\_password**([resource](language.types.resource.md) `$session`, [string](language.types.string.md) `$username`, [string](language.types.string.md) `$password`): [bool](language.types.boolean.md)

Autentica via SSH usando uma senha simples. Desde a versão 0.12, esta função
também suporta o método keyboard\_interactive.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

`username`
:   Nome de usuário remoto.

`password`
:   Senha para `username`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Autenticação com senha**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);

if (ssh2_auth_password($connection, 'username', 'secret')) {
  echo "Autenticação bem-sucedida!\n";
} else {
  die('Falha na autenticação...');
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
