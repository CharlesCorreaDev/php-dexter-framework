# Envia um arquivo para o servidor FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-put.php

---

# ftp\_put

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_put — Envia um arquivo para o servidor FTP

### Descrição

function **ftp\_put**(  
    [FTP\Connection](class.ftp-connection.md) `$ftp`,  
    [string](language.types.string.md) `$remote_filename`,  
    [string](language.types.string.md) `$local_filename`,  
    [int](language.types.integer.md) `$mode` = **`FTP_BINARY`**,  
    [int](language.types.integer.md) `$offset` = 0  
): [bool](language.types.boolean.md)

**ftp\_put()** armazena um arquivo local no servidor FTP.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`remote_filename`
:   O caminho do arquivo remoto.

`local_filename`
:   O caminho do arquivo local.

`mode`
:   O modo de transferência. Deve ser **`FTP_ASCII`** ou
    **`FTP_BINARY`**.

`offset`
:   A posição no arquivo remoto para iniciar o envio.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 7.3.0 | O parâmetro `mode` agora é opcional. Antigamente era obrigatório. |

### Examples

**Exemplo #1 Exemplo de **ftp\_put()****

```
<?php
$file = 'somefile.txt';
$remote_file = 'readme.txt';

// configura conexão básica
$ftp = ftp_connect($ftp_server);

// registra com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// envia um arquivo
if (ftp_put($ftp, $remote_file, $file, FTP_ASCII)) {
 echo "$file enviado com sucesso\n";
} else {
 echo "Houve um problema ao enviar $file\n";
}

// fecha a conexão
ftp_close($ftp);
?>
```

### Veja também

- [ftp\_pasv()](function.ftp-pasv.md) - Liga ou desliga o modo passivo
- [ftp\_fput()](function.ftp-fput.md) - Envia um arquivo aberto para o servidor FTP
- [ftp\_nb\_fput()](function.ftp-nb-fput.md) - Armazena um arquivo de um arquivo aberto no servidor FTP (sem bloqueio)
- [ftp\_nb\_put()](function.ftp-nb-put.md) - Armazena um arquivo no servidor FTP (sem bloqueio)

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
