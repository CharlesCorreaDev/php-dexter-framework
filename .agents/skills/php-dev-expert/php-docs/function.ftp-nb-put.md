# Armazena um arquivo no servidor FTP (sem bloqueio)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-nb-put.php

---

# ftp\_nb\_put

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

ftp\_nb\_put — Armazena um arquivo no servidor FTP (sem bloqueio)

### Descrição

function **ftp\_nb\_put**(  
    [FTP\Connection](class.ftp-connection.md) `$ftp`,  
    [string](language.types.string.md) `$remote_filename`,  
    [string](language.types.string.md) `$local_filename`,  
    [int](language.types.integer.md) `$mode` = **`FTP_BINARY`**,  
    [int](language.types.integer.md) `$offset` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

**ftp\_nb\_put()** armazena um arquivo local no servidor FTP.

A diferença entre esta função e [ftp\_put()](function.ftp-put.md)
é que esta função envia o arquivo de forma assíncrona, para que a aplicação possa
realizar outras operações enquanto o arquivo está sendo enviado.

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

Retorna **`FTP_FAILED`** ou **`FTP_FINISHED`**
ou **`FTP_MOREDATA`**, ou **`false`** em caso de falha ao abrir o arquivo local.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 7.3.0 | O parâmetro `mode` agora é opcional. Antigamente era obrigatório. |

### Examples

**Exemplo #1 Exemplo de **ftp\_nb\_put()****

```
<?php

// Inicia o envio
$ret = ftp_nb_put($ftp, "test.remote", "test.local", FTP_BINARY);
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
?>
```

**Exemplo #2 Continuando um envio com **ftp\_nb\_put()****

```
<?php

// Inicia
$ret = ftp_nb_put($ftp, "test.remote", "test.local",
                      FTP_BINARY, ftp_size("test.remote"));
// OU: $ret = ftp_nb_put($ftp, "test.remote", "test.local",
//                           FTP_BINARY, FTP_AUTORESUME);

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
?>
```

### Veja também

- [ftp\_nb\_fput()](function.ftp-nb-fput.md) - Armazena um arquivo de um arquivo aberto no servidor FTP (sem bloqueio)
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
