# Usando namespaces: recorrendo ao espaço global para funções e constantes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.namespaces.fallback.php

---

## Usando namespaces: recorrendo ao espaço global para funções e constantes

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

Dentro de um namespace, quando o PHP encontra um nome não qualificado em um nome de classe, função ou
contexto de constante, eles são resolvidos com diferentes prioridades. Nomes de classe sempre
são resolvidos para o nome do namespace atual. Portanto, para acessar classes internas ou classes de usuário
sem namespace, deve-se referir a elas com o nome totalmente qualificado como em:

**Exemplo #1 Acessando classes globais em um namespace**

```
<?php
namespace A\B\C;
class Exception extends \Exception {}

$a = new Exception('oi'); // $a é um objeto da classe A\B\C\Exception
var_dump($a::class);
$b = new \Exception('oi'); // $b é um objeto da classe Exception
var_dump($b::class);

$c = new ArrayObject; // erro fatal, classe A\B\C\ArrayObject não encontrada
```

Para funções e constantes, o PHP recorrerá a funções ou constantes globais
se a função ou constante com namespace não existir.

**Exemplo #2 Recorrendo a funções/constantes globais em um namespace**

```
<?php
namespace A\B\C;

const E_ERROR = 45;
function strlen($str)
{
    return \strlen($str) - 1;
}

echo E_ERROR, "\n"; // imprime "45"
echo INI_ALL, "\n"; // imprime "7" - recorre à constante INI_ALL global

echo strlen('oi'), "\n"; // imprime "1"
if (is_array('oi')) { // imprime "não é array"
    echo "é array\n";
} else {
    echo "não é array\n";
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
