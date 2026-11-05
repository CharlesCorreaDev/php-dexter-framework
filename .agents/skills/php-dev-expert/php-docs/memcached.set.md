# Armazena um item

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.set.php

---

# Memcached::set

(PECL memcached >= 0.1.0)

Memcached::set — Armazena um item

### Descrição

public function **Memcached::set**([string](language.types.string.md) `$key`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$expiration` = 0): [bool](language.types.boolean.md)

**Memcached::set()** armazena o `value`
em um servidor memcache sob a `key` especificada. O parâmetro
`expiration` pode ser usado para controlar quando o valor
é considerado expirado.

O valor pode ser qualquer tipo de PHP válido, exceto recursos, porque eles
não podem ser representados de forma serializada. Se a opção
**`Memcached::OPT_COMPRESSION`** estiver ativada, o
valor serializado também será compactado antes do armazenamento.

### Parâmetros

`key`
:   A chave sob a qual armazenar o valor.

`value`
:   O valor a ser armazenado.

`expiration`
:   O tempo de expiração padrão é 0. Consulte [Tempos de Expiração](memcached.expiration.md) para mais informações.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Use [Memcached::getResultCode()](memcached.getresultcode.md) se necessário.

### Examples

**Exemplo #1 Exemplo de **Memcached::set()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

$m->set('int', 99);
$m->set('string', 'a simple string');
$m->set('array', array(11, 12));
/* exira a chave 'object' em 5 minutos */
$m->set('object', new stdClass, time() + 300);

var_dump($m->get('int'));
var_dump($m->get('string'));
var_dump($m->get('array'));
var_dump($m->get('object'));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(99)
string(15) "a simple string"
array(2) {
  [0]=>
  int(11)
  [1]=>
  int(12)
}
object(stdClass)#1 (0) {
}
```

### Veja também

- [Memcached::setByKey()](memcached.setbykey.md) - Armazena um item em um servidor específico
- [Memcached::add()](memcached.add.md) - Adiciona um item em uma nova key
- [Memcached::replace()](memcached.replace.md) - Substitui o item em uma chave existente

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
