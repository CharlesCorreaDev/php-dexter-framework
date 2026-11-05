# Cria um pacote de recursos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/resourcebundle.create.php

---

# ResourceBundle::create

# resourcebundle\_create

# ResourceBundle::\_\_construct

(PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0)

ResourceBundle::create -- resourcebundle\_create -- ResourceBundle::\_\_construct — Cria um pacote de recursos

### Descrição

Estilo orientado a objetos (method)

public static function **ResourceBundle::create**([?](language.types.null.md)[string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$bundle`, [bool](language.types.boolean.md) `$fallback` = **`true`**): [?](language.types.null.md)[ResourceBundle](class.resourcebundle.md)

Estilo procedural

function **resourcebundle\_create**([?](language.types.null.md)[string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$bundle`, [bool](language.types.boolean.md) `$fallback` = **`true`**): [?](language.types.null.md)[ResourceBundle](class.resourcebundle.md)

Estilo orientado a objetos (constructor):

public function **ResourceBundle::\_\_construct**([?](language.types.null.md)[string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$bundle`, [bool](language.types.boolean.md) `$fallback` = **`true`**)

Cria um pacote de recursos.

### Parâmetros

`locale`
:   Localidade para a qual os recursos devem ser carregados (nome da localidade, ex. en\_CA).

`bundle`
:   O diretório onde os dados estão armazenados ou o nome do arquivo .dat.

`fallback`
:   Indica se a localidade deve ser uma correspondência exata ou se a retroação para a localidade base é permitida.

### Valor Retornado

Retorna um objeto [ResourceBundle](class.resourcebundle.md) ou **`null`** caso haja erro.

### Examples

**Exemplo #1 Exemplo de **resourcebundle\_create()****

```
<?php
$r = resourcebundle_create( 'es', "/usr/share/data/myapp");
echo $r['teststring'];
?>
```

**Exemplo #2 Exemplo de **ResourceBundle::create()****

```
<?php
$r = ResourceBundle::create( 'es', "/usr/share/data/myapp");
echo $r['teststring'];
?>
```

O exemplo acima produzirá:

```
¡Hola, mundo!
```

### Veja também

- [resourcebundle\_get()](resourcebundle.get.md) - Obtém os dados do pacote

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
