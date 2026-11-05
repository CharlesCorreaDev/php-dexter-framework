# Retorna um identificador exclusivo para o thread atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zend-thread-id.php

---

# zend\_thread\_id

(PHP 5, PHP 7, PHP 8)

zend\_thread\_id — Retorna um identificador exclusivo para o thread atual

### Descrição

function **zend\_thread\_id**(): [int](language.types.integer.md)

Retorna um identificador exclusivo para o thread atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID do thread como um número inteiro.

### Examples

**Exemplo #1 Exemplo de **zend\_thread\_id()****

```
<?php
$thread_id = zend_thread_id();

echo 'ID do thread atual é: ' . $thread_id;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
ID do thread atual é: 7864
```

### Notas

> **Nota**:
>
> Esta função só está disponível se o PHP tiver sido construído com suporte ao ZTS (Zend
> Thread Safety) e com modo de depuração (`--enable-debug`).

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
