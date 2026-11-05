# Obtém o tamanho compactado da entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarentry.getpackedsize.php

---

# RarEntry::getPackedSize

(PECL rar >= 0.1)

RarEntry::getPackedSize — Obtém o tamanho compactado da entrada

### Descrição

public function **RarEntry::getPackedSize**(): [int](language.types.integer.md)

Obtém o tamanho compactado da entrada do arquivo.

> **Nota**:
>
> Observe que em plataformas com comprimentos de 32 bits (que inclui Windows
> x64), o tamanho máximo retornado é limitado a 2 GiB. Verifique a constante
> **`PHP_INT_MAX`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tamanho compactado ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL rar 2.0.0 | Este método agora retorna valores corretos de tamanhos compactados maiores que 2 GiB em plataformas com [int](language.types.integer.md)s de 64 bits e nunca retorna valores negativos em outras plataformas. |

### Examples

**Exemplo #1 Exemplo de **RarEntry::getPackedSize()****

```
<?php

$rar_file = rar_open('exemplo.rar') or die("Falha ao abrir arquivo Rar");

$entry = rar_entry_get($rar_file, 'Dir/arquivo.txt') or die("Falha ao pesquisar tal entrada");

echo "Tamanho compactado de " . $entry->getName() . " = " . $entry->getPackedSize() . " bytes";

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
