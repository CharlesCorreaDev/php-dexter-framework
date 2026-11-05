# Obtém a versão do motor Zend atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zend-version.php

---

# zend\_version

(PHP 4, PHP 5, PHP 7, PHP 8)

zend\_version — Obtém a versão do motor Zend atual

### Descrição

function **zend\_version**(): [string](language.types.string.md)

Retorna uma string contendo a versão atual do motor Zend Engine
atualmente em execução.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número da versão do motor Zend, como uma string.

### Examples

**Exemplo #1 Exemplo de **zend\_version()****

```
<?php
echo "Versão do motor Zend: " . zend_version();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Versão do motor Zend: 2.2.0
```

### Veja também

- [phpinfo()](function.phpinfo.md) - Mostra informações sobre a configuração do PHP
- [phpcredits()](function.phpcredits.md) - Mostra os créditos para o PHP
- [phpversion()](function.phpversion.md) - Obtém a versão atual do PHP

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
