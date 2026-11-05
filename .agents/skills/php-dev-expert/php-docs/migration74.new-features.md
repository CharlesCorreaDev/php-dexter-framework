# Novos Recursos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration74.new-features.php

---

## Novos Recursos

### Núcleo do PHP

#### Propriedades tipadas

As propriedades de classe agora suportam declarações de tipo.

```
<?php
class User {
    public int $id;
    public string $name;
}
?>
```

O exemplo acima reforçará que `$user->id` pode ser atribuído apenas
com valores [int](language.types.integer.md) e `$user->name`
somente com valores de [string](language.types.string.md).

#### Funções de Seta

[Funções de seta](functions.arrow.md) fornecem uma
sintaxe abreviada para definir funções
com ligação implícita por valor de escopo.

```
<?php
$factor = 10;
$nums = array_map(fn($n) => $n * $factor, [1, 2, 3, 4]);
// $nums = array(10, 20, 30, 40);
?>
```

#### Covariância do tipo de retorno limitado e contravariância do tipo de argumento

O código a seguir agora funcionará:

```
<?php
class A {}
class B extends A {}

class Producer {
    public function method(): A {}
}
class ChildProducer extends Producer {
    public function method(): B {}
}
?>
```

O suporte completo à variação só está disponível se o carregamento automático for usado. Dentro de
um único arquivo, apenas as referências de tipo não cíclico são possíveis, porque todas
as classes precisam estar disponíveis antes de serem referenciadas.

```
<?php

/**
 * Essas classes satisfazem os requisitos do LSP, porque C é um subtipo de A.
 * No entanto, no momento em que a classe B é declarada, a classe C ainda não está disponível
 */
class A
{
    public function method(): A {}
}

class B extends A
{
    // Erro fatal: Não foi possível verificar a compatibilidade entre B::method():C e
    // A::method(): A, porque a classe C não está disponível
    public function method(): C {}
}

class C extends B {}

?>
```

#### Operador de atribuição de coalescência nula

```
<?php
$array['key'] ??= computeDefault();
// é praticamente equivalente a
if (!isset($array['key'])) {
    $array['key'] = computeDefault();
}
?>
```

#### Descompactando dentro de arrays

```
<?php
$parts = ['apple', 'pear'];
$fruits = ['banana', 'orange', ...$parts, 'watermelon'];
// ['banana', 'orange', 'apple', 'pear', 'watermelon'];
?>
```

#### Separador literal numérico

Literais numéricos podem conter underscores entre dígitos.

```
<?php
6.674_083e-11; // float
299_792_458;   // decimal
0xCAFE_F00D;   // hexadecimal
0b0101_1111;   // binário
?>
```

#### Referências fracas

[Referências fracas](class.weakreference.md) permitem que o programador mantenha uma referência a um objeto
que não impede que o objeto seja destruído.

#### Permitir exceções de \_\_toString()

