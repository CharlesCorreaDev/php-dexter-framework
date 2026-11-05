# Palavra-chave namespace e constante __NAMESPACE__

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.namespaces.nsconstants.php

---

## Palavra-chave namespace e constante \_\_NAMESPACE\_\_

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

O PHP suporta duas maneiras de acessar elementos de forma abstrata dentro do namespace atual,
a constante mágica **`__NAMESPACE__`** e a palavra-chave
`namespace`.

O valor de **`__NAMESPACE__`** é uma string que contém o nome do namespace
atual. Em código global, sem namespace, ela contém uma string vazia.

**Exemplo #1 Exemplo de \_\_NAMESPACE\_\_, código com namespace**

```
<?php
namespace MeuProjeto;

echo '"', __NAMESPACE__, '"'; // produz "MeuProjeto"
```

**Exemplo #2 Exemplo de \_\_NAMESPACE\_\_, código global**

```
<?php
echo '"', __NAMESPACE__, '"'; // produz ""
```

A constante **`__NAMESPACE__`** é útil para construir nomes de forma
dinâmica, por exemplo:

**Exemplo #3 Usando \_\_NAMESPACE\_\_ para construção dinâmica de nomes**

```
<?php
namespace MeuProjeto;

function get($nomedaclasse)
{
    $a = __NAMESPACE__ . '\\' . $nomedaclasse;
    return new $a;
}
```

A palavra-chave `namespace` pode ser usada para solicitar explicitamente
um elemento do namespace atual ou um subnamespace. Ela é o equivalente
para namespaces do operador `self` para classes.

**Exemplo #4 O operador namespace, em um namespace**

```
<?php
namespace MeuProjeto;

use bla\bla as meu; // Veja "Usando namespaces: Apelidando/Importando"

bla\meu(); // chama a função MeuProjeto\bla\meu()
namespace\bla\meu(); // chama a função MeuProjeto\bla\meu()

namespace\funcao(); // chama a função MeuProjeto\funcao()
namespace\sub\funcao(); // chama a função MeuProjeto\sub\funcao()
namespace\nomedaclasse::metodo(); // chama o método estático "metodo" da classe MeuProjeto\nomedaclasse
$a = new namespace\sub\nomedaclasse(); // instancia um objeto da classe MeuProjeto\sub\nomedaclasse
$b = namespace\CONSTANTE; // atribui o valor da constante MeuProjeto\CONSTANTE a $b
```

**Exemplo #5 O operador namespace, em código global**

```
<?php

namespace\funcao(); // chama a função funcao()
namespace\sub\funcao(); // chama a função sub\funcao()
namespace\nomedaclasse::metodo(); // chama o método estático "metodo" da classe nomedaclasse
$a = new namespace\sub\nomedaclasse(); // instancia um objeto da classe sub\nomedaclasse
$b = namespace\CONSTANTE; // atribui o valor da constante CONSTANTE a $b
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
