# Retorna uma descrição de string do último erro de conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stomp-connect-error.php

---

# stomp\_connect\_error

(PECL stomp >= 0.3.0)

stomp\_connect\_error — Retorna uma descrição de string do último erro de conexão

### Descrição

function **stomp\_connect\_error**(): [string](language.types.string.md)

Retorna uma descrição de string do último erro de conexão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma string que descreve o erro, ou **`null`** se nenhum erro ocorreu.

### Examples

**Exemplo #1 Exemplo de **stomp\_connect\_error()****

```
<?php
$link = stomp_connect('http://localhost:61613');

if(!$link) {
    die('Conexão falhou: ' . stomp_connect_error());
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Conexão falhou: Invalid Broker URI scheme
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
