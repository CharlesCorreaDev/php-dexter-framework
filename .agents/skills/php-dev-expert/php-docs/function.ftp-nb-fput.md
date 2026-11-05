# Armazena um arquivo de um arquivo aberto no servidor FTP (sem bloqueio)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-nb-fput.php

---

# ftp\_nb\_fput

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

ftp\_nb\_fput — Armazena um arquivo de um arquivo aberto no servidor FTP (sem bloqueio)

### Descrição

function **ftp\_nb\_fput**(  
    [FTP\Connection](class.ftp-connection.md) `$ftp`,  
    [string](language.types.string.md) `$remote_filename`,  
    [resource](language.types.resource.md) `$stream`,  
    [int](language.types.integer.md) `$mode` = **`FTP_BINARY`**,  
    [int](language.types.integer.md) `$offset` = 0  
): [int](language.types.integer.md)

**ftp\_nb\_fput()** carrega os dados de um ponteiro de
arquivo para um arquivo remoto no servidor FTP.

A diferença entre esta função e [ftp\_fput()](function.ftp-fput.md)
é que esta função envia o arquivo de forma assíncrona, para que a aplicação possa
realizar outras operações enquanto o arquivo está sendo enviado.

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

Retorna **`FTP_FAILED`** ou **`FTP_FINISHED`**
ou **`FTP_MOREDATA`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 7.3.0 | O parâmetro `mode` agora é opcional. Antigamente era obrigatório. |

### Examples

**Exemplo #1 Exemplo de **ftp\_nb\_fput()****

```
<?php

$file = 'index.php';

$fp = fopen($file, 'r');

$ftp = ftp_connect($ftp_server);

$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// Inicia o envio
$ret = ftp_nb_fput($ftp, $file, $fp, FTP_BINARY);
while ($ret == FTP_MOREDATA) {

   // Faz alguma coisa
   echo ".";

   // Continua o envio...
   $ret = ftp_nb_continue($ftp);
}
if ($ret != FTP_FINISHED) {
   echo "Houve um erro ao enviar o arquivo...";
   exit(1);
}

fclose($fp);
?>
```

### Veja também

- [ftp\_nb\_put()](function.ftp-nb-put.md) - Armazena um arquivo no servidor FTP (sem bloqueio)
- [ftp\_nb\_continue()](function.ftp-nb-continue.md) - Continua a receber/enviar um arquivo (sem bloquear)
- [ftp\_put()](function.ftp-put.md) - Envia um arquivo para o servidor FTP
- [ftp\_fput()](function.ftp-fput.md) - Envia um arquivo aberto para o servidor FTP

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
