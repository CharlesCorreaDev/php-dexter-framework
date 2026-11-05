# Retorna o conteúdo do buffer de saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-get-contents.php

---

# ob\_get\_contents

(PHP 4, PHP 5, PHP 7, PHP 8)

ob\_get\_contents — Retorna o conteúdo do buffer de saída

### Descrição

function **ob\_get\_contents**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o conteúdo do buffer de saída sem limpá-lo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o conteúdo do buffer de saída ou **`false`**, se o buffer
de saída não estiver ativo.

### Examples

**Exemplo #1 Um simples exemplo de **ob\_get\_contents()****

```
<?php

ob_start();

echo "Olá, ";

$out1 = ob_get_contents();

echo "Mundo";

$out2 = ob_get_contents();

ob_end_clean();

var_dump($out1, $out2);
?>
```

O exemplo acima produzirá:

```
string(5) "Olá, "
string(10) "Olá, Mundo"
```

### Veja também

- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída
- [ob\_get\_length()](function.ob-get-length.md) - Retorna o comprimento do buffer de saída

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
