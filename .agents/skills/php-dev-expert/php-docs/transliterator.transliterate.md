# Translitera uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/transliterator.transliterate.php

---

# Transliterator::transliterate

# transliterator\_transliterate

(PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0)

Transliterator::transliterate -- transliterator\_transliterate — Translitera uma string

### Descrição

Estilo orientado a objetos

public function **Transliterator::transliterate**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$start` = 0, [int](language.types.integer.md) `$end` = -1): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **transliterator\_transliterate**(  
    [Transliterator](class.transliterator.md)|[string](language.types.string.md) `$transliterator`,  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$start` = 0,  
    [int](language.types.integer.md) `$end` = -1  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Transforma uma string ou parte dela usando um transliterador ICU.

### Parâmetros

`transliterator`
:   Na versão procedura, pode ser um objeto [Transliterator](class.transliterator.md)
    ou uma [string](language.types.string.md) a partir da qual um objeto
    [Transliterator](class.transliterator.md) possa ser construído.

`string`
:   A string a ser transformada.

`start`
:   O índice do início (em unidades de código UTF-16) a partir do qual a string começará
    a ser transformada, inclusive. A indexação inicia em 0. O texto anterior a este índice
    será mantido sem alteração.

`end`
:   O índice do final (em unidades de código UTF-16) até o qual a string
    será transformada, exclusive. A indexação inicia em 0. O texto neste índice e posteriores
    será mantido sem alteração.

### Valor Retornado

A string transformada em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Convertendo unidades de código UTF-16 escapados**

```
<?php
$s = "\u304A\u65E9\u3046\u3054\u3056\u3044\u307E\u3059";
echo transliterator_transliterate("Hex-Any/Java", $s), "\n";

//agora a operação reversa com um caractere suplementar
$supplChar = html_entity_decode('&#x1D11E;');
echo mb_strlen($supplChar, "UTF-8"), "\n";
$encSupplChar = transliterator_transliterate("Any-Hex/Java", $supplChar);
//mostra duas unidades de código UTF-16 codificadas
echo $encSupplChar, "\n";
//e de volta
echo transliterator_transliterate("Hex-Any/Java", $encSupplChar), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
お早うございます
1
\uD834\uDD1E
𝄞
```

### Veja também

- [Transliterator::getErrorMessage()](transliterator.geterrormessage.md) - Obtém a última mensagem de erro
- [Transliterator::\_\_construct()](transliterator.construct.md) - Construtor privado para proibir instanciação

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
