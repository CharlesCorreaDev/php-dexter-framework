# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ftp.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`FTP_ASCII`** ([int](language.types.integer.md))

**`FTP_AUTOSEEK`** ([int](language.types.integer.md))
:   Consulte [ftp\_set\_option()](function.ftp-set-option.md) para informação.

**`FTP_AUTORESUME`** ([int](language.types.integer.md))
:   Determina automaticamente a posição de continuação e a posição de início para as requisições GET e PUT
    (só funciona se FTP\_AUTOSEEK estiver habilitado)

**`FTP_FAILED`** ([int](language.types.integer.md))
:   A transferência assíncrona falhou

**`FTP_FINISHED`** ([int](language.types.integer.md))
:   A transferência assíncrona terminou

**`FTP_MOREDATA`** ([int](language.types.integer.md))
:   A transferência assíncrona ainda está ativa

**`FTP_TEXT`** ([int](language.types.integer.md))
:   Apelido de **`FTP_ASCII`**.

**`FTP_BINARY`** ([int](language.types.integer.md))

**`FTP_IMAGE`** ([int](language.types.integer.md))
:   Apelido de **`FTP_BINARY`**.

**`FTP_TIMEOUT_SEC`** ([int](language.types.integer.md))
:   Consulte [ftp\_set\_option()](function.ftp-set-option.md) para informação.

**`FTP_USEPASVADDRESS`** ([int](language.types.integer.md))
:   Consulte [ftp\_set\_option()](function.ftp-set-option.md) para informação.

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
