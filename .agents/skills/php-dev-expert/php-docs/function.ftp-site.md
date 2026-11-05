# Envia um comando SITE para o servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-site.php

---

# ftp\_site

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_site — Envia um comando SITE para o servidor

### Descrição

function **ftp\_site**([FTP\Connection](class.ftp-connection.md) `$ftp`, [string](language.types.string.md) `$command`): [bool](language.types.boolean.md)

**ftp\_site()** envia o comando
`SITE` fornecido para o servidor FTP.

Os comandos `SITE` não são padronizados e variam de servidor
para servidor. Eles são úteis para lidar com questões como permissões de arquivo
e participação em grupos.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`command`
:   O comando SITE. Observe que este parâmetro não tem escape, portanto pode
    haver alguns problemas com nomes de arquivos contendo espaços e outros caracteres.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Enviando um comando SITE para um servidor FTP**

```
<?php
// Conexão ao servidor FTP
$ftp = ftp_connect('ftp.example.com');
if (!$ftp) die('Unable to connect to ftp.example.com');

// Registrando como "user" com senha "pass"
if (!ftp_login($ftp, 'user', 'pass')) die('Erro ao registrar em ftp.example.com');

// Emite o comando "SITE CHMOD 0600 /home/user/privatefile" para o servidor FTP
if (ftp_site($ftp, 'CHMOD 0600 /home/user/privatefile')) {
   echo "Comando executado com sucesso.\n";
} else {
   die('Comando falhou.');
}
?>
```

### Veja também

- [ftp\_raw()](function.ftp-raw.md) - Envia um comando arbritário a um servidor FTP

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
