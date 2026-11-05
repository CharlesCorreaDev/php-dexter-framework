# Alterações incompatíveis com versões anteriores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration81.incompatible.php

---

## Alterações incompatíveis com versões anteriores

### Núcleo do PHP

#### Restrições de acesso ao $GLOBALS

Acesso ao array [$GLOBALS](reserved.variables.globals.md) agora está sujeito a
uma série de restrições.
Acesso de leitura e escrita a elementos individuais de array como
`$GLOBALS['var']` continuam funcionando como estão.
Acesso somente leitura para todo o array [$GLOBALS](reserved.variables.globals.md) também
continua a ser suportado.
No entanto, o acesso de escrita para todo o array [$GLOBALS](reserved.variables.globals.md)
não é mais suportado. Por exemplo, `array_pop($GLOBALS)`
resultará em um erro.

#### Uso de variáveis static em Métodos Herdados

Quando um método usando variáveis estáticas é herdado (mas não sobreposto), o
método herdado agora irá compartilhar variáveis estáticas com o método pai.

```
<?php
class A {
    public static function counter() {
        static $counter = 0;
        $counter++;
        return $counter;
    }
}
class B extends A {}
var_dump(A::counter()); // int(1)
var_dump(A::counter()); // int(2)
var_dump(B::counter()); // int(3), anteriormente int(1)
var_dump(B::counter()); // int(4), anteriormente int(2)
?>
```

Isso significa que variáveis estáticas em métodos agora se comportam da mesma maneira que
propriedades estáticas.

#### Parâmetros opcionais especificados antes de parâmetros obrigatórios

