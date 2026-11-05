# Novas Funcionalidades

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration81.new-features.php

---

## Novas Funcionalidades

### Núcleo do PHP

#### Prefixo de Inteiro Literal Octal

Inteiros octais agora podem usar um prefixo
`0o`/`0O`
explícito em inteiros literais,
similar à inteiros literais binários e hexadecimais.

```
<?php
014;  // Literal octal não-prefixado
0o14; // Literal octal prefixado
?>
```

#### Desempacotamento de Array com chaves String

Adicionado suporte para [desmontagem de arrays com chave string](language.types.array.md#language.types.array.unpacking)

```
<?php
$arr1 = [1, 'a' => 'b'];
$arr2 = [...$arr1, 'c' => 'd']; //[1, 'a' => 'b', 'c' => 'd']
?>
```

#### Argumentos Nomeados Após Desempacotamento de Argumentos

Agora é possível especificar argumentos nomeados após um desempacotamento de argumentos.
ex.
foo(...$args, nomeado: $arg).

#### Chave do Caminho Completo para Upload de Arquivos

Upload de arquivos agora fornece uma chave adicional `full_path`,
que contém o caminho completo (em vez de apenas o nome base) do arquivo carregado.
Isso destina-se ao uso em conjunto com "upload webkitdirectory".

#### Enumerações

Suporte para [Enumerações](language.enumerations.md) foi adicionado.

#### Fibers

Suporte para [Fibers](language.fibers.md) foi adicionado.

#### Sintaxe de Chamáveis de Primeira Classe

Closures para chamáveis agora podem ser criadas usando [a sintaxe `myFunc(...)`](functions.first_class_callable_syntax.md),
que é idêntica à `Closure::fromCallable('myFunc')`.

> **Nota**:
>
> O `...` é parte da sintaxe, e não uma omissão.

#### Tipos de Intersecção

Suporte a [tipos de intersecção](language.types.type-system.md#language.types.type-system.composite.intersection) foi adicionado.

**Cuidado**

[Tipos de
Intersecção](language.types.type-system.md#language.types.type-system.composite.intersection) não podem ser usados em conjunto com
[tipos de
união](language.types.declarations.md#language.types.declarations.composite.union)

#### Tipo never

Um novo tipo [never](language.types.never.md) de retorno apenas foi adicionado.
Isso indica que a função [exit()](function.exit.md),
lança uma exceção, ou não termina.

#### [`new`](language.oop5.basic.md#language.oop5.basic.new) em Inicializadores

Agora é possível usar expressões `new ClassName()` como o
valor padrão de um parâmetro, variável estática, inicializadores de constante global,
e como argumentos de atributo.
Objetos também podem ser passados para [define()](function.define.md) agora.

#### Propriedades somente leitura

Suporte para propriedades [readonly](language.oop5.properties.md#language.oop5.properties.readonly-properties) foi adicionado.

#### Constantes de classe finais

Adicionado suporte ao [modificador final para constantes de classe.](language.oop5.final.md#language.oop5.final.example.php81)
Além disso, as constantes de interface podem ser sobrescritas.

### CURL

Adicionada a opção **`CURLOPT_DOH_URL`**.

Adicionadas opções para certificado blob quando libcurl >= 7.71.0:

- **`CURLOPT_ISSUERCERT_BLOB`**
- **`CURLOPT_PROXY_ISSUERCERT`**
- **`CURLOPT_PROXY_ISSUERCERT_BLOB`**
- **`CURLOPT_PROXY_SSLCERT_BLOB`**
- **`CURLOPT_PROXY_SSLKEY_BLOB`**
- **`CURLOPT_SSLCERT_BLOB`**
- **`CURLOPT_SSLKEY_BLOB`**

Adicionada [CURLStringFile](class.curlstringfile.md), que pode ser usada para postar
um arquivo a partir de uma [string](language.types.string.md) em vez de um arquivo:

```
<?php
$file = new CURLStringFile($data, 'filename.txt', 'text/plain');
curl_setopt($curl, CURLOPT_POSTFIELDS, ['file' => $file]);
?>
```

### FPM

Adicionado status de formato openmetrics. Ele pode ser usado pelo Prometheus para buscar métricas
do FPM.

Adicionada nova opção de pool para o gerenciador de processo dinâmico chamada
`pm.max_spawn_rate`. Ela permite iniciar uma série de filhos
em um ritmo mais rápido quando pm dinâmico está selecionado.
O valor padrão é `32` que era o valor
codificado anterior.

### GD

Suporte Avif agora está disponível através de
[imagecreatefromavif()](function.imagecreatefromavif.md) e
[imageavif()](function.imageavif.md),
se a libgd foi compilada com suporte Avif.

### Hash

As seguintes funções [hash()](function.hash.md),
[hash\_file()](function.hash-file.md), e [hash\_init()](function.hash-init.md)
agora suportam um argumento opcional `options`
adicional, que pode ser utilizado para passar dados específicos do algoritmo.

#### MurmurHash3

Adicionado suporte a `MurmurHash3` com suporte
a fluxos. As seguintes variantes estão implementadas:

- murmur3a, hash 32-bit
- murmur3c, hash 128-bit para x86
- murmur3f, hash 128-bit para x64

O estado de hash inicial pode ser passado através da chave `seed`
no array `options`, por exemplo:

```
<?php
$h = hash("murmur3f", $data, options: ["seed" => 42]);
echo $h, "\n";
?>
```

Um valor semente válido está no intervalo de `0`
até o **`UINT_MAX`** definido pela plataforma, geralmente
`4294967295`.

#### xxHash

Adicionado suporte a `xxHash`.
As seguintes variantes estão implementadas:

- xxh32, hash 32-bit
- xxh64, hash 64-bit
- xxh3, hash 64-bit
- xxh128, hash 128-bit

O estado inicial de hash pode ser passado através da chave `seed`
no array `options`, por exemplo:

```
<?php
$h = hash("xxh3", $data, options: ["seed" => 42]);
echo $h, "\n";
?>
```

O uso de segredo é suportado através da passagem do chave `secret`
no array `options`, também:

```
<?php
$h = hash("xxh3", $data, options: ["secret" => "Segredo de pelo menos 136 bytes aqui"]);
echo $h, "\n";
?>
```

A qualidade do segredo personalizado é crucial para a qualidade do hash resultante.
É altamente recomendado usar a melhor entropia possível para o segredo.

### MySQLi

#### Nova diretiva INI `mysqli.local_infile_directory`

A diretiva INI [mysqli.local\_infile\_directory](mysqli.configuration.md#ini.mysqli.local-infile-directory)
foi adicionada, que pode ser usada para especificar um diretório a partir
do qual os arquivos podem ser carregados. Só é significativo se
[mysqli.allow\_local\_infile](mysqli.configuration.md#ini.mysqli.allow-local-infile)
não estiver habilitada, já que todos os diretórios são permitidos nesse caso.

#### Ligar parâmetros no execute

Agora é possível ligar parâmetros passando-os como um array para o
[mysqli\_stmt::execute()](mysqli-stmt.execute.md). Todos os valores serão ligados como
strings. Apenas arrays de lista são permitidos. Essa nova funcionalidade não está disponível
quando MySQLi é compilado com libmysqlclient.

```
<?php
$stmt = $mysqli->prepare('INSERT INTO users(id, name) VALUES(?,?)');
$stmt->execute([1, $username]);
?>
```

#### Novo método [mysqli\_result::fetch\_column()](mysqli-result.fetch-column.md)

[mysqli\_result::fetch\_column()](mysqli-result.fetch-column.md)
foi adicionado para permitir buscar um único valor escalar do conjunto de resultados.
O novo método aceita um parâmetro opcional baseado em 0 `column`
do tipo [int](language.types.integer.md) especificando de qual coluna buscar.

```
<?php
$result = $mysqli->query('SELECT username FROM users WHERE id = 123');
echo $result->fetch_column();
?>
```

### PDO

O atributo **`PDO::MYSQL_ATTR_LOCAL_INFILE_DIRECTORY`**
foi adicionado, que pode ser usado para especificar um diretório no qual os
arquivos podem ser carregados.
É significante apenas se **`PDO::MYSQL_ATTR_LOCAL_INFILE`**
não estiver habilitada, já que todos os diretórios são permitidos nesse caso.

### PDO\_SQLite

A sintaxe DSN `"file:"` do SQLite agora é suportada,
que permite especificar flags adicionais.
Essa funcionalidade não está disponível se open\_basedir estiver definido.

```
<?php
new PDO('sqlite:file:caminho/para/sqlite.db?mode=ro')
?>
```

### POSIX

Adicionadas as constantes **`POSIX_RLIMIT_KQUEUES`** e **`POSIX_RLIMIT_NPTS`**.
Esses "rlimits" estão disponíveis apenas no FreeBSD.

### Standard

[fputcsv()](function.fputcsv.md) agora aceita um novo argumento
`eol` que permite a definição de uma sequência de
fim de linha personalizada, o padrão continua o mesmo e é `"\n"`.

### SPL

[SplFileObject::fputcsv()](splfileobject.fputcsv.md) agora aceita um novo argumento
`eol` que permite a definição de uma sequência de
fim de linha personalizada, o padrão continua o mesmo e é `"\n"`.

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
