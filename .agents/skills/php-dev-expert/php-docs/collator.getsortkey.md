# Obtém a chave de ordenação de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collator.getsortkey.php

---

# Collator::getSortKey

# collator\_get\_sort\_key

(PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 1.0.3)

Collator::getSortKey -- collator\_get\_sort\_key — Obtém a chave de ordenação de uma string

### Descrição

Estilo orientado a objetos

public function **Collator::getSortKey**([string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **collator\_get\_sort\_key**([Collator](class.collator.md) `$object`, [string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna a chave de agrupamento de uma string.
Chaves de agrupamento podem ser comparadas diretamente ao invés de se comparar strings, mas são
específicas de implementação e podem mudar entre versões de biblioteca ICU. Chaver de ordenação geralmente são
úteis apenas em bancos de dados ou em outras circunstâncias onde chamadas a funções são extremamente custosas.

### Parâmetros

`object`
:   Objeto de [Collator](class.collator.md).

`string`
:   A string a partir da qual a chave será produzida.

### Valor Retornado

Retorna a chave de agrupamento para a string, ou **`false`** em caso de falha.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Examples

**Exemplo #1 Exemplo de **collator\_get\_sort\_key()****

```
<?php

$s1 = 'Hello';

$coll = collator_create('en_US');
$res  = collator_get_sort_key($coll, $s1);

echo bin2hex($res);
?>
```

O exemplo acima produzirá
algo semelhante a:

3832404046010901dc08

**Exemplo #2 Exemplo de **Collator::getSortKey()** com [usort()](function.usort.md)**

```
<?php

$data = [
    [ 'name' => '🇳🇱 Derick Rethans', 'linked_account' => 'https://phpc.social/users/derickr' ],
    [ 'name' => 'Elephpant', 'linked_account' => 'https://phpc.social/phpc' ],
    [ 'name' => '🇫🇷 Marcus Bointon', 'linked_account' => 'https://phpc.social/users/Synchro' ],
];

/* Cria o ordenador */
$col = new Collator('en');

/* Ordena letras maiúsculas antes de minúsculas */
$col->setAttribute(Collator::CASE_FIRST, Collator::UPPER_FIRST);

/* Usa uma função definida pelo usuário com ordenação que remove os emojis */
usort(
    $data,
    function($a, $b) use ($col) {
        /* Remove a classe de caracteres 'S' (os símbolos) e espaços em branco
         * (com trim) */
        $aName = trim(preg_replace('/\p{S}+/u', '', $a['name']));
        $bName = trim(preg_replace('/\p{S}+/u', '', $b['name']));

        /* Cria a chave de ordenação */
        $aKey = $col->getSortKey($aName);
        $bKey = $col->getSortKey($bName);

        /* Usa a chave de ordenação para sinalizar que elementos são ordenados primeiro */
        return $aKey <=> $bKey;
    }
);

var_dump($data);
?>
```

O exemplo acima produzirá
algo semelhante a:

array(3) {  
[0] =>  
array(2) {  
'name' =>  
string(25) "🇳🇱 Derick Rethans"  
'linked\_account' =>  
string(33) "https://phpc.social/users/derickr"  
}  
[1] =>  
array(2) {  
'name' =>  
string(9) "Elephpant"  
'linked\_account' =>  
string(24) "https://phpc.social/phpc"  
}  
[2] =>  
array(2) {  
'name' =>  
string(25) "🇫🇷 Marcus Bointon"  
'linked\_account' =>  
string(33) "https://phpc.social/users/Synchro"  
}  
}

### Veja também

- [collator\_sort()](collator.sort.md) - Ordena um array usando o agrupador especificado
- [collator\_sort\_with\_sort\_keys()](collator.sortwithsortkeys.md) - Ordena um array usando agrupador e chaves de ordenação especificados

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
