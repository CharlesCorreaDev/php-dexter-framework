# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dba.installation.php

---

## Instalação

Usando a opção de configuração **--enable-dba=shared**,
é possível construir um módulo carregável dinâmico para habilitar o PHP
para suporte básico de bancos de dados estilo dbm. Deve-se também adicionar suporte
para pelo menos um dos seguintes manipuladores, especificando
**--with-XXXX** ou **--enable-XXXX** na linha de
configuração do PHP.

**Aviso**

Após configurar e compilar o PHP, deve-se executar o seguinte teste
na linha de comando: `php run-tests.php ext/dba`. Isso mostra
se a combinação de manipuladores funciona. Os mais problemáticos são
`dbm` e `ndbm` que entram em conflito com
muitas instalações. A razão para isto é que em vários sistemas estas
bibliotecas fazem parte de mais de uma outra biblioteca. O teste de configuração evita
apenas que sejam configurados manipuladores únicos com defeito, mas não
combinações.

**Manipuladores DBA suportados**

| Manipulador | Controles de configuração |
| --- | --- |
| `dbm` | Para ativar o suporte para dbm, adicione **--with-dbm[=DIR]**. **Nota**: dbm normalmente é um empacotador que geralmente resulta em falhas. Isso significa que só se deve usar dbm se houver certeza de que funciona e que este formato é realmente necessário. |
| `ndbm` | Para ativar o suporte para ndbm, adicione **--with-ndbm[=DIR]**. **Nota**: O ndbm normalmente é um empacotador que geralmente resulta em falhas. Isso significa que só se deve usar ndbm se houver certeza de que funciona e que este formato é realmente necessário. |
| `gdbm` | Para ativar o suporte para gdbm, adicione **--with-gdbm[=DIR]**. |
| `db2` | Para ativar o suporte para Oracle Berkeley DB 2, adicione **--with-db2[=DIR]**. **Nota**: db2 entra em conflito com db3 e db4. |
| `db3` | Para ativar o suporte para Oracle Berkeley DB 3, adicione **--with-db3[=DIR]**. **Nota**: db3 entra em conflito com db2 e db4. |
| `db4` | Para ativar o suporte para Oracle Berkeley DB 4 ou 5, adicione **--with-db4[=DIR]**. **Nota**: db4 entra em conflito com db2 e db3.  **Nota**: As bibliotecas db com versões 4.1 a 4.1.24 não podem ser usadas em nenhuma versão do PHP.  O suporte para BDB 5 foi adicionado no PHP 5.3.3. |
| `cdb` | Para ativar o suporte para cdb, adicione **--with-cdb[=DIR]**. **Nota**: Pode-se omitir DIR para usar a biblioteca cdb incluída que adiciona o manipulador cdb\_make que permite a criação de arquivos cdb e permite acessar arquivos cdb na rede usando fluxos do PHP. |
| `flatfile` | Para ativar o suporte para flatfile, adicione **--enable-flatfile**. Antes do PHP 5.2.1, o **--with-flatfile** tinha que ser usado no lugar. **Nota**: Isto foi adicionado para adicionar compatibilidade com a extensão `dbm` obsoleta. Use esse manipulador somente quando não for possível instalar uma das bibliotecas exigidas pelos outros manipuladores e quando não for possível usar o manipulador cdb incluído. |
| `inifile` | Para ativar o suporte para `inifile`, adicione **--enable-inifile**. Antes do PHP 5.2.1, o **--with-inifile** tinha que ser usado no lugar. **Nota**: Isto foi adicionado para permitir a leitura e configuração de arquivos .ini no estilo Microsoft (como o arquivo php.ini). |
| `qdbm` | Para ativar o suporte para qdbm, adicione **--with-qdbm[=DIR]**. **Nota**: qdbm entra em conflito com dbm e gdbm.  **Nota**: A biblioteca qdbm pode ser baixada em [» https://fallabs.com/qdbm/index.html](https://fallabs.com/qdbm/index.html). |
| `tcadb` | Para ativar o suporte para Tokyo Cabinet, adicione **--with-tcadb[=DIR]**. **Nota**: A bliblioteca Tokyo Cabinet pode ser baixada em [» https://fallabs.com/tokyocabinet/](https://fallabs.com/tokyocabinet/). |
| `lmdb` | Para ativar o suporte para Lightning Memory-Mapped, adicione **--with-lmdb[=DIR]**. **Nota**: Isso foi adicionado no PHP 7.2.0. A biblioteca de banco de dados Lightning Memory-Mapped pode ser baixada em [» https://symas.com/lmdb/](https://symas.com/lmdb/). |

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
