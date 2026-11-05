# Valida uma string de configuração de criptografia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.crypt-checksalt.php

---

# crypt\_checksalt

(PECL xpass >= 1.1.0)

crypt\_checksalt — Valida uma string de configuração de criptografia

### Descrição

function **crypt\_checksalt**([string](language.types.string.md) `$salt`): [?](language.types.null.md)[string](language.types.string.md)

Verifica a string de salt em relação à configuração do sistema e informa se
o método de hash e os parâmetros especificados são aceitáveis.
Destina-se a ser usado para determinar se a frase-senha do usuário deve
ser refeita com hash usando o método de hash preferido no momento.

### Parâmetros

`salt`
:   String de salt para verificar.

### Valor Retornado

Retorna uma das constantes
**`CRYPT_SALT_*`**
como um [int](language.types.integer.md).

### Examples

**Exemplo #1 Um exemplo de **crypt\_checksalt()****

```
<?php
// Gera um salt para um método legado
$salt = crypt_gensalt(CRYPT_PREFIX_STD_DES);
// Verifica o salt
$test = crypt_checksalt($salt);
var_dump($test === CRYPT_SALT_METHOD_LEGACY);

// Gera um salt para um método padrão
$salt = crypt_gensalt();
// Verifica o salt
$test = crypt_checksalt($salt);
var_dump($test === CRYPT_SALT_OK);
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
```

### Veja também

- [crypt\_gensalt()](function.crypt-gensalt.md) - Compila uma string para uso como argumento salt para crypt

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
