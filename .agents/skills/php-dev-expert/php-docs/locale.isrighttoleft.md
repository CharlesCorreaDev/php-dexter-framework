# Verifica se uma localidade usa um sistema de escrita da direita para a esquerda

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.isrighttoleft.php

---

# Locale::isRightToLeft

# locale\_is\_right\_to\_left

(No version information available, might only be in Git)

Locale::isRightToLeft -- locale\_is\_right\_to\_left — Verifica se uma localidade usa um sistema de escrita da direita para a esquerda

### Descrição

Estilo orientado a objetos

public
static
function **Locale::isRightToLeft**(
[string](language.types.string.md) `$locale`
 = ""
): [bool](language.types.boolean.md)

Estilo procedural

function **locale\_is\_right\_to\_left**([string](language.types.string.md) `$locale` = ""): [bool](language.types.boolean.md)

Determina se uma localidade usa um sistema de escrita da direita para a esquerda.

Este método se baseia na biblioteca ICU e avalia a escrita dominante
associada à localidade.

### Parâmetros

`locale`
:   O identificador de localidade. Se estiver vazio, a localidade padrão será usada.

### Valor Retornado

Retorna **`true`** se a localidade usa um sistema de escrita da
direita para a esquerda ou **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Adicionado o método **Locale::isRightToLeft()**. |

### Examples

**Exemplo #1 Verificando a direção do texto para uma localidade**

```
<?php

var_dump(Locale::isRightToLeft('en-US'));
var_dump(Locale::isRightToLeft('ar'));
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

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
