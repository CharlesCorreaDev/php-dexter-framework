# Define uma opção Memcached

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.setoption.php

---

# Memcached::setOption

(PECL memcached >= 0.1.0)

Memcached::setOption — Define uma opção Memcached

### Descrição

public function **Memcached::setOption**([int](language.types.integer.md) `$option`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Este método define o valor de uma `option` do Memcached.
Algumas opções correspondem às definidas por libmemcached e algumas são
específicas da extensão.

### Parâmetros

`option`
:   Uma das constantes **`Memcached::OPT_*`**.
    Consulte as [constantes Memcached](memcached.constants.md) para obter mais informações.

`value`
:   O valor a ser definido.

    > **Nota**:
    >
    > As opções listadas abaixo requerem valores especificados por meio de constantes.
    >
    > - **`Memcached::OPT_HASH`** requer
    >   valores
    >   **`Memcached::HASH_*`**.
    > - **`Memcached::OPT_DISTRIBUTION`** requer
    >   valores
    >   **`Memcached::DISTRIBUTION_*`**.
    > - **`Memcached::OPT_SERIALIZER`** requer
    >   valores
    >   **`Memcached::SERIALIZER_*`**.
    > - **`Memcached::OPT_COMPRESSION_TYPE`** requer
    >   valores
    >   **`Memcached::COMPRESSION_*`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Definindo uma opção do Memcached**

```
<?php
$m = new Memcached();
var_dump($m->getOption(Memcached::OPT_HASH) == Memcached::HASH_DEFAULT);
$m->setOption(Memcached::OPT_HASH, Memcached::HASH_MURMUR);
$m->setOption(Memcached::OPT_PREFIX_KEY, "widgets");
echo "A chave de prefixo agora é: ", $m->getOption(Memcached::OPT_PREFIX_KEY), "\n";
?>
```

O exemplo acima produzirá:

```
bool(true)
A chave de prefixo agora é: widgets
```

### Veja também

- [Memcached::getOption()](memcached.getoption.md) - Recupera um valor de opção do Memcached
- [Memcached::setOptions()](memcached.setoptions.md) - Define opções do Memcached
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
