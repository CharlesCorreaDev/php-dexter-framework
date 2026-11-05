# Habilita a compactação automática de valores grandes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.setcompressthreshold.php

---

# Memcache::setCompressThreshold

# memcache\_set\_compress\_threshold

(PECL memcache >= 2.0.0)

Memcache::setCompressThreshold -- memcache\_set\_compress\_threshold — Habilita a compactação automática de valores grandes

### Descrição

function **Memcache::setCompressThreshold**([int](language.types.integer.md) `$threshold`, [float](language.types.float.md) `$min_savings` = ?): [bool](language.types.boolean.md)

function **memcache\_set\_compress\_threshold**([Memcache](class.memcache.md) `$memcache`, [int](language.types.integer.md) `$threshold`, [float](language.types.float.md) `$min_savings` = ?): [bool](language.types.boolean.md)

**Memcache::setCompressThreshold()** habilita a compactação
automática de valores grandes.

> **Nota**:
>
> Esta função foi adicionada ao Memcache versão 2.0.0.

### Parâmetros

`threshold`
:   Controla o comprimento mínimo do valor antes de tentar compactar automaticamente.

`min_saving`
:   Especifica a quantidade mínima de economia para realmente armazenar o valor
    compactado. O valor fornecido deve estar entre 0 e 1. O valor padrão
    é 0.2, dando uma economia mínima de compressão de 20%.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcache::setCompressThreshold()****

```
<?php

/* API orientada a objeto */

$memcache_obj = new Memcache;
$memcache_obj->addServer('memcache_host', 11211);
$memcache_obj->setCompressThreshold(20000, 0.2);

/* API procedural */

$memcache_obj = memcache_connect('memcache_host', 11211);
memcache_set_compress_threshold($memcache_obj, 20000, 0.2);

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
