# Driver PDO do Oracle (PDO_OCI)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-oci.php

---

# Driver PDO do Oracle (PDO\_OCI)

## Instalação

Se o banco de dados Oracle estiver na mesma máquina que o PHP, o software
de banco de dados já contém as bibliotecas necessárias. Quando o PHP estiver em
uma máquina diferente, use as bibliotecas gratuitas
[» Oracle Instant Client](https://www.oracle.com/database/technologies/instant-client.html).
Para obter detalhes, consulte a seção [Requisitos do OCI8](oci8.requirements.md).

## PHP 8.4

Esta extensão foi movida para o repositório [» PECL](https://pecl.php.net/)
e não é mais distribuída com o PHP desde a versão 8.4.0

Informações para instalar esta extensão PECL podem ser
encontradas no capítulo [Instalação de
Extensões PECL](install.pecl.md) do manual. Informações adicionais, como novas versões,
downloads, arquivos fontes, informações do mantenedor e um CHANGELOG, podem ser
encontradas aqui:
[» https://pecl.php.net/package/PDO\_OCI](https://pecl.php.net/package/PDO_OCI).

## PHP < 8.4

Use **--with-pdo-oci[=DIR]** para instalar
a extensão PDO Oracle OCI, onde o `[=DIR]` opcional
é o diretório base do Oracle. O padrão de `[=DIR]` é a variável
de ambiente $ORACLE\_HOME.

Use **--with-pdo-oci=instantclient,prefix,version**
para um SDK do Oracle Instant Client, onde o prefixo e
a versão são configurados.

```
// Usando $ORACLE_HOME
$ ./configure --with-pdo-oci

// Usando OIC para Linux com RPMs 10.2.0.3 e prefixo /usr
$ ./configure --with-pdo-oci=instantclient,/usr,10.2.0.3
```

## Constantes predefinidas

As constantes abaixo são definidas por
este driver e só estarão disponíveis quando a extensão tiver sido
compilada no PHP ou tiver sido carregada dinamicamente em tempo de execução. Além disso, estas
constantes específicas do driver só devem ser usadas se este driver estiver sendo usado.
Usar atributos específicos de um driver com outro driver pode resultar em
comportamento inesperado. [PDO::getAttribute()](pdo.getattribute.md) pode ser usada para
obter o atributo **`PDO::ATTR_DRIVER_NAME`** para verificar o
driver, se o código puder ser executado com vários drivers.

**`PDO::OCI_ATTR_ACTION`** ([int](language.types.integer.md))
:   Fornece uma maneira de especificar a ação na sessão do banco de dados.

    Isto existe a partir do PHP 7.2.16 e 7.3.3

**`PDO::OCI_ATTR_CLIENT_INFO`** ([int](language.types.integer.md))
:   Fornece uma maneira de especificar as informações do cliente na sessão do banco de dados.

    Isto existe a partir do PHP 7.2.16 e 7.3.3

**`PDO::OCI_ATTR_CLIENT_IDENTIFIER`** ([int](language.types.integer.md))
:   Fornece uma maneira de especificar o identificador do cliente na sessão do banco de dados.

    Isto existe a partir do PHP 7.2.16 e 7.3.3

**`PDO::OCI_ATTR_MODULE`** ([int](language.types.integer.md))
:   Fornece uma maneira de especificar o módulo na sessão do banco de dados.

    Isto existe a partir do PHP 7.2.16 e 7.3.3

## Índice

- [PDO\_OCI DSN](ref.pdo-oci.connection.md) — Conectando-se a bancos de dados Oracle

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
