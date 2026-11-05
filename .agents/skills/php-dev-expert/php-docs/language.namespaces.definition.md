# Definindo namespaces

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.namespaces.definition.php

---

## Definindo namespaces

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

Embora qualquer código PHP válido possa estar contido em um namespace, apenas os seguintes
tipos de código são afetados por namespaces: classes (incluindo abstratas, traits e enumerações), interfaces,
funções e constantes.

Namespaces são declarados usando a palavra-chave `namespace`.
Um arquivo contendo um namespace deve declarar o namespace
no início do arquivo antes de qualquer outro código - com uma exceção: a
palavra-chave [declare](control-structures.declare.md).

**Exemplo #1 Declarando um único namespace**

```
<?php
namespace MeuProjeto;

const CONEXAO_OK = 1;
class Conexao { /* ... */ }
function conectar() { /* ... */ }
```

> **Nota**:
>
> Nomes totalmente qualificados (ou seja, nomes que começam com uma barra invertida) não são permitidos em declarações
> de namespace, por serem construções interpretadas como expressões de namespace relativos.

A única construção de código permitida antes de uma declaração de namespace é a
declaração `declare`, para definir a codificação de um arquivo-fonte. Além disso,
nenhum código não-PHP pode preceder uma declaração de namespace, incluindo espaço em branco extra:

**Exemplo #2 Declarando um único namespace**

```
<html>
<?php
namespace MeuProjeto; // erro fatal - namespace precisa ser a primeira declaração no script
```

Além disso, ao contrário de qualquer outra construção do PHP, o mesmo namespace pode ser definido
em vários arquivos, permitindo a divisão do conteúdo de um namespace no sistema de arquivos.

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
