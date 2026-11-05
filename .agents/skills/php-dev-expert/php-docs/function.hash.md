# Gera um valor hash (resumo da mensagem)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hash.php

---

# hash

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1)

hash — Gera um valor hash (resumo da mensagem)

### Descrição

function **hash**(  
    [string](language.types.string.md) `$algo`,  
    [string](language.types.string.md) `$data`,  
    [bool](language.types.boolean.md) `$binary` = **`false`**,  
    [array](language.types.array.md) `$options` = []  
): [string](language.types.string.md)

### Parâmetros

`algo`
:   Nome do algoritmo de hash selecionado (por exemplo, `"sha256"`).
    Para uma lista de algoritmos suportados, veja [hash\_algos()](function.hash-algos.md).

`data`
:   Mensagem a ter o hash gerado.

`binary`
:   Quando definido como **`true`**, gera dados binários brutos.
    **`false`** gera caracteres hexadecimais minúsculos.

`options`
:   Um array de opções para os vários algoritmos de hash.
    Atualmente, apenas o parâmetro `"seed"` é
    suportado pelas variantes MurmurHash.

### Valor Retornado

Retorna uma string contendo o resumo da mensagem calculado como caracteres hexadecimais minúsculos
a menos que `binary` seja definido como true, caso em que a representação binária bruta
do resumo da mensagem é retornada.

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) se
`algo` for desconhecido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `options` foi adicionado. |
| 8.0.0 | Agora lança uma exceção [ValueError](class.valueerror.md) se `algo` for desconhecido; anteriormente, **`false`** era retornado e uma mensagem **`E_WARNING`** era emitida. |

### Examples

**Exemplo #1 Um exemplo de **hash()****

```
<?php
echo hash('sha256', 'The quick brown fox jumped over the lazy dog.');
?>
```

O exemplo acima produzirá:

```
68b1282b91de2c054c36629cb8dd447f12f096d3e3c587978dc2248444633483
```

### Veja também

- [hash\_init()](function.hash-init.md) - Inicializa um contexto de hash incremental
- [hash\_file()](function.hash-file.md) - Gera um valor hash usando o conteúdo de um arquivo fornecido
- [hash\_hmac()](function.hash-hmac.md) - Gera um valor de hash com chave usando o método HMAC

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
