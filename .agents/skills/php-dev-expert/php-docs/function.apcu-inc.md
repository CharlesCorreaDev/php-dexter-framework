# Incrementa um número armazenado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apcu-inc.php

---

# apcu\_inc

(PECL apcu >= 4.0.0)

apcu\_inc — Incrementa um número armazenado

### Descrição

function **apcu\_inc**(  
    [string](language.types.string.md) `$key`,  
    [int](language.types.integer.md) `$step` = 1,  
    [bool](language.types.boolean.md) `&$success` = ?,  
    [int](language.types.integer.md) `$ttl` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Incrementa um número armazenado.

### Parâmetros

`key`
:   A chave do valor sendo incrementado.

`step`
:   A quantidade, ou o valor a incrementar.

`success`
:   Opcionalmente o valor booleano de sucesso ou falha é armazenado
    nesta variável passada por referência.

`ttl`
:   TTL a ser usado se a operação inserir um novo valor (ao invés de incrementar um existente).

### Valor Retornado

Retorna o valor atual do valor da chave definida em `key` em caso de sucesso,
ou **`false`** em caso de falha

### Examples

**Exemplo #1 Exemplo de **apcu\_inc()****

```
<?php
echo "Fazendo algo que funciona", PHP_EOL;

apcu_store('numeral', 42);

echo apcu_fetch('numeral'), PHP_EOL;

echo apcu_inc('numeral'), PHP_EOL;
echo apcu_inc('numeral', 10), PHP_EOL;
echo apcu_inc('numeral', 10, $success), PHP_EOL;

var_dump($success);

echo "Agora, algo que falha", PHP_EOL, PHP_EOL;

apcu_store('uma_string', 'foo');

$ret = apcu_inc('uma_string', 1, $fail);

var_dump($ret);
var_dump($fail);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Fazendo algo que funciona
42
43
53
63
bool(true)
Agora, algo que falha

bool(false)
bool(false)
```

### Veja também

- [apcu\_dec()](function.apcu-dec.md) - Decrementa um número armazenado

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
