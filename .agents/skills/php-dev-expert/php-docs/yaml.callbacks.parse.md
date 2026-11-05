# Funções de retorno de análise

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaml.callbacks.parse.php

---

## Funções de retorno de análise

Funções de análise do tipo [callable](language.types.callable.md) são chamadas pelas funções
[yaml\_parse()](function.yaml-parse.md), [yaml\_parse\_file()](function.yaml-parse-file.md) ou
[yaml\_parse\_url()](function.yaml-parse-url.md) quando uma etiqueta YAML registrada é
encontrada. A função de retorno recebe o valor da entidade etiquetada, a etiqueta e
sinalizadores indicando o estilo da entidade escalar. A função deve retornar os dados
que o analisador YAML deve emitir para esta entidade.

**Exemplo #1 Exemplo de função de retorno de análise**

```
<?php
/**
 * Função de retorno de análise para etiquetas YAML.
 * @param mixed $value Dados do arquivo YAML
 * @param string $tag Etiqueta que disparou a chamada à função
 * @param int $flags Estilo da entidade escalar (consulte YAML_*_SCALAR_STYLE)
 * @return mixed Valor que o analisador YAML deve emitir para o valor fornecido
 */
function tag_callback ($value, $tag, $flags) {
  var_dump(func_get_args()); // depuração
  return "Olá, {$value}";
}

$yaml = <<<YAML
cumprimento: !exemplo/ola Mundo
YAML;

$result = yaml_parse($yaml, 0, $ndocs, array(
    '!exemplo/ola' => 'tag_callback',
  ));

var_dump($result);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  [0]=>
  string(5) "Mundo"
  [1]=>
  string(12) "!exemplo/ola"
  [2]=>
  int(1)
}
array(1) {
  ["cumprimento"]=>
  string(10) "Olá, Mundo"
}
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
