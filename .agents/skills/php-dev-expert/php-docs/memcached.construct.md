# Cria uma instância do Memcached

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.construct.php

---

# Memcached::\_\_construct

(PECL memcached >= 0.1.0)

Memcached::\_\_construct — Cria uma instância do Memcached

### Descrição

public function **Memcached::\_\_construct**([?](language.types.null.md)[string](language.types.string.md) `$persistent_id` = **`null`**, [?](language.types.null.md)[callable](language.types.callable.md) `$callback` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$connection_str` = **`null`**)

Cria uma instância Memcached que representa a conexão com os
servidores Memcache.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`persistent_id`
:   Por padrão, as instâncias do Memcached são destruídas ao final da
    solicitação. Para criar uma instância que persista entre as solicitações, use
    `persistent_id`para especificar um ID exclusivo para a
    instância. Todas as instâncias criadas com o mesmo
    `persistent_id` compartilharão a mesma conexão.

`callback`
:   function callback([Memcached](class.memcached.md) `$memcached`, [?](language.types.null.md)[string](language.types.string.md) `$persistent_id`): [void](language.types.void.md)

    O parâmetro `callback` é chamado quando a
    conexão é estabelecida. Deve ser um [callable](language.types.callable.md) válido do PHP
    que recebe o objeto [Memcached](class.memcached.md) como seu primeiro
    parâmetro e `persistent_id` como o segundo.

`connection_str`
:   Este parâmetro é usado para passar opções de conexão adicionais para
    os servidores memcache servers, tam como um peso de servidor em um grupo.

### Examples

**Exemplo #1 Creating a Memcached object**

```
<?php
/* Criar uma instância regular */
$m = new Memcached();
echo get_class($m);

/* Criar uma instância persistente */
$m2 = new Memcached('story_pool');
$m3 = new Memcached('story_pool');

/* agora $m2 e $m3 compartilham a mesma conexão */
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
