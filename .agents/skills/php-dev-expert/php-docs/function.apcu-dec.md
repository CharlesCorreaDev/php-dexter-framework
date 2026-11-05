# Decrementa um número armazenado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apcu-dec.php

---

# apcu\_dec

(PECL apcu >= 4.0.0)

apcu\_dec — Decrementa um número armazenado

### Descrição

function **apcu\_dec**(  
    [string](language.types.string.md) `$key`,  
    [int](language.types.integer.md) `$step` = 1,  
    [bool](language.types.boolean.md) `&$success` = ?,  
    [int](language.types.integer.md) `$ttl` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Decrementa um valor inteiro armazenado.

### Parâmetros

`key`
:   A chave do valor sendo decrementado.

`step`
:   A quantidade, ou valor a decrementar.

`success`
:   Opcionalmente, o valor booleano de sucesso ou falha é passado para
    esta variável de referência.

`ttl`
:   TTL a ser usado se a operação inserir um novo valor (ao invés de decrementar um existente).

### Valor Retornado

Retorna o valor atual do valor da chave definida em `key` em caso de sucesso,
ou **`false`** em caso de falha

### Examples

**Exemplo #1 Exemplo de **apcu\_dec()****

```
<?php
echo "Fazendo algo que funciona", PHP_EOL;

apcu_store('numeral', 42);

echo apcu_fetch('numeral'), PHP_EOL;

echo apcu_dec('numeral'), PHP_EOL;
echo apcu_dec('numeral', 10), PHP_EOL;
echo apcu_dec('numeral', 10, $success), PHP_EOL;

var_dump($success);

echo "Agora, algo que falha", PHP_EOL, PHP_EOL;

apcu_store('uma_string', 'foo');

$ret = apcu_dec('uma_string', 1, $fail);

var_dump($ret);
var_dump($fail);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Fazendo algo que funciona
42
41
31
21
bool(true)
Agora, algo que falha

bool(false)
bool(false)
```

### Veja também

- [apcu\_inc()](function.apcu-inc.md) - Incrementa um número armazenado

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
