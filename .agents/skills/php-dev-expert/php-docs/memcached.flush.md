# Invalida todos os itens no cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.flush.php

---

# Memcached::flush

(PECL memcached >= 0.1.0)

Memcached::flush — Invalida todos os itens no cache

### Descrição

public function **Memcached::flush**([int](language.types.integer.md) `$delay` = 0): [bool](language.types.boolean.md)

**Memcached::flush()** invalida todos os itens de cache
existentes imediatamente (por padrão) ou após o `delay`
especificado. Após a invalidação, nenhum dos itens será retornado em
resposta a um comando de recuperação (a menos que seja armazenado novamente
na mesma chave após o **Memcached::flush()** ter invalidado os itens).
Na verdade, o flush não libera toda a memória ocupada pelos itens
existentes; isso acontecerá gradualmente à medida que novos itens forem armazenados.

### Parâmetros

`delay`
:   Número de segundos a aguardar antes de invalidar os itens.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Use [Memcached::getResultCode()](memcached.getresultcode.md) se necessário.

### Examples

**Exemplo #1 Exemplo de **Memcached::flush()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

/* liberar todos os itens em 10 segundos */
$m->flush(10);
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
