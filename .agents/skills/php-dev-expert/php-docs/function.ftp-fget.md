# Recebe um arquivo do servidor FTP e salva em um arquivo aberto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-fget.php

---

# ftp\_fget

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_fget — Recebe um arquivo do servidor FTP e salva em um arquivo aberto

### Descrição

function **ftp\_fget**(  
    [FTP\Connection](class.ftp-connection.md) `$ftp`,  
    [resource](language.types.resource.md) `$stream`,  
    [string](language.types.string.md) `$remote_filename`,  
    [int](language.types.integer.md) `$mode` = **`FTP_BINARY`**,  
    [int](language.types.integer.md) `$offset` = 0  
): [bool](language.types.boolean.md)

**ftp\_fget()** recebe o arquivo do servidor FTP informado em `remote_filename`
e grava-o no ponteiro de arquivo fornecido.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`stream`
:   Um ponteiro de arquivo aberto no qual os dados serão armazenados.

`remote_filename`
:   O caminho do arquivo remoto.

`mode`
:   O modo de transferência. Deve ser **`FTP_ASCII`** ou
    **`FTP_BINARY`**.

`offset`
:   A posição no arquivo remoto para início do recebimento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 7.3.0 | O parâmetro `mode` agora é opcional. Antigamente era obrigatório. |

### Examples

**Exemplo #1 Exemplo de **ftp\_fget()****

```
<?php

// caminho para o arquivo remoto
$remote_file = 'somefile.txt';
$local_file = 'localfile.txt';

// abre um arquivo para gravação
$handle = fopen($local_file, 'w');

// configura conexão básica
$ftp = ftp_connect($ftp_server);

// registra com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// tenta receber $remote_file e gravá-lo em $handle
if (ftp_fget($ftp, $handle, $remote_file, FTP_ASCII, 0)) {
 echo "Gravado com sucesso em $local_file\n";
} else {
 echo "Houve um problema ao receber o arquivo $remote_file e gravar em $local_file\n";
}

// fecha a conexão e o identificador do arquivo
ftp_close($ftp);
fclose($handle);
?>
```

### Veja também

- [ftp\_get()](function.ftp-get.md) - Recebe um arquivo do servidor FTP
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
