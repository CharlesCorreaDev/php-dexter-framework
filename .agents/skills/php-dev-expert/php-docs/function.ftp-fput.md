# Envia um arquivo aberto para o servidor FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-fput.php

---

# ftp\_fput

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_fput — Envia um arquivo aberto para o servidor FTP

### Descrição

function **ftp\_fput**(  
    [FTP\Connection](class.ftp-connection.md) `$ftp`,  
    [string](language.types.string.md) `$remote_filename`,  
    [resource](language.types.resource.md) `$stream`,  
    [int](language.types.integer.md) `$mode` = **`FTP_BINARY`**,  
    [int](language.types.integer.md) `$offset` = 0  
): [bool](language.types.boolean.md)

**ftp\_fput()** envia os dados a partir de um ponteiro de arquivo
para um arquivo remoto no servidor FTP.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`remote_filename`
:   O caminho do arquivo remoto.

`stream`
:   Um ponteiro de arquivo local aberto. A leitura encerra no final do arquivo.

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

**Exemplo #1 Exemplo de **ftp\_fput()****

```
<?php

// abre um arquivo para leitura
$file = 'somefile.txt';
$fp = fopen($file, 'r');

// configura conexão básica
$ftp = ftp_connect($ftp_server);

// registra com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// tenta enviar o arquivo
if (ftp_fput($ftp, $file, $fp, FTP_ASCII)) {
    echo "$file enviado com sucesso\n";
} else {
    echo "Houve um problema ao enviar $file\n";
}

// fecha a conexão e o identificador do arquivo
ftp_close($ftp);
fclose($fp);

?>
```

### Veja também

- [ftp\_put()](function.ftp-put.md) - Envia um arquivo para o servidor FTP
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
