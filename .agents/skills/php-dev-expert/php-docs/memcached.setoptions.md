# Define opções do Memcached

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.setoptions.php

---

# Memcached::setOptions

(PECL memcached >= 2.0.0)

Memcached::setOptions — Define opções do Memcached

### Descrição

public function **Memcached::setOptions**([array](language.types.array.md) `$options`): [bool](language.types.boolean.md)

**Memcached::setOptions()** é uma variação do
[Memcached::setOption()](memcached.setoption.md) que leva um array de
opções a serem definidas.

### Parâmetros

`options`
:   Um array associativo de opções em que a chave é a opção a ser definida e
    o valor é o novo valor da opção.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Configurando as opções do Memcached**

```
<?php
$m = new Memcached();
var_dump($m->getOption(Memcached::OPT_HASH) == Memcached::HASH_DEFAULT);

$m->setOptions(array(Memcached::OPT_HASH => Memcached::HASH_MURMUR, Memcached::OPT_PREFIX_KEY => "widgets"));

var_dump($m->getOption(Memcached::OPT_HASH) == Memcached::HASH_DEFAULT);
echo "A chave do prefixo agora é: ", $m->getOption(Memcached::OPT_PREFIX_KEY), "\n";
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
A chave do prefixo agora é: widgets
```

### Veja também

- [Memcached::getOption()](memcached.getoption.md) - Recupera um valor de opção do Memcached
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