Lançar exceções de [\_\_toString()](language.oop5.magic.md#object.tostring)
agora é permitido. Antes isto resultava um erro fatal. Os erros fatais
recuperáveis ​​existentes nas conversões de string foram convertidos
em exceções de [Error](class.error.md).

### CURL

[CURLFile](class.curlfile.md) agora suporta empacotadores de fluxo,
além de nomes de arquivos simples, se a extensão tiver sido criada com relação à libcurl >= 7.56.0.

### Filter

O filtro **`FILTER_VALIDATE_FLOAT`** agora suporta
as opções `min_range` e `max_range`
com a mesma semântica que **`FILTER_VALIDATE_INT`**.

### FFI

FFI é uma nova extensão, que fornece uma maneira simples de chamar
funções nativas, acessar variáveis ​​nativas e criar/acessar
estruturas de dados definidas nas bibliotecas C.

### GD

Adicionado o filtro de imagem **`IMG_FILTER_SCATTER`**
para aplicar um filtro de dispersão às imagens.

### Hash

Adicionado o hash `crc32c` usando o polinômio de Castagnoli.
Essa variante CRC32 é usada por sistemas de armazenamento, como
iSCSI, SCTP, Btrfs e ext4.

### Multibyte String

Adicionada a função [mb\_str\_split()](function.mb-str-split.md), que fornece
a mesma funcionalidade que [str\_split()](function.str-split.md), mas operando
em pontos de código em vez de bytes.

### OPcache

[Suporte para pré-carregamento de código](opcache.preloading.md) foi adicionado.

### Expressões Regulares (Compatíveis com Perl)

As funções [preg\_replace\_callback()](function.preg-replace-callback.md) e [preg\_replace\_callback\_array()](function.preg-replace-callback-array.md)
agora aceitam um argumento `flags` adicional, com suporte para as constantes
**`PREG_OFFSET_CAPTURE`** e **`PREG_UNMATCHED_AS_NULL`**.
Isso influencia o formato do array de correspondências passado para a função de retorno da chamada.

### PDO

O nome de usuário e a senha agora podem ser especificados como parte do PDO DSN para
os drivers mysql, mssql, sybase, dblib, firebird e oci. Antes, isso
era suportado apenas pelo driver pgsql. Se um nome de usuário/senha for especificado
no construtor e no DSN, o construtor terá precedência.

Agora é possível escapar pontos de interrogação nas consultas SQL para evitar que
elas sejam interpretadas como espaços reservados para parâmetros. Escrever `??`
permite enviar um único ponto de interrogação para o banco de dados e por exemplo, usar o
operador PostgreSQL JSON 'key exists' (`?`).

### PDO\_OCI

[PDOStatement::getColumnMeta()](pdostatement.getcolumnmeta.md) agora está disponível.

### PDO\_SQLite

`PDOStatement::getAttribute(PDO::SQLITE_ATTR_READONLY_STATEMENT)`
permite verificar se a instrução é somente leitura, ou seja, se não modifica
o banco de dados.

`PDO::setAttribute(PDO::SQLITE_ATTR_EXTENDED_RESULT_CODES, true)`
permite o uso de códigos de resultado estendidos do SQLite3 em [PDO::errorInfo()](pdo.errorinfo.md)
e [PDOStatement::errorInfo()](pdostatement.errorinfo.md).

### SQLite3

Adicionado [SQLite3::lastExtendedErrorCode()](sqlite3.lastextendederrorcode.md)
para buscar o último código de resultado estendido.

Adicionado `SQLite3::enableExtendedResultCodes($enable = true)`,
que fará [SQLite3::lastErrorCode()](sqlite3.lasterrorcode.md)
retornar códigos de resultado estendidos.

### Standard

#### strip\_tags() com array de nomes de tags

[strip\_tags()](function.strip-tags.md) agora também aceita um array de tags permitidas:
em vez de `strip_tags($str, '<a><p>')`
agora você pode escrever `strip_tags($str, ['a', 'p'])`.

#### Serialização de objetos personalizados

Um novo mecanismo para serialização de objetos personalizados foi adicionado,
que usa dois novos métodos mágicos: `__serialize`
e `__unserialize`.

```
<?php
// Retorna um array contendo todo o estado necessário do objeto.
public function __serialize(): array
{
}

// Restaura o estado do objeto a partir do array de dados fornecido.
public function __unserialize(array $data): void
{
}
?>
```

O novo mecanismo de serialização substitui a interface
[Serializable](class.serializable.md),
que será descontinuada no futuro.

#### Funções de mesclagem de array sem argumentos

[array\_merge()](function.array-merge.md) e [array\_merge\_recursive()](function.array-merge-recursive.md)
agora podem ser chamados sem nenhum argumento; nesse caso, eles retornarão um array vazio.
Isso é útil em conjunto com o operador de espalhamento (spread operator), por exemplo, `array_merge(...$arrays)`.

#### Função [proc\_open()](function.proc-open.md)

[proc\_open()](function.proc-open.md) agora aceita um array em vez de
uma string para o comando. Nesse caso, o processo será aberto
diretamente (sem passar por um shell) e o PHP cuidará de
qualquer argumento necessário para escapar.

```
<?php
proc_open(['php', '-r', 'echo "Hello World\n";'], $descriptors, $pipes);
?>
```

[proc\_open()](function.proc-open.md) agora suporta
`redirect` e descritores `null`.

```
<?php
// Similar a 2>&1 no shell
proc_open($cmd, [1 => ['pipe', 'w'], 2 => ['redirect', 1]], $pipes);
// Similar a 2>/dev/null ou 2>nul no shell
proc_open($cmd, [1 => ['pipe', 'w'], 2 => ['null']], $pipes);
?>
```

#### argon2i(d) sem libargon

[password\_hash()](function.password-hash.md) agora possui as implementações argon2i e argon2id
da extensão sodium quando o PHP é compilado sem libargon.

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
