# Muda para o diretório acima

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-cdup.php

---

# ftp\_cdup

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_cdup — Muda para o diretório acima

### Descrição

function **ftp\_cdup**([FTP\Connection](class.ftp-connection.md) `$ftp`): [bool](language.types.boolean.md)

Muda para o diretório acima.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo **ftp\_cdup()****

```
<?php
// define uma conexão básica
$ftp = ftp_connect($ftp_server);

// login com nome de usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// muda o diretório atual para html
ftp_chdir($ftp, 'html');

echo ftp_pwd($ftp); // /html

// volta ao diretório acima
if (ftp_cdup($ftp)) {
  echo "cdup bem sucedido\n";
} else {
  echo "cdup não foi bem sucedido\n";
}

echo ftp_pwd($ftp); // /

ftp_close($ftp);
?>
```

### Veja também

- [ftp\_chdir()](function.ftp-chdir.md) - Muda o diretório atual em um servidor FTP
- [ftp\_pwd()](function.ftp-pwd.md) - Retorna o nome do diretório atual

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
