# Imprime informações da extensão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionextension.info.php

---

# ReflectionExtension::info

(PHP 5 >= 5.2.4, PHP 7, PHP 8)

ReflectionExtension::info — Imprime informações da extensão

### Descrição

public function **ReflectionExtension::info**(): [void](language.types.void.md)

Imprime a saída do trecho "[phpinfo()](function.phpinfo.md)"
de uma dada extensão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Informação sobre a extensão.

### Examples

**Exemplo #1 Exemplo de **ReflectionExtension::info()****

```
<?php
$ext = new ReflectionExtension('mysqli');
$ext->info();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
mysqli

MysqlI Support => enabled
Client API library version => mysqlnd 8.3.17
Active Persistent Links => 0
Inactive Persistent Links => 0
Active Links => 0
Persistent cache => enabled
put_hits => 0
put_misses => 0
get_hits => 0
get_misses => 0
size => 2000
free_items => 2000
references => 2

Directive => Local Value => Master Value
mysqli.max_links => Unlimited => Unlimited
mysqli.max_persistent => Unlimited => Unlimited
mysqli.allow_persistent => On => On
mysqli.default_host => no value => no value
mysqli.default_user => no value => no value
mysqli.default_pw => no value => no value
mysqli.default_port => 3306 => 3306
mysqli.default_socket => no value => no value
mysqli.reconnect => Off => Off
mysqli.allow_local_infile => On => On
mysqli.cache_size => 2000 => 2000
```

### Veja também

- [ReflectionExtension::getName()](reflectionextension.getname.md) - Obtém o nome da extensão
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