Um [parâmetro opcional](functions.arguments.md#functions.arguments.default)
especificado antes de parâmetros obrigatórios agora é sempre tratado como obrigatório,
mesmo ao chamar usando
[argumentos nomeados](functions.arguments.md#functions.named-arguments).
A partir do PHP 8.0.0, mas antes do PHP 8.1.0, a função abaixo emite um aviso de descontinuação
na definição, mas executa com sucesso quando chamada. A partir do PHP 8.1.0, um erro
da classe [ArgumentCountError](class.argumentcounterror.md) é lançado, assim como seria lançado ao
chamar argumentos posicionais.

```
<?php
function fazeriogurte($recipiente = "tigela", $sabor)
{
    return "Fazendo um(a) $recipiente de iogurte de $sabor.\n";
}
try
{
    echo fazeriogurte(sabor: "framboesa");
}
catch (Error $e)
{
    echo get_class($e), ' - ', $e->getMessage(), "\n";
}
?>
```

Saída do exemplo acima no PHP 8.0:

```
Deprecated: Required parameter $sabor follows optional parameter $recipiente
 in example.php on line 3
Fazendo um(a) tigela de iogurte de framboesa.
```

Saída do exemplo acima no PHP 8.1:

```
Deprecated: Optional parameter $recepiente declared before required parameter
 $sabor is implicitly treated as a required parameter in example.php on line 3
ArgumentCountError - fazeriogurte(): Argument #1 ($recepiente) not passed
```

Note que um valor padrão de **`null`** pode ser usado antes de parâmetros obrigatórios para
especificar um [tipo anulável](language.types.declarations.md#language.types.declarations.nullable),
mas o parâmetro ainda será obrigatório.

#### Compatibilidade de Tipo de Retorno com Classes Internas

A maioria dos métodos internos não-finais agora obrigam métodos que fazem sobrescrita a declarar
um tipo de retorno compatível, do contrário um aviso de descontinuação é emitido durante
a validação de herança.
Caso o tipo de retorno não possa ser declarado para um método que faz sobrescrita devido a
questões de compatilidade entre versões PHP,
um atributo [ReturnTypeWillChange](class.returntypewillchange.md) pode ser adicionado para silenciar
o aviso de descontinuação.

#### Novas Palavras-chave

`readonly` agora é uma palavra-chave. No entanto, ela ainda pode ser usada
como nome de função.

`never` agora é uma palavra reservada, então ela não pode ser usada para nomear uma classe,
interface ou trait, e também é proibida de ser usada em namespaces.

### Migração de Recurso para Objeto

Diversos [resource](language.types.resource.md)s foram migrados para [object](language.types.object.md)s.
Checagens de valor de retorno usando [is\_resource()](function.is-resource.md) devem ser trocadas para checagens por **`false`**.

- As funções [FileInfo](book.fileinfo.md) agora aceitam e retornam
  objetos [finfo](class.finfo.md) em vez de
  [resource](language.types.resource.md)s `fileinfo`.
- As funções [FTP](book.ftp.md) agora aceitam e retornam
  objetos [FTP\Connection](class.ftp-connection.md) em vez de
  [resource](language.types.resource.md)s `ftp`.
- As funções [IMAP](book.imap.md) agora aceitam e retornam
  objetos [IMAP\Connection](class.imap-connection.md) em vez de
  [resource](language.types.resource.md)s `imap`.
- As funções [LDAP](book.ldap.md) agora aceitam e retornam
  objetos [LDAP\Connection](class.ldap-connection.md) em vez de
  [resource](language.types.resource.md)s `ldap link`.
- As funções [LDAP](book.ldap.md) agora aceitam e retornam
  objetos [LDAP\Result](class.ldap-result.md) em vez de
  [resource](language.types.resource.md)s `ldap result`.
- As funções [LDAP](book.ldap.md) agora aceitam e retornam
  objetos [LDAP\ResultEntry](class.ldap-result-entry.md) em vez de
  [resource](language.types.resource.md)s `ldap result entry`.
- As funções [PgSQL](book.pgsql.md) agora aceitam e retornam
  objetos [PgSql\Connection](class.pgsql-connection.md) em vez de
  [resource](language.types.resource.md)s `pgsql link`.
- As funções [PgSQL](book.pgsql.md) agora aceitam e retornam
  objetos [PgSql\Result](class.pgsql-result.md) em vez de
  [resource](language.types.resource.md)s `pgsql result`.
- As funções [PgSQL](book.pgsql.md) agora aceitam e retornam
  objetos [PgSql\Lob](class.pgsql-lob.md) em vez de
  [resource](language.types.resource.md)s `pgsql large object`.
- As funções [PSpell](book.pspell.md) agora aceitam e retornam
  objetos [PSpell\Dictionary](class.pspell-dictionary.md) em vez de
  [resource](language.types.resource.md)s `pspell`.
- As funções [PSpell](book.pspell.md) agora aceitam e retornam
  objetos [PSpell\Config](class.pspell-config.md) em vez de
  [resource](language.types.resource.md)s `pspell config`.

### MySQLi

[mysqli\_fetch\_fields()](mysqli-result.fetch-fields.md), e
[mysqli\_fetch\_field\_direct()](mysqli-result.fetch-field-direct.md) agora irão sempre retornar
`0` para a max\_length.
Essa informação pode ser computada iterando sobre o conjunto de resultados,
e obtendo o tamanho máximo. Era isso que o PHP estava fazendo
internamente anteriormente.

A opção **`MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH`**
não tem mais efeito.

A opção **`MYSQLI_STORE_RESULT_COPY_DATA`**
não tem mais efeito. Passar qualquer valor para o
parâmetro `mode` do
[mysqli::store\_result()](mysqli.store-result.md) não tem mais efeito.

[mysqli::connect()](mysqli.construct.md) agora retorna **`true`** em vez de **`null`** em caso de sucesso.

O modo de manipulação de erros padrão foi alterado de "silent" para "exceptions"
Veja a página [Modo de relatório do MySQLi](mysqli-driver.report-mode.md)
para mais detalhes sobre o que isso implica,
e como definir esse atributo explicitamente.
Para restaurar o comportamento anterior use:
`mysqli_report(MYSQLI_REPORT_OFF);`

Classes estendendo [mysqli\_stmt::execute()](mysqli-stmt.execute.md)
agora são obrigadas a especificar o parâmetro opcional adicional.

### MySQLnd

A diretiva INI [mysqlnd.fetch\_data\_copy](mysqlnd.config.md#ini.mysqlnd.fetch_data_copy)
foi removida.
Isso não deve resultar em mudanças comportamentais visíveis pelo usuário.

### OpenSSL

Chaves privadas EC agora serão exportadas no formato PKCS#8 em vez de
formatos tradicionais, assim como todas as outras chaves.

[openssl\_pkcs7\_encrypt()](function.openssl-pkcs7-encrypt.md) e
[openssl\_cms\_encrypt()](function.openssl-cms-encrypt.md) agora irão por padrão usar
AES-128-CBC em vez de RC2-40. O cifrador RC2-40 é considerado
inseguro e não é habilitado por padrão pelo OpenSSL 3.

### PHP Data Objects

**`PDO::ATTR_STRINGIFY_FETCHES`** agora stringifica valores
de tipo [bool](language.types.boolean.md) para `"0"` iy
`"1"`. Anteriormente [bool](language.types.boolean.md)s não eram stringificados.

Chamar [PDOStatement::bindColumn()](pdostatement.bindcolumn.md) com
**`PDO::PARAM_LOB`** agora irá constantemente vincular um resultado de fluxo
quando **`PDO::ATTR_STRINGIFY_FETCHES`** não está habilitado.
Anteriormente, o resultado seria um fluxo ou string dependendo do
driver de banco de dados utilizado e a hora que a vinculação é realizada.

#### Driver MySQL

Inteiros e floats em conjuntos de resultados agora serão retornados usando
tipos nativos do PHP em vez de [string](language.types.string.md)s ao usar declarações preparadas emuladas.
Isso corresponde ao comportamento das declarações preparadas nativas.
O comportamento anterior pode ser restaurado habilitando a
opção **`PDO::ATTR_STRINGIFY_FETCHES`**.

#### Driver SQLite

Inteiros e floats em conjuntos de resultados agora serão retornados usando
tipos nativos do PHP.
O comportamento anterior pode ser restaurado habilitando a
opção **`PDO::ATTR_STRINGIFY_FETCHES`**.

### Phar

Para cumprir com a interface [ArrayAccess](class.arrayaccess.md),
[Phar::offsetUnset()](phar.offsetunset.md) e
[PharData::offsetUnset()](phardata.offsetunset.md) não retorna mais um [bool](language.types.boolean.md).

### Biblioteca Padrão

[version\_compare()](function.version-compare.md) não aceita mais abreviações de operadores não documentados.

[htmlspecialchars()](function.htmlspecialchars.md),
[htmlentities()](function.htmlentities.md),
[htmlspecialchars\_decode()](function.htmlspecialchars-decode.md),
[html\_entity\_decode()](function.html-entity-decode.md),
e [get\_html\_translation\_table()](function.get-html-translation-table.md)
agora usam `ENT_QUOTES | ENT_SUBSTITUTE` em vez de
**`ENT_COMPAT`** por padrão.
Isso significa que `'` é escapada para
`&#039;` enquanto antes nada era feito.
Adicionalmente, UTF-8 malformado será substituído por um caractere de substituição
Unicode, ao invés de resultar em uma string vazia.

[debug\_zval\_dump()](function.debug-zval-dump.md) agora imprime a contagem de referência de empacotadores de
referência com a sua contagem, em vez de apenas prefixar
`&` ao valor.
Isso modela de forma mais precisa a representação de referência desde o PHP 7.0.

[debug\_zval\_dump()](function.debug-zval-dump.md) agora imprime `interned`
em vez de uma contagem de referência falsa para strings internalizadas e arrays imutáveis.

### Biblioteca Padrão do PHP (SPL)

[SplFixedArray](class.splfixedarray.md), agora será codificado em JSON como um [array](language.types.array.md)

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
