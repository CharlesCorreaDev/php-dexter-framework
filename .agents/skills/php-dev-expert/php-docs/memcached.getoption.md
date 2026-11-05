# Recupera um valor de opção do Memcached

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.getoption.php

---

# Memcached::getOption

(PECL memcached >= 0.1.0)

Memcached::getOption — Recupera um valor de opção do Memcached

### Descrição

public function **Memcached::getOption**([int](language.types.integer.md) `$option`): [mixed](language.types.mixed.md)

Este método retorna o valor de uma `option` do Memcached. Algumas opções
correspondem às definidas por libmemcached e algumas são específicas da
extensão. Consulte [Memcached
Constants](memcached.constants.md) para obter mais informações.

### Parâmetros

`option`
:   Uma das constantes `Memcached::OPT_*`.

### Valor Retornado

Retorna o valor da opção solicitada, ou **`false`** em caso de
erro.

### Examples

**Exemplo #1 Recuperando opções do Memcached**

```
<?php
$m = new Memcached();
var_dump($m->getOption(Memcached::OPT_COMPRESSION));
var_dump($m->getOption(Memcached::OPT_POLL_TIMEOUT));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
int(1000)
```

### Veja também

- **Memcached::getOption()**
- [Memcached::setOption()](memcached.setoption.md) - Define uma opção Memcached
- [Constantes Memcached](memcached.constants.md)

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
