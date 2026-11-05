# Retorna uma variável subprocess_env do Apache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apache-getenv.php

---

# apache\_getenv

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

apache\_getenv — Retorna uma variável subprocess\_env do Apache

### Descrição

function **apache\_getenv**([string](language.types.string.md) `$variable`, [bool](language.types.boolean.md) `$walk_to_top` = **`false`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna a variável de ambiente do Apache especificada por
`variable`.

### Parâmetros

`variable`
:   A variável de ambiente do Apache

`walk_to_top`
:   Se deve ou não retorna a variável de alto-ní­vel disponí­veis em todas as camadas do Apache.

### Valor Retornado

O valor da variável de ambiente do Apache se tiver sucesso, ou **`false`** se
falhar

### Examples

**Exemplo #1 Exemplo de uso da função **apache\_getenv()****

O exemplo abaixo mostra como obter o valor da
variável de ambiente SERVER\_ADDR do Apache.

```
<?php
$ret = apache_getenv("SERVER_ADDR");
echo $ret;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
42.24.42.240
```

### Veja também

- [apache\_setenv()](function.apache-setenv.md) - Define uma variável subprocess\_env do Apache
- [getenv()](function.getenv.md) - Obtém o valor de uma única ou de todas as variáveis ​​de ambiente
- [Superglobais](language.variables.superglobals.md)

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
