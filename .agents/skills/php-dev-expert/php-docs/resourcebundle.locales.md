# Obtém as localidades suportadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/resourcebundle.locales.php

---

# ResourceBundle::getLocales

# resourcebundle\_locales

(PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0)

ResourceBundle::getLocales -- resourcebundle\_locales — Obtém as localidades suportadas

### Descrição

Estilo orientado a objetos

public static function **ResourceBundle::getLocales**([string](language.types.string.md) `$bundle`): [array](language.types.array.md)|[false](language.types.singleton.md)

Estilo procedural

function **resourcebundle\_locales**([string](language.types.string.md) `$bundle`): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém as localidades disponíveis a partir do pacote informado.

### Parâmetros

`bundle`
:   Caminho do ResourceBundle de onde se obterão as localidades disponíveis, ou
    uma string vazia para a lista padrão de localidades.

### Valor Retornado

Retorna a lista de localidades suportadas pelo pacote, ou **`false`** em caso de erros.

### Examples

**Exemplo #1 Exemplo da função **resourcebundle\_locales()****

```
<?php
$bundle = "/user/share/data/myapp";
echo join(PHP_EOL, resourcebundle_locales($bundle));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
es
root
```

**Exemplo #2 Exemplo orientado à objetos**

```
<?php
$bundle = "/usr/share/data/myapp";
$r = new ResourceBundle( 'es', $bundle);
echo join("\n", $r->getLocales($bundle));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
es
root
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
