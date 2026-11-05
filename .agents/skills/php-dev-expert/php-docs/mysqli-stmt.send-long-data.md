# Envia dados em blocos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.send-long-data.php

---

# mysqli\_stmt::send\_long\_data

# mysqli\_stmt\_send\_long\_data

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::send\_long\_data -- mysqli\_stmt\_send\_long\_data — Envia dados em blocos

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::send\_long\_data**([int](language.types.integer.md) `$param_num`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_stmt\_send\_long\_data**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`, [int](language.types.integer.md) `$param_num`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

Permite enviar dados de parâmetros ao servidor em pedaços (ou blocos), por exemplo, se o
tamanho de um BLOB exceder o tamanho de `max_allowed_packet`.
Esta função pode ser chamada múltiplas vezes para enviar as partes de um valor de dados
binários ou de caracteres para uma coluna, que precisa ser do tipo TEXT ou BLOB.

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

`param_num`
:   Indica a qual parâmetro os dados serão associados. Parêmetros são
    numerados a partir de 0.

`data`
:   Uma string contendo os dados que devem ser enviados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
$stmt = $mysqli->prepare("INSERT INTO messages (message) VALUES (?)");
$null = NULL;
$stmt->bind_param("b", $null);
$fp = fopen("messages.txt", "r");
while (!feof($fp)) {
    $stmt->send_long_data(0, fread($fp, 8192));
}
fclose($fp);
$stmt->execute();
?>
```

### Veja também

- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução
- [mysqli\_stmt\_bind\_param()](mysqli-stmt.bind-param.md) - Liga variáveis a uma declaração preparada como parâmetros

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
