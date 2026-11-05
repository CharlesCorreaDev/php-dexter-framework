# Outras Mudanças

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration81.other-changes.php

---

## Outras Mudanças

### Mudanças nos Módulos SAPI

#### CLI

Usando **-a** sem a [extensão readline](book.readline.md) agora resultará em um erro.
Anteriormente, **-a** sem readline havia o mesmo comportamento que
chamar **php** sem nenhum argumento, além de imprimir uma mensagem adicional
`"Interactive mode enabled"`.
Esse modo *não* era interativo.

#### PHPDBG

Funcionalidade remota do [phpdbg](book.phpdbg.md) foi removida.

### Funções Alteradas

#### Core

A ordem das propriedades usadas em [`foreach`](control-structures.foreach.md), [var\_dump()](function.var-dump.md),
[serialize()](function.serialize.md), comparação de objetos, etc. foi alterada.
Propriedades agora são ordenadas naturalmente de acordo com a declaração
e herança deles. Propriedades declaradas em uma classe base estarão
antes das propriedades das filhas.

A ordem é consistente com o layout interno das propriedades na estrutura
`zend_object` e repete a ordem em
`default_properties_table[]` e `properties_info_table[]`.
A velha ordem não foi documentada e era causada por detalhes de implementação de herança de classes.

#### Filtro

A flag **`FILTER_FLAG_ALLOW_OCTAL`** do
filtro **`FILTER_VALIDATE_INT`**
agora aceita strings octais com o prefixo octal
(`"0o"`/`"0O"`).

#### GMP

Todas as funções [GMP](book.gmp.md) agora aceitam string octal com o prefixo octal
(`"0o"`/`"0O"`).

#### PDO ODBC

[PDO::getAttribute()](pdo.getattribute.md) com
**`PDO::ATTR_SERVER_INFO`** e
**`PDO::ATTR_SERVER_VERSION`**
agora retorna valores ao invés de lançar [PDOException](class.pdoexception.md).

#### Reflexão

[ReflectionProperty::setAccessible()](reflectionproperty.setaccessible.md) e
[ReflectionMethod::setAccessible()](reflectionmethod.setaccessible.md)
não têm mais efeito.
Propriedades e métodos agora são sempre considerados acessíveis via Reflexão.

#### Padrão

[syslog()](function.syslog.md) agora é segura para binários.

### Outras Mudanças em Extensões

#### GD

[imagewebp()](function.imagewebp.md) agora pode fazer codificação WebP lossless
passando **`IMG_WEBP_LOSSLESS`** como a qualidade.

Essa constante é definida apenas se a libgd utilizada suporta
codificação WebP lossless.

#### MySQLi

[mysqli\_stmt::next\_result()](mysqli-stmt.next-result.md) e
**mysqli::fetch\_all()**
agora estão disponíveis quando linkando contra libmysqlclient.

#### OpenSSL

- A [extensão OpenSSL](book.openssl.md)agora requer pelo menos OpenSSL versão 1.0.2.
- OpenSSL 3.0 agora é suportado. Esteja ciente que muitos cifradores não estão mais
  habilitados por padrão (parte do provedor legado), e que validação
  de parâmetros (p. ex.: tamanho mínimo de chaves) é mais estrita agora.

#### Phar

- SHA256 agora é usado por padrão para assinaturas.
- Adicionado suporte para assinaturas OpenSSL\_SHA256 e OpenSSL\_SHA512.

#### SNMP

- Adicionado suporte para SHA256 e SHA512 para o protocolo de segurança.

#### Padrão

`--with-password-argon2`agora usa pkg-config para detectar libargon2.
Como tal, o local para uma libgargon2 alternativa deve ser especificado usando
PKG\_CONFIG\_PATH.

### Mudanças no Tratamento de Arquivos INI

- A diretiva INI [log\_errors\_max\_len](errorfunc.configuration.md#ini.log-errors-max-len)
  foi removida.
  Ela não possui mais efeito desde o PHP 8.0.0.
- Um dólar no início de uma string entre aspas agora pode ser escapado: `"\${"` agora será
  interpretado como uma string de conteúdo `${`.
- Barras inversas em strings entre aspas duplas agora são mais consistentemente tratadas como
  caracteres de escape. Anteriormente, `"foo\\"` seguida de
  algo diferente de uma nova linha não era considerada uma string finalizada.
  Agora ela é interpretada como uma string de conteúdo `foo\`.
  No entanto, como uma exceção, a string `"foo\"`
  seguida de uma nova linha continuará sendo tratada como uma string válida de
  conteúdo `foo\` em vez de uma string não terminada.
  Essa exceção existe para suportar usos ingênuos de caminhos do Windows tais como
  `"C:\foo\"`.

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
