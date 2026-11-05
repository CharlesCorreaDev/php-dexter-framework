# Alterações incompatíveis com versões anteriores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration72.incompatible.php

---

## Alterações incompatíveis com versões anteriores

### A função [number\_format()](function.number-format.md) não retorna mais o valor zero negativo

Anteriormente, era possível que a função [number\_format()](function.number-format.md)
retornasse `-0`. Apesar de isto ser perfeitamente válido
de acordo com a especificação de ponto flutuante IEEE 754, esta particularidade não
era desejável para mostrar números formatados de uma forma legível.

```
<?php

var_dump(number_format(-0.01)); // agora exibe string(1) "0" em vez de string(2) "-0"
```

### Converte chaves numéricas durante conversões de objetos e arrays

Chaves numéricas agora são melhor manipuladas ao converter arrays para objetos e
objetos para arrays (conversão explícita ou pela função
[settype()](function.settype.md)).

Isto significa que chaves de números inteiros (ou de strings numéricas) de arrays sendo convertidos
para objetos agora são acessíveis:

```
<?php

// array para objeto
$arr = [0 => 1];
$obj = (object) $arr;
var_dump(
    $obj,
    $obj->{'0'}, // agora acessível
    $obj->{0} // agora acessível
);
```

O exemplo acima produzirá:

```
object(stdClass)#1 (1) {
  ["0"]=>    // agora chave string, ao em vez de número inteiro
  int(1)
}
int(1)
int(1)
```

E chaves de números inteiros (ou de strings numéricas) de objetos sendo convertidos
para arrays agora são acessíveis:

```
<?php

// objeto para array
$obj = new class {
    public function __construct()
    {
        $this->{0} = 1;
    }
};
$arr = (array) $obj;
var_dump(
    $arr,
    $arr[0], // agora acessível
    $arr['0'] // agora acessível
);
```

O exemplo acima produzirá:

```
array(1) {
  [0]=>    // agora chave de número inteiro, em vez de string
  int(1)
}
int(1)
int(1)
```

### Não é permitido passar **`null`** para [get\_class()](function.get-class.md)

Anteriormente, passar **`null`** para a função [get\_class()](function.get-class.md)
mostraria o nome da classe de onde a função foi chamada. Este comportamento agora foi
removido, e um alerta **`E_WARNING`** será emitido. Para
obter o mesmo comportamento anterior, o argumento deve simplesmente ser omitido.

### Alerta ao contar tipos não contáveis

Um alerta **`E_WARNING`** agora será emitido ao se tentar usar a função
[count()](function.count.md) em tipos não contáveis (isto inclui o apelido
[sizeof()](function.sizeof.md)).

```
<?php

var_dump(
    count(null), // NULL não é contável
    count(1), // inteiros não são contáveis
    count('abc'), // strings não são contáveis
    count(new stdClass), // objetos que não implementam a interface Countable não são contáveis
    count([1,2]) // arrays são contáveis
);
```

O exemplo acima produzirá:

```
Warning: count(): Parameter must be an array or an object that implements Countable in %s on line %d

Warning: count(): Parameter must be an array or an object that implements Countable in %s on line %d

Warning: count(): Parameter must be an array or an object that implements Countable in %s on line %d

Warning: count(): Parameter must be an array or an object that implements Countable in %s on line %d
int(0)
int(1)
int(1)
int(1)
int(2)
```

### ext/hash foi movido de recurso para objeto

Como parte da migração de longo prazo, a extensão [Hash](book.hash.md)
foi atualizada para utilizar objetos ao invés de recursos. A alteração deve ser
transparente para desenvolvedores PHP, exceto onde
houver a função [is\_resource()](function.is-resource.md) (que precisará ser
atualizado para [is\_object()](function.is-object.md)).

### Melhoria nos padrões SSL/TLS

As seguinte alterações aos padrões foram feitas:

- `tls://` agora tem os padrões TLSv1.0 ou TLSv1.1 ou TLSv1.2
- `ssl://` é um apelido para `tls://`
- Constantes `STREAM_CRYPTO_METHOD_TLS_*` têm os padrões TLSv1.0
  ou TLSv1.1 + TLSv1.2, ao invés de somente TLSv1.0

