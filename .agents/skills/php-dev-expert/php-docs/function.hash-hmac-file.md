# Gera um valor hash com chave usando o método HMAC e o conteúdo de um arquivo fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hash-hmac-file.php

---

# hash\_hmac\_file

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1)

hash\_hmac\_file — Gera um valor hash com chave usando o método HMAC e o conteúdo de um arquivo fornecido

### Descrição

function **hash\_hmac\_file**(  
    [string](language.types.string.md) `$algo`,  
    [string](language.types.string.md) `$filename`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`,  
    [bool](language.types.boolean.md) `$binary` = **`false`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

### Parâmetros

`algo`
:   Nome do algoritmo de hash selecionado (por exemplo, `"sha256"`).
    Para uma lista de algoritmos suportados, veja [hash\_hmac\_algos()](function.hash-hmac-algos.md).
    > **Nota**:
    >
    > Funções de hash não criptográficas não são permitidas.

`filename`
:   URL descrevendo o local do arquivo a ter o hash gerado; Suporta empacotadores fopen.

`key`
:   Chave secreta compartilhada usada para gerar a variante HMAC do resumo da mensagem.

`binary`
:   Quando definido como **`true`**, gera dados binários brutos.
    **`false`** gera caracteres hexadecimais minúsculos.

### Valor Retornado

Retorna uma string contendo o resumo da mensagem calculado como caracteres hexadecimais minúsculos
a menos que `binary` esteja definido como true, caso em que a representação binária bruta
do resumo da mensagem é retornada.
Retorna **`false`** se o arquivo `filename` não puder ser lido.

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) se
`algo` for desconhecido ou for uma função hash não criptográfica.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Agora lança uma exceção [ValueError](class.valueerror.md) se `algo` for desconhecido ou for uma função hash não criptográfica; anteriormente, **`false`** era retornado e uma mensagem **`E_WARNING`** era emitida. |
| 7.2.0 | O uso de funções de hash não criptográficas (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) foi desabilitado. |

### Examples

**Exemplo #1 Exemplo de **hash\_hmac\_file()****

```
<?php
/*  Cria um arquivo para cálculo de seu hash */
file_put_contents('example.txt', 'The quick brown fox jumped over the lazy dog.');

echo hash_hmac_file('sha256', 'example.txt', 'secret');
?>
```

O exemplo acima produzirá:

```
9c5c42422b03f0ee32949920649445e417b2c634050833c5165704b825c2a53b
```

### Veja também

- [hash\_hmac()](function.hash-hmac.md) - Gera um valor de hash com chave usando o método HMAC
- [hash\_hmac\_algos()](function.hash-hmac-algos.md) - Retorna uma lista de algoritmos de hash registrados adequados para hash\_hmac
- [hash\_init()](function.hash-init.md) - Inicializa um contexto de hash incremental
- [hash\_equals()](function.hash-equals.md) - Comparação de strings segura para ataque de temporização

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
