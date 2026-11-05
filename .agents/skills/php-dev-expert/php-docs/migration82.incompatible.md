# Alterações incompatíveis com versões anteriores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration82.incompatible.php

---

## Alterações incompatíveis com versões anteriores

### Data

[DateTime::createFromImmutable()](datetime.createfromimmutable.md) agora possui um
tipo de retorno provisório static, que anteriormente era [DateTime](class.datetime.md).

[DateTimeImmutable::createFromMutable()](datetimeimmutable.createfrommutable.md) agora possui um
tipo de retorno provisório static, que anteriormente era [DateTimeImmutable](class.datetimeimmutable.md).

`number` em [relative formats](datetime.formats.md#datetime.formats.relative)
não mais aceita números com mais de um sinal, por exemplo `+-2`.

### ODBC

Agora a extensão ODBC escapa o nome de usuário e a senha quando
ambos uma string de conexão e nome de usuário/senha são fornecidos e a string
precisa ser acrescentada. Antes, valores dados pelo usuário contendo valores que necessitassem ser escapados
poderiam criar uma string de conexão malformada ou injetar valores a partir de
dados providos pelo usuário. As regras de escape devem ser idênticas às do
comportamento do DbConnectionOptions do .NET BCL.

### PDO\_ODBC

A extensão PDO\_ODBC também escapa o nome de usuário e senha quando uma
string de conexão é fornecida. Veja a [mudança na extensão ODBC](migration82.incompatible.md#migration82.incompatible.odbc) para
mais informações.

### Biblioteca Padrão

[glob()](function.glob.md) agora devolve um [array](language.types.array.md) vazio se todos os caminhos forem
restringidos por [open\_basedir](ini.core.md#ini.open-basedir).
Anteriormente, o valor devolvido era **`false`**.
Além disso, agora um aviso é emitido mesmo quando apenas alguns caminhos sejam restringidos por
[open\_basedir](ini.core.md#ini.open-basedir).

[FilesystemIterator::\_\_construct()](filesystemiterator.construct.md): anteriormente ao PHP 8.2.0,
**`FilesystemIterator::SKIP_DOTS`** sempre estava ativa e
não podia ser desativada. Para manter a preservar o comportamento anterior, a constante
deve ser informada explicitamente quanto utilizando o parâmetro `flags`.
O valor padrão de `flags`
não foi modificado.

[strtolower()](function.strtolower.md),
[strtoupper()](function.strtoupper.md),
[stristr()](function.stristr.md),
[stripos()](function.stripos.md),
[strripos()](function.strripos.md),
[lcfirst()](function.lcfirst.md),
[ucfirst()](function.ucfirst.md),
[ucwords()](function.ucwords.md),
e [str\_ireplace()](function.str-ireplace.md) não são mais sensíveis à localização.
Elas agora realizam conversão de caixa em ASCII, como se a localização fosse "C".
Versões localizadas dessas funções estão disponíveis na  [extensão MBString](book.mbstring.md).
Além disso, [array\_change\_key\_case()](function.array-change-key-case.md) e ordenações com
**`SORT_FLAG_CASE`** agora também usam conversão de caixa em ASCII.

[str\_split()](function.str-split.md) agora devolve um [array](language.types.array.md) vazio para uma [string](language.types.string.md) vazia.
Anteriormente era devolvido um array com uma única string vazia como elemento.
[mb\_str\_split()](function.mb-str-split.md) não é afetada por essa mudança, visto que tal função
já se comportava dessa maneira.

[ksort()](function.ksort.md) e [krsort()](function.krsort.md) agora fazem comparação de string
numérica sob **`SORT_REGULAR`** utilizando as regras de PHP 8 padrão.

[var\_export()](function.var-export.md) deixou de omitir a contrabarra final em classes exportadas,
ou seja, agora os nomes de classes estarão completamente qualificados.

### Biblioteca Padrão do PHP (SPL)

Agora os seguintes métodos obrigam sua assinatura:

- **SplFileInfo::\_bad\_state\_ex()**
- [SplFileObject::getCsvControl()](splfileobject.getcsvcontrol.md)
- [SplFileObject::fflush()](splfileobject.fflush.md)
- [SplFileObject::ftell()](splfileobject.ftell.md)
- [SplFileObject::fgetc()](splfileobject.fgetc.md)
- [SplFileObject::fpassthru()](splfileobject.fpassthru.md)

[SplFileObject::hasChildren()](splfileobject.haschildren.md) agora possui um
tipo de retorno provisório [false](language.types.singleton.md), que anteriormente era [bool](language.types.boolean.md).

[SplFileObject::getChildren()](splfileobject.getchildren.md) agora possui um
tipo de retorno provisório [null](language.types.null.md), que anteriormente era
?[RecursiveIterator](class.recursiveiterator.md).

[GlobIterator](class.globiterator.md) agora devolve um [array](language.types.array.md) vazio se todos os
caminhos forem restringidos por [open\_basedir](ini.core.md#ini.open-basedir).
Anteriormente o valor devolvido era **`false`**.
Além disso, agora um aviso é emitido mesmo quando apenas alguns caminhos sejam restringidos por
[open\_basedir](ini.core.md#ini.open-basedir).

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
