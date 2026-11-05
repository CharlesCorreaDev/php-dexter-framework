# Define uma variável subprocess_env do Apache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apache-setenv.php

---

# apache\_setenv

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

apache\_setenv — Define uma variável subprocess\_env do Apache

### Descrição

function **apache\_setenv**([string](language.types.string.md) `$variable`, [string](language.types.string.md) `$value`, [bool](language.types.boolean.md) `$walk_to_top` = **`false`**): [bool](language.types.boolean.md)

A função **apache\_setenv()** define o valor de uma variável de ambiente
Apache denotada por
`variable`.

> **Nota**:
>
> Quando configurar uma variável de ambiente, o valor correspondente em
> [$\_SERVER](reserved.variables.server.md)
> não é alterado.

### Parâmetros

`variable`
:   O nome da variável de ambiente a ser configurada.

`value`
:   O novo valor de `variable`.

`walk_to_top`
:   Se o valor deve ser definido como uma variável de alto nível em todos as camadas do Apache.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Configurando uma variável Apache utilizando **apache\_setenv()****

```
<?php
apache_setenv("EXAMPLE_VAR", "Valor exemplo");
?>
```

### Notas

> **Nota**:
>
> **apache\_setenv()** pode ser pareado com
> [apache\_getenv()](function.apache-getenv.md) entre páginas diferentes para configurar
> variáveis a repassar em Server Side Includes (.shtml), repassando dados
> incluídos em scripts PHP.

### Veja também

- [apache\_getenv()](function.apache-getenv.md) - Retorna uma variável subprocess\_env do Apache

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
