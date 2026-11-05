# Obtém os dados do pacote

> **Fonte / Source:** https://www.php.net/manual/pt_BR/resourcebundle.get.php

---

# ResourceBundle::get

# resourcebundle\_get

(PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0)

ResourceBundle::get -- resourcebundle\_get — Obtém os dados do pacote

### Descrição

Estilo orientado a objetos

public function **ResourceBundle::get**([string](language.types.string.md)|[int](language.types.integer.md) `$index`, [bool](language.types.boolean.md) `$fallback` = **`true`**): [ResourceBundle](class.resourcebundle.md)|[array](language.types.array.md)|[string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md)

Estilo procedural

function **resourcebundle\_get**([ResourceBundle](class.resourcebundle.md) `$bundle`, [string](language.types.string.md)|[int](language.types.integer.md) `$index`, [bool](language.types.boolean.md) `$fallback` = **`true`**): [ResourceBundle](class.resourcebundle.md)|[array](language.types.array.md)|[string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md)

Obtém os dados do pacote através de um índice ou de uma string chave.

### Parâmetros

`bundle`
:   Um objeto [ResourceBundle](class.resourcebundle.md).

`index`
:   O índice onde os dados estão. Pode ser uma string ou um intero.

`fallback`
:   O locale alternativo no caso de não encontrar o item exato ou outra alternativa.

### Valor Retornado

Retorna os dados localizados no índice informado ou **`null`** caso haja erro. Strings, inteiros e dados em binário
são retornados como seus tipo correspondentes em PHP. Um array de inteiros é retornado como um array PHP.
Tipos complexos são retornados como objetos [ResourceBundle](class.resourcebundle.md).

### Erros/Exceções

Uma exceção [TypeError](class.typeerror.md) é lançada se
o tipo do índice for inválido.

Uma exceção [ValueError](class.valueerror.md) é lançada se
`index` for uma [string](language.types.string.md)
e estiver vazia ou se for um [int](language.types.integer.md) e não
couber em um tipo inteiro de 32 bits.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Uma exceção [TypeError](class.typeerror.md) é lançada se o tipo do índice for inválido. Uma exceção [ValueError](class.valueerror.md) é lançada se `index` for uma [string](language.types.string.md) e estiver vazia ou se for um [int](language.types.integer.md) e não couber em um tipo inteiro de 32 bits. |

### Examples

**Exemplo #1 Exemplo da função **resourcebundle\_get()****

```
<?php
$r = resourcebundle_create( 'es', "/usr/share/data/myapp");
echo resourcebundle_get($r, 'somestring');
?>
```

**Exemplo #2 Exemplo orientado à objeto**

```
<?php
$r = new ResourceBundle( 'es', "/usr/share/data/myapp");
echo $r->get('somestring');
?>
```

O exemplo acima produzirá:

```
?Hola, mundo!
```

### Veja também

- [resourcebundle\_count()](resourcebundle.count.md) - Obtém o número de elementos no pacote

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
