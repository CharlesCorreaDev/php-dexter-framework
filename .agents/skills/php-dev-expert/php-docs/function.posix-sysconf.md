# Retorna informações de tempo de execução do sistema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-sysconf.php

---

# posix\_sysconf

(PHP 8 >= 8.3.0)

posix\_sysconf — Retorna informações de tempo de execução do sistema

### Descrição

function **posix\_sysconf**([int](language.types.integer.md) `$conf_id`): [int](language.types.integer.md)

Retorna informações de tempo de execução do sistema.

### Parâmetros

`conf_id`
:   Identificador da variável com uma das seguintes constantes:
    **`POSIX_SC_ARG_MAX`**, **`POSIX_SC_PAGESIZE`**,
    **`POSIX_SC_NPROCESSORS_CONF`**, **`POSIX_SC_NPROCESSORS_ONLN`**,
    **`POSIX_SC_CHILD_MAX`** ou **`POSIX_SC_CLK_TCK`**.

### Valor Retornado

Retorna o valor numérico relacionado ao `conf_id`.

### Examples

**Exemplo #1 Exemplo de **posix\_sysconf()****

Retorna o número de CPUs ativas.

```
<?php
echo posix_sysconf(POSIX_SC_NPROCESSORS_ONLN);
?>
```

O exemplo acima produzirá:

```
2
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
