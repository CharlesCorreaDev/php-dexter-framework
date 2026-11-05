# Definindo vários namespaces no mesmo arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.namespaces.definitionmultiple.php

---

## Definindo vários namespaces no mesmo arquivo

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

Vários namespaces também podem ser declarados no mesmo arquivo. Existem duas sintaxes
permitidas.

**Exemplo #1 Declarando vários namespaces, sintaxe de combinação simples**

```
<?php
namespace MeuProjeto;

const CONEXAO_OK = 1;
class Conexao { /* ... */ }
function conectar() { /* ... */  }

namespace OutroProjeto;

const CONEXAO_OK = 1;
class Conexao { /* ... */ }
function conectar() { /* ... */  }
```

Essa sintaxe não é recomendada para combinar namespaces em um único arquivo.
Em vez disso, é recomendado usar a sintaxe alternativa de colchetes.

**Exemplo #2 Declarando vários namespaces, sintaxe de colchetes**

```
<?php
namespace MeuProjeto {

const CONEXAO_OK = 1;
class Conexao { /* ... */ }
function conectar() { /* ... */  }
}

namespace OutroProjeto {

const CONEXAO_OK = 1;
class Conexao { /* ... */ }
function conectar() { /* ... */  }
}
```

É altamente desaconselhado como prática de programação combinar vários namespaces no
mesmo arquivo. O principal caso de uso é combinar vários scripts PHP no mesmo
arquivo.

Para combinar código global sem namespace com código com namespace, apenas a sintaxe de colchetes é
suportada. O código global deve ser
encapsulado em uma declaração de namespace sem nome de namespace, como em:

**Exemplo #3 Declarando vários namespaces e código sem namespace**

```
<?php
namespace MeuProjeto {

const CONEXAO_OK = 1;
class Conexao {
    public static function iniciar() {
        print __METHOD__ . "\n";
    }
}

function conectar() {
    print __FUNCTION__ . "\n";
}
}

namespace { // código global
print strlen("olá") . "\n";
MeuProjeto\conectar();
MeuProjeto\Conexao::iniciar();
}
```

Nenhum código PHP pode existir fora dos colchetes do namespace, exceto uma declaração
declare de abertura.

**Exemplo #4 Declarando vários namespaces e código sem namespace**

```
<?php
declare(strict_types=1);
namespace MeuProjeto {

const CONEXAO_OK = 1;
class Conexao {
    public static function iniciar() {
        print __METHOD__ . "\n";
    }
}

function conectar() {
    print __FUNCTION__ . "\n";
}
}

namespace { // código global
print strlen("olá") . "\n";
MeuProjeto\conectar();
MeuProjeto\Conexao::iniciar();
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
