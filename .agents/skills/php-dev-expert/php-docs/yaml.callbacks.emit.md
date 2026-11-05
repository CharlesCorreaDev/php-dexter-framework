# Funções de retorno de emissão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaml.callbacks.emit.php

---

## Funções de retorno de emissão

Funções de emissão são chamadas quando uma instância de uma classe registrada é
emitida pelas funções [yaml\_emit()](function.yaml-emit.md) ou
[yaml\_emit\_file()](function.yaml-emit-file.md). A função recebe o objeto a
ser emitido. A função deve retornar um array com duas chaves:
"`tag`" e "`data`".
O valor associado à chave "`tag`" deve
ser uma string a ser usada como a etiqueta YAML no resultado. O valor associado
à chave "`data`" será codificado como YAML
e emitido no lugar do objeto interceptado.

**Exemplo #1 Exemplo de função de emissão**

```
<?php
class EmitExample {
  public $data;    // os dados podem estar em qualquer tipo adequado de pecl/yaml

  public function __construct ($d) {
    $this->data = $d;
  }

  /**
   * Função de emissão Yaml, referida na chamada a yaml_emit por nome de classe.
   *
   * Esperado retornar um array com dois valores:
   *   - 'tag': etiqueta personalizada para esta serialização
   *   - 'data': valor a ser convertido para yaml (array, string, booleano, número)
   *
   * @param object $obj Objeto a ser emitido
   * @return array Etiqueta e dados substitutos a serem emitidos
   */
  public static function yamlEmit (EmitExample $obj) {
    return array(
      'tag' => '!example/emit',
      'data' => $obj->data,
    );
  }
}

$emit_callbacks = array(
  'EmitExample' => array('EmitExample', 'yamlEmit')
);

$t = new EmitExample(array('a','b','c'));
$yaml = yaml_emit(
  array(
    'example' => $t,
  ),
  YAML_ANY_ENCODING,
  YAML_ANY_BREAK,
  $emit_callbacks
);
var_dump($yaml);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(43) "---
example: !example/emit
- a
- b
- c
...
"
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
