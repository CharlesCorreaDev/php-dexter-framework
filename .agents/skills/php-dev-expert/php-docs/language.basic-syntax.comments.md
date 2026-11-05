# Comentários

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.basic-syntax.comments.php

---

## Comentários

O PHP suporta comentários no estilo C, C++ e Unix shell (estilo Perl). Por exemplo:

**Exemplo #1 Comentários**

```
<?php
    echo "Isto é um teste\n"; // Este é um comentário de uma linha no estilo C++
    /* Este é um comentário de várias linhas
       mais uma linha de comentário */
    echo "Este é mais um teste\n";
    echo "Um teste final\n"; # Este é um comentário de uma linha no estilo shell
?>
```

Os estilos de comentário de uma linha comentam apenas até o final da
linha ou do bloco atual de código PHP, o que ocorrer primeiro.
Isso significa que o código HTML após `// ... ?>`
ou `# ... ?>` SERÁ impresso:
?> sai do modo PHP e retorna ao modo HTML, e
`//` ou `#` não podem influenciar isso.

**Exemplo #2 Comentários de uma linha**

```
<h1>Este é um <?php # echo 'simples';?> exemplo</h1>
<p>O cabeçalho acima dirá 'Este é um exemplo'.</p>
```

Os comentários no estilo C terminam no primeiro `*/` encontrado.
Certifique-se de não aninhar comentários no estilo C. É fácil cometer esse
erro ao tentar comentar um grande bloco de código.

```
<?php
 /*
    echo 'Isto é um teste'; /* Este comentário causará um problema */
 */
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
