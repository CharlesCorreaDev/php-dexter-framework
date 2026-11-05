# Recebe um arquivo do servidor FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-get.php

---

# ftp\_get

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_get — Recebe um arquivo do servidor FTP

### Descrição

function **ftp\_get**(  
    [FTP\Connection](class.ftp-connection.md) `$ftp`,  
    [string](language.types.string.md) `$local_filename`,  
    [string](language.types.string.md) `$remote_filename`,  
    [int](language.types.integer.md) `$mode` = **`FTP_BINARY`**,  
    [int](language.types.integer.md) `$offset` = 0  
): [bool](language.types.boolean.md)

**ftp\_get()** recupera um arquivo remoto do servidor FTP
e grava-o em um arquivo local.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`local_filename`
:   O caminho do arquivo local (será substituído se o arquivo já existir).

`remote_filename`
:   O caminho do arquivo remoto.

`mode`
:   O modo de transferência. Deve ser **`FTP_ASCII`** ou
    **`FTP_BINARY`**.

`offset`
:   A posição no arquivo remoto para iniciar o recebimento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 7.3.0 | O parâmetro `mode` agora é opcional. Antigamente era obrigatório. |

### Examples

**Exemplo #1 Exemplo de **ftp\_get()****

```
<?php

// define algumas variáveis
$local_file = 'local.zip';
$server_file = 'server.zip';

// configura conexão básica
$ftp = ftp_connect($ftp_server);

// registra com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// tenta receber $server_file e gravar em $local_file
if (ftp_get($ftp, $local_file, $server_file, FTP_BINARY)) {
    echo "$local_file gravado com sucesso\n";
} else {
    echo "Houve um problema\n";
}

// fecha a conexão
ftp_close($ftp);

?>
```

### Veja também

- [ftp\_pasv()](function.ftp-pasv.md) - Liga ou desliga o modo passivo
- [ftp\_fget()](function.ftp-fget.md) - Recebe um arquivo do servidor FTP e salva em um arquivo aberto
- [ftp\_nb\_get()](function.ftp-nb-get.md) - Recupera um arquivo do servidor FTP e grava-o em um arquivo local (sem bloqueio)
- [ftp\_nb\_fget()](function.ftp-nb-fget.md) - Recupera um arquivo do servidor FTP e grava-o em um arquivo aberto (sem bloqueio)

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
