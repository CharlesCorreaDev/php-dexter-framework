# Cria um valor PHP a partir de uma representação armazenada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.unserialize.php

---

# unserialize

(PHP 4, PHP 5, PHP 7, PHP 8)

unserialize — 
Cria um valor PHP a partir de uma representação armazenada

### Descrição

function **unserialize**([string](language.types.string.md) `$data`, [array](language.types.array.md) `$options` = []): [mixed](language.types.mixed.md)

**unserialize()** toma uma única variável serializada e
converte-a de volta em um valor PHP.

**Aviso**

Entradas de usuário não confiáveis não devem ser passadas a **unserialize()** independente
dos valores do elemento `allowed_classes` do parâmetro `options`.
Desserialização pode resultar em um código carregado e executado devido a uma instanciação
de objeto e auto-carregamento, e um usuário malicioso pode ser capaz de explorar
isto. Use um formato padrão e seguro de troca de dados como JSON (via
[json\_decode()](function.json-decode.md) e [json\_encode()](function.json-encode.md)) se
for necessário passar dados serializados ao usuário.

Se for necessário desserializar dados armazenados externamente, considere o uso de
[hash\_hmac()](function.hash-hmac.md) para validação de dados. Certifique-se que os dados não
foram modificados por outras pessoas.

### Parâmetros

