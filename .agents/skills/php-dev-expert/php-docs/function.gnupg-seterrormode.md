# Define o modo para relato de erros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-seterrormode.php

---

# gnupg\_seterrormode

(PECL gnupg >= 0.6)

gnupg\_seterrormode — Define o modo para relato de erros

### Descrição

function **gnupg\_seterrormode**([resource](language.types.resource.md) `$identifier`, [int](language.types.integer.md) `$errormode`): [void](language.types.void.md)

Define o modo para [error\_reporting](errorfunc.configuration.md#ini.error-reporting).

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`errormode`
:   O modo de erro.

    `errormode` recebe uma constante indicando que tipo de
    relato de erros deve ser usado. Os valores possíveis são
    **`GNUPG_ERROR_WARNING`**,
    **`GNUPG_ERROR_EXCEPTION`** e
    **`GNUPG_ERROR_SILENT`**.
    Por padrão, **`GNUPG_ERROR_SILENT`** é usado.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_seterrormode()****

```
<?php
$res = gnupg_init();
gnupg_seterrormode($res,GNUPG_ERROR_WARNING); // emite um alerta PHP em caso de erro
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_seterrormode()****

```
<?php
$gpg = new gnupg();
$gpg->seterrormode(gnupg::ERROR_EXCEPTION); // lança uma exceção em caso de erro
?>
```

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
