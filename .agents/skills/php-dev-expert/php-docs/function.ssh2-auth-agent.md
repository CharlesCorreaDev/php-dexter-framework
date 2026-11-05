# Autentica via SSH usando o agente ssh

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-auth-agent.php

---

# ssh2\_auth\_agent

(PECL ssh2 >= 0.12)

ssh2\_auth\_agent — Autentica via SSH usando o agente ssh

### Descrição

function **ssh2\_auth\_agent**([resource](language.types.resource.md) `$session`, [string](language.types.string.md) `$username`): [bool](language.types.boolean.md)

Autentica via SSH usando o agente ssh.

> **Nota**:
>
> A função **ssh2\_auth\_agent()** só estará disponível
> quando a extensão ssh2 for compilada com libssh >= 1.2.3.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

`username`
:   Nome de usuário remoto.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Autenticação com um agente ssh**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);

if (ssh2_auth_agent($connection, 'username')) {
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
