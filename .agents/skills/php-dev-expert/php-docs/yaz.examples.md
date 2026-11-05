# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaz.examples.php

---

# Examples

PHP/YAZ mantém o controle de conexões com alvos
(Z-Associations). Um recurso representa uma conexão com um
alvo.

O script abaixo demonstra o recurso de pesquisa paralela da
API. Quando invocado sem argumentos, ele imprime um formulário de consulta; senão
(os argumentos são fornecidos) ele pesquisa os alvos conforme fornecido no array
`host`.

**Exemplo #1 Pesquisa paralela usando Yaz**

```
<?php
$host=$_REQUEST[host];
$query=$_REQUEST[query];
$num_hosts = count($host);
if (empty($query) || count($host) == 0) {
    echo '<form method="get">
    <input type="checkbox"
    name="host[]" value="bagel.indexdata.dk/gils" />
        Teste GILS
    <input type="checkbox"
    name="host[]" value="localhost:9999/Default" />
        Teste local
    <input type="checkbox" checked="checked"
    name="host[]" value="z3950.loc.gov:7090/voyager" />
        Biblioteca do Congresso
    <br />
    Consulta RPN:
    <input type="text" size="30" name="query" />
    <input type="submit" name="action" value="Pesquisar" />
    </form>
    ';
} else {
    echo 'Você pesquisou por ' . htmlspecialchars($query) . '<br />';
    for ($i = 0; $i < $num_hosts; $i++) {
        $id[] = yaz_connect($host[$i]);
        yaz_syntax($id[$i], "usmarc");
        yaz_range($id[$i], 1, 10);
        yaz_search($id[$i], "rpn", $query);
    }
    yaz_wait();
    for ($i = 0; $i < $num_hosts; $i++) {
        echo '<hr />' . $host[$i] . ':';
        $error = yaz_error($id[$i]);
        if (!empty($error)) {
            echo "Erro: $error";
        } else {
            $hits = yaz_hits($id[$i]);
            echo "Contagem de resultados $hits";
        }
        echo '<dl>';
        for ($p = 1; $p <= 10; $p++) {
            $rec = yaz_record($id[$i], $p, "string");
            if (empty($rec)) continue;
            echo "<dt><b>$p</b></dt><dd>";
            echo nl2br($rec);
            echo "</dd>";
        }
        echo '</dl>';
    }
}
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
