# Outras mudanças

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration74.other-changes.php

---

## Outras mudanças

### Melhorias de desempenho

#### Núcleo do PHP

Um opcode VM especializado para a função [array\_key\_exists()](function.array-key-exists.md)
foi adicionado, o que melhora o desempenho desta função se ela
puder ser resolvida estaticamente. No código com namespace, pode ser necessário
escrever `\array_key_exists()` ou importar explicitamente
a função.

#### Expressões regulares (Compatível com Perl)

Quando [preg\_match()](function.preg-match.md) no modo UTF-8 (modificador `"u"`)
é chamado repetidamente na mesma string (mas possivelmente deslocamentos diferentes),
ele só será verificado para a validade UTF-8 uma vez.

### Alterações na manipulação de arquivos INI

[zend.exception\_ignore\_args](ini.core.md#ini.zend.exception-ignore-args) é uma nova diretiva INI
para incluir ou excluir argumentos de rastreamentos de pilha gerados
a partir de exceções.

[opcache.preload\_user](opcache.configuration.md#ini.opcache.preload-user) é uma nova diretiva INI
para especificar a conta de usuário sob a qual o código de
pré-carregamento é executado se, de outra forma, for executado como root (o que não é
permitido por motivos de segurança).

### Migração para pkg-config

Várias extensões foram migradas para usar exclusivamente pkg-config para a
detecção de dependências de biblioteca. Geralmente, isso significa que, em vez de usar
**--with-foo-dir=DIR** ou similar, apenas
**--with-foo** é usado. Os caminhos de biblioteca
personalizados podem ser especificados adicionando diretórios adicionais a `PKG_CONFIG_PATH`
ou especificando explicitamente as opções de compilação por meio de `FOO_CFLAGS`
e `FOO_LIBS`.

As seguintes extensões e SAPIs são afetadas:

- CURL:

  - **--with-curl** não aceita mais um diretório.
- Enchant:

  - **--with-enchant** não aceita mais um diretório.
- FPM:

  - **--with-fpm-systemd** agora usa apenas pkg-config
    para verificações do libsystem. A versão mínima exigida do libsystemd é 209.
- GD:

  - **--with-gd** torna-se
    **--enable-gd**
    (se para habilitar a extensão) e
    **--with-external-gd**
    (para optar por usar um libgd externo, em vez do empacotado).
  - **--with-png-dir** foi removido. libpng é obrigatório.
  - **--with-zlib-dir** foi removido. zlib é necessário.
  - **--with-freetype-dir**
    torna-se **--with-freetype**
  - **--with-jpeg-dir** torna-se
    **--with-jpeg**
  - **--with-webp-dir** torna-se
    **--with-webp**
  - **--with-xpm-dir** torna-se
    **--with-xpm**
- IMAP:

  - **--with-kerberos-systemd** não aceita mais um diretório.
- Intl:

  - **--with-icu-dir** foi removido.
    Se **--enable-intl** é passado,
    então libicu é sempre necessário.
- LDAP:

  - **--with-ldap-sasl** não aceita mais um diretório.
- Libxml:

  - **--with-libxml-dir** foi removido.
  - **--enable-libxml** torna-se
    **--with-libxml**.
  - **--with-libexpat-dir** foi renomeado para
    **--with-expat** e não aceita mais um diretório.
- LiteSpeed:

  - **--with-litespeed** torna-se
    **--enable-litespeed**.
- Mbstring:

  - **--with-onig** foi removido.
    A menos que **--disable-mbregex**
    foi passado, libonig é necessário.
- ODBC:

  - **--with-iodbc** não aceita mais um diretório.
  - **--with-unixODBC** sem um diretório agora
    usa pkg-config (preferencial). O diretório ainda é aceito para versões antigas sem libodbc.pc.
- OpenSSL:

  - **--with-openssl** não aceita mais um diretório.
- PCRE:

  - **--with-pcre-regex** foi removido.
    Em vez disso, **--with-external-pcre**
    é fornecido para optar por usar uma biblioteca PCRE externa,
    em vez do pacote.
- PDO\_SQLite:

  - **--with-pdo-sqlite** não aceita mais um diretório.
- Readline:

  - **--with-libedit** não aceita mais um diretório.
- Sodium:

  - **--with-sodium** não aceita mais um diretório.
- SQLite3:

  - **--with-sqlite3** não aceita mais um diretório.
- XSL:

  - **--with-xsl** não aceita mais um diretório.
- Zip:

  - **--with-libzip** foi removido.
  - **--enable-zip** torna-se
    **--with-zip**.

### CSV escaping

[fputcsv()](function.fputcsv.md),
[fgetcsv()](function.fgetcsv.md),
[SplFileObject::fputcsv()](splfileobject.fputcsv.md),
[SplFileObject::fgetcsv()](splfileobject.fgetcsv.md), e
[SplFileObject::setCsvControl()](splfileobject.setcsvcontrol.md)
agora aceitam uma string vazia como argumento `$escape`,
que desativa o mecanismo de escape proprietário do PHP.

O comportamento de [str\_getcsv()](function.str-getcsv.md) foi ajustado
adequadamente (anteriormente, uma string vazia era idêntica
a usar o padrão).

[SplFileObject::getCsvControl()](splfileobject.getcsvcontrol.md) agora também
pode retornar uma string vazia para o terceiro elemento do array, adequadamente.

### Filtragem de Dados

A extensão [filter](book.filter.md) não expõe mais
**--with-pcre-dir** para compilações Unix e agora pode ser
construída de forma confiável como compartilhada ao usar **./configure**

### GD

O comportamento de [imagecropauto()](function.imagecropauto.md) no pacote
libgd foi sincronizado com o do sistema libgd:

- **`IMG_CROP_DEFAULT`** não está mais voltando
  para **`IMG_CROP_SIDES`**
- Threshold-cropping agora usa o algoritmo do sistema libgd

O parâmetro `$mode` padrão de ]
[imagecropauto()](function.imagecropauto.md) foi alterado para
**`IMG_CROP_DEFAULT`**; passar `-1`
agora está descontinuado.

[imagescale()](function.imagescale.md) agora oferece suporte à proporção preservando
a escala para uma altura fixa passando `-1`
como `$new_width`.

### HASH Message Digest Framework

A extensão [hash](book.hash.md) não pode mais ser desativada
e é sempre parte integrante de qualquer compilação do PHP, semelhante
à extensão [date](book.datetime.md).

### Intl

A extensão [intl](book.intl.md)
agora requer pelo menos ICU 50.1.

[ResourceBundle](class.resourcebundle.md) agora implementa
[Countable](class.countable.md).

### Lightweight Directory Access Protocol

O suporte para nsldap e umich\_ldap foi removido.

### Libxml

Todas as extensões baseadas em libxml agora requerem libxml 2.7.6 ou mais recente.

### Multibyte String

A biblioteca oniguruma não é mais empacotada com o PHP, em vez disso libonig
precisa estar disponível no sistema. Alternativamente,
**--disable-mbregex** pode ser usado para desabilitar
o componente mbregex.

### OPcache

As opções de configuração **--disable-opcache-file** e
**--enable-opcache-file** foram removidas
em favor da diretiva
INI [opcache.file\_cache](opcache.configuration.md#ini.opcache.file-cache).

### Password Hashing

As funções [password\_hash()](function.password-hash.md) e
[password\_needs\_rehash()](function.password-needs-rehash.md) agora
aceitam [string](language.types.string.md) anulável e [int](language.types.integer.md) para o argumento `$algo`.

### PEAR

A instalação do PEAR (incluindo PECL) não é mais habilitada por padrão. Ele
pode ser ativado explicitamente usando **--with-pear**.
Esta opção está descontinuada e pode ser removida no futuro.

### Reflection

Os valores numéricos das constantes do modificador
(`IS_ABSTRACT`,
`IS_DEPRECATED`,
`IS_EXPLICIT_ABSTRACT`,
`IS_FINAL`,
`IS_IMPLICIT_ABSTRACT`,
`IS_PRIVATE`,
`IS_PROTECTED`,
`IS_PUBLIC`, e
`IS_STATIC`) nas classes
[ReflectionClass](class.reflectionclass.md),
[ReflectionFunction](class.reflectionfunction.md),
[ReflectionMethod](class.reflectionmethod.md),
[ReflectionObject](class.reflectionobject.md), e
[ReflectionProperty](class.reflectionproperty.md)
foram alterados.

### SimpleXML

[SimpleXMLElement](class.simplexmlelement.md) agora implementa
[Countable](class.countable.md).

### SQLite3

O pacote libsqlite foi removido. Para construir a extensão
[SQLite3](book.sqlite3.md),
um sistema libsqlite3 ≥ 3.7.4 agora é necessário. Para construir a extensão
[PDO\_SQLite](ref.pdo-sqlite.md),
um sistema libsqlite3 ≥ 3.5.0 agora é necessário.

A serialização e desserialização de [SQLite3](class.sqlite3.md),
[SQLite3Stmt](class.sqlite3stmt.md) e [SQLite3Result](class.sqlite3result.md)
agora são explicitamente proibidas. Anteriormente, a serialização de instâncias
dessas classes era possível, mas a desserialização produzia objetos inutilizáveis.

A notação `@param` agora também pode ser usada para
denotar parâmetros de consulta SQL.

### Zip

A biblioteca libzip empacotada foi removida.
Um sistema libzip >= 0.11 agora é necessário para construir a
extensão [zip](book.zip.md).

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
