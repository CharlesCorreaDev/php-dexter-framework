# Injeta dados em um contexto de hash ativo a partir de um fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hash-update-stream.php

---

# hash\_update\_stream

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1)

hash\_update\_stream — Injeta dados em um contexto de hash ativo a partir de um fluxo

### Descrição

function **hash\_update\_stream**([HashContext](class.hashcontext.md) `$context`, [resource](language.types.resource.md) `$stream`, [int](language.types.integer.md) `$length` = -1): [int](language.types.integer.md)

### Parâmetros

`context`
:   Contexto de hash retornado por [hash\_init()](function.hash-init.md).

`stream`
:   Identificador de arquivo aberto conforme retornado por qualquer função de criação de fluxo.

`length`
:   Número máximo de caracteres a serem copiados de `stream`
    para o contexto de hash.

### Valor Retornado

Número real de bytes adicionados ao contexto de hash de `stream`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | Aceita [HashContext](class.hashcontext.md) em vez de recurso. |

### Examples

**Exemplo #1 Exemplo de **hash\_update\_stream()****

```
<?php
$fp = tmpfile();
fwrite($fp, 'jumped over the lazy dog.');
rewind($fp);

$ctx = hash_init('sha256');
hash_update($ctx, 'The quick brown fox ');
hash_update_stream($ctx, $fp);
echo hash_final($ctx);
?>
```

O exemplo acima produzirá:

```
68b1282b91de2c054c36629cb8dd447f12f096d3e3c587978dc2248444633483
```

### Veja também

- [hash\_init()](function.hash-init.md) - Inicializa um contexto de hash incremental
- [hash\_update()](function.hash-update.md) - Injeta dados em um contexto de hash ativo
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
