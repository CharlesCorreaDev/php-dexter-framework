# Realiza o login em uma conexão FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-login.php

---

# ftp\_login

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_login — Realiza o login em uma conexão FTP

### Descrição

function **ftp\_login**([FTP\Connection](class.ftp-connection.md) `$ftp`, [string](language.types.string.md) `$username`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`): [bool](language.types.boolean.md)

Realiza o login na conexão FTP informada.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`username`
:   O nome de usuário (`USER`).

`password`
:   A senha (`PASS`).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Se o login falhar, o PHP também emitirá um alerta.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_login()****

```
<?php

$ftp_server = "ftp.example.com";
$ftp_user = "foo";
$ftp_pass = "bar";

// define uma conexão ou sai
$ftp = ftp_connect($ftp_server) or die("Não foi possível conectar a $ftp_server");

// tenta fazer login
if (@ftp_login($ftp, $ftp_user, $ftp_pass)) {
    echo "Conectado como $ftp_user@$ftp_server\n";
} else {
    echo "Não foi possível conectar como $ftp_user\n";
}

// fecha a conexão
ftp_close($ftp);
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
