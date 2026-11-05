# Anexa dados a um item existente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.prepend.php

---

# Memcached::prepend

(PECL memcached >= 0.1.0)

Memcached::prepend — Anexa dados a um item existente

### Descrição

public function **Memcached::prepend**([string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`): [?](language.types.null.md)[bool](language.types.boolean.md)

**Memcached::prepend()** anexa a string
`value` fornecida ao valor de um item existente. A
razão pela qual `value` é forçado a ser uma string é
que tipos mistos não são bem definidos.

> **Nota**:
>
> Se o **`Memcached::OPT_COMPRESSION`** estiver ativado, a
> operação falhará e um aviso será emitido, porque não é possível
> anexar dados compactados a um valor que já está compactado.

### Parâmetros

`key`
:   A chave do item para anexar os dados.

`value`
:   A string a ser anexada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Retorna **`null`** quando a compressão está ativada.

### Erros/Exceções

Retorna **`null`** e gera um **`E_WARNING`** quando a
compressão está habilitada.

### Examples

**Exemplo #1 Exemplo de **Memcached::prepend()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);
$m->setOption(Memcached::OPT_COMPRESSION, false);

$m->set('foo', 'abc');
$m->prepend('foo', 'def');
var_dump($m->get('foo'));
?>
```

O exemplo acima produzirá:

```
string(6) "defabc"
```

### Veja também

- [Memcached::prependByKey()](memcached.prependbykey.md) - Anexa dados a um item existente em um servidor específico
- [Memcached::append()](memcached.append.md) - Anexa dados a um item existente

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
