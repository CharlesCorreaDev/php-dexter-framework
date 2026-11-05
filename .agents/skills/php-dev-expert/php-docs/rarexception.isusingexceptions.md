# Verifica se o tratamento de erros com exceções está em uso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarexception.isusingexceptions.php

---

# RarException::isUsingExceptions

(PECL rar >= 2.0.0)

RarException::isUsingExceptions — Verifica se o tratamento de erros com exceções está em uso

### Descrição

public static function **RarException::isUsingExceptions**(): [bool](language.types.boolean.md)

Verifica se as funções RAR emitirão avisos e retornarão valores de erro ou se
lançarão exceções na maioria das circunstâncias (não inclui alguns erros programáticos,
como passar o tipo errado de argumentos).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se exceções estão sendo usadas, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **RarException::isUsingExceptions()****

```
<?php
//O padrão é não usar exceções
var_dump(RarException::isUsingExceptions());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(false)
```

### Veja também

- [RarException::setUsingExceptions()](rarexception.setusingexceptions.md) - Ativa e desativa o tratamento de erros com exceções

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
