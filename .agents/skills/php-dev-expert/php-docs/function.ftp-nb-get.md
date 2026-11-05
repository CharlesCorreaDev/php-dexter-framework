# Recupera um arquivo do servidor FTP e grava-o em um arquivo local (sem bloqueio)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-nb-get.php

---

# ftp\_nb\_get

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

ftp\_nb\_get — Recupera um arquivo do servidor FTP e grava-o em um arquivo local (sem bloqueio)

### Descrição

function **ftp\_nb\_get**(  
    [FTP\Connection](class.ftp-connection.md) `$ftp`,  
    [string](language.types.string.md) `$local_filename`,  
    [string](language.types.string.md) `$remote_filename`,  
    [int](language.types.integer.md) `$mode` = **`FTP_BINARY`**,  
    [int](language.types.integer.md) `$offset` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

**ftp\_nb\_get()** recupera um arquivo remoto do servidor
FTP grava-o em um arquivo local.

A diferença entre esta função e [ftp\_get()](function.ftp-get.md) é que
esta função recupera o arquivo de forma assíncrona, para que a aplicação possa realizar
outras operações enquanto o arquivo está sendo recebido.

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

Retorna **`FTP_FAILED`** ou **`FTP_FINISHED`**
ou **`FTP_MOREDATA`**, ou **`false`** em caso de falha ao abrir o arquivo local.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 7.3.0 | O parâmetro `mode` agora é opcional. Antigamente era obrigatório. |

### Examples

**Exemplo #1 Exemplo de **ftp\_nb\_get()****

```
<?php

// Inicia o recebimento
$ret = ftp_nb_get($ftp, "test", "README", FTP_BINARY);
while ($ret == FTP_MOREDATA) {

   // Faz alguma coisa
   echo ".";

   // Continua o recebimento...
   $ret = ftp_nb_continue($ftp);
}
if ($ret != FTP_FINISHED) {
   echo "Houve um erro ao receber o arquivo...";
   exit(1);
}
?>
```

**Exemplo #2 Continuando o recebimento com **ftp\_nb\_get()****

```
<?php

// Inicia
$ret = ftp_nb_get($ftp, "test", "README", FTP_BINARY,
                      filesize("test"));
// OU: $ret = ftp_nb_get($ftp, "test", "README",
//                           FTP_BINARY, FTP_AUTORESUME);
while ($ret == FTP_MOREDATA) {

   // Faz alguma coisa
   echo ".";

   // Continua o recebimento...
   $ret = ftp_nb_continue($ftp);
}
if ($ret != FTP_FINISHED) {
   echo "Houve um erro ao receber o arquivo...";
   exit(1);
}
?>
```

**Exemplo #3
Continuando o recebimento na posição 100 para um novo
arquivo com **ftp\_nb\_get()****

```
<?php

// Desabilita a busca automática
ftp_set_option($ftp, FTP_AUTOSEEK, false);

// Inicia
$ret = ftp_nb_get($ftp, "newfile", "README", FTP_BINARY, 100);
while ($ret == FTP_MOREDATA) {

   /* ... */

   // Continua o recebimento...
   $ret = ftp_nb_continue($ftp);
}
?>
```

No exemplo acima, newfile é 100 bytes menor
que README no servidor FTP porque a leitura
começou na posição 100. Se **`FTP_AUTOSEEK`**
não fosse desabilitada, os primeiros 100 bytes de
newfile seriam `'\0'`.

### Veja também

- [ftp\_nb\_fget()](function.ftp-nb-fget.md) - Recupera um arquivo do servidor FTP e grava-o em um arquivo aberto (sem bloqueio)
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
