# Testa se a implementação DOM implementa um recurso específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domimplementation.hasfeature.php

---

# DOMImplementation::hasFeature

(PHP 5, PHP 7, PHP 8)

DOMImplementation::hasFeature — 
Testa se a implementação DOM implementa um recurso específico

### Descrição

public function **DOMImplementation::hasFeature**([string](language.types.string.md) `$feature`, [string](language.types.string.md) `$version`): [bool](language.types.boolean.md)

Testa se a implementação DOM implementa um
`feature` específico.

Pode-se encontrar uma lista de todos os recursos na seção de [» Conformidade](https://www.w3.org/TR/2000/REC-DOM-Level-2-Core-20001113/introduction.html#ID-Conformance) da
especificação DOM.

### Parâmetros

`feature`
:   O recurso a ser testado.

`version`
:   O número da versão do `feature` a ser testado. Em
    nível 2, isso pode ser `2.0` ou
    `1.0`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Chamar esta função estaticamente agora lançará um [Error](class.error.md). Anteriormente, era gerado um **`E_DEPRECATED`**. |

### Examples

**Exemplo #1 Testando a Implementação DOM**

```
<?php

$features = array(
  'Core'           => 'Core module',
  'XML'            => 'XML module',
  'HTML'           => 'HTML module',
  'Views'          => 'Views module',
  'Stylesheets'    => 'Style Sheets module',
  'CSS'            => 'CSS module',
  'CSS2'           => 'CSS2 module',
  'Events'         => 'Events module',
  'UIEvents'       => 'User interface Events module',
  'MouseEvents'    => 'Mouse Events module',
  'MutationEvents' => 'Mutation Events module',
  'HTMLEvents'     => 'HTML Events module',
  'Range'          => 'Range module',
  'Traversal'      => 'Traversal module'
);

$implementation = new DOMImplementation;

foreach ($features as $key => $name) {
  if ($implementation->hasFeature($key, '2.0')) {
    echo "Tem o recurso $name\n";
  } else {
    echo "Falta o recurso $name\n";
  }
}

?>
```

### Veja também

- [DOMNode::isSupported()](domnode.issupported.md) - Verifica se o recurso é suportado para a versão especificada

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
