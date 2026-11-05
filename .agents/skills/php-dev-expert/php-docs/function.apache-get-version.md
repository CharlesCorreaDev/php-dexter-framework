# Retorna a versão do Apache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apache-get-version.php

---

# apache\_get\_version

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

apache\_get\_version — Retorna a versão do Apache

### Descrição

function **apache\_get\_version**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna a versão do Apache.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a versão do Apache se tiver sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo da função **apache\_get\_version()****

```
<?php
$version = apache_get_version();
echo "$version\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Apache/1.3.29 (Unix) PHP/4.3.4
```

### Veja também

- [phpinfo()](function.phpinfo.md) - Mostra informações sobre a configuração do PHP

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
