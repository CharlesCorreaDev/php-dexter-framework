# Ativa e desativa o tratamento de erros com exceções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarexception.setusingexceptions.php

---

# RarException::setUsingExceptions

(PECL rar >= 2.0.0)

RarException::setUsingExceptions — Ativa e desativa o tratamento de erros com exceções

### Descrição

public static function **RarException::setUsingExceptions**([bool](language.types.boolean.md) `$using_exceptions`): [void](language.types.void.md)

Se e somente se o argumento for **`true`**, então, em vez de emitir avisos e retornar um valor especial indicando erro quando a biblioteca UnRAR encontrar um erro, uma exceção do tipo [RarException](class.rarexception.md) será lançada.

Exceções também serão lançadas para os seguintes erros, que ocorrem fora da biblioteca (seu código de erro será -1):

- tentar algumas operações em um objeto [RarArchive](class.rararchive.md) fechado ou em um objeto [RarEntry](class.rarentry.md) relativo ao primeiro;
- tentar obter uma entrada que não existe com [RarArchive::getEntry()](rararchive.getentry.md).

### Parâmetros

`using_exceptions`
:   Deve ser **`true`** para ativar o lançamento de exceções, **`false`** para desativar (o padrão).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **RarException::setUsingExceptions()****

```
<?php
var_dump(RarException::isUsingExceptions());
$arch = RarArchive::open("nao_existe.rar");
var_dump($arch);

RarException::setUsingExceptions(true);
var_dump(RarException::isUsingExceptions());
$arch = RarArchive::open("nao_existe.rar");
var_dump($arch); // não alcançado
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(false)

Warning: RarArchive::open(): Failed to open nao_existe.rar: ERAR_EOPEN (file open error) in C:\php_rar\trunk\tests\test.php on line 3
bool(false)
bool(true)

Fatal error: Uncaught exception 'RarException' with message 'unRAR internal error: Failed to open nao_existe.rar: ERAR_EOPEN (file open error)' in C:\php_rar\trunk\tests\test.php:8
Stack trace:
#0 C:\php_rar\trunk\tests\test.php(8): RarArchive::open('nao_existe....')
#1 {main}
  thrown in C:\php_rar\trunk\tests\test.php on line 8
```

### Veja também

- [RarException::isUsingExceptions()](rarexception.isusingexceptions.md) - Verifica se o tratamento de erros com exceções está em uso

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
