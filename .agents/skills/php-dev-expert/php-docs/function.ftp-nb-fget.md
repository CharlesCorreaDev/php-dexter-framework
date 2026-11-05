# Recupera um arquivo do servidor FTP e grava-o em um arquivo aberto (sem bloqueio)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-nb-fget.php

---

# ftp\_nb\_fget

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

ftp\_nb\_fget — Recupera um arquivo do servidor FTP e grava-o em um arquivo aberto (sem bloqueio)

### Descrição

function **ftp\_nb\_fget**(  
    [FTP\Connection](class.ftp-connection.md) `$ftp`,  
    [resource](language.types.resource.md) `$stream`,  
    [string](language.types.string.md) `$remote_filename`,  
    [int](language.types.integer.md) `$mode` = **`FTP_BINARY`**,  
    [int](language.types.integer.md) `$offset` = 0  
): [int](language.types.integer.md)

**ftp\_nb\_fget()** recupera um arquivo remoto do
servidor FTP.

A diferença entre esta função e [ftp\_fget()](function.ftp-fget.md) é
que esta função recupera o arquivo de forma assíncrona, para que a aplicação possa
realizar outras operações enquanto o arquivo está sendo recebido.

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
:   A posição no arquivo remoto para iniciar o recebimento.

### Valor Retornado

Retorna **`FTP_FAILED`** ou **`FTP_FINISHED`**
ou **`FTP_MOREDATA`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 7.3.0 | O parâmetro `mode` agora é opcional. Antigamente era obrigatório. |

### Examples

**Exemplo #1 Exemplo de **ftp\_nb\_fget()****

```
<?php

// abre um arquivo para gravação
$file = 'index.php';
$fp = fopen($file, 'w');

$ftp = ftp_connect($ftp_server);

$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// Inicia o recebimento
$ret = ftp_nb_fget($ftp, $fp, $file, FTP_BINARY);
while ($ret == FTP_MOREDATA) {

   // Faz alguma coisa
   echo ".";

   // Continua  o recebimento...
   $ret = ftp_nb_continue($ftp);
}
if ($ret != FTP_FINISHED) {
   echo "Houve um erro ao receber o arquivo...";
   exit(1);
}

// fecha o ponteiro do arquivo
fclose($fp);
?>
```

### Veja também

- [ftp\_nb\_get()](function.ftp-nb-get.md) - Recupera um arquivo do servidor FTP e grava-o em um arquivo local (sem bloqueio)
- [ftp\_nb\_continue()](function.ftp-nb-continue.md) - Continua a receber/enviar um arquivo (sem bloquear)
- [ftp\_fget()](function.ftp-fget.md) - Recebe um arquivo do servidor FTP e salva em um arquivo aberto
- [ftp\_get()](function.ftp-get.md) - Recebe um arquivo do servidor FTP

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
