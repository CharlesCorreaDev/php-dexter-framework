# Cria um vetor de inicialização (IV) a partir de uma fonte aleatória

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-create-iv.php

---

# mcrypt\_create\_iv

(PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_create\_iv — Cria um vetor de inicialização (IV) a partir de uma fonte aleatória

**Aviso**

Esta função foi *DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0.

Alternativas a esta função incluem:

- [random\_bytes()](function.random-bytes.md)

### Descrição

function **mcrypt\_create\_iv**([int](language.types.integer.md) `$size`, [int](language.types.integer.md) `$source` = MCRYPT\_DEV\_URANDOM): [string](language.types.string.md)

Cria um vetor de inicialização (IV) a partir de uma fonte aleatória.

O IV serve apenas para dar uma semente alternativa às rotinas de criptografia.
Este IV não precisa ser secreto, embora possa ser
desejável. Pode-se até mesmo enviá-lo junto com o texto criptografado sem
perder a segurança.

### Parâmetros

`size`
:   O tamanho do IV.

`source`
:   A fonte do IV. A fonte pode ser
    **`MCRYPT_RAND`** (gerador de números aleatórios do sistema),
    **`MCRYPT_DEV_RANDOM`** (leitura de dados de
    /dev/random) e
    **`MCRYPT_DEV_URANDOM`** (leitura de dados de
    /dev/urandom). Antes da versão 5.3.0,
    **`MCRYPT_RAND`** era o único suportado no Windows.

    Observe que o valor padrão deste parâmetro era
    **`MCRYPT_DEV_RANDOM`** antes do PHP 5.6.0.

    > **Nota**:
    >
    > Observe que **`MCRYPT_DEV_RANDOM`** pode bloquear até que mais
    > entropia esteja disponível.

### Valor Retornado

Retorna o vetor de inicialização ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **mcrypt\_create\_iv()****

```
<?php
    $size = mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_CFB);
    $iv = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
?>
```

### Veja também

- [» http://www.ciphersbyritter.com/GLOSSARY.HTM#IV](http://www.ciphersbyritter.com/GLOSSARY.HTM#IV)
- [» http://www.quadibloc.com/crypto/co0409.htm](http://www.quadibloc.com/crypto/co0409.htm)
- Capítulo 9.3 de Applied Cryptography by Schneier (ISBN 0-471-11709-9)
- [random\_bytes()](function.random-bytes.md) - Obtém bytes aleatórios criptograficamente seguros

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
