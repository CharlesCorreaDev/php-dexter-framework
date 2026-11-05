# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fdf.examples.php

---

# Examples

Os exemplos a seguir mostram apenas a avaliação dos dados do formulário.

**Exemplo #1 Avaliando um documento FDF**

```
<?php
// Abre fdf a partir da string de entrada fornecida pela extensão
// O formulário pdf continha vários campos de texto de entrada com os nomes
// volume, date, comment, publisher, preparer, e duas caixas de seleção
// show_publisher e show_preparer.
$fdf = fdf_open_string($HTTP_FDF_DATA);
$volume = fdf_get_value($fdf, "volume");
echo "O campo volume tem o valor '<b>$volume</b>'<br />";

$date = fdf_get_value($fdf, "date");
echo "O campo date tem o valor '<b>$date</b>'<br />";

$comment = fdf_get_value($fdf, "comment");
echo "O campo comment tem o valor '<b>$comment</b>'<br />";

if (fdf_get_value($fdf, "show_publisher") == "On") {
    $publisher = fdf_get_value($fdf, "publisher");
    echo "O campo publisher tem o valor '<b>$publisher</b>'<br />";
} else
    echo "O publisher não deve ser mostrado.<br />";

if (fdf_get_value($fdf, "show_preparer") == "On") {
    $preparer = fdf_get_value($fdf, "preparer");
    echo "O campo preparer tem o valor '<b>$preparer</b>'<br />";
} else
    echo "O preparer não deve ser mostrado.<br />";
fdf_close($fdf);
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