### Valor de retorno de [gettype()](function.gettype.md) em recursos fechados

Anteriormente, usar [gettype()](function.gettype.md) em um recurso fechado
retornaria uma string `"unknown type"`. Agora, uma string
`"resource (closed)"` será retornada.

### [is\_object()](function.is-object.md) e [\_\_PHP\_Incomplete\_Class](class.php-incomplete-class.md)

Anteriormente, usar [is\_object()](function.is-object.md) na classe
[\_\_PHP\_Incomplete\_Class](class.php-incomplete-class.md) retornaria **`false`**.
Agora, **`true`** será retornado.

### Promoção do nível de erro de constantes indefinidas

Referências não qualificadas a constantes indefinidas agora irão gerar um
**`E_WARNING`** (ao invés de um **`E_NOTICE`**).
Na próxima versão maior do PHP, elas irão gerar exceções
[Error](class.error.md).

### Suporte ao Windows

As versões mínimas do Windows oficialmente suportadas são agora Windows 7 e Windows Server
2008 R2.

### Verificações nos valores padrões de propriedades de traits

Verificações de compatibilidade em valores padrões de propriedades de traits não irão mais
realizar conversões.

### `object` para nomes de classe

O nome `object` era fracamente reservado no PHP 7.0.
Agora é estritamente reservado, e é proibido usá-lo como nome de classe, trait
ou interface.

### Suporte a NetWare

O suporte a NetWare agora foi removido.

### [array\_unique()](function.array-unique.md) com **`SORT_STRING`**

Enquanto [array\_unique()](function.array-unique.md) com **`SORT_STRING`**
anteriormente copiava o array e removia elementos não únicos (sem empacotar
o array depois), agora o novo array é construído com a adição dos
elementos únicos. Isto pode resultar em índices numéricos diferentes.

### Alterações em [bcmod()](function.bcmod.md) com números do tipo float

A função [bcmod()](function.bcmod.md) não trunca mais números
fracionários para inteiros. Assim sendo, seu comportamento agora segue o da função
[fmod()](function.fmod.md), ao invés do operador `%`.
Por exemplo, `bcmod('4', '3.5')` agora retorna
`0.5` ao invés de `1`.

### Funções de hash e hashes não criptográficos

As funções [hash\_hmac()](function.hash-hmac.md), [hash\_hmac\_file()](function.hash-hmac-file.md),
[hash\_pbkdf2()](function.hash-pbkdf2.md) e [hash\_init()](function.hash-init.md) (com
**`HASH_HMAC`**) não aceitam mais hashes
não criptográficas.

### Opções da função [json\_decode()](function.json-decode.md)

A opção da função [json\_decode()](function.json-decode.md),
**`JSON_OBJECT_AS_ARRAY`**, agora é usada se o segundo
parâmetro (assoc) for **`null`**. Anteriormente,
**`JSON_OBJECT_AS_ARRAY`** era sempre ignorado.

### Saída de [rand()](function.rand.md) e [mt\_rand()](function.mt-rand.md)

Sequências geradas por [rand()](function.rand.md) e
[mt\_rand()](function.mt-rand.md) para uma semente específica podem ser diferentes do PHP 7.1 em
máquinas de 64 bits (devido à correção de um problema de polarização de resto de divisão na
implementação).

### Remoção da configuração ini [`sql.safe_mode`](ini.core.md#ini.sql.safe-mode)

A configuração ini `sql.safe_mode` agora foi removida.

### Alterações nas funções [date\_parse()](function.date-parse.md) e [date\_parse\_from\_format()](function.date-parse-from-format.md)

O elemento `zone` do array retornado pelas funções [date\_parse()](function.date-parse.md) e
[date\_parse\_from\_format()](function.date-parse-from-format.md) representa segundos ao invés de
minutos agora, e seu sinal está invertido. Por exemplo, `-120`
é agora `7200`.

### Cookies Recebidos

A partir do PHP 7.2.34, os *nomes* de cookies recebidos não são
mais decodificados como url por questões de segurança.

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
