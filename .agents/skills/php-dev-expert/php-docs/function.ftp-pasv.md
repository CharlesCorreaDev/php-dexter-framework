# Liga ou desliga o modo passivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-pasv.php

---

# ftp\_pasv

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_pasv — Liga ou desliga o modo passivo

### Descrição

function **ftp\_pasv**([FTP\Connection](class.ftp-connection.md) `$ftp`, [bool](language.types.boolean.md) `$enable`): [bool](language.types.boolean.md)

**ftp\_pasv()** liga ou desliga o modo passivo. No
modo passivo, as conexões de dados são iniciadas pelo cliente,
e não pelo servidor.
Pode ser necessário se o cliente estiver atrás de um firewall.

Note que **ftp\_pasv()** somente pode ser chamada depois do
login ter sido feito com sucesso, caso contrário irá falhar.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`enable`
:   Se **`true`**, o modo passivo será ligado, senão será desligado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_pasv()****

```
<?php
$file = 'algumArquivo.txt';
$remote_file = 'leiame.txt';

// define uma conexão básica
$ftp = ftp_connect($ftp_server);

// login com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// liga o modo passivo
ftp_pasv($ftp, true);

// envia um arquivo
if (ftp_put($ftp, $remote_file, $file, FTP_ASCII)) {
    echo "Sucesso no envio de $file\n";
} else {
    echo "Houve um problema ao enviar $file\n";
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
