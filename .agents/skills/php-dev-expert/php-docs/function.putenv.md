# Define o valor de uma variável de ambiente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.putenv.php

---

# putenv

(PHP 4, PHP 5, PHP 7, PHP 8)

putenv — Define o valor de uma variável de ambiente

### Descrição

function **putenv**([string](language.types.string.md) `$assignment`): [bool](language.types.boolean.md)

Adiciona `assignment` no ambiente do servidor. A
variável de ambiente irá existir somente durante a requisição
atual. Ao final da requisição o ambiente é restaurado ao seu
estado original.

### Parâmetros

`assignment`
:   A definição, como `"FOO=BAR"`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Definindo uma variável de ambiente**

```
<?php
putenv("UNIQID=$uniqid");
?>
```

### Veja também

- [getenv()](function.getenv.md) - Obtém o valor de uma única ou de todas as variáveis ​​de ambiente
- [apache\_setenv()](function.apache-setenv.md) - Define uma variável subprocess\_env do Apache

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
