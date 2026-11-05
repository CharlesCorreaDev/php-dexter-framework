# Registra uma função PHP para uso como uma função de agregação SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.createaggregate.php

---

# SQLite3::createAggregate

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::createAggregate — Registra uma função PHP para uso como uma função de agregação SQL

### Descrição

public function **SQLite3::createAggregate**(  
    [string](language.types.string.md) `$name`,  
    [callable](language.types.callable.md) `$stepCallback`,  
    [callable](language.types.callable.md) `$finalCallback`,  
    [int](language.types.integer.md) `$argCount` = -1  
): [bool](language.types.boolean.md)

Registra uma função PHP ou uma função definida pelo usuário para uso como uma função de
agregação SQL dentro de declarações SQL.

### Parâmetros

`name`
:   Nome do agregado SQL a ser criado ou redefinido.

`stepCallback`
:   Função de retorno de chamada chamada para cada linha do conjunto de resultados. Sua função PHP
    deve acumular o resultado e armazená-lo no contexto de
    agregação.

    Esta função deve ser definida como:

    function step(  
        [mixed](language.types.mixed.md) `$context`,  
        [int](language.types.integer.md) `$rownumber`,  
        [mixed](language.types.mixed.md) `$value`,  
        [mixed](language.types.mixed.md) `...$values`  
    ): [mixed](language.types.mixed.md)

    `context`
    :   **`null`** para a primeira linha; nas linhas subsequentes, terá o valor
        que foi retornado anteriormente pela função step; você deve usar
        isso para manter o estado de agregação.

    `rownumber`
    :   O número da linha atual.

    `value`
    :   O primeiro argumento passado para a agregação.

    `values`
    :   Outros argumentos passados para a agregação.

    O valor de retorno desta função será usado como o
    argumento `context` na próxima chamada das funções step ou
    finalize.

`finalCallback`
:   Função de retorno de chamada para agregar os dados "passados" de cada linha.
    Depois que todas as linhas forem processadas, esta função será chamada
    e ela deve então pegar os dados do contexto de agregação e
    retornar o resultado. Esta função de retorno de chamada deve retornar um tipo compreendido
    pelo SQLite (ou seja, [tipo escalar](language.types.intro.md)).

    Esta função deve ser definida como:

    function fini([mixed](language.types.mixed.md) `$context`, [int](language.types.integer.md) `$rownumber`): [mixed](language.types.mixed.md)

    `context`
    :   Mantém o valor de retorno da última chamada à função step.

    `rownumber`
    :   Sempre `0`.

    O valor de retorno desta função será usado como o valor de retorno para
    o agregado.

`argCount`
:   O número de argumentos que o agregado SQL recebe. Se
    este parâmetro for negativo, então o agregado SQL pode receber
    qualquer número de argumentos.

### Valor Retornado

Retorna **`true`** após a criação bem-sucedida do agregado, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de função de agregação max\_length**

```
<?php
$data = array(
   'one',
   'two',
   'three',
   'four',
   'five',
   'six',
   'seven',
   'eight',
   'nine',
   'ten',
   );
$db = new SQLite3(':memory:');
$db->exec("CREATE TABLE strings(a)");
$insert = $db->prepare('INSERT INTO strings VALUES (?)');
foreach ($data as $str) {
    $insert->bindValue(1, $str);
    $insert->execute();
}
$insert = null;

function max_len_step($context, $rownumber, $string)
{
    if (strlen($string) > $context) {
        $context = strlen($string);
    }
    return $context;
}

function max_len_finalize($context, $rownumber)
{
    return $context === null ? 0 : $context;
}

$db->createAggregate('max_len', 'max_len_step', 'max_len_finalize');

var_dump($db->querySingle('SELECT max_len(a) from strings'));
?>
```

O exemplo acima produzirá:

```
int(5)
```

Neste exemplo, estamos criando uma função de agregação que
calculará o comprimento da string mais longa em uma das colunas da
tabela. Para cada linha, a função `max_len_step` é
chamada e passada um parâmetro `$context`. O parâmetro de contexto
é como qualquer outra variável PHP e pode ser definido para conter um array
ou até mesmo um valor de objeto. Neste exemplo, estamos simplesmente usando-o para conter
o comprimento máximo que vimos até agora; se a
`$string` tiver um comprimento maior do que o
máximo atual, atualizamos o contexto para armazenar este novo comprimento máximo.

Depois que todas as linhas forem processadas, o SQLite chama a função
`max_len_finalize` para determinar o resultado da agregação.
Aqui, poderíamos realizar algum tipo de cálculo com base nos
dados encontrados no `$context`. Em nosso exemplo simples
porém, estivemos calculando o resultado à medida que a consulta progredia, então
simplesmente precisamos retornar o valor de contexto.

**Dica**

NÃO é recomendado que você armazene uma cópia dos valores no contexto
e depois os processe no final, pois você faria com que o SQLite usasse muita
memória para processar a consulta - apenas pense em quanto de memória você precisaria
se um milhão de linhas fossem armazenadas em memória, cada uma contendo uma string de 32 bytes
de comprimento.

**Dica**

Você pode usar **SQLite3::createAggregate()** para substituir
funções SQL nativas do SQLite.

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
