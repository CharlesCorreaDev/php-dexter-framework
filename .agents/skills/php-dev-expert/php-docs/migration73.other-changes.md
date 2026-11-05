# Outras mudanças

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration73.other-changes.php

---

## Outras mudanças

### Núcleo do PHP

#### Set(raw)cookie aceita Argumento $option

[setcookie()](function.setcookie.md) e [setrawcookie()](function.setrawcookie.md) agora também
suportam a seguinte assinatura:

function [setcookie](function.setcookie.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value` = "", [array](language.types.array.md) `$options` = []): [bool](language.types.boolean.md)

onde `$options` é um array associativo que pode ter
qualquer uma das chaves `"expires"`, `"path"`,
`"domain"`, `"secure"`,
`"httponly"` e `"samesite"`.

#### Novas Diretivas Syslog ini

As seguintes diretivas ini foram adicionadas para personalizar o log, se
[error\_log](errorfunc.configuration.md#ini.error-log) for definido como
`syslog`:

[syslog.facility](errorfunc.configuration.md#ini.syslog.facility)
:   Especifica que tipo de programa está registrando a mensagem.

[syslog.filter](errorfunc.configuration.md#ini.syslog.filter)
:   Especifica o tipo de filtro para filtrar as mensagens registradas, com os
    tipos de filtro suportados - `all`,
    `no-ctrl` e `ascii`.
    A partir do PHP 7.3.8, o `raw` também está disponível,
    restaurando o comportamento do syslog nas versões anteriores do PHP.
    Este filtro também afetará as chamadas para [syslog()](function.syslog.md).

[syslog.ident](errorfunc.configuration.md#ini.syslog.ident)
:   Especifica a string de identificação que é anexada a cada mensagem.

#### Garbage Collection

O [cyclic GC](features.gc.collecting-cycles.md) foi
aprimorado, o que pode resultar em melhorias consideráveis de desempenho.

#### Diversos

[var\_export()](function.var-export.md) agora exporta objetos [stdClass](class.stdclass.md)
como um array convertido em um objeto (`(object) array( ... )`), em vez de
usar o método inexistente **stdClass::\_\_setState()**.

[debug\_zval\_dump()](function.debug-zval-dump.md) foi alterado para exibir arrays
e objetos recursivos da mesma forma que [var\_dump()](function.var-dump.md). Agora, ele não
os exibe duas vezes.

[array\_push()](function.array-push.md) e [array\_unshift()](function.array-unshift.md) agora
também podem ser chamados com um único argumento, o que é particularmente conveniente
wrt. O operador de spread.

### Interactive PHP Debugger

As constantes não utilizadas **`PHPDBG_FILE`**,
**`PHPDBG_METHOD`**, **`PHPDBG_LINENO`** e
**`PHPDBG_FUNC`** foram removidas.

### FastCGI Process Manager

A função [getallheaders()](function.getallheaders.md) agora também está disponível.

### Client URL Library

libcurl ≥ 7.15.5 agora é necessário.

### Filtragem de Dados

**`FILTER_VALIDATE_FLOAT`** agora também suporta a opção `thousand`,
que define o conjunto de caracteres separadores de mil permitidos. O padrão
(`"',."`) é totalmente compatível com versões anteriores do PHP.

**`FILTER_SANITIZE_ADD_SLASHES`** foi adicionado como um alias do filtro
`magic_quotes` (**`FILTER_SANITIZE_MAGIC_QUOTES`**).
O filtro `magic_quotes` está sujeito a remoção em versões futuras do PHP.

### FTP

O modo de transferência padrão foi alterado para `binary`..

### Funções de Internacionalização

**`Normalizer::NONE`** está descontinuada, quando o PHP está vinculado com
ICU ≥ 56.

Introduzido N**`Normalizer::FORM_KC_CF`** como
argumento [Normalizer::normalize()](normalizer.normalize.md) para
normalização `NFKC_Casefold` disponível quando vinculado a
ICU ≥ 56.

### JSON

Uma nova flag foi adicionada, **`JSON_THROW_ON_ERROR`**, que pode ser
usado com [json\_decode()](function.json-decode.md) ou
[json\_encode()](function.json-encode.md) e faz com que essas funções lancem o novo
[JsonException](class.jsonexception.md) em caso de erro, em vez de definir o estado de
erro global que é recuperado com
[json\_last\_error()](function.json-last-error.md) e [json\_last\_error\_msg()](function.json-last-error-msg.md).
**`JSON_PARTIAL_OUTPUT_ON_ERROR`** tem precedência sobre
**`JSON_THROW_ON_ERROR`**.

### Multibyte String

A opção de configuração **--with-libmbfl**
não está mais disponível.

### ODBC (Unificado)

O suporte para `ODBCRouter` e `Birdstep`,
incluindo a diretiva ini `birdstep.max_links`, foi
removido.

### OPcache

A diretiva ini `opcache.inherited_hack` foi removida.
O valor já foi ignorado desde o PHP 5.3.0.

### OpenSSL

As opções de fluxo ssl `min_proto_version` e `max_proto_version`,
bem como constantes relacionadas para possíveis valores de protocolo TLS
foram adicionadas.

### Expressões Regulares (Compatíveis com Perl)

A [extensão PCRE](book.pcre.md) foi atualizada para
PCRE2, o que pode causar pequenas alterações comportamentais (por exemplo, intervalos de
caracteres em classes agora são interpretados com mais rigor) e aumenta a
sintaxe de expressão regular existente.

[preg\_quote()](function.preg-quote.md) agora também escapa do caractere
`'#'`.

### Funções Microsoft SQL Server e Sybase (PDO\_DBLIB)

O atributo **`PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS`** para habilitar o
salto automático de conjuntos de linhas vazios foi adicionado.

O atributo **`PDO::DBLIB_ATTR_TDS_VERSION`** que expõe a versão
TDS foi adicionado

As colunas DATETIME2 agora são tratadas como colunas DATETIME.

### Funções SQLite (PDO\_SQLITE)

Os bancos de dados SQLite3 agora podem ser abertos no modo somente leitura, definindo o novo
atributo **`PDO::SQLITE_ATTR_OPEN_FLAGS`** como
**`PDO::SQLITE_OPEN_READONLY`**.

### Tratamento de Sessão

[session\_set\_cookie\_params()](function.session-set-cookie-params.md) agora também suporta a
seguinte assinatura:

function [session\_set\_cookie\_params](function.session-set-cookie-params.md)([array](language.types.array.md) `$options`): [bool](language.types.boolean.md)

onde `$options` é um array associativo que pode ter
qualquer uma das chaves `"lifetime"`, `"path"`,
`"domain"`, `"secure"`,
`"httponly"` e `"samesite"` Da mesma forma,
o valor de retorno de [session\_get\_cookie\_params()](function.session-get-cookie-params.md) agora também
possui um elemento com a chave `"samesite"`.
Além disso, foi adicionada a nova opção ini `session.cookie_samesite` para
definir o padrão da diretiva SameSite para cookies. O padrão
é `""` (string vazia), portanto, nenhuma diretiva SameSite é
definida. Pode ser definido como `"Lax"` ou `"Strict"`,
que define a respectiva diretiva SameSite.

### Tidy

Construir contra [» tidyp](https://github.com/petdance/tidyp) agora também é
suportado de forma transparente. Uma vez que o tidyp não oferece nenhuma API para obter a data de lançamento,
[tidy\_get\_release()](tidy.getrelease.md) e [tidy::getRelease()](tidy.getrelease.md)
retornam `'unknown'` neste caso.

### Analisador de XML

O valor de retorno do retorno de chamada [xml\_set\_external\_entity\_ref\_handler()](function.xml-set-external-entity-ref-handler.md)
não é mais ignorado se a extensão tiver sido criada em libxml.
Anteriormente, o valor de retorno era ignorado e a análise nunca parava.

### Zip

Compilar com o pacote libzip é desencorajado, mas ainda é possível
adicionando **--without-libzip** à configuração.

### Compressão Zlib

A opção de contexto zlib/level para o empacotador [empacotador compress.zlib](wrappers.compression.md) para facilitar a
configuração do nível de compactação desejado foi adicionada.

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
