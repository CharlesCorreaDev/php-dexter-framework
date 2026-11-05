# Gera um valor hash usando o conteúdo de um arquivo fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hash-file.php

---

# hash\_file

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1)

hash\_file — Gera um valor hash usando o conteúdo de um arquivo fornecido

### Descrição

function **hash\_file**(  
    [string](language.types.string.md) `$algo`,  
    [string](language.types.string.md) `$filename`,  
    [bool](language.types.boolean.md) `$binary` = **`false`**,  
    [array](language.types.array.md) `$options` = []  
): [string](language.types.string.md)|[false](language.types.singleton.md)

### Parâmetros

`algo`
:   Nome do algoritmo de hash selecionado (por exemplo, `"sha256"`).
    Para uma lista de algoritmos suportados, veja [hash\_algos()](function.hash-algos.md).

`filename`
:   URL que descreve o local do arquivo a ter o hash gerado; Suporta empacotadores [fopen()](function.fopen.md).

`binary`
:   Quando definido como **`true`**, gera dados binários brutos.
    **`false`** caracteres gera hexadecimais minúsculos.

`options`
:   Um array de opções para os vários algoritmos de hash.
    Atualmente, apenas o parâmetro `"seed"` é
    suportado pelas variantes MurmurHash.

### Valor Retornado

Retorna uma string contendo o resumo da mensagem calculado como caracteres hexadecimais minúsculos
a menos que `binary` seja definido como true, caso em que a representação binária bruta
do resumo da mensagem é retornada, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `options` foi adicionado. |

### Examples

**Exemplo #1 Usando **hash\_file()****

```
<?php
/* Cria um arquivo para cálculo de seu hash */
file_put_contents('example.txt', 'The quick brown fox jumped over the lazy dog.');

echo hash_file('sha256', 'example.txt');
?>
```

O exemplo acima produzirá:

```
68b1282b91de2c054c36629cb8dd447f12f096d3e3c587978dc2248444633483
```

### Veja também

- [hash\_init()](function.hash-init.md) - Inicializa um contexto de hash incremental
- [hash\_hmac\_file()](function.hash-hmac-file.md) - Gera um valor hash com chave usando o método HMAC e o conteúdo de um arquivo fornecido

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
