# Retorna o nome do diretório atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-pwd.php

---

# ftp\_pwd

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_pwd — Retorna o nome do diretório atual

### Descrição

function **ftp\_pwd**([FTP\Connection](class.ftp-connection.md) `$ftp`): [string](language.types.string.md)|[false](language.types.singleton.md)

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

### Valor Retornado

Retorna o nome do diretório atual ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_pwd()****

```
<?php

// define uma conexão básica
$ftp = ftp_connect($ftp_server);

// login com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// muda o diretório para public_html
ftp_chdir($ftp, 'public_html');

// mostra o diretório atual
echo ftp_pwd($ftp); // /public_html

// fecha a conexão
ftp_close($ftp);
?>
```

### Veja também

- [ftp\_chdir()](function.ftp-chdir.md) - Muda o diretório atual em um servidor FTP
- [ftp\_cdup()](function.ftp-cdup.md) - Muda para o diretório acima

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
