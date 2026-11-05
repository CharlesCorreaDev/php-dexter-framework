# Anexa dados a um item existente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.append.php

---

# Memcached::append

(PECL memcached >= 0.1.0)

Memcached::append — Anexa dados a um item existente

### Descrição

public function **Memcached::append**([string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`): [?](language.types.null.md)[bool](language.types.boolean.md)

**Memcached::append()** acrescenta a string
`value` fornecida ao valor de um item existente. A
razão pela qual `value` é forçado a ser uma string é
que anexar tipos mistos não é bem definido.

> **Nota**:
>
> Se o **`Memcached::OPT_COMPRESSION`** estiver ativado, a
> operação falhará e um aviso será emitido, pois não é possível
> anexar dados compactados a um valor potencialmente
> já compactado.

### Parâmetros

`key`
:   A chave sob a qual armazenar o valor.

`value`
:   A string a ser anexada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Retorna **`null`** quando a compressão está ativada.

### Erros/Exceções

Retorna **`null`** e gera um **`E_WARNING`** quando a
compressão está habilitada.

### Examples

**Exemplo #1 Exemplo de **Memcached::append()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);
$m->setOption(Memcached::OPT_COMPRESSION, false);

$m->set('foo', 'abc');
$m->append('foo', 'def');
var_dump($m->get('foo'));
?>
```

O exemplo acima produzirá:

```
string(6) "abcdef"
```

### Veja também

- [Memcached::appendByKey()](memcached.appendbykey.md) - Anexa dados a um item existente em um servidor específico
- [Memcached::prepend()](memcached.prepend.md) - Anexa dados a um item existente

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
