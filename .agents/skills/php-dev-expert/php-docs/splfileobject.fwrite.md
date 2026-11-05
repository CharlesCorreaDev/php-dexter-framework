# Escreve no arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.fwrite.php

---

# SplFileObject::fwrite

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::fwrite — Escreve no arquivo

### Descrição

public function **SplFileObject::fwrite**([string](language.types.string.md) `$data`, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

Escreve o conteúdo do parâmetro `data` no arquivo.

### Parâmetros

`data`
:   A string a ser escrita no arquivo.

`length`
:   Se o argumento `length` for do tipo [int](language.types.integer.md), a escrita será
    interrompida após `length` bytes terem sido escritos ou
    quando o final de `data` for alcançado, o que ocorrer
    primeiro.

### Valor Retornado

Retorna o número de bytes escritos, ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | `length` agora pode ser nulo. |
| 7.4.0 | A função agora retorna **`false`** em vez de zero em caso de falha. |

### Examples

**Exemplo #1 Exemplo de **SplFileObject::fwrite()****

```
<?php
$file = new SplFileObject("fwrite.txt", "w");
$written = $file->fwrite("12345");
echo "Wrote $written bytes to file";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Wrote 5 bytes to file
```

### Veja também

- [fwrite()](function.fwrite.md) - Escrita binary-safe em arquivos

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
