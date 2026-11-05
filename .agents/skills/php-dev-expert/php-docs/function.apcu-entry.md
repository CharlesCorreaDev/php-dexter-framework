# Busca ou gera atomicamente uma entrada de cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apcu-entry.php

---

# apcu\_entry

(PECL apcu >= 5.1.0)

apcu\_entry — 
Busca ou gera atomicamente uma entrada de cache

### Descrição

function **apcu\_entry**([string](language.types.string.md) `$key`, [callable](language.types.callable.md) `$callback`, [int](language.types.integer.md) `$ttl` = 0): [mixed](language.types.mixed.md)

Tenta atomicamente encontrar `key` no cache, se não puder ser encontrado, `callback`
é chamado, passando `key` como único argumento. O valor de retorno da chamada é então armazenado em cache com o `ttl`
especificado opcionalmente e retornado.

> **Nota**:
>
> Quando o controle entra em **apcu\_entry()** a trava para o cache é adquirida exclusivamente, ela é liberada quando o controle sai de **apcu\_entry()**:
> Na verdade, isso transforma o corpo do `callback` em uma seção crítica, impedindo que dois processos executem os mesmos caminhos de código simultaneamente.
> Além disso, proíbe a execução simultânea de quaisquer outras funções da APCu, pois irão adquirir a mesma trava.

**Aviso**

A única função APCu que pode ser chamada com segurança por `callback` é **apcu\_entry()**.

### Parâmetros

`key`
:   Identidade da entrada de cache

`callback`
:   Uma função chamável que aceite `key` como o único argumento e retorne o valor para o cache.

`ttl`
:   Tempo de Vida (Time To Live); armazena o valor de retorno de `callback` no cache por
    `ttl` segundos. Depois desses
    `ttl` segundos, a entrada armazenada será
    excluída do cache (na próxima requisição). Se nenhum parâmetro `ttl`
    for informado (ou se `ttl` for
    `0`), o valor persistirá até que seja removido do
    cache manualmente, ou caso deixe de existir no cache (limpeza,
    reinício, etc.).

### Valor Retornado

Retorna o valor armazenado em cache

### Examples

**Exemplo #1 Um exemplo de **apcu\_entry()****

```
<?php
$config = apcu_entry("config", function($key) {
 return [
   "fruta" => apcu_entry("config.fruta", function($key){
     return [
       "abacaxis",
       "bananas"
     ];
   }),
   "pessoas" => apcu_entry("config.pessoas", function($key){
     return [
      "Marcelo",
      "Pedro",
      "Maria"
     ];
   })
 ];
});

var_dump($config);
?>
```

O exemplo acima produzirá:

```
array(2) {
  ["fruta"]=>
  array(2) {
    [0]=>
    string(6) "abacaxis"
    [1]=>
    string(5) "bananas"
  }
  ["pessoas"]=>
  array(3) {
    [0]=>
    string(3) "Marcelo"
    [1]=>
    string(3) "Pedro"
    [2]=>
    string(4) "Maria"
  }
}
```

### Veja também

- [apcu\_store()](function.apcu-store.md) - Armazena uma variável em cache
- [apcu\_fetch()](function.apcu-fetch.md) - Busca uma variável armazenada no cache
- [apcu\_delete()](function.apcu-delete.md) - Remove uma variável armazenada do cache

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
