# Obtém o nome da entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarentry.getname.php

---

# RarEntry::getName

(PECL rar >= 0.1)

RarEntry::getName — Obtém o nome da entrada

### Descrição

public function **RarEntry::getName**(): [string](language.types.string.md)

Retorna o nome (com caminho) da entrada do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome da entrada como uma string ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL rar 2.0.0 | A partir da versão 2.0.0, a string retornada é codificada em Unicode/UTF-8. |

### Examples

**Exemplo #1 Exemplo de **RarEntry::getName()****

```
<?php

//este exemplo é seguro mesmo em páginas não codificadas em UTF-8
//para aqueles codificados em UTF-8, a chamada para mb_convert_encoding é desnecessária

$rar_file = rar_open('exemplo.rar') or die("Falha ao abrir arquivo Rar");

$entry = rar_entry_get($rar_file, 'Dir/arquivo.txt') or die("Falha ao pesquisar tal entrada");

echo "Entry name: " . mb_convert_encoding(
    htmlentities(
        $entry->getName(),
        ENT_COMPAT,
        "UTF-8"
    ),
    "HTML-ENTITIES",
    "UTF-8"
);

?>
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
