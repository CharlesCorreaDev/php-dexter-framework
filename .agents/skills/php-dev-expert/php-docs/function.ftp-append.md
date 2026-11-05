# Acrescenta o conteúdo de um arquivo a outro arquivo no servidor FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-append.php

---

# ftp\_append

(PHP 7 >= 7.2.0, PHP 8)

ftp\_append — Acrescenta o conteúdo de um arquivo a outro arquivo no servidor FTP

### Descrição

function **ftp\_append**(  
    [FTP\Connection](class.ftp-connection.md) `$ftp`,  
    [string](language.types.string.md) `$remote_filename`,  
    [string](language.types.string.md) `$local_filename`,  
    [int](language.types.integer.md) `$mode` = **`FTP_BINARY`**  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`remote_filename`

`local_filename`

`mode`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

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
