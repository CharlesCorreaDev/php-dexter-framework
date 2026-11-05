# Obtem informações da versão do pool de servidores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.getversion.php

---

# Memcached::getVersion

(PECL memcached >= 0.1.5)

Memcached::getVersion — Obtem informações da versão do pool de servidores

### Descrição

public function **Memcached::getVersion**(): [array](language.types.array.md)|[false](language.types.singleton.md)

**Memcached::getVersion()** retorna um array contendo as
informações de versão para todos os servidores memcache disponíveis.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Array de versões de servidor, uma entrada por servidor.

### Examples

**Exemplo #1 Exemplo de **Memcached::getVersion()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

print_r($m->getVersion());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [localhost:11211] => 1.2.6
)
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
