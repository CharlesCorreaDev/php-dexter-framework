# Visão geral de Namespaces

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.namespaces.rationale.php

---

## Visão geral de Namespaces

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

O que são namespaces? Na definição mais ampla, os namespaces (na tradução literal, "espaços de nomes") são uma forma de encapsular
itens. Isso é visto como um conceito abstrato em muitos lugares. Por exemplo, em qualquer
sistema operacional, os diretórios servem para agrupar arquivos relacionados, e agem como um namespace para
os arquivos dentro deles. Como um exemplo concreto, o arquivo `foo.txt` pode
existir em ambos os diretórios `/home/greg` e `/home/other`,
mas duas cópias de `foo.txt` não podem coexistir em um mesmo diretório. Além
disso, para acessar o arquivo `foo.txt` fora do
diretório `/home/greg`, o nome do diretório deve ser prefixado ao nome
do arquivo usando o separador de diretórios para obter `/home/greg/foo.txt`. Esse
mesmo princípio se estende a namespaces no mundo da programação.

No mundo PHP, os namespaces são projetados para resolver dois problemas que os autores
de bibliotecas e aplicações encontram ao criar elementos de código reutilizáveis,
como classes ou funções:

1. Colisões de nomes entre o código criado e
   classes/funções/constantes internas do PHP ou classes/funções/constantes de terceiros.
2. Capacidade de criar apelidos (ou encurtar) Nomes\_Extralongos projetados para aliviar o primeiro problema,
   melhorando a legibilidade do código-fonte.

Os Namespaces do PHP fornecem uma maneira de agrupar classes, interfaces,
funções e constantes relacionadas. Aqui está um exemplo da sintaxe de namespace em PHP:

**Exemplo #1 Exemplo da sintaxe de namespace**

```
<?php
namespace meu\nome; // veja a seção "Definindo Namespaces"

class MinhaClasse {}
function minhafuncao() {}
const MINHACONST = 1;

$a = new MinhaClasse;
print $a::class . "\n";
$c = new \meu\nome\MinhaClasse; // veja a seção "Espaço Global"
print $c::class . "\n";

$a = strlen('oi'); // veja a seção "Usando namespaces: recorrendo a
                   // funções/constantes globais"
print $a . "\n";

$d = namespace\MINHACONST; // veja a seção "operador de namespace
                           // e constante __NAMESPACE__"
print $d . "\n";
$d = __NAMESPACE__ . '\MINHACONST';
echo constant($d); // veja a seção "Namespaces e recursos de linguagem dinâmica"
```

> **Nota**:
>
> Nomes de namespace não diferenciam maiúsculas de minúsculas.

> **Nota**:
>
> O nome do namespace `PHP` e os nomes compostos que começam
> com esse nome (como `PHP\Classes`) são reservados para uso interno da linguagem
> e não devem ser usados no código criado pelo usuário.

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
