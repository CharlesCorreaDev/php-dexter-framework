# Driver PDO do SQLite (PDO_SQLITE)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-sqlite.php

---

# Driver PDO do SQLite (PDO\_SQLITE)

## Introdução

PDO\_SQLITE é um driver que implementa a [Interface
de Objeto de Dados do PHP (PDO)](book.pdo.md#intro.pdo) para permitir o acesso a bancos de dados SQLite 3.

> **Nota**:
>
> O PDO\_SQLITE permite usar strings separadas de fluxos junto com
> **`PDO::PARAM_LOB`**.

## Instalação

O driver PDO PDO\_SQLITE está habilitado por padrão. Para desabilitá-lo,
a opção **--without-pdo-sqlite[=DIR]** pode ser usada,
onde o valor opcional `[=DIR]` é o diretório de instalação do sqlite.
A partir do PHP 7.4.0, a [» libsqlite](https://sqlite.org/) ≥ 3.5.0 é necessária.
Anteriormente, a libsqlite que vinha com o PHP poderia ser usada e era o
padrão se `[=DIR]` fosse omitido.

> **Nota**:
> **Configuração adicional no Windows a partir do PHP 7.4.0**  
>
> Para que esta extensão funcione, existem arquivos
> DLL que devem estar disponíveis no
> PATH do sistema Windows. Para saber como fazer isso, veja a
> FAQ intitulada "[Como eu adiciono o meu diretório PHP ao PATH
> do Windows](faq.installation.md#faq.installation.addtopath)". Embora copiar arquivos DLL
> da pasta do PHP para o diretório system do Windows também funcione
> (porque o diretório system está, por padrão, no PATH do sistema),
> isso não é recomendado.
> *Esta extensão requer que os seguintes arquivos estejam no
> PATH:* libsqlite3.dll.

## Índice

- [DSN PDO\_SQLITE](ref.pdo-sqlite.connection.md) — Conectando a bancos de dados SQLite
- [PDO::sqliteCreateAggregate](pdo.sqlitecreateaggregate.md) — Sinônimo de Pdo\Sqlite::createAggregate
- [PDO::sqliteCreateCollation](pdo.sqlitecreatecollation.md) — Sinônimo de Pdo\Sqlite::createCollation
- [PDO::sqliteCreateFunction](pdo.sqlitecreatefunction.md) — Sinônimo de Pdo\Sqlite::createFunction

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
