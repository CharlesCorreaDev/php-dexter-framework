# Inicializa um contexto de hash incremental

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hash-init.php

---

# hash\_init

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1)

hash\_init — Inicializa um contexto de hash incremental

### Descrição

function **hash\_init**(  
    [string](language.types.string.md) `$algo`,  
    [int](language.types.integer.md) `$flags` = 0,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key` = "",  
    [array](language.types.array.md) `$options` = []  
): [HashContext](class.hashcontext.md)

### Parâmetros

`algo`
:   Nome do algoritmo de hash selecionado (por exemplo, `"sha256"`).
    Para uma lista de algoritmos suportados, veja [hash\_algos()](function.hash-algos.md).
    > **Nota**:
    >
    > Funções de hash não criptográficas não são permitidas se o sinalizador **`HASH_HMAC`**
    > for especificado.

`flags`
:   Configurações opcionais para geração de hash, atualmente suporta apenas uma opção:
    **`HASH_HMAC`**. Quando especificado, o `key`
    *precisa* ser especificado.

`key`
:   Quando **`HASH_HMAC`** é especificado para `flags`,
    uma chave secreta compartilhada a ser usada com o método de hash HMAC deve ser fornecida neste
    parâmetro.

`options`
:   Um array de opções para os vários algoritmos de hash.
    Atualmente, apenas o parâmetro `"seed"` é
    suportado pelas variantes MurmurHash.

### Valor Retornado

Retorna um contexto de hash para uso com [hash\_update()](function.hash-update.md),
[hash\_update\_stream()](function.hash-update-stream.md), [hash\_update\_file()](function.hash-update-file.md),
e [hash\_final()](function.hash-final.md).

### Erros/Exceções

- Lança uma exceção [ValueError](class.valueerror.md) se
  `algo` for desconhecido ou for uma função hash não criptográfica
  ou se `key` estiver vazio.
- Passar opções de configuração do tipo errado em
  `options` agora emitirá um
  erro **`E_DEPRECATED`** porque elas podem ser interpretadas
  incorretamente.
  Isso se tornará um [ValueError](class.valueerror.md) no
  futuro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Passar opções de um tipo errado foi descontinuado. |
| 8.1.0 | O parâmetro `options` foi adicionado. |
| 8.0.0 | Agora lança uma exceção [ValueError](class.valueerror.md) se o `algo` for desconhecido ou for uma função hash não criptográfica ou se `key` estiver vazio. Anteriormente, **`false`** era retornado e uma mensagem **`E_WARNING`** era emitida. |
| 7.2.0 | O uso de funções hash não criptográficas (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) com **`HASH_HMAC`** foi desabilitado. |
| 7.2.0 | Retorna [HashContext](class.hashcontext.md) em vez de recurso. |

### Examples

**Exemplo #1 Exemplo de hash incremental**

```
<?php
$hash = hash('sha256', 'The quick brown fox jumped over the lazy dog.');

$ctx = hash_init('sha256');
hash_update($ctx, 'The quick brown fox ');
hash_update($ctx, 'jumped over the lazy dog.');
$incremental_hash = hash_final($ctx);

echo $incremental_hash, PHP_EOL;
var_dump($hash === $incremental_hash);
?>
```

O exemplo acima produzirá:

```
68b1282b91de2c054c36629cb8dd447f12f096d3e3c587978dc2248444633483
bool(true)
```

### Veja também

- [hash\_algos()](function.hash-algos.md) - Retorna uma lista de algoritmos de hash registrados
- [hash\_update()](function.hash-update.md) - Injeta dados em um contexto de hash ativo
- [hash\_update\_file()](function.hash-update-file.md) - Injeta dados em um contexto de hash ativo a partir de um arquivo
- [hash\_update\_stream()](function.hash-update-stream.md) - Injeta dados em um contexto de hash ativo a partir de um fluxo
- [hash\_final()](function.hash-final.md) - Finaliza um hash incremental e retorna o resumo resultante

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