`data`
:   A string serializada.

    Se a variável a ser desserializada for um objeto, após a reconstrução
    bem sucedida do objeto o PHP tentará automaticamente chamar os métodos
    [\_\_unserialize()](language.oop5.magic.md#object.unserialize) ou [\_\_wakeup()](language.oop5.magic.md#object.wakeup) (se existirem).

    > **Nota**:
    > **Diretiva
    > [unserialize\_callback\_func](var.configuration.md#ini.unserialize-callback-func)**  
    >
    > A função de retorno especificada na diretiva
    > [unserialize\_callback\_func](var.configuration.md#ini.unserialize-callback-func)
    > é chamada quando uma classe indefinida é desserializada.
    > Se nenhuma função for especificada, o objeto será instanciado como
    > [\_\_PHP\_Incomplete\_Class](class.php-incomplete-class.md).

`options`
:   Quaisquer opções podem ser fornecidas a **unserialize()** como um
    array associativo.

    **Opções válidas**

    | Nome | Tipo | Descrição |
    | --- | --- | --- |
    | `allowed_classes` | [array](language.types.array.md)|[bool](language.types.boolean.md) | Pode ser um [array](language.types.array.md) de nomes de classe que devem ser aceitas, **`false`** para não aceitar nenhuma classe, ou **`true`** para aceitar todas as classes. Se esta opção for definida e **unserialize()** encontrar um objeto de uma classe que não deve ser aceita, o objeto será instanciado como uma [\_\_PHP\_Incomplete\_Class](class.php-incomplete-class.md).  Omitir esta opção é o mesmo que defini-la como **`true`**: o PHP tentará instanciar objetos de qualquer classe.  Esta opção não afeta [Enumerações](language.enumerations.md). |
    | `max_depth` | [int](language.types.integer.md) | A profundidade máxima de estruturas permitidas durante a desserialização, com a intenção de prevenir sobrecarga de pilha. O limite padrão de profundidade é `4096` e pode ser desabilitado definindo-se `max_depth` para `0`. |

### Valor Retornado

O valor convertido é retornado, e pode ser [bool](language.types.boolean.md),
[int](language.types.integer.md), [float](language.types.float.md), [string](language.types.string.md),
[array](language.types.array.md) ou [object](language.types.object.md).

Caso a string informada não for desserializável, **`false`** é retornado e
um erro de nível **`E_WARNING`** é emitido.

### Erros/Exceções

Objetos podem lançar exceções da classe [Throwable](class.throwable.md) em seus manipuladores de desserialização.

A partir do PHP 8.4.0, se o elemento `allowed_classes` do parâmetro
`options` não for um [array](language.types.array.md) de nomes de classes
nem um [bool](language.types.boolean.md), **unserialize()** lança
exceções [TypeError](class.typeerror.md) e [ValueError](class.valueerror.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança exceções [TypeError](class.typeerror.md) e [ValueError](class.valueerror.md) se o elemento `allowed_classes` de `options` não for um [array](language.types.array.md) de nomes de classes nem um [bool](language.types.boolean.md). |
| 8.4.0 | Desserializar strings usando a tag maiúscula `"S"` foi descontinuado; use a tag minúscula `"s"` em vez disso. |
| 8.3.0 | Agora emite um **`E_WARNING`** quando a string de entrada tem dados não consumidos. |
| 8.3.0 | Agora emite um **`E_WARNING`** quando a string informada não for desserializável; anteriormente um **`E_NOTICE`** era emitido. |
| 7.4.0 | Adicionado elemento `max_depth` do array `options` para definir a profundidade máxima de estruturas permitidas durante desserialização. |
| 7.1.0 | O elemento `allowed_classes` de `options` agora é estritamente tipado, isto é, se algo que não seja um [array](language.types.array.md) ou um [bool](language.types.boolean.md) for fornecido, **unserialize()** retorna **`false`** e emite um erro de nível **`E_WARNING`**. |

### Examples

**Exemplo #1 Exemplo de **unserialize()****

```
<?php
// Aqui, será usado unserialize() para carregar dados de sessão para o
// array $session_data a partir de uma string selecionada de um banco de dados.
// Este exemplo complementa o descrito em serialize().

$conn = odbc_connect("webdb", "php", "chicken");
$stmt = odbc_prepare($conn, "SELECT data FROM sessions WHERE id = ?");
$sqldata = array($_SERVER['PHP_AUTH_USER']);
if (!odbc_execute($stmt, $sqldata) || !odbc_fetch_into($stmt, $tmp)) {
    // se a execute ou fetch falharem, inicializa como um array vazio
    $session_data = array();
} else {
    // agora os dados serializados devem estar em $tmp[0].
    $session_data = unserialize($tmp[0]);
    if (!is_array($session_data)) {
        // algo deu errado, inicializa como um array vazio
        $session_data = array();
    }
}
?>
```

**Exemplo #2 Exemplo de unserialize\_callback\_func**

```
<?php
$serialized_object='O:1:"a":1:{s:5:"value";s:3:"100";}';

ini_set('unserialize_callback_func', 'mycallback'); // define a função de retorno de chamada

function mycallback($classname)
{
    // apenas inclua um arquivo contendo sua definição de classe
    // $classname serve para determinar que definição de classe é requerida
    var_dump($classname);
}

unserialize($serialized_object);
?>
```

### Notas

**Aviso**

**`false`** é retornado tanto em caso de um erro quanto no caso de desserializar
o valor **`false`** serializado. É possível capturar este caso especial
comparando-se `data` com
`serialize(false)` ou capturando-se o erro de nível
**`E_WARNING`** emitido.

### Veja também

- [json\_encode()](function.json-encode.md) - Retorna a representação JSON de um valor
- [json\_decode()](function.json-decode.md) - Decodifica uma string JSON
- [hash\_hmac()](function.hash-hmac.md) - Gera um valor de hash com chave usando o método HMAC
- [serialize()](function.serialize.md) - Gera uma representação armazenável de um valor
- [Auto-carregamento de Classes](language.oop5.autoload.md)
- [unserialize\_callback\_func](var.configuration.md#ini.unserialize-callback-func)
- [unserialize\_max\_depth](var.configuration.md#ini.unserialize-max-depth)
- [\_\_wakeup()](language.oop5.magic.md#object.wakeup)
- [\_\_serialize()](language.oop5.magic.md#object.serialize)
- [\_\_unserialize()](language.oop5.magic.md#object.unserialize)

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
