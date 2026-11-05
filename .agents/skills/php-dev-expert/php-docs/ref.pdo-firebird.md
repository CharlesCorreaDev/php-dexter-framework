# Driver PDO do Firebird (PDO_FIREBIRD)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-firebird.php

---

# Driver PDO do Firebird (PDO\_FIREBIRD)

## Introdução

PDO\_FIREBIRD é um driver que implementa a interface aos Objetos de Dados PHP (PDO)
para permitir acesso do PHP a bancos de dados Firebird.

## Instalação

Use **--with-pdo-firebird[=DIR]** para instalar
a extensão PDO Firebird, onde o `[=DIR]` opcional
é o diretório base de instalação do Firebird.

```
$ ./configure --with-pdo-firebird
```

A partir do PHP 8.4.0, esta extensão utiliza as APIs C++ do Firebird e, portanto,
requer um compilador C++ e deve ser compilada contra o fbclient 3.0
ou superior.

## Constantes predefinidas

As constantes abaixo são definidas por
este driver e só estarão disponíveis quando a extensão tiver sido
compilada no PHP ou tiver sido carregada dinamicamente em tempo de execução. Além disso, estas
constantes específicas do driver só devem ser usadas se este driver estiver sendo usado.
Usar atributos específicos de um driver com outro driver pode resultar em
comportamento inesperado. [PDO::getAttribute()](pdo.getattribute.md) pode ser usada para
obter o atributo **`PDO::ATTR_DRIVER_NAME`** para verificar o
driver, se o código puder ser executado com vários drivers.

**Aviso**

As constantes listadas abaixo foram *DESCONTINUADAS*
a partir do PHP 8.5.0. Use as constantes correspondentes de [Pdo\Firebird](class.pdo-firebird.md)
no lugar delas.

**`PDO::FB_ATTR_DATE_FORMAT`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Firebird::ATTR_DATE_FORMAT`**.

**`PDO::FB_ATTR_TIME_FORMAT`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Firebird::ATTR_TIME_FORMAT`**.

**`PDO::FB_ATTR_TIMESTAMP_FORMAT`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Firebird::ATTR_TIMESTAMP_FORMAT`**.

## Índice

- [PDO\_FIREBIRD DSN](ref.pdo-firebird.connection.md) — Conectando ao banco de dados Firebird

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
