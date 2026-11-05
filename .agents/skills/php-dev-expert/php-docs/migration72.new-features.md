# Novas funcionalidades

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration72.new-features.php

---

## Novas funcionalidades

### Novo tipo: object

Um novo tipo, [object](language.types.object.md), foi introduzido e pode ser usado para
tipagem de parâmetro (contravariante) e tipagem de retorno (covariante) de qualquer
objeto.

```
<?php

function test(object $obj) : object
{
    return new SplQueue();
}

test(new stdClass());
```

### Carregamento de extensão por nome

Extensões compartilhadas não requerem mais que as extensões de arquivo
(`.so` para Unix ou `.dll` para Windows) sejam
especificadas. Isto está habilitado no arquivo php.ini, assim como na função
[dl()](function.dl.md).

### Substituição de método abstrato

Métodos abstratos agora podem ser substituídos quando uma classe abstrata estende
outra classe abstrata.

```
<?php

abstract class A
{
    abstract function test(string $s);
}
abstract class B extends A
{
    // substituído - ainda mantendo contravariância para parâmetros e covariância para retorno
    abstract function test($s) : int;
}
```

### [Sodium](book.sodium.md) agora é uma extensão do núcleo

A moderna biblioteca de criptografia Sodium agora se tornou uma extensão do núcleo do PHP.

Para uma referência completa da função consulte o capítulo
[Sodium](book.sodium.md).

### Hash de senha com Argon2

Argon2 foi adicionado à [API de hash de senha](book.password.md),
onde as seguintes constantes foram expostas:

- **`PASSWORD_ARGON2I`**
- **`PASSWORD_ARGON2_DEFAULT_MEMORY_COST`**
- **`PASSWORD_ARGON2_DEFAULT_TIME_COST`**
- **`PASSWORD_ARGON2_DEFAULT_THREADS`**

### Tipos estendidos de strings para [PDO](book.pdo.md)

O tipo string da PDO foi estendido para suportar o tipo de caractere nacional
ao emular preparações. Isto foi feito com as seguintes constantes:

- **`PDO::PARAM_STR_NATL`**
- **`PDO::PARAM_STR_CHAR`**
- **`PDO::ATTR_DEFAULT_STR_PARAM`**

Estas constantes são utilizadas com a operação binária `OR` entre elas e a constante
**`PDO::PARAM_STR`**:

```
<?php

$db->quote('über', PDO::PARAM_STR | PDO::PARAM_STR_NATL);
```

### Informação adicional de depuração de preparações emuladas para [PDO](book.pdo.md)

O método [PDOStatement::debugDumpParams()](pdostatement.debugdumpparams.md) foi atualizado
para incluir o SQL enviado ao BD, onde a consulta completa, crua,
(incluindo os marcadores substituídos com seus valores vinculados) será
mostrada. Isto foi adicionado para ajudar na depuração de preparações emuladas (e por isso
só estará disponível se preparações emuladas estiverem habilitadas).

### Suporte para operações estendidas em [LDAP](book.ldap.md)

Suporte para EXOP foi adicionado à extensão LDAP. Isto foi feito pela
exposição das seguintes funções e constantes:

- [ldap\_parse\_exop()](function.ldap-parse-exop.md)
- [ldap\_exop()](function.ldap-exop.md)
- [ldap\_exop\_passwd()](function.ldap-exop-passwd.md)
- [ldap\_exop\_whoami()](function.ldap-exop-whoami.md)
- **`LDAP_EXOP_START_TLS`**
- **`LDAP_EXOP_MODIFY_PASSWD`**
- **`LDAP_EXOP_REFRESH`**
- **`LDAP_EXOP_WHO_AM_I`**
- **`LDAP_EXOP_TURN`**

### Adição de informação de endereço à extensão [Sockets](book.sockets.md)

A extensão sockets agora tem a capacidade de procurar por Informação de Endereço, assim
como se conectar, vincular e explicar. As quatro funções a seguir
foram adicionadas para isto:

- [socket\_addrinfo\_lookup()](function.socket-addrinfo-lookup.md)
- [socket\_addrinfo\_connect()](function.socket-addrinfo-connect.md)
- [socket\_addrinfo\_bind()](function.socket-addrinfo-bind.md)
- [socket\_addrinfo\_explain()](function.socket-addrinfo-explain.md)

### Ampliação de tipo de parâmetro

Tipos de parâmetro de métodos substituídos e de implementações de interface
agora podem ser omitidos. Isto ainda está conforme LSP, já que os tipos
de parâmetros são contravariantes.

```
<?php

interface A
{
    public function Test(array $input);
}

class B implements A
{
    public function Test($input){} // tipo omitido para $input
}
```

### Permite-se uma vírgula no final de espaços de nomes agrupados

Uma vírgula agora pode ser adicionada ao final do grupo na sintaxe 'use' introduzida
no PHP 7.0.

```
<?php

use Foo\Bar\{
    Foo,
    Bar,
    Baz,
};
```

### Suporte à função [proc\_nice()](function.proc-nice.md) no Windows

A função [proc\_nice()](function.proc-nice.md) agora é suportada no Windows.

### Suporte à ordem de bytes nas funções [pack()](function.pack.md) e [unpack()](function.unpack.md)

As funções [pack()](function.pack.md) e [unpack()](function.unpack.md) agora suportam
tipos 'float' e 'double' em ambas as ordens de bytes Little Endian e Big Endian.

### Melhorias à extensão [EXIF](book.exif.md)

A extensão EXIF foi atualizada para suportar uma faixa de formatos bem maior. Isto
significa que suas etiquetas específicas de formatação agora são adequadamente traduzidas ao analisar
imagens com a função [exif\_read\_data()](function.exif-read-data.md). Os formatos a seguir agora são
suportados:

- Samsung
- DJI
- Panasonic
- Sony
- Pentax
- Minolta
- Sigma/Foveon
- AGFA
- Kyocera
- Ricoh
- Epson

As funções EXIF [exif\_read\_data()](function.exif-read-data.md) e [exif\_thumbnail()](function.exif-thumbnail.md)
agora suportam fluxos como seu primeiro argumento.

### Novas funcionalidades em [PCRE](book.pcre.md)

- O modificador `J` para configurar PCRE\_DUPNAMES foi adicionado.

### [SQLite3](book.sqlite3.md) permite escrever BLOBs

[SQLite3::openBlob()](sqlite3.openblob.md) agora permite abrir campos BLOB fields em
modo de escrita; anteriormente apenas leitura era suportada.

### Chamadas TAF (Transparent Application Failover) do [Oracle OCI8](book.oci8.md)

Suporte às [chamadas de Falha Transparente de Aplicação do Banco de Dados Oracle](oci8.taf.md)
foi adicionado. TAF permite que aplicações OCI8 do PHP OCI8 se
reconectem automaticamente a um banco de dados pré-configurado quando uma conexão
é perdida. O novo suporte à chamada TAF permite que aplicações PHP
monitorem e controlem a reconexão durante a falha.

### Melhorias à extensão [ZIP](book.zip.md)

Suporte foi adicionado a leitura e escrita de arquivos criptografados (requer libzip 1.2.0).

A classe [ZipArchive](class.ziparchive.md) agora implementa a interface
[Countable](class.countable.md).

O fluxo `zip://` agora aceita uma opção de contexto `'password'`.

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
